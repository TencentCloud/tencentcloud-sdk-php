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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InvokeAISearchService请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getQuery() 获取自然语言查询
 * @method void setQuery(string $Query) 设置自然语言查询
 * @method string getSummaryLang() 获取搜索结果总结的语言类型，支持的类型有：en-US、zh-CN、id-ID、th-TH
 * @method void setSummaryLang(string $SummaryLang) 设置搜索结果总结的语言类型，支持的类型有：en-US、zh-CN、id-ID、th-TH
 * @method integer getChannelId() 获取通道ID
 * @method void setChannelId(integer $ChannelId) 设置通道ID
 * @method boolean getEnableSummary() 获取是否需要返回总结，默认为True；  开启后会加大接口响应时长
 * @method void setEnableSummary(boolean $EnableSummary) 设置是否需要返回总结，默认为True；  开启后会加大接口响应时长
 * @method integer getStartTimeMs() 获取开始时间。

注：
1. 单位为毫秒（ms）
2. 如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后7天内的数据， 反之EndTimeMs也一样）
3. 只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为"过去三天关于猫咪的视频"， 则会将"过去三天忽略"）
 * @method void setStartTimeMs(integer $StartTimeMs) 设置开始时间。

注：
1. 单位为毫秒（ms）
2. 如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后7天内的数据， 反之EndTimeMs也一样）
3. 只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为"过去三天关于猫咪的视频"， 则会将"过去三天忽略"）
 * @method integer getEndTimeMs() 获取结束时间。

注：
1. 单位为毫秒（ms）
2. 如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后7天内的数据， 反之EndTimeMs也一样）
3. 只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为"过去三天关于猫咪的视频"， 则会将"过去三天忽略"）
 * @method void setEndTimeMs(integer $EndTimeMs) 设置结束时间。

注：
1. 单位为毫秒（ms）
2. 如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后7天内的数据， 反之EndTimeMs也一样）
3. 只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为"过去三天关于猫咪的视频"， 则会将"过去三天忽略"）
 * @method string getTimeZone() 获取时区。默认值：Asia/Shanghai

注：
符合iana标准 https://www.iana.org/time-zones，例如Asia/Shanghai、Asia/Bangkok

 * @method void setTimeZone(string $TimeZone) 设置时区。默认值：Asia/Shanghai

注：
符合iana标准 https://www.iana.org/time-zones，例如Asia/Shanghai、Asia/Bangkok

 * @method integer getSearchMode() 获取取值为1表示高级搜索，取值为2表示简单搜索，默认为1
 * @method void setSearchMode(integer $SearchMode) 设置取值为1表示高级搜索，取值为2表示简单搜索，默认为1
 * @method integer getLimit() 获取最终输出的条数；仅当SearchMode为2时支持自定义设置，默认为50
 * @method void setLimit(integer $Limit) 设置最终输出的条数；仅当SearchMode为2时支持自定义设置，默认为50
 * @method float getVectorSearchRadius() 获取向量搜索的相似度搜索半径，取值范围[-1, 1]；仅当SearchMode为2时支持自定义设置，默认为0.5
 * @method void setVectorSearchRadius(float $VectorSearchRadius) 设置向量搜索的相似度搜索半径，取值范围[-1, 1]；仅当SearchMode为2时支持自定义设置，默认为0.5
 * @method integer getVectorSearchTopK() 获取指定向量搜索最相似的 Top K；仅当SearchMode为2时支持自定义设置，默认为100
 * @method void setVectorSearchTopK(integer $VectorSearchTopK) 设置指定向量搜索最相似的 Top K；仅当SearchMode为2时支持自定义设置，默认为100
 */
class InvokeAISearchServiceRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 自然语言查询
     */
    public $Query;

    /**
     * @var string 搜索结果总结的语言类型，支持的类型有：en-US、zh-CN、id-ID、th-TH
     */
    public $SummaryLang;

    /**
     * @var integer 通道ID
     */
    public $ChannelId;

    /**
     * @var boolean 是否需要返回总结，默认为True；  开启后会加大接口响应时长
     */
    public $EnableSummary;

    /**
     * @var integer 开始时间。

注：
1. 单位为毫秒（ms）
2. 如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后7天内的数据， 反之EndTimeMs也一样）
3. 只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为"过去三天关于猫咪的视频"， 则会将"过去三天忽略"）
     */
    public $StartTimeMs;

    /**
     * @var integer 结束时间。

注：
1. 单位为毫秒（ms）
2. 如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后7天内的数据， 反之EndTimeMs也一样）
3. 只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为"过去三天关于猫咪的视频"， 则会将"过去三天忽略"）
     */
    public $EndTimeMs;

    /**
     * @var string 时区。默认值：Asia/Shanghai

注：
符合iana标准 https://www.iana.org/time-zones，例如Asia/Shanghai、Asia/Bangkok

     */
    public $TimeZone;

    /**
     * @var integer 取值为1表示高级搜索，取值为2表示简单搜索，默认为1
     */
    public $SearchMode;

    /**
     * @var integer 最终输出的条数；仅当SearchMode为2时支持自定义设置，默认为50
     */
    public $Limit;

    /**
     * @var float 向量搜索的相似度搜索半径，取值范围[-1, 1]；仅当SearchMode为2时支持自定义设置，默认为0.5
     */
    public $VectorSearchRadius;

    /**
     * @var integer 指定向量搜索最相似的 Top K；仅当SearchMode为2时支持自定义设置，默认为100
     */
    public $VectorSearchTopK;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param string $Query 自然语言查询
     * @param string $SummaryLang 搜索结果总结的语言类型，支持的类型有：en-US、zh-CN、id-ID、th-TH
     * @param integer $ChannelId 通道ID
     * @param boolean $EnableSummary 是否需要返回总结，默认为True；  开启后会加大接口响应时长
     * @param integer $StartTimeMs 开始时间。

注：
1. 单位为毫秒（ms）
2. 如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后7天内的数据， 反之EndTimeMs也一样）
3. 只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为"过去三天关于猫咪的视频"， 则会将"过去三天忽略"）
     * @param integer $EndTimeMs 结束时间。

注：
1. 单位为毫秒（ms）
2. 如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后7天内的数据， 反之EndTimeMs也一样）
3. 只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为"过去三天关于猫咪的视频"， 则会将"过去三天忽略"）
     * @param string $TimeZone 时区。默认值：Asia/Shanghai

注：
符合iana标准 https://www.iana.org/time-zones，例如Asia/Shanghai、Asia/Bangkok

     * @param integer $SearchMode 取值为1表示高级搜索，取值为2表示简单搜索，默认为1
     * @param integer $Limit 最终输出的条数；仅当SearchMode为2时支持自定义设置，默认为50
     * @param float $VectorSearchRadius 向量搜索的相似度搜索半径，取值范围[-1, 1]；仅当SearchMode为2时支持自定义设置，默认为0.5
     * @param integer $VectorSearchTopK 指定向量搜索最相似的 Top K；仅当SearchMode为2时支持自定义设置，默认为100
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("SummaryLang",$param) and $param["SummaryLang"] !== null) {
            $this->SummaryLang = $param["SummaryLang"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("EnableSummary",$param) and $param["EnableSummary"] !== null) {
            $this->EnableSummary = $param["EnableSummary"];
        }

        if (array_key_exists("StartTimeMs",$param) and $param["StartTimeMs"] !== null) {
            $this->StartTimeMs = $param["StartTimeMs"];
        }

        if (array_key_exists("EndTimeMs",$param) and $param["EndTimeMs"] !== null) {
            $this->EndTimeMs = $param["EndTimeMs"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("SearchMode",$param) and $param["SearchMode"] !== null) {
            $this->SearchMode = $param["SearchMode"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("VectorSearchRadius",$param) and $param["VectorSearchRadius"] !== null) {
            $this->VectorSearchRadius = $param["VectorSearchRadius"];
        }

        if (array_key_exists("VectorSearchTopK",$param) and $param["VectorSearchTopK"] !== null) {
            $this->VectorSearchTopK = $param["VectorSearchTopK"];
        }
    }
}
