import {Component, Input, OnChanges, OnInit, SimpleChanges} from '@angular/core';
import {Router} from "@angular/router";
import {AuthService} from "../auth.service";
import {Observable} from "rxjs/Observable";
import {FormControl} from "@angular/forms";

@Component({
  selector: 'app-layout',
  templateUrl: './layout.component.html',
  styleUrls: ['./layout.component.css']
})
export class LayoutComponent implements OnInit{

  usuario: string = '';
  constructor(public router: Router,
              public authService: AuthService) {

  }
  ngOnInit() {
  }

  signIn(usuario: string): void{
    this.usuario = usuario;
    console.log('emitter' + usuario);
  }
}
