$(document).on('click', '[data-bs-toggle="ajax-modal"]', function () {
    var partylistId = $(this).closest('.partylist-card').data('partylist-id');
    var modal = $($(this).data('bs-target'));

    $.ajax({
        url: '/partylist/' + partylistId,
        type: 'GET',
        success: function (response) {
            var partylist = response.partylists;
            var candidates = response.candidates;

            // Update the modal content with the retrieved data
            modal.find('.modal-title').text(partylist.partylist_name);
            var tableBody = modal.find('.modal-body').find('tbody');
            tableBody.empty();
            
            candidates.forEach(function (candidate, index) {
                var row = '<tr>' +
                    '<th scope="row">' + (index + 1) + '</th>' +
                    '<td>' + candidate.position_name + '</td>' +
                    '<td>' + candidate.candidate_fname + " " + candidate.candidate_lname  + '</td>' +
                    '<td>' + candidate.candidate_yrlevel + '</td>' +
                    '<td>' + candidate.candidate_program + '</td>' +
                    '<td>' + candidate.candidate_platform + '</td>' +
                    '</tr>';
                tableBody.append(row);
            });
            
            // Open the modal
            modal.modal('show');
        },
        error: function (xhr, status, error) {
            console.log("fail");
        }
    });
});

$(document).on('click', '[data-bs-toggle="ajax-user-modal"]', function () {
    var userId = $(this).closest('.user-card').data('user-id');
    var modal = $($(this).data('bs-target'));

    $.ajax({
        url: '/user/' + userId,
        type: 'GET',
        success: function (response) {
            var user = response.users;
            // Update the modal content with the retrieved data
            modal.find('.modal-title').text(user.user_lname);
            var tableBody = modal.find('.modal-body').find('tbody');
            tableBody.empty();
            
            candidates.forEach(function (candidate, index) {
                var row = '<tr>' +
                    '<th scope="row">' + (index + 1) + '</th>' +
                    '<td>' + candidate.position_name + '</td>' +
                    '<td>' + candidate.candidate_fname + " " + candidate.candidate_lname  + '</td>' +
                    '<td>' + candidate.candidate_yrlevel + '</td>' +
                    '<td>' + candidate.candidate_program + '</td>' +
                    '<td>' + candidate.candidate_platform + '</td>' +
                    '</tr>';
                tableBody.append(row);
            });
            
            // Open the modal
            modal.modal('show');
        },
        error: function (xhr, status, error) {
            console.log("fail");
        }
    });
});

function approve() {
    Swal.fire({
            title: 'Approve',
            text: "Are you sure you want to approve this partylist?",
            icon: 'warning',
            showCancelButton: true,
            width: 500,
            heightAuto: false,
            color: 'white',
            confirmButtonColor: '#4BB1F7',
            cancelButtonColor: '#F27171',
            background: '#0e2535',
            confirmButtonText: 'Yes'
        })
        .then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Approved!',
                    text: "Partylist has been approved.",
                    icon: 'success',
                    width: 400,
                    heightAuto: false,
                    color: 'white',
                    confirmButtonColor: '#4BB1F7',
                    cancelButtonColor: '#F27171',
                    background: '#0e2535',
                }
                )
              }
        })

}

function decline() {
    Swal.fire({
            title: 'Decline',
            text: "Are you sure you want to decline this partylist?",
            icon: 'warning',
            showCancelButton: true,
            width: 500,
            heightAuto: false,
            color: 'white',
            confirmButtonColor: '#4BB1F7',  
            cancelButtonColor: '#F27171',
            background: '#0e2535',
            confirmButtonText: 'Yes'
        })
        .then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Declined!',
                    text: "Partylist has been declined.",
                    icon: 'success',
                    width: 400,
                    heightAuto: false,
                    color: 'white',
                    confirmButtonColor: '#4BB1F7',
                    cancelButtonColor: '#F27171',
                    background: '#0e2535',
                }
                )
              }

        })

}

function archive() {
    Swal.fire({
            title: 'Archive',
            text: "Do you want to archive this partylist?",
            icon: 'warning',
            showCancelButton: true,
            width: 500,
            heightAuto: false,
            color: 'white',
            confirmButtonColor: '#4BB1F7',  
            cancelButtonColor: '#F27171',
            background: '#0e2535',
            confirmButtonText: 'Yes'
        })
        .then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Archived!',
                    text: "Partylist has been archived.",
                    icon: 'success',
                    width: 400,
                    heightAuto: false,
                    color: 'white',
                    confirmButtonColor: '#4BB1F7',
                    cancelButtonColor: '#F27171',
                    background: '#0e2535',
                }
                )
              }

        })

}

function resetAll() {
    Swal.fire({
        title: 'Reset',
        text: "Do you want to reset all votes?",
        icon: 'warning',
        showCancelButton: true,
        width: 500,
        heightAuto: false,
        color: 'white',
        confirmButtonColor: '#4BB1F7',
        cancelButtonColor: '#F27171',
        background: '#0e2535',
        confirmButtonText: 'Yes'
    }).then((result) => {
        if (result.isConfirmed) {
            // Perform AJAX request to delete votes and update users
            $.ajax({
                url: '/resetVotes',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    Swal.fire({
                        title: 'Reset!',
                        text: "Votes have been cleared.",
                        icon: 'success',
                        width: 500,
                        heightAuto: false,
                        color: 'white',
                        confirmButtonColor: '#4BB1F7',
                        cancelButtonColor: '#F27171',
                        background: '#0e2535',
                    })
                    .then((result) => {
                        // Reload the Page
                        location.reload();
                      });
                },
                error: function () {
                    Swal.fire({
                        title: 'Error',
                        text: "An error occurred while resetting votes.",
                        icon: 'error',
                        width: 500,
                        heightAuto: false,
                        color: 'white',
                        confirmButtonColor: '#4BB1F7',
                        cancelButtonColor: '#F27171',
                        background: '#0e2535',
                    });
                }
            });
        }
    });
}


function updateUser() {
    Swal.fire({
            title: 'Update',
            text: "Do you want update this user?",
            icon: 'question',
            showCancelButton: true,
            width: 500,
            heightAuto: false,
            color: 'white',
            confirmButtonColor: '#4BB1F7',  
            cancelButtonColor: '#F27171',
            background: '#0e2535',
            confirmButtonText: 'Yes'
        })
        .then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Updated!',
                    text: "User has been updated.",
                    icon: 'success',
                    width: 400,
                    heightAuto: false,
                    color: 'white',
                    confirmButtonColor: '#4BB1F7',
                    cancelButtonColor: '#F27171',
                    background: '#0e2535',
                }
                )
              }

        })

}

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

function archivePartylist(verifiyID) {
    // Make an AJAX request to update the partylist status

    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    console.log(verifiyID);
    $.ajax({
        url: '/form-verification',
        type: 'POST',
        data: {
            id: verifiyID
        },
        headers: {
            'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
          },
        success: function(response) {
            // Handle the success response here
            // For example, you can show a success message or update the UI
            // location.reload();
        },
        error: function(xhr, status, error) {
            // Handle the error response here
            // For example, you can show an error message or handle the error gracefully
        }
    });
}

function archivePartylist(partylistId) {
    // Make an AJAX request to update the partylist status

    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    console.log(partylistId);
    $.ajax({
        url: '/form-verification',
        type: 'POST',
        data: {
            id: partylistId
        },
        headers: {
            'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
          },
        success: function(response) {
            // Handle the success response here
            // For example, you can show a success message or update the UI
            // location.reload();
        },
        error: function(xhr, status, error) {
            // Handle the error response here
            // For example, you can show an error message or handle the error gracefully
        }
    });
}