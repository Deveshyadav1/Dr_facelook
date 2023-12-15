<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Headlines</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/theme.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 20px;
        }

        h1 {
            text-align: center;
            color: #343a40;
        }

        .card {
            margin: 20px;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            max-height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            color: #343a40;
        }

        .card-text {
            color: #6c757d;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

    <style>
  
  header {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
  background-color: white;
}

/* Add this CSS to add spacing to the content below the fixed header */
body {
  padding-top: 80px; /* Adjust the value based on your header's height */
}

/* Add this CSS to make the logo and search bar responsive */
.navbar-brand {
  font-size: 1.5rem; /* Adjust the font size as needed */
}

.input-navbar {
  width: 100%;
  max-width: 400px; /* Adjust the max-width as needed */
}

/* Add this CSS to adjust the spacing of the user profile image and logout button */
.nav-link img {
  margin-right: 5px;
}

/* Add this CSS to make the navigation links responsive */
.navbar-nav {
  flex-direction: column;
  align-items: center;
}

.navbar-toggler {
  order: -2; /* Move the toggle button to the top on small screens */
}

/* Add this CSS to adjust the spacing between navigation links on small screens */
.navbar-nav > li {
  margin-bottom: 10px;
}

</style>

</head>
<body>

    <header>


    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/home"><span class="text-primary">Dr</span> Facelook</a>

        <form action="#">
          <div class="input-group input-navbar highlight-on-hover">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupport">



<li></li>
          <ul class="navbar-nav ml-auto">



@if(Route::has('login'))

@auth
            <li class="nav-item ">
              <a class="nav-link highlight-on-hover" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link highlight-on-hover" href="{{route('doctors')}}">Doctors</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link highlight-on-hover" href="{{route('news')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link highlight-on-hover" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link highlight-on-hover" href="contact.html">Contact</a>
            </li>


            <li class="nav-item">
               <a class="nav-link">
                     @if (Auth::check())
                       <img src="https://cdn-icons-png.flaticon.com/512/3972/3972726.png" height="45px" width="45px">  {{Auth::user()->name}}&nbsp;&nbsp;
               </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" > <form action="{{ route('logout') }}" method="POST" style="display: inline-block;">
                @csrf
                <button style="background-color:#00D9A5; color:white; border-radius:10px;" class="btn btn highlight-on-hover" type="submit">Logout</button>
            </form> </a>
            </li>



@endif

@else

            {{-- <div class="navbar-nav">
    <ul class="navbar-nav">
        <li class="nav-item mt-2">
            <a class="btn btn-primary ml-lg-3 highlight-on-hover" href="{{ route('login') }}">Login</a>
        </li>

        <li class="nav-item mt-2">
            <a class="btn btn-primary ml-lg-3 highlight-on-hover" href="{{ route('register') }}">Register</a>
        </li>
    </ul>
</div> --}}

<li class="nav-item">
    <a class="nav-link" > <form action="{{ route('login') }}" style="display: inline-block;">
      @csrf
      <button style="background-color:#00D9A5; color:white; border-radius:10px;" class="btn btn highlight-on-hover" type="submit">Login</button>
  </form> </a>
  </li>



  <li class="nav-item">
    <a class="nav-link" > <form action="{{ route('register') }}" style="display: inline-block;">
      @csrf
      <button style="background-color:#00D9A5; color:white; border-radius:10px;" class="btn btn highlight-on-hover" type="submit">Register</button>
  </form> </a>
  </li>




    @endauth
    @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>


<center>
<div class="container">
    <h1 class="mt-4 mb-4">Top Headlines</h1>
    <div id="newsContainer" class="row"></div>
</div>
</center>


<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- <script>
    // Function to fetch news data from the API
    function fetchNews() {
        const apiKey = 'ceabb455dc164ddd9985c205e20fb8a1';
        const apiUrl = `https://newsapi.org/v2/top-headlines?country=us&apiKey=${apiKey}`;

        // Fetch data from the API
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Check if data is available
                if (data.articles) {
                    // Process each article and display it
                    data.articles.forEach(article => {
                        displayArticle(article);
                    });
                }
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    // Function to display a news article in a card
    function displayArticle(article) {
        const newsContainer = document.getElementById('newsContainer');

        // Create a card element
        const card = document.createElement('div');
        card.classList.add('card', 'col-md-4');

        // Create an image element
        const image = document.createElement('img');
        image.src = article.urlToImage || 'https://via.placeholder.com/300x200'; // Use a placeholder if no image is available
        image.alt = article.title;
        image.classList.add('card-img-top');

        // Create card body
        const cardBody = document.createElement('div');
        cardBody.classList.add('card-body');

        // Add article title to card
        const title = document.createElement('h5');
        title.classList.add('card-title');
        title.textContent = article.title;

        // Add article description to card
        const description = document.createElement('p');
        description.classList.add('card-text');
        description.textContent = article.description;

        // Add article link to card
        const link = document.createElement('a');
        link.href = article.url;
        link.target = '_blank';
        link.textContent = 'Read more';

        // Append elements to card body
        cardBody.appendChild(title);
        cardBody.appendChild(description);
        cardBody.appendChild(link);

        // Append image and card body to card
        card.appendChild(image);
        card.appendChild(cardBody);

        // Append card to news container
        newsContainer.appendChild(card);
    }

    // Fetch news when the page loads
    fetchNews();
</script>
 -->


<!-- <script>
    // Function to fetch health-related news data from the API
    function fetchHealthNews() {
        const apiKey = 'ceabb455dc164ddd9985c205e20fb8a1';
        const apiUrl = `https://newsapi.org/v2/top-headlines?country=in&category=health&apiKey=${apiKey}`;

        // Fetch data from the API
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Check if data is available
                if (data.articles) {
                    // Process each health-related article and display it
                    data.articles.forEach(article => {
                        displayArticle(article);
                    });
                }
            })
            .catch(error => console.error('Error fetching health-related data:', error));
    }

    // Function to display a news article in a card
    function displayArticle(article) {
        const newsContainer = document.getElementById('newsContainer');

        // Create a card element
        const card = document.createElement('div');
        card.classList.add('card', 'col-md-4');

        // Create an image element
        const image = document.createElement('img');
        image.src = article.urlToImage || 'https://via.placeholder.com/300x200'; // Use a placeholder if no image is available
        image.alt = article.title;
        image.classList.add('card-img-top');

        // Create card body
        const cardBody = document.createElement('div');
        cardBody.classList.add('card-body');

        // Add article title to card
        const title = document.createElement('h5');
        title.classList.add('card-title');
        title.textContent = article.title;

        // Add article description to card
        const description = document.createElement('p');
        description.classList.add('card-text');
        description.textContent = article.description;

        // Add article link to card
        const link = document.createElement('a');
        link.href = article.url;
        link.target = '_blank';
        link.textContent = 'Read more';

        // Append elements to card body
        cardBody.appendChild(title);
        cardBody.appendChild(description);
        cardBody.appendChild(link);

        // Append image and card body to card
        card.appendChild(image);
        card.appendChild(cardBody);

        // Append card to news container
        newsContainer.appendChild(card);
    }

    // Fetch health-related news when the page loads
    fetchHealthNews();
</script> -->


<!-- Add SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container">
    <div class="row" id="newsContainer"></div>
</div>

<script>
    // Function to fetch health-related news data from the API
    function fetchHealthNews() {
        const apiKey = 'ceabb455dc164ddd9985c205e20fb8a1';
        const apiUrl = `https://newsapi.org/v2/top-headlines?country=in&category=health&apiKey=${apiKey}`;

        // Fetch data from the API
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Check if data is available
                if (data.articles) {
                    // Process each health-related article and display it
                    data.articles.forEach(article => {
                        displayArticle(article);
                    });
                }
            })
            .catch(error => console.error('Error fetching health-related data:', error));
    }

    // Function to display a news article in a card
    function displayArticle(article) {
        const newsContainer = document.getElementById('newsContainer');

        // Create a card element
        const card = document.createElement('div');
        card.classList.add('card', 'col-md-4', 'mb-4');

        // Create an image element
        const image = document.createElement('img');
        image.src = article.urlToImage || 'https://via.placeholder.com/300x200';
        image.alt = article.title;
        image.classList.add('card-img-top');

        // Create card body
        const cardBody = document.createElement('div');
        cardBody.classList.add('card-body');

        // Add article title to card
        const title = document.createElement('h5');
        title.classList.add('card-title');
        title.textContent = article.title;

        // Add article description to card
        const description = document.createElement('p');
        description.classList.add('card-text');
        description.textContent = article.description;

        // Add article link to card
        const link = document.createElement('a');
        link.href = article.url;
        link.target = '_blank';
        link.textContent = 'Read more';

        // Append elements to card body
        cardBody.appendChild(title);
        cardBody.appendChild(description);
        cardBody.appendChild(link);

        // Append image and card body to card
        card.appendChild(image);
        card.appendChild(cardBody);

        // Add click event to show modal
        card.addEventListener('click', () => showNewsModal(article));

        // Append card to news container
        newsContainer.appendChild(card);
    }

    // Function to show SweetAlert modal with news details
    function showNewsModal(article) {
        Swal.fire({
            title: article.title,
            html: `
                <img src="${article.urlToImage || 'https://via.placeholder.com/300x200'}" alt="${article.title}" style="max-width: 100%;">
                <p>${article.description}</p>
                <a href="${article.url}" target="_blank">Read more</a>
            `,
            confirmButtonText: 'Close',
            customClass: {
                popup: 'custom-modal-class', // Add your custom styling class here
            },
        });
    }

    // Fetch health-related news when the page loads
    fetchHealthNews();
</script>





</body>
</html>
