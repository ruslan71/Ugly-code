<?php


class Image
{

    /**
	* Приватная функция, записывающая в поле type тип исходного изображения
	* 
	* @param $file string	Путь исходного файла	
	* @return boolean		TRUE, если файл является изображением. FALSE - в противном случае.
	*/
    /* 
	private function setType($file)
	{
		//$mime = mime_content_type($file);
        $mime = 'image/' . pathinfo($file, PATHINFO_EXTENSION);
//var_dump($mime); die;
		switch($mime)
		{
			case 'image/jpeg':
            case 'image/jpg':
				$this->type = "jpg";
				return true;
			case 'image/png':
				$this->type = "png";
				return true;
			case 'image/gif':
				$this->type = "gif";
				return true;
			default:
				return false;
		}
	}
    */

    /* @rb 2016.11.01  */
    private function setType($file)
	{
        $ftype = exif_imagetype($file) ;

		switch($ftype)
		{
			case IMAGETYPE_JPEG:
				$this->type = "jpg";
				return true;
			case IMAGETYPE_PNG:
				$this->type = "png";
				return true;
			case IMAGETYPE_GIF:
				$this->type = "gif";
				return true;
			default:
				return false;
		}
	}

