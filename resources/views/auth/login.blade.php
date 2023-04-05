<head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
    
  </head>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required autofocus>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div class="g-recaptcha" data-sitekey="6LeBWVglAAAAAD8gu4BGzFzj4oTg7mNJ33KPLwSR" data-action="login" required></div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
