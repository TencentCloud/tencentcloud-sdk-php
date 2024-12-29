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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CBS实例信息
 *
 * @method string getDiskId() 获取云硬盘ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskId(string $DiskId) 设置云硬盘ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskUsage() 获取云硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskUsage(string $DiskUsage) 设置云硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskName() 获取云硬盘名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskName(string $DiskName) 设置云硬盘名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskSize() 获取云硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskSize(integer $DiskSize) 设置云硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskType() 获取云盘介质类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskType(string $DiskType) 设置云盘介质类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeleteWithInstance() 获取是否跟随实例删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) 设置是否跟随实例删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskChargeType() 获取云硬盘收费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskChargeType(string $DiskChargeType) 设置云硬盘收费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskState() 获取云硬盘运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskState(string $DiskState) 设置云硬盘运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRenewFlag() 获取是否自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(string $RenewFlag) 设置是否自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeadlineTime() 获取到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadlineTime(string $DeadlineTime) 设置到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAttached() 获取云盘是否挂载到云主机上
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttached(boolean $Attached) 设置云盘是否挂载到云主机上
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDifferDaysOfDeadline() 获取当前时间距离盘到期的天数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDifferDaysOfDeadline(integer $DifferDaysOfDeadline) 设置当前时间距离盘到期的天数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceIdList() 获取该云盘当前被挂载到的CVM实例InstanceId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceIdList(array $InstanceIdList) 设置该云盘当前被挂载到的CVM实例InstanceId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取云硬盘挂载的云主机ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置云硬盘挂载的云主机ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getShareable() 获取云盘是否为共享型云盘。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShareable(boolean $Shareable) 设置云盘是否为共享型云盘。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CBSInstance extends AbstractModel
{
    /**
     * @var string 云硬盘ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskId;

    /**
     * @var string 云硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskUsage;

    /**
     * @var string 云硬盘名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskName;

    /**
     * @var integer 云硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskSize;

    /**
     * @var string 云盘介质类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskType;

    /**
     * @var boolean 是否跟随实例删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteWithInstance;

    /**
     * @var string 云硬盘收费类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskChargeType;

    /**
     * @var string 云硬盘运行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskState;

    /**
     * @var string 是否自动续费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @var string 到期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadlineTime;

    /**
     * @var boolean 云盘是否挂载到云主机上
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Attached;

    /**
     * @var integer 当前时间距离盘到期的天数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DifferDaysOfDeadline;

    /**
     * @var array 该云盘当前被挂载到的CVM实例InstanceId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceIdList;

    /**
     * @var string 云硬盘挂载的云主机ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var boolean 云盘是否为共享型云盘。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Shareable;

    /**
     * @param string $DiskId 云硬盘ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskUsage 云硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskName 云硬盘名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskSize 云硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskType 云盘介质类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeleteWithInstance 是否跟随实例删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskChargeType 云硬盘收费类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskState 云硬盘运行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RenewFlag 是否自动续费
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeadlineTime 到期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Attached 云盘是否挂载到云主机上
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DifferDaysOfDeadline 当前时间距离盘到期的天数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceIdList 该云盘当前被挂载到的CVM实例InstanceId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 云硬盘挂载的云主机ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Shareable 云盘是否为共享型云盘。
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("DiskState",$param) and $param["DiskState"] !== null) {
            $this->DiskState = $param["DiskState"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("Attached",$param) and $param["Attached"] !== null) {
            $this->Attached = $param["Attached"];
        }

        if (array_key_exists("DifferDaysOfDeadline",$param) and $param["DifferDaysOfDeadline"] !== null) {
            $this->DifferDaysOfDeadline = $param["DifferDaysOfDeadline"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Shareable",$param) and $param["Shareable"] !== null) {
            $this->Shareable = $param["Shareable"];
        }
    }
}
