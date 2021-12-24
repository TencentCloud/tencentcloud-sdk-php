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
 * DescribeNodeUnit请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置边缘单元ID
 * @method string getNodeGroupName() 获取NodeUnit所属的NodeGroup名称
 * @method void setNodeGroupName(string $NodeGroupName) 设置NodeUnit所属的NodeGroup名称
 * @method string getNamespace() 获取命名空间，默认default
 * @method void setNamespace(string $Namespace) 设置命名空间，默认default
 * @method integer getLimit() 获取分页查询limit，默认20
 * @method void setLimit(integer $Limit) 设置分页查询limit，默认20
 * @method integer getOffset() 获取分页查询offset，默认0
 * @method void setOffset(integer $Offset) 设置分页查询offset，默认0
 * @method string getNameFilter() 获取模糊匹配
 * @method void setNameFilter(string $NameFilter) 设置模糊匹配
 */
class DescribeNodeUnitRequest extends AbstractModel
{
    /**
     * @var integer 边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var string NodeUnit所属的NodeGroup名称
     */
    public $NodeGroupName;

    /**
     * @var string 命名空间，默认default
     */
    public $Namespace;

    /**
     * @var integer 分页查询limit，默认20
     */
    public $Limit;

    /**
     * @var integer 分页查询offset，默认0
     */
    public $Offset;

    /**
     * @var string 模糊匹配
     */
    public $NameFilter;

    /**
     * @param integer $EdgeUnitId 边缘单元ID
     * @param string $NodeGroupName NodeUnit所属的NodeGroup名称
     * @param string $Namespace 命名空间，默认default
     * @param integer $Limit 分页查询limit，默认20
     * @param integer $Offset 分页查询offset，默认0
     * @param string $NameFilter 模糊匹配
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("NameFilter",$param) and $param["NameFilter"] !== null) {
            $this->NameFilter = $param["NameFilter"];
        }
    }
}
