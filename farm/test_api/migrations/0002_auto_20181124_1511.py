# Generated by Django 2.0.7 on 2018-11-24 06:11

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('test_api', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='post',
            name='photo',
            field=models.ImageField(blank=True, upload_to=''),
        ),
    ]
