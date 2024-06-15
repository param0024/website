<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Hello, world!</title>
    <style>
          .container{
              overflow-x: scroll;
          }
    </style>
  </head>
  <body>

           <div class="container">
        <h2 class="text-center mt-4 mb-4">Contact list</h2>
        <table class="table table-striped  table responsive">
               <thead>
               <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th colspan="2">Operation</th>
                      </tr>
               </thead>
               <tbody>
               <?php
   
                     include 'conn.php';

                     $selectquery = "select * from contactform";
                     $reflect = mysqli_query($con, $selectquery);
                     $count = mysqli_num_rows($reflect);
                     $fetch = mysqli_fetch_array($reflect);

                     while($fetch = mysqli_fetch_array($reflect)){
   ?>
                     <tr>
                     <td><?php echo $fetch['id']?></td>
                     <td><?php echo $fetch['name']?></td>
                     <td><?php echo $fetch['email']?></td>
                     <td><?php echo $fetch['subject']?></td>
                     <td><?php echo $fetch['message']?></td>
                     <td data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fa fa-edit" aria-hidden="true"></i></td>
                     <td data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></td>
                  </tr>
                  <?php
}
?>
        
        </table>
           </div>
           

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>