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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发送消息设备描述
 *
 * @method string getCIPType() 获取发表消息设备IP类型，0x0代表IP地址是ipv4，0x1代表是IPv6，默认为0，即IPv4。
 * @method void setCIPType(string $CIPType) 设置发表消息设备IP类型，0x0代表IP地址是ipv4，0x1代表是IPv6，默认为0，即IPv4。
 * @method string getStrMsgIP() 获取发表消息设备IPv4地址，没有可以为空字符串；
 * @method void setStrMsgIP(string $StrMsgIP) 设置发表消息设备IPv4地址，没有可以为空字符串；
 * @method string getStrMsgIPv6() 获取发表消息设备IPv6地址，没有可以为空字符串。
 * @method void setStrMsgIPv6(string $StrMsgIPv6) 设置发表消息设备IPv6地址，没有可以为空字符串。
 * @method integer getUiPostTime() 获取消息发表时间戳。
 * @method void setUiPostTime(integer $UiPostTime) 设置消息发表时间戳。
 */
class ContentMsgGjh extends AbstractModel
{
    /**
     * @var string 发表消息设备IP类型，0x0代表IP地址是ipv4，0x1代表是IPv6，默认为0，即IPv4。
     */
    public $CIPType;

    /**
     * @var string 发表消息设备IPv4地址，没有可以为空字符串；
     */
    public $StrMsgIP;

    /**
     * @var string 发表消息设备IPv6地址，没有可以为空字符串。
     */
    public $StrMsgIPv6;

    /**
     * @var integer 消息发表时间戳。
     */
    public $UiPostTime;

    /**
     * @param string $CIPType 发表消息设备IP类型，0x0代表IP地址是ipv4，0x1代表是IPv6，默认为0，即IPv4。
     * @param string $StrMsgIP 发表消息设备IPv4地址，没有可以为空字符串；
     * @param string $StrMsgIPv6 发表消息设备IPv6地址，没有可以为空字符串。
     * @param integer $UiPostTime 消息发表时间戳。
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
        if (array_key_exists("CIPType",$param) and $param["CIPType"] !== null) {
            $this->CIPType = $param["CIPType"];
        }

        if (array_key_exists("StrMsgIP",$param) and $param["StrMsgIP"] !== null) {
            $this->StrMsgIP = $param["StrMsgIP"];
        }

        if (array_key_exists("StrMsgIPv6",$param) and $param["StrMsgIPv6"] !== null) {
            $this->StrMsgIPv6 = $param["StrMsgIPv6"];
        }

        if (array_key_exists("UiPostTime",$param) and $param["UiPostTime"] !== null) {
            $this->UiPostTime = $param["UiPostTime"];
        }
    }
}
