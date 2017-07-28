<?php

class RequestController extends BaseController { 
	
	public function newrequest()
	{
		
		$postData = Input::all(); 
		
        $rules = array(
			'full_name' => 'required',
            'email' => 'required|email',
            'issue' => 'required',
            'content' => 'required'
                
         );
         
         $messages = array(
			'content.required' => 'Lütfen mesajınızı yazınız',
            'full_name.required' => 'Lütfen isminizi yazınız',
            'issue.required' => 'Lütfen konuyu yazınız',
            'email.required' => 'Lütfen email adresinizi yazınız',
            'email.email'    => 'Lütfen mail adresinizi faormata uygun yazınız' 
         );
                
         // KONTROL (VALIDATION) İŞLEMİNİ GERÇEKLEŞTİRELİM
         $validator = Validator::make($postData, $rules, $messages);

		 // EĞER VALİDASYON BAŞARISIZ OLURSA HATALARI GÖSTERELİM
		 if ($validator->fails()) {
			 // HATA MESAJLARI VE INPUT DEĞERLERİYLE FORMA  YÖNLENDİRELİM
			 return Redirect::to('/#iletisim')
					->withInput()
                    ->withErrors($validator->messages());
		 } else {
			 
			 // VERİTABANINA EKLEYELİM
			 $request = new Requests();
             $request->full_name = $postData['full_name'];
             $request->email = $postData['email'];
			 $request->issue = $postData['issue'];
             $request->content = $postData['content'];
             $request->save();
                    
             return Redirect::to('/#iletisim');
                    
          }    
	}

	public function user_newrequest()
	{
		
		$postData = Input::all(); 
		
        $rules = array(
			'full_name' => 'required',
            'email' => 'required',
            'issue' => 'required',
            'content' => 'required'
                
         );
         
         $messages = array(
			'content.required' => 'Lütfen şikayetinizi yazın',
            'full_name.required' => 'Lütfen isminizi yazın',
            'issue.required' => 'Lütfen konuyu yazın',
            'email.required' => 'Lütfen emailinizi yazın'
         );
                
         // KONTROL (VALIDATION) İŞLEMİNİ GERÇEKLEŞTİRELİM
         $validator = Validator::make($postData, $rules, $messages);

		 // EĞER VALİDASYON BAŞARISIZ OLURSA HATALARI GÖSTERELİM
		 if ($validator->fails()) {
			 // HATA MESAJLARI VE INPUT DEĞERLERİYLE FORMA  YÖNLENDİRELİM
			 return Redirect::to('user/request_complaint')
					->withInput()
                    ->withErrors($validator->messages());
		 } else {

			 // VERİTABANINA EKLEYELİM
			 $request = new Requests();
             $request->full_name = $postData['full_name'];
             $request->email = $postData['email'];
			 $request->issue = $postData['issue'];
             $request->content = $postData['content'];
             $request->save();
                    
             return Redirect::to('user/request_complaint')->with('message', 'İstek | Şikayet "iniz gönderildi');
                    
          }    
	}

}
