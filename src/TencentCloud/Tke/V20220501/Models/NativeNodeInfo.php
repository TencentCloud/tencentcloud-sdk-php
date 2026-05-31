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
 * @method string getMachineName() 获取<p>节点名称</p>
 * @method void setMachineName(string $MachineName) 设置<p>节点名称</p>
 * @method string getMachineState() 获取<p>Machine 状态</p>
 * @method void setMachineState(string $MachineState) 设置<p>Machine 状态</p>
 * @method string getZone() 获取<p>Machine 所在可用区</p>
 * @method void setZone(string $Zone) 设置<p>Machine 所在可用区</p>
 * @method string getInstanceChargeType() 获取<p>节点计费类型。PREPAID：包年包月；POSTPAID_BY_HOUR：按量计费（默认）；</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>节点计费类型。PREPAID：包年包月；POSTPAID_BY_HOUR：按量计费（默认）；</p>
 * @method string getCreatedAt() 获取<p>创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
 * @method string getLoginStatus() 获取<p>Machine 登录状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoginStatus(string $LoginStatus) 设置<p>Machine 登录状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsProtectedFromScaleIn() 获取<p>是否开启缩容保护</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsProtectedFromScaleIn(boolean $IsProtectedFromScaleIn) 设置<p>是否开启缩容保护</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取<p>Machine 名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置<p>Machine 名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCPU() 获取<p>CPU核数，单位：核</p>
 * @method void setCPU(integer $CPU) 设置<p>CPU核数，单位：核</p>
 * @method integer getGPU() 获取<p>GPU核数，单位：核</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGPU(integer $GPU) 设置<p>GPU核数，单位：核</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRenewFlag() 获取<p>自动续费标识</p>
 * @method void setRenewFlag(string $RenewFlag) 设置<p>自动续费标识</p>
 * @method string getPayMode() 获取<p>节点计费模式</p>
 * @method void setPayMode(string $PayMode) 设置<p>节点计费模式</p>
 * @method integer getMemory() 获取<p>节点内存容量，单位：<code>GB</code></p>
 * @method void setMemory(integer $Memory) 设置<p>节点内存容量，单位：<code>GB</code></p>
 * @method Disk getSystemDisk() 获取<p>节点系统盘配置信息</p>
 * @method void setSystemDisk(Disk $SystemDisk) 设置<p>节点系统盘配置信息</p>
 * @method InternetAccessible getInternetAccessible() 获取<p>公网带宽相关信息设置</p>
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置<p>公网带宽相关信息设置</p>
 * @method string getInstanceFamily() 获取<p>机型所属机型族</p>
 * @method void setInstanceFamily(string $InstanceFamily) 设置<p>机型所属机型族</p>
 * @method string getLanIp() 获取<p>节点内网 IP</p>
 * @method void setLanIp(string $LanIp) 设置<p>节点内网 IP</p>
 * @method string getInstanceType() 获取<p>机型</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>机型</p>
 * @method string getExpiredTime() 获取<p>包年包月节点计费过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredTime(string $ExpiredTime) 设置<p>包年包月节点计费过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWanIp() 获取<p>节点外网 IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanIp(string $WanIp) 设置<p>节点外网 IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeyIds() 获取<p>节点密钥 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyIds(array $KeyIds) 设置<p>节点密钥 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method GPUParams getGPUParams() 获取<p>节点GPU相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGPUParams(GPUParams $GPUParams) 设置<p>节点GPU相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataDisks() 获取<p>数据盘列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDisks(array $DataDisks) 设置<p>数据盘列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityGroupIDs() 获取<p>安全组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroupIDs(array $SecurityGroupIDs) 设置<p>安全组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取<p>VPC 唯一 ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC 唯一 ID</p>
 * @method string getSubnetId() 获取<p>子网唯一 ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网唯一 ID</p>
 * @method string getOsImage() 获取<p>OS的名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOsImage(string $OsImage) 设置<p>OS的名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachineType() 获取<p><strong>原生节点的 Machine 类型</strong></p><ul><li>Native 表示 CXM 类型的原生节点</li><li>NativeCVM 表示 CVM 类型的原生节点</li></ul>
 * @method void setMachineType(string $MachineType) 设置<p><strong>原生节点的 Machine 类型</strong></p><ul><li>Native 表示 CXM 类型的原生节点</li><li>NativeCVM 表示 CVM 类型的原生节点</li></ul>
 * @method string getInstanceId() 获取<p><strong>原生节点对应的实例 ID</strong></p><ul><li>ins-q47ofw6 表示这个实例是一个 CVM 的实例</li><li>eks-f8mvyaep 表示这个实例是一个 CXM 的实例</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置<p><strong>原生节点对应的实例 ID</strong></p><ul><li>ins-q47ofw6 表示这个实例是一个 CVM 的实例</li><li>eks-f8mvyaep 表示这个实例是一个 CXM 的实例</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>原生节点云标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>原生节点云标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class NativeNodeInfo extends AbstractModel
{
    /**
     * @var string <p>节点名称</p>
     */
    public $MachineName;

    /**
     * @var string <p>Machine 状态</p>
     */
    public $MachineState;

    /**
     * @var string <p>Machine 所在可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>节点计费类型。PREPAID：包年包月；POSTPAID_BY_HOUR：按量计费（默认）；</p>
     */
    public $InstanceChargeType;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>Machine 登录状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoginStatus;

    /**
     * @var boolean <p>是否开启缩容保护</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsProtectedFromScaleIn;

    /**
     * @var string <p>Machine 名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var integer <p>CPU核数，单位：核</p>
     */
    public $CPU;

    /**
     * @var integer <p>GPU核数，单位：核</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GPU;

    /**
     * @var string <p>自动续费标识</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>节点计费模式</p>
     */
    public $PayMode;

    /**
     * @var integer <p>节点内存容量，单位：<code>GB</code></p>
     */
    public $Memory;

    /**
     * @var Disk <p>节点系统盘配置信息</p>
     */
    public $SystemDisk;

    /**
     * @var InternetAccessible <p>公网带宽相关信息设置</p>
     */
    public $InternetAccessible;

    /**
     * @var string <p>机型所属机型族</p>
     */
    public $InstanceFamily;

    /**
     * @var string <p>节点内网 IP</p>
     */
    public $LanIp;

    /**
     * @var string <p>机型</p>
     */
    public $InstanceType;

    /**
     * @var string <p>包年包月节点计费过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredTime;

    /**
     * @var string <p>节点外网 IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanIp;

    /**
     * @var array <p>节点密钥 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyIds;

    /**
     * @var GPUParams <p>节点GPU相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GPUParams;

    /**
     * @var array <p>数据盘列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDisks;

    /**
     * @var array <p>安全组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroupIDs;

    /**
     * @var string <p>VPC 唯一 ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网唯一 ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>OS的名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OsImage;

    /**
     * @var string <p><strong>原生节点的 Machine 类型</strong></p><ul><li>Native 表示 CXM 类型的原生节点</li><li>NativeCVM 表示 CVM 类型的原生节点</li></ul>
     */
    public $MachineType;

    /**
     * @var string <p><strong>原生节点对应的实例 ID</strong></p><ul><li>ins-q47ofw6 表示这个实例是一个 CVM 的实例</li><li>eks-f8mvyaep 表示这个实例是一个 CXM 的实例</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var array <p>原生节点云标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $MachineName <p>节点名称</p>
     * @param string $MachineState <p>Machine 状态</p>
     * @param string $Zone <p>Machine 所在可用区</p>
     * @param string $InstanceChargeType <p>节点计费类型。PREPAID：包年包月；POSTPAID_BY_HOUR：按量计费（默认）；</p>
     * @param string $CreatedAt <p>创建时间</p>
     * @param string $LoginStatus <p>Machine 登录状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsProtectedFromScaleIn <p>是否开启缩容保护</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName <p>Machine 名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CPU <p>CPU核数，单位：核</p>
     * @param integer $GPU <p>GPU核数，单位：核</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RenewFlag <p>自动续费标识</p>
     * @param string $PayMode <p>节点计费模式</p>
     * @param integer $Memory <p>节点内存容量，单位：<code>GB</code></p>
     * @param Disk $SystemDisk <p>节点系统盘配置信息</p>
     * @param InternetAccessible $InternetAccessible <p>公网带宽相关信息设置</p>
     * @param string $InstanceFamily <p>机型所属机型族</p>
     * @param string $LanIp <p>节点内网 IP</p>
     * @param string $InstanceType <p>机型</p>
     * @param string $ExpiredTime <p>包年包月节点计费过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WanIp <p>节点外网 IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KeyIds <p>节点密钥 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param GPUParams $GPUParams <p>节点GPU相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataDisks <p>数据盘列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityGroupIDs <p>安全组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId <p>VPC 唯一 ID</p>
     * @param string $SubnetId <p>子网唯一 ID</p>
     * @param string $OsImage <p>OS的名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MachineType <p><strong>原生节点的 Machine 类型</strong></p><ul><li>Native 表示 CXM 类型的原生节点</li><li>NativeCVM 表示 CVM 类型的原生节点</li></ul>
     * @param string $InstanceId <p><strong>原生节点对应的实例 ID</strong></p><ul><li>ins-q47ofw6 表示这个实例是一个 CVM 的实例</li><li>eks-f8mvyaep 表示这个实例是一个 CXM 的实例</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>原生节点云标签</p>
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

        if (array_key_exists("LanIp",$param) and $param["LanIp"] !== null) {
            $this->LanIp = $param["LanIp"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }

        if (array_key_exists("GPUParams",$param) and $param["GPUParams"] !== null) {
            $this->GPUParams = new GPUParams();
            $this->GPUParams->deserialize($param["GPUParams"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("SecurityGroupIDs",$param) and $param["SecurityGroupIDs"] !== null) {
            $this->SecurityGroupIDs = $param["SecurityGroupIDs"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("OsImage",$param) and $param["OsImage"] !== null) {
            $this->OsImage = $param["OsImage"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
