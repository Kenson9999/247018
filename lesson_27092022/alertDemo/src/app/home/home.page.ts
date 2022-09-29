import { Component } from '@angular/core';
import { AlertController } from '@ionic/angular';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  constructor(public alertController:AlertController) {}
  async paesentAlert(){
    const alert = await this.alertController.create({
      cssClass:'my-custom-class',
      header:'Alert',
      subHeader:'Good Morning',
      message: 'This is an alert message.',
      buttons:['OK']
    });
    await alert.present();
  }
  async presentAlertMultipleButtons(){
    const alert = await this .alertController.create({
      cssClass:'my-custom-class',
      header:'Alert',
      subHeader:'Alert Multiple Buttons',
      message:'This is an alert message.',
      buttons:['Cancel','Open Modal','Delete']
    });
    await alert.present();
  }
  async presentAlertConfirm(){
    const alert = await this .alertController.create({
      cssClass:'my-custom-class',
      header:'Confirm!',
      message:'Message <strong>text</strong>!!!',
      buttons:[
        {
          text:'Cancel',
          role:'cancel',
          cssClass:'secondary',
          id:'cancel-button',
          handler:(blah)=>{
            console.log('Confirm Cancel:blah');
          }},{
            text:'Okay',
            id:'confirm-button',
            handler:()=>{
              console.log('Confirm Okay');
            }
          }
        ]
    });
    await alert.present();
  }
  async presentAlertPrompt(){
    const alert = await this.alertController.create({
      cssClass:'my-custom-class',
      header:'Prompt!',
      inputs:[{
        name:'name1',
        type:'text',
        placeholder:'Placeholder 1'
      },{
        name:'name2',
        type:'text',
        id:'name2-id',
        value:'hello',
        placeholder:'Placeholder 2'
      },
      {
        name:'paragraph',
        id:'paragraph',
        type:'textarea',
        placeholder:'Placeholder 3'
      },
      {
        name:'name3',
        value:'http://ionicframework.com',
        type:'url',
        placeholder:'Favorite site ever'
      },
    {
      name:'name4',
      type:'date',
      min:'2000-03-01',
      max:'2022-01-12'
    },
    {
      name:'name5',
      type:'date'
    },
    {
      name:'name6',
      type:'number',
      min:-5,
      max:10
    },
    {
      name:'name7',
      type:'number'
    },
    {
      name:'name8',
      type:'password',
      placeholder:'Advanced Attributes',
      cssClass:'specialClass',
      attributes:{
        maxlength:4,
        inputmode:'decimal'
      }
    }
    ],
    buttons:[
      {
        text:'Cancel',
        role:'cancel',
        cssClass:'secondary',
        handler:()=>{
          console.log('confirm Cancel');
        }
      },{
        text:'OK',
        handler:()=>{
          console.log('Confirm OK');
        }
      }
    ]
    });
    await alert.present();
  }
  async presentAlertRadio(){
    const alert = await this.alertController.create({
      cssClass:'my-custom-class',
      header:'Radio',
      inputs:[
        {
          name:'radio1',
          type:'radio',
          label:'HTML5',
          value:'value1',
          handler:()=>{
            console.log('Radio 1 selected');
          },
          checked: true
        },
        {
          name:'radio2',
          type:'radio',
          label:'CSS',
          value:'value2',
          handler:()=>{
            console.log('Radio 2 selected');

          }
        },
        {
          name:'radio3',
          type:'radio',
          label:'Ionic',
          value:'value4',
          handler:()=>{
            console.log('Radio 4 selected');
          }
        },
        {
          name:'radio5',
          type:'radio',
          label:'Angular',
          value:'value5',
          handler:()=>{
            console.log('Radio 5 selected');
          }
        }
      ],
      buttons:[
        {
        text:'Cancel',
        role:'cancel',
        cssClass:'sceondary',
        handler:()=>{
          console.log('Confirm Cancel');
        }
      },{
        text:'Ok',
        handler:()=>{
          console.log('Confirm Ok');
        }
      }
    ]
    });
  await alert.present();
  }
  async presentAlertCheckbox(){
    const alert = await this.alertController.create({
      cssClass:'my-custom-class',
      header:'Checkbox',
      inputs:[
        {
          name:'checkbox1',
          type:'checkbox',
          label:'Facebook',
          value:'value1',
          handler:()=>{
            console.log('Checkbox 1 selected');
          },
          checked:true
        },
        {
          name:'checkbox2',
          type:'checkbox',
          label:'Instagram',
          value:'value2',
          handler:()=>{
            console.log('Checkbox 2 selected');
          }
        },
        {
          name:'checkbox3',
          type:'checkbox',
          label:'WhatsApp',
          value:'value3',
          handler:()=>{
            console.log('Checkbox 3 selected');
          }
        },
        {
          name:'checkbox4',
          type:'checkbox',
          label:'Wechat',
          value:'value4',
          handler:()=>{
            console.log('Checkbox 4 selected');
          }
        },
        {
          name:'checkbox5',
          type:'checkbox',
          label:'Signal',
          value:'value5',
          handler:()=>{
            console.log('Checkbox 5 selected');
          }
        }
      ],
      buttons:[
        {
          text:'Cancel',
          role:'cancel',
          cssClass:'secondary',
          handler:()=>{
            console.log('Confirm Cancel');
          }
        },{
          text:'Ok',
          handler:()=>{
            console.log('Confirm OK');
          }
        }
      ]
    });
    await alert.present();
  }
}
