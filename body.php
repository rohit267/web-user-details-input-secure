<body>
	<div class="header">
	<div>
		<h1 class="text-center"><u>Heading </u></h1>
	</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="card ">
					<h3 class="text-center card-header">Enter Your Details</h3>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div class="row">
                    	<div class="col">
                    		<div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control" id="stdid" placeholder="Full Name">
                                <span class="error"><?php echo $nameErr;?></span>
                            </div>
                    	</div>
                    	    <div class="col">
                    	    	<label for="stdid">Student ID:</label>
                                <input type="number" name="stdid" class="form-control" id="stdid" value="17901100">
                                <span class="error"><?php echo $stdidErr;?></span>
                    	    </div>
                    </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="fname">Father's Name:</label>
                        <input type="text" name="fname" class="form-control" id="fname" placeholder="Father's Name">
                        <span class="error"><?php echo $fnameErr;?></span>
                    </div>
                    <div class="form-group col">
                        <label for="mname">Mother's Name:</label>
                        <input type="text" name="mname" class="form-control" id="mname" placeholder="Mother's Name">
                        <span class="error"><?php echo $mnameErr;?></span>
                    </div>
                </div>
                    <div class="row">
                    	<div class="col">
                    		<div class="form-group">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" name="dob" class="form-control" id="dob" placeholder="dd-mm-yyyy">
                        <span class="error"><?php echo $dobErr;?></span>
                    </div>
                    
                    	</div>
                    	<div class="col">
                    		<div class="form-group">
                        <label for="bg">Blood Group:</label>
                        <input type="text" name="bg" class="form-control" id="bg" placeholder="Blood Group">
                        <span class="error"><?php echo $bgErr;?></span>
                    </div>
                    	</div>
                    </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="email@example.com">
                        <span class="error"><?php echo $emailErr;?></span>
                    </div>
                    <div class="form-group col">
                        <label for="mob">Mobile:</label>
                        <input type="number" name="mob" class="form-control" id="mob" placeholder="mobile">
                        <span class="error"><?php echo $mobErr;?></span>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="address">Permanent Address:</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="House no., Street , Village/City">
                        <span class="error"><?php echo $addressErr;?></span>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="dist">District:</label>
                            <input type="text" name="dist" class="form-control" id="inputCity">
                            <span class="error"><?php echo $distErr;?></span>
                        </div>
                    <div class="form-group col-md-4">
                        <label for="state">State</label>
                        <select id="state" name="state" class="form-control" placeholder="Distric">
                            <option value="">Select State</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Orissa">Orissa</option>
                            <option value="Pondicherry">Pondicherry</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttaranchal">Uttaranchal</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>
                        <span class="error"><?php echo $stateErr;?></span>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="pin">Pincode</label>
                        <input type="number" name="pin" class="form-control" id="pin">
                        <span class="error"><?php echo $pinErr;?></span>
                    </div>
                </div>
                <div><p align="center"><input class="btn btn-primary" type="submit" name="submit" value="Submit"></p></div>
            </form>
        </div>
        </div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>