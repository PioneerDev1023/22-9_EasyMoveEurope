const picker = document.getElementById('datepicker');
picker.min = new Date().toISOString().split("T")[0];
picker.addEventListener('input', function(e){
  var day = new Date(this.value).getUTCDay();
  var pick_day = new Date(this.value).toISOString().split("T")[0];
  if(picker.min == pick_day) {
      Command: toastr["info"]("Pickup on same day is subject to an additional fee of 95.20 €");
  }
  if([6,0].includes(day)){
      e.preventDefault();
      Command: toastr["info"]("Pickup on weekend days is subject to an additional fee of €130.90");
  }
});