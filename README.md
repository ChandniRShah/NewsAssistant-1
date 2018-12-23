# NewsAssistant

Web based News assistant with conversational chatbot.

Project part of CS691/CS692 courses at Seidenberg School of Computer Science & Information Systems, Pace University, New York, US.

## Project Wiki:
https://github.com/paceuniversityCS691TeamB/NewsAssistant/wiki

## Project Tasks Status:
https://github.com/paceuniversityCS691TeamB/NewsAssistant/projects/1

## Heroku Aplication Link:
http://newsassistant.herokuapp.com/

# Steps to run the project:

Clone the repo or download the zip package

## 1. To run chatbot:
- Navigate to 'newsChatbot' folder in cmd prompt or terminal
- Run the two commands:
  - python -m rasa_core.run -d models/current/dialogue -u models/current/nlu --port 5002 --credentials credentials.yml --endpoints endpoints.yml
  - python -m rasa_core_sdk.endpoint --actions actions

## 2. To run the web application:
- Install Mamp from https://www.mamp.info/en/
- Install Laravel Artisan console from https://laravel.com/docs/5.7/artisan 
- Start Mamp
- Navigate to 'news' folder
- Run:
  - php artisan serve in cmd prompt or terminal
- Open http://localhost:8000 in your web browser
