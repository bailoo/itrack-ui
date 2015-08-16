<table id="content">
	<tr>
		<input id="pac-input" class="controls" type="text" placeholder="Search Box">
		<td class="right_cont" id="map">
		
		</td>
		<td id="sidebar">
			<div class="holder dark">
				<div class="fleft">Display Option:</div>
				<select class="darkselect compact fright" name="display_option">
					<option name="all">All</option>
					<option name="bygroup">By Group</option>
					<option name="byuser">By User</option>
					<option name="byvehicletag">By Vehicle Tag</option>
					<option name="byvehicletype">By Vehicle Type</option>
				</select>
				<div class="clearfix"></div>
				<select class="darkselect compact blockcenter space" name="mode" style="margin-top:20px">
					<option name="map">Map Mode</option>
					<option name="text">Text Mode</option>
				</select>
				<button class="button gray small blockcenter" onclick="$('.darkcover').removeClass('hide')">Select vehicle</button>
				<br>
				<input type="checkbox" id="addarrow" checked>
				<label for="addarrow">Add Arrow</label>
				<input type="checkbox" id="addtrail">
				<label for="addtrail">Add Trail</label>
			</div>
		</td>
	</tr>

</table>

<div class="darkcover">
	<div class="window">
		<div class="windowbar">
			Vehicle List
			<div class="closebtn"></div>
		</div>
		<div class="windowcontent">
			<div class="center">
				<input id="vehicle" class="hideradio" name="vehroute" type="radio" value="1" checked/>
				<label for="vehicle" class="radio" onclick="$('#sec_route').stop().fadeOut(200,function(){$('#sec_vehicle').stop().fadeIn(200)})">Vehicle</label>
			
				<input id="route" class="hideradio" name="vehroute" type="radio" value="2" />
				<label for="route" class="radio" onclick="$('#sec_vehicle').stop().fadeOut(200,function(){$('#sec_route').stop().fadeIn(200)})">Route</label>
			</div>
			<div id="sec_vehicle">
				<div class="select_box" style="width:100%">
					<div class="select-all">
						Select all
					</div>
					<label class="styledbox">
						<input class="check" name="v" type="checkbox" value="1" />
						Vehicle 1
					</label>
					
					<label class="styledbox">
						<input class="check" name="v" type="checkbox" value="2" />
						Vehicle 2
					</label>
					
					<label class="styledbox">
						<input class="check" name="v" type="checkbox" value="3" />
						Vehicle 3
					</label>
					
					<label class="styledbox">
						<input class="check" name="v" type="checkbox" value="4" />
						Vehicle 4
					</label>
					
					<label class="styledbox">
						<input class="check" name="v" type="checkbox" value="5" />
						Vehicle 5
					</label>
					
					<label class="styledbox">
						<input class="check" name="v" type="checkbox" value="6" />
						Vehicle 6
					</label>
					
					<label class="styledbox">
						<input class="check" name="v" type="checkbox" value="7" />
						Vehicle 7
					</label>
				</div>
				<div class="space">
					Refresh rate: 
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
				</div>
				<div style="font-size:11px">(Note: Below 2 min interval is valid for single vehicle only)</div>
				
				<div class="center space">
					<input id="mapmodea" class="hideradio" name="mvmodea" type="radio" value="1" checked/>
					<label for="mapmodea" class="radio">Map Mode</label>
				
					<input id="vehmodea" class="hideradio" name="mvmodea" type="radio" value="2" />
					<label for="vehmodea" class="radio">Text Mode</label>
				</div>
				<div class="center space">
					<button class="button gray small">Enter</button>
					<button class="button gray small">Clear</button>
				</div>
			</div>
			
			
			<div id="sec_route" class="hide">

				<div class="center space">
					<input id="evening" class="hideradio" name="evemorning" type="radio" value="1" checked/>
					<label for="evening" class="radio">Evening</label>
				
					<input id="morning" class="hideradio" name="evemorning" type="radio" value="2" />
					<label for="morning" class="radio">Morning</label>
				</div>
				
				
				<div class="space">
					Refresh rate: 
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
				</div>
				<div style="font-size:11px">(Note: Below 2 min interval is valid for single vehicle only)</div>
				
				<div class="select_box space" style="width:100%">
					<div class="select-all">
						Select all
					</div>
					<label class="styledbox">
						<input class="check" name="v" type="checkbox" value="1" />
						Vehicle 1
					</label>
					
					<label class="styledbox">
						<input class="check" name="v" type="checkbox" value="2" />
						Vehicle 2
					</label>
					
					<label class="styledbox">
						<input class="check" name="v" type="checkbox" value="3" />
						Vehicle 3
					</label>
					
					<label class="styledbox">
						<input class="check" name="v" type="checkbox" value="4" />
						Vehicle 4
					</label>
					
					<label class="styledbox">
						<input class="check" name="v" type="checkbox" value="5" />
						Vehicle 5
					</label>
					
					<label class="styledbox">
						<input class="check" name="v" type="checkbox" value="6" />
						Vehicle 6
					</label>
					
					<label class="styledbox">
						<input class="check" name="v" type="checkbox" value="7" />
						Vehicle 7
					</label>
				</div>
				
				<div class="center space">
					<input id="mapmodee" class="hideradio" name="mvmodee" type="radio" value="1" checked/>
					<label for="mapmodee" class="radio">Map Mode</label>
				
					<input id="vehmodee" class="hideradio" name="mvmodee" type="radio" value="2" />
					<label for="vehmodee" class="radio">Text Mode</label>
				</div>
				
				<div class="center space">
					<button class="button gray small">Enter</button>
					<button class="button gray small">Clear</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="map_search.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete"></script>
<script>
	$("#live").addClass("selected");
</script>
