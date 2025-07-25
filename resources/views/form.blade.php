<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captcha Form-chirags.in</title>
</head>
<body>
    <form action="{{ route('form.submit') }}" method="POST">
        @csrf
        <div>
            <label for="captcha">Captcha</label>
            {!! captcha_img() !!}
            <input type="text" name="captcha" id="captcha" required>
            @error('captcha')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Submit</button>
        @if(session('success'))
            <div style="color:green;">{{ session('success') }}</div>
        @endif
    </form>
</body>
</html>