function logout() {
    Swal.fire({
            title: 'Log Out',
            text: "Are you sure you want to log out?",
            icon: 'warning',
            showCancelButton: true,
            width: 400,
            heightAuto: false,
            color: 'white',
            confirmButtonColor: '#4BB1F7',
            cancelButtonColor: '#F27171',
            background: '#0e2535',
            confirmButtonText: 'Yes'
        })
        .then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "GET",
                    url: "/logout",
                    data: "data",
                    dataType: "dataType",
                    success: function(response) {}
                });

                location.reload();

            }

        })

}