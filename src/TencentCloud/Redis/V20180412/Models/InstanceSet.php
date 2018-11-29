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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method integer getAppid() 获取用户的Appid
 * @method void setAppid(integer $Appid) 设置用户的Appid
 * @method integer getProjectId() 获取项目Id
 * @method void setProjectId(integer $ProjectId) 设置项目Id
 * @method integer getRegionId() 获取地域id 1--广州 4--上海 5-- 香港 6--多伦多 7--上海金融 8--北京 9-- 新加坡 11--深圳金融 15--美西（硅谷）16--成都 17--德国 18--韩国 19--重庆 21--印度 22--美东（弗吉尼亚）23--泰国 24--俄罗斯 25--日本
 * @method void setRegionId(integer $RegionId) 设置地域id 1--广州 4--上海 5-- 香港 6--多伦多 7--上海金融 8--北京 9-- 新加坡 11--深圳金融 15--美西（硅谷）16--成都 17--德国 18--韩国 19--重庆 21--印度 22--美东（弗吉尼亚）23--泰国 24--俄罗斯 25--日本
 * @method integer getZoneId() 获取区域id
 * @method void setZoneId(integer $ZoneId) 设置区域id
 * @method integer getVpcId() 获取vpc网络id 如：75101
 * @method void setVpcId(integer $VpcId) 设置vpc网络id 如：75101
 * @method integer getSubnetId() 获取vpc网络下子网id 如：46315
 * @method void setSubnetId(integer $SubnetId) 设置vpc网络下子网id 如：46315
 * @method integer getStatus() 获取实例当前状态，0：待初始化；1：实例在流程中；2：实例运行中；-2：实例已隔离；-3：实例待删除
 * @method void setStatus(integer $Status) 设置实例当前状态，0：待初始化；1：实例在流程中；2：实例运行中；-2：实例已隔离；-3：实例待删除
 * @method string getWanIp() 获取实例vip
 * @method void setWanIp(string $WanIp) 设置实例vip
 * @method integer getPort() 获取实例端口号
 * @method void setPort(integer $Port) 设置实例端口号
 * @method string getCreatetime() 获取实例创建时间
 * @method void setCreatetime(string $Createtime) 设置实例创建时间
 * @method float getSize() 获取实例容量大小，单位：MB
 * @method void setSize(float $Size) 设置实例容量大小，单位：MB
 * @method float getSizeUsed() 获取实例当前已使用容量，单位：MB
 * @method void setSizeUsed(float $SizeUsed) 设置实例当前已使用容量，单位：MB
 * @method integer getType() 获取实例类型，1：Redis2.8集群版；2：Redis2.8主从版；3：CKV主从版（Redis3.2）；4：CKV集群版（Redis3.2）；5：Redis2.8单机版；7：Redis4.0集群版；
 * @method void setType(integer $Type) 设置实例类型，1：Redis2.8集群版；2：Redis2.8主从版；3：CKV主从版（Redis3.2）；4：CKV集群版（Redis3.2）；5：Redis2.8单机版；7：Redis4.0集群版；
 * @method integer getAutoRenewFlag() 获取实例是否设置自动续费标识，1：设置自动续费；0：未设置自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置实例是否设置自动续费标识，1：设置自动续费；0：未设置自动续费
 * @method string getDeadlineTime() 获取实例到期时间
 * @method void setDeadlineTime(string $DeadlineTime) 设置实例到期时间
 * @method string getEngine() 获取引擎：社区版Redis、腾讯云CKV
 * @method void setEngine(string $Engine) 设置引擎：社区版Redis、腾讯云CKV
 * @method string getProductType() 获取产品类型：Redis2.8集群版、Redis2.8主从版、Redis3.2主从版（CKV主从版）、Redis3.2集群版（CKV集群版）、Redis2.8单机版、Redis4.0集群版
 * @method void setProductType(string $ProductType) 设置产品类型：Redis2.8集群版、Redis2.8主从版、Redis3.2主从版（CKV主从版）、Redis3.2集群版（CKV集群版）、Redis2.8单机版、Redis4.0集群版
 * @method string getUniqVpcId() 获取vpc网络id 如：vpc-fk33jsf43kgv
 * @method void setUniqVpcId(string $UniqVpcId) 设置vpc网络id 如：vpc-fk33jsf43kgv
 * @method string getUniqSubnetId() 获取vpc网络下子网id 如：subnet-fd3j6l35mm0
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置vpc网络下子网id 如：subnet-fd3j6l35mm0
 * @method integer getBillingMode() 获取计费模式：0-按量计费，1-包年包月
 * @method void setBillingMode(integer $BillingMode) 设置计费模式：0-按量计费，1-包年包月
 */

/**
 *实例详细信息列表
 */
class InstanceSet extends AbstractModel
{
    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var integer 用户的Appid
     */
    public $Appid;

    /**
     * @var integer 项目Id
     */
    public $ProjectId;

    /**
     * @var integer 地域id 1--广州 4--上海 5-- 香港 6--多伦多 7--上海金融 8--北京 9-- 新加坡 11--深圳金融 15--美西（硅谷）16--成都 17--德国 18--韩国 19--重庆 21--印度 22--美东（弗吉尼亚）23--泰国 24--俄罗斯 25--日本
     */
    public $RegionId;

    /**
     * @var integer 区域id
     */
    public $ZoneId;

    /**
     * @var integer vpc网络id 如：75101
     */
    public $VpcId;

    /**
     * @var integer vpc网络下子网id 如：46315
     */
    public $SubnetId;

    /**
     * @var integer 实例当前状态，0：待初始化；1：实例在流程中；2：实例运行中；-2：实例已隔离；-3：实例待删除
     */
    public $Status;

    /**
     * @var string 实例vip
     */
    public $WanIp;

    /**
     * @var integer 实例端口号
     */
    public $Port;

    /**
     * @var string 实例创建时间
     */
    public $Createtime;

    /**
     * @var float 实例容量大小，单位：MB
     */
    public $Size;

    /**
     * @var float 实例当前已使用容量，单位：MB
     */
    public $SizeUsed;

    /**
     * @var integer 实例类型，1：Redis2.8集群版；2：Redis2.8主从版；3：CKV主从版（Redis3.2）；4：CKV集群版（Redis3.2）；5：Redis2.8单机版；7：Redis4.0集群版；
     */
    public $Type;

    /**
     * @var integer 实例是否设置自动续费标识，1：设置自动续费；0：未设置自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var string 实例到期时间
     */
    public $DeadlineTime;

    /**
     * @var string 引擎：社区版Redis、腾讯云CKV
     */
    public $Engine;

    /**
     * @var string 产品类型：Redis2.8集群版、Redis2.8主从版、Redis3.2主从版（CKV主从版）、Redis3.2集群版（CKV集群版）、Redis2.8单机版、Redis4.0集群版
     */
    public $ProductType;

    /**
     * @var string vpc网络id 如：vpc-fk33jsf43kgv
     */
    public $UniqVpcId;

    /**
     * @var string vpc网络下子网id 如：subnet-fd3j6l35mm0
     */
    public $UniqSubnetId;

    /**
     * @var integer 计费模式：0-按量计费，1-包年包月
     */
    public $BillingMode;
    /**
     * @param string $InstanceName 实例名称
     * @param string $InstanceId 实例Id
     * @param integer $Appid 用户的Appid
     * @param integer $ProjectId 项目Id
     * @param integer $RegionId 地域id 1--广州 4--上海 5-- 香港 6--多伦多 7--上海金融 8--北京 9-- 新加坡 11--深圳金融 15--美西（硅谷）16--成都 17--德国 18--韩国 19--重庆 21--印度 22--美东（弗吉尼亚）23--泰国 24--俄罗斯 25--日本
     * @param integer $ZoneId 区域id
     * @param integer $VpcId vpc网络id 如：75101
     * @param integer $SubnetId vpc网络下子网id 如：46315
     * @param integer $Status 实例当前状态，0：待初始化；1：实例在流程中；2：实例运行中；-2：实例已隔离；-3：实例待删除
     * @param string $WanIp 实例vip
     * @param integer $Port 实例端口号
     * @param string $Createtime 实例创建时间
     * @param float $Size 实例容量大小，单位：MB
     * @param float $SizeUsed 实例当前已使用容量，单位：MB
     * @param integer $Type 实例类型，1：Redis2.8集群版；2：Redis2.8主从版；3：CKV主从版（Redis3.2）；4：CKV集群版（Redis3.2）；5：Redis2.8单机版；7：Redis4.0集群版；
     * @param integer $AutoRenewFlag 实例是否设置自动续费标识，1：设置自动续费；0：未设置自动续费
     * @param string $DeadlineTime 实例到期时间
     * @param string $Engine 引擎：社区版Redis、腾讯云CKV
     * @param string $ProductType 产品类型：Redis2.8集群版、Redis2.8主从版、Redis3.2主从版（CKV主从版）、Redis3.2集群版（CKV集群版）、Redis2.8单机版、Redis4.0集群版
     * @param string $UniqVpcId vpc网络id 如：vpc-fk33jsf43kgv
     * @param string $UniqSubnetId vpc网络下子网id 如：subnet-fd3j6l35mm0
     * @param integer $BillingMode 计费模式：0-按量计费，1-包年包月
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Createtime",$param) and $param["Createtime"] !== null) {
            $this->Createtime = $param["Createtime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("SizeUsed",$param) and $param["SizeUsed"] !== null) {
            $this->SizeUsed = $param["SizeUsed"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }
    }
}
