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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建cvm参数
 *
 * @method string getSourceInstanceId() 获取源CVM ID
 * @method void setSourceInstanceId(string $SourceInstanceId) 设置源CVM ID
 * @method string getInstanceChargeType() 获取实例计费模式
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费模式
 * @method Placement getPlacement() 获取实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
 * @method void setPlacement(Placement $Placement) 设置实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
 * @method string getImageId() 获取镜像ID
 * @method void setImageId(string $ImageId) 设置镜像ID
 * @method DiskModel getSystemDisk() 获取指定系统盘规格
 * @method void setSystemDisk(DiskModel $SystemDisk) 设置指定系统盘规格
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method array getDataDisks() 获取指定数据盘规格列表
 * @method void setDataDisks(array $DataDisks) 设置指定数据盘规格列表
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取私有网络相关信息配置
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置私有网络相关信息配置
 * @method InternetAccessible getInternetAccessible() 获取公网带宽相关信息设置
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置公网带宽相关信息设置
 * @method string getInstanceName() 获取实例显示名称。不传则新实例名为"未命名"。最大长度不能超60个字节。
 * @method void setInstanceName(string $InstanceName) 设置实例显示名称。不传则新实例名为"未命名"。最大长度不能超60个字节。
 * @method LoginSettings getLoginSettings() 获取实例登录设置
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置实例登录设置
 * @method EnhancedService getEnhancedService() 获取增强服务配置
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置增强服务配置
 * @method string getSpotPrice() 获取竞价实例最高出价
 * @method void setSpotPrice(string $SpotPrice) 设置竞价实例最高出价
 * @method string getHostName() 获取实例主机名
 * @method void setHostName(string $HostName) 设置实例主机名
 * @method string getUserData() 获取提供给实例使用的用户数据
 * @method void setUserData(string $UserData) 设置提供给实例使用的用户数据
 * @method array getDisasterRecoverGroupIds() 获取放置群组ID
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置放置群组ID
 * @method string getStoppedMode() 获取关机计费模式，默认关机收费（KEEP_CHARGING / STOP_CHARGING），仅 CreateInstanceCopyPair 场景生效
 * @method void setStoppedMode(string $StoppedMode) 设置关机计费模式，默认关机收费（KEEP_CHARGING / STOP_CHARGING），仅 CreateInstanceCopyPair 场景生效
 * @method string getCopyPairId() 获取容灾演练使用的复制对ID，仅 CreateInstanceDrillPairs 场景生效
 * @method void setCopyPairId(string $CopyPairId) 设置容灾演练使用的复制对ID，仅 CreateInstanceDrillPairs 场景生效
 * @method string getRecoveryTime() 获取容灾演练的恢复时间点，仅 CreateInstanceDrillPairs 场景生效
 * @method void setRecoveryTime(string $RecoveryTime) 设置容灾演练的恢复时间点，仅 CreateInstanceDrillPairs 场景生效
 */
class CreateInstanceModel extends AbstractModel
{
    /**
     * @var string 源CVM ID
     */
    public $SourceInstanceId;

    /**
     * @var string 实例计费模式
     */
    public $InstanceChargeType;

    /**
     * @var Placement 实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
     */
    public $Placement;

    /**
     * @var string 镜像ID
     */
    public $ImageId;

    /**
     * @var DiskModel 指定系统盘规格
     */
    public $SystemDisk;

    /**
     * @var InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     */
    public $InstanceChargePrepaid;

    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var array 指定数据盘规格列表
     */
    public $DataDisks;

    /**
     * @var VirtualPrivateCloud 私有网络相关信息配置
     */
    public $VirtualPrivateCloud;

    /**
     * @var InternetAccessible 公网带宽相关信息设置
     */
    public $InternetAccessible;

    /**
     * @var string 实例显示名称。不传则新实例名为"未命名"。最大长度不能超60个字节。
     */
    public $InstanceName;

    /**
     * @var LoginSettings 实例登录设置
     */
    public $LoginSettings;

    /**
     * @var EnhancedService 增强服务配置
     */
    public $EnhancedService;

    /**
     * @var string 竞价实例最高出价
     */
    public $SpotPrice;

    /**
     * @var string 实例主机名
     */
    public $HostName;

    /**
     * @var string 提供给实例使用的用户数据
     */
    public $UserData;

    /**
     * @var array 放置群组ID
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var string 关机计费模式，默认关机收费（KEEP_CHARGING / STOP_CHARGING），仅 CreateInstanceCopyPair 场景生效
     */
    public $StoppedMode;

    /**
     * @var string 容灾演练使用的复制对ID，仅 CreateInstanceDrillPairs 场景生效
     */
    public $CopyPairId;

    /**
     * @var string 容灾演练的恢复时间点，仅 CreateInstanceDrillPairs 场景生效
     */
    public $RecoveryTime;

    /**
     * @param string $SourceInstanceId 源CVM ID
     * @param string $InstanceChargeType 实例计费模式
     * @param Placement $Placement 实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
     * @param string $ImageId 镜像ID
     * @param DiskModel $SystemDisk 指定系统盘规格
     * @param InstanceChargePrepaid $InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     * @param string $InstanceType 实例类型
     * @param array $DataDisks 指定数据盘规格列表
     * @param VirtualPrivateCloud $VirtualPrivateCloud 私有网络相关信息配置
     * @param InternetAccessible $InternetAccessible 公网带宽相关信息设置
     * @param string $InstanceName 实例显示名称。不传则新实例名为"未命名"。最大长度不能超60个字节。
     * @param LoginSettings $LoginSettings 实例登录设置
     * @param EnhancedService $EnhancedService 增强服务配置
     * @param string $SpotPrice 竞价实例最高出价
     * @param string $HostName 实例主机名
     * @param string $UserData 提供给实例使用的用户数据
     * @param array $DisasterRecoverGroupIds 放置群组ID
     * @param string $StoppedMode 关机计费模式，默认关机收费（KEEP_CHARGING / STOP_CHARGING），仅 CreateInstanceCopyPair 场景生效
     * @param string $CopyPairId 容灾演练使用的复制对ID，仅 CreateInstanceDrillPairs 场景生效
     * @param string $RecoveryTime 容灾演练的恢复时间点，仅 CreateInstanceDrillPairs 场景生效
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
        if (array_key_exists("SourceInstanceId",$param) and $param["SourceInstanceId"] !== null) {
            $this->SourceInstanceId = $param["SourceInstanceId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new DiskModel();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DiskModel();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("SpotPrice",$param) and $param["SpotPrice"] !== null) {
            $this->SpotPrice = $param["SpotPrice"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("StoppedMode",$param) and $param["StoppedMode"] !== null) {
            $this->StoppedMode = $param["StoppedMode"];
        }

        if (array_key_exists("CopyPairId",$param) and $param["CopyPairId"] !== null) {
            $this->CopyPairId = $param["CopyPairId"];
        }

        if (array_key_exists("RecoveryTime",$param) and $param["RecoveryTime"] !== null) {
            $this->RecoveryTime = $param["RecoveryTime"];
        }
    }
}
