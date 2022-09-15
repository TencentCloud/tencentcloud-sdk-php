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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备详细信息
 *
 * @method string getDeviceName() 获取设备名
 * @method void setDeviceName(string $DeviceName) 设置设备名
 * @method integer getOnline() 获取设备是否在线，0不在线，1在线，2获取失败，3未激活
 * @method void setOnline(integer $Online) 设置设备是否在线，0不在线，1在线，2获取失败，3未激活
 * @method integer getLoginTime() 获取设备最后上线时间
 * @method void setLoginTime(integer $LoginTime) 设置设备最后上线时间
 * @method string getDevicePsk() 获取设备密钥
 * @method void setDevicePsk(string $DevicePsk) 设置设备密钥
 * @method integer getEnableState() 获取设备启用状态 0为停用 1为可用
 * @method void setEnableState(integer $EnableState) 设置设备启用状态 0为停用 1为可用
 * @method integer getExpireTime() 获取设备过期时间
 * @method void setExpireTime(integer $ExpireTime) 设置设备过期时间
 */
class DeviceInfo extends AbstractModel
{
    /**
     * @var string 设备名
     */
    public $DeviceName;

    /**
     * @var integer 设备是否在线，0不在线，1在线，2获取失败，3未激活
     */
    public $Online;

    /**
     * @var integer 设备最后上线时间
     */
    public $LoginTime;

    /**
     * @var string 设备密钥
     */
    public $DevicePsk;

    /**
     * @var integer 设备启用状态 0为停用 1为可用
     */
    public $EnableState;

    /**
     * @var integer 设备过期时间
     */
    public $ExpireTime;

    /**
     * @param string $DeviceName 设备名
     * @param integer $Online 设备是否在线，0不在线，1在线，2获取失败，3未激活
     * @param integer $LoginTime 设备最后上线时间
     * @param string $DevicePsk 设备密钥
     * @param integer $EnableState 设备启用状态 0为停用 1为可用
     * @param integer $ExpireTime 设备过期时间
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }

        if (array_key_exists("DevicePsk",$param) and $param["DevicePsk"] !== null) {
            $this->DevicePsk = $param["DevicePsk"];
        }

        if (array_key_exists("EnableState",$param) and $param["EnableState"] !== null) {
            $this->EnableState = $param["EnableState"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
