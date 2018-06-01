@extends('site.partial.template')

@section('section')

  <div class="title">
    <h3 class="font-weight-bold">Privacy Policy</h3>
  </div>
  <hr>
  <div class="terms">
    <h4 class="font-weight-bold">What information do we collect?</h4>
    <ul class="lead pl-4">
      <li>
        Basic account information: If you register on this server, you may be asked to enter a username, an e-mail address and a password. You may also enter additional profile information such as a display name and biography, and upload a profile picture and header image. The username, display name, biography and avatar image are always listed publicly.
      </li>
      <li>
        Posts, following and other public information: The list of people you follow is listed publicly, the same is true for your followers. When you submit a message, the date and time is stored as well as the application you submitted the message from. Messages may contain media attachments, such as pictures and videos. Public and unlisted posts are available publicly. When you feature a post on your profile, that is also publicly available information. Your posts are delivered to your followers, in some cases it means they are delivered to different servers and copies are stored there. When you delete posts, this is likewise delivered to your followers. The action of reblogging or favouriting another post is always public.
      </li>
      <li>
        Direct and followers-only posts: All posts are stored and processed on the server. Followers-only posts are delivered to your followers and users who are mentioned in them, and direct posts are delivered only to users mentioned in them. In some cases it means they are delivered to different servers and copies are stored there. We make a good faith effort to limit the access to those posts only to authorized persons, but other servers may fail to do so. Therefore it's important to review servers your followers belong to. You may toggle an option to approve and reject new followers manually in the settings. Please keep in mind that the operators of the server and any receiving server may view such messages, and that recipients may screenshot, copy or otherwise re-share them. Do not share any dangerous information over PixelFed.
      </li>
      <li>
        IPs and other metadata: When you log in, we record the IP address you log in from, as well as the name of your browser application. All the logged in sessions are available for your review and revocation in the settings. The latest IP address used is stored for up to 12 months. We also may retain server logs which include the IP address of every request to our server.
      </li>
    </ul>
    <h4 class="font-weight-bold">What do we use your information for?</h4>

    <p class="lead">Any of the information we collect from you may be used in the following ways:</p>
    <ul class="lead pl-4">
      <li>
        To provide the core functionality of PixelFed. You can only interact with other people's content and post your own content when you are logged in. For example, you may follow other people to view their combined posts in your own personalized home timeline.
      </li>
      <li>
        To aid moderation of the community, for example comparing your IP address with other known ones to determine ban evasion or other violations.
      </li>
      <li>
        The email address you provide may be used to send you information, notifications about other people interacting with your content or sending you messages, and to respond to inquiries, and/or other requests or questions.
      </li>
    </ul>

    <h4 class="font-weight-bold">How do we protect your information?</h4>
    <p class="lead">We implement a variety of security measures to maintain the safety of your personal information when you enter, submit, or access your personal information. Among other things, your browser session, as well as the traffic between your applications and the API, are secured with SSL, and your password is hashed using a strong one-way algorithm. You may enable two-factor authentication to further secure access to your account.</p>


    <h4 class="font-weight-bold">What is our data retention policy?</h4>
    <p class="lead">We will make a good faith effort to:</p>
    <ul class="lead pl-4">
      <li>
        Retain server logs containing the IP address of all requests to this server, in so far as such logs are kept, no more than 90 days.
      </li>
      <li>
        Retain the IP addresses associated with registered users no more than 12 months.
      </li>
      <li>
        You can request and download an archive of your content, including your posts, media attachments, profile picture, and header image.
      </li>
    </ul>
    <p class="lead">You may irreversibly delete your account at any time.</p>

    <h4 class="font-weight-bold">Do we use cookies?</h4>
    <p class="lead">Yes. Cookies are small files that a site or its service provider transfers to your computer's hard drive through your Web browser (if you allow). These cookies enable the site to recognize your browser and, if you have a registered account, associate it with your registered account.
    </p>
    <p class="lead">We use cookies to understand and save your preferences for future visits.</p>

    <h4 class="font-weight-bold">Do we disclose any information to outside parties?</h4>
    <p class="lead">We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our site, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety.</p>
    <p class="lead">Your public content may be downloaded by other servers in the network. Your public and followers-only posts are delivered to the servers where your followers reside, and direct messages are delivered to the servers of the recipients, in so far as those followers or recipients reside on a different server than this.</p>
    <p class="lead">When you authorize an application to use your account, depending on the scope of permissions you approve, it may access your public profile information, your following list, your followers, your lists, all your posts, and your favourites. Applications can never access your e-mail address or password.</p>

    <h4 class="font-weight-bold">Children's Online Privacy Protection Act Compliance</h4>
    <p class="lead">Our site, products and services are all directed to people who are at least 13 years old. If this server is in the USA, and you are under the age of 13, per the requirements of COPPA (Children's Online Privacy Protection Act) do not use this site.</p>

    <h4 class="font-weight-bold">Changes to our Privacy Policy</h4>
    <p class="lead">If we decide to change our privacy policy, we will post those changes on this page.</p>

    <p class="lead">This document is CC-BY-SA. It was last updated May 31, 2018.</p>

    <p class="lead">Originally adapted from the <a href="https://mastodon.social/terms">Mastodon</a> privacy policy.</p>
  </div>

@endsection