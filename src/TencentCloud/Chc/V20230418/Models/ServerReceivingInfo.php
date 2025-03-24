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
 * 服务器收货信息
 *
 * @method string getDeviceSn() 获取设备sn
 * @method void setDeviceSn(string $DeviceSn) 设置设备sn
 * @method string getModelVersion() 获取设备型号-版本
 * @method void setModelVersion(string $ModelVersion) 设置设备型号-版本
 * @method string getNeed10GbSlot() 获取需要万兆机位
 * @method void setNeed10GbSlot(string $Need10GbSlot) 设置需要万兆机位
 * @method string getNeedDCPower() 获取需要直流电
 * @method void setNeedDCPower(string $NeedDCPower) 设置需要直流电
 * @method string getNeedExtranet() 获取需要外网
 * @method void setNeedExtranet(string $NeedExtranet) 设置需要外网
 * @method string getNeedVirtualization() 获取需要虚拟化
 * @method void setNeedVirtualization(string $NeedVirtualization) 设置需要虚拟化
 * @method string getHardwareMemo() 获取硬件备注
 * @method void setHardwareMemo(string $HardwareMemo) 设置硬件备注
 */
class ServerReceivingInfo extends AbstractModel
{
    /**
     * @var string 设备sn
     */
    public $DeviceSn;

    /**
     * @var string 设备型号-版本
     */
    public $ModelVersion;

    /**
     * @var string 需要万兆机位
     */
    public $Need10GbSlot;

    /**
     * @var string 需要直流电
     */
    public $NeedDCPower;

    /**
     * @var string 需要外网
     */
    public $NeedExtranet;

    /**
     * @var string 需要虚拟化
     */
    public $NeedVirtualization;

    /**
     * @var string 硬件备注
     */
    public $HardwareMemo;

    /**
     * @param string $DeviceSn 设备sn
     * @param string $ModelVersion 设备型号-版本
     * @param string $Need10GbSlot 需要万兆机位
     * @param string $NeedDCPower 需要直流电
     * @param string $NeedExtranet 需要外网
     * @param string $NeedVirtualization 需要虚拟化
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
        if (array_key_exists("DeviceSn",$param) and $param["DeviceSn"] !== null) {
            $this->DeviceSn = $param["DeviceSn"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("Need10GbSlot",$param) and $param["Need10GbSlot"] !== null) {
            $this->Need10GbSlot = $param["Need10GbSlot"];
        }

        if (array_key_exists("NeedDCPower",$param) and $param["NeedDCPower"] !== null) {
            $this->NeedDCPower = $param["NeedDCPower"];
        }

        if (array_key_exists("NeedExtranet",$param) and $param["NeedExtranet"] !== null) {
            $this->NeedExtranet = $param["NeedExtranet"];
        }

        if (array_key_exists("NeedVirtualization",$param) and $param["NeedVirtualization"] !== null) {
            $this->NeedVirtualization = $param["NeedVirtualization"];
        }

        if (array_key_exists("HardwareMemo",$param) and $param["HardwareMemo"] !== null) {
            $this->HardwareMemo = $param["HardwareMemo"];
        }
    }
}
