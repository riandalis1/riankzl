const title = document.querySelector('#title');
const nameCategory = document.querySelector('#name');
const slug = document.querySelector('#slug');

title.addEventListener("keyup", function() {
    let preslug = title.value;
    preslug = preslug.replace(/ /g, "-");
    slug.value = preslug.toLowerCase();
});

nameCategory.addEventListener("keyup", function() {
    let preslug = nameCategory.value;
    preslug = preslug.replace(/ /g, "-");
    slug.value = preslug.toLowerCase();
});

function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}
