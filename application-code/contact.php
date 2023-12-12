<?php 

include('components/header.php');

include('components/db_handler.php');

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $serviceType = $_POST["service_type"]; 
    $phoneNumber = $_POST["phone"];
    $messageBody = $_POST["messageBody"];

   if (handleFormData($name, $email, $serviceType, $phoneNumber, $messageBody)) {
      $message = "Thank you for your message! We will be in touch.";
   } else {
      $message = "Oops! Something went wrong. Please try again.";
   }
}
?>

<main>

   <!-- contact breadcrumb area start -->
   <section class="breadcrumb__area breadcrumb-style pt-190 pb-210 p-relative z-index-1"
      data-background="assets/img/breadcrumb/breadcrumb-bg-1.jpg">
      <div class="breadcrumb__bg-overlay m-img"></div>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-10">
               <div class="breadcrumb__content text-center">
                  <h3 class="breadcrumb__title">Contact Us
                     <img src="assets/img/breadcrumb/titile.svg" alt="">
                  </h3>
                  <div class="breadcrumb__list breadcrumb__list-translate">
                     <span><a href="home">Home</a></span>
                     <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                     <span>pages</span>
                     <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                     <span>Contact Us</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- contact breadcrumb area end -->


   <!-- contact breadcrumb area -->
   <section class="tp-contact-area pt-120 pb-90">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="tp-contact-wrapper">
                  <div class="tp-contact-title-wrapper">
                     <h3 class="tp-contact-title">Contact <span class="title-color">With us</span></h3>
                     <p>Email, call, or complete the form to learn how Kion can <br> solve your cloud management and
                        governance cha.</p>
                  </div>
                  <div class="tp-contact-content">
                     <div class="tp-contact-content-mail d-flex align-items-center">
                        <div class="tp-contact-content-mail-icon">
                           <span>
                              <svg width="72" height="72" viewBox="0 0 72 72" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M47.8336 8.25977C41.4275 8.26573 35.2856 10.8139 30.7569 15.3448C26.2281 19.8756 23.6828 26.0187 23.6798 32.4248C23.6657 37.1083 25.027 41.6929 27.5948 45.6098L24.1185 56.8598C24.0147 57.1963 23.9912 57.5525 24.0501 57.8997C24.109 58.2469 24.2485 58.5755 24.4576 58.8589C24.6666 59.1424 24.9392 59.3728 25.2536 59.5317C25.5679 59.6905 25.9151 59.7734 26.2673 59.7735C26.4338 59.7715 26.5996 59.7526 26.7623 59.7173L42.8273 56.0948C46.1318 56.7738 49.5419 56.7534 52.8381 56.0349C56.1343 55.3164 59.2435 53.9157 61.9656 51.9229C64.6877 49.9301 66.9624 47.3895 68.6432 44.4645C70.3241 41.5394 71.3739 38.2949 71.7251 34.9396C72.0762 31.5844 71.7209 28.1928 70.6821 24.9832C69.6433 21.7735 67.9439 18.8169 65.6934 16.3037C63.4428 13.7906 60.691 11.7764 57.615 10.391C54.5391 9.00562 51.2071 8.27962 47.8336 8.25977ZM47.8336 52.1348C46.3185 52.1381 44.8083 51.9644 43.3336 51.6173C43.0004 51.5404 42.6542 51.5404 42.3211 51.6173L29.5636 54.441L32.2186 45.9023C32.3214 45.567 32.3444 45.2124 32.2858 44.8667C32.2272 44.5209 32.0886 44.1937 31.8811 43.911C29.4629 40.5704 28.1669 36.5487 28.1798 32.4248C28.1776 28.5344 29.3293 24.7309 31.4893 21.4952C33.6492 18.2596 36.7204 15.7374 40.3141 14.2476C43.9079 12.7578 47.8628 12.3674 51.6785 13.1258C55.4942 13.8842 58.9992 15.7574 61.7501 18.5083C64.5009 21.2591 66.3741 24.7641 67.1325 28.5798C67.8909 32.3955 67.5005 36.3504 66.0108 39.9442C64.521 43.538 61.9987 46.6091 58.7631 48.7691C55.5275 50.929 51.7239 52.0807 47.8336 52.0785V52.1348Z"
                                    fill="currentColor" />
                                 <path
                                    d="M31.9961 33.4375C33.2387 33.4375 34.2461 32.4301 34.2461 31.1875C34.2461 29.9449 33.2387 28.9375 31.9961 28.9375C30.7535 28.9375 29.7461 29.9449 29.7461 31.1875C29.7461 32.4301 30.7535 33.4375 31.9961 33.4375Z"
                                    fill="currentColor" />
                                 <path
                                    d="M39.8711 33.4375C41.1137 33.4375 42.1211 32.4301 42.1211 31.1875C42.1211 29.9449 41.1137 28.9375 39.8711 28.9375C38.6285 28.9375 37.6211 29.9449 37.6211 31.1875C37.6211 32.4301 38.6285 33.4375 39.8711 33.4375Z"
                                    fill="currentColor" />
                                 <path
                                    d="M47.7461 33.4375C48.9887 33.4375 49.9961 32.4301 49.9961 31.1875C49.9961 29.9449 48.9887 28.9375 47.7461 28.9375C46.5035 28.9375 45.4961 29.9449 45.4961 31.1875C45.4961 32.4301 46.5035 33.4375 47.7461 33.4375Z"
                                    fill="currentColor" />
                                 <path
                                    d="M55.6211 33.4375C56.8637 33.4375 57.8711 32.4301 57.8711 31.1875C57.8711 29.9449 56.8637 28.9375 55.6211 28.9375C54.3785 28.9375 53.3711 29.9449 53.3711 31.1875C53.3711 32.4301 54.3785 33.4375 55.6211 33.4375Z"
                                    fill="currentColor" />
                                 <path
                                    d="M63.4961 33.4375C64.7387 33.4375 65.7461 32.4301 65.7461 31.1875C65.7461 29.9449 64.7387 28.9375 63.4961 28.9375C62.2535 28.9375 61.2461 29.9449 61.2461 31.1875C61.2461 32.4301 62.2535 33.4375 63.4961 33.4375Z"
                                    fill="currentColor" />
                                 <path
                                    d="M19.125 17.6875H2.25C1.65326 17.6875 1.08097 17.9246 0.65901 18.3465C0.237053 18.7685 0 19.3408 0 19.9375C0 20.5342 0.237053 21.1065 0.65901 21.5285C1.08097 21.9504 1.65326 22.1875 2.25 22.1875H19.125C19.7217 22.1875 20.294 21.9504 20.716 21.5285C21.1379 21.1065 21.375 20.5342 21.375 19.9375C21.375 19.3408 21.1379 18.7685 20.716 18.3465C20.294 17.9246 19.7217 17.6875 19.125 17.6875Z"
                                    fill="currentColor" />
                                 <path
                                    d="M19.125 26.6875H7.875C7.27826 26.6875 6.70597 26.9246 6.28401 27.3465C5.86205 27.7685 5.625 28.3408 5.625 28.9375C5.625 29.5342 5.86205 30.1065 6.28401 30.5285C6.70597 30.9504 7.27826 31.1875 7.875 31.1875H19.125C19.7217 31.1875 20.294 30.9504 20.716 30.5285C21.1379 30.1065 21.375 29.5342 21.375 28.9375C21.375 28.3408 21.1379 27.7685 20.716 27.3465C20.294 26.9246 19.7217 26.6875 19.125 26.6875Z"
                                    fill="currentColor" />
                                 <path
                                    d="M19.125 35.6875H4.5C3.90326 35.6875 3.33097 35.9246 2.90901 36.3465C2.48705 36.7685 2.25 37.3408 2.25 37.9375C2.25 38.5342 2.48705 39.1065 2.90901 39.5285C3.33097 39.9504 3.90326 40.1875 4.5 40.1875H19.125C19.7217 40.1875 20.294 39.9504 20.716 39.5285C21.1379 39.1065 21.375 38.5342 21.375 37.9375C21.375 37.3408 21.1379 36.7685 20.716 36.3465C20.294 35.9246 19.7217 35.6875 19.125 35.6875Z"
                                    fill="currentColor" />
                              </svg>
                           </span>
                        </div>
                        <h3 class="tp-contact-item-title"><a href="mailto:customer@technix.com">customer@technix.com</a>
                        </h3>
                     </div>
                     <div class="tp-contact-content-phone d-flex align-items-center">
                        <div class="tp-contact-content-phone-icon">
                           <span>
                              <svg width="55" height="55" viewBox="0 0 55 55" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M43.3332 33.9966C42.2097 32.8267 40.8545 32.2013 39.4182 32.2013C37.9935 32.2013 36.6267 32.8151 35.4568 33.985L31.7966 37.6337C31.4954 37.4715 31.1943 37.3209 30.9047 37.1703C30.4877 36.9619 30.0939 36.7649 29.758 36.5564C26.3294 34.3788 23.2136 31.541 20.2252 27.8692C18.7773 26.0391 17.8044 24.4986 17.0978 22.9349C18.0476 22.0661 18.9279 21.1627 19.7851 20.294C20.1094 19.9696 20.4337 19.6337 20.758 19.3094C23.1904 16.877 23.1904 13.7264 20.758 11.294L17.5959 8.13183C17.2368 7.77276 16.8661 7.4021 16.5187 7.03145C15.8237 6.3133 15.0939 5.57199 14.3411 4.87701C13.2175 3.76505 11.8739 3.17432 10.4608 3.17432C9.04763 3.17432 7.68084 3.76505 6.52254 4.87701C6.51096 4.8886 6.51096 4.8886 6.49938 4.90018L2.56117 8.87314C1.07855 10.3558 0.23299 12.1627 0.0476622 14.2592C-0.230329 17.6415 0.765807 20.792 1.53028 22.8538C3.40672 27.9155 6.20981 32.6067 10.3913 37.6337C15.4646 43.6916 21.5688 48.4753 28.5418 51.846C31.2059 53.1085 34.7618 54.6027 38.7348 54.8575C38.978 54.8691 39.2329 54.8807 39.4645 54.8807C42.1402 54.8807 44.3873 53.9193 46.1479 52.0081C46.1595 51.985 46.1827 51.9734 46.1942 51.9502C46.7965 51.2205 47.4915 50.5603 48.2213 49.8537C48.7193 49.3788 49.229 48.8807 49.727 48.3595C50.8738 47.1665 51.4761 45.7765 51.4761 44.3518C51.4761 42.9155 50.8622 41.5371 49.6923 40.3788L43.3332 33.9966ZM47.4799 46.1935C47.4684 46.1935 47.4684 46.2051 47.4799 46.1935C47.0282 46.68 46.5649 47.1201 46.0668 47.6066C45.3139 48.3248 44.5494 49.0776 43.8313 49.9232C42.6614 51.1742 41.2831 51.7649 39.4761 51.7649C39.3024 51.7649 39.117 51.7649 38.9433 51.7533C35.5031 51.5332 32.3062 50.1896 29.9086 49.0429C23.3526 45.8692 17.5959 41.3634 12.8121 35.653C8.86231 30.8924 6.22139 26.4908 4.47236 21.765C3.39514 18.8808 3.00132 16.6337 3.17507 14.514C3.29089 13.1588 3.81213 12.0353 4.77352 11.0739L8.72331 7.12411C9.29088 6.59129 9.89319 6.30172 10.4839 6.30172C11.2136 6.30172 11.8044 6.74187 12.175 7.11253C12.1866 7.12411 12.1982 7.13569 12.2098 7.14728C12.9163 7.80751 13.5882 8.4909 14.2947 9.22063C14.6538 9.59128 15.0244 9.96194 15.3951 10.3442L18.5573 13.5063C19.7851 14.7341 19.7851 15.8693 18.5573 17.0971C18.2213 17.433 17.897 17.7689 17.5611 18.0932C16.5882 19.0893 15.6615 20.016 14.6538 20.9194C14.6306 20.9426 14.6075 20.9542 14.5959 20.9773C13.5997 21.9735 13.7851 22.9465 13.9936 23.6067C14.0051 23.6414 14.0167 23.6762 14.0283 23.7109C14.8507 25.7032 16.009 27.5796 17.7696 29.8152L17.7812 29.8267C20.9781 33.765 24.3487 36.8344 28.0669 39.1858C28.5418 39.4869 29.0283 39.7302 29.4916 39.9618C29.9086 40.1703 30.3024 40.3672 30.6383 40.5757C30.6846 40.5989 30.731 40.6337 30.7773 40.6568C31.1711 40.8537 31.5418 40.9464 31.924 40.9464C32.8854 40.9464 33.4877 40.3441 33.6846 40.1472L37.646 36.1858C38.0398 35.792 38.6653 35.3171 39.395 35.3171C40.1132 35.3171 40.7039 35.7688 41.063 36.1626C41.0746 36.1742 41.0746 36.1742 41.0861 36.1858L47.4684 42.568C48.6614 43.7495 48.6614 44.9657 47.4799 46.1935Z"
                                    fill="currentColor" />
                                 <path
                                    d="M29.6192 13.0546C32.6539 13.5643 35.4106 15.0006 37.6114 17.2013C39.8122 19.4021 41.2369 22.1589 41.7581 25.1936C41.8855 25.9581 42.5458 26.4909 43.2987 26.4909C43.3913 26.4909 43.4724 26.4793 43.5651 26.4677C44.4222 26.3287 44.9898 25.5179 44.8508 24.6608C44.2253 20.989 42.4878 17.6415 39.8353 14.989C37.1828 12.3365 33.8354 10.5991 30.1636 9.97357C29.3064 9.83458 28.5072 10.4021 28.3566 11.2477C28.206 12.0933 28.762 12.9156 29.6192 13.0546Z"
                                    fill="currentColor" />
                                 <path
                                    d="M54.7789 24.2091C53.748 18.1628 50.8986 12.6609 46.5202 8.2825C42.1419 3.90414 36.6399 1.05472 30.5936 0.0238395C29.7481 -0.126739 28.9488 0.45241 28.7983 1.29797C28.6593 2.15511 29.2268 2.95433 30.084 3.10491C35.4816 4.01997 40.4044 6.5798 44.3195 10.4833C48.2345 14.3983 50.7828 19.3211 51.6978 24.7187C51.8252 25.4832 52.4855 26.016 53.2383 26.016C53.331 26.016 53.4121 26.0045 53.5048 25.9929C54.3503 25.8655 54.9295 25.0546 54.7789 24.2091Z"
                                    fill="currentColor" />
                              </svg>
                           </span>
                        </div>
                        <h3 class="tp-contact-item-title"><a href="tel:9266688000">+1 403 888 4243 </a></h3>
                     </div>
                     <div class="tp-contact-location-wrapper d-flex">
                        <div class="tp-contact-location">
                           <h3 class="tp-contact-location-title">Office Location <i
                                 class="fa-regular fa-arrow-down"></i></h3>
                           <p>4517 Washington Ave. Manch
                              ester, Kentucky 39495</p>
                        </div>
                        <div class="tp-contact-location">
                           <h3 class="tp-contact-location-title">Office Location <i
                                 class="fa-regular fa-arrow-down"></i></h3>
                           <p>4517 Washington Ave. Manch
                              ester, Kentucky 39495</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="tp-contact-form">
                  <h3 class="tp-contact-form-title">Contact Us</h3>
                  <p>Your email address will not be published. Required fields <br> are marked *</p>
                  <form id="contact-form" action="contact.php" autocomplete="on" method="POST">
                     <div class="row tp-gx-10">
                        <div class="col-md-6">
                           <div class="tp-contact-input">
                              <input name="name" type="text" placeholder="Your Name*">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="tp-contact-input">
                              <input name="email" type="email" placeholder="Email Address*">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="tp-contact-input">
                              <input name="service_type" type="text" placeholder="Service Type">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="tp-contact-input">
                              <input name="phone" type="text" placeholder="Phone Number">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="tp-contact-input">
                              <textarea name="messageBody" placeholder="Enter Your Message here"></textarea>
                           </div>
                        </div>
                        <div class="tp-contact-btn mt-10">
                           <button type="submit" class="tp-btn">Send Message</button>
                        </div>
                     </div>
                  </form>
                  <p class="ajax-response"><?php echo $message; ?></p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- contact breadcrumb end -->


</main>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var messageElement = document.querySelector(".ajax-response");
    if (messageElement.innerHTML.trim() !== "") {
        messageElement.scrollIntoView({ behavior: 'smooth' });
    }
});
</script>

<?php include('components/footer.php'); ?>