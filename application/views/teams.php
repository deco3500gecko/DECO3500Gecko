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
        padding-left: 250px;
        padding-right: 250px;
        min-height: 90vh;
    }

    table {
        width: 100%;
    }

    .square {
        height: 200px;
        width: 200px;
        background-color: red;
    }

    .ellipsis {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0.75em;
    }

    p {
        font-size: 1.2em;
    }
    
    .add-button {
        position: absolute;
        top: 0;
        right: 0;
    }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="border-right border-bottom bg-light" id="sidebar-wrapper">
            <div class="sidebar-heading" style="background-color: #6ac6db">Class Buddy</div>
        </div>
        
        <div id="page-content-wrapper">
            
            <nav class="navbar navbar-expand-lg navbar-light border-bottom " style="background-color: #6ac6db">
                
                <div class="container-fluid">
                    
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Welcome/dashboard'); ?>">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Welcome/classes'); ?>">Classes</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url('Welcome/teams'); ?>">Teams</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Welcome/rewards/unredeemed'); ?>">Rewards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div id="main">
                <div class="row">
                    <div class="col">
                        <h2>Teams</h2>

                        <?php 
                        $attributes = ['id' => 'class-form'];
                        echo form_open('Welcome/teams', $attributes);
                        echo form_dropdown('class', $classes, $class);
                        echo '<input type="submit" name="submit" value="Change" />';
                        echo form_close();
                        ?>

                        <button type="button" class="btn btn-info add-button" data-toggle="modal" data-target="#addTeamModal">Add Team</button>

                        <div class="input-group md-form form-sm form-1 pl-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                            <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                        </div>

                        <div>
                            <?php foreach ($teams as $team) { ?>
                            <div class="card mt-4">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <div class="square" style="background-color: <?php echo strtolower($team->team_name); ?>"></div>
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2 p-3">
                                            <h4 class="card-title">Team <?php echo $team->team_name; ?></h4>
                                            <p class="card-text"><?php echo $team->description; ?></p>
                                            <p class="card-text"><?php echo $team->points; ?> points</p>
                                            <p class="card-text"><?php echo $team->wins; ?> wins</p>
                                        </div>
                                    </div>
                                    <div class="card-footer w-100 text-muted">
                                        <p class="m-0" style="width: 50%; float: left;">
                                            <?php
                                            $i = 0;
                                            $length = count($team_members[$team->team_name]);
                                            foreach ($team_members[$team->team_name] as $student) {
                                                echo $student->name;
                                                if ($i != $length - 1) {
                                                    echo ', ';
                                                }
                                                $i ++;
                                            }
                                            ?>
                                        </p>

                                        <button class="btn-sm btn-info" data-toggle="modal" data-target="#editMembersModal<?php echo $team->team_name; ?>" style="float: right; font-size: 0.9em;">Change members</button>
                                    </div>

                                    <a class="ellipsis" role="button" id="dropdownMenuLink<?php echo $team->team_name; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v fa-2x"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink<?php echo $team->team_name; ?>">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal<?php echo $team->team_name ?>" href="">Edit Team</a>
                                        <a class="dropdown-item" href="<?php echo base_url('Welcome/view_profile/' . $team->team_name); ?>">View Team</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#removeModal<?php echo $team->team_name; ?>" href="">Remove Team</a>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="exampleModal<?php echo $team->team_name; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Team</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php echo form_open('Welcome/edit_team'); ?>

                                                <div class="form-row mb-3">
                                                    <div class="col">
                                                        <select name="team_name" class="form-control">
                                                            <option value="Red" <?php if ($team->team_name == 'Red') {echo 'selected';}?>>Red</option>
                                                            <option value="Yellow" <?php if ($team->team_name == 'Yellow') {echo 'selected';}?>>Yellow</option>
                                                            <option value="Green" <?php if ($team->team_name == 'Green') {echo 'selected';}?>>Green</option>
                                                            <option value="Blue" <?php if ($team->team_name == 'Blue') {echo 'selected';}?>>Blue</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-row mb-3">
                                                    <div class="col">
                                                        <textarea name="description" type="text" class="form-control" placeholder="Team Description" value="<?php echo $team->description; ?>" rows="3"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-row mb-3">
                                                    <div class="col">
                                                        <input name="points" type="text" class="form-control" placeholder="Points" value="<?php echo $team->points; ?>">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-row">
                                                    <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn btn-primary" value="Save changes">
                                                </div>

                                                <input type="hidden" name="team_id" value="<?php echo $team->team_id; ?>">
                                            <?php echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="removeModal<?php echo $team->team_name; ?>" tabindex="-1" role="dialog" aria-labelledby="removeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Remove Team</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php echo form_open('Welcome/remove_team'); ?>
                                                <div class="form-row mb-3">
                                                    <div class="col">
                                                        <p>By removing <?php echo $team->team_name; ?>, you will lose: </p>
                                                        <ul>
                                                            <li>team information</li>
                                                            <li>team members</li>
                                                            <li>team points</li>
                                                        </ul>

                                                        <input name="team_id" type="hidden" class="form-control" value="<?php echo $team->team_id; ?>">

                                                        <input name="team_name" type="hidden" class="form-control" value="<?php echo $team->team_name; ?>">

                                                        <input name="class" type="hidden" class="form-control" value="<?php echo $class; ?>">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-row">
                                                    <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn btn-danger" value="Remove">
                                                </div>
                                            <?php echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="editMembersModal<?php echo $team->team_name; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add/Remove Members</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php echo form_open('Welcome/change_members'); ?>

                                                <?php foreach ($student_list as $student) { ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="<?php echo $student->student_id; ?>" name="select_members[]"
                                                    <?php 
                                                    if (in_array($student, $team_members[$team->team_name])) {
                                                        echo 'checked';
                                                    }
                                                    ?>
                                                    >
                                                    
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        <?php echo $student->name; ?>
                                                    </label>
                                                </div>
                                                <?php } ?>
                                                
                                                
                                                <div class="form-row">
                                                    <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn btn-primary" value="Save changes">
                                                </div>

                                                <input type="hidden" name="class" value="<?php echo $class; ?>">
                                                <input type="hidden" name="team_name" value="<?php echo $team->team_name; ?>">
                                            <?php echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>

            </div>
            
        </div>

    </div>

    <div class="modal fade" id="addTeamModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('Welcome/add_team'); ?>
                        <div class="form-row mb-3">
                            <div class="col">
                                <input name="team_name" type="text" class="form-control" placeholder="Team Name" value="">
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="col">
                                <textarea name="description" class="form-control" rows="3" placeholder="Description"></textarea>
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="col">
                                <input name="points" type="text" class="form-control" placeholder="Points" value="">
                            </div>
                        </div>
                        
                        <input type="hidden" name="class" value="<?php echo $class; ?>">

                        <div class="form-row">
                            <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Add Team">
                        </div>     
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

</body>