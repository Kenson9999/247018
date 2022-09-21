import { Component } from '@angular/core';
import { ActionSheetController } from '@ionic/angular';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {
  constructor(public actionSheetController:ActionSheetController) {}
    async presentActionSheet(){
      const actionSheet = await this.actionSheetController.create({
        header: 'Albums',
        cssClass:'my-custom-class',
        buttons:[{
          text:'Delete',
          role:'destructive',
          icon:'trash',
          handler:()=>{ console.log('Delete clicked');}
        },
        {
          text:'Share',
          role:'destructive',
          icon:'share',
          handler:()=>{
            console.log('Share clicked');
          }
        },
        {
          text:'Plat (open modal)',
          icon:'caret-forward-circle',
          handler: ()=>{
            console.log('Play Clicked');
          }
        },
        {
          text:'Favorite',
          icon:'heart',
          handler:()=>{
            console.log('Favorite clicked');
          }
        },
        {
          text:'Cancel',
          icon:'close',
          handler:()=>{
            console.log('Cancel clicked');
          }
        }]});
        await actionSheet.present();
      }
    } 
