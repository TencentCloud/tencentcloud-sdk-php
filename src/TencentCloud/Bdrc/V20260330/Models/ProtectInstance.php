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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 受保护实例信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getAgentId() 获取客户端ID
 * @method void setAgentId(string $AgentId) 设置客户端ID
 * @method string getAgentVersion() 获取客户端版本
 * @method void setAgentVersion(string $AgentVersion) 设置客户端版本
 * @method string getAgentStatus() 获取客户端状态
 * @method void setAgentStatus(string $AgentStatus) 设置客户端状态
 * @method string getLastHeartbeatTime() 获取最后心跳时间
 * @method void setLastHeartbeatTime(string $LastHeartbeatTime) 设置最后心跳时间
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getExtraInfo() 获取最新备份点中记录的 CVM 基础信息
 * @method void setExtraInfo(string $ExtraInfo) 设置最新备份点中记录的 CVM 基础信息
 * @method integer getBackupCount() 获取该实例可用备份点数量
 * @method void setBackupCount(integer $BackupCount) 设置该实例可用备份点数量
 * @method string getInstanceName() 获取实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestBackupTime() 获取最近一次备份时间
 * @method void setLatestBackupTime(string $LatestBackupTime) 设置最近一次备份时间
 * @method string getOfflineReason() 获取离线原因
 * @method void setOfflineReason(string $OfflineReason) 设置离线原因
 */
class ProtectInstance extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 客户端ID
     */
    public $AgentId;

    /**
     * @var string 客户端版本
     */
    public $AgentVersion;

    /**
     * @var string 客户端状态
     */
    public $AgentStatus;

    /**
     * @var string 最后心跳时间
     */
    public $LastHeartbeatTime;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 最新备份点中记录的 CVM 基础信息
     */
    public $ExtraInfo;

    /**
     * @var integer 该实例可用备份点数量
     */
    public $BackupCount;

    /**
     * @var string 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 最近一次备份时间
     */
    public $LatestBackupTime;

    /**
     * @var string 离线原因
     */
    public $OfflineReason;

    /**
     * @param string $InstanceId 实例ID
     * @param string $AgentId 客户端ID
     * @param string $AgentVersion 客户端版本
     * @param string $AgentStatus 客户端状态
     * @param string $LastHeartbeatTime 最后心跳时间
     * @param string $CreatedTime 创建时间
     * @param string $ExtraInfo 最新备份点中记录的 CVM 基础信息
     * @param integer $BackupCount 该实例可用备份点数量
     * @param string $InstanceName 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestBackupTime 最近一次备份时间
     * @param string $OfflineReason 离线原因
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("LastHeartbeatTime",$param) and $param["LastHeartbeatTime"] !== null) {
            $this->LastHeartbeatTime = $param["LastHeartbeatTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("BackupCount",$param) and $param["BackupCount"] !== null) {
            $this->BackupCount = $param["BackupCount"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("LatestBackupTime",$param) and $param["LatestBackupTime"] !== null) {
            $this->LatestBackupTime = $param["LatestBackupTime"];
        }

        if (array_key_exists("OfflineReason",$param) and $param["OfflineReason"] !== null) {
            $this->OfflineReason = $param["OfflineReason"];
        }
    }
}
