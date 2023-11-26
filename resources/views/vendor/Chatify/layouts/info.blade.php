

<style>

    /* Define a CSS class for a beautiful highlighting effect on hover */
    .highlight-on-hover {
       position: relative;
       overflow: hidden;
       transition: transform 0.3s ease-in-out;
    }

    .highlight-on-hover:hover {
       transform: scale(1.03); /* Enlarge the element on hover */
       box-shadow: 0 3px 15px #00D9A5; /* Add a subtle shadow */
       border-radius: 50px;
    }

    .highlight-on-hover::before {
       content: '';
       position: absolute;
       top: 0;
       right: 0;
       bottom: 0;
       left: 0;
       background: linear-gradient(#00D9A5); /* Gradient overlay */
       opacity: 0;
       transition: opacity 0.6s ease-in-out;
       z-index: -1;
       border-radius: 50px;
    }

    .highlight-on-hover:hover::before {
       opacity: 1; /* Make the gradient overlay visible on hover */
    }

    </style>


{{-- user info and avatar --}}
<div class="avatar av-l chatify-d-flex highlight-on-hover"></div>
<p class="info-name">Dr Facelook Messenger <!-- {{ config('chatify.name') }} --></p>
<div class="messenger-infoView-btns">
    <a href="#" class="danger delete-conversation">Delete Conversation</a>
</div>
{{-- shared photos --}}
<div class="messenger-infoView-shared">
    <p class="messenger-title"><span>Shared Photos</span></p>
    <div class="shared-photos-list"></div>
</div>
