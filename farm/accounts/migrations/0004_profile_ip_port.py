# Generated by Django 2.0.7 on 2018-09-13 16:08

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('accounts', '0003_profile_ip_address'),
    ]

    operations = [
        migrations.AddField(
            model_name='profile',
            name='ip_port',
            field=models.IntegerField(default=8000),
            preserve_default=False,
        ),
    ]