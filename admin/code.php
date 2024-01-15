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
// else if(isset($_POST['edit_home_btn'])){
//      $name = $_POST['name'];
//      $slug = $_POST['slug'];
//      $description = $_POST['description'];

//      $edit_query = "INSERT INTO edit (name,slug,description) VALUES ('$name','$slug','$description')";
//      $edit_query_run = mysqli_query($con,$edit_query);
//      if($edit_query_run){
//       redirect("Edit Add Successfully","edit-home.php");
//      }else{
//       redirect("Some Went Wrong","edit-home.php");
//      }
// }
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
      redirect("Something WEnt Wrong","edit-category.php?id=$category_id");

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
      redirect("Category Updated Successfully","edit-home.php?id=$edihome_id");
     }
     else 
     {
      redirect("Something WEnt Wrong","edit-home.php?id=$edihome_id");

     }

}
?>