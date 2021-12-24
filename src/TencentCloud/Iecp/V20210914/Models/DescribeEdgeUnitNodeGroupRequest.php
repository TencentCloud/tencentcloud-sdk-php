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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdgeUnitNodeGroup请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取IECP边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置IECP边缘单元ID
 * @method string getNamespace() 获取命名空间，默认为default
 * @method void setNamespace(string $Namespace) 设置命名空间，默认为default
 * @method integer getOffset() 获取分页offset，默认为0
 * @method void setOffset(integer $Offset) 设置分页offset，默认为0
 * @method integer getLimit() 获取分页limit，默认为20
 * @method void setLimit(integer $Limit) 设置分页limit，默认为20
 * @method string getNameFilter() 获取模糊匹配参数，精确匹配时失效
 * @method void setNameFilter(string $NameFilter) 设置模糊匹配参数，精确匹配时失效
 * @method string getNameMatched() 获取精确匹配参数
 * @method void setNameMatched(string $NameMatched) 设置精确匹配参数
 * @method string getOrder() 获取按时间排序，ASC/DESC，默认为DESC
 * @method void setOrder(string $Order) 设置按时间排序，ASC/DESC，默认为DESC
 */
class DescribeEdgeUnitNodeGroupRequest extends AbstractModel
{
    /**
     * @var integer IECP边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var string 命名空间，默认为default
     */
    public $Namespace;

    /**
     * @var integer 分页offset，默认为0
     */
    public $Offset;

    /**
     * @var integer 分页limit，默认为20
     */
    public $Limit;

    /**
     * @var string 模糊匹配参数，精确匹配时失效
     */
    public $NameFilter;

    /**
     * @var string 精确匹配参数
     */
    public $NameMatched;

    /**
     * @var string 按时间排序，ASC/DESC，默认为DESC
     */
    public $Order;

    /**
     * @param integer $EdgeUnitId IECP边缘单元ID
     * @param string $Namespace 命名空间，默认为default
     * @param integer $Offset 分页offset，默认为0
     * @param integer $Limit 分页limit，默认为20
     * @param string $NameFilter 模糊匹配参数，精确匹配时失效
     * @param string $NameMatched 精确匹配参数
     * @param string $Order 按时间排序，ASC/DESC，默认为DESC
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
        if (array_key_exists("EdgeUnitId",$param) and $param["EdgeUnitId"] !== null) {
            $this->EdgeUnitId = $param["EdgeUnitId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NameFilter",$param) and $param["NameFilter"] !== null) {
            $this->NameFilter = $param["NameFilter"];
        }

        if (array_key_exists("NameMatched",$param) and $param["NameMatched"] !== null) {
            $this->NameMatched = $param["NameMatched"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
