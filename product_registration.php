<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Registration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style-product_registration.css">
</head>

<body>
  <div class="header-background">
    <div class="header-content">
      <h1>Product Registration</h1>
    </div>
  </div>

  <div class="container-fluid padding py-5">
    <div class="row welcome text-center">
      <div class="col-12">
        <h3>Why register?</h3>
        <p>
          Every Fanimation fan is backed by our firm commitment to quality materials and manufacturing. Product
          registration is optional – however it will help us quickly inform you of any safety issues and make any
          warranty-related services go faster and smoother.
        </p>
      </div>
      <div class="col-12">
        <a href="#">
          <button type="button" class="btn btn-outline-dark">REGISTER PRODUCT</button>
        </a>
      </div>
    </div>
  </div>

  <div class="container-fluid py-3">
    <div class="jumbotron">
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <h3>Looking for product support?</h3>
        <p>Visit our archive of installation and user guides, or submit your support question – including photos – to
          our technical team, so that we can get back to you quickly.</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
        <a href="#">
          <button type="button" class="btn btn-outline-dark">GET SUPPORT</button>
        </a>
      </div>
    </div>
  </div>

  <div class="container-fluid padding py-5">
    <div class="row welcome text-center">
      <div class="col-12">
        <h3>Product registration</h3>
        <p>If you would like to register your Fanimation product to receive information on safety issues and make
          warranty-related service go faster, please complete the following form.</p>
      </div>
    </div>
  </div>

  <div class="container-fluid padding">
    <div class="row">
      <div class="col-12">
        <form class="needs-validation" novalidate>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <h6><label for="validationCustom01">First name *</label></h6>
              <input type="text" class="form-control" id="validationCustom01" value="" required />
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <h6><label for="validationCustom02">Last name *</label></h6>
              <input type="text" class="form-control" id="validationCustom02" value="" required />
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <h6><label for="validationCustom03">City</label></h6>
              <input type="text" class="form-control" id="validationCustom03" required />
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <h6><label for="validationCustom04">State</label></h6>
              <select class="custom-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <h6><label for="validationCustom05">Zip</label></h6>
              <input type="text" class="form-control" id="validationCustom05" required />
              <div class="invalid-feedback">
                Please provide a valid zip.
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6 mb-3">
              <h6><label for="inputphoneN">Daytime Phone</label></h6>
              <input type="tel" class="form-control" id="inputphoneN" placeholder="" />
            </div>
            <div class="col-md-6 mb-3">
              <h6><label for="inputEmail3">Email Address *</label></h6>
              <input type="email" class="form-control" id="inputEmail3" />
            </div>
          </div>
      
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <h6><label for="example">Date of Purchase *</label></h6>
              <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                <input placeholder="mm/dd/yyyy" type="text" id="example" class="form-control" />
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <h6><label class="form-check-label" for="gridRadios3">Purchased at *</label></h6>
              <fieldset class="form-group row">
                <legend class="col-form-label col-sm-2 float-sm-left pt-0"></legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked />
                    <label class="form-check-label" for="gridRadios1">Authorized Dealer</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" />
                    <label class="form-check-label" for="gridRadios2">Online Retailer</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" />
                    <label class="form-check-label" for="gridRadios3">Lowe's Home Improvement</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option4" />
                    <label class="form-check-label" for="gridRadios4">Other</label>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6 mb-3">
              <h6><label for="example1">Fan Model Name</label></h6>
              <input type="text" class="form-control" placeholder="Example: Zonix" />
            </div>
            <div class="col-md-6 mb-3">
              <h6><label for="example1">Fan Model Number</label></h6>
              <input type="text" class="form-control" placeholder="Example: FP4620BL" />
            </div>
          </div>
      
          <div class="form-group row">
            <div class="col-md-6 mb-3">
              <h6><label for="example1">Accessory Model Number</label></h6>
              <input type="text" class="form-control" placeholder="Example: LK6720GR" />
            </div>
            <div class="col-md-6 mb-3">
              <h6><label for="example1">Date Code</label></h6>
              <input type="text" class="form-control" placeholder="Example: DBSQL or O421" />
              <label class="form-check-label" for="invalidCheck">
                The 5 digit code can be located on the top of the motor housing or on the inside of the remote control's
                battery compartment cover.
              </label>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <h6><label class="form-check-label" for="gridCheck">What factors influenced your decision to buy this
                product?</label></h6>
              <fieldset class="form-group row">
                <legend class="col-form-label col-sm-2 float-sm-left pt-0"></legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck1" value="option1"
                      checked />
                    <label class="form-check-label" for="gridCheck1">Color/Finish</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck2" value="option2" />
                    <label class="form-check-label" for="gridCheck2">Style</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck3" value="option3" />
                    <label class="form-check-label" for="gridCheck3">Quality</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck4" value="option4" />
                    <label class="form-check-label" for="gridCheck4">Energy Efficiency</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck5" value="option5" />
                    <label class="form-check-label" for="gridCheck5">Remote Control/Features</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck6" value="option6" />
                    <label class="form-check-label" for="gridCheck6">Warranty</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck7" value="option7" />
                    <label class="form-check-label" for="gridCheck7">Optional Accessories</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck8" value="option8" />
                    <label class="form-check-label" for="gridCheck8">Other</label>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class="col-md-6 mb-3">
              <h6><label class="form-check-label" for="gridCheck">Where is this product installed?</label></h6>
              <fieldset class="form-group row">
                <legend class="col-form-label col-sm-2 float-sm-left pt-0"></legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck9" value="option9"
                      checked />
                    <label class="form-check-label" for="gridCheck9">Living Room</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck10" value="option10" />
                    <label class="form-check-label" for="gridCheck10">Master Bedroom</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck11" value="option11" />
                    <label class="form-check-label" for="gridCheck11">Secondary Bedroom</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck12" value="option12" />
                    <label class="form-check-label" for="gridCheck12">Office</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck13" value="option13" />
                    <label class="form-check-label" for="gridCheck13">Dining Room</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck14" value="option14" />
                    <label class="form-check-label" for="gridCheck14">Kitchen</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck15" value="option15" />
                    <label class="form-check-label" for="gridCheck15">Bathroom</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck16" value="option16" />
                    <label class="form-check-label" for="gridCheck16">Outdoor</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck17" value="option17" />
                    <label class="form-check-label" for="gridCheck17">Restaurant/Hotel/Commercial Space</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck18" value="option18" />
                    <label class="form-check-label" for="gridCheck18">Other</label>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <form>
                <div class="form-group">
                  <h6><label for="exampleFormControlFile1">Copy of receipt (can be a photo copy)</label></h6>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" />
                  <p>Accepted file types: jpg, gif, png, pdf, jpeg, Max. file size: 5 MB.</p>
                  <p>File must be a jpg, gif, png or pdf and less than 1MB.</p>
                </div>
              </form>
            </div>
      
            <div class="col-md-6 mb-3">
              <h6><label class="form-select-custom" for="selection">How did you hear about Fanimation?</label></h6>
              <select class="custom-select">
                <option selected>Contractor</option>
                <option value="1">Friend/Family</option>
                <option value="2">Salesperson</option>
                <option value="3">Advertisement</option>
                <option value="4">In Store Display</option>
                <option value="5">Advertisement</option>
                <option value="6">Other</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <h6><label class="form-check" for="check1">Subscribe to the Fanimation Newsletter</label></h6>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                <label class="form-check-label" for="exampleCheck1">Yes</label>
              </div>
            </div>
          </div>
      
          <button class="btn btn-dark" type="submit">SUBMIT</button>
        </form>
      </div>
    </div>
  </div>


  <div class="container-fluid padding py-5">
    <div class="row">
      <div class="col-12">
        <h5>Fields marked with * are required.</h5>
        <p>The data entered into this form is kept strictly confidential. Fanimation® does not sell, transfer or
          otherwise distribute personal data.</p>
      </div>
    </div>
  </div>

  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict';
      window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    // Data Picker Initialization
    $('.datepicker').datepicker({
      inline: true
    });
  </script>
</body>

</html>