<?php
namespace Frame\Vendor;

class PhotoCheck{

    public function photoErroCheck($files){
        $allowTypes = array('jpg', 'jpeg', 'png', 'gif'); // 업로드 가능한 파일 형식
        $maxSize = 1 * 1024 * 1024; // 파일 최대 크기(5MB)

        // 파일이 제대로 업로드되었는지 확인
        if (!empty($files['name'][0])) {
            $errors = array();
            
            // 업로드할 파일 개수만큼 반복
            foreach ($files['name'] as $key => $value) {
                $fileName = basename($files['name'][$key]);
                $fileTempName = $files['tmp_name'][$key];
                $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                $fileSize = $files['size'][$key];
                $fileError = $files['error'][$key];
                
                // 파일 크기, 형식, 에러 확인
                if ($fileSize > $maxSize) {
                    $errors[] = "$fileName 파일은 너무큰이미지입니다. 최대이미지사이즈는 1MB입니다.";
                    continue;
                }
                if (!in_array($fileType, $allowTypes)) {
                    $errors[] = "$fileName 파일형식이 잘못되였습니다. 오직 JPG, JPEG, PNG & GIF 파일확장자만 업로드 가능합니다";
                    continue;
                }
                if ($fileError !== UPLOAD_ERR_OK) {
                    $errors[] = "Error uploading $fileName. Error code: $fileError";
                    continue;
                }
                
                // 파일 MIME 타입 확인
                $finfo = finfo_open(FILEINFO_MIME_TYPE);
                $fileMimeType = finfo_file($finfo, $fileTempName);
                finfo_close($finfo);
                $allowedMimeTypes = array('image/jpeg', 'image/png', 'image/gif');
                if (!in_array($fileMimeType, $allowedMimeTypes)) {
                    $errors[] = "$fileName 파일은 이미지파일이 아닙니다.";
                    continue;
                }
            }

            // 업로드 에러 목록 출력
            if (!empty($errors)) {
                echo "사진을 다시 업로드 해주세요</br>";
                foreach ($errors as $error) {
                    echo $error . "<br>";
                }
                return false;
            }

            return true;
        }
    }
}
?>