// script for website jump popup

document.querySelectorAll('.webpopbtn').forEach(button => {
            button.addEventListener('click', function() {
                const targetUrl = this.getAttribute('data-url');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You will be redirected to another website.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, go!',
                    cancelButtonText: 'No, stay here',
                    customClass: {
                        confirmButton: 'confirm-button',
                        cancelButton: 'cancel-button'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = targetUrl;
                    }
                });
            });
        });
        
        
        
        
        