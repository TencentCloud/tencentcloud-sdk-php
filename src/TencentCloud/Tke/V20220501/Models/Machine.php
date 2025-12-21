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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点信息
 *
 * @method string getMachineName() 获取节点名称
 * @method void setMachineName(string $MachineName) 设置节点名称
 * @method string getMachineState() 获取Machine 状态
 * @method void setMachineState(string $MachineState) 设置Machine 状态
 * @method string getZone() 获取Machine 所在可用区
 * @method void setZone(string $Zone) 设置Machine 所在可用区
 * @method string getInstanceChargeType() 获取节点计费类型。PREPAID：包年包月；POSTPAID_BY_HOUR：按量计费（默认）；
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置节点计费类型。PREPAID：包年包月；POSTPAID_BY_HOUR：按量计费（默认）；
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getLoginStatus() 获取Machine 登录状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoginStatus(string $LoginStatus) 设置Machine 登录状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsProtectedFromScaleIn() 获取是否开启缩容保护
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsProtectedFromScaleIn(boolean $IsProtectedFromScaleIn) 设置是否开启缩容保护
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取Machine 名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置Machine 名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCPU() 获取CPU核数，单位：核
 * @method void setCPU(integer $CPU) 设置CPU核数，单位：核
 * @method integer getGPU() 获取GPU核数，单位：核
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGPU(integer $GPU) 设置GPU核数，单位：核
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRenewFlag() 获取自动续费标识
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识
 * @method string getPayMode() 获取节点计费模式（已弃用）
 * @method void setPayMode(string $PayMode) 设置节点计费模式（已弃用）
 * @method integer getMemory() 获取节点内存容量，单位：`GB`
 * @method void setMemory(integer $Memory) 设置节点内存容量，单位：`GB`
 * @method Disk getSystemDisk() 获取节点系统盘配置信息
 * @method void setSystemDisk(Disk $SystemDisk) 设置节点系统盘配置信息
 * @method InternetAccessible getInternetAccessible() 获取公网带宽相关信息设置
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置公网带宽相关信息设置
 * @method string getInstanceFamily() 获取机型所属机型族
 * @method void setInstanceFamily(string $InstanceFamily) 设置机型所属机型族
 * @method string getLanIP() 获取节点内网 IP
 * @method void setLanIP(string $LanIP) 设置节点内网 IP
 * @method string getInstanceType() 获取机型
 * @method void setInstanceType(string $InstanceType) 设置机型
 * @method string getExpiredTime() 获取包年包月节点计费过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredTime(string $ExpiredTime) 设置包年包月节点计费过期时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class Machine extends AbstractModel
{
    /**
     * @var string 节点名称
     */
    public $MachineName;

    /**
     * @var string Machine 状态
     */
    public $MachineState;

    /**
     * @var string Machine 所在可用区
     */
    public $Zone;

    /**
     * @var string 节点计费类型。PREPAID：包年包月；POSTPAID_BY_HOUR：按量计费（默认）；
     */
    public $InstanceChargeType;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string Machine 登录状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoginStatus;

    /**
     * @var boolean 是否开启缩容保护
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsProtectedFromScaleIn;

    /**
     * @var string Machine 名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var integer CPU核数，单位：核
     */
    public $CPU;

    /**
     * @var integer GPU核数，单位：核
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GPU;

    /**
     * @var string 自动续费标识
     */
    public $RenewFlag;

    /**
     * @var string 节点计费模式（已弃用）
     */
    public $PayMode;

    /**
     * @var integer 节点内存容量，单位：`GB`
     */
    public $Memory;

    /**
     * @var Disk 节点系统盘配置信息
     */
    public $SystemDisk;

    /**
     * @var InternetAccessible 公网带宽相关信息设置
     */
    public $InternetAccessible;

    /**
     * @var string 机型所属机型族
     */
    public $InstanceFamily;

    /**
     * @var string 节点内网 IP
     */
    public $LanIP;

    /**
     * @var string 机型
     */
    public $InstanceType;

    /**
     * @var string 包年包月节点计费过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredTime;

    /**
     * @param string $MachineName 节点名称
     * @param string $MachineState Machine 状态
     * @param string $Zone Machine 所在可用区
     * @param string $InstanceChargeType 节点计费类型。PREPAID：包年包月；POSTPAID_BY_HOUR：按量计费（默认）；
     * @param string $CreatedAt 创建时间
     * @param string $LoginStatus Machine 登录状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsProtectedFromScaleIn 是否开启缩容保护
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName Machine 名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CPU CPU核数，单位：核
     * @param integer $GPU GPU核数，单位：核
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RenewFlag 自动续费标识
     * @param string $PayMode 节点计费模式（已弃用）
     * @param integer $Memory 节点内存容量，单位：`GB`
     * @param Disk $SystemDisk 节点系统盘配置信息
     * @param InternetAccessible $InternetAccessible 公网带宽相关信息设置
     * @param string $InstanceFamily 机型所属机型族
     * @param string $LanIP 节点内网 IP
     * @param string $InstanceType 机型
     * @param string $ExpiredTime 包年包月节点计费过期时间
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
        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineState",$param) and $param["MachineState"] !== null) {
            $this->MachineState = $param["MachineState"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("LoginStatus",$param) and $param["LoginStatus"] !== null) {
            $this->LoginStatus = $param["LoginStatus"];
        }

        if (array_key_exists("IsProtectedFromScaleIn",$param) and $param["IsProtectedFromScaleIn"] !== null) {
            $this->IsProtectedFromScaleIn = $param["IsProtectedFromScaleIn"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("GPU",$param) and $param["GPU"] !== null) {
            $this->GPU = $param["GPU"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new Disk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("LanIP",$param) and $param["LanIP"] !== null) {
            $this->LanIP = $param["LanIP"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
