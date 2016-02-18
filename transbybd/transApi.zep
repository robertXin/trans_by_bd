namespace Transbybd;

class TransApi
{

	protected app_id{
		set,get
	};

	protected sec_key{
		set,get
	};

	protected curl_timeout = 10{
		set,get
	};

	const URL = "http://api.fanyi.baidu.com/api/trans/vip/translate";

	public function __construct(string! app_id,string! sec_key)
	{
		let this->app_id  = app_id;
		let this->sec_key = sec_key;
	}

	public function translate(string! query,string! from,string! to) -> string
	{
		array args = [];
		var ret;

		let args = ["q" : query,"appid" : this->app_id,"salt" : rand(10000,99999),"from" : from,"to" : to];

    	let args["sign"] = this->__buildSign(query,args["salt"]);

    	let ret = this->__callMutil(args);

    	let ret = json_decode(ret, true);

    	return ret;
	}

	private function __buildSign(string! query,int salt) -> string
	{
		string str,ret;

		let str = this->app_id.query.salt.this->sec_key;

		let ret = str->md5();

		return ret;
	}

	private function __callMutil(array! args) -> boolean
	{
		var ret = false;
		int i = 0;

		loop {
			if i > 1 {
				break;
			}
			if i == 1 {
				sleep(1);
			}
			let ret = this->__callOnce(args);
			let i++;
		}

		return ret;
	}

	private function __callOnce(array! args) -> boolean
	{
		var ch,data,r;

		let ch = curl_init();

        let data = this->__convert(args);
        curl_setopt(ch, CURLOPT_POSTFIELDS, data);
        curl_setopt(ch, CURLOPT_POST, 1);

	    curl_setopt(ch, CURLOPT_URL, TransApi::URL);
	    curl_setopt(ch, CURLOPT_TIMEOUT, this->curl_timeout);
	    curl_setopt(ch, CURLOPT_RETURNTRANSFER, 1);

	    let r = curl_exec(ch);
	    curl_close(ch);
	    return r;
	}

	private function __convert(args) -> string
	{
		string data = "";
		var key,val,k,v;

	    if typeof args == "array" {
	        for key,val in args {
	            if typeof val == "array" {
	                for k,v in val {
	                    let data .= key."[".k."]=".rawurlencode(v)."&";
	                }
	            }else{
	                let data .= key."=".rawurlencode(val)."&";
	            }
	        }
	        return data->trim("&");
	    }
	    return args;
	}
}
