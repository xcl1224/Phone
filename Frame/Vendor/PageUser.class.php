<?php
//声明命名空间
namespace Frame\Vendor;

//定义最终的Pager类
final class PageUser
{
	//私有的成员属性
	private $records;	//总记录数
	private $pages;		//总页数
	private $pagesize;	//每页显示多少条记录
	private $page;		//当前页码
	private $url;		//链接地址
	private $first;		//首页
	private $last;		//尾页
	private $prev;		//上一页
	private $next;		//下一页
    private $midPage;
	private $paramArr=array();
	//构造方法
	public function __construct($records,$pagesize,$page,$params=array())
	{
		$this->records	= $records;
		$this->pagesize	= $pagesize;
		$this->pages	= $this->getPages();
		$this->page		= $page;
		$this->url		= $this->getUrl($params); //?c=Article&a=index&page=
		$this->first	= $this->getFirst();//?c=Article&a=index&page=1
		$this->last		= $this->getLast(); //?c=Article&a=index&page=50
        $this->getPageMid();
		$this->prev		= $this->getPrev(); //?c=Article&a=index&page=5
		$this->next		= $this->getNext();//?c=Article&a=index&page=7
	}

	//获取链接地址
	private function getUrl($params=array())
	{
		foreach($params as $key=>$value)
		{
			$this->paramArr[] = "$key=$value";
		}
		$page = isset($this->paramArr) ? implode("&",$this->paramArr): "";
		return "?".$page."&page=";//?c=Article&a=index&page=
	}

	//获取总页数
	private function getPages()
	{
		return ceil($this->records/$this->pagesize);
	}

	//获取首页
	private function getFirst()
	{
		if($this->page==1){
			return "";
		}else{
			return 
            "<li class='li'><a class='page-link' href='$this->url"."1'>처음</a></li>";
		}
	}

	//获取尾页
	private function getLast()
	{
		if($this->page==$this->pages){
			return "";
		}else{
			return "<li class='li'><a class='page-link' href='$this->url"."$this->pages'>마지막</a></li>";
		}
	}

	//获取上一页
	private function getPrev()
	{
		if($this->page==1)
		{
			return "";
		}else
		{
			return             
            "<li class='li'><a class='page-link' href='{$this->prev}'><i class='fa fa-angle-left'></i></a></li>";
		}
	}

	//获取下一页
	private function getNext()
	{
		if($this->page>=$this->pages)
		{
			return "";
		}else
		{
			return 
            "<li class='li'><a class='page-link' href='{$this->prev}'><i class='fa fa-angle-right'></i></a></li>";
		}
	}
    //10페이지 보여주기
    private function getPageMid(){
        $start_page = max(1, $this->page - 5);
        $end_page = min($this->pages, $start_page + 9);
		
        for ($i = $start_page; $i <= $end_page; $i++) {
            if ($i == $this->page) {
                $this->midPage .= "<li class='li'><a class='page-link active'>$i</a></li>";
            } else {
                $this->midPage .= "<li class='li'><a class='page-link' href='$this->url"."$i'>$i</a></li>";
            }
        }
    }

	//显示分页
	public function showPage()
	{
		if($this->pages>1)
		{
			$strPage = "{$this->first} {$this->prev}{$this->midPage}{$this->next} {$this->last}";
			return $strPage;
		}else
		{
			return "<li class='li'><a class='page-link active'>1</a></li>";
		}
	}
}