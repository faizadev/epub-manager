<?php
 require_once "../config/init.php";

  if (isset($_POST)) {
  	 //validation
  	  $cover = '';
  	  if ($_FILES['fileToUpload'] && $_FILES['fileToUpload']['size'] != 0) {
         $book_cover = new Upload($_FILES['fileToUpload'],'../assets/img/book-covers/',['size' => 10, 'ext' => ['jpeg','jpg','png']]);
         $book_cover =  $book_cover->upload();
         if (!$book_cover[0]['errors']) {
        	  $cover = $book_cover[0]['filename'];
         }
         else{
        // Redirect back with errors
           $errors = $book_cover[0]['errors'];
           Session::flash('success',implode(',', $errors));
           header("Location: ../views/manage-books.php");
           exit;
            }
      }
      $validated = false;
  	  $request = [
          [
             'name' =>  'book_title',
             'value'=>  $_POST['book_title'],
             'rules'=>  'required'
          ],
          [
             'name' =>  'penname',
             'value'=>  $_POST['penname'],
             'rules' =>  'required'
          ],
          [
             'name' =>  'isbn',
             'value'=>  $_POST['isbn'],
             'rules'=>  'required|numeric|count'
          ],
          [
             'name' =>  'publication_date',
             'value'=>  $_POST['publication_date'],
             'rules'=>  'required'
          ],
          [
             'name' =>  'status_id',
             'value'=>  $_POST['status_id'],
             'rules'=>  'required'
          ],
          [
             'name' =>  'book_origin',
             'value'=>  $_POST['book_origin'],
             'rules'=>  'required'
          ],

  	  ];

  	  $errors = Validator::doValidate($request);
  	  if (empty($errors)) {
  	  	$validated = true;
  	  }
     //...

  	if ($validated) {

      // Check if image file is a actual image or fake image

  		// $user_id = Session::get('user_id');
  		$user_id = 1; //temporary value login user ID should be get from session
  	 	$books   = new Book;
  	 	// $actions = new Action; //record for action


  	 	$book_data = [
 						'book_title' => $_POST['book_title'],
 						'penname'    => $_POST['penname'],
 						'isbn'       => $_POST['isbn'],
 						'status_id'  => $_POST['status_id'],
 						'book_origin'=> $_POST['book_origin'],
  	 		    'cover'      => $cover,
            'user_id'    => $user_id,
            'created_at' => date("Y-m-d H:i:s"),
            'publication_date' => $_POST['publication_date'],
  	 	];
  	 	$check = $books->insert($book_data);
  	 	// $check1 = $actions->insert($book_data);
  	 	if ($check ) {
  	 		echo "Book added successfully";
  	 		header("Location:../views/manage-books.php");
  	 	}
  	 	else{
  	 		echo "Error while adding book";
  	 	}
  	 }
  	 else{
  	     Session::flash('errors',implode(',', $errors));
         header("Location: ../views/manage-books.php");
  	 }

  }
