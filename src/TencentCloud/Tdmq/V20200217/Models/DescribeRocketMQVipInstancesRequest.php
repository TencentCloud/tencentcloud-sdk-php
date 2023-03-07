<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRocketMQVipInstances请求参数结构体
 *
 * @method array getFilters() 获取查询条件过滤器，支持的查询条件如下：
instanceIds - 实例ID
instanceName - 实例名称
 * @method void setFilters(array $Filters) 设置查询条件过滤器，支持的查询条件如下：
instanceIds - 实例ID
instanceName - 实例名称
 * @method integer getLimit() 获取查询数目上限，默认20
 * @method void setLimit(integer $Limit) 设置查询数目上限，默认20
 * @method integer getOffset() 获取查询起始位置
 * @method void setOffset(integer $Offset) 设置查询起始位置
 */
class DescribeRocketMQVipInstancesRequest extends AbstractModel
{
    /**
     * @var array 查询条件过滤器，支持的查询条件如下：
instanceIds - 实例ID
instanceName - 实例名称
     */
    public $Filters;

    /**
     * @var integer 查询数目上限，默认20
     */
    public $Limit;

    /**
     * @var integer 查询起始位置
     */
    public $Offset;

    /**
     * @param array $Filters 查询条件过滤器，支持的查询条件如下：
instanceIds - 实例ID
instanceName - 实例名称
     * @param integer $Limit 查询数目上限，默认20
     * @param integer $Offset 查询起始位置
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
