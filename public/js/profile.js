$(document).ready(function(e) {
  $('#profile-collected-art').click(function() {
    $('#profile-collected-art').addClass('border-emerald-500')
    $('#profile-collected-art').removeClass('hover:border-gray-200')
    
    $('#profile-created-art').removeClass('border-emerald-500')
    $('#profile-created-art').addClass('hover:border-gray-200')
    
    $('#collected').removeClass('hidden')
    $('#created').addClass('hidden')
  });
  $('#profile-created-art').click(function() {
    $('#profile-created-art').addClass('border-emerald-500')
    $('#profile-created-art').removeClass('hover:border-gray-200')

    $('#profile-collected-art').removeClass('border-emerald-500')
    $('#profile-collected-art').addClass('hover:border-gray-200')

    $('#created').removeClass('hidden')
    $('#collected').addClass('hidden')
  });
});