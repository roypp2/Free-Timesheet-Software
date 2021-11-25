<?php $temp = $data['result_data']; ?>

																<?php for ($x = 0; $x< count($temp); $x++) { ?>
                                                                <input type="hidden" id="br__id" name="br__id" value="<?php echo $temp[$x]['id']; ?>" />
                                                                <div class="row justify-content-start">
                                                                    <div class="col-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input id="br__first_name" name="br__first_name" value="<?php echo $temp[$x]['first_name']; ?>" type="text" class="form-control" />
                                                                            <label for="floatingInput">First Name</label>
                                                                        </div>                                            
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input id="br__last_name" name="br__last_name" value="<?php echo $temp[$x]['last_name']; ?>" type="text" class="form-control" />
                                                                            <label for="floatingInput">Last Name</label>
                                                                        </div>                                            
                                                                    </div>                                    
                                                                </div> 
                                                                <div class="row justify-content-start">
                                                                    <div class="col-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input id="br__address" name="br__address" value="<?php echo $temp[$x]['address']; ?>" type="text" class="form-control" />
                                                                            <label for="floatingInput">Address</label>
                                                                        </div>                                            
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="form-floating mb-3">
                                                                            <select id="br__state" name="br__state" class="form-control">
                                                                                <option value="<?php echo $temp[$x]['state']; ?>" selected><?php echo $temp[$x]['state']; ?></option>
                                                                                <option value="AL">Alabama</option>
                                                                                <option value="AK">Alaska</option>
                                                                                <option value="AZ">Arizona</option>
                                                                                <option value="AR">Arkansas</option>
                                                                                <option value="CA">California</option>
                                                                                <option value="CO">Colorado</option>
                                                                                <option value="CT">Connecticut</option>
                                                                                <option value="DE">Delaware</option>
                                                                                <option value="DC">District Of Columbia</option>
                                                                                <option value="FL">Florida</option>
                                                                                <option value="GA">Georgia</option>
                                                                                <option value="HI">Hawaii</option>
                                                                                <option value="ID">Idaho</option>
                                                                                <option value="IL">Illinois</option>
                                                                                <option value="IN">Indiana</option>
                                                                                <option value="IA">Iowa</option>
                                                                                <option value="KS">Kansas</option>
                                                                                <option value="KY">Kentucky</option>
                                                                                <option value="LA">Louisiana</option>
                                                                                <option value="ME">Maine</option>
                                                                                <option value="MD">Maryland</option>
                                                                                <option value="MA">Massachusetts</option>
                                                                                <option value="MI">Michigan</option>
                                                                                <option value="MN">Minnesota</option>
                                                                                <option value="MS">Mississippi</option>
                                                                                <option value="MO">Missouri</option>
                                                                                <option value="MT">Montana</option>
                                                                                <option value="NE">Nebraska</option>
                                                                                <option value="NV">Nevada</option>
                                                                                <option value="NH">New Hampshire</option>
                                                                                <option value="NJ">New Jersey</option>
                                                                                <option value="NM">New Mexico</option>
                                                                                <option value="NY">New York</option>
                                                                                <option value="NC">North Carolina</option>
                                                                                <option value="ND">North Dakota</option>
                                                                                <option value="OH">Ohio</option>
                                                                                <option value="OK">Oklahoma</option>
                                                                                <option value="OR">Oregon</option>
                                                                                <option value="PA">Pennsylvania</option>
                                                                                <option value="RI">Rhode Island</option>
                                                                                <option value="SC">South Carolina</option>
                                                                                <option value="SD">South Dakota</option>
                                                                                <option value="TN">Tennessee</option>
                                                                                <option value="TX">Texas</option>
                                                                                <option value="UT">Utah</option>
                                                                                <option value="VT">Vermont</option>
                                                                                <option value="VA">Virginia</option>
                                                                                <option value="WA">Washington</option>
                                                                                <option value="WV">West Virginia</option>
                                                                                <option value="WI">Wisconsin</option>
                                                                                <option value="WY">Wyoming</option>
                                                                            </select>                                
                                                                            <label for="floatingInput">State</label>
                                                                        </div>                                            
                                                                    </div>                                    
                                                                </div> 
                                                                <div class="row justify-content-start">
                                                                    <div class="col-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input id="br__city" name="br__city" value="<?php echo $temp[$x]['city']; ?>" class="form-control" type="text" />
                                                                            <label for="floatingInput">City</label>
                                                                        </div>                                            
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input id="br__phone" name="br__phone" value="<?php echo $temp[$x]['phone']; ?>" class="form-control" type="text" />
                                                                            <label for="floatingInput">Phone</label>
                                                                        </div>                                            
                                                                    </div>                                    
                                                                </div>                                 
                                                                <div class="row justify-content-start">
                                                                    <div class="col-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input id="br__email" name="br__email" value="<?php echo $temp[$x]['email']; ?>" class="form-control" type="text" />
                                                                            <label for="floatingInput">Email</label>
                                                                        </div>                                            
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="form-floating mb-3">
                                                                            <select id="br__type" name="br__type" class="form-control">
                                                                                <option value="<?php echo $temp[$x]['state']; ?>" selected><?php echo $temp[$x]['state']; ?></option>
                                                                                <option value="ADMIN">ADMIN</option>
                                                                                <option value="CUSTOMER">CUSTOMER</option>
                                                                            </select>                                
                                                                            <label for="floatingInput">Type</label>
                                                                        </div>                                            
                                                                    </div>                                    
                                                                </div>                                                         
																<?php } ?>
