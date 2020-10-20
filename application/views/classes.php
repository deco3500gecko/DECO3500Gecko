<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/80dbd8c441.js" crossorigin="anonymous"></script>
    
    <style>
    body {
        min-height: 100vh;
        background-color: #fff;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
    }

	#wrapper {
		overflow-x: hidden;
	}

    #page-content-wrapper {
		min-width: 100vw;
	}

    .navbar {
		padding: 14px 20px;
		margin: 0;
	}

	.nav-link {
		padding: 0;
		font-size: 19.2px;
	}

    #sidebar-wrapper {
        max-height: 48px;
    }

    .sidebar-heading {
		padding: 0.875rem 1.25rem;
		font-size: 1.2rem;
        width: 240px;
	}

    #main {
        margin-left: -240px;
        margin-right: 240px;
        padding: 35px;
        padding-left: 60px;
        padding-right: 60px;
        min-height: 90vh;
    }

    table {
        width: 100%;
    }

    /* .input-group.md-form.form-sm.form-1 input{
        border: 1px solid #bdbdbd;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
    } */

    
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="border-right bg-light" id="sidebar-wrapper">
            <div class="sidebar-heading" style="background-color: #6ac6db">Class Buddy</div>
        </div>
        
        <div id="page-content-wrapper">
            
            <nav class="navbar navbar-expand-lg navbar-light border-bottom" style="background-color: #6ac6db">
                
                <div class="container-fluid">
                    
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Welcome/'); ?>">Dashboard</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Teams</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Rewards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div id="main">
                <h2>Classes</h2>

                <?php 
				$attributes = ['id' => 'class-form'];
                echo form_open('Welcome/classes', $attributes);
                echo form_dropdown('class', $classes, $class);
                echo '<input type="submit" name="submit" value="Change" />';
                echo form_close();
				?>

                <button type="button" class="btn btn-info">Add student</button>

                <div class="input-group md-form form-sm form-1 pl-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                    <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                </div>

                <table class="table table-hover">
                    <thead>
                        <tr class="table-secondary">
                            <th scope="col">STUDENT NAME</th>
                            <th scope="col">STUDENT ID</th>
                            <th scope="col">ATTENDANCE</th>
                            <th scope="col">TEAM</th>
                            <th scope="col">DIETARY</th>
                            <th scope="col">EXTRA</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($student_list as $student) { ?>
						<tr>
							<td><?php echo $student->name; ?></td>
							<td><?php echo $student->student_id; ?></td>
                            <td><?php echo $student->days_attended; ?></td>
                            <td><?php echo $student->team; ?></td>
                            <td><?php echo $student->dietary; ?></td>
                            <td><?php echo $student->extra; ?></td>
                            <td>
                                <div class="dropdown show">
                                    <a class="btn btn-outline-secondary btn-sm" href="#" role="button" id="dropdownMenuLink<?php echo $student->student_id; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Details
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink<?php echo $student->student_id; ?>">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal<?php echo $student->student_id; ?>" href="">Edit Profile</a>
                                        <a class="dropdown-item" href="<?php echo base_url('Welcome/view_profile/' . $student->student_id); ?>">View Profile</a>
                                        <a class="dropdown-item" href="#">Remove Student</a>
                                    </div>
                                </div>
                            </td>
						</tr>

                        <div class="modal fade" id="exampleModal<?php echo $student->student_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo form_open('Welcome/edit_profile'); ?>
                                            <div class="form-row mb-3">
                                                <div class="col">
                                                    <input name="name" type="text" class="form-control" placeholder="Name" value="<?php echo $student->name; ?>">
                                                </div>
                                            </div>

                                            <div class="form-row mb-3">
                                                <div class="col">
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="form-row mb-3">
                                                <div class="col">
                                                    <input name="id" type="text" class="form-control" placeholder="Student ID" value="<?php echo $student->student_id; ?>">
                                                </div>
                                            </div>

                                            <div class="form-row mb-3">
                                                <div class="col">
                                                    <input name="dietary" type="text" class="form-control" placeholder="Dietary" value="<?php echo $student->dietary; ?>">
                                                </div>
                                            </div>

                                            <div class="form-row mb-3">
                                                <div class="col">
                                                    <input name="extra" type="text" class="form-control" placeholder="Extra" value="<?php echo $student->extra; ?>">
                                                </div>
                                            </div>

                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <select name="team" class="form-control">
                                                        <option value="" selected disabled hidden>Team</option>
                                                        <option value="Red">Red</option>
                                                        <option value="Yellow">Yellow</option>
                                                        <option value="Green">Green</option>
                                                        <option value="Blue">Blue</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary" value="Save changes">
                                            </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php } ?>
                    </tbody>
                </table>
            </div>
            
        </div>

    </div>


</body>