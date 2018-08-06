# faq

###To run the faq project:

1. git clone git@github.com:cm288/faq.git
2. CD into FAQ and run composer install
3. cp .env.example to .env
4. run: php artisan key:generate
5. setup database / with sqlite or other https://laravel.com/docs/5.6/database
6. Run: php artisan migrate
7. Run: unit tests: phpunit
8. Run: seeds php artisan migrate:refresh --seed

### Faq Project User Stories
1. As a User, I want to be able to login and view questions I've asked.
2. As a User, I want to be able to answer and edit questions.
3. As a User, I want to be able to delete questions.
4. I want to be able to register as an administrator.
5. As a User, I want to be able to save questions to my profile. (not yet functional)
