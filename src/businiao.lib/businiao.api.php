<?php

class BuSiNiaoApi{
    private $appid='';
    private $appkey='';
    private $url=BUSINIAO_API_HOST;
    function __construct($appid,$appkey){
        $this->appid=$appid;
        $this->appkey=$appkey;
        
    }
    function get_url($api_type){
        $this->url.=$api_type;
        $this->url.=sprintf('?appid=%s&appkey=%s',$this->appid,$this->appkey);
        return $this->url;
        
    }
}

class UrlCycleCheck{
    private $curl_url='';
    function __construct($appid,$appkey){
        $this->curl_url=(new BuSiNiaoApi($appid,$appkey))->get_url(BUSINIAO_API_TYPE_UrlCycleCheck);
        
    }
    /** 添加
     * 
     * **/
    function add($url,int $frequency,$is_monitor=false){
        $postArr['type']='add';
        $postArr['url']=$url;
        $postArr['is_monitor']=$is_monitor;
        $postArr['frequency']=$frequency;
        return $this->curl($postArr);
    }
    function edit($url,int $frequency=null,bool $is_monitor=null){
        $postArr['type']='edit';
        $postArr['url']=$url;
        $postArr['is_monitor']=$is_monitor;
        $postArr['frequency']=$frequency;
        return $this->curl($postArr);
    }
    function delete($url){
        $postArr['type']='delete';
        $postArr['url']=$url;
        return $this->curl($postArr);
    }
    function list(int $page=1,int $rows=10){
        $postArr['type']='list';
        $postArr['page']=$page;
        $postArr['rows']=$rows;
        return $this->curl($postArr);
    }
    function frequency(){
        $postArr['type']='frequency';
        return $this->curl($postArr);
    }
    function help(){
        $postArr['type']='help';
        return $this->curl($postArr);
    }
    private function curl($postArr){
        $curl=new ApiCurlLib($this->curl_url,[],$postArr);
        return $curl->curl();
    }
    
}


class SingleShortUrl{
    private $curl_url='';
    function __construct($appid,$appkey){
        $this->curl_url=(new BuSiNiaoApi($appid,$appkey))->get_url(BUSINIAO_API_TYPE_SingleShortUrl);
        
    }
    /** 添加
     *$visit_type值只能是:browser,frame,jump.默认 jump。如果你不知道它含义请到会员中心页面版查看
     * **/
    function add($url,$visit_type='jump',$title=null,$keywords=null,$description=null){
        $postArr['type']='add';
        $postArr['url']=$url;
        $postArr['visit_type']=$visit_type;
        
        if($title!=null){
            $postArr['title']=$title;
        }
        if($keywords!=null){
            $postArr['keywords']=$keywords;
        }
        if($description!=null){
            $postArr['description']=$description;
        }
        return $this->curl($postArr);
    }
    function edit($url,$visit_type=null,$title=null,$keywords=null,$description=null){
        $postArr['type']='edit';
        $postArr['url']=$url;
        if($visit_type!=null){
            $postArr['visit_type']=$visit_type;
        }
        if($title!=null){
            $postArr['title']=$title;
        }
        if($keywords!=null){
            $postArr['keywords']=$keywords;
        }
        if($description!=null){
            $postArr['description']=$description;
        }
        return $this->curl($postArr);
    }
    function delete($url){
        $postArr['type']='delete';
        $postArr['url']=$url;
        return $this->curl($postArr);
    }
    function list($url=null,int $page=1,int $rows=10){
        $postArr['type']='list';
        if($url!=null){
            $postArr['url']=$url;
        }
        $postArr['page']=$page;
        $postArr['rows']=$rows;
        return $this->curl($postArr);
    }
    function help(){
        $postArr['type']='help';
        return $this->curl($postArr);
    }
    private function curl($postArr){
        $curl=new ApiCurlLib($this->curl_url,[],$postArr);
        return $curl->curl();
    }
    
}


class DomainShortUrl{
    private $curl_url='';
    function __construct($appid,$appkey){
        $this->curl_url=(new BuSiNiaoApi($appid,$appkey))->get_url(BUSINIAO_API_TYPE_DomainShortUrl);
        
    }
    function GetLandDomainList(){
        $postArr['type']='GetLandDomainList';
        return $this->curl($postArr);
    }
    /** 添加
     *$visit_type值只能是:browser,frame,jump.默认 jump。如果你不知道它含义请到会员中心页面版查看
     * **/
    function add($url,$visit_type='jump',$title=null,$keywords=null,$description=null){
        $postArr['type']='add';
        $postArr['url']=$url;
        $postArr['visit_type']=$visit_type;
        
        if($title!=null){
            $postArr['title']=$title;
        }
        if($keywords!=null){
            $postArr['keywords']=$keywords;
        }
        if($description!=null){
            $postArr['description']=$description;
        }
        return $this->curl($postArr);
    }
    function edit($url,$visit_type=null,$title=null,$keywords=null,$description=null){
        $postArr['type']='edit';
        $postArr['url']=$url;
        if($visit_type!=null){
            $postArr['visit_type']=$visit_type;
        }
        if($title!=null){
            $postArr['title']=$title;
        }
        if($keywords!=null){
            $postArr['keywords']=$keywords;
        }
        if($description!=null){
            $postArr['description']=$description;
        }
        return $this->curl($postArr);
    }
    function delete($url){
        $postArr['type']='delete';
        $postArr['url']=$url;
        return $this->curl($postArr);
    }
    function list($url=null,int $page=1,int $rows=10){
        $postArr['type']='list';
        if($url!=null){
            $postArr['url']=$url;
        }
        $postArr['page']=$page;
        $postArr['rows']=$rows;
        return $this->curl($postArr);
    }
    function HighFrequencyCheck($url){
        $postArr['type']='HighFrequencyCheck';
        $postArr['url']=$url;
        return $this->curl($postArr);
    }
    function help(){
        $postArr['type']='help';
        return $this->curl($postArr);
    }
    private function curl($postArr){
        $curl=new ApiCurlLib($this->curl_url,[],$postArr);
        return $curl->curl();
    }
    
}
class UrlCheck{
    private $curl_url='';
    function __construct($appid,$appkey){
        $this->curl_url=(new BuSiNiaoApi($appid,$appkey))->get_url(BUSINIAO_API_TYPE_UrlCheck);
        
    }
    function get($url){
        $postArr['url']=$url;
        return $this->curl($postArr);
    }
    private function curl($postArr){
        $curl=new ApiCurlLib($this->curl_url,[],$postArr);
        return $curl->curl();
    }
}
class GetWechatShortUrl{
    private $curl_url='';
    function __construct($appid,$appkey){
        $this->curl_url=(new BuSiNiaoApi($appid,$appkey))->get_url(BUSINIAO_API_TYPE_GetWechatShortUrl);
        
    }

    function get($url){
        $postArr['url']=$url;
        return $this->curl($postArr);
    }
    private function curl($postArr){
        $curl=new ApiCurlLib($this->curl_url,[],$postArr);
        return $curl->curl();
    }
}

class GetWeiboShortUrl{
    private $curl_url='';
    function __construct($appid,$appkey){
        $this->curl_url=(new BuSiNiaoApi($appid,$appkey))->get_url(BUSINIAO_API_TYPE_GetWeiboShortUrl);
        
    }

    function get($url){
        $postArr['url']=$url;
        return $this->curl($postArr);
    }

    private function curl($postArr){
        $curl=new ApiCurlLib($this->curl_url,[],$postArr);
        return $curl->curl();
    }
}