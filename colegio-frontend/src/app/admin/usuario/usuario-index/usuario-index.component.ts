import {Component, EventEmitter, OnInit, Output} from '@angular/core';
import {UsuarioService} from "../usuario.service";
import {Router} from "@angular/router";
import {AuthService} from "../../../auth.service";

@Component({
  selector: 'app-usuario-index',
  templateUrl: './usuario-index.component.html',
  styleUrls: ['./usuario-index.component.css'],
})
export class UsuarioIndexComponent implements OnInit {

  @Output() notify : EventEmitter<string> = new EventEmitter<string>();
  usuarios: any = null;
  controls = {
      'current_page' : 1,
      'per_page' : 0,
      'last_page' : 0,
      'prev_page_url' : '',
      'next_page_url' : '',
      'total' : 0,
  };
  constructor(private usuarioService: UsuarioService,
              private authService: AuthService) {
      this.notify.emit(this.authService.usuario);
  }

  ngOnInit() {
    this.usuarioService.index()
        .subscribe( (res: any) => {
            this.usuarios = res.data;
            this.controls.current_page = res.current_page;
            this.controls.per_page = res.per_page;
            this.controls.prev_page_url = res.prev_page_url;
            this.controls.next_page_url = res.next_page_url;
            this.controls.last_page = res.last_page;
            this.controls.total = res.total;
        });
  }

  loadPage(event: any): void {
    console.log(event);
    this.usuarioService.loadPage(event.page)
        .subscribe((res: any)=> {
            this.usuarios = res.data;
            this.controls.current_page = res.current_page;
            this.controls.per_page = res.per_page;
            this.controls.prev_page_url = res.prev_page_url;
            this.controls.next_page_url = res.next_page_url;
            this.controls.last_page = res.last_page;
            this.controls.total = res.total;

        });
  }
}
