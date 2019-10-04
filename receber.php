<?php
# Back-end

echo "\n<pre>\n";
print_r($_GET) ; #Array
echo "\n</pre>\n";

print("<strong>Nome:</strong>");
print("$_GET[nome]");

print("<strong>E-mail:</strong>");
print("$_GET[email]");

print("<strong>Senha:</strong>");
print("$_GET[senha]");

print("<strong>Data de nascimento:</strong>");
print("$_GET[data_de_nascimento]");