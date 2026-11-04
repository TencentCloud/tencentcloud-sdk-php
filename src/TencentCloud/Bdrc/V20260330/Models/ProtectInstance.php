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
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getAgentId() 获取<p>客户端ID</p>
 * @method void setAgentId(string $AgentId) 设置<p>客户端ID</p>
 * @method string getAgentVersion() 获取<p>客户端版本</p>
 * @method void setAgentVersion(string $AgentVersion) 设置<p>客户端版本</p>
 * @method string getAgentStatus() 获取<p>客户端状态</p>
 * @method void setAgentStatus(string $AgentStatus) 设置<p>客户端状态</p>
 * @method string getLastHeartbeatTime() 获取<p>最后心跳时间</p>
 * @method void setLastHeartbeatTime(string $LastHeartbeatTime) 设置<p>最后心跳时间</p>
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method string getExtraInfo() 获取<p>最新备份点中记录的 CVM 基础信息</p>
 * @method void setExtraInfo(string $ExtraInfo) 设置<p>最新备份点中记录的 CVM 基础信息</p>
 * @method integer getBackupCount() 获取<p>该实例可用备份点数量</p>
 * @method void setBackupCount(integer $BackupCount) 设置<p>该实例可用备份点数量</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestBackupTime() 获取<p>最近一次备份时间</p>
 * @method void setLatestBackupTime(string $LatestBackupTime) 设置<p>最近一次备份时间</p>
 * @method string getOfflineReason() 获取<p>离线原因</p>
 * @method void setOfflineReason(string $OfflineReason) 设置<p>离线原因</p>
 * @method integer getBackupSize() 获取<p>备份数据量，单位为字节</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupSize(integer $BackupSize) 设置<p>备份数据量，单位为字节</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductType() 获取<p>产品存储类型</p><p>枚举值：</p><ul><li>SD： 文件系统通用标准型存储</li><li>HP： 文件系统通用性能性存储</li><li>TB： 文件系统Turbo标准型存储</li><li>TP： 文件系统Turbo性能型存储</li><li>THP： 文件系统Turbo吞吐型存储</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductType(string $ProductType) 设置<p>产品存储类型</p><p>枚举值：</p><ul><li>SD： 文件系统通用标准型存储</li><li>HP： 文件系统通用性能性存储</li><li>TB： 文件系统Turbo标准型存储</li><li>TP： 文件系统Turbo性能型存储</li><li>THP： 文件系统Turbo吞吐型存储</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProtectInstance extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>客户端ID</p>
     */
    public $AgentId;

    /**
     * @var string <p>客户端版本</p>
     */
    public $AgentVersion;

    /**
     * @var string <p>客户端状态</p>
     */
    public $AgentStatus;

    /**
     * @var string <p>最后心跳时间</p>
     */
    public $LastHeartbeatTime;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>最新备份点中记录的 CVM 基础信息</p>
     */
    public $ExtraInfo;

    /**
     * @var integer <p>该实例可用备份点数量</p>
     */
    public $BackupCount;

    /**
     * @var string <p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string <p>最近一次备份时间</p>
     */
    public $LatestBackupTime;

    /**
     * @var string <p>离线原因</p>
     */
    public $OfflineReason;

    /**
     * @var integer <p>备份数据量，单位为字节</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupSize;

    /**
     * @var string <p>产品存储类型</p><p>枚举值：</p><ul><li>SD： 文件系统通用标准型存储</li><li>HP： 文件系统通用性能性存储</li><li>TB： 文件系统Turbo标准型存储</li><li>TP： 文件系统Turbo性能型存储</li><li>THP： 文件系统Turbo吞吐型存储</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductType;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $AgentId <p>客户端ID</p>
     * @param string $AgentVersion <p>客户端版本</p>
     * @param string $AgentStatus <p>客户端状态</p>
     * @param string $LastHeartbeatTime <p>最后心跳时间</p>
     * @param string $CreatedTime <p>创建时间</p>
     * @param string $ExtraInfo <p>最新备份点中记录的 CVM 基础信息</p>
     * @param integer $BackupCount <p>该实例可用备份点数量</p>
     * @param string $InstanceName <p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestBackupTime <p>最近一次备份时间</p>
     * @param string $OfflineReason <p>离线原因</p>
     * @param integer $BackupSize <p>备份数据量，单位为字节</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductType <p>产品存储类型</p><p>枚举值：</p><ul><li>SD： 文件系统通用标准型存储</li><li>HP： 文件系统通用性能性存储</li><li>TB： 文件系统Turbo标准型存储</li><li>TP： 文件系统Turbo性能型存储</li><li>THP： 文件系统Turbo吞吐型存储</li></ul>
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

        if (array_key_exists("BackupSize",$param) and $param["BackupSize"] !== null) {
            $this->BackupSize = $param["BackupSize"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }
    }
}
