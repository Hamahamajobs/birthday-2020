<!--これは要はimportですよ。extendsは!-->



<?php $__env->startSection('css'); ?>
<style>
body {
  background-color: var(--jp);
}

/* main wrapper */
.blob-wrapper {
  display: grid;
  grid-template-columns: repeat(2, 50vw); /* vw = viewport width */
  grid-auto-rows: 50vw;
}

/* blob containers h1 + svg */
.blob {
  display: grid;
  grid-template-columns: repeat(10 , 5vw);
  grid-template-rows: repeat(10 , 5vw);
}


/* quick media query for a vw 2 column to 4 collumn layout */
@media  all and (min-width:500px) {
  
     .blob-wrapper {
      grid-template-columns: repeat(4, 25vw);
      grid-auto-rows: 25vw;
    }

    .blob {
    grid-template-columns: repeat(10 , 2.5vw);
   grid-template-rows: repeat(10 , 2.5vw);
  }
}


/* reset svg to width of container, used blobmaker.app to make this and the viewbox comes with some padding */
svg {
  max-width: 100%;
  height: auto;
}

/* gloabal headers */
h1 {
 margin:0;
 font-family: 'Abril Fatface', cursive;
 font-size: 24vw;
 font-weight: 400;
}

@media  all and (min-width:500px) {
  h1 {
    font-size: 14vw;
  }
}

.blob h1 { 
  grid-column: 3;
  grid-row: 3 / -1;
}

.blob h1:first-letter {
    vertical-align: text-top;
}

.blob:nth-of-type(odd) h1:first-letter {
    vertical-align: middle;
}

.blob svg { 
  grid-column: 1 / span 8;
  grid-row-start: 2;
  fill: #FE840E;
  transition: 0.3s all;
}


/* shuffle position blob h1 */
.blob:nth-of-type(odd) h1 { 
  grid-row-start: 1
}

.blob:nth-of-type(3) h1 { 
  grid-column-start: 5;
  grid-row-start: 1
}

.blob:nth-of-type(3n + 2) h1 { 
  grid-column-start: 2;
  grid-row-start: 4
}

/* shuffle colors blob svg */
.blob:nth-of-type(even) svg path { 
  fill: var(--kim);
} 

.blob:nth-of-type(2n + 5)  svg path { 
  fill: var(--abraham);
}

.blob:nth-of-type(3n + 2) svg path { 
  fill: var(--natalie);
}


.blob:nth-of-type(6n + 3) svg path { 
  fill: var(--jp2);
}

.blob:nth-of-type(odd) svg { 
  grid-column: 2 / span 8;
}

.blob:nth-of-type(7) svg  { 
  grid-column: 1 / span 9;
  grid-row-start: 3 / span 7;
}


/* variables!! */
:root {
  --natalie: yellow;
}

:root {
  --abraham: red;
}

:root {
  /* --kim: #87f6ff; */
  --kim: #87f6ff;
}

:root {
  --jp: #ffefe0;
}


:root {
  --jp2: #FE840E;
}


/* ----- bonus, hovers!!!! ------*/
.blob h1,
.blob svg,
.blob:hover svg path {
 transition: .5s all ease-in-out;  
} 

.blob:hover h1 {
   transform: translate(2vw, -2vw);
}

.blob:hover svg {
   transition-delay: 0.2s;
   transform: translate(-2vw, -2vw);
}

.blob:hover svg path {
  transition-delay: 0.4s;
  fill: white;
}

.hamada-number:hover svg path {
  transition-delay: 0.4s;
  fill: green;
}
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
    <script>
    
    
    
    </script>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>


<div class="blob-wrapper">

  
    <div class="blob">
      <svg class="blob1" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M480.8 168.7C524.5 210.6 543.4 285.2 528.9 353.7 514.5 422.2 466.7 484.5 409.7 502.2 352.6 519.8 286.4 492.8 237.5 458.3 188.6 423.8 157 381.8 142.2 331.7 127.4 281.7 129.2 223.5 158.3 184.9 187.4 146.2 243.7 127.1 306.1 122.2 368.5 117.3 437.1 126.7 480.8 168.7Z" fill="#FE840E"/>   </svg>
     <h1>1</h1>
    </div>
    
    <div class="blob">      
  <svg class="blob2" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M416 239.2C456.5 303 499.5 371.5 480.6 428.2 461.7 485 380.8 530 297.8 531.3 214.8 532.5 129.7 490 93.7 423.4 57.8 356.8 71.1 266.2 113.7 201.1 156.2 136 228.1 96.5 283 106.3 337.8 116.2 375.6 175.3 416 239.2Z" fill="#FE840E"/></svg>
      <h1>2</h1>
    </div>
    
    <div class="blob">
     <svg class="blob3" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M477.2 201.2C504.4 244.7 483.6 319.3 446.1 379 408.5 438.7 354.3 483.3 293.8 486.9 233.3 490.5 166.6 453 139.9 399.6 113.2 346.2 126.5 276.8 159.8 229.8 193.2 182.7 246.6 157.8 310.8 151.6 375.1 145.3 450.1 157.7 477.2 201.2Z" fill="#FE840E"/></svg>
      <h1>3</h1>
    </div>
    
  
    <div class="blob hamada-number">
      <svg class="blob4" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M411.4 166.7C442.3 193.1 463.7 230.2 462.6 265.2 461.5 300.2 437.9 333.1 419.7 373.2 401.4 413.2 388.5 460.4 355.4 488.1 322.2 515.8 268.9 524 224.8 507.5 180.7 491.1 146 450 112.1 402.9 78.3 355.8 45.4 302.5 50.6 253.1 55.8 203.6 99.2 158 147.1 134.6 195 111.2 247.5 110.1 293.9 117.4 340.3 124.7 380.6 140.3 411.4 166.7Z" fill="#FE840E"/></svg>
      <h1>4</h1>
    </div>
    
    <div class="blob">
        <svg  class="blob7" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M449.5 177.2C485.4 225.8 500.5 287.5 483.9 334.8 467.4 382 419.3 414.9 370.7 433 322.1 451.1 273.1 454.4 221.4 438.8 169.8 423.3 115.5 388.9 103.6 343.1 91.8 297.3 122.4 240 162.2 190.6 202 141.2 251 99.6 303.9 96.5 356.8 93.4 413.6 128.7 449.5 177.2Z" fill="#FE840E"/></svg>
        <h1>5</h1>
    </div>
    
    <div class="blob hamada-number">
      <svg class="blob6" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M492.7 188.9C535.8 263.5 547.4 356.5 510 425.7 472.6 495 386.3 540.5 304.9 537.7 223.5 534.8 147 483.7 118.1 419.3 89.3 355 108 277.5 146.3 205.8 184.5 134 242.3 68 308.5 63.1 374.8 58.2 449.5 114.3 492.7 188.9Z" fill="#FE840E"/></svg>
      <h1>6</h1>
    </div>
    
    <div class="blob">
      <svg  class="blob6" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M449.5 177.2C485.4 225.8 500.5 287.5 483.9 334.8 467.4 382 419.3 414.9 370.7 433 322.1 451.1 273.1 454.4 221.4 438.8 169.8 423.3 115.5 388.9 103.6 343.1 91.8 297.3 122.4 240 162.2 190.6 202 141.2 251 99.6 303.9 96.5 356.8 93.4 413.6 128.7 449.5 177.2Z" fill="#FE840E"/></svg>
      <h1>7</h1>
    </div>
    
    <div class="blob">
       <svg class="blob6" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M480.8 168.7C524.5 210.6 543.4 285.2 528.9 353.7 514.5 422.2 466.7 484.5 409.7 502.2 352.6 519.8 286.4 492.8 237.5 458.3 188.6 423.8 157 381.8 142.2 331.7 127.4 281.7 129.2 223.5 158.3 184.9 187.4 146.2 243.7 127.1 306.1 122.2 368.5 117.3 437.1 126.7 480.8 168.7Z" fill="#FE840E"/> 
      <h1>8</h1>
    </div>
    
    <div class="blob">
      <svg class="blob2" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M416 239.2C456.5 303 499.5 371.5 480.6 428.2 461.7 485 380.8 530 297.8 531.3 214.8 532.5 129.7 490 93.7 423.4 57.8 356.8 71.1 266.2 113.7 201.1 156.2 136 228.1 96.5 283 106.3 337.8 116.2 375.6 175.3 416 239.2Z" fill="#FE840E"/></svg>
      <h1>9</h1>
    </div>
    
    <div class="blob">
         <svg class="blob3" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M477.2 201.2C504.4 244.7 483.6 319.3 446.1 379 408.5 438.7 354.3 483.3 293.8 486.9 233.3 490.5 166.6 453 139.9 399.6 113.2 346.2 126.5 276.8 159.8 229.8 193.2 182.7 246.6 157.8 310.8 151.6 375.1 145.3 450.1 157.7 477.2 201.2Z" fill="#FE840E"/></svg>
      <h1>10</h1>
    </div>
    
    <div class="blob">
       <svg class="blob4" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M411.4 166.7C442.3 193.1 463.7 230.2 462.6 265.2 461.5 300.2 437.9 333.1 419.7 373.2 401.4 413.2 388.5 460.4 355.4 488.1 322.2 515.8 268.9 524 224.8 507.5 180.7 491.1 146 450 112.1 402.9 78.3 355.8 45.4 302.5 50.6 253.1 55.8 203.6 99.2 158 147.1 134.6 195 111.2 247.5 110.1 293.9 117.4 340.3 124.7 380.6 140.3 411.4 166.7Z" fill="#FE840E"/></svg>
      <h1>11</h1>
    </div>
    
    <div class="blob">
        <svg class="blob5"  xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M441.7 222.8C479 282.7 501.2 355.8 475.1 398.9 449 442 374.5 455 312.4 447.8 250.3 440.7 200.7 413.3 161.4 362.7 122.2 312 93.3 238 118.1 185.3 143 132.7 221.5 101.3 286.9 108.9 352.3 116.5 404.5 163 441.7 222.8Z" fill="#FE840E"/></svg>
      <h1>12</h1>
    </div>
      
    <div class="blob">
      <svg class="blob1" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M480.8 168.7C524.5 210.6 543.4 285.2 528.9 353.7 514.5 422.2 466.7 484.5 409.7 502.2 352.6 519.8 286.4 492.8 237.5 458.3 188.6 423.8 157 381.8 142.2 331.7 127.4 281.7 129.2 223.5 158.3 184.9 187.4 146.2 243.7 127.1 306.1 122.2 368.5 117.3 437.1 126.7 480.8 168.7Z" fill="#FE840E"/>   </svg>
     <h1>13</h1>
    </div>
    
    <div class="blob">      
  <svg class="blob2" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M416 239.2C456.5 303 499.5 371.5 480.6 428.2 461.7 485 380.8 530 297.8 531.3 214.8 532.5 129.7 490 93.7 423.4 57.8 356.8 71.1 266.2 113.7 201.1 156.2 136 228.1 96.5 283 106.3 337.8 116.2 375.6 175.3 416 239.2Z" fill="#FE840E"/></svg>
      <h1>14</h1>
    </div>
    
    <div class="blob">
     <svg class="blob3" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M477.2 201.2C504.4 244.7 483.6 319.3 446.1 379 408.5 438.7 354.3 483.3 293.8 486.9 233.3 490.5 166.6 453 139.9 399.6 113.2 346.2 126.5 276.8 159.8 229.8 193.2 182.7 246.6 157.8 310.8 151.6 375.1 145.3 450.1 157.7 477.2 201.2Z" fill="#FE840E"/></svg>
      <h1>15</h1>
    </div>
    
  
    <div class="blob hamada-number">
      <svg class="blob4" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M411.4 166.7C442.3 193.1 463.7 230.2 462.6 265.2 461.5 300.2 437.9 333.1 419.7 373.2 401.4 413.2 388.5 460.4 355.4 488.1 322.2 515.8 268.9 524 224.8 507.5 180.7 491.1 146 450 112.1 402.9 78.3 355.8 45.4 302.5 50.6 253.1 55.8 203.6 99.2 158 147.1 134.6 195 111.2 247.5 110.1 293.9 117.4 340.3 124.7 380.6 140.3 411.4 166.7Z" fill="#FE840E"/></svg>
      <h1>16</h1>
    </div>
    
    <div class="blob">
      <svg class="blob5"  xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M441.7 222.8C479 282.7 501.2 355.8 475.1 398.9 449 442 374.5 455 312.4 447.8 250.3 440.7 200.7 413.3 161.4 362.7 122.2 312 93.3 238 118.1 185.3 143 132.7 221.5 101.3 286.9 108.9 352.3 116.5 404.5 163 441.7 222.8Z" fill="#FE840E"/></svg>
      <h1>17</h1>
    </div>
    
    <div class="blob">
      <svg class="blob6" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M492.7 188.9C535.8 263.5 547.4 356.5 510 425.7 472.6 495 386.3 540.5 304.9 537.7 223.5 534.8 147 483.7 118.1 419.3 89.3 355 108 277.5 146.3 205.8 184.5 134 242.3 68 308.5 63.1 374.8 58.2 449.5 114.3 492.7 188.9Z" fill="#FE840E"/></svg>
      <h1>18</h1>
    </div>
    
    <div class="blob">
      <svg  class="blob7" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M449.5 177.2C485.4 225.8 500.5 287.5 483.9 334.8 467.4 382 419.3 414.9 370.7 433 322.1 451.1 273.1 454.4 221.4 438.8 169.8 423.3 115.5 388.9 103.6 343.1 91.8 297.3 122.4 240 162.2 190.6 202 141.2 251 99.6 303.9 96.5 356.8 93.4 413.6 128.7 449.5 177.2Z" fill="#FE840E"/></svg>
      <h1>19</h1>
    </div>
    
    <div class="blob">
       <svg class="blob1" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M480.8 168.7C524.5 210.6 543.4 285.2 528.9 353.7 514.5 422.2 466.7 484.5 409.7 502.2 352.6 519.8 286.4 492.8 237.5 458.3 188.6 423.8 157 381.8 142.2 331.7 127.4 281.7 129.2 223.5 158.3 184.9 187.4 146.2 243.7 127.1 306.1 122.2 368.5 117.3 437.1 126.7 480.8 168.7Z" fill="#FE840E"/> 
      <h1>20</h1>
    </div>
    
    <div class="blob">
      <svg class="blob2" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M416 239.2C456.5 303 499.5 371.5 480.6 428.2 461.7 485 380.8 530 297.8 531.3 214.8 532.5 129.7 490 93.7 423.4 57.8 356.8 71.1 266.2 113.7 201.1 156.2 136 228.1 96.5 283 106.3 337.8 116.2 375.6 175.3 416 239.2Z" fill="#FE840E"/></svg>
      <h1>21</h1>
    </div>
    
    <div class="blob">
         <svg class="blob3" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M477.2 201.2C504.4 244.7 483.6 319.3 446.1 379 408.5 438.7 354.3 483.3 293.8 486.9 233.3 490.5 166.6 453 139.9 399.6 113.2 346.2 126.5 276.8 159.8 229.8 193.2 182.7 246.6 157.8 310.8 151.6 375.1 145.3 450.1 157.7 477.2 201.2Z" fill="#FE840E"/></svg>
      <h1>22</h1>
    </div>
    
    <div class="blob">
       <svg class="blob4" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M411.4 166.7C442.3 193.1 463.7 230.2 462.6 265.2 461.5 300.2 437.9 333.1 419.7 373.2 401.4 413.2 388.5 460.4 355.4 488.1 322.2 515.8 268.9 524 224.8 507.5 180.7 491.1 146 450 112.1 402.9 78.3 355.8 45.4 302.5 50.6 253.1 55.8 203.6 99.2 158 147.1 134.6 195 111.2 247.5 110.1 293.9 117.4 340.3 124.7 380.6 140.3 411.4 166.7Z" fill="#FE840E"/></svg>
      <h1>23</h1>
    </div>
    
    <div class="blob">
        <svg class="blob5"  xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600"><path d="M441.7 222.8C479 282.7 501.2 355.8 475.1 398.9 449 442 374.5 455 312.4 447.8 250.3 440.7 200.7 413.3 161.4 362.7 122.2 312 93.3 238 118.1 185.3 143 132.7 221.5 101.3 286.9 108.9 352.3 116.5 404.5 163 441.7 222.8Z" fill="#FE840E"/></svg>
      <h1>24</h1>
    </div>
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadakazutaka/Main/laravel_app/BirthdayProject/resources/views/numbarHover.blade.php ENDPATH**/ ?>