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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于表示业务用户对应的设备信息
 *
 * @method string getIp() 获取该字段表示业务用户对应设备的IP地址，同时**支持IPv4和IPv6**地址的记录；需要与IpType参数配合使用。
 * @method void setIp(string $Ip) 设置该字段表示业务用户对应设备的IP地址，同时**支持IPv4和IPv6**地址的记录；需要与IpType参数配合使用。
 * @method string getMac() 获取该字段表示业务用户对应的MAC地址，以方便设备识别与管理；其格式与取值与标准MAC地址一致。
 * @method void setMac(string $Mac) 设置该字段表示业务用户对应的MAC地址，以方便设备识别与管理；其格式与取值与标准MAC地址一致。
 * @method string getTokenId() 获取*内测中，敬请期待。*
 * @method void setTokenId(string $TokenId) 设置*内测中，敬请期待。*
 * @method string getDeviceId() 获取*内测中，敬请期待。*
 * @method void setDeviceId(string $DeviceId) 设置*内测中，敬请期待。*
 * @method string getIMEI() 获取该字段表示业务用户对应设备的**IMEI码**（国际移动设备识别码），该识别码可用于识别每一部独立的手机等移动通信设备，方便设备识别与管理。<br>备注：格式为**15-17位纯数字**。
 * @method void setIMEI(string $IMEI) 设置该字段表示业务用户对应设备的**IMEI码**（国际移动设备识别码），该识别码可用于识别每一部独立的手机等移动通信设备，方便设备识别与管理。<br>备注：格式为**15-17位纯数字**。
 * @method string getIDFA() 获取**iOS设备专用**，该字段表示业务用户对应的**IDFA**(广告标识符),这是由苹果公司提供的用于标识用户的广告标识符，由一串16进制的32位数字和字母组成。<br>
备注：苹果公司自2021年iOS14更新后允许用户手动关闭或者开启IDFA，故此字符串标记有效性可能有所降低。
 * @method void setIDFA(string $IDFA) 设置**iOS设备专用**，该字段表示业务用户对应的**IDFA**(广告标识符),这是由苹果公司提供的用于标识用户的广告标识符，由一串16进制的32位数字和字母组成。<br>
备注：苹果公司自2021年iOS14更新后允许用户手动关闭或者开启IDFA，故此字符串标记有效性可能有所降低。
 * @method string getIDFV() 获取**iOS设备专用**，该字段表示业务用户对应的**IDFV**(应用开发商标识符),这是由苹果公司提供的用于标注应用开发商的标识符，由一串16进制的32位数字和字母组成，可被用于唯一标识设备。
 * @method void setIDFV(string $IDFV) 设置**iOS设备专用**，该字段表示业务用户对应的**IDFV**(应用开发商标识符),这是由苹果公司提供的用于标注应用开发商的标识符，由一串16进制的32位数字和字母组成，可被用于唯一标识设备。
 * @method integer getIpType() 获取该字段表示记录的IP地址的类型，取值：**0**（代表IPv4地址）、**1**（代表IPv6地址）；需要与IpType参数配合使用。
 * @method void setIpType(integer $IpType) 设置该字段表示记录的IP地址的类型，取值：**0**（代表IPv4地址）、**1**（代表IPv6地址）；需要与IpType参数配合使用。
 */
class Device extends AbstractModel
{
    /**
     * @var string 该字段表示业务用户对应设备的IP地址，同时**支持IPv4和IPv6**地址的记录；需要与IpType参数配合使用。
     */
    public $Ip;

    /**
     * @var string 该字段表示业务用户对应的MAC地址，以方便设备识别与管理；其格式与取值与标准MAC地址一致。
     */
    public $Mac;

    /**
     * @var string *内测中，敬请期待。*
     */
    public $TokenId;

    /**
     * @var string *内测中，敬请期待。*
     */
    public $DeviceId;

    /**
     * @var string 该字段表示业务用户对应设备的**IMEI码**（国际移动设备识别码），该识别码可用于识别每一部独立的手机等移动通信设备，方便设备识别与管理。<br>备注：格式为**15-17位纯数字**。
     */
    public $IMEI;

    /**
     * @var string **iOS设备专用**，该字段表示业务用户对应的**IDFA**(广告标识符),这是由苹果公司提供的用于标识用户的广告标识符，由一串16进制的32位数字和字母组成。<br>
备注：苹果公司自2021年iOS14更新后允许用户手动关闭或者开启IDFA，故此字符串标记有效性可能有所降低。
     */
    public $IDFA;

    /**
     * @var string **iOS设备专用**，该字段表示业务用户对应的**IDFV**(应用开发商标识符),这是由苹果公司提供的用于标注应用开发商的标识符，由一串16进制的32位数字和字母组成，可被用于唯一标识设备。
     */
    public $IDFV;

    /**
     * @var integer 该字段表示记录的IP地址的类型，取值：**0**（代表IPv4地址）、**1**（代表IPv6地址）；需要与IpType参数配合使用。
     */
    public $IpType;

    /**
     * @param string $Ip 该字段表示业务用户对应设备的IP地址，同时**支持IPv4和IPv6**地址的记录；需要与IpType参数配合使用。
     * @param string $Mac 该字段表示业务用户对应的MAC地址，以方便设备识别与管理；其格式与取值与标准MAC地址一致。
     * @param string $TokenId *内测中，敬请期待。*
     * @param string $DeviceId *内测中，敬请期待。*
     * @param string $IMEI 该字段表示业务用户对应设备的**IMEI码**（国际移动设备识别码），该识别码可用于识别每一部独立的手机等移动通信设备，方便设备识别与管理。<br>备注：格式为**15-17位纯数字**。
     * @param string $IDFA **iOS设备专用**，该字段表示业务用户对应的**IDFA**(广告标识符),这是由苹果公司提供的用于标识用户的广告标识符，由一串16进制的32位数字和字母组成。<br>
备注：苹果公司自2021年iOS14更新后允许用户手动关闭或者开启IDFA，故此字符串标记有效性可能有所降低。
     * @param string $IDFV **iOS设备专用**，该字段表示业务用户对应的**IDFV**(应用开发商标识符),这是由苹果公司提供的用于标注应用开发商的标识符，由一串16进制的32位数字和字母组成，可被用于唯一标识设备。
     * @param integer $IpType 该字段表示记录的IP地址的类型，取值：**0**（代表IPv4地址）、**1**（代表IPv6地址）；需要与IpType参数配合使用。
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Mac",$param) and $param["Mac"] !== null) {
            $this->Mac = $param["Mac"];
        }

        if (array_key_exists("TokenId",$param) and $param["TokenId"] !== null) {
            $this->TokenId = $param["TokenId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("IMEI",$param) and $param["IMEI"] !== null) {
            $this->IMEI = $param["IMEI"];
        }

        if (array_key_exists("IDFA",$param) and $param["IDFA"] !== null) {
            $this->IDFA = $param["IDFA"];
        }

        if (array_key_exists("IDFV",$param) and $param["IDFV"] !== null) {
            $this->IDFV = $param["IDFV"];
        }

        if (array_key_exists("IpType",$param) and $param["IpType"] !== null) {
            $this->IpType = $param["IpType"];
        }
    }
}
