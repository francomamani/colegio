import { Component, OnInit } from '@angular/core';
import {AuthService} from "../auth.service";
import {FormBuilder, FormControl, FormGroup, Validators} from "@angular/forms";
import {ActivatedRoute, Router} from "@angular/router";

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  loginGroup: FormGroup;
  constructor(private authService: AuthService,
              private router: Router,
              private route: ActivatedRoute,
              private fb: FormBuilder) {
    this.createForm();
    this.route.params
        .subscribe((res: any) => {
            if (res.param === 'logout') {
                this.authService.logout();
                this.router.navigate(['/login']);
            }
        });
  }

  ngOnInit() {
      if (this.authService.getToken()) {
          this.router.navigate(['/admin']);
      }
  }
  createForm() {
    this.loginGroup = this.fb.group({
        'cuenta': new FormControl('', Validators.required),
        'password': new FormControl('', Validators.required)
    });
  }
  login() {
    this.authService.login(this.loginGroup.value)
        .subscribe((res: any) => {
            if (res.autenticado) {
              localStorage.setItem('colegio-token', res.token);
              this.router.navigate(['/admin']);
            } else {
                console.log(res);
            }
        });
  }

}
