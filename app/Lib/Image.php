<?php
require ROOT . '/Vendor/autoload.php';//compsoer用
class Image {
    private $file;
    private $uploaddir;
    //private $uploaddir_rel = '/slim/public/img/';
    private $file_name;
    public $file_type;
    public $message;

    public function __construct($file,$uploaddir = IMAGES) {
        $this->setFile($file);
        $this->file_type = $this->getImageType();
        $this->setFileName();
        $this->message = $this->checkFileUploaded();
        $this->uploaddir = $uploaddir;
    }

    private function setFile($file) {
        $this->file = $file;
    }

    private function setFileName() {
        $this->file_name =  sha1(uniqid(rand(),true)) . '.' . $this->getImageType();
    }

    private function getImageType() {
        $file_type = substr($this->file['image']['name'], strrpos($this->file['image']['name'], '.') + 1);
        switch($file_type) {
        case 'png':
        case 'jpg':
        case 'jpeg':
        case 'gif':
            return $file_type;
        default;
            return false;
        }
    }

    private function checkFileUploaded() {
        switch($this->file['image']['error']) {
        case UPLOAD_ERR_OK:
            $message = true;
            break;
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
        case UPLOAD_ERR_PARTIAL:
        case UPLOAD_ERR_NO_FILE:
        case UPLOAD_ERR_NO_TMP_DIR:
        case UPLOAD_ERR_CANT_WRITE:
        case UPLOAD_ERR_EXTENSION:
            $message = false;
            break;
        }
        return $message;
    }

    public function fileupload() {
        $uploadfile = $this->uploaddir . $this->file_name;
        //var_dump($uploadfile);
        if (move_uploaded_file($this->file['image']['tmp_name'],$uploadfile)) {
            $imagine = new Imagine\Gd\Imagine();
            $size  = new Imagine\Image\Box(450, 350);
            $image = $imagine->open($uploadfile);
            $image->resize($size)->save($uploadfile);
            return $this->file_name;
        } else {
            return false;
        }
    }
}
