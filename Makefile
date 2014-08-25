clean:
	rm -rf *~ *#
fullclean:
	sudo rm -rf *~ *# key/* temp/*

commit:
	git init
	git add *
	git commit -m 'test'
	git remote add origin https://github.com/ymah/v3.git
	git push -u origin master 