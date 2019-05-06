@extends('layouts.frontend_layout')

@section('frontend_content')






  <section class="page-home" style="background:#400040;">
           <div class="container">

             <!-- delivery form -->
             <div class="section policy-home col-lg-12 col-xs-12">
               <div class="ex">
               <div class="row">
                 <div class="col-lg-9 col-md-9">

                   <div class="card">

                     <div class="card-body">
                       <h3 class="card-title" style="text-align:center;color:#400040;">Exchange Your Money</h3>

                       <form>
                         <div class="form-row">
                           <div class="form-group col-md-6">

                             <span class="label label-default" style="font-size:30px;">Send</span>
                             <select class="custom-select" id="inputEmail4">
                               <!-- <option selected>Skrill.</option> -->
                               <option value="1">Skrill.</option>
                               <option value="2">Neteller.</option>
                               <option value="3">Payoneer.</option>
                               <option value="4">Perfect Money.</option>
                               <option value="5">RocketPersonal.</option>
                               <option value="6">Bkash Personal.</option>
                               <option value="7">Bkash Agent.</option>
                             </select>


                           </div>


                           <div class="form-group col-md-6">
                             <span class="label label-default" style="font-size:30px;">Receve</span>
                             <select class="custom-select" id="inputEmail4">

                               <option value="1">Bkash Personal.</option>
                               <option value="2">Skrill.</option>
                               <option value="3">Payoneer.</option>
                               <option value="4">Bkash Personal.</option>
                               <option value="5">Bkash Agent.</option>
                               <option value="6">Perfect Money.</option>
                               <option value="7">RocketPersonal.</option>

                             </select>


                           </div>
                         </div>
                         <div class="row">
                       <div class="col-md-6 mt-2 mb-4">
                         <input type="number" class="form-control">
                       </div>
                       <div class="col-md-6 mt-2 mb-4">
                         <input type="number" class="form-control">
                       </div>

                    <button type="button" class="btn btn-secondary" id="bbbb">Exchange</button>

                       </form>
                     </div>
                     </div>
                   </div>
                 </div>


                 <div class="col-lg-3 col-md-3" >
                         <div class="card" style=" height:19rem">

                           <div class="card-body">
                             <h5 class="card-title"> Place Your Add  Here</h5>

                             <a href="#" class="btn btn-primary">Contact Us</a>
                           </div>
                         </div>
                       </div>
                     </div>
                     </div>
                   </div>
                 </div>
             </div>
          </section>

<!-- Testimonial -->

<section style="background:#eee;">
      <div class="container ">
        <h1 class="text-center" style="color:#400040; padding:20px 0px;"> Clint Testomonial</h1>
        <div class="row" style="padding:20px 0px;" >
          <div class="col-md-3 mb-3">
            <div class="card" id="star">
              <button type="button" class="btn btn-success" name="button">*positive*</button>
              <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card" id="star">
              <button type="button" class="btn btn-success" name="button">*positive*</button>
                <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card" id="star">
              <button type="button" class="btn btn-success" name="button">*positive*</button>
                <p  >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card" id="star">
              <button type="button" class="btn btn-success" name="button">*positive*</button>
                <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- table -->

    <section >
      <div class="row">
        <div class="container">


       <div class="col-lg-12">
          <div class="card mt-5 mb-5" >
              <div id="table-card" class="card-header" style="background:#400040;">
               <h4 style="color:white;text-align:center;" >Daily Exchange</h4>
               </div>
        <div class="card-body" >
          <div class="scrollable responsive">


          <table class="table table-striped table-bordered scrollable" style="width:100%" >
            <thead>

              <tr>
                <th colspan="1" rowspan="2">EX_Id</th>

                <th>Name</th>
                <th>Send</th>
                <th>Receve</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>wertrtt</td>
                <td>salman</td>
                <td>Bkash</td>
                <td>Roket</td>
                <td>5000</td>
                <td>19-09-19</td>
                <td>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                </td>

              </tr>
              <tr>
                <td>wertrtt</td>
                <td>salman</td>
                <td>Bkash</td>
                <td>Roket</td>
                <td>5000</td>
                <td>19-09-19</td>
                <td>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                </td>

              </tr>
              <tr>
                <td>wertrtt</td>
                <td>salman</td>
                <td>Bkash</td>
                <td>Roket</td>
                <td>5000</td>
                <td>19-09-19</td>
                <td>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                </td>

              </tr>
              <tr>
                <td>wertrtt</td>
                <td>salman</td>
                <td>Bkash</td>
                <td>Roket</td>
                <td>5000</td>
                <td>19-09-19</td>
                <td>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                </td>

              </tr>
              <tr>
                <td>wertrtt</td>
                <td>salman</td>
                <td>Bkash</td>
                <td>Roket</td>
                <td>5000</td>
                <td>19-09-19</td>
                <td>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                </td>

              </tr>
              <tr>
                <td>wertrtt</td>
                <td>salman</td>
                <td>Bkash</td>
                <td>Roket</td>
                <td>5000</td>
                <td>19-09-19</td>
                <td>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                </td>

              </tr>
              <tr>
                <td>wertrtt</td>
                <td>salman</td>
                <td>Bkash</td>
                <td>Roket</td>
                <td>5000</td>
                <td>19-09-19</td>
                <td>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                </td>

              </tr>
              <tr>
                <td>wertrtt</td>
                <td>salman</td>
                <td>Bkash</td>
                <td>Roket</td>
                <td>5000</td>
                <td>19-09-19</td>
                <td>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                </td>

              </tr>
              <tr>
                <td>wertrtt</td>
                <td>salman</td>
                <td>Bkash</td>
                <td>Roket</td>
                <td>5000</td>
                <td>19-09-19</td>
                <td>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                </td>

              </tr>
              <tr>
                <td>wertrtt</td>
                <td>salman</td>
                <td>Bkash</td>
                <td>Roket</td>
                <td>5000</td>
                <td>19-09-19</td>
                <td>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                  <a href="#" class="badge badge-secondary">Secondary</a>                </td>

              </tr>
              <tr>
                <td>wertrtt</td>
                <td>salman</td>
                <td>Bkash</td>
                <td>Roket</td>
                <td>5000</td>
                <td>19-09-19</td>
                <td>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                </td>

              </tr>
              <tr>
                <td>wertrtt</td>
                <td>salman</td>
                <td>Bkash</td>
                <td>Roket</td>
                <td>5000</td>
                <td>19-09-19</td>
                <td>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                  <a href="#" class="badge badge-secondary">Secondary</a>
                </td>

              </tr>

            </tbody>
          </table>




        </div>


          </div>
          </div>

                </div>
              </div>
              </div>

    </section>












@endsection