import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-product',
  imports: [],
  templateUrl: './product.html',
  styleUrl: './product.css'
})
export class Product  {
  data: any;

  constructor(private http: HttpClient) {


    const url = 'http://localhost/ajbo/select.php';

    this.http.get<any>(url).subscribe({
      next: (res) => { 
              this.data = res;  
            //  console.log("this.data" ,this.data);
            //  console.log("res",res);
            },
      error: (err) => console.error('Error fetching data11111:', err)
    });
  }
}
