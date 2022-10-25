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
 * 工作负载详情
 *
 * @method string getClusterId() 获取资源 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置资源 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取应用名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置应用名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionName() 获取版本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionName(string $VersionName) 设置版本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReadyReplicas() 获取Ready实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadyReplicas(integer $ReadyReplicas) 设置Ready实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplicas() 获取实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicas(integer $Replicas) 设置实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdatedReplicas() 获取Updated实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedReplicas(integer $UpdatedReplicas) 设置Updated实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdatedReadyReplicas() 获取UpdatedReady实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedReadyReplicas(integer $UpdatedReadyReplicas) 设置UpdatedReady实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateRevision() 获取更新版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateRevision(string $UpdateRevision) 设置更新版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurrentRevision() 获取当前版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentRevision(string $CurrentRevision) 设置当前版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkloadInfo extends AbstractModel
{
    /**
     * @var string 资源 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 应用名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @var string 版本名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionName;

    /**
     * @var integer Ready实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadyReplicas;

    /**
     * @var integer 实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replicas;

    /**
     * @var integer Updated实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedReplicas;

    /**
     * @var integer UpdatedReady实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedReadyReplicas;

    /**
     * @var string 更新版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateRevision;

    /**
     * @var string 当前版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentRevision;

    /**
     * @param string $ClusterId 资源 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName 应用名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionName 版本名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReadyReplicas Ready实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Replicas 实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdatedReplicas Updated实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdatedReadyReplicas UpdatedReady实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateRevision 更新版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurrentRevision 当前版本
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("ReadyReplicas",$param) and $param["ReadyReplicas"] !== null) {
            $this->ReadyReplicas = $param["ReadyReplicas"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("UpdatedReplicas",$param) and $param["UpdatedReplicas"] !== null) {
            $this->UpdatedReplicas = $param["UpdatedReplicas"];
        }

        if (array_key_exists("UpdatedReadyReplicas",$param) and $param["UpdatedReadyReplicas"] !== null) {
            $this->UpdatedReadyReplicas = $param["UpdatedReadyReplicas"];
        }

        if (array_key_exists("UpdateRevision",$param) and $param["UpdateRevision"] !== null) {
            $this->UpdateRevision = $param["UpdateRevision"];
        }

        if (array_key_exists("CurrentRevision",$param) and $param["CurrentRevision"] !== null) {
            $this->CurrentRevision = $param["CurrentRevision"];
        }
    }
}
