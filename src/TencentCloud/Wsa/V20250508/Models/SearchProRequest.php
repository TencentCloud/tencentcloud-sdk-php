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
namespace TencentCloud\Wsa\V20250508\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchPro请求参数结构体
 *
 * @method string getQuery() 获取<p>搜索词</p>
 * @method void setQuery(string $Query) 设置<p>搜索词</p>
 * @method integer getMode() 获取<p>返回结果类型，不传默认为0。（<strong>仅标准版、尊享版支持该参数</strong>）</p><p>枚举值：</p><ul><li>0： 公开网页信源结果（自然结果）</li><li>1： 优质权威垂直信源结果（VR 卡）</li><li>2： 混合结果（自然结果+VR卡）</li></ul>
 * @method void setMode(integer $Mode) 设置<p>返回结果类型，不传默认为0。（<strong>仅标准版、尊享版支持该参数</strong>）</p><p>枚举值：</p><ul><li>0： 公开网页信源结果（自然结果）</li><li>1： 优质权威垂直信源结果（VR 卡）</li><li>2： 混合结果（自然结果+VR卡）</li></ul>
 * @method string getSite() 获取<p>指定网址搜索/过滤。（<strong>仅标准版、尊享版、旗舰版支持该参数</strong>）</p><ul><li>指定网址搜索：需要查询某个特定网址的内容时，传入&quot;Site=qq.com&quot;，实现只搜索qq.com的结果；每次搜索仅支持指定一个域名。</li><li>指定网址过滤：需要排除某个特定网址的内容时，传入&quot;Site=exclude:qq.com|sohu.com&quot;，实现过滤qq.com和sohu.com的结果；每次搜索最多支持过滤五个域名。</li></ul><p>注意： 该参数与mode参数共同使用时，仅对公开网页信源结果（自然结果）生效，对优质权威垂直信源结果（VR卡）不生效。</p>
 * @method void setSite(string $Site) 设置<p>指定网址搜索/过滤。（<strong>仅标准版、尊享版、旗舰版支持该参数</strong>）</p><ul><li>指定网址搜索：需要查询某个特定网址的内容时，传入&quot;Site=qq.com&quot;，实现只搜索qq.com的结果；每次搜索仅支持指定一个域名。</li><li>指定网址过滤：需要排除某个特定网址的内容时，传入&quot;Site=exclude:qq.com|sohu.com&quot;，实现过滤qq.com和sohu.com的结果；每次搜索最多支持过滤五个域名。</li></ul><p>注意： 该参数与mode参数共同使用时，仅对公开网页信源结果（自然结果）生效，对优质权威垂直信源结果（VR卡）不生效。</p>
 * @method integer getCnt() 获取<p>控制返回结果条数，可取值：cnt=10/20/30/40/50。（<strong>仅尊享版、旗舰版支持该参数</strong>）</p><p>枚举值：</p><ul><li>10： 返回10条结果</li><li>20： 返回20条结果</li><li>30： 返回30条结果</li><li>40： 返回40条结果</li><li>50： 返回50条结果</li></ul>
 * @method void setCnt(integer $Cnt) 设置<p>控制返回结果条数，可取值：cnt=10/20/30/40/50。（<strong>仅尊享版、旗舰版支持该参数</strong>）</p><p>枚举值：</p><ul><li>10： 返回10条结果</li><li>20： 返回20条结果</li><li>30： 返回30条结果</li><li>40： 返回40条结果</li><li>50： 返回50条结果</li></ul>
 * @method string getIndustry() 获取<p>垂直领域搜索。（<strong>仅尊享版、旗舰版支持该参数</strong>）</p><p>枚举值：</p><ul><li>gov： 政府</li><li>news： 新闻</li><li>acad： 学术</li><li>finance： 财经</li></ul>
 * @method void setIndustry(string $Industry) 设置<p>垂直领域搜索。（<strong>仅尊享版、旗舰版支持该参数</strong>）</p><p>枚举值：</p><ul><li>gov： 政府</li><li>news： 新闻</li><li>acad： 学术</li><li>finance： 财经</li></ul>
 * @method string getFreshness() 获取<p>搜索时效范围，以下五种入参形态不支持混合使用。（<strong>仅标准版、尊享版、旗舰版支持该参数</strong>）</p><ul><li><p>d[N]：最近N天，N取值1-30整数，N值为空时默认N=1。</p></li><li><p>m[N]：最近N月，N取值1-12整数，N值为空时默认N=1。</p></li><li><p>y[N]：最近N年，N取值1-5整数，N值为空时默认N=1。</p></li><li><p>yyyy-mm-dd：指定某一日。（不得早于1970-01-01，不得晚于请求当天日期）</p></li><li><p>yyyy-mm-dd,yyyy-mm-dd：从日期A至日期B，包含AB。（日期B不得晚于日期A；二者均不得早于1970-01-01，不得晚于请求当天日期）</p></li></ul><p>示例：2026.6.15分别传参d2/m2/y2进行搜索，则搜索结果的时间范围分别为“2026.6.15、2026.6.14”/“2026.6、2026.5”/“2026、2025”，以此类推。</p><p>枚举值：</p><ul><li>d7： 最近七天</li><li>m3： 最近三月</li><li>y2： 最近两年</li><li>2026-08-20： 2026-08-20当天</li><li>2026-08-20,2026-08-30： 2026-08-20至2026-08-30</li></ul>
 * @method void setFreshness(string $Freshness) 设置<p>搜索时效范围，以下五种入参形态不支持混合使用。（<strong>仅标准版、尊享版、旗舰版支持该参数</strong>）</p><ul><li><p>d[N]：最近N天，N取值1-30整数，N值为空时默认N=1。</p></li><li><p>m[N]：最近N月，N取值1-12整数，N值为空时默认N=1。</p></li><li><p>y[N]：最近N年，N取值1-5整数，N值为空时默认N=1。</p></li><li><p>yyyy-mm-dd：指定某一日。（不得早于1970-01-01，不得晚于请求当天日期）</p></li><li><p>yyyy-mm-dd,yyyy-mm-dd：从日期A至日期B，包含AB。（日期B不得晚于日期A；二者均不得早于1970-01-01，不得晚于请求当天日期）</p></li></ul><p>示例：2026.6.15分别传参d2/m2/y2进行搜索，则搜索结果的时间范围分别为“2026.6.15、2026.6.14”/“2026.6、2026.5”/“2026、2025”，以此类推。</p><p>枚举值：</p><ul><li>d7： 最近七天</li><li>m3： 最近三月</li><li>y2： 最近两年</li><li>2026-08-20： 2026-08-20当天</li><li>2026-08-20,2026-08-30： 2026-08-20至2026-08-30</li></ul>
 * @method boolean getDeeplinks() 获取<p>返回附件子链信息（<strong>仅旗舰版支持该参数</strong>）</p><p>附件子链信息包括&quot;子链标题&quot;和&quot;子链URL&quot;，单个doc最多返回10条子链信息。</p><ul><li>true：返回</li><li>false：不返回</li><li>未传参时默认不返回</li></ul>
 * @method void setDeeplinks(boolean $Deeplinks) 设置<p>返回附件子链信息（<strong>仅旗舰版支持该参数</strong>）</p><p>附件子链信息包括&quot;子链标题&quot;和&quot;子链URL&quot;，单个doc最多返回10条子链信息。</p><ul><li>true：返回</li><li>false：不返回</li><li>未传参时默认不返回</li></ul>
 */
class SearchProRequest extends AbstractModel
{
    /**
     * @var string <p>搜索词</p>
     */
    public $Query;

    /**
     * @var integer <p>返回结果类型，不传默认为0。（<strong>仅标准版、尊享版支持该参数</strong>）</p><p>枚举值：</p><ul><li>0： 公开网页信源结果（自然结果）</li><li>1： 优质权威垂直信源结果（VR 卡）</li><li>2： 混合结果（自然结果+VR卡）</li></ul>
     */
    public $Mode;

    /**
     * @var string <p>指定网址搜索/过滤。（<strong>仅标准版、尊享版、旗舰版支持该参数</strong>）</p><ul><li>指定网址搜索：需要查询某个特定网址的内容时，传入&quot;Site=qq.com&quot;，实现只搜索qq.com的结果；每次搜索仅支持指定一个域名。</li><li>指定网址过滤：需要排除某个特定网址的内容时，传入&quot;Site=exclude:qq.com|sohu.com&quot;，实现过滤qq.com和sohu.com的结果；每次搜索最多支持过滤五个域名。</li></ul><p>注意： 该参数与mode参数共同使用时，仅对公开网页信源结果（自然结果）生效，对优质权威垂直信源结果（VR卡）不生效。</p>
     */
    public $Site;

    /**
     * @var integer <p>控制返回结果条数，可取值：cnt=10/20/30/40/50。（<strong>仅尊享版、旗舰版支持该参数</strong>）</p><p>枚举值：</p><ul><li>10： 返回10条结果</li><li>20： 返回20条结果</li><li>30： 返回30条结果</li><li>40： 返回40条结果</li><li>50： 返回50条结果</li></ul>
     */
    public $Cnt;

    /**
     * @var string <p>垂直领域搜索。（<strong>仅尊享版、旗舰版支持该参数</strong>）</p><p>枚举值：</p><ul><li>gov： 政府</li><li>news： 新闻</li><li>acad： 学术</li><li>finance： 财经</li></ul>
     */
    public $Industry;

    /**
     * @var string <p>搜索时效范围，以下五种入参形态不支持混合使用。（<strong>仅标准版、尊享版、旗舰版支持该参数</strong>）</p><ul><li><p>d[N]：最近N天，N取值1-30整数，N值为空时默认N=1。</p></li><li><p>m[N]：最近N月，N取值1-12整数，N值为空时默认N=1。</p></li><li><p>y[N]：最近N年，N取值1-5整数，N值为空时默认N=1。</p></li><li><p>yyyy-mm-dd：指定某一日。（不得早于1970-01-01，不得晚于请求当天日期）</p></li><li><p>yyyy-mm-dd,yyyy-mm-dd：从日期A至日期B，包含AB。（日期B不得晚于日期A；二者均不得早于1970-01-01，不得晚于请求当天日期）</p></li></ul><p>示例：2026.6.15分别传参d2/m2/y2进行搜索，则搜索结果的时间范围分别为“2026.6.15、2026.6.14”/“2026.6、2026.5”/“2026、2025”，以此类推。</p><p>枚举值：</p><ul><li>d7： 最近七天</li><li>m3： 最近三月</li><li>y2： 最近两年</li><li>2026-08-20： 2026-08-20当天</li><li>2026-08-20,2026-08-30： 2026-08-20至2026-08-30</li></ul>
     */
    public $Freshness;

    /**
     * @var boolean <p>返回附件子链信息（<strong>仅旗舰版支持该参数</strong>）</p><p>附件子链信息包括&quot;子链标题&quot;和&quot;子链URL&quot;，单个doc最多返回10条子链信息。</p><ul><li>true：返回</li><li>false：不返回</li><li>未传参时默认不返回</li></ul>
     */
    public $Deeplinks;

    /**
     * @param string $Query <p>搜索词</p>
     * @param integer $Mode <p>返回结果类型，不传默认为0。（<strong>仅标准版、尊享版支持该参数</strong>）</p><p>枚举值：</p><ul><li>0： 公开网页信源结果（自然结果）</li><li>1： 优质权威垂直信源结果（VR 卡）</li><li>2： 混合结果（自然结果+VR卡）</li></ul>
     * @param string $Site <p>指定网址搜索/过滤。（<strong>仅标准版、尊享版、旗舰版支持该参数</strong>）</p><ul><li>指定网址搜索：需要查询某个特定网址的内容时，传入&quot;Site=qq.com&quot;，实现只搜索qq.com的结果；每次搜索仅支持指定一个域名。</li><li>指定网址过滤：需要排除某个特定网址的内容时，传入&quot;Site=exclude:qq.com|sohu.com&quot;，实现过滤qq.com和sohu.com的结果；每次搜索最多支持过滤五个域名。</li></ul><p>注意： 该参数与mode参数共同使用时，仅对公开网页信源结果（自然结果）生效，对优质权威垂直信源结果（VR卡）不生效。</p>
     * @param integer $Cnt <p>控制返回结果条数，可取值：cnt=10/20/30/40/50。（<strong>仅尊享版、旗舰版支持该参数</strong>）</p><p>枚举值：</p><ul><li>10： 返回10条结果</li><li>20： 返回20条结果</li><li>30： 返回30条结果</li><li>40： 返回40条结果</li><li>50： 返回50条结果</li></ul>
     * @param string $Industry <p>垂直领域搜索。（<strong>仅尊享版、旗舰版支持该参数</strong>）</p><p>枚举值：</p><ul><li>gov： 政府</li><li>news： 新闻</li><li>acad： 学术</li><li>finance： 财经</li></ul>
     * @param string $Freshness <p>搜索时效范围，以下五种入参形态不支持混合使用。（<strong>仅标准版、尊享版、旗舰版支持该参数</strong>）</p><ul><li><p>d[N]：最近N天，N取值1-30整数，N值为空时默认N=1。</p></li><li><p>m[N]：最近N月，N取值1-12整数，N值为空时默认N=1。</p></li><li><p>y[N]：最近N年，N取值1-5整数，N值为空时默认N=1。</p></li><li><p>yyyy-mm-dd：指定某一日。（不得早于1970-01-01，不得晚于请求当天日期）</p></li><li><p>yyyy-mm-dd,yyyy-mm-dd：从日期A至日期B，包含AB。（日期B不得晚于日期A；二者均不得早于1970-01-01，不得晚于请求当天日期）</p></li></ul><p>示例：2026.6.15分别传参d2/m2/y2进行搜索，则搜索结果的时间范围分别为“2026.6.15、2026.6.14”/“2026.6、2026.5”/“2026、2025”，以此类推。</p><p>枚举值：</p><ul><li>d7： 最近七天</li><li>m3： 最近三月</li><li>y2： 最近两年</li><li>2026-08-20： 2026-08-20当天</li><li>2026-08-20,2026-08-30： 2026-08-20至2026-08-30</li></ul>
     * @param boolean $Deeplinks <p>返回附件子链信息（<strong>仅旗舰版支持该参数</strong>）</p><p>附件子链信息包括&quot;子链标题&quot;和&quot;子链URL&quot;，单个doc最多返回10条子链信息。</p><ul><li>true：返回</li><li>false：不返回</li><li>未传参时默认不返回</li></ul>
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Site",$param) and $param["Site"] !== null) {
            $this->Site = $param["Site"];
        }

        if (array_key_exists("Cnt",$param) and $param["Cnt"] !== null) {
            $this->Cnt = $param["Cnt"];
        }

        if (array_key_exists("Industry",$param) and $param["Industry"] !== null) {
            $this->Industry = $param["Industry"];
        }

        if (array_key_exists("Freshness",$param) and $param["Freshness"] !== null) {
            $this->Freshness = $param["Freshness"];
        }

        if (array_key_exists("Deeplinks",$param) and $param["Deeplinks"] !== null) {
            $this->Deeplinks = $param["Deeplinks"];
        }
    }
}
