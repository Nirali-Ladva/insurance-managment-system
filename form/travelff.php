<div id="content">

<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Policy Booking Form</h5>
        </div>
		<div class="widget-content nopadding">
          <form action="addtravel_form.php" method="GET" class="form-horizontal">
			<div class="control-group">
             
              <div class="controls">
			   <input type="hidden" name="t_id">
              </div>
			  
			<div class="control-group">
              <label class="control-label">First name</label>
              <div class="controls">
			   <input type="text" name="fname">
              </div>
			  
			   <div class="control-group">
              <label class="control-label">Last name</label>
              <div class="controls">
			   <input type="text" name="lname">
              </div>
			  
			   <div class="control-group">
              <label class="control-label">Email</label>
              <div class="controls">
			   <input type="email" name="email">
              </div>
			  
			  <div class="control-group">
              <label class="control-label">Contact no.</label>
              <div class="controls">
			   <input type="text" name="contact_no">
              </div>
			  
			   <div class="control-group">
              <label class="control-label">Pin code</label>
              <div class="controls">
			   <input type="text" name="pincode">
              </div>
			  
			   <div class="control-group">
              <label class="control-label">Age</label>
              <div class="controls">
			   <input type="text" name="age">
              </div>
			  
            </div>
		
            <div class="control-group">
              <label class="control-label">Date of birth</label>
              <div class="controls">
                <select name="day">
				<option value=dd> dd </option> 
				<option value=1> 1 </option> 
				<option value=2> 2 </option> 
				<option value=3> 3 </option> 
				<option value=4> 4 </option> 
				<option value=5> 5 </option> 
				<option value=6> 6 </option> 
				<option value=7> 7 </option> 
				<option value=8> 8 </option> 
				<option value=9> 9 </option> 
				<option value=10> 10 </option> 
				<option value=11> 11 </option> 
				<option value=12> 12 </option> 
				<option value=13> 13 </option> 
				<option value=14> 14 </option> 
				<option value=15> 15 </option> 
				<option value=16> 16 </option> 
				<option value=17> 17 </option> 
				<option value=18> 18 </option> 
				<option value=19> 19 </option> 
				<option value=20> 20 </option> 
				<option value=21> 21 </option> 
				<option value=22> 22 </option> 
				<option value=23> 23 </option> 
				<option value=24> 24 </option> 
				<option value=25> 25 </option> 
				<option value=26> 26 </option> 
				<option value=27> 27 </option> 
				<option value=28> 28 </option> 
				<option value=29> 29 </option> 
				<option value=30> 30 </option> 
				<option value=31> 31 </option> 
                </select>
				<select name="month"  >
				<option value=mm> mm </option>
				<option value=1> 1 </option> 
				<option value=2> 2 </option> 
				<option value=3> 3 </option> 
				<option value=4> 4 </option> 
				<option value=5> 5 </option> 
				<option value=6> 6 </option> 
				<option value=7> 7 </option> 
				<option value=8> 8 </option> 
				<option value=9> 9 </option> 
				<option value=10> 10 </option> 
				<option value=11> 11 </option> 
				<option value=12> 12 </option>
				</select>
				<select name="year"  >
				<option value=yy> yyyy </option>
				<option value=2000> 2000 </option> 
				<option value=2001> 2001 </option> 
				<option value=2002> 2002 </option> 
				<option value=2003> 2003 </option> 
				<option value=2004> 2004 </option> 
				<option value=2005> 2005 </option> 
				<option value=2006> 2006 </option> 
				<option value=2007> 2007 </option> 
				<option value=2008> 2008 </option> 
				<option value=2009> 2009 </option> 
				<option value=2010> 2010 </option> 
				<option value=2011> 2011 </option> 
				<option value=2012> 2012 </option> 
				<option value=2013> 2013 </option> 
				<option value=2014> 2014 </option> 
				<option value=2015> 2015 </option> 
				<option value=2016> 2016 </option> 
				<option value=2017> 2017 </option> 
			</select>
 
              </div>
            </div>
            </div>

		  
            <div class="control-group">
              <label class="control-label">City</label>
              <div class="controls">
                <select name="city" >
                  <option>Jamnagar</option>
                  <option>Ahmedabad</option>
                  <option>Surat</option>
                  <option>Baroda</option>
                  <option>Rajkot</option>
                
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Gender</label>
              <div class="controls">
                <label>
                  <input type="radio" name="gender" value="male" />
					Male
				  </label>
                <label>
                  <input type="radio" name="gender" value="female" />
                  Female
				  </label>
          
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Travel Plan</label>
              <div class="controls">
                <select name="travelplan" >
				<option name="Select">Select</option>
                  <option name="Individual travel">Individual travel</option>
                  <option name="Family travel">Family travel</option>
                  <option name="Senior citizen travel">Senior citizen travel</option>
                  <option name="Student travel">Student travel</option>
                  
                </select>
              </div>
            </div>
	  
            <div class="control-group">
              <label class="control-label">Country travel to:</label>
              <div class="controls">
                <select name="country">
				<option value="select"> select </option> 
				<option value="india"> India </option> 
				<option value="america"> America </option> 
				<option value="u.k"> U.K </option> 
				<option value="japan"> Japan </option> 
				</select>
				</div>
				
			   <div class="control-group">
              <label class="control-label">Start date</label>
              <div class="controls">
			   <input type="date" name="s_date" value="dd mm yyyy">
              </div>
			  
			     <div class="control-group">
              <label class="control-label">Return date</label>
              <div class="controls">
			   <input type="text" name="r_date">
              </div>
			  
			    <div class="control-group">
              <label class="control-label">No. of days</label>
              <div class="controls">
			   <input type="text" name="num_day">
              </div>
			              
              </div>
            </div>
		</div> 
             
            </div>
            <div class="control-group">
              <label class="control-label">Sum assured</label>
              <div class="controls">
                <select name="sum_assured">
				<option value="select"> Select </option> 
				<option value="400000"> 400000 </option> 
				<option value="500000"> 500000 </option> 
				<option value="1000000"> 1000000 </option> 
			
		
				</select>
            </div>
			  </div>
			  
            </div>
            <div class="control-group">
              <label class="control-label">Premium</label>
              <div class="controls">
                <select name="premium">
				<option value="select"> Select </option> 
				<option value="5500"> 5500 </option> 
				<option value="9200"> 9200 </option> 
				<option value="21800"> 218000 </option> 
			
				
				</select>
            </div>
			  </div>
			  <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
			
			  <div class="form-actions">
              <button type="submit" class="btn btn-success">Print</button>
            </div>
			   </form>
			  </div>
</div></div>
