<?php $__env->startSection('css'); ?>

<link rel='stylesheet' href='css/messegeBlock.css'>
<style>

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
const ACTIVE_CLASS = "block--active";
const TRANSITION_CLASS = "block--transition";

const getTransforms = (a, b) => {
  const scaleY = a.height / b.height;
  const scaleX = a.width / b.width;

  // dividing by 2 centers the transform since the origin
  // is centered not top left
  const translateX = a.left + a.width / 2 - (b.left + b.width / 2);
  const translateY = a.top + a.height / 2 - (b.top + b.height / 2);

  // nothing particularly clever here, just using the
  // translate amount to estimate a rotation direction/amount.
  // ends up feeling pretty natural to me.
  const rotate = translateX;

  return [
    `translateX(${translateX}px)`,
    `translateY(${translateY}px)`,
    `rotate(${rotate}deg)`,
    `scaleY(${scaleY})`,
    `scaleX(${scaleX})`
  ].join(" ");
};

const animate = (block, transforms, oldTransforms) => {
  block.style.transform = transforms;
  block.getBoundingClientRect(); // force redraw
  block.classList.add(TRANSITION_CLASS);
  block.style.transform = oldTransforms;
  block.addEventListener(
    "transitionend",
    () => {
      block.removeAttribute("style");
    },
    { once: true }
  );
};

[...document.querySelectorAll(".block")].forEach(block => {
  const buttonForBlock = block.querySelector(".block-content__button");
  block.addEventListener("click", event => {
    if (
      block.classList.contains(ACTIVE_CLASS) &&
      event.target !== buttonForBlock
    ) {
      return;
    }

    block.classList.remove(TRANSITION_CLASS);
    const inactiveRect = block.getBoundingClientRect();
    const oldTransforms = block.style.transform;

    block.classList.toggle(ACTIVE_CLASS);
    const activeRect = block.getBoundingClientRect();
    const transforms = getTransforms(inactiveRect, activeRect);

    animate(block, transforms, oldTransforms);
  });
});
</script>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>
<div class="block-wrap">
  <div class="block-col">
    <div class="block block--transition r">
      <div class="block-content">
        <div class="block-content__header">
          <h2 class="block-content__header__text">Normal???????????????????????????</h2>
        </div>
        <p class="block-content__body">???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????normal?????????????????????????????????normal?????????????????????????????????????????????????????????????????????</p>
        <div class="block-content__button">?????????</div>
      </div>
    </div>
  </div>
  <div class="block-col">
    <div class="block block--transition  b">
      <div class="block-content">
        <div class="block-content__header">
          <h2 class="block-content__header__text">??????????????????????????????</h2>
        </div>
        <p class="block-content__body">???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
        </p>
        <div class="block-content__button">?????????</div>
      </div>
    </div>
  </div>
  <div class="block-col">
    <div class="block block--transition y">
      <div class="block-content">
        <div class="block-content__header">
          <h2 class="block-content__header__text">From Kaju</h2>
        </div>
        <p class="block-content__body">Hi,wanya. How do you do?If you hava a question or any ideas will never come up with in your brain, you can get some hints with three easy clicks for agree. good luck! </p>
        <div class="block-content__button" style="background-color:#FFCC66;">close</div>
      </div>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadakazutaka/Main/laravel_app/BirthdayProject/resources/views/messegeBlock.blade.php ENDPATH**/ ?>