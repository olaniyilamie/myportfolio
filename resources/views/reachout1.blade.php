<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="<?php echo asset('bootstrap.css');?>" type="text/css" rel="stylesheet">
            <title>PERSONAL</title>
        </head>
        <body>
            <div class="container-fluid">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active font-weight-bolder btn-block bg-dark text-white" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">CONTACT MESSAGES</button>
                    <button class="nav-link font-weight-bolder btn-block bg-dark text-white" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">HIRE MESSAGES</button>
                    <button class="nav-link font-weight-bolder btn-block bg-dark text-white" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">FREELANCE MESSAGES</button>
                </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="table table-hover table-bordered table-sm ">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phonenumber</th>
                            <th>Subject</th>
                            <th>Details</th>
                        </tr>
                        @foreach($getback  as $use)
                        <tr>
                            <td>{{$use->name}}</td>
                            <td>{{$use->email}}</td>
                            <td>{{$use->number}}</td>
                            <td>{{$use->subject}}</td>
                            <td>{{$use->detail}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <table class="table table-hover table-bordered table-sm ">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phonenumber</th>
                            <th>Address</th>
                            <th>More Information</th>
                        </tr>
                        @foreach($getback1  as $use)
                        <tr>
                            <td>{{$use->companyname}}</td>
                            <td>{{$use->email}}</td>
                            <td>{{$use->phonenumber}}</td>
                            <td>{{$use->address}}</td>
                            <td>{{$use->Details}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <table class="table table-hover table-bordered table-sm ">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phonenumber</th>
                            <th>Project</th>
                            <th>Budget</th>

                        </tr>
                        @foreach($getback2  as $use)
                        <tr>
                            <td>{{$use->name}}</td>
                            <td>{{$use->email}}</td>
                            <td>{{$use->number}}</td>
                            <td>{{$use->typeservice}} website</td>
                            <td>&#8358;{{number_format($use->budget,2)}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                </div>
            </div>

            <script src="<?php echo asset('js/jquery-3.5.1.min.js');?>"></script>
			<script src="<?php echo asset('js/popper.min.js');?>"></script>
			<script src="<?php echo asset('js/bootstrap.js');?>"></script>
        </body>
    </html>