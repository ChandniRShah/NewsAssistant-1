# -*- coding: utf-8 -*-
from __future__ import absolute_import
from __future__ import division
from __future__ import print_function
from __future__ import unicode_literals

import logging
import requests
import json
from rasa_core_sdk import Action

logger = logging.getLogger(__name__)


class ActionJoke(Action):
    def name(self):
        # define the name of the action which can then be included in training stories
        return "action_joke"

    def run(self, dispatcher, tracker, domain):
        # what your action should do
        request = json.loads(requests.get('https://api.chucknorris.io/jokes/random').text) #make an apie call
        joke = request['value'] #extract a joke from returned json response
        dispatcher.utter_message(joke) #send the message back to the user
        return []

class ActionTechNews(Action):
    def name(self):
        return "action_technews"
    def run(self, dispatcher, tracker, domain):
        request = requests.get('https://newsapi.org/v2/everything?q=technology&apiKey=6d665ff7b2a04d55aacb45df87ee0001').json()
        news = request["articles"]
        #empty list which will contain all trending news
        results = []
        for ar in news:
            results.append(ar["title"] + ":" + "" + (ar["url"]))
        for i in range(len(results)):
            dispatcher.utter_message(results[i])
        return []

class ActionBusinessNews(Action):
    def name(self):
        return "action_businessnews"
    def run(self, dispatcher, tracker, domain):
        request = requests.get('https://newsapi.org/v2/everything?q=business&apiKey=6d665ff7b2a04d55aacb45df87ee0001').json()
        news = request["articles"]
        #empty list which will contain all trending news
        results = []
        for ar in news:
            results.append(ar["title"] + ":" + "" + (ar["url"]))
        for i in range(len(results)):
            dispatcher.utter_message(results[i])
        return []

class ActionSportsNews(Action):
    def name(self):
        return "action_sportsnews"
    def run(self, dispatcher, tracker, domain):
        request = requests.get('https://newsapi.org/v2/everything?q=sports&apiKey=6d665ff7b2a04d55aacb45df87ee0001').json()
        news = request["articles"]
        #empty list which will contain all trending news
        results = []
        for ar in news:
            results.append(ar["title"] + ":" + "" + (ar["url"]))
        for i in range(len(results)):
            dispatcher.utter_message(results[i])
        return []

class ActionHealthNews(Action):
    def name(self):
        return "action_healthnews"
    def run(self, dispatcher, tracker, domain):
        request = requests.get('https://newsapi.org/v2/everything?q=health&apiKey=6d665ff7b2a04d55aacb45df87ee0001').json()
        news = request["articles"]
        #empty list which will contain all trending news
        results = []
        for ar in news:
            results.append(ar["title"] + ":" + "" + (ar["url"]))
        for i in range(len(results)):
            dispatcher.utter_message(results[i])
        return []

class ActionSearch(Action):
    def name(self):
        return "action_searchnews"
    def run(self, dispatcher, tracker, domain):
        urlPrefix="https://newsapi.org/v2/everything?q="
        urlSuffix="&apiKey=6d665ff7b2a04d55aacb45df87ee0001"
        searchthis = tracker.get_slot('searchterm')
        requestURL = urlPrefix + searchthis + urlSuffix
        request = requests.get(requestURL).json()
        news = request["articles"]
        #empty list which will contain all trending news
        results = []
        for ar in news:
            results.append(ar["title"] + ":" + "" + (ar["url"]))
        for i in range(len(results)):
            dispatcher.utter_message(results[i])
        return []