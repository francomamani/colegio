import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { AdminRoutingModule } from './admin-routing.module';
import { UsuarioComponent } from './usuario/usuario.component';
import { UsuarioCreateComponent } from './usuario/usuario-create/usuario-create.component';
import { UsuarioIndexComponent } from './usuario/usuario-index/usuario-index.component';
import {PaginationModule} from "ngx-bootstrap";

@NgModule({
  imports: [
    CommonModule,
    AdminRoutingModule,
    PaginationModule.forRoot()
  ],
  declarations: [UsuarioComponent, UsuarioCreateComponent, UsuarioIndexComponent]
})
export class AdminModule { }
