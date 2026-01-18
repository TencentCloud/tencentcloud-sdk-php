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
 * @method string getQuery() 获取搜索词
 * @method void setQuery(string $Query) 设置搜索词
 * @method integer getMode() 获取返回结果类型，0-自然检索结果(默认)，1-多模态VR结果，2-混合结果（多模态VR结果+自然检索结果）
 * @method void setMode(integer $Mode) 设置返回结果类型，0-自然检索结果(默认)，1-多模态VR结果，2-混合结果（多模态VR结果+自然检索结果）
 * @method string getSite() 获取指定域名站内搜索（用于过滤自然检索结果）
注意： mode=1模式下，参数无效；mode=0模式下，对所有结果生效；mode=2模式下，对输出的自然结果生效
 * @method void setSite(string $Site) 设置指定域名站内搜索（用于过滤自然检索结果）
注意： mode=1模式下，参数无效；mode=0模式下，对所有结果生效；mode=2模式下，对输出的自然结果生效
 * @method integer getFromTime() 获取起始时间（用于过滤自然检索结果），精确到秒时间戳格式
注意： mode=1模式下，参数无效；mode=0模式下，对所有结果生效；mode=2模式下，对输出的自然结果生效
 * @method void setFromTime(integer $FromTime) 设置起始时间（用于过滤自然检索结果），精确到秒时间戳格式
注意： mode=1模式下，参数无效；mode=0模式下，对所有结果生效；mode=2模式下，对输出的自然结果生效
 * @method integer getToTime() 获取结束时间（用于过滤自然检索结果），精确到秒时间戳格式
注意：mode=1模式下，参数无效；mode=0模式下，对所有结果生效；mode=2模式下，对输出的自然结果生效
 * @method void setToTime(integer $ToTime) 设置结束时间（用于过滤自然检索结果），精确到秒时间戳格式
注意：mode=1模式下，参数无效；mode=0模式下，对所有结果生效；mode=2模式下，对输出的自然结果生效
 * @method integer getCnt() 获取cnt=10/20/30/40/50，最多可支持返回50条搜索结果，**仅限尊享版使用**
 * @method void setCnt(integer $Cnt) 设置cnt=10/20/30/40/50，最多可支持返回50条搜索结果，**仅限尊享版使用**
 * @method string getIndustry() 获取Industry=gov/news/acad/finance，对应党政机关、权威媒体、学术（英文）、金融，**仅限尊享版使用**
 * @method void setIndustry(string $Industry) 设置Industry=gov/news/acad/finance，对应党政机关、权威媒体、学术（英文）、金融，**仅限尊享版使用**
 */
class SearchProRequest extends AbstractModel
{
    /**
     * @var string 搜索词
     */
    public $Query;

    /**
     * @var integer 返回结果类型，0-自然检索结果(默认)，1-多模态VR结果，2-混合结果（多模态VR结果+自然检索结果）
     */
    public $Mode;

    /**
     * @var string 指定域名站内搜索（用于过滤自然检索结果）
注意： mode=1模式下，参数无效；mode=0模式下，对所有结果生效；mode=2模式下，对输出的自然结果生效
     */
    public $Site;

    /**
     * @var integer 起始时间（用于过滤自然检索结果），精确到秒时间戳格式
注意： mode=1模式下，参数无效；mode=0模式下，对所有结果生效；mode=2模式下，对输出的自然结果生效
     */
    public $FromTime;

    /**
     * @var integer 结束时间（用于过滤自然检索结果），精确到秒时间戳格式
注意：mode=1模式下，参数无效；mode=0模式下，对所有结果生效；mode=2模式下，对输出的自然结果生效
     */
    public $ToTime;

    /**
     * @var integer cnt=10/20/30/40/50，最多可支持返回50条搜索结果，**仅限尊享版使用**
     */
    public $Cnt;

    /**
     * @var string Industry=gov/news/acad/finance，对应党政机关、权威媒体、学术（英文）、金融，**仅限尊享版使用**
     */
    public $Industry;

    /**
     * @param string $Query 搜索词
     * @param integer $Mode 返回结果类型，0-自然检索结果(默认)，1-多模态VR结果，2-混合结果（多模态VR结果+自然检索结果）
     * @param string $Site 指定域名站内搜索（用于过滤自然检索结果）
注意： mode=1模式下，参数无效；mode=0模式下，对所有结果生效；mode=2模式下，对输出的自然结果生效
     * @param integer $FromTime 起始时间（用于过滤自然检索结果），精确到秒时间戳格式
注意： mode=1模式下，参数无效；mode=0模式下，对所有结果生效；mode=2模式下，对输出的自然结果生效
     * @param integer $ToTime 结束时间（用于过滤自然检索结果），精确到秒时间戳格式
注意：mode=1模式下，参数无效；mode=0模式下，对所有结果生效；mode=2模式下，对输出的自然结果生效
     * @param integer $Cnt cnt=10/20/30/40/50，最多可支持返回50条搜索结果，**仅限尊享版使用**
     * @param string $Industry Industry=gov/news/acad/finance，对应党政机关、权威媒体、学术（英文）、金融，**仅限尊享版使用**
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

        if (array_key_exists("FromTime",$param) and $param["FromTime"] !== null) {
            $this->FromTime = $param["FromTime"];
        }

        if (array_key_exists("ToTime",$param) and $param["ToTime"] !== null) {
            $this->ToTime = $param["ToTime"];
        }

        if (array_key_exists("Cnt",$param) and $param["Cnt"] !== null) {
            $this->Cnt = $param["Cnt"];
        }

        if (array_key_exists("Industry",$param) and $param["Industry"] !== null) {
            $this->Industry = $param["Industry"];
        }
    }
}
