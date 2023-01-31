<?php
include 'connect.php';

if (isset($_POST['displaySend'])) {
  $table = '<table class="table">
  <thead class="thead-dark">
      <tr>
        <th scope="col">SL no</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Address</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>';

  $sql = "SELECT * from crud_table";
  $result = mysqli_query($con, $sql);
  // mysqli_fetch_assoc($result) takes the result(All data of first row from database) as an array.
  // $result এ Table এর প্রতিটা value রাখা আছে।
  // mysqli_fetch_assoc() function টি $result থেকে একেকটি সারি Array আকারে নিয়ে আশে।
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];         // প্রতিটা row এর id- $id নামক variable এ জমা হচ্ছে।
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $address = $row['address'];

    // Concentination(Addition of string fields) of table attributes.
    // Above $table in line 5 is added with this $table by PHP concatination
    // $mystring1 .= $mystring2; means $mystring1 + $mystring2
    $table .= '<tr>
                  <th scope="row">' . $id . '</th>
                  <td>' . $name . '</td>
                  <td>' . $email . '</td>
                  <td>' . $mobile . '</td>
                  <td>' . $address . '</td>
                  <td>
                  <button class="btn btn-dark">Update</button>
                  <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>';
  }

  $table .= '</table>';
  echo $table;
  // Concentination ends here!  
}
