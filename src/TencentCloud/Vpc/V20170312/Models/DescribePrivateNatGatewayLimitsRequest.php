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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrivateNatGatewayLimits请求参数结构体
 *
 * @method array getFilters() 获取查询VPC下可创建的私网网关配额数量，可选值：
<li>VpcId - String - 所在VpcId</li>
 * @method void setFilters(array $Filters) 设置查询VPC下可创建的私网网关配额数量，可选值：
<li>VpcId - String - 所在VpcId</li>
 * @method integer getOffset() 获取偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为0。
 * @method integer getLimit() 获取返回数目，默认值为20。
 * @method void setLimit(integer $Limit) 设置返回数目，默认值为20。
 */
class DescribePrivateNatGatewayLimitsRequest extends AbstractModel
{
    /**
     * @var array 查询VPC下可创建的私网网关配额数量，可选值：
<li>VpcId - String - 所在VpcId</li>
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 返回数目，默认值为20。
     */
    public $Limit;

    /**
     * @param array $Filters 查询VPC下可创建的私网网关配额数量，可选值：
<li>VpcId - String - 所在VpcId</li>
     * @param integer $Offset 偏移量，默认值为0。
     * @param integer $Limit 返回数目，默认值为20。
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
