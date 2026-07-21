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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGlobalAcceleratorAccessLog请求参数结构体
 *
 * @method string getGlobalAcceleratorId() 获取<p>ga实例唯一Id</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置<p>ga实例唯一Id</p>
 * @method array getFilters() 获取<p>查询过滤参数。{ &quot;Name&quot;: &quot;listener-id&quot;, &quot;Values&quot;: [&quot;监听器唯一Id&quot;] },{ &quot;Name&quot;: &quot;endpoint-group-id&quot;, &quot;Values&quot;: [&quot;终端节点组唯一Id&quot;] },{ &quot;Name&quot;: &quot;access_log_id&quot;, &quot;Values&quot;: [&quot;日志唯一Id&quot;] }</p>
 * @method void setFilters(array $Filters) 设置<p>查询过滤参数。{ &quot;Name&quot;: &quot;listener-id&quot;, &quot;Values&quot;: [&quot;监听器唯一Id&quot;] },{ &quot;Name&quot;: &quot;endpoint-group-id&quot;, &quot;Values&quot;: [&quot;终端节点组唯一Id&quot;] },{ &quot;Name&quot;: &quot;access_log_id&quot;, &quot;Values&quot;: [&quot;日志唯一Id&quot;] }</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method integer getLimit() 获取<p>返回数量。</p><p>取值范围：[0, 200]</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量。</p><p>取值范围：[0, 200]</p>
 */
class DescribeGlobalAcceleratorAccessLogRequest extends AbstractModel
{
    /**
     * @var string <p>ga实例唯一Id</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var array <p>查询过滤参数。{ &quot;Name&quot;: &quot;listener-id&quot;, &quot;Values&quot;: [&quot;监听器唯一Id&quot;] },{ &quot;Name&quot;: &quot;endpoint-group-id&quot;, &quot;Values&quot;: [&quot;终端节点组唯一Id&quot;] },{ &quot;Name&quot;: &quot;access_log_id&quot;, &quot;Values&quot;: [&quot;日志唯一Id&quot;] }</p>
     */
    public $Filters;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量。</p><p>取值范围：[0, 200]</p>
     */
    public $Limit;

    /**
     * @param string $GlobalAcceleratorId <p>ga实例唯一Id</p>
     * @param array $Filters <p>查询过滤参数。{ &quot;Name&quot;: &quot;listener-id&quot;, &quot;Values&quot;: [&quot;监听器唯一Id&quot;] },{ &quot;Name&quot;: &quot;endpoint-group-id&quot;, &quot;Values&quot;: [&quot;终端节点组唯一Id&quot;] },{ &quot;Name&quot;: &quot;access_log_id&quot;, &quot;Values&quot;: [&quot;日志唯一Id&quot;] }</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param integer $Limit <p>返回数量。</p><p>取值范围：[0, 200]</p>
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
