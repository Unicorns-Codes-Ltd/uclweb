
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
    $("form#course-store").submit();
}


$(document).ready(function () {

    $("form #name").on('blur', () => {
        const slug = slugify($("form #name").val());
        $("form #slug").val(slug);
    });

    // Calling classic editor function
    // createEditor('#short_description');
    createEditor('#description');
    createEditor('#materials');
    createEditor('#curriculam');
});
