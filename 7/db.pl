use DBI;
#definition of variables
$db="wt";
$host="localhost";
$user="root";
$password="";
#connect to MySQL database
my $dbh = DBI->connect ("DBI:mysql:database=$db:host=$host",$user,$password) or die "Can't connect to
database: $DBI::errstr\n";
#prepare the query
my $sth = $dbh->prepare( "SELECT *FROM login");
#execute the query
$sth->execute();
## Retrieve the results of a row of data and print
print "\tQuery results:\n=====================\n";
print("NAME\tPassword\n=====================\n");
while (my @row = $sth->fetchrow_array())
{
print "@row\n";
}
warn "Problem in retrieving results", $sth->errstr( ), "\n" if $sth->err();
exit;