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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEdgeUnitDeployGridItem请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取IECP边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置IECP边缘单元ID
 * @method string getGridItemName() 获取Grid名称
 * @method void setGridItemName(string $GridItemName) 设置Grid名称
 * @method string getWorkloadKind() 获取负载类型（StatefulSetGrid｜DeploymentGrid）
 * @method void setWorkloadKind(string $WorkloadKind) 设置负载类型（StatefulSetGrid｜DeploymentGrid）
 * @method integer getReplicas() 获取副本数
 * @method void setReplicas(integer $Replicas) 设置副本数
 * @method string getNamespace() 获取命名空间，默认default
 * @method void setNamespace(string $Namespace) 设置命名空间，默认default
 */
class ModifyEdgeUnitDeployGridItemRequest extends AbstractModel
{
    /**
     * @var integer IECP边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var string Grid名称
     */
    public $GridItemName;

    /**
     * @var string 负载类型（StatefulSetGrid｜DeploymentGrid）
     */
    public $WorkloadKind;

    /**
     * @var integer 副本数
     */
    public $Replicas;

    /**
     * @var string 命名空间，默认default
     */
    public $Namespace;

    /**
     * @param integer $EdgeUnitId IECP边缘单元ID
     * @param string $GridItemName Grid名称
     * @param string $WorkloadKind 负载类型（StatefulSetGrid｜DeploymentGrid）
     * @param integer $Replicas 副本数
     * @param string $Namespace 命名空间，默认default
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

        if (array_key_exists("GridItemName",$param) and $param["GridItemName"] !== null) {
            $this->GridItemName = $param["GridItemName"];
        }

        if (array_key_exists("WorkloadKind",$param) and $param["WorkloadKind"] !== null) {
            $this->WorkloadKind = $param["WorkloadKind"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
