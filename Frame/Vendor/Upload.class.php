<?php
 namespace Frame\Vendor;

 class Upload{
    public function uploadPhoto($files,$phone_type){
        $targetDir = ROOT_PATH."Upload".DS.PLAT.DS.$phone_type.DS.date("Y-m-d").DS; // 업로드할 디렉토리 경로
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
        $imgPath = DS."Upload".DS.PLAT.DS.$phone_type.DS.date("Y-m-d").DS;
        $severName = $protocol.":".DS.DS.$_SERVER['SERVER_NAME'];
        //폴더없으면 작성해주는 부분
        if(!is_dir($targetDir)){
            mkdir($targetDir);
        }

        $allowTypes = array('jpg', 'jpeg', 'png', 'gif'); // 업로드 가능한 파일 형식
        $maxSize = 1 * 1024 * 1024; // 파일 최대 크기(1MB)

        // 파일이 제대로 업로드되었는지 확인
        if (!empty($files['name'][0])) {
            $fileNames = array();
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
                
                // 파일 이름 중복 방지를 위해 랜덤 이름 부여
                $newFileName = uniqid('', true) . '.' . $fileType;
                $targetFilePath = $targetDir . $newFileName;

                // 파일 업로드
                if (move_uploaded_file($fileTempName, $targetFilePath)) {
                    $fileNames[] = $severName.$imgPath.$newFileName;
                } else {
                    $errors[] = "Error uploading $fileName.";
                }
            }
            
            // 업로드 에러 목록 출력
            if (!empty($errors)) {
                echo "사진을 다시 업로드 해주세요 <br>";
                foreach ($errors as $error) {
                    echo $error . "<br>";
                }
            }
            return $fileNames;
        }
        }
 }
?>