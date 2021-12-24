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
 * DescribeEdgeUnitDeployGridItem请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置边缘单元ID
 * @method string getGridName() 获取Grid名称
 * @method void setGridName(string $GridName) 设置Grid名称
 * @method string getWorkloadKind() 获取负载类型（StatefulSetGrid｜DeploymentGrid）
 * @method void setWorkloadKind(string $WorkloadKind) 设置负载类型（StatefulSetGrid｜DeploymentGrid）
 * @method string getNamespace() 获取命名空间，默认default
 * @method void setNamespace(string $Namespace) 设置命名空间，默认default
 * @method string getOrder() 获取排序，默认ASC
 * @method void setOrder(string $Order) 设置排序，默认ASC
 */
class DescribeEdgeUnitDeployGridItemRequest extends AbstractModel
{
    /**
     * @var integer 边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var string Grid名称
     */
    public $GridName;

    /**
     * @var string 负载类型（StatefulSetGrid｜DeploymentGrid）
     */
    public $WorkloadKind;

    /**
     * @var string 命名空间，默认default
     */
    public $Namespace;

    /**
     * @var string 排序，默认ASC
     */
    public $Order;

    /**
     * @param integer $EdgeUnitId 边缘单元ID
     * @param string $GridName Grid名称
     * @param string $WorkloadKind 负载类型（StatefulSetGrid｜DeploymentGrid）
     * @param string $Namespace 命名空间，默认default
     * @param string $Order 排序，默认ASC
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

        if (array_key_exists("GridName",$param) and $param["GridName"] !== null) {
            $this->GridName = $param["GridName"];
        }

        if (array_key_exists("WorkloadKind",$param) and $param["WorkloadKind"] !== null) {
            $this->WorkloadKind = $param["WorkloadKind"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
