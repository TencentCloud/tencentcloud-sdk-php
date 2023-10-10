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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器快照信息
 *
 * @method string getQuuid() 获取cvm id
 * @method void setQuuid(string $Quuid) 设置cvm id
 * @method string getHostName() 获取主机名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostName(string $HostName) 设置主机名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostIp() 获取主机ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostIp(string $HostIp) 设置主机ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapshotName() 获取快照名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotName(string $SnapshotName) 设置快照名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取快照创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置快照创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapshotId() 获取快照id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotId(string $SnapshotId) 设置快照id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取记录唯一id
 * @method void setId(integer $Id) 设置记录唯一id
 * @method integer getStatus() 获取快照状态 0-初始状态1-快照创建成功；2-快照创建失败；
 * @method void setStatus(integer $Status) 设置快照状态 0-初始状态1-快照创建成功；2-快照创建失败；
 * @method string getFailReason() 获取快照创建失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailReason(string $FailReason) 设置快照创建失败原因
注意：此字段可能返回 null，表示取不到有效值。
 */
class VulFixStatusSnapshotInfo extends AbstractModel
{
    /**
     * @var string cvm id
     */
    public $Quuid;

    /**
     * @var string 主机名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostName;

    /**
     * @var string 主机ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostIp;

    /**
     * @var string 快照名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotName;

    /**
     * @var string 快照创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 快照id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotId;

    /**
     * @var integer 记录唯一id
     */
    public $Id;

    /**
     * @var integer 快照状态 0-初始状态1-快照创建成功；2-快照创建失败；
     */
    public $Status;

    /**
     * @var string 快照创建失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailReason;

    /**
     * @param string $Quuid cvm id
     * @param string $HostName 主机名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostIp 主机ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapshotName 快照名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 快照创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapshotId 快照id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 记录唯一id
     * @param integer $Status 快照状态 0-初始状态1-快照创建成功；2-快照创建失败；
     * @param string $FailReason 快照创建失败原因
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }
    }
}
