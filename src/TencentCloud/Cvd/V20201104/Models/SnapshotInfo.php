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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 快照信息
 *
 * @method string getSnapshotId() 获取<p>快照唯一ID</p>
 * @method void setSnapshotId(string $SnapshotId) 设置<p>快照唯一ID</p>
 * @method string getDiskId() 获取<p>快照对应的云硬盘ID</p>
 * @method void setDiskId(string $DiskId) 设置<p>快照对应的云硬盘ID</p>
 * @method string getSnapshotState() 获取<p>快照状态，取值如下：<br>NORMAL：正常<br>CREATING：创建中<br>ROLLBACKING：回滚中<br>COPYING_FROM_REMOTE：跨地域复制中<br>CHECKING_COPIED：复制校验中<br>TORECYCLE：待回收。</p>
 * @method void setSnapshotState(string $SnapshotState) 设置<p>快照状态，取值如下：<br>NORMAL：正常<br>CREATING：创建中<br>ROLLBACKING：回滚中<br>COPYING_FROM_REMOTE：跨地域复制中<br>CHECKING_COPIED：复制校验中<br>TORECYCLE：待回收。</p>
 * @method string getDiskUsage() 获取<p>创建此快照的云硬盘类型。取值范围：<br>SYSTEM_DISK：系统盘<br>DATA_DISK：数据盘。</p>
 * @method void setDiskUsage(string $DiskUsage) 设置<p>创建此快照的云硬盘类型。取值范围：<br>SYSTEM_DISK：系统盘<br>DATA_DISK：数据盘。</p>
 * @method string getCreateTime() 获取<p>快照创建的时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>快照创建的时间</p>
 * @method string getDeadlineTime() 获取<p>快照到期时间。如果快照为永久保留，此字段为空。</p>
 * @method void setDeadlineTime(string $DeadlineTime) 设置<p>快照到期时间。如果快照为永久保留，此字段为空。</p>
 * @method integer getPercent() 获取<p>快照创建进度百分比，快照创建成功后此字段恒为100。</p>
 * @method void setPercent(integer $Percent) 设置<p>快照创建进度百分比，快照创建成功后此字段恒为100。</p>
 * @method boolean getIsPermanent() 获取<p>是否为永久快照。取值范围：<br>true：永久快照<br>false：非永久快照。</p>
 * @method void setIsPermanent(boolean $IsPermanent) 设置<p>是否为永久快照。取值范围：<br>true：永久快照<br>false：非永久快照。</p>
 * @method string getCreateType() 获取<p>快照创建方式，取值:<br>ManualSnapshot：手动创建<br>AutoSnapshot：快照策略自动创建</p>
 * @method void setCreateType(string $CreateType) 设置<p>快照创建方式，取值:<br>ManualSnapshot：手动创建<br>AutoSnapshot：快照策略自动创建</p>
 * @method string getLastRollbackTime() 获取<p>上一次快照回滚完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastRollbackTime(string $LastRollbackTime) 设置<p>上一次快照回滚完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastRollbackState() 获取<p>上一次快照回滚状态，取值：<br>成功：SUCCESS<br>失败：FAILED</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastRollbackState(string $LastRollbackState) 设置<p>上一次快照回滚状态，取值：<br>成功：SUCCESS<br>失败：FAILED</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SnapshotInfo extends AbstractModel
{
    /**
     * @var string <p>快照唯一ID</p>
     */
    public $SnapshotId;

    /**
     * @var string <p>快照对应的云硬盘ID</p>
     */
    public $DiskId;

    /**
     * @var string <p>快照状态，取值如下：<br>NORMAL：正常<br>CREATING：创建中<br>ROLLBACKING：回滚中<br>COPYING_FROM_REMOTE：跨地域复制中<br>CHECKING_COPIED：复制校验中<br>TORECYCLE：待回收。</p>
     */
    public $SnapshotState;

    /**
     * @var string <p>创建此快照的云硬盘类型。取值范围：<br>SYSTEM_DISK：系统盘<br>DATA_DISK：数据盘。</p>
     */
    public $DiskUsage;

    /**
     * @var string <p>快照创建的时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>快照到期时间。如果快照为永久保留，此字段为空。</p>
     */
    public $DeadlineTime;

    /**
     * @var integer <p>快照创建进度百分比，快照创建成功后此字段恒为100。</p>
     */
    public $Percent;

    /**
     * @var boolean <p>是否为永久快照。取值范围：<br>true：永久快照<br>false：非永久快照。</p>
     */
    public $IsPermanent;

    /**
     * @var string <p>快照创建方式，取值:<br>ManualSnapshot：手动创建<br>AutoSnapshot：快照策略自动创建</p>
     */
    public $CreateType;

    /**
     * @var string <p>上一次快照回滚完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastRollbackTime;

    /**
     * @var string <p>上一次快照回滚状态，取值：<br>成功：SUCCESS<br>失败：FAILED</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastRollbackState;

    /**
     * @param string $SnapshotId <p>快照唯一ID</p>
     * @param string $DiskId <p>快照对应的云硬盘ID</p>
     * @param string $SnapshotState <p>快照状态，取值如下：<br>NORMAL：正常<br>CREATING：创建中<br>ROLLBACKING：回滚中<br>COPYING_FROM_REMOTE：跨地域复制中<br>CHECKING_COPIED：复制校验中<br>TORECYCLE：待回收。</p>
     * @param string $DiskUsage <p>创建此快照的云硬盘类型。取值范围：<br>SYSTEM_DISK：系统盘<br>DATA_DISK：数据盘。</p>
     * @param string $CreateTime <p>快照创建的时间</p>
     * @param string $DeadlineTime <p>快照到期时间。如果快照为永久保留，此字段为空。</p>
     * @param integer $Percent <p>快照创建进度百分比，快照创建成功后此字段恒为100。</p>
     * @param boolean $IsPermanent <p>是否为永久快照。取值范围：<br>true：永久快照<br>false：非永久快照。</p>
     * @param string $CreateType <p>快照创建方式，取值:<br>ManualSnapshot：手动创建<br>AutoSnapshot：快照策略自动创建</p>
     * @param string $LastRollbackTime <p>上一次快照回滚完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastRollbackState <p>上一次快照回滚状态，取值：<br>成功：SUCCESS<br>失败：FAILED</p>
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("SnapshotState",$param) and $param["SnapshotState"] !== null) {
            $this->SnapshotState = $param["SnapshotState"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("CreateType",$param) and $param["CreateType"] !== null) {
            $this->CreateType = $param["CreateType"];
        }

        if (array_key_exists("LastRollbackTime",$param) and $param["LastRollbackTime"] !== null) {
            $this->LastRollbackTime = $param["LastRollbackTime"];
        }

        if (array_key_exists("LastRollbackState",$param) and $param["LastRollbackState"] !== null) {
            $this->LastRollbackState = $param["LastRollbackState"];
        }
    }
}
