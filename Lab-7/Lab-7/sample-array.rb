weekly_sales = {}
puts 'Please enter a list of books'
book_list = gets.chomp
books = book_list.split(',')

books.each do |book|
  puts "Please input weekly sales of #{book} separated by a comma."
  weekly_sales[book] = gets.chomp.split(',') 
end

puts books