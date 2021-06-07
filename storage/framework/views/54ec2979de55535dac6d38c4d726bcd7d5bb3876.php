<?php $__env->startSection('css'); ?>

<link rel='stylesheet' href='css/style.css'>
<?php $__env->stopSection(); ?>










<?php $__env->startSection('content'); ?>
<div class="perContents">
    <h1>This is an <strong>example</strong> block of <strong>text</strong>.</h1>
    <p>An SVG is used to <strong>emphasize</strong> a single word of a block of text by giving it an underline that uses an SVG. Semantically it is emphasized with a <code>strong</code> tag and visually it is emphasized with the SVG.</p>
</div>



<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>
<script>
console.clear();

const elApp = document.querySelector("#app");
const elProducts = document.querySelectorAll(".product");

let product = 0;
elProducts[product].dataset.active = true;
elApp.dataset.product = product + 1;
elApp.dataset.productCount = elProducts.length;

app.addEventListener("click", () => {
  delete elProducts[product].dataset.active;
  product = (product + 1) % elProducts.length;
  elApp.dataset.product = product + 1;
  elProducts[product].dataset.active = true;
});

/* ---------------------------------- */

document.addEventListener("mousemove", e => {
  document.documentElement.style.setProperty("--mouse-x", e.clientX +'px');
  document.documentElement.style.setProperty("--mouse-y", e.clientY +'px');
});

</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadakazutaka/Main/laravel_app/BirthdayProject/resources/views/messege.blade.php ENDPATH**/ ?>