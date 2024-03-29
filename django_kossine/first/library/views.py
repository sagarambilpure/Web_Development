from django.shortcuts import render
from django.http import HttpResponse,HttpResponseRedirect
from datetime import datetime
from django.urls import reverse #coverts name to url
from library.models import Student,Book
# Create your views here.

def authenticate(request):
    username = request.POST['username']
    password = request.POST['password']
    l = Student.objects.filter(username=username, password=password)
    if len(l):
        request.session['username'] = username
        return HttpResponseRedirect(reverse('showhomepage'))
    else:
        return HttpResponseRedirect(reverse('libraryindex'))

def logout(request):
    request.session.flush()
    return HttpResponseRedirect(reverse('libraryindex'))

def showhome(request):
    if 'username' not in request.session:
        return HttpResponseRedirect(reverse('libraryindex'))
    books = Book.objects.all()
    username = request.session['username']
    return render(request,'library/home.html',{
    'books' : books,
    'username' : username})

def index(request):
    current=datetime.now()
    hour=current.hour
    if hour >=0 and hour <12:
        message='Good Morning'
    elif hour>=12 and hour<16:
        message='Good Afternoon'
    else:
        message='Good Evening'
    print(message)


    #return HttpResponse('Welcome to library management')
    return render(request,'library/index.html',{'messageofday':message})

def aboutus(request):
    return HttpResponse(' U r on aboutus page')

def register(request):
    return render(request,'library/register.html')

def registerstudent(request):
    username = request.POST['username']
    country = request.POST['country']
    password = request.POST['password']

    s = Student(username = username, password = password,country=country)
    s.save()

    if s.id:
        return HttpResponseRedirect(reverse('libraryindex'))
    else:
        return HttpResponse("Error in registeration")
