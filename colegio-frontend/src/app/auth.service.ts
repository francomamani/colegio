import { Injectable } from '@angular/core';
import { environment } from "../environments/environment.prod";
import {HttpClient} from "@angular/common/http";
import {Observable} from "rxjs/Observable";
import 'rxjs/add/operator/map';
@Injectable()
export class AuthService {

  usuario = '';
  base = environment.base;
  headers: any =null;
  constructor(private http: HttpClient) {
    this.headers = {
      'Content-Type': 'application/json',
      'Authorization': 'Bearer ' + localStorage.getItem('colegio-token'),
    };
  }

  login(credenciales) : Observable<any>{
    return this.http.post(this.base + 'login', credenciales, { headers: this.headers })
                    .map((res: any)=> {
                        this.usuario = res.usuario.nombres + ' ' + res.usuario.apellidos
                        console.log(this.usuario);
                        return res;
                    });
  }

  logout() {
    localStorage.removeItem('colegio-token');
    this.usuario = '';
  }
  getToken() {
    return localStorage.getItem('colegio-token');
  }

  getUsuario(){
      return  this.http.get(this.base + 'get-usuario', { headers: this.headers });
  }
  autenticado() {
    let status = false;
    if (localStorage.getItem('colegio-token')){
      status = true;
    }
    return status;
  }
}
