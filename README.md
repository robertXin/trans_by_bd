# trans_by_bd
通过百度翻译API实现翻译功能的PHP扩展
本PHP扩展使用Zephir开发完成

# 使用方法

$f = new Transbybd\TransApi('app_id','sec_key');//从百度开放平台中获取的id和密码


$f->setCurlTimeout(5);设置curl超时时间，默认为10秒


$ret =  $f->translate('china','auto','zh');//第一个参数为需要翻译词，第二个为此词的语言类型，第三个是需要翻译成什么语言（不能传auto）


print_r($ret);


# 语言字符对应表

语言简写	名称

auto	自动检测

zh	中文

en	英语

yue	粤语

wyw	文言文

jp	日语

kor	韩语

fra	法语

spa	西班牙语

th	泰语

ara	阿拉伯语

ru	俄语

pt	葡萄牙语

de	德语

it	意大利语

el	希腊语

nl	荷兰语

pl	波兰语

bul	保加利亚语

est	爱沙尼亚语

dan	丹麦语

fin	芬兰语

cs	捷克语

rom	罗马尼亚语

slo	斯洛文尼亚语

swe	瑞典语

hu	匈牙利语

cht	繁体中文
