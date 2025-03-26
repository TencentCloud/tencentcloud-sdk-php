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
namespace TencentCloud\Taf\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务入参
 *
 * @method integer getOsType() 获取设备操作平台  1：android
 * @method void setOsType(integer $OsType) 设置设备操作平台  1：android
 * @method integer getDeviceType() 获取设备类型  6: oaid_md5(32位小写)
 * @method void setDeviceType(integer $DeviceType) 设置设备类型  6: oaid_md5(32位小写)
 * @method string getDeviceId() 获取根据 DeviceType 填写设备标识
 * @method void setDeviceId(string $DeviceId) 设置根据 DeviceType 填写设备标识
 * @method string getClientIp() 获取用户ip，只支持ipv4
 * @method void setClientIp(string $ClientIp) 设置用户ip，只支持ipv4
 */
class ManageDeviceRiskInput extends AbstractModel
{
    /**
     * @var integer 设备操作平台  1：android
     */
    public $OsType;

    /**
     * @var integer 设备类型  6: oaid_md5(32位小写)
     */
    public $DeviceType;

    /**
     * @var string 根据 DeviceType 填写设备标识
     */
    public $DeviceId;

    /**
     * @var string 用户ip，只支持ipv4
     */
    public $ClientIp;

    /**
     * @param integer $OsType 设备操作平台  1：android
     * @param integer $DeviceType 设备类型  6: oaid_md5(32位小写)
     * @param string $DeviceId 根据 DeviceType 填写设备标识
     * @param string $ClientIp 用户ip，只支持ipv4
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
        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }
    }
}
