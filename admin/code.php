<?php
session_start();
include('../config/dbcon.php');
include('../functions/myfunctions.php');
if(isset($_POST['add_category_btn'])){
     $name = $_POST['name'];
     $slug = $_POST['slug'];
     $description = $_POST['description'];
     $meta_title = $_POST['meta_title'];
     $meta_description = $_POST['meta_description'];
     $meta_keywords = $_POST['meta_keywords'];
     $status = isset($_POST['status']) ? '1':'0';
     $popular = isset($_POST['popular']) ? '1':'0';
     $image = $_FILES['image']['name'];
     $path ="../uploads";

     $image_ext = pathinfo($image, PATHINFO_EXTENSION);
     $filename = time().'.'.$image_ext  ;

     $cate_query = "INSERT INTO categories 
     (name,slug,description,meta_title,meta_description,meta_keywords,status,popular,image)
     VALUES ('$name','$slug','$description','$meta_title','$meta_description','$meta_keywords','$status','$popular','$filename')
     ";

     $cate_query_run = mysqli_query($con,$cate_query);

     if($cate_query_run){
        move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
        redirect("Category Add Successfully","add-category.php");

     }
     else{
        redirect("Some Went Wrong","add-category.php");
     }

}

else if(isset($_POST['update_category_btn']))
{     
     $category_id = $_POST['category_id'];  
     $name = $_POST['name'];
     $slug = $_POST['slug'];
     $description = $_POST['description'];
     $meta_title = $_POST['meta_title'];
     $meta_description = $_POST['meta_description'];
     $meta_keywords = $_POST['meta_keywords'];
     $status = isset($_POST['status']) ? '1':'0';
     $popular = isset($_POST['popular']) ? '1':'0';

     $new_image = $_FILES['image']['name'];
     $old_image = isset($_POST['old_image']) ? $_POST['old_image'] : '';
     
     if($new_image != "")
     {
         // $update_filename = $new_image;
         $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
         $update_filename = time().'.'.$image_ext  ;
     }else
     {
         $update_filename = $old_image;
     }
     $path ="../uploads";

     $update_query ="UPDATE categories SET name='$name', slug='$slug', description='$description',
      meta_title='$meta_title',meta_description='$meta_description', meta_keywords='$meta_keywords',
     status='$status',popular='$popular' ,image='$update_filename' WHERE id='$category_id'";

     $update_query_run = mysqli_query($con,$update_query);
     if($update_query_run)
     {
      if($_FILES['image']['name'] != "")
      {
         move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$update_filename);
         if(file_exists("../uploads/".$old_image))
         {
            unlink("../uploads/".$old_image);
         }
      }
      redirect("Category Updated Successfully","edit-category.php?id=$category_id");
     }
     else 
     {
      redirect("Something Went Wrong","edit-category.php?id=$category_id");

     }

}
else if(isset($_POST['update_home_btn']))
{     
     $edihome_id = $_POST['edihome_id']; 
     $location = $_POST['location'];  
     $email = $_POST['email'];
     $link_fsb = $_POST['link_fsb'];
     $link_x = $_POST['link_x'];
     $link_pan = $_POST['link_pan'];
     $link_linked = $_POST['link_linked'];


     $new_image = $_FILES['image']['name'];
     $old_image = isset($_POST['old_image']) ? $_POST['old_image'] : '';
     
     if($new_image != "")
     {
         // $update_filename = $new_image;
         $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
         $update_filename = time().'.'.$image_ext  ;
     }else
     {
         $update_filename = $old_image;
     }
     $path ="../uploads";

     $update_query ="UPDATE topheader SET location='$location', email='$email', link_fsb='$link_fsb',link_x='$link_x', link_pan='$link_pan',link_linked='$link_linked',image='$update_filename' WHERE id='$edihome_id'";

     $update_query_run = mysqli_query($con,$update_query);
     if($update_query_run)
     {
      if($_FILES['image']['name'] != "")
      {
         move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$update_filename);
         if(file_exists("../uploads/".$old_image))
         {
            unlink("../uploads/".$old_image);
         }
      }
      redirect("Category Updated Successfully","edit-home_admin.php?id=$edihome_id");
     }
     else 
     {
      redirect("Something WEnt Wrong","edit-home_admin.php?id=$edihome_id");

     }

}
else if(isset($_POST['update_banner_btn']))
{     
     $banner_id = $_POST['banner_id']; 
     $name = $_POST['name'];  
     $slug = $_POST['slug'];
     $contact = $_POST['contact'];
     $download = $_POST['download'];
     


     $new_image = $_FILES['image']['name'];
     $old_image = isset($_POST['old_image']) ? $_POST['old_image'] : '';
     
     if($new_image != "")
     {
         // $update_filename = $new_image;
         $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
         $update_filename_banner = time().'.'.$image_ext  ;
     }else
     {
         $update_filename_banner = $old_image;
     }
     $path ="../uploads";

     $update_query = "UPDATE banner SET name=?, slug=?, contact=?, download=?, image=? WHERE id=?";
      $update_query_run = mysqli_prepare($con, $update_query);

      mysqli_stmt_bind_param($update_query_run, "sssssi", $name, $slug, $contact, $download, $update_filename, $banner_id);

      mysqli_stmt_execute($update_query_run);


     if($update_query_run)
     {
      if($_FILES['image']['name'] != "")
      {
         move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$update_filename_banner);
         if(file_exists("../uploads/".$old_image))
         {
            unlink("../uploads/".$old_image);
         }
      }
      redirect("Category Updated Successfully","banner_admin.php?id=$banner_id");
     }
     else 
     {
      redirect("Something WEnt Wrong","banner_admin.php?id=$banner_id");

     }

}


else if(isset($_POST['update_key_btn']))
{     
    $key_id = $_POST['key_id']; 
    $title1 = $_POST['title1'];  
    $title2 = $_POST['title2'];
    $title3 = $_POST['title3'];
    $title4 = $_POST['title4'];
    $title5 = $_POST['title5'];
    $title6 = $_POST['title6'];
    $title7 = $_POST['title7'];

    $update_query = "UPDATE keyprince SET title1=?, title2=?, title3=?, title4=?, title5=?, title6=?, title7=? WHERE id=?";
    $update_query_run = mysqli_prepare($con, $update_query);

    mysqli_stmt_bind_param($update_query_run, "sssssssi", $title1, $title2, $title3, $title4, $title5, $title6, $title7, $key_id);

    mysqli_stmt_execute($update_query_run);

    if($update_query_run)
    {
        redirect("KeyPrince Updated Successfully", "key-principles_admin.php?id=$key_id");
    }
    else 
    {
        redirect("Something Went Wrong", "key-principles_admin.php?id=$key_id");
    }
}

else if(isset($_POST['update_choose_btn']))
{     
     $choose_id = $_POST['choose_id'];  
     $title = $_POST['title'];
     $text = $_POST['text'];
     

     $update_query ="UPDATE choose SET title='$title', text='$text' WHERE id='$choose_id'";
     $update_query_run = mysqli_query($con,$update_query);
     if($update_query_run)
     {

      redirect("Choose Updated Successfully","edit-Choose.php?id=$choose_id");
     }
     else 
     {
      redirect("Something WEnt Wrong","edit-Choose.php?id=$choose_id");

     }

}

else if(isset($_POST['update_video_btn']))
{     
    $video_id = $_POST['youtube_id']; 
    $link = $_POST['link'];  
    
    $update_query = "UPDATE video SET link='$link'";
    $update_query_run = mysqli_query($con,$update_query);


    if($update_query_run)
    {
        redirect("Video Updated Successfully", "youtube.php?id=$video_id");
    }
    else 
    {
        redirect("Something Went Wrong", "youtube.php?id=$video_id");
    }
}

else if(isset($_POST['update_service_btn']))
{     
    $service_id = $_POST['service_id'];  
    $title = $_POST['title'];
    $text = $_POST['text'];
     
    // Use prepared statement to prevent SQL injection
    $update_query = "UPDATE services SET title=?, text=? WHERE id=?";
    $stmt = mysqli_prepare($con, $update_query);

    if ($stmt) {
        // Assuming 'id' is an integer
        mysqli_stmt_bind_param($stmt, "ssi", $title, $text, $service_id);

        // Execute the statement
        $update_query_run = mysqli_stmt_execute($stmt);

        // Check if the update was successful
        if($update_query_run)
        {
            redirect("Service Updated Successfully", "edit-services.php?id=$service_id");
        }
        else 
        {
            redirect("Something Went Wrong", "edit-services.php?id=$service_id");
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    }
    else {
        // Handle statement preparation error
        redirect("Error preparing statement", "edit-services.php?id=$service_id");
    }
}


else if(isset($_POST['update_smart_btn']))
{     
    $smart_id = $_POST['smart_id'];  
    $title = $_POST['title'];
    $text = $_POST['text'];
     
    // Use prepared statement to prevent SQL injection
    $update_query = "UPDATE smart SET title=?, text=? WHERE id=?";
    $stmt = mysqli_prepare($con, $update_query);

    if ($stmt) {
        // Assuming 'id' is an integer
        mysqli_stmt_bind_param($stmt, "ssi", $title, $text, $smart_id);

        // Execute the statement
        $update_query_run = mysqli_stmt_execute($stmt);

        // Check if the update was successful
        if($update_query_run)
        {
            redirect("Service Updated Successfully", "edit-smart.php?id=$smart_id");
        }
        else 
        {
            redirect("Something Went Wrong", "edit-smart.php?id=$smart_id");
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    }
    else {
        // Handle statement preparation error
        redirect("Error preparing statement", "edit-smart.php?id=$smart_id");
    }
}





else if(isset($_POST['update_clients_btn']))
{     
     $client_id = $_POST['client_id'];  
     $name = $_POST['name'];
     $job = $_POST['job'];
     $comment = $_POST['comment'];
     

     $new_image = $_FILES['image']['name'];
     $old_image = isset($_POST['old_image']) ? $_POST['old_image'] : '';
     
     if($new_image != "")
     {
         // $update_filename = $new_image;
         $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
         $update_filename = time().'.'.$image_ext  ;
     }else
     {
         $update_filename = $old_image;
     }
     $path ="../uploads";

     $update_query ="UPDATE clients SET name='$name', job='$job', comment='$comment',
     image='$update_filename' WHERE id='$client_id'";

     $update_query_run = mysqli_query($con,$update_query);
     if($update_query_run)
     {
      if($_FILES['image']['name'] != "")
      {
         move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$update_filename);
         if(file_exists("../uploads/".$old_image))
         {
            unlink("../uploads/".$old_image);
         }
      }
      redirect("Category Updated Successfully","edit-clients.php?id=$client_id");
     }
     else 
     {
      redirect("Something WEnt Wrong","edit-clients.php?id=$client_id");

     }

}











else if(isset($_POST['update_sidebar_btn']))
{     
     $editsidebar_id = $_POST['editsidebar_id']; 
     $title = $_POST['title'];  
     $slug = $_POST['slug'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $facebook = $_POST['facebook'];
     $twitter = $_POST['twitter'];
     $pinterest = $_POST['pinterest'];
     $linkedin = $_POST['linkedin'];


    

     $update_query ="UPDATE sidebar SET title='$title', slug='$slug', phone='$phone', email='$email', facebook='$facebook',twitter='$twitter', pinterest='$pinterest',linkedin='$linkedin' WHERE id='$editsidebar_id'";

     $update_query_run = mysqli_query($con,$update_query);
     if($update_query_run)
     {
      redirect("Category Updated Successfully","sidebar.php?id=$editsidebar_id");
     }
     else 
     {
      redirect("Something WEnt Wrong","sidebar.php?id=$editsidebar_id");

     }

}

// $conn->close();


else if(isset($_POST['update_footer_btn']))
{     
     $footer_id = $_POST['footer_id']; 
     $link_url = $_POST['link_url'];

    //  $photo_url = $_POST['photo_url'];
     


     $new_image = $_FILES['photo_url']['name'];
     $old_image = isset($_POST['old_image']) ? $_POST['old_image'] : '';
     
     if($new_image != "")
     {
         // $update_filename = $new_image;
         $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
         $update_filename = time().'.'.$image_ext  ;
     }else
     {
         $update_filename = $old_image;
     }
     $path ="../uploads";

     $update_query ="UPDATE instagram_photos SET link_url='$link_url',photo_url='$update_filename' WHERE id='$footer_id'";

     $update_query_run = mysqli_query($con,$update_query);
     if($update_query_run)
     {
      if($_FILES['photo_url']['name'] != "")
      {
         move_uploaded_file($_FILES['photo_url']['tmp_name'],$path.'/'.$update_filename);
         if(file_exists("../uploads/".$old_image))
         {
            unlink("../uploads/".$old_image);
         }
      }
      redirect("Footer Updated Successfully","edit-footer.php?id=$footer_id");
     }
     else 
     {
      redirect("Something WEnt Wrong","edit-footer.php?id=$footer_id");

     }

}

?>