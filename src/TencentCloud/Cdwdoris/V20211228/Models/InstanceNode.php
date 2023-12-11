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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例节点描述信息
 *
 * @method string getIp() 获取IP地址
 * @method void setIp(string $Ip) 设置IP地址
 * @method string getSpec() 获取机型，如 S1
 * @method void setSpec(string $Spec) 设置机型，如 S1
 * @method integer getCore() 获取cpu核数
 * @method void setCore(integer $Core) 设置cpu核数
 * @method integer getMemory() 获取内存大小
 * @method void setMemory(integer $Memory) 设置内存大小
 * @method string getDiskType() 获取磁盘类型
 * @method void setDiskType(string $DiskType) 设置磁盘类型
 * @method integer getDiskSize() 获取磁盘大小
 * @method void setDiskSize(integer $DiskSize) 设置磁盘大小
 * @method string getRole() 获取所属clickhouse cluster名称
 * @method void setRole(string $Role) 设置所属clickhouse cluster名称
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRip() 获取rip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRip(string $Rip) 设置rip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFeRole() 获取FE节点角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeRole(string $FeRole) 设置FE节点角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUUID() 获取UUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUUID(string $UUID) 设置UUID
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceNode extends AbstractModel
{
    /**
     * @var string IP地址
     */
    public $Ip;

    /**
     * @var string 机型，如 S1
     */
    public $Spec;

    /**
     * @var integer cpu核数
     */
    public $Core;

    /**
     * @var integer 内存大小
     */
    public $Memory;

    /**
     * @var string 磁盘类型
     */
    public $DiskType;

    /**
     * @var integer 磁盘大小
     */
    public $DiskSize;

    /**
     * @var string 所属clickhouse cluster名称
     */
    public $Role;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string rip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rip;

    /**
     * @var string FE节点角色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeRole;

    /**
     * @var string UUID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UUID;

    /**
     * @param string $Ip IP地址
     * @param string $Spec 机型，如 S1
     * @param integer $Core cpu核数
     * @param integer $Memory 内存大小
     * @param string $DiskType 磁盘类型
     * @param integer $DiskSize 磁盘大小
     * @param string $Role 所属clickhouse cluster名称
     * @param string $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Rip rip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FeRole FE节点角色
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UUID UUID
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("Core",$param) and $param["Core"] !== null) {
            $this->Core = $param["Core"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Rip",$param) and $param["Rip"] !== null) {
            $this->Rip = $param["Rip"];
        }

        if (array_key_exists("FeRole",$param) and $param["FeRole"] !== null) {
            $this->FeRole = $param["FeRole"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }
    }
}
