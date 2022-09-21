import { Component } from '@angular/core';
import { AlertController } from '@ionic/angular'

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {
  constructor(public alertController:AlertController) {}

  async presentAlert(){
    const alert = await this.alertController.create({
      cssClass:'my-custom-class',
      header:'Alert',
      subHeader:'Good Morning',
      message:'This is an alert message.',
      buttons:['OK']
    });
    await alert.present();
  }

  async presentAlertMultipleButtons() {
    const alert = await this.alertController.create({
      cssClass: 'my-custom-class',
      header:'Alert',
      subHeader:'Alert Multiple Buttons',
      message:'This is an alert message.',
      buttons:['Cancel','Open Modal','Delete','HELLO','HI!Where a u','Hi!Im here',]
    });
    await alert.present();
  }

  async presentAlertConfirm(){
    const alert = await this.alertController.create({
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
          }
        },
        {
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

}
