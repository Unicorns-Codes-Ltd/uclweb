
// Classic Editor function
function createEditor(elementId) {
    ClassicEditor
        .create(document.querySelector(elementId), {
            toolbar: {
                items: [
                    'heading', '|', 'bold', 'italic', '|', 'bulletedList', 'numberedList', '|', 'undo', 'redo', '|', 'link', 'blockQuote'
                ],
                shouldNotGroupWhenFull: true
            }
        })
        .catch(error => {
            console.error(error);
        });
}


function formsubmit(){
    $("form#service-store").submit();
}


$(document).ready(function () {
    // Calling classic editor function
    createEditor('#short_description');
    createEditor('#description');
});
