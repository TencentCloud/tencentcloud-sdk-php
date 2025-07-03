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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务器信息
 *
 * @method string getSn() 获取设备 SN 码
 * @method void setSn(string $Sn) 设置设备 SN 码
 * @method string getModelVersion() 获取设备型号版本
 * @method void setModelVersion(string $ModelVersion) 设置设备型号版本
 * @method string getAssetId() 获取设备固资号。只有设备类型为服务器时才返回
 * @method void setAssetId(string $AssetId) 设置设备固资号。只有设备类型为服务器时才返回
 * @method integer getSvrIsSpecial() 获取0 自有，1 租用。只有设备类型为服务器时才返回
 * @method void setSvrIsSpecial(integer $SvrIsSpecial) 设置0 自有，1 租用。只有设备类型为服务器时才返回
 * @method string getIp() 获取IP。
 * @method void setIp(string $Ip) 设置IP。
 * @method string getIdcName() 获取设备所属的机房名称
 * @method void setIdcName(string $IdcName) 设置设备所属的机房名称
 * @method integer getIdcId() 获取设备所属的机房ID
 * @method void setIdcId(integer $IdcId) 设置设备所属的机房ID
 * @method integer getIdcUnitId() 获取设备所属的机房管理单元ID
 * @method void setIdcUnitId(integer $IdcUnitId) 设置设备所属的机房管理单元ID
 * @method string getIdcUnitName() 获取设备所属的机房管理单元名称
 * @method void setIdcUnitName(string $IdcUnitName) 设置设备所属的机房管理单元名称
 * @method integer getRackId() 获取已上架设备所在的机架ID，未上架设备不返回
 * @method void setRackId(integer $RackId) 设置已上架设备所在的机架ID，未上架设备不返回
 * @method integer getServerTypeId() 获取服务器类型， 1 代表服务器， 7 代表 2U4S。只有设备类型为服务器时才返回
 * @method void setServerTypeId(integer $ServerTypeId) 设置服务器类型， 1 代表服务器， 7 代表 2U4S。只有设备类型为服务器时才返回
 * @method string getRackName() 获取已上架设备所在的机架名称，未上架设备不返回
 * @method void setRackName(string $RackName) 设置已上架设备所在的机架名称，未上架设备不返回
 * @method integer getPositionCode() 获取已上架设备所在的机位编号，未上架设备不返回。只有设备类型为服务器时才返回
 * @method void setPositionCode(integer $PositionCode) 设置已上架设备所在的机位编号，未上架设备不返回。只有设备类型为服务器时才返回
 * @method string getStatus() 获取设备状态：POWER_ON 已开电 POWER_OFF 未开电 RACK_OFF 未上架 MOVING 搬迁中
 * @method void setStatus(string $Status) 设置设备状态：POWER_ON 已开电 POWER_OFF 未开电 RACK_OFF 未上架 MOVING 搬迁中
 * @method string getPowerOnTime() 获取设备最近一次的开电时间，YYYY-MM-DD 格式。
 * @method void setPowerOnTime(string $PowerOnTime) 设置设备最近一次的开电时间，YYYY-MM-DD 格式。
 * @method string getOnshelfDate() 获取设备最近一次的上架时间，YYYY-MM-DD 格式。
 * @method void setOnshelfDate(string $OnshelfDate) 设置设备最近一次的上架时间，YYYY-MM-DD 格式。
 * @method string getDeviceType() 获取设备类型 server 服务器，netDevice 网络设备
 * @method void setDeviceType(string $DeviceType) 设置设备类型 server 服务器，netDevice 网络设备
 * @method string getManufacturer() 获取厂商
 * @method void setManufacturer(string $Manufacturer) 设置厂商
 * @method string getTypeName() 获取其他设备-设备子类型
 * @method void setTypeName(string $TypeName) 设置其他设备-设备子类型
 * @method string getHardwareMemo() 获取硬件备注
 * @method void setHardwareMemo(string $HardwareMemo) 设置硬件备注
 */
class Device extends AbstractModel
{
    /**
     * @var string 设备 SN 码
     */
    public $Sn;

    /**
     * @var string 设备型号版本
     */
    public $ModelVersion;

    /**
     * @var string 设备固资号。只有设备类型为服务器时才返回
     */
    public $AssetId;

    /**
     * @var integer 0 自有，1 租用。只有设备类型为服务器时才返回
     */
    public $SvrIsSpecial;

    /**
     * @var string IP。
     */
    public $Ip;

    /**
     * @var string 设备所属的机房名称
     */
    public $IdcName;

    /**
     * @var integer 设备所属的机房ID
     */
    public $IdcId;

    /**
     * @var integer 设备所属的机房管理单元ID
     */
    public $IdcUnitId;

    /**
     * @var string 设备所属的机房管理单元名称
     */
    public $IdcUnitName;

    /**
     * @var integer 已上架设备所在的机架ID，未上架设备不返回
     */
    public $RackId;

    /**
     * @var integer 服务器类型， 1 代表服务器， 7 代表 2U4S。只有设备类型为服务器时才返回
     */
    public $ServerTypeId;

    /**
     * @var string 已上架设备所在的机架名称，未上架设备不返回
     */
    public $RackName;

    /**
     * @var integer 已上架设备所在的机位编号，未上架设备不返回。只有设备类型为服务器时才返回
     */
    public $PositionCode;

    /**
     * @var string 设备状态：POWER_ON 已开电 POWER_OFF 未开电 RACK_OFF 未上架 MOVING 搬迁中
     */
    public $Status;

    /**
     * @var string 设备最近一次的开电时间，YYYY-MM-DD 格式。
     */
    public $PowerOnTime;

    /**
     * @var string 设备最近一次的上架时间，YYYY-MM-DD 格式。
     */
    public $OnshelfDate;

    /**
     * @var string 设备类型 server 服务器，netDevice 网络设备
     */
    public $DeviceType;

    /**
     * @var string 厂商
     */
    public $Manufacturer;

    /**
     * @var string 其他设备-设备子类型
     */
    public $TypeName;

    /**
     * @var string 硬件备注
     */
    public $HardwareMemo;

    /**
     * @param string $Sn 设备 SN 码
     * @param string $ModelVersion 设备型号版本
     * @param string $AssetId 设备固资号。只有设备类型为服务器时才返回
     * @param integer $SvrIsSpecial 0 自有，1 租用。只有设备类型为服务器时才返回
     * @param string $Ip IP。
     * @param string $IdcName 设备所属的机房名称
     * @param integer $IdcId 设备所属的机房ID
     * @param integer $IdcUnitId 设备所属的机房管理单元ID
     * @param string $IdcUnitName 设备所属的机房管理单元名称
     * @param integer $RackId 已上架设备所在的机架ID，未上架设备不返回
     * @param integer $ServerTypeId 服务器类型， 1 代表服务器， 7 代表 2U4S。只有设备类型为服务器时才返回
     * @param string $RackName 已上架设备所在的机架名称，未上架设备不返回
     * @param integer $PositionCode 已上架设备所在的机位编号，未上架设备不返回。只有设备类型为服务器时才返回
     * @param string $Status 设备状态：POWER_ON 已开电 POWER_OFF 未开电 RACK_OFF 未上架 MOVING 搬迁中
     * @param string $PowerOnTime 设备最近一次的开电时间，YYYY-MM-DD 格式。
     * @param string $OnshelfDate 设备最近一次的上架时间，YYYY-MM-DD 格式。
     * @param string $DeviceType 设备类型 server 服务器，netDevice 网络设备
     * @param string $Manufacturer 厂商
     * @param string $TypeName 其他设备-设备子类型
     * @param string $HardwareMemo 硬件备注
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
        if (array_key_exists("Sn",$param) and $param["Sn"] !== null) {
            $this->Sn = $param["Sn"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("SvrIsSpecial",$param) and $param["SvrIsSpecial"] !== null) {
            $this->SvrIsSpecial = $param["SvrIsSpecial"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("IdcName",$param) and $param["IdcName"] !== null) {
            $this->IdcName = $param["IdcName"];
        }

        if (array_key_exists("IdcId",$param) and $param["IdcId"] !== null) {
            $this->IdcId = $param["IdcId"];
        }

        if (array_key_exists("IdcUnitId",$param) and $param["IdcUnitId"] !== null) {
            $this->IdcUnitId = $param["IdcUnitId"];
        }

        if (array_key_exists("IdcUnitName",$param) and $param["IdcUnitName"] !== null) {
            $this->IdcUnitName = $param["IdcUnitName"];
        }

        if (array_key_exists("RackId",$param) and $param["RackId"] !== null) {
            $this->RackId = $param["RackId"];
        }

        if (array_key_exists("ServerTypeId",$param) and $param["ServerTypeId"] !== null) {
            $this->ServerTypeId = $param["ServerTypeId"];
        }

        if (array_key_exists("RackName",$param) and $param["RackName"] !== null) {
            $this->RackName = $param["RackName"];
        }

        if (array_key_exists("PositionCode",$param) and $param["PositionCode"] !== null) {
            $this->PositionCode = $param["PositionCode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PowerOnTime",$param) and $param["PowerOnTime"] !== null) {
            $this->PowerOnTime = $param["PowerOnTime"];
        }

        if (array_key_exists("OnshelfDate",$param) and $param["OnshelfDate"] !== null) {
            $this->OnshelfDate = $param["OnshelfDate"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("HardwareMemo",$param) and $param["HardwareMemo"] !== null) {
            $this->HardwareMemo = $param["HardwareMemo"];
        }
    }
}
