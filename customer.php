<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>

</style>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
         <symbol class=logo id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
         </symbol>
         <symbol class=home-logo  id="home" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
         </symbol>
         <symbol  class=dashboard-logo id="speedometer2" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
         </symbol>
         <symbol  class=orders-logo id="table" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
         </symbol>
         <symbol  class=customer-logo id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
         </symbol>
         <symbol  class=product-logo id="grid" viewBox="0 0 16 16">
            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
         </symbol>
      </svg>
    <header>
        <div class="px-3 py-2 navbar-light" style="background-color: #25201b;">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"/>
                     </svg>
                    </a>
                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                        <li>
                            <a href="#" class="nav-link text-light">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                              <use xlink:href="#home"/>
                           </svg> Home
                            </a>
                        </li>
                        <li>
                            <a href="./customer.php" class="nav-link text-light">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                              <use xlink:href="#speedometer2"/>
                           </svg> Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-light">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                              <use xlink:href="#table"/>
                           </svg> Orders
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-light">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                              <use xlink:href="#grid"/>
                           </svg> Products
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-light">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                              <use xlink:href="#people-circle"/>
                           </svg> Customers
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <div class="px-3 py-2 border-bottom mb-3">
            <div class="container d-flex flex-wrap justify-content-center">
                <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>
            
                <div class="text-end">
                    <button type="button" class="btn btn-light text-dark me-2">Login</button>
                    <button type="button" class="btn btn-primary">Sign-up</button>
                </div>
            </div>
            </div> -->
    </header>
    <div class=" container col-10 formholder">
        <h4 class="mb-3">Enquiry Form</h4>
        <form>
            <!-- Input type text -->
            <div class="form-group">
                <input type="text" class="form-control" name="input_name" id="input_name" placeholder="John Doe" required>
                <small class="text-muted form-text">firstname last name</small>
            </div>
            <!-- Input text grid -->
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label></label>
                        <input type="text" name="mail_gird_1" id="mail_gird_1" class="form-control" placeholder="eMail" required>
                        <small class="form-text text-muted">homes4in@gmail.com</small>
                    </div>
                    <div class="col">
                        <label></label>
                        <input type="text" name="cell_gird_2" id="cell_gird_2" class="form-control" placeholder="Contact Number" required>
                        <small class="form-text text-muted">+91965012121</small>
                    </div>
                </div>
            </div>
            <!-- Input text grid -->
            <div class="form-group">
                <div class="row">
                    <div class="col-md-5">
                        <label for="type_of_buildings">Type of building</label>
                        <select class="custom-select text-muted form-text" name="type_of_buildings" id="type_of_buildings">
                  <option value="Residential">Residential</option>
                  <option value="Hospitals">Hospitals</option>
                  <option value="Hotels">Hotels</option>
                  <option value="Banks">Banks</option>
                  <option value="Interior Designs">Interior Designs</option>
                  <option value="Other">Other</option>
               </select>
                    </div>
                    <div class="col-md-5">
                        <label for="No_ of_Floors">No. of Floors</label>
                        <select class="custom-select text-muted form-text" name="No_ of_Floors" id="No_ of_Floors">
                  <option value="1">Ground floor</option>
                  <option value="2">1(G+1)</option>
                  <option value="3">2(G+2)</option>
                  <option value="4">3(G+3)</option>
                  <option value="">4(G+4)</option>
                  <option value="">5(G+5)</option>
                  <option value="">6(G+6)</option>
                  <option value="">7(G+7)</option>
                  <option value="">8(G+8)</option>
                  <option value="">Other</option>
               </select>
                    </div>
                </div>
            </div>
            <!-- Input type file -->
            <div class="form-group">
                <label for="File_form">Files</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="File_form" id="File_form" multiple>
                    <label class="custom-file-label" for="File_form">Choose file</label>
                </div>
                <small class="text-muted form-text">upload plot sketch with all dimension and direction. If required interior design service, upload your floor plans</small>
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="2" name="Description" id="Description" placeholder="Describe your requirement"></textarea>
                <small class="text-muted form-text">Describe your requirement</small>
            </div>
            <button type="submit" class="btn btn-info btn-block btn-dark" name="button_id_11" id="button_id_11">submit</button>
            <form>
                <!-- select -->
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>