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
 * CreateDBInstances请求参数结构体
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
 * @method integer getReplications() 获取<p>存储节点副本数量，最大为5，要求为奇数</p>
 * @method void setReplications(integer $Replications) 设置<p>存储节点副本数量，最大为5，要求为奇数</p>
 * @method integer getInstanceCount() 获取<p>创建实例个数，上限为10</p>
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>创建实例个数，上限为10</p>
 * @method integer getFullReplications() 获取<p>全能型副本数量</p>
 * @method void setFullReplications(integer $FullReplications) 设置<p>全能型副本数量</p>
 * @method string getCreateVersion() 获取<p>创建实例版本，默认使用当前最新版本</p>
 * @method void setCreateVersion(string $CreateVersion) 设置<p>创建实例版本，默认使用当前最新版本</p>
 * @method string getInstanceName() 获取<p>实例名称，要求长度1-60，允许包含中文、英文大小写、数字、-、_</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称，要求长度1-60，允许包含中文、英文大小写、数字、-、_</p>
 * @method array getResourceTags() 获取<p>标签键值对数组</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>标签键值对数组</p>
 * @method array getInitParams() 获取<p>初始化实例参数。比如：<br>character_set_server（字符集，默认为utf8），<br>lower_case_table_names（表名大小写敏感，0 - 敏感；1-不敏感，默认为0）</p>
 * @method void setInitParams(array $InitParams) 设置<p>初始化实例参数。比如：<br>character_set_server（字符集，默认为utf8），<br>lower_case_table_names（表名大小写敏感，0 - 敏感；1-不敏感，默认为0）</p>
 * @method string getTimeUnit() 获取<p>时间单位，m：月</p>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>时间单位，m：月</p>
 * @method integer getTimeSpan() 获取<p>商品的时间大小</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>商品的时间大小</p>
 * @method integer getStorageNodeCpu() 获取<p>存储节点CPU核数</p>
 * @method void setStorageNodeCpu(integer $StorageNodeCpu) 设置<p>存储节点CPU核数</p>
 * @method integer getStorageNodeMem() 获取<p>存储节点内存大小</p>
 * @method void setStorageNodeMem(integer $StorageNodeMem) 设置<p>存储节点内存大小</p>
 * @method string getPayMode() 获取<p>付费模式，0表示按需计费/后付费，1表示预付费</p>
 * @method void setPayMode(string $PayMode) 设置<p>付费模式，0表示按需计费/后付费，1表示预付费</p>
 * @method integer getMCNum() 获取<p>管控节点数量</p>
 * @method void setMCNum(integer $MCNum) 设置<p>管控节点数量</p>
 * @method integer getVport() 获取<p>自定义端口</p>
 * @method void setVport(integer $Vport) 设置<p>自定义端口</p>
 * @method array getZones() 获取<p>多AZ可用区列表</p>
 * @method void setZones(array $Zones) 设置<p>多AZ可用区列表</p>
 * @method boolean getAutoVoucher() 获取<p>是否使用优惠卷</p>
 * @method void setAutoVoucher(boolean $AutoVoucher) 设置<p>是否使用优惠卷</p>
 * @method array getVoucherIds() 获取<p>优惠卷列表</p>
 * @method void setVoucherIds(array $VoucherIds) 设置<p>优惠卷列表</p>
 * @method string getInstanceType() 获取<p>实例架构类型，separate:分离架构；hybrid:对等架构</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例架构类型，separate:分离架构；hybrid:对等架构</p>
 * @method string getStorageType() 获取<p>磁盘类型,CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
 * @method void setStorageType(string $StorageType) 设置<p>磁盘类型,CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
 * @method integer getAZMode() 获取<p>AZ模式，1:单AZ，2:多AZ非主AZ，3:多AZ主AZ</p>
 * @method void setAZMode(integer $AZMode) 设置<p>AZ模式，1:单AZ，2:多AZ非主AZ，3:多AZ主AZ</p>
 * @method string getInstanceMode() 获取<p>实例模式</p>
 * @method void setInstanceMode(string $InstanceMode) 设置<p>实例模式</p>
 * @method string getTemplateId() 获取<p>参数模板id</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>参数模板id</p>
 * @method string getSQLMode() 获取<p>兼容模式，enum:MySQL,HBase</p>
 * @method void setSQLMode(string $SQLMode) 设置<p>兼容模式，enum:MySQL,HBase</p>
 * @method AutoScalingConfig getAutoScaleConfig() 获取<p>svls实例的ccu变配配置</p>
 * @method void setAutoScaleConfig(AutoScalingConfig $AutoScaleConfig) 设置<p>svls实例的ccu变配配置</p>
 * @method array getSecurityGroupIds() 获取<p>绑定安全组列表</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>绑定安全组列表</p>
 * @method string getUserName() 获取<p>root用户名,当前版本默认为dbaadmin，传值也会重置为dbaadmin</p>
 * @method void setUserName(string $UserName) 设置<p>root用户名,当前版本默认为dbaadmin，传值也会重置为dbaadmin</p>
 * @method string getPassword() 获取<p>dbaadmin密码</p>
 * @method void setPassword(string $Password) 设置<p>dbaadmin密码</p>
 * @method integer getEncryptionEnable() 获取<p>是否开启透明加密，0：不开启，1：开启</p>
 * @method void setEncryptionEnable(integer $EncryptionEnable) 设置<p>是否开启透明加密，0：不开启，1：开启</p>
 */
class CreateDBInstancesRequest extends AbstractModel
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
     * @var integer <p>存储节点副本数量，最大为5，要求为奇数</p>
     */
    public $Replications;

    /**
     * @var integer <p>创建实例个数，上限为10</p>
     */
    public $InstanceCount;

    /**
     * @var integer <p>全能型副本数量</p>
     */
    public $FullReplications;

    /**
     * @var string <p>创建实例版本，默认使用当前最新版本</p>
     */
    public $CreateVersion;

    /**
     * @var string <p>实例名称，要求长度1-60，允许包含中文、英文大小写、数字、-、_</p>
     */
    public $InstanceName;

    /**
     * @var array <p>标签键值对数组</p>
     */
    public $ResourceTags;

    /**
     * @var array <p>初始化实例参数。比如：<br>character_set_server（字符集，默认为utf8），<br>lower_case_table_names（表名大小写敏感，0 - 敏感；1-不敏感，默认为0）</p>
     */
    public $InitParams;

    /**
     * @var string <p>时间单位，m：月</p>
     */
    public $TimeUnit;

    /**
     * @var integer <p>商品的时间大小</p>
     */
    public $TimeSpan;

    /**
     * @var integer <p>存储节点CPU核数</p>
     */
    public $StorageNodeCpu;

    /**
     * @var integer <p>存储节点内存大小</p>
     */
    public $StorageNodeMem;

    /**
     * @var string <p>付费模式，0表示按需计费/后付费，1表示预付费</p>
     */
    public $PayMode;

    /**
     * @var integer <p>管控节点数量</p>
     */
    public $MCNum;

    /**
     * @var integer <p>自定义端口</p>
     */
    public $Vport;

    /**
     * @var array <p>多AZ可用区列表</p>
     */
    public $Zones;

    /**
     * @var boolean <p>是否使用优惠卷</p>
     */
    public $AutoVoucher;

    /**
     * @var array <p>优惠卷列表</p>
     */
    public $VoucherIds;

    /**
     * @var string <p>实例架构类型，separate:分离架构；hybrid:对等架构</p>
     */
    public $InstanceType;

    /**
     * @var string <p>磁盘类型,CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
     */
    public $StorageType;

    /**
     * @var integer <p>AZ模式，1:单AZ，2:多AZ非主AZ，3:多AZ主AZ</p>
     */
    public $AZMode;

    /**
     * @var string <p>实例模式</p>
     */
    public $InstanceMode;

    /**
     * @var string <p>参数模板id</p>
     */
    public $TemplateId;

    /**
     * @var string <p>兼容模式，enum:MySQL,HBase</p>
     */
    public $SQLMode;

    /**
     * @var AutoScalingConfig <p>svls实例的ccu变配配置</p>
     */
    public $AutoScaleConfig;

    /**
     * @var array <p>绑定安全组列表</p>
     */
    public $SecurityGroupIds;

    /**
     * @var string <p>root用户名,当前版本默认为dbaadmin，传值也会重置为dbaadmin</p>
     */
    public $UserName;

    /**
     * @var string <p>dbaadmin密码</p>
     */
    public $Password;

    /**
     * @var integer <p>是否开启透明加密，0：不开启，1：开启</p>
     */
    public $EncryptionEnable;

    /**
     * @param string $Zone <p>创建实例区域</p>
     * @param string $VpcId <p>字符型vpcid</p>
     * @param string $SubnetId <p>字符型subnetid</p>
     * @param string $SpecCode <p>购买规格</p>
     * @param integer $Disk <p>存储节点磁盘容量，单位GB</p>
     * @param integer $StorageNodeNum <p>存储节点数量</p>
     * @param integer $Replications <p>存储节点副本数量，最大为5，要求为奇数</p>
     * @param integer $InstanceCount <p>创建实例个数，上限为10</p>
     * @param integer $FullReplications <p>全能型副本数量</p>
     * @param string $CreateVersion <p>创建实例版本，默认使用当前最新版本</p>
     * @param string $InstanceName <p>实例名称，要求长度1-60，允许包含中文、英文大小写、数字、-、_</p>
     * @param array $ResourceTags <p>标签键值对数组</p>
     * @param array $InitParams <p>初始化实例参数。比如：<br>character_set_server（字符集，默认为utf8），<br>lower_case_table_names（表名大小写敏感，0 - 敏感；1-不敏感，默认为0）</p>
     * @param string $TimeUnit <p>时间单位，m：月</p>
     * @param integer $TimeSpan <p>商品的时间大小</p>
     * @param integer $StorageNodeCpu <p>存储节点CPU核数</p>
     * @param integer $StorageNodeMem <p>存储节点内存大小</p>
     * @param string $PayMode <p>付费模式，0表示按需计费/后付费，1表示预付费</p>
     * @param integer $MCNum <p>管控节点数量</p>
     * @param integer $Vport <p>自定义端口</p>
     * @param array $Zones <p>多AZ可用区列表</p>
     * @param boolean $AutoVoucher <p>是否使用优惠卷</p>
     * @param array $VoucherIds <p>优惠卷列表</p>
     * @param string $InstanceType <p>实例架构类型，separate:分离架构；hybrid:对等架构</p>
     * @param string $StorageType <p>磁盘类型,CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
     * @param integer $AZMode <p>AZ模式，1:单AZ，2:多AZ非主AZ，3:多AZ主AZ</p>
     * @param string $InstanceMode <p>实例模式</p>
     * @param string $TemplateId <p>参数模板id</p>
     * @param string $SQLMode <p>兼容模式，enum:MySQL,HBase</p>
     * @param AutoScalingConfig $AutoScaleConfig <p>svls实例的ccu变配配置</p>
     * @param array $SecurityGroupIds <p>绑定安全组列表</p>
     * @param string $UserName <p>root用户名,当前版本默认为dbaadmin，传值也会重置为dbaadmin</p>
     * @param string $Password <p>dbaadmin密码</p>
     * @param integer $EncryptionEnable <p>是否开启透明加密，0：不开启，1：开启</p>
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

        if (array_key_exists("Replications",$param) and $param["Replications"] !== null) {
            $this->Replications = $param["Replications"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("FullReplications",$param) and $param["FullReplications"] !== null) {
            $this->FullReplications = $param["FullReplications"];
        }

        if (array_key_exists("CreateVersion",$param) and $param["CreateVersion"] !== null) {
            $this->CreateVersion = $param["CreateVersion"];
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

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = [];
            foreach ($param["InitParams"] as $key => $value){
                $obj = new InstanceParam();
                $obj->deserialize($value);
                array_push($this->InitParams, $obj);
            }
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("StorageNodeCpu",$param) and $param["StorageNodeCpu"] !== null) {
            $this->StorageNodeCpu = $param["StorageNodeCpu"];
        }

        if (array_key_exists("StorageNodeMem",$param) and $param["StorageNodeMem"] !== null) {
            $this->StorageNodeMem = $param["StorageNodeMem"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("MCNum",$param) and $param["MCNum"] !== null) {
            $this->MCNum = $param["MCNum"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("AZMode",$param) and $param["AZMode"] !== null) {
            $this->AZMode = $param["AZMode"];
        }

        if (array_key_exists("InstanceMode",$param) and $param["InstanceMode"] !== null) {
            $this->InstanceMode = $param["InstanceMode"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("SQLMode",$param) and $param["SQLMode"] !== null) {
            $this->SQLMode = $param["SQLMode"];
        }

        if (array_key_exists("AutoScaleConfig",$param) and $param["AutoScaleConfig"] !== null) {
            $this->AutoScaleConfig = new AutoScalingConfig();
            $this->AutoScaleConfig->deserialize($param["AutoScaleConfig"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EncryptionEnable",$param) and $param["EncryptionEnable"] !== null) {
            $this->EncryptionEnable = $param["EncryptionEnable"];
        }
    }
}
