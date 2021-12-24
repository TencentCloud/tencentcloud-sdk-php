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
 * 应用状态
 *
 * @method integer getId() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取应用版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置应用版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取应用状态(1:待部署 2:部署中 3:运行中 4:待更新 5:更新中 6:待删除 7:删除中 8:已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置应用状态(1:待部署 2:部署中 3:运行中 4:待更新 5:更新中 6:待删除 7:删除中 8:已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManageUrl() 获取管理地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManageUrl(string $ManageUrl) 设置管理地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkloadKind() 获取负载类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkloadKind(string $WorkloadKind) 设置负载类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method ApplicationDeployMode getDeployMode() 获取应用部署模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployMode(ApplicationDeployMode $DeployMode) 设置应用部署模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplicas() 获取期望Pod数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicas(integer $Replicas) 设置期望Pod数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvailableReplicas() 获取运行Pod数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableReplicas(integer $AvailableReplicas) 设置运行Pod数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApplicationStatusInfo extends AbstractModel
{
    /**
     * @var integer 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 应用版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 应用状态(1:待部署 2:部署中 3:运行中 4:待更新 5:更新中 6:待删除 7:删除中 8:已删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 管理地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManageUrl;

    /**
     * @var string 负载类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkloadKind;

    /**
     * @var ApplicationDeployMode 应用部署模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployMode;

    /**
     * @var integer 期望Pod数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replicas;

    /**
     * @var integer 运行Pod数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableReplicas;

    /**
     * @param integer $Id 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 应用版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 应用状态(1:待部署 2:部署中 3:运行中 4:待更新 5:更新中 6:待删除 7:删除中 8:已删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ManageUrl 管理地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkloadKind 负载类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param ApplicationDeployMode $DeployMode 应用部署模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Replicas 期望Pod数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvailableReplicas 运行Pod数
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ManageUrl",$param) and $param["ManageUrl"] !== null) {
            $this->ManageUrl = $param["ManageUrl"];
        }

        if (array_key_exists("WorkloadKind",$param) and $param["WorkloadKind"] !== null) {
            $this->WorkloadKind = $param["WorkloadKind"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = new ApplicationDeployMode();
            $this->DeployMode->deserialize($param["DeployMode"]);
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("AvailableReplicas",$param) and $param["AvailableReplicas"] !== null) {
            $this->AvailableReplicas = $param["AvailableReplicas"];
        }
    }
}
