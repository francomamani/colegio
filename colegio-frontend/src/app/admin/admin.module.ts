import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { AdminRoutingModule } from './admin-routing.module';
import { UsuarioComponent } from './usuario/usuario.component';
import { UsuarioCreateComponent } from './usuario/usuario-create/usuario-create.component';
import { UsuarioIndexComponent } from './usuario/usuario-index/usuario-index.component';
import {PaginationModule} from "ngx-bootstrap";
import { GestionComponent } from './gestion/gestion.component';
import { GestionCreateComponent } from './gestion/gestion-create/gestion-create.component';
import { GestionIndexComponent } from './gestion/gestion-index/gestion-index.component';
import {FormsModule, ReactiveFormsModule} from "@angular/forms";
import {GestionService} from "./gestion/gestion.service";

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    AdminRoutingModule,
    PaginationModule.forRoot()
  ],
  declarations: [UsuarioComponent, UsuarioCreateComponent, UsuarioIndexComponent, GestionComponent, GestionCreateComponent, GestionIndexComponent],
  providers: [ GestionService]
})
export class AdminModule { }
