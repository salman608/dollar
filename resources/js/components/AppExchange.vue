<template>
    
                        
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
                             <input type="number" class="form-control" v-model="name">
                           </div>
                           <div class="col-md-6 mt-2 mb-4">
                             <input type="number" class="form-control" v-bind:value='name'>
                           </div>

                           <div class="col-md-6 mt-2 mb-4">
                             <h2>You Type: {{ name }}</h2>
                           </div>
                           

                        </div>
                        <div class="row">
                          <button type="button" class="btn btn-secondary" id="bbbb">Exchange</button>
                         </div>
                     </form>
                   
                  </div> 
           </div>

</template>

<script>
    export default {
        data: function () {
                return {
                  name: "",
                  h:name*2,
                }
              }

    }
</script>



