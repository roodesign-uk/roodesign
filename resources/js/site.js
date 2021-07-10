(function(d, w){
  var FathomEvents = document.querySelectorAll('[data-fathom-event]')
  Array.prototype.forEach.call(FathomEvents, function(el, i) {
    var eventId = el.getAttribute('data-fathom-event')
    el.addEventListener('click', function() {
      fathom.trackGoal(eventId, 0)
    })
  })
})(document, window)