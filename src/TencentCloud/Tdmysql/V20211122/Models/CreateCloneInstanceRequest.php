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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloneInstance请求参数结构体
 *
 * @method string getZone() 获取<p>创建实例区域</p>
 * @method void setZone(string $Zone) 设置<p>创建实例区域</p>
 * @method string getVpcId() 获取<p>字符型vpcid</p>
 * @method void setVpcId(string $VpcId) 设置<p>字符型vpcid</p>
 * @method string getSubnetId() 获取<p>字符型subnetid</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>字符型subnetid</p>
 * @method string getSpecCode() 获取<p>购买规格</p>
 * @method void setSpecCode(string $SpecCode) 设置<p>购买规格</p>
 * @method integer getDisk() 获取<p>存储节点磁盘容量，单位GB</p>
 * @method void setDisk(integer $Disk) 设置<p>存储节点磁盘容量，单位GB</p>
 * @method integer getStorageNodeNum() 获取<p>存储节点数量</p>
 * @method void setStorageNodeNum(integer $StorageNodeNum) 设置<p>存储节点数量</p>
 * @method string getInstanceId() 获取<p>源实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>源实例id</p>
 * @method string getInstanceName() 获取<p>实例名称，要求长度1-60，允许包含中文、英文大小写、数字、-、_</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称，要求长度1-60，允许包含中文、英文大小写、数字、-、_</p>
 * @method array getResourceTags() 获取<p>标签键值对数组</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>标签键值对数组</p>
 * @method string getBackupName() 获取<p>备份回档名称</p>
 * @method void setBackupName(string $BackupName) 设置<p>备份回档名称</p>
 * @method integer getStorageNodeCpu() 获取<p>存储节点CPU核数</p>
 * @method void setStorageNodeCpu(integer $StorageNodeCpu) 设置<p>存储节点CPU核数</p>
 * @method integer getStorageNodeMem() 获取<p>存储节点内存大小</p>
 * @method void setStorageNodeMem(integer $StorageNodeMem) 设置<p>存储节点内存大小</p>
 * @method string getCreateVersion() 获取<p>创建版本</p>
 * @method void setCreateVersion(string $CreateVersion) 设置<p>创建版本</p>
 * @method integer getVport() 获取<p>创建端口号</p>
 * @method void setVport(integer $Vport) 设置<p>创建端口号</p>
 * @method string getRecoverTime() 获取<p>恢复时间点</p>
 * @method void setRecoverTime(string $RecoverTime) 设置<p>恢复时间点</p>
 * @method string getInstanceType() 获取<p>实例架构类型，separate:分离架构；hybrid:对等架构</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例架构类型，separate:分离架构；hybrid:对等架构</p>
 * @method string getStorageType() 获取<p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
 * @method void setStorageType(string $StorageType) 设置<p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
 * @method array getZones() 获取<p>多可用区列表，Zones[0]表示主可用区</p>
 * @method void setZones(array $Zones) 设置<p>多可用区列表，Zones[0]表示主可用区</p>
 * @method integer getFullReplications() 获取<p>全能型副本数</p>
 * @method void setFullReplications(integer $FullReplications) 设置<p>全能型副本数</p>
 * @method string getInstanceMode() 获取<p>实例模式，normal：标准型；enhanced:加强型</p>
 * @method void setInstanceMode(string $InstanceMode) 设置<p>实例模式，normal：标准型；enhanced:加强型</p>
 * @method array getSecurityGroupIds() 获取<p>安全组id列表</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>安全组id列表</p>
 */
class CreateCloneInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>创建实例区域</p>
     */
    public $Zone;

    /**
     * @var string <p>字符型vpcid</p>
     */
    public $VpcId;

    /**
     * @var string <p>字符型subnetid</p>
     */
    public $SubnetId;

    /**
     * @var string <p>购买规格</p>
     */
    public $SpecCode;

    /**
     * @var integer <p>存储节点磁盘容量，单位GB</p>
     */
    public $Disk;

    /**
     * @var integer <p>存储节点数量</p>
     */
    public $StorageNodeNum;

    /**
     * @var string <p>源实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称，要求长度1-60，允许包含中文、英文大小写、数字、-、_</p>
     */
    public $InstanceName;

    /**
     * @var array <p>标签键值对数组</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>备份回档名称</p>
     */
    public $BackupName;

    /**
     * @var integer <p>存储节点CPU核数</p>
     */
    public $StorageNodeCpu;

    /**
     * @var integer <p>存储节点内存大小</p>
     */
    public $StorageNodeMem;

    /**
     * @var string <p>创建版本</p>
     */
    public $CreateVersion;

    /**
     * @var integer <p>创建端口号</p>
     */
    public $Vport;

    /**
     * @var string <p>恢复时间点</p>
     */
    public $RecoverTime;

    /**
     * @var string <p>实例架构类型，separate:分离架构；hybrid:对等架构</p>
     */
    public $InstanceType;

    /**
     * @var string <p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
     */
    public $StorageType;

    /**
     * @var array <p>多可用区列表，Zones[0]表示主可用区</p>
     */
    public $Zones;

    /**
     * @var integer <p>全能型副本数</p>
     */
    public $FullReplications;

    /**
     * @var string <p>实例模式，normal：标准型；enhanced:加强型</p>
     */
    public $InstanceMode;

    /**
     * @var array <p>安全组id列表</p>
     */
    public $SecurityGroupIds;

    /**
     * @param string $Zone <p>创建实例区域</p>
     * @param string $VpcId <p>字符型vpcid</p>
     * @param string $SubnetId <p>字符型subnetid</p>
     * @param string $SpecCode <p>购买规格</p>
     * @param integer $Disk <p>存储节点磁盘容量，单位GB</p>
     * @param integer $StorageNodeNum <p>存储节点数量</p>
     * @param string $InstanceId <p>源实例id</p>
     * @param string $InstanceName <p>实例名称，要求长度1-60，允许包含中文、英文大小写、数字、-、_</p>
     * @param array $ResourceTags <p>标签键值对数组</p>
     * @param string $BackupName <p>备份回档名称</p>
     * @param integer $StorageNodeCpu <p>存储节点CPU核数</p>
     * @param integer $StorageNodeMem <p>存储节点内存大小</p>
     * @param string $CreateVersion <p>创建版本</p>
     * @param integer $Vport <p>创建端口号</p>
     * @param string $RecoverTime <p>恢复时间点</p>
     * @param string $InstanceType <p>实例架构类型，separate:分离架构；hybrid:对等架构</p>
     * @param string $StorageType <p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
     * @param array $Zones <p>多可用区列表，Zones[0]表示主可用区</p>
     * @param integer $FullReplications <p>全能型副本数</p>
     * @param string $InstanceMode <p>实例模式，normal：标准型；enhanced:加强型</p>
     * @param array $SecurityGroupIds <p>安全组id列表</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("StorageNodeNum",$param) and $param["StorageNodeNum"] !== null) {
            $this->StorageNodeNum = $param["StorageNodeNum"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("StorageNodeCpu",$param) and $param["StorageNodeCpu"] !== null) {
            $this->StorageNodeCpu = $param["StorageNodeCpu"];
        }

        if (array_key_exists("StorageNodeMem",$param) and $param["StorageNodeMem"] !== null) {
            $this->StorageNodeMem = $param["StorageNodeMem"];
        }

        if (array_key_exists("CreateVersion",$param) and $param["CreateVersion"] !== null) {
            $this->CreateVersion = $param["CreateVersion"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("RecoverTime",$param) and $param["RecoverTime"] !== null) {
            $this->RecoverTime = $param["RecoverTime"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("FullReplications",$param) and $param["FullReplications"] !== null) {
            $this->FullReplications = $param["FullReplications"];
        }

        if (array_key_exists("InstanceMode",$param) and $param["InstanceMode"] !== null) {
            $this->InstanceMode = $param["InstanceMode"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
