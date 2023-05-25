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

function deleteUser() {
    Swal.fire({
            title: 'Delete',
            text: "Do you want to delete this user?",
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
                    title: 'Deleted!',
                    text: "User has been deleted.",
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