document.getElementById('ratingForm').addEventListener('submit', function(event) {
    const fullname = document.getElementById('fullname').value.trim();
    const email = document.getElementById('email').value.trim();
    const rating = document.getElementById('rating').value;

    if (!fullname || !email || !rating) {
        alert("Please fill all the fields before submitting.");
        event.preventDefault();
    }
});
