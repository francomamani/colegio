import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {UsuarioComponent} from "./usuario/usuario.component";
import {UsuarioCreateComponent} from "./usuario/usuario-create/usuario-create.component";
import {UsuarioIndexComponent} from "./usuario/usuario-index/usuario-index.component";
import {UsuarioService} from "./usuario/usuario.service";
import {HttpClientModule} from "@angular/common/http";
import {GestionComponent} from "./gestion/gestion.component";
import {GestionIndexComponent} from "./gestion/gestion-index/gestion-index.component";
import {GestionCreateComponent} from "./gestion/gestion-create/gestion-create.component";
import {ToastrModule} from "ngx-toastr";

const routes: Routes = [
    { path: '', component: UsuarioComponent, children: [
        { path: 'listar', component: UsuarioIndexComponent},
        { path: 'crear', component: UsuarioCreateComponent},
        { path: '', redirectTo: 'listar', pathMatch: 'full'}
    ]},
    { path: 'gestion', component: GestionComponent, children: [
        { path: 'listar', component: GestionIndexComponent},
        { path: 'crear', component: GestionCreateComponent},
        { path: '', redirectTo: 'listar', pathMatch: 'full'}
    ]},
];

@NgModule({
  imports: [
      HttpClientModule,
      ToastrModule.forRoot(),
      RouterModule.forChild(routes)],
  exports: [RouterModule],
  providers: [UsuarioService]
})
export class AdminRoutingModule { }
