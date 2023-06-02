<?php
// 업로드 디렉토리 경로
$upload_dir = './uploads/';

// 업로드한 파일들의 정보를 저장할 배열 초기화
$uploaded_files = array();

// 업로드한 파일들을 하나씩 처리
foreach ($_FILES['files']['error'] as $key => $error) {
  // 업로드한 파일의 정보 가져오기
  $name = $_FILES['files']['name'][$key];
  $tmp_name = $_FILES['files']['tmp_name'][$key];
  $size = $_FILES['files']['size'][$key];
  $type = $_FILES['files']['type'][$key];

  // 업로드한 파일이 없으면 다음 파일로 넘어감
  if ($error == UPLOAD_ERR_NO_FILE) {
    continue;
  }

  // 업로드한 파일이 올바른 이미지 파일인지 확인
  $finfo = finfo_open(FILEINFO_MIME_TYPE);
  $mime_type = finfo_file($finfo, $tmp_name);
  if (!in_array($mime_type, array('image/jpeg', 'image/png', 'image/gif'))) {
    echo 'Error: Only JPEG, PNG, and GIF images are allowed.';
    exit;
  }

  // 업로드한 파일이 지정된 용량 제한을 초과하는지 확인
  $max_size = 1024 * 1024; // 1MB
  if ($size > $max_size) {
    echo 'Error: The file size should be less than 1MB.';
    exit;
  }

  // 파일명 중복을 피하기 위해 파일명을 변경
  $extension = pathinfo($name, PATHINFO_EXTENSION);
  $new_name = md5(uniqid(rand(), true)) . ".$extension";

  // 파일을 업로드 디렉토리로 이동
  if (move_uploaded_file($tmp_name, $upload_dir . $new_name)) {
    // 업로드한 파일 정보를 배열에 저장
    $uploaded_files[] = array(
      'name' => $name,
      'new_name' => $new_name,
      'size' => $size,
      'type' => $type
    );
  } else {
    // 파일 업로드 실패시 에러메시지 출력
    echo 'Error: Failed to upload file.';
    exit;
  }
}

// 업로드한 파일들의 정보 출력
foreach ($uploaded_files as $file) {
  echo $file['name'] . ' has been uploaded as ' . $file['new_name'] . '<br>';
}

// 업로드 디렉토리 접근 권한 설정
chmod($upload_dir, 0755);

// 업로드된 파일 삭제
function delete_uploaded_files($dir) {
  $files = glob($dir . '*');
  foreach ($files as $file) {
    if (is_file($file)) {
      unlink($file);
    }
  }
}

// 업로드된 파일 삭제 예약
register_shutdown_function('delete_uploaded_files', $upload_dir);
?>
