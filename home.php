<table id="content">
	<tr>
		<td id="sidebar">
			<div class="sidebar_title">
				Embedding Intelligence Everywhere
			</div>
			<div class="select_box">
					<div class="select-all">
						Select all
					</div>
				    <label>
						<input class="check" name="v" type="checkbox" value="1" />
						Vehicle 1
					</label>
					
					<label>
						<input class="check" name="v" type="checkbox" value="2" />
						Vehicle 2
					</label>
					
					<label>
						<input class="check" name="v" type="checkbox" value="3" />
						Vehicle 3
					</label>
					
					<label>
						<input class="check" name="v" type="checkbox" value="4" />
						Vehicle 4
					</label>
					
					<label>
						<input class="check" name="v" type="checkbox" value="5" />
						Vehicle 5
					</label>
					
					<label>
						<input class="check" name="v" type="checkbox" value="6" />
						Vehicle 6
					</label>
					
					<label>
						<input class="check" name="v" type="checkbox" value="7" />
						Vehicle 7
					</label>
			</div>
			<div class="holder light">
				
					<input id="rad1" class="hideradio" name="tracktype" type="radio" value="1" checked/>
					<label for="rad1" class="radio">Last Position</label>
				
					<input id="rad2" class="hideradio" name="tracktype" type="radio" value="2" />
					<label for="rad2" class="radio">Track</label>
				<input type="text" name="start_date" class="custom_date datepicker spacealt" value="Start">
				<input type="text" name="end_date" class="custom_date datepicker" value="End">
				
				<div class="space">Interval:</div>
				<select class="darkselect" name="interval">
					<option value="5s">5 sec</option>
					<option value="30s">30 sec</option>
					<option value="1m">1 min</option>
					<option value="2m">2 min</option>
					<option value="4m">4 min</option>
					<option value="5m">5 min</option>
					<option value="10m">10 min</option>
					<option value="15m">15 min</option>
					<option value="20m">20 min</option>
					<option value="30m">30 min</option>
					<option value="60m">60 min</option>
				</select>
				<div class="space">
					<button name="map" class="button gray medium">Map</button> <button name="report" class="button gray medium">Report</button>
				</div>
			</div>
			<div class="holder dark">
				<div class="fleft">Balloon Action</div>
				<div class="fright">
					<select class="darkselect" name="baction">
						<option value="click">Mouse Click</option>
						<option value="over">Mouse Over</option>
					</select>
					
				</div>
				<div class="clearfix fleft space">
					Data With Location
				</div>
				<div class="fright space" style="margin-right:82px">
					<input type="checkbox" name="dwl" value="1">
				</div>
				<div class="clearfix fleft space">
					Geofence
				</div>
				<div class="fright space" style="margin-right:82px">
					<input type="checkbox" name="geofence" value="1">
				</div>
				<div class="clearfix fleft space">
					Latitude/Longitude
				</div>
				<div class="fright space" style="margin-right:82px">
					<input type="checkbox" name="ll" value="1">
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="holder light">
				Filter Speed Balloons
				<div class="space">
					<img src="img/yellow_m.png"> 1 to 20 &nbsp;&nbsp;&nbsp; <img src="img/green_m.png"> >20 &nbsp;&nbsp;&nbsp; <img src="img/green_m.png"> <1 &nbsp;&nbsp;&nbsp; <img style="width:9px" src="img/blink_m.gif"> Current
				</div>
			
			</div>
			<div class="holder dark">
				<div class="fleft">Show</div>
				<div class="fright">
					<select class="darkselect" style="width:100px" name="show">
						<option value="sel">Select</option>
						<option value="cust">Customer</option>
						<option value="plant">Plant</option>
					</select>
				</div>
				<div class="fleft clearfix space">
					Search Station
				</div>
				<div class="fright space">
					<input type="text" class="smallinput dark" name="station">
				
				</div>
				
				<div class="fleft clearfix space">
					Search Landmark
				</div>
				<div class="fright space">
					<input type="text" class="smallinput dark" name="landmark">
				
				</div>
				<div class="clearfix"></div>
			
			</div>
			<div class="holder light" style="font-size:13px;text-align:center;padding-left:2px;padding-right:2px">
				Support Ph:<br>
				<span style="font-weight:700;color:#478cb3">+91-8090025844</span>,<span style="font-weight:700;color:#478cb3">+91-9956001418(24X7)</span></span><br>
			</div>
			<div class="holder light" style="width:100%;position:absolute;bottom:0;box-sizing:border-box;-webkit-box-sizing:border-box;">
				<span style="font-size:11px">@ Copyright IESPL All Right Reserved</span>
			</div>
		</td>
		<td class="right_cont" id="map-canvas">
		
		</td>
	</tr>

</table>