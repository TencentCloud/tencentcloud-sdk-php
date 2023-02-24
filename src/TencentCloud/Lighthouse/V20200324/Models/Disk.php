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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 磁盘信息
 *
 * @method string getDiskId() 获取磁盘ID
 * @method void setDiskId(string $DiskId) 设置磁盘ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getDiskName() 获取磁盘名称
 * @method void setDiskName(string $DiskName) 设置磁盘名称
 * @method string getDiskUsage() 获取磁盘类型
 * @method void setDiskUsage(string $DiskUsage) 设置磁盘类型
 * @method string getDiskType() 获取磁盘介质类型
 * @method void setDiskType(string $DiskType) 设置磁盘介质类型
 * @method string getDiskChargeType() 获取磁盘付费类型
 * @method void setDiskChargeType(string $DiskChargeType) 设置磁盘付费类型
 * @method integer getDiskSize() 获取磁盘大小
 * @method void setDiskSize(integer $DiskSize) 设置磁盘大小
 * @method string getRenewFlag() 获取续费标识
 * @method void setRenewFlag(string $RenewFlag) 设置续费标识
 * @method string getDiskState() 获取磁盘状态，取值范围：
<li>PENDING：创建中。 </li>
<li>UNATTACHED：未挂载。</li>
<li>ATTACHING：挂载中。</li>
<li>ATTACHED：已挂载。</li>
<li>DETACHING：卸载中。 </li>
<li> SHUTDOWN：已隔离。</li>
<li> CREATED_FAILED：创建失败。</li>
<li>TERMINATING：销毁中。</li>
<li> DELETING：删除中。</li>
<li> FREEZING：冻结中。</li>
 * @method void setDiskState(string $DiskState) 设置磁盘状态，取值范围：
<li>PENDING：创建中。 </li>
<li>UNATTACHED：未挂载。</li>
<li>ATTACHING：挂载中。</li>
<li>ATTACHED：已挂载。</li>
<li>DETACHING：卸载中。 </li>
<li> SHUTDOWN：已隔离。</li>
<li> CREATED_FAILED：创建失败。</li>
<li>TERMINATING：销毁中。</li>
<li> DELETING：删除中。</li>
<li> FREEZING：冻结中。</li>
 * @method boolean getAttached() 获取磁盘挂载状态
 * @method void setAttached(boolean $Attached) 设置磁盘挂载状态
 * @method boolean getDeleteWithInstance() 获取是否随实例释放
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) 设置是否随实例释放
 * @method string getLatestOperation() 获取上一次操作
 * @method void setLatestOperation(string $LatestOperation) 设置上一次操作
 * @method string getLatestOperationState() 获取上一次操作状态
 * @method void setLatestOperationState(string $LatestOperationState) 设置上一次操作状态
 * @method string getLatestOperationRequestId() 获取上一次请求ID
 * @method void setLatestOperationRequestId(string $LatestOperationRequestId) 设置上一次请求ID
 * @method string getCreatedTime() 获取创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpiredTime() 获取到期时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredTime(string $ExpiredTime) 设置到期时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolatedTime() 获取隔离时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedTime(string $IsolatedTime) 设置隔离时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskBackupCount() 获取云硬盘的已有备份点数量。
 * @method void setDiskBackupCount(integer $DiskBackupCount) 设置云硬盘的已有备份点数量。
 * @method integer getDiskBackupQuota() 获取云硬盘的备份点配额数量。
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) 设置云硬盘的备份点配额数量。
 */
class Disk extends AbstractModel
{
    /**
     * @var string 磁盘ID
     */
    public $DiskId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 磁盘名称
     */
    public $DiskName;

    /**
     * @var string 磁盘类型
     */
    public $DiskUsage;

    /**
     * @var string 磁盘介质类型
     */
    public $DiskType;

    /**
     * @var string 磁盘付费类型
     */
    public $DiskChargeType;

    /**
     * @var integer 磁盘大小
     */
    public $DiskSize;

    /**
     * @var string 续费标识
     */
    public $RenewFlag;

    /**
     * @var string 磁盘状态，取值范围：
<li>PENDING：创建中。 </li>
<li>UNATTACHED：未挂载。</li>
<li>ATTACHING：挂载中。</li>
<li>ATTACHED：已挂载。</li>
<li>DETACHING：卸载中。 </li>
<li> SHUTDOWN：已隔离。</li>
<li> CREATED_FAILED：创建失败。</li>
<li>TERMINATING：销毁中。</li>
<li> DELETING：删除中。</li>
<li> FREEZING：冻结中。</li>
     */
    public $DiskState;

    /**
     * @var boolean 磁盘挂载状态
     */
    public $Attached;

    /**
     * @var boolean 是否随实例释放
     */
    public $DeleteWithInstance;

    /**
     * @var string 上一次操作
     */
    public $LatestOperation;

    /**
     * @var string 上一次操作状态
     */
    public $LatestOperationState;

    /**
     * @var string 上一次请求ID
     */
    public $LatestOperationRequestId;

    /**
     * @var string 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 到期时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredTime;

    /**
     * @var string 隔离时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedTime;

    /**
     * @var integer 云硬盘的已有备份点数量。
     */
    public $DiskBackupCount;

    /**
     * @var integer 云硬盘的备份点配额数量。
     */
    public $DiskBackupQuota;

    /**
     * @param string $DiskId 磁盘ID
     * @param string $InstanceId 实例ID
     * @param string $Zone 可用区
     * @param string $DiskName 磁盘名称
     * @param string $DiskUsage 磁盘类型
     * @param string $DiskType 磁盘介质类型
     * @param string $DiskChargeType 磁盘付费类型
     * @param integer $DiskSize 磁盘大小
     * @param string $RenewFlag 续费标识
     * @param string $DiskState 磁盘状态，取值范围：
<li>PENDING：创建中。 </li>
<li>UNATTACHED：未挂载。</li>
<li>ATTACHING：挂载中。</li>
<li>ATTACHED：已挂载。</li>
<li>DETACHING：卸载中。 </li>
<li> SHUTDOWN：已隔离。</li>
<li> CREATED_FAILED：创建失败。</li>
<li>TERMINATING：销毁中。</li>
<li> DELETING：删除中。</li>
<li> FREEZING：冻结中。</li>
     * @param boolean $Attached 磁盘挂载状态
     * @param boolean $DeleteWithInstance 是否随实例释放
     * @param string $LatestOperation 上一次操作
     * @param string $LatestOperationState 上一次操作状态
     * @param string $LatestOperationRequestId 上一次请求ID
     * @param string $CreatedTime 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpiredTime 到期时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolatedTime 隔离时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskBackupCount 云硬盘的已有备份点数量。
     * @param integer $DiskBackupQuota 云硬盘的备份点配额数量。
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("DiskState",$param) and $param["DiskState"] !== null) {
            $this->DiskState = $param["DiskState"];
        }

        if (array_key_exists("Attached",$param) and $param["Attached"] !== null) {
            $this->Attached = $param["Attached"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }

        if (array_key_exists("LatestOperationRequestId",$param) and $param["LatestOperationRequestId"] !== null) {
            $this->LatestOperationRequestId = $param["LatestOperationRequestId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("DiskBackupCount",$param) and $param["DiskBackupCount"] !== null) {
            $this->DiskBackupCount = $param["DiskBackupCount"];
        }

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }
    }
}
