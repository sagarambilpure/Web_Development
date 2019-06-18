from django.contrib import admin

# Register your models here.

from . import models

class ReviewAdmin(admin.TabularInline):
    model = models.Review
    extra = 0 #initailly 0 review will be seen

class BookAdmin(admin.ModelAdmin):#used to display the title as well as other attributes of the book
    fields=['title','pages','price','publicationhouse']
    list_display=['title','price','pages','publicationhouse']
    search_fields=['title'] #to add search fields
    list_filter=['price','pages'] #to add filter functionality
    inlines = [ReviewAdmin] # add review field (which is another table)

admin.site.register(models.Book,BookAdmin)#to register the book model with admin interface and return the a class name
admin.site.register(models.PublicationHouse)
