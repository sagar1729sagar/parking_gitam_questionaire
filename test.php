<?php
require_once('safe_redirect.php');
//print_r($_POST);
if (isset($_POST['submit'])) {
if(!empty($_POST['q2'])){

echo "<span>You have selected :<b> ".$_POST['q2']."</b></span>";

if($_POST['q2']=='yes'){

echo "<html>
<body style='background-color:LightCyan;'>



</body>
 <form action='thank.php?user=".$_POST['optradio']."&living_outside_campus=".$_POST['q2']."' method='post'>



<p><p style='color:ForestGreen; font-size:100%; font-family:verdana;'>3.With whom are you sharing your living accommodation:<BR></p>

<input type='radio' name='living' value='Family or close Relatives'>
<label for='Family or close Relatives'>Family or close Relatives</label>

<input type='radio' name='living' value='Other student'>
<label for='Other student'>Other student</label>

<input type='radio' name='living' value='Gitamites'>
<label for='Gitamites'>Gitamites</label>

<input type='radio' name='living' value='Other students from different institution'>
<label for='Other students from different institution'>Other students from different institution</label>

</p>

<P style='color:ForestGreen; font-size:100%; font-family:verdana;'>5.Which area do you belongs to:<textarea name='Which area do you belongs to' rows='1' cols='40'></textarea>
 <BR></p>
</p>


<P style='color:ForestGreen; font-size:100%; font-family:verdana;'>5.Postal PIN code:<textarea name='Postal PIN code' rows='1' cols='40'></textarea>
 <BR></p>
</p>




<h4 style='color:MidnightBlue;font-size:100%; font-family:verdana'>Movement into GITAM campus</h4>


<p><p style='color:ForestGreen; font-size:100%; font-family:verdana;'>6.From which entrance do you come into the campus:<BR></p>

<input type='radio' name='entrance' value='East Gate at Beach Road'>
<label for='East Gate at Beach Road'>East Gate at Beach Road</label>

<input type='radio' name='entrance' value='West Gate at Yendada Road'>
<label for='West Gate at Yendada Road'>West Gate at Yendada Road</label>

<input type='radio' name='entrance' value='GIMSR Gate'>
<label for='GIMSR Gate'>GIMSR Gate</label>
</p>

<p><p style='color:ForestGreen; font-size:100%; font-family:verdana;'>7.From which exit gate do you leave the campus:<BR></p>
<input type='radio' name='exit' value='East Gate at Beach Road'>
<label for='East Gate at Beach Road'>East Gate at Beach Road</label>

<input type='radio' name='exit' value='West Gate at Yendada Road'>
<label for='West Gate at Yendada Road'>West Gate at Yendada Road</label>

<input type='radio' name='exit' value='GIMSR Gate'>
<label for='GIMSR Gate'>GIMSR Gate</label>
</p>

<p style='color:ForestGreen; font-size:100%; font-family:verdana;'>8.How do you commute to campus: <SELECT NAME='commute_to_campus' ></p>
<OPTION SELECTED VALUE=''>select
<option value='City bus'>City bus</option>
<option value='RTC bus for Gitamites'>RTC bus for Gitamites</option>
<option value='Private Van or Minibus'>Private Van or Minibus</option>
<option value='Three-wheeler'>Three-wheeler</option>
<option value='Car'>Car</option>
<option value='Motorcycle'>Motorcycle</option>
<option value='Scooter'>Scooter</option>
<option value='Bicycle'>Bicycle</option>
<option value='By foot'>By foot</option> </SELECT>
</p>

<p style='color:ForestGreen; font-size:100%; font-family:verdana;'>9.How do you leave the entry gate at end of the day: <SELECT NAME='commute_from_campus' ></p>
<OPTION SELECTED VALUE=''>select
<option value='City bus'>City bus</option>
<option value='RTC bus for Gitamites'>RTC bus for Gitamites</option>
<option value='Private Van or Minibus'>Private Van or Minibus</option>
<option value='Three-wheeler'>Three-wheeler</option>
<option value='Car'>Car</option>
<option value='Motorcycle'>Motorcycle</option>
<option value='Scooter'>Scooter</option>
<option value='Bicycle'>Bicycle</option>
<option value='By foot'>By foot</option> </SELECT>
</p>

<p style='color:ForestGreen; font-size:100%; font-family:verdana;'>10.Do you offer pool-rides to any other GITAMites:<BR></p>
<input type='radio' name='pool_ride' value='No'>No<BR>
<input type='radio' name='pool_ride' value='Yes'>Yes<BR>
</p>

<p style='color:ForestGreen; font-size:100%; font-family:verdana;'>11.Do you drive to campus for more than 10 days a month:<BR></p>
<input type='radio' name='drive_often' value='No'>No<BR>
<input type='radio' name='drive_often' value='Yes'>Yes<BR>
</p>

<p style='color:ForestGreen; font-size:100%; font-family:verdana;'>12.Do you commute very often on another GITAMite's vehicle:<BR></p>
<input type='radio' name='pool_often'value='No'>No<BR>
<input type='radio' name='pool_often' value='Yes'>Yes<BR>
</p>


<p style='color:ForestGreen; font-size:100%; font-family:verdana;'>9.How do you leave the entry gate at end of the day: <SELECT NAME='reach_time' ></p>
<OPTION SELECTED VALUE=''>select
<option value='6 AM to 8 AM'>6 AM to 8 AM</option>
<option value='8:15 AM to 8:30 AM'>8:15 AM to 8:30 AM</option>
<option value='8:30 AM to 8:45 AM'>8:30 AM to 8:45 AM</option>
<option value='8:45 AM to 9 AM'>8:45 AM to 9 AM</option>
<option value='9 AM to 1 PM'>9 AM to 1 PM</option>
<option value='After 1PM'>After 1PM</option></SELECT>
</p>

<P style='color:ForestGreen; font-size:100%; font-family:verdana;'>14. What time do you typically leave the campus: <SELECT NAME='exit_time' ></p>
<OPTION SELECTED VALUE=''>select
<option value='1 PM to 3: 30 PM'>1 PM to 3: 30 PM</option>
<option value='3:30 PM to 4 PM'>3:30 PM to 4 PM</option>
<option value='4 PM to 4:30 PM'>4 PM to 4:30 PM</option>
<option value='4:30 PM to 5 PM'>4:30 PM to 5 PM</option>
<option value='5 PM to 5:15 PM'>5 PM to 5:15 PM</option>
<option value='5:15 PM to 6 PM'>5:15 PM to 6 PM</option>
<option value='6 AM to 8 AM'>6 AM to 8 AM</option><BR></p>
<option value='After 6 PM'>After 6 PM</option> </SELECT>

</p>

<P style='color:ForestGreen; font-size:100%; font-family:verdana;'>15.Where do you typically alight from the vehicle: <SELECT NAME='alighting point' ><BR></p>
<OPTION SELECTED VALUE=''>select
<option value='Outside the Campus'>Outside the Campus</option>
<option value='Around Gitam centre'>Around Gitam centre</option>
<option value='Opp Dental college'>Opp Dental college</option>
<option value='Near bheemas canteen'>near bheemas canteen</option>
<option value='Near GIM'>near GIM</option>
<option value='Inside west gate'>inside west gate</option>
<option value='Near viswevaraya bhavan'>near viswevaraya bhavan</option>
<option value='Near sir arthur cotton bhavan'>near sir arthur cotton bhavan</option>
<option value='Near chandrahas bhavan'>near chandrahas bhavan Campus</option>
<option value='Near Indian bank'>near Indian bank</option>
<option value='Near pharmacy bhavan'>near pharmacy bhavan</option>
<option value='Near CV Raman bhavan'>near CV Raman bhavan</option>
<option value='Near hospital'>near hospital</option> </SELECT>
</p>

<P style='color:ForestGreen; font-size:100%; font-family:verdana;'>16.If the vehicle is not entering the campus:<BR></p>
<input type='radio' name='drop_status'>Does it leave after dropping you<BR>
<input type='radio' name='drop_status' value='Does it remain for you till end of the day'>Does it remain for you till end of the day<BR>
</p>



<P style='color:ForestGreen; font-size:100%; font-family:verdana;'>17.Where is it parked: <SELECT NAME='parking_location' ><BR></p>
<OPTION SELECTED VALUE=''>select
<option value='Outside the Campus'>Outside the Campus</option>
<option value='Around Gitam centre'>Around Gitam centre</option>
<option value='Opp Dental college'>Opp Dental college</option>
<option value='Near bheemas canteen'>near bheemas canteen</option>
<option value='Near GIM'>near GIM</option>
<option value='Inside west gate'>inside west gate</option>
<option value='Near viswevaraya bhavan'>near viswevaraya bhavan</option>
<option value='Near sir arthur cotton bhavan'>near sir arthur cotton bhavan</option>
<option value='Near chandrahas bhavan'>near chandrahas bhavan Campus</option>
<option value='Near Indian bank'>near Indian bank</option>
<option value='Near pharmacy bhavan'>near pharmacy bhavan</option>
<option value='Near CV Raman bhavan'>near CV Raman bhavan</option>
<option value='Near hospital'>near hospital</option> </SELECT>
</p>

<P style='color:ForestGreen; font-size:100%; font-family:verdana;'>18.Which type of vehicle brand do you commute on: <SELECT NAME='Vehicle Brand' ><BR></p>
<OPTION SELECTED VALUE=''>select
<option value='Audi'>Audi</option>
<option value='Benz'>Benz</option>
<option value='BMW'>BMW</option>
<option value='Datsun'>Datsun</option>
<option value='Fiat'>Fiat</option>
<option value='Ford'>Ford</option>
<option value='Audi'>Audi</option>
<option value='Honda'>Honda</option>
<option value='Hyundia'>Hyundia</option>
<option value='Isuzu Motors'>Isuzu Motors</option>
<option value='Jaguar'>Jaguar</option>
<option value='Jeep'>Jeep</option>
<option value='Mahindra'>Mahindra</option>
<option value='Maruti Suzuki'>Maruti Suzuki</option>
<option value='Nissan'>Nissan</option>
<option value='RenaultAudi'>Renault</option>
<option value='Scoda'>Scoda</option>
<option value='Tata Motors'>Tata Motors</option>
<option value='Volkswagen'>Volkswagen</option>
<option value='Volvo'>Volvo</option> </SELECT>
</p>

<P style='color:ForestGreen; font-size:100%; font-family:verdana;'>19. Please enter the vehicle model type:<textarea name='Vehicle Model' rows='1' cols='40'></textarea>
 <BR></p>
</p>

<P style='color:ForestGreen; font-size:100%; font-family:verdana;'>20.Please enter the vehicle registration number:<textarea name='Vehicle Registration Number' rows='1' cols='40'></textarea>
 <BR></p>
</p>


 <input type='submit'>
</form>
 </html>";
}
 else{
  safe_redirect('thank.php?user='.$_POST['optradio'].'&living_outside_campus='.$_POST['q2']);
// echo "<html><h1>Thank you</h1></html>";
 }
} else {
  echo "You didnot select answers for all questions. Please go back and select answers for all questions";
}
}


?>
