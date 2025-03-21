<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../sims/css/index.css">
    <title>Sims</title>
</head>
<body>
    <header> 
        <nav>
            <ul>
                <li class="icon"><i class="fas fa-book"></i></li>
                <li><a href="home.php">Home</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="container">
        <div class="row">
            <h1 class="text-center">Students Information Management System</h1>
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        include 'connect.php'; 
                        $select = "select * from student_info";                      
                        $query = mysqli_query($con,$select);                        
                        while($res = mysqli_fetch_array($query)){     
                    ?>
                            <tr>
                                <td> <?php echo $res['stud_id'];  ?> </td>
                                <td> <?php echo $res['fname'];  ?> </td>
                                <td> <?php echo $res['lname'];  ?> </td>
                                <td> <?php echo $res['age'];  ?> </td>
                                <td>
                                    <?php  
                                        if ($res['gender']==2) {
                                            echo "Male";
                                        }
                                        else if ($res['gender']==3) {
                                            echo "Female";
                                        }
                                        else {
                                            echo "Prefer not to Say";
                                        }
                                    ?> 
                                </td>
				<td> 
					<button class="btn-danger btn"> 
						<a href="delete.php?id=<?php echo $res['stud_id']; ?>" class="text-white"> Delete </a>  
					</button>
					<button class="btn-primary btn"> 
						<a href="update.php?id=<?php echo $res['stud_id']; ?>" class="text-white"> Update </a> 
					</button> 
				</td>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
			<div>
				<a href="signup.php"><h6>Go to Registration Form</h6></a>
			</div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
