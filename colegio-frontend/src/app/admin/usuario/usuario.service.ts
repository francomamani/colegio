import { Injectable } from '@angular/core';
import {HttpClient} from "@angular/common/http";
import { environment } from "../../../environments/environment.prod";

@Injectable()
export class UsuarioService {
  base = environment.base;
  constructor(protected http: HttpClient) { }

  index() {
    return this.http.get(this.base + 'usuarios');
  }

  loadPage(page){
      return this.http.get(this.base + 'usuarios?page=' + page);
  }
}
