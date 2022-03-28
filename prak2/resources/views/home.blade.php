<h1>
    Ini adalah {{ $title }}
</h1>
<h2>
    {{ if ($link){
        $link
    }
    }}
</h2>
<ul>
    <li>
        <a href="/Home"> Home </a>
    </li>
    <li>
        <a href="/Profile">Profile</a>
    </li>
    <li>
        <a href="/About">About</a>
    </li>
    </li>
</ul>