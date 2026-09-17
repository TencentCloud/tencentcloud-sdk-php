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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStrategyList请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 id</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method integer getLimit() 获取<p>每页条数</p>
 * @method void setLimit(integer $Limit) 设置<p>每页条数</p>
 * @method array getFilters() 获取<p>策略过滤条件：StrategyName：策略名称</p>
 * @method void setFilters(array $Filters) 设置<p>策略过滤条件：StrategyName：策略名称</p>
 */
class DescribeStrategyListRequest extends AbstractModel
{
    /**
     * @var string <p>实例 id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页条数</p>
     */
    public $Limit;

    /**
     * @var array <p>策略过滤条件：StrategyName：策略名称</p>
     */
    public $Filters;

    /**
     * @param string $InstanceId <p>实例 id</p>
     * @param integer $Offset <p>偏移量</p>
     * @param integer $Limit <p>每页条数</p>
     * @param array $Filters <p>策略过滤条件：StrategyName：策略名称</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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
                $obj = new ResourceFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
