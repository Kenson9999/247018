import { Component } from '@angular/core';
import { RestfulserviceService } from '../restfulservice.service';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {
public DATA_URL = 'https://api.hkma.gov.hk/public/bank-svf-info/register-svf-licensees?lang=tc&segment=SVFLic'; 

public JSON_RESULT;

constructor(public http: HttpClient ) {
RestfulserviceService.setHttp(this.http);}
  ngOnInit(){
    this.appendJSON();
  }
  public appendJSON(){
    RestfulserviceService.restfulGet(this.DATA_URL).subscribe(data=>{this.JSON_RESULT=data;});
  }
  
}
