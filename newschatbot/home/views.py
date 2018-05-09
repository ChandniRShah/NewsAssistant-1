from django.views.generic import TemplateView

class HomeView(TemplateView):
    template_name = 'home/home2.html'





class ChatterBotAppView(TemplateView):
    template_name = 'home/home.html'
    

