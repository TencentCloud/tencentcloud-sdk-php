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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterNatCcnFwSwitchList请求参数结构体
 *
 * @method string getNatType() 获取<p>NAT防火墙类型筛选，取值：nat-VPC内防护类型，nat_ccn-CCN集群模式类型，不传则同时查询两种类型</p>
 * @method void setNatType(string $NatType) 设置<p>NAT防火墙类型筛选，取值：nat-VPC内防护类型，nat_ccn-CCN集群模式类型，不传则同时查询两种类型</p>
 * @method integer getLimit() 获取<p>每页条数，默认100</p>
 * @method void setLimit(integer $Limit) 设置<p>每页条数，默认100</p>
 * @method integer getOffset() 获取<p>偏移量，默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认0</p>
 * @method array getFilters() 获取<p>过滤条件列表，支持按Common（通用搜索）、InsObj（实例ID）、ObjName（实例名称）等字段过滤</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件列表，支持按Common（通用搜索）、InsObj（实例ID）、ObjName（实例名称）等字段过滤</p>
 */
class DescribeClusterNatCcnFwSwitchListRequest extends AbstractModel
{
    /**
     * @var string <p>NAT防火墙类型筛选，取值：nat-VPC内防护类型，nat_ccn-CCN集群模式类型，不传则同时查询两种类型</p>
     */
    public $NatType;

    /**
     * @var integer <p>每页条数，默认100</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认0</p>
     */
    public $Offset;

    /**
     * @var array <p>过滤条件列表，支持按Common（通用搜索）、InsObj（实例ID）、ObjName（实例名称）等字段过滤</p>
     */
    public $Filters;

    /**
     * @param string $NatType <p>NAT防火墙类型筛选，取值：nat-VPC内防护类型，nat_ccn-CCN集群模式类型，不传则同时查询两种类型</p>
     * @param integer $Limit <p>每页条数，默认100</p>
     * @param integer $Offset <p>偏移量，默认0</p>
     * @param array $Filters <p>过滤条件列表，支持按Common（通用搜索）、InsObj（实例ID）、ObjName（实例名称）等字段过滤</p>
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
        if (array_key_exists("NatType",$param) and $param["NatType"] !== null) {
            $this->NatType = $param["NatType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CommonFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
