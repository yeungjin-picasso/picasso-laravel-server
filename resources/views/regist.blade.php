<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입페이지</title>
</head>
<body>
    <h1>사용자등록폼</h1>
    <ul>
        @if (count($errors)>0) 
          @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
          @endforeach
        @endif
    </ul>
    <!-- <form name='registform' action="/register" method='post' id='registform'> -->
    <form name='registform' action="/regist" method='post' id='registform'>
        {{ csrf_field() }} 
        <!-- @csrf -->
        <dl>
            <dt>아이디:</dt>
            <dd>
                <input type="id" name='user_id' size='30'>
                <span>{{$errors->first('user_id')}}</span>
            </dd>
        </dl>
        <dl>
            <dt>비밀번호:</dt>
            <dd>
                <input type="password" name='password' size='30'>
                <span>{{$errors->first('password')}}</span>
            </dd>
        </dl>
        {{-- <dl>
            <dt>비밀번호(확인):</dt>
            <dd>
            <input type="password" name='password_confirmation' size='30'>
                <span>{{$errors->first('password_confirmation')}}</span>
            </dd>
        </dl> --}}
        <dl>
            <dt>이름:</dt>
            <dd>
                <input type="text" name='name' size='30'>
                <span>{{$errors->first('name')}}</span>
            </dd>
        </dl>
        <dl>
            <dt>닉네임:</dt>
            <dd>
                <input type="text" name='nickname' size='30'>
                <span>{{$errors->first('nickname')}}</span>
            </dd>
        </dl>
        <dl>
            <dt>이메일:</dt>
            <dd>
                <input type="text" name='user_email' size='30'>
                <span>{{$errors->first('user_email')}}</span>
            </dd>
        </dl>
        <dl>
            <dt>핸드폰번호:</dt>
            <dd>
                <input type="text" name='user_phnum' size='30'>
                <span>{{$errors->first('user_phnum')}}</span>
            </dd>
        </dl>
        
        <button type='submit' name='action' vaule='send'>보내기</button>
        
    </form>
</body>
</html>