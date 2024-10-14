<div class="login-container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <!-- Remember Me -->
        <div>
            <label>
                <input type="checkbox" name="remember"> Remember Me
            </label>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit">Login</button>
        </div>

        <!-- Link to Registration -->
        <div>
            <a href="{{ route('register') }}">Don't have an account? Register</a>
        </div>
    </form>
</div>
