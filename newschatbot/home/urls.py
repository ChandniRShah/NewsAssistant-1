from django.conf.urls import url, include
from django.contrib import admin
from home.views import ChatterBotAppView
from . import views
from home.views import HomeView
from chatterbot.ext.django_chatterbot import urls as chatterbot_urls
import chatterbot


urlpatterns = [
    url(r'^home2/$', HomeView.as_view(), name='home2'),
    url(r'^home/$', ChatterBotAppView.as_view(), name='home'),
      url(r'^api/chatterbot/', include((chatterbot_urls, 'apichat'), namespace='chatterbot')),
]


   