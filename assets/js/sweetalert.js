document.getElementById("sa-basic").addEventListener("click", () => {
  Swal.fire("Any fool can use a computer")
})

document.getElementById("sa-footer").addEventListener("click", () => {
  Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "Something went wrong!",
    footer: "<a href>Why do I have this issue?</a>",
  })
})

document.getElementById("sa-title").addEventListener("click", () => {
  Swal.fire("The Internet?", "That thing is still around?", "question")
})

document.getElementById("sa-success").addEventListener("click", () => {
  Swal.fire({
    icon: "success",
    title: "Success",
  })
})

document.getElementById("sa-error").addEventListener("click", () => {
  Swal.fire({
    icon: "error",
    title: "Error",
  })
})

document.getElementById("sa-warning").addEventListener("click", () => {
  Swal.fire({
    icon: "warning",
    title: "Warning",
  })
})

document.getElementById("sa-info").addEventListener("click", () => {
  Swal.fire({
    icon: "info",
    title: "Info",
  })
})

document.getElementById("sa-question").addEventListener("click", () => {
  Swal.fire({
    icon: "question",
    title: "Question",
  })
})

document.getElementById("sa-threebuttons").addEventListener("click", () => {
  Swal.fire({
  title: 'Do you want to save the changes?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: 'Save',
  denyButtonText: `Don't save`,
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire('Saved!', '', 'success')
    } else if (result.isDenied) {
      Swal.fire('Changes are not saved', '', 'info')
    }
  })
})

document.getElementById("sa-deleteconfirm").addEventListener("click", () => {
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  })
})

document.getElementById("sa-bsdeleteconfirm").addEventListener("click", () => {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })

  swalWithBootstrapButtons.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, cancel!',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      swalWithBootstrapButtons.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire(
        'Cancelled',
        'Your imaginary file is safe :)',
        'error'
      )
    }
  })
})

document.getElementById("sa-inputemail").addEventListener("click", async () => {  	
  const { value: email } = await Swal.fire({
    title: 'Input email address',
    input: 'email',
    inputLabel: 'Your email address',
    inputPlaceholder: 'Enter your email address'
  })

  if (email) {
    Swal.fire(`Entered email: ${email}`)
  }
})
