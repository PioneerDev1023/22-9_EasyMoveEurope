const picker = document.getElementById('datepicker');
picker.min = new Date().toISOString().split("T")[0];
picker.addEventListener('input', function(e){
  var day = new Date(this.value).getUTCDay();
  if([6,0].includes(day)){
      e.preventDefault();
      Command: toastr["info"]("Pickup on weekend days is subject to an additional fee of €130.90");
  }
});