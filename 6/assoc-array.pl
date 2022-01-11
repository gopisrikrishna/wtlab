@fruits = ("apple", "banana", "pineapple", "kiwi");
  

print "@fruits\n";


%ages = ("Michael Caine", 39,
         "Dirty Den", 34,
         "Angie", 27,
         "Willy", "21 in dog years",
         "The Queen Mother", 108);
while (($person, $age) = each(%ages))
{
	print "$person is $age\n";
}
