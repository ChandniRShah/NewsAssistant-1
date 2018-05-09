from django.shortcuts import render, HttpResponse, redirect
from django.urls import reverse
from django.contrib.auth.forms import UserCreationForm
from django.contrib.auth.models import User
from accounts.forms import RegistrationForm

# Create your views here




def register(request):
    if request.method=='POST':
        form= RegistrationForm(request.POST)
        if form.is_valid():
            form.save()
            

            return redirect(reverse('accounts:home'))

    else: 
         form = RegistrationForm()

    args = {'form' : form}
    return render(request,'accounts/reg_form.html', args)