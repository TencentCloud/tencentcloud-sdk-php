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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命名空间状态
 *
 * @method string getEnvironmentId() 获取命名空间id
 * @method void setEnvironmentId(string $EnvironmentId) 设置命名空间id
 * @method string getEnvironmentName() 获取命名空间名称
 * @method void setEnvironmentName(string $EnvironmentName) 设置命名空间名称
 * @method string getClusterId() 获取TCB envId | EKS clusterId
 * @method void setClusterId(string $ClusterId) 设置TCB envId | EKS clusterId
 * @method string getClusterStatus() 获取环境状态
 * @method void setClusterStatus(string $ClusterStatus) 设置环境状态
 * @method TemEnvironmentStartingStatus getEnvironmentStartingStatus() 获取环境启动状态（不在启动中为null）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironmentStartingStatus(TemEnvironmentStartingStatus $EnvironmentStartingStatus) 设置环境启动状态（不在启动中为null）
注意：此字段可能返回 null，表示取不到有效值。
 * @method TemEnvironmentStoppingStatus getEnvironmentStoppingStatus() 获取环境停止状态（不在停止中为null）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironmentStoppingStatus(TemEnvironmentStoppingStatus $EnvironmentStoppingStatus) 设置环境停止状态（不在停止中为null）
注意：此字段可能返回 null，表示取不到有效值。
 */
class NamespaceStatusInfo extends AbstractModel
{
    /**
     * @var string 命名空间id
     */
    public $EnvironmentId;

    /**
     * @var string 命名空间名称
     */
    public $EnvironmentName;

    /**
     * @var string TCB envId | EKS clusterId
     */
    public $ClusterId;

    /**
     * @var string 环境状态
     */
    public $ClusterStatus;

    /**
     * @var TemEnvironmentStartingStatus 环境启动状态（不在启动中为null）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvironmentStartingStatus;

    /**
     * @var TemEnvironmentStoppingStatus 环境停止状态（不在停止中为null）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvironmentStoppingStatus;

    /**
     * @param string $EnvironmentId 命名空间id
     * @param string $EnvironmentName 命名空间名称
     * @param string $ClusterId TCB envId | EKS clusterId
     * @param string $ClusterStatus 环境状态
     * @param TemEnvironmentStartingStatus $EnvironmentStartingStatus 环境启动状态（不在启动中为null）
注意：此字段可能返回 null，表示取不到有效值。
     * @param TemEnvironmentStoppingStatus $EnvironmentStoppingStatus 环境停止状态（不在停止中为null）
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("EnvironmentStartingStatus",$param) and $param["EnvironmentStartingStatus"] !== null) {
            $this->EnvironmentStartingStatus = new TemEnvironmentStartingStatus();
            $this->EnvironmentStartingStatus->deserialize($param["EnvironmentStartingStatus"]);
        }

        if (array_key_exists("EnvironmentStoppingStatus",$param) and $param["EnvironmentStoppingStatus"] !== null) {
            $this->EnvironmentStoppingStatus = new TemEnvironmentStoppingStatus();
            $this->EnvironmentStoppingStatus->deserialize($param["EnvironmentStoppingStatus"]);
        }
    }
}
