<?php get_header(); ?>

<div class="page-wrap raw">


<div class="ctp-content" data-spy="scroll" data-target=".subnav-left">


<?php get_template_part('quick/ctp-video'); ?>



<!-- #INTRO -->

<section id="overview" class="pod bg-green">
<div class="container">
   <p class="lede">Natural Gourmet Institute’s Chef’s Training Program consists of over 600 hours of rigorous, life-changing culinary education. Licensed by the New York State Department of Education, we are also the first culinary school dedicated to healthful cooking to be accredited nationally. Offered both as a full-time and part-time program, CTP is where you will learn essential cooking techniques, methods for sourcing ingredients, culinary business principles, and the art of healthful cooking.</p>
   &nbsp;
</div> <!-- /.container -->
</section> <!-- /#intro -->

<!-- /#INTRO -->

<!-- #AREAS-OF-STUDY -->

<section id="areas-of-study">
<div class="container">

   <div class="row sub-pod">
      <div class="col-sm-4">
         <img src="/assets/ctp-knife-sm.jpg" class="img-fluid" alt="Chef Knife">
      </div> <!-- .col-sm-4 -->

      <div class="col-sm-8">
         <h5>Technique</h5>
         <p>Technique is applied to every aspect of a chef’s training – from choosing ingredients and cooking methods, to building flavors and textures in a dish. Technique is the foundation that supports your culinary training and allows you to understand the “how” and “why” behind a dish. As a student at NGI, you will master a wide variety of cooking methods, hone your knife skills, and develop culinary knowledge in order to create successful recipes and execute beautiful dishes.</p>
      </div> <!-- .col-sm-8 -->
   </div> <!-- /.row -->


   <div class="row sub-pod">

      <div class="col-sm-4 col-sm-push-8">
         <img src="/assets/ctp-mushroom-sm.jpg" class="img-fluid" alt="Mushrooms">
      </div> <!-- .col-sm-4 -->

      <div class="col-sm-8 col-sm-pull-4">
         <h5>Ingredients &amp; Sourcing</h5>
         <p>Chefs must know how to choose and handle many different types of ingredients and bring out their best qualities. Through hands-on instruction you will learn how to assess ingredient quality based on NGI’s ingredient selection criteria: food should be seasonal, local, whole, traditional, balanced, fresh, and delicious. Additionally, you will learn about local and seasonal ingredient selection, and develop an understanding of seasonal availability, and proper growing and harvesting methods.</p>
      </div> <!-- .col-sm-8 -->

   </div> <!-- /.row -->


   <div class="row sub-pod">
      <div class="col-sm-4">
         <img src="/assets/ctp-ginger-sm.jpg" class="img-fluid" alt="Ginger">
      </div> <!-- .col-sm-4 -->

      <div class="col-sm-8">
         <h5>Food &amp; Healing</h5>
         <p>Food can be a powerful tool in healing the body. NGI’s food and healing coursework focuses on the healing and health-supportive qualities of ingredients and how to use them to create maximum health benefit. Through interdisciplinary training, you will learn both eastern and western food theory and application. Our in-house nutrition and health experts will lead you in practical classes and lecture sessions on topics such as: whole foods dynamics, living foods, clinical nutrition, and cooking for people with illnesses.</p>
      </div> <!-- .col-sm-8 -->
   </div> <!-- /.row -->


   <div class="row sub-pod">

      <div class="col-sm-4 col-sm-push-8">
         <img src="/assets/ctp-grain-sm.jpg" class="img-fluid" alt="Whole grains">
      </div> <!-- .col-sm-4 -->

      <div class="col-sm-8 col-sm-pull-4">
         <h5>Baking &amp; Pastry</h5>
         <p>Using whole ingredients, traditional methods, and thoughtful preparations, you will create delicious and tempting traditional and flourless, vegan, and gluten-free desserts and breads. You will be guided in recipe conversion and development through hands-on classes in ingredient assessment, results comparison, and careful exploration of how to combine health-supportive ingredients to yield the best results.</p>
      </div> <!-- .col-sm-8 -->

   </div> <!-- /.row -->


   <div class="row sub-pod">
      <div class="col-sm-4">
         <img src="/assets/ctp-plate-temp.jpg" class="img-fluid" alt="Commercial food truck">
      </div> <!-- .col-sm-4 -->

      <div class="col-sm-8">
         <h5>Culinary Business</h5>
         <p>As you continue to build your culinary skills and knowledge, you will be introduced to key aspects of the culinary industry. You will be taught how to develop and cost recipes, and cook for speed, volume and accuracy by Chef Instructors who are seasoned industry professionals. The culmination of this portion of training is Friday Night Dinner, where you will develop and execute a menu for up to 100 guests.</p>
      </div> <!-- .col-sm-8 -->
   </div> <!-- /.row -->


   <div class="row sub-pod">

      <div class="col-sm-4 col-sm-push-8">
         <img src="/assets/ctp-apron-sm-rev-2.jpg" class="img-fluid" alt="Chef apron">
      </div> <!-- .col-sm-4 -->

      <div class="col-sm-8 col-sm-pull-4">
         <h5>Internship</h5>
         <p>As the final portion of your training, you will take the skills and techniques you learned in the classroom into a professional kitchen. Over the course of a 100-hour internship, you will work in a professional setting under the supervision of chefs and senior cooks, and continue to develop your culinary knowledge. The internship will provide you with the opportunity to gain work experience, build your professional network, and learn additional skills in a new environment.</p>

      </div> <!-- .col-sm-8 -->

   </div> <!-- /.row -->
   <p><a href="<?php echo home_url(); ?>/alumni" class="btn btn-primary btn-lg btn-block">Meet NGI Alumni</a></p> &nbsp;

</div> <!-- /.container -->
</section> <!-- /#areas-of-study -->
&nbsp;

<!-- /#AREAS-OF-STUDY -->

   <?php get_template_part('quick/quote-rich'); ?>

<section id="details">
<div class="container">

   <article id="upcoming-sessions" class="sub-pod">
      <div class="row">
         <div class="col-md-4">
            <h4>Upcoming Sessions</h4>
         </div> <!-- /.col-md-4 -->

         <div class="col-md-8">
            <div class="row">
         <?php
         // Get all sessions
         $training_sessions = get_field('training_sessions', 'options');

         $count = 0;
         if($training_sessions){

           echo '<div class="col-sm-6 upcoming-session-date">';

           while(the_repeater_field('training_sessions', 'options')){

             if(get_sub_field('which_session') == 'Full-Time'){

               if($count > 5)break; //only show 2

               $now_stamp = time();
               $session_stamp = strtotime(get_sub_field('start_date_of_session'));

               // Skip if in the past
               if($now_stamp > $session_stamp)continue;

               $date = date('F j, Y', $session_stamp);
               echo '<h3>'.$date.'</h3>';
               if(get_sub_field('waitlist')) {
                  echo '<span class="label label-default">Waitlist Only</span><br />';
               }
               echo '<span class="designation">Full-Time</span>';
               echo '<p>';
               echo 'Monday to Thursday: '.get_sub_field('times,_monday_to_thursday');
               echo '<br>';
               echo 'Friday: '.get_sub_field('times,_friday').'</p>';

               $count++;
             }

           }
           echo '</div><!-- /.col-md-6 -->';

           $count = 0;
           echo '<div class="col-sm-6 upcoming-session-date">';

           while(the_repeater_field('training_sessions', 'options')){

             if(get_sub_field('which_session') == 'Part-Time'){

               if($count > 3)break; //only show 2

               $now_stamp = time();
               $session_stamp = strtotime(get_sub_field('start_date_of_session'));

               // Skip if in the past
               if($now_stamp > $session_stamp)continue;

               $date = date('F j, Y', $session_stamp);
               echo '<h3>'.$date.'</h3>';
               if(get_sub_field('waitlist')) {
                  echo '<span class="label label-default">Waitlist Only</span><br />';
               }               
               echo '<span class="designation">Part-Time</span>';
               echo '<p>';
               if(have_rows('schedule')){
                 $sub_count = 0;
                 while(have_rows('schedule')): the_row();
                   if($sub_count)echo '<br>';
                   echo get_sub_field('day').': '.get_sub_field('times');
                   $sub_count++;
                 endWhile;
               }
               echo '</p>';

               $count++;
             }
           }
           echo '</div><!-- /.col-md-6 -->';
         }
         ?>
            </div> <!-- /.row -->

            <div class="row">
               <div class="col-sm-12 leader upcoming-session-date">
                  <p> Applications are reviewed on a first come-first serve basis, space is limited. For schedules beginning on a later date, email <a href="mailto:admissions@nginyc.com">admissions@nginyc.com</a>.</p>
               </div><!-- /.col-sm-12 -->
            </div>	<!-- /.row -->

         </div> <!-- /.col-md-8 -->
      </div>	<!-- /.row -->

   </article> <!-- /#upcoming-sessions -->

   <article id="tuition-info" class="sub-pod">

      <div class="row">
         <div class="col-md-4">
            <h4>Tuition Info</h4>
         </div> <!-- /col-md-4 -->

         <div class="col-md-8">
            <div class="row">
               <div class="col-sm-6 upcoming-session-date">
                  <h3>$27,100</h3>
                  <span class="designation">Full-Time Tuition</span>
               </div> <!-- /.col-md-6 -->

               <div class="col-sm-6 upcoming-session-date">
                  <h3>$19,600</h3>
                  <span class="designation">Part-Time Tuition</span>
               </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
            <p class="leader">Tuition includes all textbooks, course materials, uniforms, pastry tools, and full knife&nbsp;kit.</p>
            <p>Natural Gourmet Institute works with Sallie Mae to provide Smart Option student loans to eligible applicants. Students may borrow up to the total tuition plus living expenses. Interest rates are variable and terms range from 1 to 10 years. For more, visit <a href="https://www.salliemae.com/student-loans/career-training-smart-option-student-loan/" target="_blank">Sallie Mae</a>. Natural Gourmet Institute also offers Tuition Flex, a tuition financing option for students who do not qualify for Sallie Mae Smart Option loans. Contact <a href="mailto:admissions@nginyc.com">admissions@nginyc.com</a> for further information and application procedure.</p>

            <img src="/assets/accet-1500.png" class="img-fluid" alt="Licensed by the State of New York and accredited by ACCET">

         </div> <!-- /col-md-8 -->
      </div> <!-- /row -->
   </article> <!-- /#tuition-info -->

   <!-- $TODO Uses the class ww to not break mobile (word-wrap solution) -->

   <article id="scholarships" class="sub-pod">
      <div class="row">

         <div class="col-md-4">
            <h4>Grants</h4>
         </div> <!-- /.col-md-4 -->


         <div class="col-md-8">

             <div class="panel-group" id="scholarship-group">

               <div class="panel">
                  <div class="panel-heading">
                     <h4><a data-toggle="collapse" data-target="#partner" data-parent="#scholarship-group" class="panel-plus collapsed">Partner Grants</a></h4>
                  </div> <!-- /.panel-heading -->
                  <div id="partner" class="collapse panel-collapse">
                     <div class="panel-body">
                        <p class="lede"><a href="<?php bloginfo('url');?>/food-medicine-grant/" class="ww">Food as Medicine Grant</a></p>

                        <p class="lede"><a href="<?php bloginfo('url');?>/certified-yoga-practitioner-grant/" class="ww">Certified Yoga Practitioner Grant</a></p>

                        <p class="lede"><a href="<?php bloginfo('url');?>/certified-health-coach-grant/" class="ww">Certified Health Coach Grant</a></p>

                        <p class="lede"><a href="<?php bloginfo('url');?>/career-changer-grant/" class="ww">Career Changer Grant</a></p>

                        <p class="lede"><a href="<?php bloginfo('url');?>/better-food-movement-grant/" class="ww">Better Food Movement Grant</a></p>
                     </div> <!-- /.panel-body -->
                  </div> <!-- /.beard -->
               </div> <!-- /.panel -->


               <div class="panel">
                  <div class="panel-heading">
                     <h4><a data-toggle="collapse" data-target="#foundation" data-parent="#scholarship-group" class="panel-plus collapsed">Foundation Grants</a></h4>
                  </div> <!-- /.panel-heading -->
                  <div id="foundation" class="collapse panel-collapse">
                     <div class="panel-body">
                        <p class="lede"><a href="<?php bloginfo('url');?>/annemarie-colbin-scholarship/" class="ww">Dr. Annemarie Colbin Grant</a></p>
                        <p class="lede"><a href="<?php bloginfo('url');?>/james-beard-scholarship/" class="ww">James Beard Foundation Grant</a></p>
                     </div> <!-- /.panel-body -->
                  </div> <!-- /.culinary-trust -->
               </div> <!-- /.panel -->


               <div class="panel">
                  <div class="panel-heading">
                     <h4><a data-toggle="collapse" data-target="#military" data-parent="#scholarship-group" class="panel-plus collapsed">Military Grants</a></h4>
                  </div> <!-- /.panel-heading -->
                  <div id="military" class="collapse panel-collapse">
                     <div class="panel-body">
                        <p class="lede"><a href="<?php bloginfo('url');?>/military-tuition-allowance-grant/" class="ww">Military Tuition Allowance Grant</a></p>
                     </div> <!-- /.panel-body -->
                  </div> <!-- /.military -->
               </div> <!-- /.panel -->

            </div> <!-- /.panel-group #scholarship-group-->


         </div> <!-- /.col-md-8 -->
      </div> <!-- /.row -->
   </article> <!-- /#scholarships -->



</div> <!-- /.container -->

</section> <!-- /#details -->

   <?php get_template_part('quick/quote-terry'); ?>

   <?php get_template_part('quick/open-house'); ?>

   <?php get_template_part('quick/modal-info'); ?>

   <!-- #PHOTO BREAK -->


<div class="apply-box">

<p><a class="btn btn-primary btn-jumbo" href="<?php echo home_url(); ?>/apply">Apply Now!</a></p>

</div> <!-- /.apply-box -->


<aside class="photo-break-ngihca-1 bg-dark">
   <div class="container btmbtm">
      <div class="row">
         <div class="col-md-9 col-md-offset-3">
            <h2 class="h1 large">Interested in recreational classes, certificates and vegan&nbsp;dinners?</h2>
            <a href="http://naturalgourmetinstitute.com" class="slider-button btn btn-default btn-sm">Click here</a>
         </div> <!-- /.col-md-9 -->
      </div> <!-- /.row -->
   </div> <!-- /.container -->
</aside>


<!-- /#PHOTO BREAK -->



</div> <!-- /.ctp-content -->


</div> <!-- /.page-wrap .raw -->

<script type="text/javascript">ScheduleOnceEmbedPosition="1,0,2";ScheduleOnceEmbedPhoneTitle="Call Us";ScheduleOnceEmbedPhoneText="+1-212-645-5170_so_phone_sep_";ScheduleOnceEmbedEmailTitle="Email Us";ScheduleOnceEmbedEmailBText="Send";ScheduleOnceEmbedEmailBTextColor="rgb(0, 0, 0)";ScheduleOnceEmbedEmailBBGColor="#6CA438";ScheduleOnceEmbedEmailSendTo="Admissions@nginyc.com";ScheduleOnceEmbedEmailAck="Julie Van Wagenen";ScheduleOnceEmbedEmailAfter="Thank you for your message.<br />We will get back to you as soon as we can.";ScheduleOnceEmbedEmailCustTemp="17";ScheduleOnceEmbedEmailUserTemp="40";ScheduleOnceEmbedBookingTitle="Chef&apos;s Training Program";ScheduleOnceEmbedBookingBText="Book a Call/Skype/Visit";ScheduleOnceEmbedBookingBBGColor="#6CA438";ScheduleOnceEmbedBookingBTextColor="rgb(0, 0, 0)";ScheduleOnceEmbedLink="//secure.scheduleonce.com/NaturalGourmetInstitute&thm=white?bc=6CA438&tc=000000";ScheduleOnceEmbedWidgetTitle="Speak with Admissions";ScheduleOnceEmbedWidgetColor="rgb(255, 255, 255)";ScheduleOnceEmbedWidgetBGColor="rgb(51, 51, 51)";ScheduleOnceEmbedWidgetLeft="right";ScheduleOnceEmbedAid="MjM1NTc4";ScheduleOnceEmbedPageName="'NaturalGourmetInstitute'";</script><script type="text/javascript" src="//secure.scheduleonce.com/mergedjs/ScheduleOnceEmbed.js"></script><script type="text/javascript">soe.AddEventListners();</script>

<?php get_footer(); ?>
