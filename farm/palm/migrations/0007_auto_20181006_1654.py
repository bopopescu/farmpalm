# Generated by Django 2.0.7 on 2018-10-06 07:54

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('palm', '0006_auto_20180929_1436'),
    ]

    operations = [
        migrations.AlterField(
            model_name='snode',
            name='serial_num',
            field=models.CharField(max_length=100),
        ),
    ]
