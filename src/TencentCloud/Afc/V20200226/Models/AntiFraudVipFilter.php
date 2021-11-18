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
namespace TencentCloud\Afc\V20200226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AntiFraudVipFilter– 业务入参
 *
 * @method string getCustomerUin() 获取业务方账号 ID
 * @method void setCustomerUin(string $CustomerUin) 设置业务方账号 ID
 * @method string getCustomerAppid() 获取业务方APPID
 * @method void setCustomerAppid(string $CustomerAppid) 设置业务方APPID
 * @method string getIdNumber() 获取身份证号
注 1：下方 idCryptoType 为指定
加密方式
注 2：若 idNumber 加密则必传加
密方式
 * @method void setIdNumber(string $IdNumber) 设置身份证号
注 1：下方 idCryptoType 为指定
加密方式
注 2：若 idNumber 加密则必传加
密方式
 * @method string getPhoneNumber() 获取手机号码（注：不需要带国家代码
例如：13430421011）
注 1：下方 phoneCryptoType 为
指定加密方式:
注 2：若 phoneNumber 加密则必
传加密方式
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号码（注：不需要带国家代码
例如：13430421011）
注 1：下方 phoneCryptoType 为
指定加密方式:
注 2：若 phoneNumber 加密则必
传加密方式
 * @method string getScene() 获取业务场景 ID
 * @method void setScene(string $Scene) 设置业务场景 ID
 * @method string getCustomerSubUin() 获取默认不使用，业务方子
账号，若接口使用密钥对应是子账
号则必填
 * @method void setCustomerSubUin(string $CustomerSubUin) 设置默认不使用，业务方子
账号，若接口使用密钥对应是子账
号则必填
 * @method string getAuthorization() 获取已获取约定标识则传 1；
用于基于特定需求而传的标识字段
注：有约定则是必传，若未传则查
询接口失败
 * @method void setAuthorization(string $Authorization) 设置已获取约定标识则传 1；
用于基于特定需求而传的标识字段
注：有约定则是必传，若未传则查
询接口失败
 * @method string getName() 获取姓名
注 ：不支持加密
 * @method void setName(string $Name) 设置姓名
注 ：不支持加密
 * @method string getBankCardNumber() 获取银行卡号
 * @method void setBankCardNumber(string $BankCardNumber) 设置银行卡号
 * @method string getUserIp() 获取用户请求来源 IP
 * @method void setUserIp(string $UserIp) 设置用户请求来源 IP
 * @method string getImei() 获取国际移动设备识别码
 * @method void setImei(string $Imei) 设置国际移动设备识别码
 * @method string getIdfa() 获取ios 系统广告标示符
 * @method void setIdfa(string $Idfa) 设置ios 系统广告标示符
 * @method string getEmailAddress() 获取用户邮箱地址
 * @method void setEmailAddress(string $EmailAddress) 设置用户邮箱地址
 * @method string getAddress() 获取用户住址
 * @method void setAddress(string $Address) 设置用户住址
 * @method string getMac() 获取MAC 地址
 * @method void setMac(string $Mac) 设置MAC 地址
 * @method string getImsi() 获取国际移动用户识别码
 * @method void setImsi(string $Imsi) 设置国际移动用户识别码
 * @method string getAccountType() 获取关联的腾讯帐号 QQ：1；
开放帐号微信： 2；
 * @method void setAccountType(string $AccountType) 设置关联的腾讯帐号 QQ：1；
开放帐号微信： 2；
 * @method string getUid() 获取可选的 QQ 或微信 openid
 * @method void setUid(string $Uid) 设置可选的 QQ 或微信 openid
 * @method string getAppIdU() 获取qq 或微信分配给网站或应用的
appid，用来唯一标识网站或应用
 * @method void setAppIdU(string $AppIdU) 设置qq 或微信分配给网站或应用的
appid，用来唯一标识网站或应用
 * @method string getWifiMac() 获取ＷＩＦＩＭＡＣ
 * @method void setWifiMac(string $WifiMac) 设置ＷＩＦＩＭＡＣ
 * @method string getWifiSSID() 获取WIFI 服务集标识
 * @method void setWifiSSID(string $WifiSSID) 设置WIFI 服务集标识
 * @method string getWifiBSSID() 获取WIFI-BSSID
 * @method void setWifiBSSID(string $WifiBSSID) 设置WIFI-BSSID
 * @method string getExtensionId() 获取拓展字段类型 ID
注：默认不填写，需要时天御侧将
提供
 * @method void setExtensionId(string $ExtensionId) 设置拓展字段类型 ID
注：默认不填写，需要时天御侧将
提供
 * @method string getExtensionIn() 获取拓展字段内容
注：默认不填，需要时天御侧将提
供
 * @method void setExtensionIn(string $ExtensionIn) 设置拓展字段内容
注：默认不填，需要时天御侧将提
供
 * @method string getBusinessId() 获取业务 ID，默认不传
 * @method void setBusinessId(string $BusinessId) 设置业务 ID，默认不传
 * @method string getIdCryptoType() 获取身份证加密类型
0：不加密（默认值）
1：md5
2：sha256
3：SM3
注：若 idNumber 加密则必传加密
方式
 * @method void setIdCryptoType(string $IdCryptoType) 设置身份证加密类型
0：不加密（默认值）
1：md5
2：sha256
3：SM3
注：若 idNumber 加密则必传加密
方式
 * @method string getPhoneCryptoType() 获取手机号加密类型
0：不加密（默认值）
1：md5,
2：sha256
3：SM3
注：若 phoneNumber 加密则必传
加密方式
 * @method void setPhoneCryptoType(string $PhoneCryptoType) 设置手机号加密类型
0：不加密（默认值）
1：md5,
2：sha256
3：SM3
注：若 phoneNumber 加密则必传
加密方式
 * @method string getNameCryptoType() 获取姓名加密类型：——注：已经不支持加
密，该字段存在是为了兼容可能历史客户
版本；
0：不加密（默认值）
1：md5
 * @method void setNameCryptoType(string $NameCryptoType) 设置姓名加密类型：——注：已经不支持加
密，该字段存在是为了兼容可能历史客户
版本；
0：不加密（默认值）
1：md5
 */
class AntiFraudVipFilter extends AbstractModel
{
    /**
     * @var string 业务方账号 ID
     */
    public $CustomerUin;

    /**
     * @var string 业务方APPID
     */
    public $CustomerAppid;

    /**
     * @var string 身份证号
注 1：下方 idCryptoType 为指定
加密方式
注 2：若 idNumber 加密则必传加
密方式
     */
    public $IdNumber;

    /**
     * @var string 手机号码（注：不需要带国家代码
例如：13430421011）
注 1：下方 phoneCryptoType 为
指定加密方式:
注 2：若 phoneNumber 加密则必
传加密方式
     */
    public $PhoneNumber;

    /**
     * @var string 业务场景 ID
     */
    public $Scene;

    /**
     * @var string 默认不使用，业务方子
账号，若接口使用密钥对应是子账
号则必填
     */
    public $CustomerSubUin;

    /**
     * @var string 已获取约定标识则传 1；
用于基于特定需求而传的标识字段
注：有约定则是必传，若未传则查
询接口失败
     */
    public $Authorization;

    /**
     * @var string 姓名
注 ：不支持加密
     */
    public $Name;

    /**
     * @var string 银行卡号
     */
    public $BankCardNumber;

    /**
     * @var string 用户请求来源 IP
     */
    public $UserIp;

    /**
     * @var string 国际移动设备识别码
     */
    public $Imei;

    /**
     * @var string ios 系统广告标示符
     */
    public $Idfa;

    /**
     * @var string 用户邮箱地址
     */
    public $EmailAddress;

    /**
     * @var string 用户住址
     */
    public $Address;

    /**
     * @var string MAC 地址
     */
    public $Mac;

    /**
     * @var string 国际移动用户识别码
     */
    public $Imsi;

    /**
     * @var string 关联的腾讯帐号 QQ：1；
开放帐号微信： 2；
     */
    public $AccountType;

    /**
     * @var string 可选的 QQ 或微信 openid
     */
    public $Uid;

    /**
     * @var string qq 或微信分配给网站或应用的
appid，用来唯一标识网站或应用
     */
    public $AppIdU;

    /**
     * @var string ＷＩＦＩＭＡＣ
     */
    public $WifiMac;

    /**
     * @var string WIFI 服务集标识
     */
    public $WifiSSID;

    /**
     * @var string WIFI-BSSID
     */
    public $WifiBSSID;

    /**
     * @var string 拓展字段类型 ID
注：默认不填写，需要时天御侧将
提供
     */
    public $ExtensionId;

    /**
     * @var string 拓展字段内容
注：默认不填，需要时天御侧将提
供
     */
    public $ExtensionIn;

    /**
     * @var string 业务 ID，默认不传
     */
    public $BusinessId;

    /**
     * @var string 身份证加密类型
0：不加密（默认值）
1：md5
2：sha256
3：SM3
注：若 idNumber 加密则必传加密
方式
     */
    public $IdCryptoType;

    /**
     * @var string 手机号加密类型
0：不加密（默认值）
1：md5,
2：sha256
3：SM3
注：若 phoneNumber 加密则必传
加密方式
     */
    public $PhoneCryptoType;

    /**
     * @var string 姓名加密类型：——注：已经不支持加
密，该字段存在是为了兼容可能历史客户
版本；
0：不加密（默认值）
1：md5
     */
    public $NameCryptoType;

    /**
     * @param string $CustomerUin 业务方账号 ID
     * @param string $CustomerAppid 业务方APPID
     * @param string $IdNumber 身份证号
注 1：下方 idCryptoType 为指定
加密方式
注 2：若 idNumber 加密则必传加
密方式
     * @param string $PhoneNumber 手机号码（注：不需要带国家代码
例如：13430421011）
注 1：下方 phoneCryptoType 为
指定加密方式:
注 2：若 phoneNumber 加密则必
传加密方式
     * @param string $Scene 业务场景 ID
     * @param string $CustomerSubUin 默认不使用，业务方子
账号，若接口使用密钥对应是子账
号则必填
     * @param string $Authorization 已获取约定标识则传 1；
用于基于特定需求而传的标识字段
注：有约定则是必传，若未传则查
询接口失败
     * @param string $Name 姓名
注 ：不支持加密
     * @param string $BankCardNumber 银行卡号
     * @param string $UserIp 用户请求来源 IP
     * @param string $Imei 国际移动设备识别码
     * @param string $Idfa ios 系统广告标示符
     * @param string $EmailAddress 用户邮箱地址
     * @param string $Address 用户住址
     * @param string $Mac MAC 地址
     * @param string $Imsi 国际移动用户识别码
     * @param string $AccountType 关联的腾讯帐号 QQ：1；
开放帐号微信： 2；
     * @param string $Uid 可选的 QQ 或微信 openid
     * @param string $AppIdU qq 或微信分配给网站或应用的
appid，用来唯一标识网站或应用
     * @param string $WifiMac ＷＩＦＩＭＡＣ
     * @param string $WifiSSID WIFI 服务集标识
     * @param string $WifiBSSID WIFI-BSSID
     * @param string $ExtensionId 拓展字段类型 ID
注：默认不填写，需要时天御侧将
提供
     * @param string $ExtensionIn 拓展字段内容
注：默认不填，需要时天御侧将提
供
     * @param string $BusinessId 业务 ID，默认不传
     * @param string $IdCryptoType 身份证加密类型
0：不加密（默认值）
1：md5
2：sha256
3：SM3
注：若 idNumber 加密则必传加密
方式
     * @param string $PhoneCryptoType 手机号加密类型
0：不加密（默认值）
1：md5,
2：sha256
3：SM3
注：若 phoneNumber 加密则必传
加密方式
     * @param string $NameCryptoType 姓名加密类型：——注：已经不支持加
密，该字段存在是为了兼容可能历史客户
版本；
0：不加密（默认值）
1：md5
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
        if (array_key_exists("CustomerUin",$param) and $param["CustomerUin"] !== null) {
            $this->CustomerUin = $param["CustomerUin"];
        }

        if (array_key_exists("CustomerAppid",$param) and $param["CustomerAppid"] !== null) {
            $this->CustomerAppid = $param["CustomerAppid"];
        }

        if (array_key_exists("IdNumber",$param) and $param["IdNumber"] !== null) {
            $this->IdNumber = $param["IdNumber"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("CustomerSubUin",$param) and $param["CustomerSubUin"] !== null) {
            $this->CustomerSubUin = $param["CustomerSubUin"];
        }

        if (array_key_exists("Authorization",$param) and $param["Authorization"] !== null) {
            $this->Authorization = $param["Authorization"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BankCardNumber",$param) and $param["BankCardNumber"] !== null) {
            $this->BankCardNumber = $param["BankCardNumber"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("Idfa",$param) and $param["Idfa"] !== null) {
            $this->Idfa = $param["Idfa"];
        }

        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Mac",$param) and $param["Mac"] !== null) {
            $this->Mac = $param["Mac"];
        }

        if (array_key_exists("Imsi",$param) and $param["Imsi"] !== null) {
            $this->Imsi = $param["Imsi"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("AppIdU",$param) and $param["AppIdU"] !== null) {
            $this->AppIdU = $param["AppIdU"];
        }

        if (array_key_exists("WifiMac",$param) and $param["WifiMac"] !== null) {
            $this->WifiMac = $param["WifiMac"];
        }

        if (array_key_exists("WifiSSID",$param) and $param["WifiSSID"] !== null) {
            $this->WifiSSID = $param["WifiSSID"];
        }

        if (array_key_exists("WifiBSSID",$param) and $param["WifiBSSID"] !== null) {
            $this->WifiBSSID = $param["WifiBSSID"];
        }

        if (array_key_exists("ExtensionId",$param) and $param["ExtensionId"] !== null) {
            $this->ExtensionId = $param["ExtensionId"];
        }

        if (array_key_exists("ExtensionIn",$param) and $param["ExtensionIn"] !== null) {
            $this->ExtensionIn = $param["ExtensionIn"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("IdCryptoType",$param) and $param["IdCryptoType"] !== null) {
            $this->IdCryptoType = $param["IdCryptoType"];
        }

        if (array_key_exists("PhoneCryptoType",$param) and $param["PhoneCryptoType"] !== null) {
            $this->PhoneCryptoType = $param["PhoneCryptoType"];
        }

        if (array_key_exists("NameCryptoType",$param) and $param["NameCryptoType"] !== null) {
            $this->NameCryptoType = $param["NameCryptoType"];
        }
    }
}
