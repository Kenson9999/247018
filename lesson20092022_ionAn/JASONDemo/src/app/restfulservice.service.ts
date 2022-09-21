import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core'; 

@Injectable({
  providedIn: 'root'
})
export class RestfulserviceService {
  public static http: HttpClient;
  constructor(public http: HttpClient){}
  public static setHttp(_http: HttpClient){
    this.http = _http;
  }
  public static restfulGet(apiURL:string){
    return this.http.get(apiURL);
  }
  public static restfulGet4PlainTxt(apiURL:string){
    return this.http.get(apiURL, {responseType:'text'});
  }
  public static restfulPost(apiURL:string,postData:string){
    return this.http.post(apiURL,postData);
  }
  public static restfulPostForm(apiURL:string,postData:FormData){
    return this.http.post(apiURL,postData);
  }
}
