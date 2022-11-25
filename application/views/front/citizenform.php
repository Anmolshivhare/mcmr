<style>
.flex-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 300px;
  /* background-color: DodgerBlue; */
}

.flex-container > div button {
  background-color: #f1f1f1;
  color: black;
  width: 120px;
  height: 60px;
  background:yellow;
  margin:5px;
  border:3px solid green;
  border-radius:13px;
}
</style>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="flex-container">
  <div>
  <button><a href="<?php echo base_url()?>home/personal_details"><b>Personal Details </b></a> </button>
  </div>
  
  <div>
  <button><a href="<?php echo base_url()?>home/business_form"><b>Business Details</b></a></button>
  </div>
</div>