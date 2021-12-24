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
 * DescribeNodeUnitTemplateOnNodeGroup请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取IECP边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置IECP边缘单元ID
 * @method string getNodeGroupName() 获取NodeGroup名称
 * @method void setNodeGroupName(string $NodeGroupName) 设置NodeGroup名称
 * @method string getNamespace() 获取命名空间，默认default
 * @method void setNamespace(string $Namespace) 设置命名空间，默认default
 * @method string getNodeUnitNamePattern() 获取名称模糊匹配
 * @method void setNodeUnitNamePattern(string $NodeUnitNamePattern) 设置名称模糊匹配
 * @method integer getOffset() 获取分页查询offset，默认0
 * @method void setOffset(integer $Offset) 设置分页查询offset，默认0
 * @method integer getLimit() 获取分页查询limit，默认20
 * @method void setLimit(integer $Limit) 设置分页查询limit，默认20
 * @method string getOrder() 获取排序，默认DESC
 * @method void setOrder(string $Order) 设置排序，默认DESC
 */
class DescribeNodeUnitTemplateOnNodeGroupRequest extends AbstractModel
{
    /**
     * @var integer IECP边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var string NodeGroup名称
     */
    public $NodeGroupName;

    /**
     * @var string 命名空间，默认default
     */
    public $Namespace;

    /**
     * @var string 名称模糊匹配
     */
    public $NodeUnitNamePattern;

    /**
     * @var integer 分页查询offset，默认0
     */
    public $Offset;

    /**
     * @var integer 分页查询limit，默认20
     */
    public $Limit;

    /**
     * @var string 排序，默认DESC
     */
    public $Order;

    /**
     * @param integer $EdgeUnitId IECP边缘单元ID
     * @param string $NodeGroupName NodeGroup名称
     * @param string $Namespace 命名空间，默认default
     * @param string $NodeUnitNamePattern 名称模糊匹配
     * @param integer $Offset 分页查询offset，默认0
     * @param integer $Limit 分页查询limit，默认20
     * @param string $Order 排序，默认DESC
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

        if (array_key_exists("NodeGroupName",$param) and $param["NodeGroupName"] !== null) {
            $this->NodeGroupName = $param["NodeGroupName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("NodeUnitNamePattern",$param) and $param["NodeUnitNamePattern"] !== null) {
            $this->NodeUnitNamePattern = $param["NodeUnitNamePattern"];
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
    }
}
