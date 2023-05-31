
    <div style="padding-left: 200px">
        <form action="verify-user" method="post">
            @csrf
            <input type="text" name="code" placeholder="2586"><br>
            <input type="submit" value="verify">
        </form>
    </div>
