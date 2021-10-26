<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head><style>body {
    background-color: #e6e6e6;
  }</style>

<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Webcoursera</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="#" >Categories</a></li>
        <?php
      session_start();
      if ((isset($_SESSION["logg"])) && ($_SESSION["logg"]==="1")){ 
        echo "<li><a> Welcome ".$_SESSION["name"]. " </a></li>" ;
        echo "<li><a href=\"logout.php\">Log Out</a></li>";
      } else {
        
        echo "<li><a href=\"login.php\">Log In</a></li>";
      }?>
      </ul>
      <div style="display: flex; justify-content: flex-end;padding-top: 10px;" >


        <p>
            <div class="input-group" >
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
              </span>
            </div><!-- /input-group -->
         </p>
    </div>
    </div>
  </nav>
    <h1 id="about"><span style="color: #333399;"><strong><span style="text-decoration: underline;">About us</span></strong></span></h1>
    <p>Welcome to WebCoursera, your number one source for all e-learning. We're dedicated to providing you the very best, with an emphasis on quality rather than quantity. We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>
    <p> </p>
    <p> </p>
    <h1 id="contact"><span style="text-decoration: underline; color: #333399;"><strong>Contact Us</strong></span></h1>
    <p>Phone : +91 45678978</p>
    <p>Email: webcoursera@mail.com</p>

    <h1> </h1>
    <h1 id=privacy><span style="text-decoration: underline; color: #333399;"><strong>Privacy Policy</strong></span></h1>
    <p>At Webcoursera, accessible from WebCoursera.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Webcoursera and how we use it.</p>
    <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>
    <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Webcoursera. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href="https://www.termsfeed.com/privacy-policy-generator/">TermsFeed Privacy Policy Generator</a>.</p>
    <h3><span style="color: #333399;">Consent</span></h3>
    <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>
    <h3><span style="color: #333399;">Information we collect</span></h3>
    <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
    <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
    <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>
    <h3><span style="color: #333399;">How we use your information</span></h3>
    <p>We use the information we collect in various ways, including to:</p>
    <ul>
    <li>Provide, operate, and maintain our website</li>
    <li>Improve, personalize, and expand our website</li>
    <li>Understand and analyze how you use our website</li>
    <li>Develop new products, services, features, and functionality</li>
    <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
    <li>Send you emails</li>
    <li>Find and prevent fraud</li>
    </ul>
    <h3><span style="color: #333399;">Log Files</span></h3>
    <p>Webcoursera follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>
    <h3><span style="color: #333399;">Advertising Partners Privacy Policies</span></h3>
    <p>You may consult this list to find the Privacy Policy for each of the advertising partners of Webcoursera.</p>
    <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Webcoursera, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>
    <p>Note that Webcoursera has no access to or control over these cookies that are used by third-party advertisers.</p>
    <h3><span style="color: #333399;">Third Party Privacy Policies</span></h3>
    <p>Webcoursera's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>
    <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>
    <h3><span style="color: #333399;">CCPA Privacy Rights (Do Not Sell My Personal Information)</span></h3>
    <p>Under the CCPA, among other rights, California consumers have the right to:</p>
    <p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
    <p>Request that a business delete any personal data about the consumer that a business has collected.</p>
    <p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
    <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
    <h3><span style="color: #333399;">GDPR Data Protection Rights</span></h3>
    <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
    <p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
    <p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
    <p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
    <p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
    <p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
    <p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
    <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
    <h3><span style="color: #333399;">Children's Information</span></h3>
    <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>
    <p>Webcoursera does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
    <h1> </h1>
    <p> </p>
    <h1 id="terms"><span style="text-decoration: underline; color: #333399;"><strong>Terms And Conditions</strong></span></h1>
    <p>Welcome to Webcoursera!</p>
    <p>These terms and conditions outline the rules and regulations for the use of WebCoursera's Website, located at WebCoursera.com.</p>
    <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use Webcoursera if you do not agree to take all of the terms and conditions stated on this page.</p>
    <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>
    <h3><span style="color: #333399;"><strong>Cookies</strong></span></h3>
    <p>We employ the use of cookies. By accessing Webcoursera, you agreed to use cookies in agreement with the WebCoursera's Privacy Policy.</p>
    <p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>
    <h3><span style="color: #333399;"><strong>License</strong></span></h3>
    <p>Unless otherwise stated, WebCoursera and/or its licensors own the intellectual property rights for all material on Webcoursera. All intellectual property rights are reserved. You may access this from Webcoursera for your own personal use subjected to restrictions set in these terms and conditions.</p>
    <p>You must not:</p>
    <ul>
    <li>Republish material from Webcoursera</li>
    <li>Sell, rent or sub-license material from Webcoursera</li>
    <li>Reproduce, duplicate or copy material from Webcoursera</li>
    <li>Redistribute content from Webcoursera</li>
    </ul>
    <p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the <a href="https://www.termsandconditionsgenerator.com/">Terms And Conditions Generator</a>.</p>
    <p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. WebCoursera does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of WebCoursera,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, WebCoursera shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>
    <p>WebCoursera reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>
    <p>You warrant and represent that:</p>
    <ul>
    <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
    <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
    <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
    <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
    </ul>
    <p>You hereby grant WebCoursera a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>
    <h3><span style="color: #333399;"><strong>Hyperlinking to our Content</strong></span></h3>
    <p>The following organizations may link to our Website without prior written approval:</p>
    <ul>
    <li>Government agencies;</li>
    <li>Search engines;</li>
    <li>News organizations;</li>
    <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
    <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
    </ul>
    <p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>
    <p>We may consider and approve other link requests from the following types of organizations:</p>
    <ul>
    <li>commonly-known consumer and/or business information sources;</li>
    <li>dot.com community sites;</li>
    <li>associations or other groups representing charities;</li>
    <li>online directory distributors;</li>
    <li>internet portals;</li>
    <li>accounting, law and consulting firms; and</li>
    <li>educational institutions and trade associations.</li>
    </ul>
    <p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of WebCoursera; and (d) the link is in the context of general resource information.</p>
    <p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>
    <p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to WebCoursera. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>
    <p>Approved organizations may hyperlink to our Website as follows:</p>
    <ul>
    <li>By use of our corporate name; or</li>
    <li>By use of the uniform resource locator being linked to; or</li>
    <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
    </ul>
    <p>No use of WebCoursera's logo or other artwork will be allowed for linking absent a trademark license agreement.</p>
    <h3><span style="color: #333399;"><strong>iFrames</strong></span></h3>
    <p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>
    <h3><span style="color: #333399;"><strong>Content Liability</strong></span></h3>
    <p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>
    <h3><span style="color: #333399;"><strong>Your Privacy</strong></span></h3>
    <p>Please read Privacy Policy</p>
    <h3><span style="color: #333399;"><strong>Reservation of Rights</strong></span></h3>
    <p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>
    <h3><span style="color: #333399;"><strong>Removal of links from our website</strong></span></h3>
    <p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>
    <p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>
    <h3><span style="color: #333399;"><strong>Disclaimer</strong></span></h3>
    <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>
    <ul>
    <li>limit or exclude our or your liability for death or personal injury;</li>
    <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
    <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
    <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
    </ul>
    <p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>
    <p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
    <p> </p>
    <p> </p>
    <h1 id="help"><span style="text-decoration: underline;"><span style="color: #333399; text-decoration: underline;"><strong>Help and Support</strong></span></span></h1>
    <p>Phone: +91 34567842</p>
    <p>Email: helpdeskwebcoursera@mail.com</p>
</body>
</html>
