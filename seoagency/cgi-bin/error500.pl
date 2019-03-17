#!/usr/bin/perl
use strict;
use warnings;
print "Content-type: text/html\n\n";
print "<div class='grid-x grid-padding-x'>";
print "<div class='large-12 cell'>";
print "<h3>Internal Server Error</h3><br>";
print "</div>";
print "</div>";
print "<h6> The server encountered an internal error or misconfiguration and was unable to complete your request. </h6><br>";
print "<h6> We're probably trying to fix the issue but just to make sure please email us at the email address shown beloew to notify us of the problem you're experiencing. </h6><br>";
print "Connection Status: "."$ENV{'HTTP_CONNECTION'}"."<br>";
print "Server Admin's Email: "."$ENV{'SERVER_ADMIN'}"."<br>";
print "Server Protocol: "."$ENV{'SERVER_PROTOCOL'}"."<br>";

