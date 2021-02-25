import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { ServerService } from '../../service/server.service';
import { ToastController,NavController,Platform,LoadingController } from '@ionic/angular';

@Component({
  selector: 'app-rate',
  templateUrl: './rate.page.html',
  styleUrls: ['./rate.page.scss'],
})

export class RatePage implements OnInit {

  oid:any;
  star     = 0;
  text:any;

  constructor(private route: ActivatedRoute,public server : ServerService,public toastController: ToastController,private nav: NavController,public loadingController: LoadingController){

    this.oid = this.route.snapshot.paramMap.get('id');
    this.text = JSON.parse(localStorage.getItem('app_text'));


  }

  ngOnInit()
  {
    
  }

  setStar(val)
  {
    this.star = val;
  }

  async giveRating(data)
  {
    if(this.star == 0)
    {
      this.presentToast('Vui lòng chọn bất kỳ đánh giá nào để tiếp tục.');
    }
    else
    {
       const loading = await this.loadingController.create({
        message: 'Vui lòng đợi...',
        duration: 3000
      });
      await loading.present();

      var allData = {comment : data.comment,user_id : localStorage.getItem('user_id'),star : this.star,oid : this.oid}

      this.server.rating(allData).subscribe((response:any) => {
    
    this.presentToast('Cảm ơn bạn! Đánh giá được gửi thành công.');  

      this.nav.navigateBack('/order');
        
      loading.dismiss();

      });
    }
  }

  async presentToast(txt) {
    const toast = await this.toastController.create({
      message: txt,
      duration: 2000,
      position : 'top'
    });
    toast.present();
  }

}
