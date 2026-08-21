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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWebhookPolicyList请求参数结构体
 *
 * @method integer getOffset() 获取<p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
 * @method integer getLimit() 获取<p>每页返回数量<br>取值范围：[1, 200]<br>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>每页返回数量<br>取值范围：[1, 200]<br>默认值：20</p>
 * @method array getFilters() 获取<p>过滤条件<br>支持的过滤项：<br>Name：按策略名称模糊搜索<br>Status：启用状态，可选值：ON / OFF<br>ReceiveFormat：接收格式，可选值：TEXT / JSON<br>Module：通知项模块，可选值：Vul / Alert / AkSk / Agent / LogAnalysis<br>ReceiverID：关联的接收机器人 ID</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件<br>支持的过滤项：<br>Name：按策略名称模糊搜索<br>Status：启用状态，可选值：ON / OFF<br>ReceiveFormat：接收格式，可选值：TEXT / JSON<br>Module：通知项模块，可选值：Vul / Alert / AkSk / Agent / LogAnalysis<br>ReceiverID：关联的接收机器人 ID</p>
 * @method string getOrder() 获取<p>排序字段<br>枚举值：<br>InsertTime：创建时间<br>UpdateTime：更新时间<br>默认值：UpdateTime</p>
 * @method void setOrder(string $Order) 设置<p>排序字段<br>枚举值：<br>InsertTime：创建时间<br>UpdateTime：更新时间<br>默认值：UpdateTime</p>
 * @method string getBy() 获取<p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
 * @method void setBy(string $By) 设置<p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
 */
class DescribeWebhookPolicyListRequest extends AbstractModel
{
    /**
     * @var integer <p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页返回数量<br>取值范围：[1, 200]<br>默认值：20</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件<br>支持的过滤项：<br>Name：按策略名称模糊搜索<br>Status：启用状态，可选值：ON / OFF<br>ReceiveFormat：接收格式，可选值：TEXT / JSON<br>Module：通知项模块，可选值：Vul / Alert / AkSk / Agent / LogAnalysis<br>ReceiverID：关联的接收机器人 ID</p>
     */
    public $Filters;

    /**
     * @var string <p>排序字段<br>枚举值：<br>InsertTime：创建时间<br>UpdateTime：更新时间<br>默认值：UpdateTime</p>
     */
    public $Order;

    /**
     * @var string <p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
     */
    public $By;

    /**
     * @param integer $Offset <p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
     * @param integer $Limit <p>每页返回数量<br>取值范围：[1, 200]<br>默认值：20</p>
     * @param array $Filters <p>过滤条件<br>支持的过滤项：<br>Name：按策略名称模糊搜索<br>Status：启用状态，可选值：ON / OFF<br>ReceiveFormat：接收格式，可选值：TEXT / JSON<br>Module：通知项模块，可选值：Vul / Alert / AkSk / Agent / LogAnalysis<br>ReceiverID：关联的接收机器人 ID</p>
     * @param string $Order <p>排序字段<br>枚举值：<br>InsertTime：创建时间<br>UpdateTime：更新时间<br>默认值：UpdateTime</p>
     * @param string $By <p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
