<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePreReleaseList请求参数结构体
 *
 * @method string getKeywords() 获取单独使用Keywords：使用域名关键词进行搜索
Keywords+DomainStart（true）：使用域名开头关键词进行搜索
Keywords+DomainEnd（true）：使用域名结尾关键词进行搜索
Keywords+DomainStart（true）+DomainEnd（true）：使用域名开头或结尾关键词进行搜索
 * @method void setKeywords(string $Keywords) 设置单独使用Keywords：使用域名关键词进行搜索
Keywords+DomainStart（true）：使用域名开头关键词进行搜索
Keywords+DomainEnd（true）：使用域名结尾关键词进行搜索
Keywords+DomainStart（true）+DomainEnd（true）：使用域名开头或结尾关键词进行搜索
 * @method boolean getDomainStart() 获取是否以域名开头关键词进行搜索
true：是
false：否
 * @method void setDomainStart(boolean $DomainStart) 设置是否以域名开头关键词进行搜索
true：是
false：否
 * @method boolean getDomainEnd() 获取是否以域名结尾关键词进行搜索
true：是
false：否
 * @method void setDomainEnd(boolean $DomainEnd) 设置是否以域名结尾关键词进行搜索
true：是
false：否
 * @method integer getSort() 获取不同排序规则：
1： 价格升序
2： 价格降序
3： 域名升序
4： 结束时间升序
5： 店铺推荐升序
6： 结束时间降序
15:  创建时间升序
其他：结束时间升序
 * @method void setSort(integer $Sort) 设置不同排序规则：
1： 价格升序
2： 价格降序
3： 域名升序
4： 结束时间升序
5： 店铺推荐升序
6： 结束时间降序
15:  创建时间升序
其他：结束时间升序
 * @method float getPriceStart() 获取起始价格
 * @method void setPriceStart(float $PriceStart) 设置起始价格
 * @method float getPriceEnd() 获取结束价格
 * @method void setPriceEnd(float $PriceEnd) 设置结束价格
 * @method integer getLengthStart() 获取起始域名长度
 * @method void setLengthStart(integer $LengthStart) 设置起始域名长度
 * @method integer getLengthEnd() 获取结束域名长度
 * @method void setLengthEnd(integer $LengthEnd) 设置结束域名长度
 * @method integer getPageNumber() 获取页码（默认为1）
 * @method void setPageNumber(integer $PageNumber) 设置页码（默认为1）
 * @method integer getPageSize() 获取每页显示数（默认为20）
 * @method void setPageSize(integer $PageSize) 设置每页显示数（默认为20）
 * @method array getSuffix() 获取后缀
1="com"
2="net"
4="biz"
6="info"
7="co"
9="cn"
10="com.cn"
11="wang"
12="vip"
13="cc"
14="net.cn"
15="org.cn"
16="top"
17="asia"
18="tv"
19="club"
20="shop"
21 ="中国"
23="online"
24="xyz"
25="网店"
26="网址"
27="在线"
28="ltd"
29="fans"
30="ren"
31="icu"
 * @method void setSuffix(array $Suffix) 设置后缀
1="com"
2="net"
4="biz"
6="info"
7="co"
9="cn"
10="com.cn"
11="wang"
12="vip"
13="cc"
14="net.cn"
15="org.cn"
16="top"
17="asia"
18="tv"
19="club"
20="shop"
21 ="中国"
23="online"
24="xyz"
25="网店"
26="网址"
27="在线"
28="ltd"
29="fans"
30="ren"
31="icu"
 * @method integer getClassOne() 获取一级分类
1:"纯数字"
2:"单数字"
3:"双数字"
4:"三数字"
5:"四数字"
6:"五数字"
7:"六数字"
9:"单字母"
10:"双字母"
11:"三字母"
12:"四字母"
13:"五字母"
14:"单拼"
15:"双拼"
16:"三拼"
17:"杂米"
18:"两杂"
19:"三杂"
20:"四杂"

 * @method void setClassOne(integer $ClassOne) 设置一级分类
1:"纯数字"
2:"单数字"
3:"双数字"
4:"三数字"
5:"四数字"
6:"五数字"
7:"六数字"
9:"单字母"
10:"双字母"
11:"三字母"
12:"四字母"
13:"五字母"
14:"单拼"
15:"双拼"
16:"三拼"
17:"杂米"
18:"两杂"
19:"三杂"
20:"四杂"

 * @method array getClassTwo() 获取二级分类
13:"0开或带4"
14:"非0开不带4"
15:"不带0,4"
0:"非全声母"
6:"全声母"
16:"不带0,4"
32:"全声母"
5010:"CVCV"
 * @method void setClassTwo(array $ClassTwo) 设置二级分类
13:"0开或带4"
14:"非0开不带4"
15:"不带0,4"
0:"非全声母"
6:"全声母"
16:"不带0,4"
32:"全声母"
5010:"CVCV"
 * @method array getClassThree() 获取三级分类
111:"AAA"
401:"3A及以上"
402:"AA结尾"
1122:"AABB"
1123:"AABC"
1212:"ABAB"
1221:"ABBA"
1233:"ABCC"
501:"4A及以上"
502:"3A及以上"
503:"AAA开头"
504:"AAA结尾"
505:"AA开头"
506:"AA结尾"
507:"三顺子开头"
508:"三顺子结尾"
11223:"AABBC"
12233:"ABBCC"
601:"5A及以上"
602:"4A及以上"
603:"3A及以上"
604:"4A开头"
605:"4A结尾"
606:"AAA开头"
607:"AAA结尾"
608:"AA开头"
609:"AA结尾"
610:"ABAB开头"
611:"ABAB结尾"
612:"AABB开头"
613:"AABB结尾"
614:"四顺子开头"
615:"四顺子结尾"
616:"三顺子开头"
617:"三顺子结尾"
121212:"ABABAB"
112233:"AABBCC"
123123:"ABCABC"
211:"LNN"
221:"LLN"
121:"NLN"
212:"LNL"
122:"NLL"
1112:"NNNL"
2111:"LNNN"
1212:"NLNL"
2121:"LNLN"
1222:"NLLL"
2221:"LLLN"
1122:"NNLL"
2211:"LLNN"
31:"W结尾"
112:"AAB"
122:"ABB"
121:"ABA"
41:"W结尾"
1112:"AAAB"
1222:"ABBB"
1122:"AABB"
1212:"ABAB"
 * @method void setClassThree(array $ClassThree) 设置三级分类
111:"AAA"
401:"3A及以上"
402:"AA结尾"
1122:"AABB"
1123:"AABC"
1212:"ABAB"
1221:"ABBA"
1233:"ABCC"
501:"4A及以上"
502:"3A及以上"
503:"AAA开头"
504:"AAA结尾"
505:"AA开头"
506:"AA结尾"
507:"三顺子开头"
508:"三顺子结尾"
11223:"AABBC"
12233:"ABBCC"
601:"5A及以上"
602:"4A及以上"
603:"3A及以上"
604:"4A开头"
605:"4A结尾"
606:"AAA开头"
607:"AAA结尾"
608:"AA开头"
609:"AA结尾"
610:"ABAB开头"
611:"ABAB结尾"
612:"AABB开头"
613:"AABB结尾"
614:"四顺子开头"
615:"四顺子结尾"
616:"三顺子开头"
617:"三顺子结尾"
121212:"ABABAB"
112233:"AABBCC"
123123:"ABCABC"
211:"LNN"
221:"LLN"
121:"NLN"
212:"LNL"
122:"NLL"
1112:"NNNL"
2111:"LNNN"
1212:"NLNL"
2121:"LNLN"
1222:"NLLL"
2221:"LLLN"
1122:"NNLL"
2211:"LLNN"
31:"W结尾"
112:"AAB"
122:"ABB"
121:"ABA"
41:"W结尾"
1112:"AAAB"
1222:"ABBB"
1122:"AABB"
1212:"ABAB"
 * @method array getClassFour() 获取四级分类
1:"仅含2种数字"
2:"仅含3种数字"
4:"仅含1种字母"
8:"仅含1种数字"

 * @method void setClassFour(array $ClassFour) 设置四级分类
1:"仅含2种数字"
2:"仅含3种数字"
4:"仅含1种字母"
8:"仅含1种数字"

 * @method boolean getFilterStart() 获取是否以域名开头排除关键词进行搜索
 * @method void setFilterStart(boolean $FilterStart) 设置是否以域名开头排除关键词进行搜索
 * @method boolean getFilterEnd() 获取是否以域名结尾排除关键词进行搜索
 * @method void setFilterEnd(boolean $FilterEnd) 设置是否以域名结尾排除关键词进行搜索
 * @method string getFilterWords() 获取域名排除关键词
单独使用FilterWords：使用排除关键词进行搜索
FilterWords+FilterStart（true）：使用域名开头排除关键词进行搜索
FilterWords+FilterEnd（true）：使用域名结尾排除关键词进行搜索
FilterWords+FilterStart（true）+FilterEnd（true）：使用域名开头或结尾排除关键词进行搜索
 * @method void setFilterWords(string $FilterWords) 设置域名排除关键词
单独使用FilterWords：使用排除关键词进行搜索
FilterWords+FilterStart（true）：使用域名开头排除关键词进行搜索
FilterWords+FilterEnd（true）：使用域名结尾排除关键词进行搜索
FilterWords+FilterStart（true）+FilterEnd（true）：使用域名开头或结尾排除关键词进行搜索
 * @method integer getTransType() 获取交易类型（目前只支持10）
10: 预释放域名
 * @method void setTransType(integer $TransType) 设置交易类型（目前只支持10）
10: 预释放域名
 * @method boolean getIsTop() 获取是否搜索白金域名（默认值为false）
 * @method void setIsTop(boolean $IsTop) 设置是否搜索白金域名（默认值为false）
 * @method string getEndTimeSort() 获取结束时间排序 desc:倒序 asc:正序
 * @method void setEndTimeSort(string $EndTimeSort) 设置结束时间排序 desc:倒序 asc:正序
 * @method string getEndTime() 获取结束时间（YYYY-MM-DD）
 * @method void setEndTime(string $EndTime) 设置结束时间（YYYY-MM-DD）
 */
class DescribePreReleaseListRequest extends AbstractModel
{
    /**
     * @var string 单独使用Keywords：使用域名关键词进行搜索
Keywords+DomainStart（true）：使用域名开头关键词进行搜索
Keywords+DomainEnd（true）：使用域名结尾关键词进行搜索
Keywords+DomainStart（true）+DomainEnd（true）：使用域名开头或结尾关键词进行搜索
     */
    public $Keywords;

    /**
     * @var boolean 是否以域名开头关键词进行搜索
true：是
false：否
     */
    public $DomainStart;

    /**
     * @var boolean 是否以域名结尾关键词进行搜索
true：是
false：否
     */
    public $DomainEnd;

    /**
     * @var integer 不同排序规则：
1： 价格升序
2： 价格降序
3： 域名升序
4： 结束时间升序
5： 店铺推荐升序
6： 结束时间降序
15:  创建时间升序
其他：结束时间升序
     */
    public $Sort;

    /**
     * @var float 起始价格
     */
    public $PriceStart;

    /**
     * @var float 结束价格
     */
    public $PriceEnd;

    /**
     * @var integer 起始域名长度
     */
    public $LengthStart;

    /**
     * @var integer 结束域名长度
     */
    public $LengthEnd;

    /**
     * @var integer 页码（默认为1）
     */
    public $PageNumber;

    /**
     * @var integer 每页显示数（默认为20）
     */
    public $PageSize;

    /**
     * @var array 后缀
1="com"
2="net"
4="biz"
6="info"
7="co"
9="cn"
10="com.cn"
11="wang"
12="vip"
13="cc"
14="net.cn"
15="org.cn"
16="top"
17="asia"
18="tv"
19="club"
20="shop"
21 ="中国"
23="online"
24="xyz"
25="网店"
26="网址"
27="在线"
28="ltd"
29="fans"
30="ren"
31="icu"
     */
    public $Suffix;

    /**
     * @var integer 一级分类
1:"纯数字"
2:"单数字"
3:"双数字"
4:"三数字"
5:"四数字"
6:"五数字"
7:"六数字"
9:"单字母"
10:"双字母"
11:"三字母"
12:"四字母"
13:"五字母"
14:"单拼"
15:"双拼"
16:"三拼"
17:"杂米"
18:"两杂"
19:"三杂"
20:"四杂"

     */
    public $ClassOne;

    /**
     * @var array 二级分类
13:"0开或带4"
14:"非0开不带4"
15:"不带0,4"
0:"非全声母"
6:"全声母"
16:"不带0,4"
32:"全声母"
5010:"CVCV"
     */
    public $ClassTwo;

    /**
     * @var array 三级分类
111:"AAA"
401:"3A及以上"
402:"AA结尾"
1122:"AABB"
1123:"AABC"
1212:"ABAB"
1221:"ABBA"
1233:"ABCC"
501:"4A及以上"
502:"3A及以上"
503:"AAA开头"
504:"AAA结尾"
505:"AA开头"
506:"AA结尾"
507:"三顺子开头"
508:"三顺子结尾"
11223:"AABBC"
12233:"ABBCC"
601:"5A及以上"
602:"4A及以上"
603:"3A及以上"
604:"4A开头"
605:"4A结尾"
606:"AAA开头"
607:"AAA结尾"
608:"AA开头"
609:"AA结尾"
610:"ABAB开头"
611:"ABAB结尾"
612:"AABB开头"
613:"AABB结尾"
614:"四顺子开头"
615:"四顺子结尾"
616:"三顺子开头"
617:"三顺子结尾"
121212:"ABABAB"
112233:"AABBCC"
123123:"ABCABC"
211:"LNN"
221:"LLN"
121:"NLN"
212:"LNL"
122:"NLL"
1112:"NNNL"
2111:"LNNN"
1212:"NLNL"
2121:"LNLN"
1222:"NLLL"
2221:"LLLN"
1122:"NNLL"
2211:"LLNN"
31:"W结尾"
112:"AAB"
122:"ABB"
121:"ABA"
41:"W结尾"
1112:"AAAB"
1222:"ABBB"
1122:"AABB"
1212:"ABAB"
     */
    public $ClassThree;

    /**
     * @var array 四级分类
1:"仅含2种数字"
2:"仅含3种数字"
4:"仅含1种字母"
8:"仅含1种数字"

     */
    public $ClassFour;

    /**
     * @var boolean 是否以域名开头排除关键词进行搜索
     */
    public $FilterStart;

    /**
     * @var boolean 是否以域名结尾排除关键词进行搜索
     */
    public $FilterEnd;

    /**
     * @var string 域名排除关键词
单独使用FilterWords：使用排除关键词进行搜索
FilterWords+FilterStart（true）：使用域名开头排除关键词进行搜索
FilterWords+FilterEnd（true）：使用域名结尾排除关键词进行搜索
FilterWords+FilterStart（true）+FilterEnd（true）：使用域名开头或结尾排除关键词进行搜索
     */
    public $FilterWords;

    /**
     * @var integer 交易类型（目前只支持10）
10: 预释放域名
     */
    public $TransType;

    /**
     * @var boolean 是否搜索白金域名（默认值为false）
     */
    public $IsTop;

    /**
     * @var string 结束时间排序 desc:倒序 asc:正序
     */
    public $EndTimeSort;

    /**
     * @var string 结束时间（YYYY-MM-DD）
     */
    public $EndTime;

    /**
     * @param string $Keywords 单独使用Keywords：使用域名关键词进行搜索
Keywords+DomainStart（true）：使用域名开头关键词进行搜索
Keywords+DomainEnd（true）：使用域名结尾关键词进行搜索
Keywords+DomainStart（true）+DomainEnd（true）：使用域名开头或结尾关键词进行搜索
     * @param boolean $DomainStart 是否以域名开头关键词进行搜索
true：是
false：否
     * @param boolean $DomainEnd 是否以域名结尾关键词进行搜索
true：是
false：否
     * @param integer $Sort 不同排序规则：
1： 价格升序
2： 价格降序
3： 域名升序
4： 结束时间升序
5： 店铺推荐升序
6： 结束时间降序
15:  创建时间升序
其他：结束时间升序
     * @param float $PriceStart 起始价格
     * @param float $PriceEnd 结束价格
     * @param integer $LengthStart 起始域名长度
     * @param integer $LengthEnd 结束域名长度
     * @param integer $PageNumber 页码（默认为1）
     * @param integer $PageSize 每页显示数（默认为20）
     * @param array $Suffix 后缀
1="com"
2="net"
4="biz"
6="info"
7="co"
9="cn"
10="com.cn"
11="wang"
12="vip"
13="cc"
14="net.cn"
15="org.cn"
16="top"
17="asia"
18="tv"
19="club"
20="shop"
21 ="中国"
23="online"
24="xyz"
25="网店"
26="网址"
27="在线"
28="ltd"
29="fans"
30="ren"
31="icu"
     * @param integer $ClassOne 一级分类
1:"纯数字"
2:"单数字"
3:"双数字"
4:"三数字"
5:"四数字"
6:"五数字"
7:"六数字"
9:"单字母"
10:"双字母"
11:"三字母"
12:"四字母"
13:"五字母"
14:"单拼"
15:"双拼"
16:"三拼"
17:"杂米"
18:"两杂"
19:"三杂"
20:"四杂"

     * @param array $ClassTwo 二级分类
13:"0开或带4"
14:"非0开不带4"
15:"不带0,4"
0:"非全声母"
6:"全声母"
16:"不带0,4"
32:"全声母"
5010:"CVCV"
     * @param array $ClassThree 三级分类
111:"AAA"
401:"3A及以上"
402:"AA结尾"
1122:"AABB"
1123:"AABC"
1212:"ABAB"
1221:"ABBA"
1233:"ABCC"
501:"4A及以上"
502:"3A及以上"
503:"AAA开头"
504:"AAA结尾"
505:"AA开头"
506:"AA结尾"
507:"三顺子开头"
508:"三顺子结尾"
11223:"AABBC"
12233:"ABBCC"
601:"5A及以上"
602:"4A及以上"
603:"3A及以上"
604:"4A开头"
605:"4A结尾"
606:"AAA开头"
607:"AAA结尾"
608:"AA开头"
609:"AA结尾"
610:"ABAB开头"
611:"ABAB结尾"
612:"AABB开头"
613:"AABB结尾"
614:"四顺子开头"
615:"四顺子结尾"
616:"三顺子开头"
617:"三顺子结尾"
121212:"ABABAB"
112233:"AABBCC"
123123:"ABCABC"
211:"LNN"
221:"LLN"
121:"NLN"
212:"LNL"
122:"NLL"
1112:"NNNL"
2111:"LNNN"
1212:"NLNL"
2121:"LNLN"
1222:"NLLL"
2221:"LLLN"
1122:"NNLL"
2211:"LLNN"
31:"W结尾"
112:"AAB"
122:"ABB"
121:"ABA"
41:"W结尾"
1112:"AAAB"
1222:"ABBB"
1122:"AABB"
1212:"ABAB"
     * @param array $ClassFour 四级分类
1:"仅含2种数字"
2:"仅含3种数字"
4:"仅含1种字母"
8:"仅含1种数字"

     * @param boolean $FilterStart 是否以域名开头排除关键词进行搜索
     * @param boolean $FilterEnd 是否以域名结尾排除关键词进行搜索
     * @param string $FilterWords 域名排除关键词
单独使用FilterWords：使用排除关键词进行搜索
FilterWords+FilterStart（true）：使用域名开头排除关键词进行搜索
FilterWords+FilterEnd（true）：使用域名结尾排除关键词进行搜索
FilterWords+FilterStart（true）+FilterEnd（true）：使用域名开头或结尾排除关键词进行搜索
     * @param integer $TransType 交易类型（目前只支持10）
10: 预释放域名
     * @param boolean $IsTop 是否搜索白金域名（默认值为false）
     * @param string $EndTimeSort 结束时间排序 desc:倒序 asc:正序
     * @param string $EndTime 结束时间（YYYY-MM-DD）
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("DomainStart",$param) and $param["DomainStart"] !== null) {
            $this->DomainStart = $param["DomainStart"];
        }

        if (array_key_exists("DomainEnd",$param) and $param["DomainEnd"] !== null) {
            $this->DomainEnd = $param["DomainEnd"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("PriceStart",$param) and $param["PriceStart"] !== null) {
            $this->PriceStart = $param["PriceStart"];
        }

        if (array_key_exists("PriceEnd",$param) and $param["PriceEnd"] !== null) {
            $this->PriceEnd = $param["PriceEnd"];
        }

        if (array_key_exists("LengthStart",$param) and $param["LengthStart"] !== null) {
            $this->LengthStart = $param["LengthStart"];
        }

        if (array_key_exists("LengthEnd",$param) and $param["LengthEnd"] !== null) {
            $this->LengthEnd = $param["LengthEnd"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Suffix",$param) and $param["Suffix"] !== null) {
            $this->Suffix = $param["Suffix"];
        }

        if (array_key_exists("ClassOne",$param) and $param["ClassOne"] !== null) {
            $this->ClassOne = $param["ClassOne"];
        }

        if (array_key_exists("ClassTwo",$param) and $param["ClassTwo"] !== null) {
            $this->ClassTwo = $param["ClassTwo"];
        }

        if (array_key_exists("ClassThree",$param) and $param["ClassThree"] !== null) {
            $this->ClassThree = $param["ClassThree"];
        }

        if (array_key_exists("ClassFour",$param) and $param["ClassFour"] !== null) {
            $this->ClassFour = $param["ClassFour"];
        }

        if (array_key_exists("FilterStart",$param) and $param["FilterStart"] !== null) {
            $this->FilterStart = $param["FilterStart"];
        }

        if (array_key_exists("FilterEnd",$param) and $param["FilterEnd"] !== null) {
            $this->FilterEnd = $param["FilterEnd"];
        }

        if (array_key_exists("FilterWords",$param) and $param["FilterWords"] !== null) {
            $this->FilterWords = $param["FilterWords"];
        }

        if (array_key_exists("TransType",$param) and $param["TransType"] !== null) {
            $this->TransType = $param["TransType"];
        }

        if (array_key_exists("IsTop",$param) and $param["IsTop"] !== null) {
            $this->IsTop = $param["IsTop"];
        }

        if (array_key_exists("EndTimeSort",$param) and $param["EndTimeSort"] !== null) {
            $this->EndTimeSort = $param["EndTimeSort"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
