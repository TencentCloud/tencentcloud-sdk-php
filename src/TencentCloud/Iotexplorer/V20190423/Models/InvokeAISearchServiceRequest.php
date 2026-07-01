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
 * @method string getProductId() 获取<p>产品ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品ID</p>
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method string getQuery() 获取<p>自然语言查询</p>
 * @method void setQuery(string $Query) 设置<p>自然语言查询</p>
 * @method string getSummaryLang() 获取<p>搜索结果总结的语言类型，支持的类型有：en-US、zh-CN、id-ID、th-TH</p>
 * @method void setSummaryLang(string $SummaryLang) 设置<p>搜索结果总结的语言类型，支持的类型有：en-US、zh-CN、id-ID、th-TH</p>
 * @method integer getChannelId() 获取<p>通道ID</p>
 * @method void setChannelId(integer $ChannelId) 设置<p>通道ID</p>
 * @method boolean getEnableSummary() 获取<p>是否需要返回总结，默认为True；  开启后会加大接口响应时长</p>
 * @method void setEnableSummary(boolean $EnableSummary) 设置<p>是否需要返回总结，默认为True；  开启后会加大接口响应时长</p>
 * @method integer getStartTimeMs() 获取<p>开始时间。</p><p>注：</p><ol><li>单位为毫秒（ms）</li><li>如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后1天内的数据， 反之EndTimeMs也一样）</li><li>只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为&quot;过去三天关于猫咪的视频&quot;， 则会将&quot;过去三天忽略&quot;）</li></ol>
 * @method void setStartTimeMs(integer $StartTimeMs) 设置<p>开始时间。</p><p>注：</p><ol><li>单位为毫秒（ms）</li><li>如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后1天内的数据， 反之EndTimeMs也一样）</li><li>只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为&quot;过去三天关于猫咪的视频&quot;， 则会将&quot;过去三天忽略&quot;）</li></ol>
 * @method integer getEndTimeMs() 获取<p>结束时间。</p><p>注：</p><ol><li>单位为毫秒（ms）</li><li>如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后1天内的数据， 反之EndTimeMs也一样）</li><li>只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为&quot;过去三天关于猫咪的视频&quot;， 则会将&quot;过去三天忽略&quot;）</li></ol>
 * @method void setEndTimeMs(integer $EndTimeMs) 设置<p>结束时间。</p><p>注：</p><ol><li>单位为毫秒（ms）</li><li>如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后1天内的数据， 反之EndTimeMs也一样）</li><li>只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为&quot;过去三天关于猫咪的视频&quot;， 则会将&quot;过去三天忽略&quot;）</li></ol>
 * @method string getTimeZone() 获取<p>时区。默认值：Asia/Shanghai</p><p>注：<br>符合iana标准 https://www.iana.org/time-zones，例如Asia/Shanghai、Asia/Bangkok</p>
 * @method void setTimeZone(string $TimeZone) 设置<p>时区。默认值：Asia/Shanghai</p><p>注：<br>符合iana标准 https://www.iana.org/time-zones，例如Asia/Shanghai、Asia/Bangkok</p>
 * @method integer getSearchMode() 获取<p>取值为1表示高级搜索，取值为2表示简单搜索，默认为1</p>
 * @method void setSearchMode(integer $SearchMode) 设置<p>取值为1表示高级搜索，取值为2表示简单搜索，默认为1</p>
 * @method integer getLimit() 获取<p>最终输出的条数；仅当SearchMode为2时支持自定义设置，默认为50</p>
 * @method void setLimit(integer $Limit) 设置<p>最终输出的条数；仅当SearchMode为2时支持自定义设置，默认为50</p>
 * @method float getVectorSearchRadius() 获取<p>向量搜索的相似度搜索半径，取值范围[-1, 1]；仅当SearchMode为2时支持自定义设置，默认为0.5</p>
 * @method void setVectorSearchRadius(float $VectorSearchRadius) 设置<p>向量搜索的相似度搜索半径，取值范围[-1, 1]；仅当SearchMode为2时支持自定义设置，默认为0.5</p>
 * @method integer getVectorSearchTopK() 获取<p>指定向量搜索最相似的 Top K；仅当SearchMode为2时支持自定义设置，默认为100</p>
 * @method void setVectorSearchTopK(integer $VectorSearchTopK) 设置<p>指定向量搜索最相似的 Top K；仅当SearchMode为2时支持自定义设置，默认为100</p>
 * @method string getOrder() 获取<p>搜索结果的排序方式，可选值：</p><ul><li><code>CORRELATION</code>：按相关性（默认）</li><li><code>TIME_ASC</code>：按时间升序</li><li><code>TIME_DESC</code>：按时间降序</li></ul>
 * @method void setOrder(string $Order) 设置<p>搜索结果的排序方式，可选值：</p><ul><li><code>CORRELATION</code>：按相关性（默认）</li><li><code>TIME_ASC</code>：按时间升序</li><li><code>TIME_DESC</code>：按时间降序</li></ul>
 * @method boolean getWithTaskInfo() 获取<p>是否输出原始任务信息</p>
 * @method void setWithTaskInfo(boolean $WithTaskInfo) 设置<p>是否输出原始任务信息</p>
 */
class InvokeAISearchServiceRequest extends AbstractModel
{
    /**
     * @var string <p>产品ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>自然语言查询</p>
     */
    public $Query;

    /**
     * @var string <p>搜索结果总结的语言类型，支持的类型有：en-US、zh-CN、id-ID、th-TH</p>
     */
    public $SummaryLang;

    /**
     * @var integer <p>通道ID</p>
     */
    public $ChannelId;

    /**
     * @var boolean <p>是否需要返回总结，默认为True；  开启后会加大接口响应时长</p>
     */
    public $EnableSummary;

    /**
     * @var integer <p>开始时间。</p><p>注：</p><ol><li>单位为毫秒（ms）</li><li>如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后1天内的数据， 反之EndTimeMs也一样）</li><li>只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为&quot;过去三天关于猫咪的视频&quot;， 则会将&quot;过去三天忽略&quot;）</li></ol>
     */
    public $StartTimeMs;

    /**
     * @var integer <p>结束时间。</p><p>注：</p><ol><li>单位为毫秒（ms）</li><li>如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后1天内的数据， 反之EndTimeMs也一样）</li><li>只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为&quot;过去三天关于猫咪的视频&quot;， 则会将&quot;过去三天忽略&quot;）</li></ol>
     */
    public $EndTimeMs;

    /**
     * @var string <p>时区。默认值：Asia/Shanghai</p><p>注：<br>符合iana标准 https://www.iana.org/time-zones，例如Asia/Shanghai、Asia/Bangkok</p>
     */
    public $TimeZone;

    /**
     * @var integer <p>取值为1表示高级搜索，取值为2表示简单搜索，默认为1</p>
     */
    public $SearchMode;

    /**
     * @var integer <p>最终输出的条数；仅当SearchMode为2时支持自定义设置，默认为50</p>
     */
    public $Limit;

    /**
     * @var float <p>向量搜索的相似度搜索半径，取值范围[-1, 1]；仅当SearchMode为2时支持自定义设置，默认为0.5</p>
     */
    public $VectorSearchRadius;

    /**
     * @var integer <p>指定向量搜索最相似的 Top K；仅当SearchMode为2时支持自定义设置，默认为100</p>
     */
    public $VectorSearchTopK;

    /**
     * @var string <p>搜索结果的排序方式，可选值：</p><ul><li><code>CORRELATION</code>：按相关性（默认）</li><li><code>TIME_ASC</code>：按时间升序</li><li><code>TIME_DESC</code>：按时间降序</li></ul>
     */
    public $Order;

    /**
     * @var boolean <p>是否输出原始任务信息</p>
     */
    public $WithTaskInfo;

    /**
     * @param string $ProductId <p>产品ID</p>
     * @param string $DeviceName <p>设备名称</p>
     * @param string $Query <p>自然语言查询</p>
     * @param string $SummaryLang <p>搜索结果总结的语言类型，支持的类型有：en-US、zh-CN、id-ID、th-TH</p>
     * @param integer $ChannelId <p>通道ID</p>
     * @param boolean $EnableSummary <p>是否需要返回总结，默认为True；  开启后会加大接口响应时长</p>
     * @param integer $StartTimeMs <p>开始时间。</p><p>注：</p><ol><li>单位为毫秒（ms）</li><li>如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后1天内的数据， 反之EndTimeMs也一样）</li><li>只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为&quot;过去三天关于猫咪的视频&quot;， 则会将&quot;过去三天忽略&quot;）</li></ol>
     * @param integer $EndTimeMs <p>结束时间。</p><p>注：</p><ol><li>单位为毫秒（ms）</li><li>如果同时指定了StartTimeMs与EndTimeMs，时间区间不能大于7天；如果只指定其中一个（例如只指定StartTimeMs，则查询自StartTimeMs后1天内的数据， 反之EndTimeMs也一样）</li><li>只要指定了其中一个参数，接口则会忽略Query参数中关于时间的描述；（例如Query为&quot;过去三天关于猫咪的视频&quot;， 则会将&quot;过去三天忽略&quot;）</li></ol>
     * @param string $TimeZone <p>时区。默认值：Asia/Shanghai</p><p>注：<br>符合iana标准 https://www.iana.org/time-zones，例如Asia/Shanghai、Asia/Bangkok</p>
     * @param integer $SearchMode <p>取值为1表示高级搜索，取值为2表示简单搜索，默认为1</p>
     * @param integer $Limit <p>最终输出的条数；仅当SearchMode为2时支持自定义设置，默认为50</p>
     * @param float $VectorSearchRadius <p>向量搜索的相似度搜索半径，取值范围[-1, 1]；仅当SearchMode为2时支持自定义设置，默认为0.5</p>
     * @param integer $VectorSearchTopK <p>指定向量搜索最相似的 Top K；仅当SearchMode为2时支持自定义设置，默认为100</p>
     * @param string $Order <p>搜索结果的排序方式，可选值：</p><ul><li><code>CORRELATION</code>：按相关性（默认）</li><li><code>TIME_ASC</code>：按时间升序</li><li><code>TIME_DESC</code>：按时间降序</li></ul>
     * @param boolean $WithTaskInfo <p>是否输出原始任务信息</p>
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("WithTaskInfo",$param) and $param["WithTaskInfo"] !== null) {
            $this->WithTaskInfo = $param["WithTaskInfo"];
        }
    }
}
