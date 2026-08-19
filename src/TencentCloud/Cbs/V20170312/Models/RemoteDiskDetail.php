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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单副本SSD硬盘详情。
 *
 * @method string getCreateTime() 获取<p>单副本SSD硬盘的创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>单副本SSD硬盘的创建时间。</p>
 * @method string getDeadlineTime() 获取<p>单副本SSD硬盘到期时间。按小时后付费单副本SSD硬盘可能为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadlineTime(string $DeadlineTime) 设置<p>单副本SSD硬盘到期时间。按小时后付费单副本SSD硬盘可能为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskChargeType() 获取<p>单副本SSD硬盘计费类型。</p><p>枚举值：</p><ul><li>PREPAID： 预付费</li><li>POSTPAID_BY_HOUR： 按小时后付费</li></ul>
 * @method void setDiskChargeType(string $DiskChargeType) 设置<p>单副本SSD硬盘计费类型。</p><p>枚举值：</p><ul><li>PREPAID： 预付费</li><li>POSTPAID_BY_HOUR： 按小时后付费</li></ul>
 * @method integer getDiskSize() 获取<p>单副本SSD硬盘大小，单位为 GiB。</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>单副本SSD硬盘大小，单位为 GiB。</p>
 * @method string getInstanceId() 获取<p>单副本SSD硬盘挂载的云服务器实例ID。未挂载时为空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置<p>单副本SSD硬盘挂载的云服务器实例ID。未挂载时为空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Placement getPlacement() 获取<p>单副本SSD硬盘所在的位置。</p>
 * @method void setPlacement(Placement $Placement) 设置<p>单副本SSD硬盘所在的位置。</p>
 * @method string getRemoteDiskId() 获取<p>单副本SSD硬盘ID。</p>
 * @method void setRemoteDiskId(string $RemoteDiskId) 设置<p>单副本SSD硬盘ID。</p>
 * @method string getRemoteDiskName() 获取<p>单副本SSD硬盘名称。</p>
 * @method void setRemoteDiskName(string $RemoteDiskName) 设置<p>单副本SSD硬盘名称。</p>
 * @method string getRemoteDiskState() 获取<p>单副本SSD硬盘状态。</p><p>枚举值：</p><ul><li>UNATTACHED： 未挂载</li><li>ATTACHED： 已挂载</li><li>TORECYCLE： 待回收</li></ul>
 * @method void setRemoteDiskState(string $RemoteDiskState) 设置<p>单副本SSD硬盘状态。</p><p>枚举值：</p><ul><li>UNATTACHED： 未挂载</li><li>ATTACHED： 已挂载</li><li>TORECYCLE： 待回收</li></ul>
 * @method string getRemoteDiskType() 获取<p>单副本SSD硬盘类型。</p><p>枚举值：</p><ul><li>REMOTE_SSD： 单副本SSD硬盘</li><li>ELASTIC_REMOTE_SSD： 弹性单副本SSD硬盘</li></ul>
 * @method void setRemoteDiskType(string $RemoteDiskType) 设置<p>单副本SSD硬盘类型。</p><p>枚举值：</p><ul><li>REMOTE_SSD： 单副本SSD硬盘</li><li>ELASTIC_REMOTE_SSD： 弹性单副本SSD硬盘</li></ul>
 * @method string getRenewFlag() 获取<p>自动续费标识。</p><p>枚举值：</p><ul><li>NOTIFY_AND_AUTO_RENEW： 通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW： 通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知过期不自动续费</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(string $RenewFlag) 设置<p>自动续费标识。</p><p>枚举值：</p><ul><li>NOTIFY_AND_AUTO_RENEW： 通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW： 通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知过期不自动续费</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RemoteDiskDetail extends AbstractModel
{
    /**
     * @var string <p>单副本SSD硬盘的创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>单副本SSD硬盘到期时间。按小时后付费单副本SSD硬盘可能为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadlineTime;

    /**
     * @var string <p>单副本SSD硬盘计费类型。</p><p>枚举值：</p><ul><li>PREPAID： 预付费</li><li>POSTPAID_BY_HOUR： 按小时后付费</li></ul>
     */
    public $DiskChargeType;

    /**
     * @var integer <p>单副本SSD硬盘大小，单位为 GiB。</p>
     */
    public $DiskSize;

    /**
     * @var string <p>单副本SSD硬盘挂载的云服务器实例ID。未挂载时为空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var Placement <p>单副本SSD硬盘所在的位置。</p>
     */
    public $Placement;

    /**
     * @var string <p>单副本SSD硬盘ID。</p>
     */
    public $RemoteDiskId;

    /**
     * @var string <p>单副本SSD硬盘名称。</p>
     */
    public $RemoteDiskName;

    /**
     * @var string <p>单副本SSD硬盘状态。</p><p>枚举值：</p><ul><li>UNATTACHED： 未挂载</li><li>ATTACHED： 已挂载</li><li>TORECYCLE： 待回收</li></ul>
     */
    public $RemoteDiskState;

    /**
     * @var string <p>单副本SSD硬盘类型。</p><p>枚举值：</p><ul><li>REMOTE_SSD： 单副本SSD硬盘</li><li>ELASTIC_REMOTE_SSD： 弹性单副本SSD硬盘</li></ul>
     */
    public $RemoteDiskType;

    /**
     * @var string <p>自动续费标识。</p><p>枚举值：</p><ul><li>NOTIFY_AND_AUTO_RENEW： 通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW： 通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知过期不自动续费</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @param string $CreateTime <p>单副本SSD硬盘的创建时间。</p>
     * @param string $DeadlineTime <p>单副本SSD硬盘到期时间。按小时后付费单副本SSD硬盘可能为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskChargeType <p>单副本SSD硬盘计费类型。</p><p>枚举值：</p><ul><li>PREPAID： 预付费</li><li>POSTPAID_BY_HOUR： 按小时后付费</li></ul>
     * @param integer $DiskSize <p>单副本SSD硬盘大小，单位为 GiB。</p>
     * @param string $InstanceId <p>单副本SSD硬盘挂载的云服务器实例ID。未挂载时为空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Placement $Placement <p>单副本SSD硬盘所在的位置。</p>
     * @param string $RemoteDiskId <p>单副本SSD硬盘ID。</p>
     * @param string $RemoteDiskName <p>单副本SSD硬盘名称。</p>
     * @param string $RemoteDiskState <p>单副本SSD硬盘状态。</p><p>枚举值：</p><ul><li>UNATTACHED： 未挂载</li><li>ATTACHED： 已挂载</li><li>TORECYCLE： 待回收</li></ul>
     * @param string $RemoteDiskType <p>单副本SSD硬盘类型。</p><p>枚举值：</p><ul><li>REMOTE_SSD： 单副本SSD硬盘</li><li>ELASTIC_REMOTE_SSD： 弹性单副本SSD硬盘</li></ul>
     * @param string $RenewFlag <p>自动续费标识。</p><p>枚举值：</p><ul><li>NOTIFY_AND_AUTO_RENEW： 通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW： 通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知过期不自动续费</li></ul>
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("RemoteDiskId",$param) and $param["RemoteDiskId"] !== null) {
            $this->RemoteDiskId = $param["RemoteDiskId"];
        }

        if (array_key_exists("RemoteDiskName",$param) and $param["RemoteDiskName"] !== null) {
            $this->RemoteDiskName = $param["RemoteDiskName"];
        }

        if (array_key_exists("RemoteDiskState",$param) and $param["RemoteDiskState"] !== null) {
            $this->RemoteDiskState = $param["RemoteDiskState"];
        }

        if (array_key_exists("RemoteDiskType",$param) and $param["RemoteDiskType"] !== null) {
            $this->RemoteDiskType = $param["RemoteDiskType"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
