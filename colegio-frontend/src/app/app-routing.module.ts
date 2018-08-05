import {Routes} from "@angular/router";
import {LayoutComponent} from "./layout/layout.component";
import {LoginComponent} from "./login/login.component";
import {InicioComponent} from "./inicio/inicio.component";
import {AuthGuard} from "./auth.guard";

export const appRoutes: Routes = [
    { path: '', component: LayoutComponent, children: [
        { path: 'inicio', component: InicioComponent },
        { path: 'login', component: LoginComponent },
        { path: 'login/:param', component: LoginComponent },
        { path: 'admin', loadChildren: 'app/admin/admin.module#AdminModule', canActivate: [AuthGuard]},
        { path: '', redirectTo: 'inicio', pathMatch: 'full'}
    ]},
    { path: '**', redirectTo: '/'}
];