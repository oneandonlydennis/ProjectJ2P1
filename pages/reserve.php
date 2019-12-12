<?php
echo '
<form action="./functionality/reserve.php" method="post" class="reservepost">
<label for="color">Kleur jeans: </label>
<select name="color" id="kleur">
  <option value="zwart">Zwart</option>
  <option value="blauw">Blauw</option>
  <option value="grijs">Grijs</option>
</select>
<label for="sex">Voor: </label>
<select name="sex" id="sex">
<option value="male">Man</option>
<option value="female">Vrouw</option>
</select>
<label for="size">Maat: </label>
<select name="size" id="size">
<option value="28">28</option>
<option value="30">30</option>
<option value="32">32</option>
<option value="34">34</option>
<option value="36">36</option>
<option value="38">38</option>
<option value="40">40</option>
</select>
<button type="submit" class="btn btn-primary">Reserveer jeans</button>
</form>';