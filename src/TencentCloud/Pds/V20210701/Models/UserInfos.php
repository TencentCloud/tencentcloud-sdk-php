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
namespace TencentCloud\Pds\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户信息
 *
 * @method string getPhoneNum() 获取用户的手机号
 * @method void setPhoneNum(string $PhoneNum) 设置用户的手机号
 * @method string getOpenid() 获取用户的微信OpenID
 * @method void setOpenid(string $Openid) 设置用户的微信OpenID
 * @method string getIP() 获取用户移动设备的客户端IP
 * @method void setIP(string $IP) 设置用户移动设备的客户端IP
 * @method string getWiFiBssid() 获取用户WiFi的BSSID
 * @method void setWiFiBssid(string $WiFiBssid) 设置用户WiFi的BSSID
 * @method string getIMEI() 获取用户Android设备的IMEI
 * @method void setIMEI(string $IMEI) 设置用户Android设备的IMEI
 * @method string getOAID() 获取用户Android设备的OAID
 * @method void setOAID(string $OAID) 设置用户Android设备的OAID
 * @method string getIDFA() 获取用户iOS设备的IDFA
 * @method void setIDFA(string $IDFA) 设置用户iOS设备的IDFA
 */
class UserInfos extends AbstractModel
{
    /**
     * @var string 用户的手机号
     */
    public $PhoneNum;

    /**
     * @var string 用户的微信OpenID
     */
    public $Openid;

    /**
     * @var string 用户移动设备的客户端IP
     */
    public $IP;

    /**
     * @var string 用户WiFi的BSSID
     */
    public $WiFiBssid;

    /**
     * @var string 用户Android设备的IMEI
     */
    public $IMEI;

    /**
     * @var string 用户Android设备的OAID
     */
    public $OAID;

    /**
     * @var string 用户iOS设备的IDFA
     */
    public $IDFA;

    /**
     * @param string $PhoneNum 用户的手机号
     * @param string $Openid 用户的微信OpenID
     * @param string $IP 用户移动设备的客户端IP
     * @param string $WiFiBssid 用户WiFi的BSSID
     * @param string $IMEI 用户Android设备的IMEI
     * @param string $OAID 用户Android设备的OAID
     * @param string $IDFA 用户iOS设备的IDFA
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
        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("Openid",$param) and $param["Openid"] !== null) {
            $this->Openid = $param["Openid"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("WiFiBssid",$param) and $param["WiFiBssid"] !== null) {
            $this->WiFiBssid = $param["WiFiBssid"];
        }

        if (array_key_exists("IMEI",$param) and $param["IMEI"] !== null) {
            $this->IMEI = $param["IMEI"];
        }

        if (array_key_exists("OAID",$param) and $param["OAID"] !== null) {
            $this->OAID = $param["OAID"];
        }

        if (array_key_exists("IDFA",$param) and $param["IDFA"] !== null) {
            $this->IDFA = $param["IDFA"];
        }
    }
}
