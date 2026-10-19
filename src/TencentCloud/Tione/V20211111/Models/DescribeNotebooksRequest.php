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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNotebooks请求参数结构体
 *
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0</p>
 * @method integer getLimit() 获取<p>每页返回的实例数，默认为 10，最小值 0，最大值 100</p>
 * @method void setLimit(integer $Limit) 设置<p>每页返回的实例数，默认为 10，最小值 0，最大值 100</p>
 * @method string getOrder() 获取<p>输出列表的排列顺序。取值范围：ASC：升序排列 DESC：降序排列。默认为DESC</p>
 * @method void setOrder(string $Order) 设置<p>输出列表的排列顺序。取值范围：ASC：升序排列 DESC：降序排列。默认为DESC</p>
 * @method string getOrderField() 获取<p>根据哪个字段排序，如：CreateTime、UpdateTime，默认为UpdateTime</p>
 * @method void setOrderField(string $OrderField) 设置<p>根据哪个字段排序，如：CreateTime、UpdateTime，默认为UpdateTime</p>
 * @method array getFilters() 获取<p>过滤器，eg：[{ &quot;Name&quot;: &quot;Id&quot;, &quot;Values&quot;: [&quot;nb-123456789&quot;] }]</p><p>取值范围<br>Name（名称）：notebook1<br>Id（notebook ID）：nb-123456789<br>Status（状态）：Starting / Running / Stopped / Stopping / Failed / SubmitFailed<br>Creator（创建者 uin）：100014761913<br>ChargeType（计费类型）：PREPAID（预付费）/ POSTPAID_BY_HOUR（后付费）<br>ChargeStatus（计费状态）：NOT_BILLING（未开始计费）/ BILLING（计费中）/ BILLING_STORAGE（存储计费中）/ARREARS_STOP（欠费停止）<br>DefaultCodeRepoId（默认代码仓库ID）：cr-123456789<br>AdditionalCodeRepoId（关联代码仓库ID）：cr-123456789<br>LifecycleScriptId（生命周期ID）：ls-12312312311312</p>
 * @method void setFilters(array $Filters) 设置<p>过滤器，eg：[{ &quot;Name&quot;: &quot;Id&quot;, &quot;Values&quot;: [&quot;nb-123456789&quot;] }]</p><p>取值范围<br>Name（名称）：notebook1<br>Id（notebook ID）：nb-123456789<br>Status（状态）：Starting / Running / Stopped / Stopping / Failed / SubmitFailed<br>Creator（创建者 uin）：100014761913<br>ChargeType（计费类型）：PREPAID（预付费）/ POSTPAID_BY_HOUR（后付费）<br>ChargeStatus（计费状态）：NOT_BILLING（未开始计费）/ BILLING（计费中）/ BILLING_STORAGE（存储计费中）/ARREARS_STOP（欠费停止）<br>DefaultCodeRepoId（默认代码仓库ID）：cr-123456789<br>AdditionalCodeRepoId（关联代码仓库ID）：cr-123456789<br>LifecycleScriptId（生命周期ID）：ls-12312312311312</p>
 * @method array getTagFilters() 获取<p>标签过滤器，eg：[{ &quot;TagKey&quot;: &quot;TagKeyA&quot;, &quot;TagValue&quot;: [&quot;TagValueA&quot;] }]</p>
 * @method void setTagFilters(array $TagFilters) 设置<p>标签过滤器，eg：[{ &quot;TagKey&quot;: &quot;TagKeyA&quot;, &quot;TagValue&quot;: [&quot;TagValueA&quot;] }]</p>
 */
class DescribeNotebooksRequest extends AbstractModel
{
    /**
     * @var string <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     */
    public $TiProjectId;

    /**
     * @var integer <p>偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页返回的实例数，默认为 10，最小值 0，最大值 100</p>
     */
    public $Limit;

    /**
     * @var string <p>输出列表的排列顺序。取值范围：ASC：升序排列 DESC：降序排列。默认为DESC</p>
     */
    public $Order;

    /**
     * @var string <p>根据哪个字段排序，如：CreateTime、UpdateTime，默认为UpdateTime</p>
     */
    public $OrderField;

    /**
     * @var array <p>过滤器，eg：[{ &quot;Name&quot;: &quot;Id&quot;, &quot;Values&quot;: [&quot;nb-123456789&quot;] }]</p><p>取值范围<br>Name（名称）：notebook1<br>Id（notebook ID）：nb-123456789<br>Status（状态）：Starting / Running / Stopped / Stopping / Failed / SubmitFailed<br>Creator（创建者 uin）：100014761913<br>ChargeType（计费类型）：PREPAID（预付费）/ POSTPAID_BY_HOUR（后付费）<br>ChargeStatus（计费状态）：NOT_BILLING（未开始计费）/ BILLING（计费中）/ BILLING_STORAGE（存储计费中）/ARREARS_STOP（欠费停止）<br>DefaultCodeRepoId（默认代码仓库ID）：cr-123456789<br>AdditionalCodeRepoId（关联代码仓库ID）：cr-123456789<br>LifecycleScriptId（生命周期ID）：ls-12312312311312</p>
     */
    public $Filters;

    /**
     * @var array <p>标签过滤器，eg：[{ &quot;TagKey&quot;: &quot;TagKeyA&quot;, &quot;TagValue&quot;: [&quot;TagValueA&quot;] }]</p>
     */
    public $TagFilters;

    /**
     * @param string $TiProjectId <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     * @param integer $Offset <p>偏移量，默认为0</p>
     * @param integer $Limit <p>每页返回的实例数，默认为 10，最小值 0，最大值 100</p>
     * @param string $Order <p>输出列表的排列顺序。取值范围：ASC：升序排列 DESC：降序排列。默认为DESC</p>
     * @param string $OrderField <p>根据哪个字段排序，如：CreateTime、UpdateTime，默认为UpdateTime</p>
     * @param array $Filters <p>过滤器，eg：[{ &quot;Name&quot;: &quot;Id&quot;, &quot;Values&quot;: [&quot;nb-123456789&quot;] }]</p><p>取值范围<br>Name（名称）：notebook1<br>Id（notebook ID）：nb-123456789<br>Status（状态）：Starting / Running / Stopped / Stopping / Failed / SubmitFailed<br>Creator（创建者 uin）：100014761913<br>ChargeType（计费类型）：PREPAID（预付费）/ POSTPAID_BY_HOUR（后付费）<br>ChargeStatus（计费状态）：NOT_BILLING（未开始计费）/ BILLING（计费中）/ BILLING_STORAGE（存储计费中）/ARREARS_STOP（欠费停止）<br>DefaultCodeRepoId（默认代码仓库ID）：cr-123456789<br>AdditionalCodeRepoId（关联代码仓库ID）：cr-123456789<br>LifecycleScriptId（生命周期ID）：ls-12312312311312</p>
     * @param array $TagFilters <p>标签过滤器，eg：[{ &quot;TagKey&quot;: &quot;TagKeyA&quot;, &quot;TagValue&quot;: [&quot;TagValueA&quot;] }]</p>
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
        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
