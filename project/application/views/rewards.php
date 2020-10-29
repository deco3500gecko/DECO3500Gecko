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

    .active {
        color: grey;
    }

    .table {
        font-size: 1.5em;
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
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Welcome/teams'); ?>">Teams</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" href="<?php echo base_url('Welcome/rewards/unredeemed'); ?>">Rewards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div id="main">             

                <div class="row mt-3">
                    <div class="col mr-4">
                        <h2>Rewards</h2>

                        <?php 
                        $attributes = ['id' => 'class-form'];
                        echo form_open('Welcome/rewards/unredeemed', $attributes);
                        echo form_dropdown('class', $classes, $class);
                        echo '<input type="submit" name="submit" value="Change" />';
                        echo form_close();
                        ?>
                        <button type="button" class="btn btn-info add-button" data-toggle="modal" data-target="#addRewardModal">Add Reward</button>

                        <nav class="nav mt-3">
                            <a class="nav-link <?php if ($status == 'redeemed') {echo 'active';}?>" href="<?php echo base_url('Welcome/rewards/unredeemed'); ?>">Not Redeemed</a>
                            <a class="nav-link ml-3 <?php if ($status == 'unredeemed') {echo 'active';}?>" href="<?php echo base_url('Welcome/rewards/redeemed'); ?>">Redeemed</a>
                        </nav>
                        
                        <?php $i = 0; ?>
                        <?php foreach ($rewards as $reward) { ?>
                        <?php if ($i % 3 == 0) {
                            echo '<div class="card-deck mt-4">';
                        }?>
                        
                        <div class="card bg-light mr-2 ml-2" style="min-width: 10vw; max-width: 16.6vw;">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $reward->reward_name; ?></h4>
                                <p class="card-text"><?php echo $reward->reward_description; ?></p>
                            </div>

                            <img class="card-img-bottom" src="<?php echo base_url('images/reward_placeholder.png'); ?>" alt="image cap" style="width: 250px; height: 250px;">

                            <a class="ellipsis" role="button" id="dropdownMenuLink<?php echo $reward->reward_id; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v fa-lg"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink<?php echo $reward->reward_id; ?>">
                                <?php if ($status == 'unredeemed') {
                                    echo '<a class="dropdown-item" href="' . base_url('Welcome/redeem_reward/' . $reward->reward_id) . '">Redeem Reward</a>';
                                } else {
                                    echo '<a class="dropdown-item" href="' . base_url('Welcome/unredeem_reward/' . $reward->reward_id) . '">Unredeem Reward</a>';
                                }
                                
                                ?>
                                <a class="dropdown-item" data-toggle="modal" data-target="#removeModal<?php echo $reward->reward_id; ?>" href="">Remove Reward</a>
                            </div>
                        </div>

                        <div class="modal fade" id="removeModal<?php echo $reward->reward_id; ?>" tabindex="-1" role="dialog" aria-labelledby="removeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Remove Reward</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo form_open('Welcome/remove_reward'); ?>
                                            <div class="form-row mb-3">
                                                <div class="col">
                                                    <p>By removing <?php echo $reward->reward_name; ?>, you will lose: </p>
                                                    <ul>
                                                        <li>reward information</li>
                                                    </ul>

                                                    <input name="reward_id" type="hidden" class="form-control" value="<?php echo $reward->reward_id; ?>">

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

                        <?php if ($i % 3 == 2 || $i == (count($rewards) - 1)) {
                            echo '</div>';
                        }?>
                        <?php $i++; ?>
                        <?php } ?>
                    </div>

                    <div class="col-3">
                        <h3>Leaderboard</h3>
                        
                        <table class="table table-info">
                            <thead>
                                <tr>
                                    <th colspan="3">Class Leaderboard</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                <?php foreach ($teams as $team) { ?>
                                    <?php $i++; ?>
                                    <tr>
                                        <th scope="row"><?php echo $i; ?></th>
                                        <td class="text-center"><?php echo $team->team_name; ?></td>
                                        <td class="text-center"><?php echo $team->wins; ?> wins</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                        <table class="table table-primary">
                            <thead>
                                <tr>
                                    <th colspan="3">Grade Leaderboard</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>

    <div class="modal fade" id="addRewardModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Reward</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('Welcome/add_reward'); ?>

                        <div class="form-row mb-3">
                            <div class="col">
                                <input name="reward_name" type="text" class="form-control" placeholder="Name" value="">
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="col">
                                <textarea name="reward_description" class="form-control" rows="3" placeholder="Description"></textarea>
                            </div>
                        </div>
                        
                        <input type="hidden" name="class" value="<?php echo $class; ?>">

                        <div class="form-row">
                            <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Add Reward">
                        </div>     
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

</body>