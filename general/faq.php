<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@300&family=Open+Sans:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  </head>
  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <i class="bi bi-arrow-up"></i>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
      </svg>
    </button>
    <!-- /scroll up -->
    <header>
    <?php include('../components/general-navbar.php'); ?>
    </header>
    <!-- /navbar -->
    <main>
      <div id="myCarousel" class="carousel slide about-carousel faq-img-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="carousel-caption carousel-text text-start">
                <p>Frequently Asked Questions</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption carousel-text text-start">
                <p>Got a question?</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption carousel-text text-start">
                 <p>Most commonly asked questions</p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Marketing messaging and featurettes
          ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container faq-container">
     
            <button type="button" class="faq-collapsible collapsible text-center" style="border-radius:50px 50px 0px 0px;"><h1>FAQ</h1></button>

            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                Can I get a free trial workout?
            </button>
            <div class="faq-content content">
              <p>
                You have to see it to believe it - the Sathi value will blow your mind. You can get a free trial pass here. As we are a member's club there are a few things to consider as a guest; you must be 18 years or older and a first-time visitor to Crunch. You'll need to sign in, please present a Photo ID to prove that you are a resident of the state. Plus bring a workout towel and locker padlock if you want to store your valuables.
              </p>
            </div>

            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                Can I book in a time for someone to show me the club?
            </button>
            <div class="faq-content content">
              <p>
                Simply book in your preferred time and day here and we will have one of our friendly Sathi team on stand-by to show you around. And feel free to take a virtual tour of your preferred club right here.
              </p>
            </div>

            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                Am I obligated to join if I come in for a free <br> workout or tour?	
            </button>
            <div class="faq-content content">
              <p>
                At Swastha Sathi we're not only about No Judgments - we're also about no pressure! Our teams are not paid sales commissions, they genuinely just want to show you all that makes Crunch special - then we leave it up to you to decide. We know from helping thousands of members that the Crunch value cannot be beaten.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                What is the minimum age for a Guest workout?
            </button>
            <div class="faq-content content">
              <p>
                Free Trial Guests must be 18 years or older. A member can bring in a Guest who is 16 years or older. Only a Summit member who is 18 years or older can bring in a Guest who is 14 years or 15 years of age (under their Guest Privileges) and is responsible for ensuring age appropriate workouts. All Guests must show photo ID.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                What can I try when I come in for my free workout?	
            </button>
            <div class="faq-content content">
              <p>
                Absolutely everything! We want you to experience ALL Sathi's has to offer with no judgments and no limits! Try all our latest strength and cardio equipment, get a taste of our world famous classes and experience true relaxation and recovery with a Hydromassage session and Theragun percussive massage!
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                What happens if I can’t make my free workout on the day <br> I specified?	
            </button>
            <div class="faq-content content">
              <p>
                We know life happens! If you can’t make the free workout on the day you’ve organised, simply give the club you nominated a call and let one of the team know. They’ll organise for you to come on an alternative day that’s convenient for you.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                What am I signing up for and agreeing to when <br> I redeem my free pass through the Crunch Portal?	
            </button>
            <div class="faq-content content">
              <p>
                Rest assured, when you select the Free Pass option through the Crunch Portal you aren’t joining Crunch on a membership plan. You will not be charged anything. We’d love if you opt in to stay up to date with Crunch (you’ll receive exclusive special offers and invitations, win awesome prizes and much more!) but the choice is yours. We do however ask that you agree to our terms and conditions which covers your entry into your Club and ensures we can serve you and our existing members best. Please Note: The additional $1 fortnight fee clause isn't applicable to your Free Pass even though you'll need to agree to it to proceed.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                I'm under 18 years old, can I have my own membership?	
            </button>
            <div class="faq-content content">
              <p>
                Yes, if you are 16 years or older you get your own membership.  You just need an adult guardian (over 18 years old) to authorise your membership.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                Is Swastha Sathi  24/7?	

            </button>
            <div class="faq-content content">
              <p>
                Swastha Sathis's opening hours are  24/7. Our priority is to provide personalised service by staff who ensure that our platforms are always safe, fresh & clean and pumping with good vibes. Sometime great happens after midnight hehe.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                How do I find a membership that's right for me?	
            </button>
            <div class="faq-content content">
              <p>
                K.I.S.S. we 'keep it simple silly' at Swastha Sathi. Choose from only 3 different membership levels, we guarantee there's a perfect one for you. Simply pick the one for you based on how much you want to invest and the benefits you want and get started. And if you change your mind, you can easily change your level at any time.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                What is the workout buddy membership inclusion?	
            </button>
            <div class="faq-content content">
              <p>
                It's one of the most popular benefits of our Summit Membership. You can bring in a buddy to train with you for free at any time. It's like a 'two for one' kinda deal. Your buddy can be the same person or a different person each time. You'll need to sign your buddy in to the page when you check in and ensure they follow our guests and  etiquette to keep everyone safe and happy. Our experience tells us that having a workout buddy increases your results by at least 50%.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                Do I have to commit to a long-term lock in contract?
            </button>
            <div class="faq-content content">
              <p>
                No, that's old school. Our memberships empower you go month to month, giving you peace of mind and freedom to deal with life changes. This also keeps us honest; it's our job to keep inspiring and motivating you to stick to smashing your fitness and wellness goals.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                How do I get started on a membership at Swastha Sathi?
            </button>
            <div class="faq-content content">
              <p>
                We've taken the yucky out of getting started . Our memberships are easy to understand and created to fit your specific needs so once you decide, you can get started online right here. Follow the easy steps to enroll and you will be emailed your membership and next steps to get on your way to smashing your goals with us.
                If you need a little more help, our team stand ready to welcome you and help you at the club of your choice. 
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                What do I pay when I enrol in a membership?
            </button>
            <div class="faq-content content">
              <p>
                Our memberships are designed to keep your initial investment simple so that nothing stands in the way of you getting started. To enrol you will pay an Enrolment fee, this sets you up as a member. Then you will need to cover your membership fees (Pro-rata membership fees) for the number of days from your start date to your first direct debit billing date. And lastly, we collect a Final month's membership fee so if you decide to end your membership, your final month is already covered and we can stop charges immediately.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                Is there a cooling off period?
            </button>
            <div class="faq-content content">
              <p>
                Yes, you get 7 days to cool it. Not that you'll need it at Crunch as you're on a month-to-month membership anyway AND we know you'll love us but it's there, you'll get everything refunded except the final month’s membership fee which goes towards your membership admin and processing.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                What are my on-going membership fees?
            </button>
            <div class="faq-content content">
              <p>
                Consider your membership payment cycle a constant reminder of the importance of making your fitness and well-being a priority in life. Weekly membership fees are billed every fortnight (2 weeks in advance) along with a pay-as-you-go billing fee of $1. To ensure our clubs are well maintained and we can invest in equipment and programming up-grades, an annual Up-keep fee of $44.90 will be applied 90 days after your membership has started and then annually thereafter. We find our loyal members understand the value of this upkeep fee and can best budget this in at this time throughout their journey.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                What are your 'hidden' membership fees?
            </button>
            <div class="faq-content content">
              <p>
                This makes us giggle every time. It's Crunch, our memberships are so low cost and simple we don't need to hide anything. But here you are; there's your weekly membership fees, your fortnightly pay-as-you-go processing fee $1, your annual Up-keep fee $44.90, one-off Freeze Fee $15 and a Direct Debit rejection fee $7.50.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                What are my payment options?
            </button>
            <div class="faq-content content">
              <p>
                All power to you here. When you enrol you can easily select your preferred direct debit method including payment by Credit card or your nominated bank account. Crunch adheres to all privacy of data requirements and uses an external company authorised to securely store and process payments.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                Can I pause my membership for specific reasons?	
            </button>
            <div class="faq-content content">
              <p>
                We know life happens and there may be a need to take a 'pause break'. You can put your membership on-hold (freeze) for the following reasons; Travel, Medical Emergency, Pregnancy and Military Deployment and supporting documentation is required. You can apply for a minimum of 4 weeks up to a maximum of 12 weeks and this is a one-time option in each 12-month period. To action this you just pay a one-off Freeze fee of $15 and we'll stop your fortnightly memberships fees and automatically restart them on the agreed date.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                How hard is it to cancel my membership?	
            </button>
            <div class="faq-content content">
              <p>
                Let's be honest, it's going to be hard to let you go! But that's no reason to make it impossible or feel like a bad breakup. Many of our members return to Crunch so we get it, our memberships are intended to make it easy for you to stop until you decide to come back.
                If your membership is go month to month, you've already covered your last month of fees. So as long as you come in to the club and submit your cancellation request in time for us to stop the next billing (2 days prior to the direct debit day) we'll immediately stop any further payments while you still get to enjoy 30 days of Crunch.
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible dropdown-toggle">
                Do you have special rates corporates, defence, <br> EMS & students?
            </button>
            <div class="faq-content content">
              <p>
                Our rates are already packed with more bang for your buck but that doesn't stop 
                us offering more special rates. To see what's available please enquire .
              </p>
            </div>
            <button type="button" class="faq-collapsible collapsible text-center" style="border-radius:0px 0px 50px 50px;"></button>
        </div>

      <!-- /. bottom banner -->
      <?php include('../components/member-bottom-banner.php'); ?>
    </main>
    <footer class="bg-dark text-white">
    <?php include('../components/member-footer.php'); ?>
    </footer>
    <!-- Footer -->
  </body>
  <script src="../js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>