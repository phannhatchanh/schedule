<?php
$dem = 0;
$check = 0;
function xuliupload($loaitkb)
{
    if($_FILES[$loaitkb]['name'] != NULL)
        {
            GLOBAL $dem;
            GLOBAL $check;
            $check = 1; 
            if ($_FILES[$loaitkb]['type'] == "application/msword" || $_FILES[$loaitkb]['type'] == "application/pdf" || 
            $_FILES[$loaitkb]['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
            { 
                if ($_FILES[$loaitkb]['size'] > 2097152) {
                    echo "<li class='text-red-500'>File không được lớn hơn 2MB</li>";
                } else {
                    $path = "../data/";
                    $tmp_name = $_FILES[$loaitkb]['tmp_name'];
                    $name = $loaitkb;
                    
                    if ($_FILES[$loaitkb]['type'] == "application/msword")
                        $name=$name.".rtf";
                    else
                        if ($_FILES[$loaitkb]['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
                            $name=$name.".docx";
                        else
                            $name=$name.".pdf";
                    
                    $type = $_FILES[$loaitkb]['type']; 
                    $size = $_FILES[$loaitkb]['size'];
                    move_uploaded_file($tmp_name,$path.$name); 
                    echo "<li class='text-green-500'>Đã upload thành công : ".$name."</li>";
                    
                    $dem++;
                    
                    $fp = @fopen('../go/'.$loaitkb.'.php', "w");
                    if (!$fp) {
                        echo '<li class="text-red-500">Đã xảy ra lỗi cập nhật link, Vui lòng liên hệ quản trị</li>';
                    } else {
                        $data = '<?php header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); header("Location: https://docs.google.com/gview?url=/tkb/data/'.$name.'&embedded=true"); ?>';
                        fwrite($fp, $data);
                        fclose($fp);
                    }
                }
            } else { 
                echo "<li class='text-red-500'>Định dạng file dành cho <strong>".$loaitkb."</strong> không được cho phép</li>";
            }
        }
    }

    if(isset($_POST['ok'])) {
        xuliupload("gvsang");
        xuliupload("gvchieu");	
        xuliupload("lopsang");
        xuliupload("lopchieu");
        xuliupload("tunggv");
        xuliupload("tunglop");
        xuliupload("dthsg");
        
        if ($check==0) {
            echo "<li class='text-red-500'>Chưa có file nào được chọn.</li>";
        } else {
            date_default_timezone_set('Asia/Krasnoyarsk');
            
            $fp = @fopen('../lastupdate.js', "w");
            if (!$fp) {
                echo '<li class="text-red-500">Đã xảy ra lỗi cập nhật thời gian update, Vui lòng liên hệ quản trị </li>';
            } else {
                $data = 'document.write ("<span class=\'text-gray-500 text-xs\'>Cập nhật lần cuối vào lúc: '.date('H:i d/m/Y').'</span>");';
                fwrite($fp, $data);
                fclose($fp);
            }
            
            echo "<span class='text-gray-900'>Tổng ".$dem." file được upload thành công!</span>";
        }
    }
?>