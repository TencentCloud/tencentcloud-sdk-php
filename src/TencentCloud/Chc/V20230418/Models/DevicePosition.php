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
 * 设备及位置信息
 *
 * @method string getSn() 获取设备SN
 * @method void setSn(string $Sn) 设置设备SN
 * @method string getRackName() 获取机架名称
 * @method void setRackName(string $RackName) 设置机架名称
 * @method integer getIdcUnitId() 获取机房管理单元ID
 * @method void setIdcUnitId(integer $IdcUnitId) 设置机房管理单元ID
 * @method string getIdcName() 获取机房名称
 * @method void setIdcName(string $IdcName) 设置机房名称
 * @method string getIdcUnitName() 获取机房管理单元名称
 * @method void setIdcUnitName(string $IdcUnitName) 设置机房管理单元名称
 * @method string getAssetId() 获取设备固资。只有服务器设备才需要这个值
 * @method void setAssetId(string $AssetId) 设置设备固资。只有服务器设备才需要这个值
 * @method integer getPositionCode() 获取机位编号，只有服务器设备才需要传这个值
 * @method void setPositionCode(integer $PositionCode) 设置机位编号，只有服务器设备才需要传这个值
 * @method string getDeviceType() 获取server 代表服务器，netDevice 代表网络设备
 * @method void setDeviceType(string $DeviceType) 设置server 代表服务器，netDevice 代表网络设备
 */
class DevicePosition extends AbstractModel
{
    /**
     * @var string 设备SN
     */
    public $Sn;

    /**
     * @var string 机架名称
     */
    public $RackName;

    /**
     * @var integer 机房管理单元ID
     */
    public $IdcUnitId;

    /**
     * @var string 机房名称
     */
    public $IdcName;

    /**
     * @var string 机房管理单元名称
     */
    public $IdcUnitName;

    /**
     * @var string 设备固资。只有服务器设备才需要这个值
     */
    public $AssetId;

    /**
     * @var integer 机位编号，只有服务器设备才需要传这个值
     */
    public $PositionCode;

    /**
     * @var string server 代表服务器，netDevice 代表网络设备
     */
    public $DeviceType;

    /**
     * @param string $Sn 设备SN
     * @param string $RackName 机架名称
     * @param integer $IdcUnitId 机房管理单元ID
     * @param string $IdcName 机房名称
     * @param string $IdcUnitName 机房管理单元名称
     * @param string $AssetId 设备固资。只有服务器设备才需要这个值
     * @param integer $PositionCode 机位编号，只有服务器设备才需要传这个值
     * @param string $DeviceType server 代表服务器，netDevice 代表网络设备
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

        if (array_key_exists("RackName",$param) and $param["RackName"] !== null) {
            $this->RackName = $param["RackName"];
        }

        if (array_key_exists("IdcUnitId",$param) and $param["IdcUnitId"] !== null) {
            $this->IdcUnitId = $param["IdcUnitId"];
        }

        if (array_key_exists("IdcName",$param) and $param["IdcName"] !== null) {
            $this->IdcName = $param["IdcName"];
        }

        if (array_key_exists("IdcUnitName",$param) and $param["IdcUnitName"] !== null) {
            $this->IdcUnitName = $param["IdcUnitName"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("PositionCode",$param) and $param["PositionCode"] !== null) {
            $this->PositionCode = $param["PositionCode"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}
