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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全栈式风控引擎入参
 *
 * @method AccountInfo getAccount() 获取用户账号类型；默认开通QQOpenId、手机号MD5权限；如果需要使用微信OpenId入参，则需要"提交工单"或联系对接人进行资格审核，审核通过后方可正常使用微信开放账号。
1：QQ开放账号
2：微信开放账号
10004：手机号MD5，中国大陆11位手机号进行MD5加密，取32位小写值
10005：手机号SHA256，中国大陆11位手机号进行SHA256加密，取64位小写值
 * @method void setAccount(AccountInfo $Account) 设置用户账号类型；默认开通QQOpenId、手机号MD5权限；如果需要使用微信OpenId入参，则需要"提交工单"或联系对接人进行资格审核，审核通过后方可正常使用微信开放账号。
1：QQ开放账号
2：微信开放账号
10004：手机号MD5，中国大陆11位手机号进行MD5加密，取32位小写值
10005：手机号SHA256，中国大陆11位手机号进行SHA256加密，取64位小写值
 * @method string getSceneCode() 获取场景码，用于识别和区分不同的业务场景，可在控制台上新建和管理
控制台链接：https://console.cloud.tencent.com/rce/risk/strategy/scene-root
活动防刷默认场景码：e_activity_antirush 
登录保护默认场景码：e_login_protection
注册保护默认场景码：e_register_protection
 * @method void setSceneCode(string $SceneCode) 设置场景码，用于识别和区分不同的业务场景，可在控制台上新建和管理
控制台链接：https://console.cloud.tencent.com/rce/risk/strategy/scene-root
活动防刷默认场景码：e_activity_antirush 
登录保护默认场景码：e_login_protection
注册保护默认场景码：e_register_protection
 * @method string getUserIp() 获取用户外网ip（传入用户非外网ip会影响判断结果）。
 * @method void setUserIp(string $UserIp) 设置用户外网ip（传入用户非外网ip会影响判断结果）。
 * @method integer getPostTime() 获取用户操作时间戳，精确到秒。
 * @method void setPostTime(integer $PostTime) 设置用户操作时间戳，精确到秒。
 * @method string getUserId() 获取业务平台用户唯一标识，支持自定义。
 * @method void setUserId(string $UserId) 设置业务平台用户唯一标识，支持自定义。
 * @method string getDeviceToken() 获取设备指纹DeviceToken值，集成设备指纹后获取；如果集成了相应的设备指纹，该字段必填。
 * @method void setDeviceToken(string $DeviceToken) 设置设备指纹DeviceToken值，集成设备指纹后获取；如果集成了相应的设备指纹，该字段必填。
 * @method integer getDeviceBusinessId() 获取设备指纹 BusinessId。
 * @method void setDeviceBusinessId(integer $DeviceBusinessId) 设置设备指纹 BusinessId。
 * @method integer getBusinessId() 获取业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。
 * @method void setBusinessId(integer $BusinessId) 设置业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。
 * @method string getNickname() 获取昵称，UTF-8 编码。
 * @method void setNickname(string $Nickname) 设置昵称，UTF-8 编码。
 * @method string getEmailAddress() 获取用户邮箱地址。
 * @method void setEmailAddress(string $EmailAddress) 设置用户邮箱地址。
 * @method integer getCheckDevice() 获取是否识别设备异常：
0：不识别。
1：识别。
 * @method void setCheckDevice(integer $CheckDevice) 设置是否识别设备异常：
0：不识别。
1：识别。
 * @method string getCookieHash() 获取用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。
 * @method void setCookieHash(string $CookieHash) 设置用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。
 * @method string getReferer() 获取用户HTTP请求的Referer值。
 * @method void setReferer(string $Referer) 设置用户HTTP请求的Referer值。
 * @method string getUserAgent() 获取用户HTTP请求的User-Agent值。
 * @method void setUserAgent(string $UserAgent) 设置用户HTTP请求的User-Agent值。
 * @method string getXForwardedFor() 获取用户HTTP请求的X-Forwarded-For值。
 * @method void setXForwardedFor(string $XForwardedFor) 设置用户HTTP请求的X-Forwarded-For值。
 * @method string getMacAddress() 获取MAC地址或设备唯一标识。
 * @method void setMacAddress(string $MacAddress) 设置MAC地址或设备唯一标识。
 * @method string getVendorId() 获取手机制造商ID，如果手机注册，请带上此信息。
 * @method void setVendorId(string $VendorId) 设置手机制造商ID，如果手机注册，请带上此信息。
 * @method integer getDeviceType() 获取设备类型(已不推荐使用)。
 * @method void setDeviceType(integer $DeviceType) 设置设备类型(已不推荐使用)。
 * @method array getDetails() 获取扩展字段。
 * @method void setDetails(array $Details) 设置扩展字段。
 * @method SponsorInfo getSponsor() 获取邀请助力场景相关信息。
 * @method void setSponsor(SponsorInfo $Sponsor) 设置邀请助力场景相关信息。
 * @method OnlineScamInfo getOnlineScam() 获取详情请跳转至OnlineScamInfo查看。
 * @method void setOnlineScam(OnlineScamInfo $OnlineScam) 设置详情请跳转至OnlineScamInfo查看。
 * @method string getPlatform() 获取1：Android
2：iOS
3：H5
4：小程序
 * @method void setPlatform(string $Platform) 设置1：Android
2：iOS
3：H5
4：小程序
 * @method DataAuthorizationInfo getDataAuthorization() 获取数据授权信息。
注意：新接入通用业务欺诈保护（RCE）服务的客户该字段【必传】。
 * @method void setDataAuthorization(DataAuthorizationInfo $DataAuthorization) 设置数据授权信息。
注意：新接入通用业务欺诈保护（RCE）服务的客户该字段【必传】。
 */
class InputManageMarketingRisk extends AbstractModel
{
    /**
     * @var AccountInfo 用户账号类型；默认开通QQOpenId、手机号MD5权限；如果需要使用微信OpenId入参，则需要"提交工单"或联系对接人进行资格审核，审核通过后方可正常使用微信开放账号。
1：QQ开放账号
2：微信开放账号
10004：手机号MD5，中国大陆11位手机号进行MD5加密，取32位小写值
10005：手机号SHA256，中国大陆11位手机号进行SHA256加密，取64位小写值
     */
    public $Account;

    /**
     * @var string 场景码，用于识别和区分不同的业务场景，可在控制台上新建和管理
控制台链接：https://console.cloud.tencent.com/rce/risk/strategy/scene-root
活动防刷默认场景码：e_activity_antirush 
登录保护默认场景码：e_login_protection
注册保护默认场景码：e_register_protection
     */
    public $SceneCode;

    /**
     * @var string 用户外网ip（传入用户非外网ip会影响判断结果）。
     */
    public $UserIp;

    /**
     * @var integer 用户操作时间戳，精确到秒。
     */
    public $PostTime;

    /**
     * @var string 业务平台用户唯一标识，支持自定义。
     */
    public $UserId;

    /**
     * @var string 设备指纹DeviceToken值，集成设备指纹后获取；如果集成了相应的设备指纹，该字段必填。
     */
    public $DeviceToken;

    /**
     * @var integer 设备指纹 BusinessId。
     */
    public $DeviceBusinessId;

    /**
     * @var integer 业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。
     */
    public $BusinessId;

    /**
     * @var string 昵称，UTF-8 编码。
     */
    public $Nickname;

    /**
     * @var string 用户邮箱地址。
     */
    public $EmailAddress;

    /**
     * @var integer 是否识别设备异常：
0：不识别。
1：识别。
     */
    public $CheckDevice;

    /**
     * @var string 用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。
     */
    public $CookieHash;

    /**
     * @var string 用户HTTP请求的Referer值。
     */
    public $Referer;

    /**
     * @var string 用户HTTP请求的User-Agent值。
     */
    public $UserAgent;

    /**
     * @var string 用户HTTP请求的X-Forwarded-For值。
     */
    public $XForwardedFor;

    /**
     * @var string MAC地址或设备唯一标识。
     */
    public $MacAddress;

    /**
     * @var string 手机制造商ID，如果手机注册，请带上此信息。
     */
    public $VendorId;

    /**
     * @var integer 设备类型(已不推荐使用)。
     */
    public $DeviceType;

    /**
     * @var array 扩展字段。
     */
    public $Details;

    /**
     * @var SponsorInfo 邀请助力场景相关信息。
     */
    public $Sponsor;

    /**
     * @var OnlineScamInfo 详情请跳转至OnlineScamInfo查看。
     */
    public $OnlineScam;

    /**
     * @var string 1：Android
2：iOS
3：H5
4：小程序
     */
    public $Platform;

    /**
     * @var DataAuthorizationInfo 数据授权信息。
注意：新接入通用业务欺诈保护（RCE）服务的客户该字段【必传】。
     */
    public $DataAuthorization;

    /**
     * @param AccountInfo $Account 用户账号类型；默认开通QQOpenId、手机号MD5权限；如果需要使用微信OpenId入参，则需要"提交工单"或联系对接人进行资格审核，审核通过后方可正常使用微信开放账号。
1：QQ开放账号
2：微信开放账号
10004：手机号MD5，中国大陆11位手机号进行MD5加密，取32位小写值
10005：手机号SHA256，中国大陆11位手机号进行SHA256加密，取64位小写值
     * @param string $SceneCode 场景码，用于识别和区分不同的业务场景，可在控制台上新建和管理
控制台链接：https://console.cloud.tencent.com/rce/risk/strategy/scene-root
活动防刷默认场景码：e_activity_antirush 
登录保护默认场景码：e_login_protection
注册保护默认场景码：e_register_protection
     * @param string $UserIp 用户外网ip（传入用户非外网ip会影响判断结果）。
     * @param integer $PostTime 用户操作时间戳，精确到秒。
     * @param string $UserId 业务平台用户唯一标识，支持自定义。
     * @param string $DeviceToken 设备指纹DeviceToken值，集成设备指纹后获取；如果集成了相应的设备指纹，该字段必填。
     * @param integer $DeviceBusinessId 设备指纹 BusinessId。
     * @param integer $BusinessId 业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。
     * @param string $Nickname 昵称，UTF-8 编码。
     * @param string $EmailAddress 用户邮箱地址。
     * @param integer $CheckDevice 是否识别设备异常：
0：不识别。
1：识别。
     * @param string $CookieHash 用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。
     * @param string $Referer 用户HTTP请求的Referer值。
     * @param string $UserAgent 用户HTTP请求的User-Agent值。
     * @param string $XForwardedFor 用户HTTP请求的X-Forwarded-For值。
     * @param string $MacAddress MAC地址或设备唯一标识。
     * @param string $VendorId 手机制造商ID，如果手机注册，请带上此信息。
     * @param integer $DeviceType 设备类型(已不推荐使用)。
     * @param array $Details 扩展字段。
     * @param SponsorInfo $Sponsor 邀请助力场景相关信息。
     * @param OnlineScamInfo $OnlineScam 详情请跳转至OnlineScamInfo查看。
     * @param string $Platform 1：Android
2：iOS
3：H5
4：小程序
     * @param DataAuthorizationInfo $DataAuthorization 数据授权信息。
注意：新接入通用业务欺诈保护（RCE）服务的客户该字段【必传】。
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
        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = new AccountInfo();
            $this->Account->deserialize($param["Account"]);
        }

        if (array_key_exists("SceneCode",$param) and $param["SceneCode"] !== null) {
            $this->SceneCode = $param["SceneCode"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("PostTime",$param) and $param["PostTime"] !== null) {
            $this->PostTime = $param["PostTime"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("DeviceToken",$param) and $param["DeviceToken"] !== null) {
            $this->DeviceToken = $param["DeviceToken"];
        }

        if (array_key_exists("DeviceBusinessId",$param) and $param["DeviceBusinessId"] !== null) {
            $this->DeviceBusinessId = $param["DeviceBusinessId"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }

        if (array_key_exists("CheckDevice",$param) and $param["CheckDevice"] !== null) {
            $this->CheckDevice = $param["CheckDevice"];
        }

        if (array_key_exists("CookieHash",$param) and $param["CookieHash"] !== null) {
            $this->CookieHash = $param["CookieHash"];
        }

        if (array_key_exists("Referer",$param) and $param["Referer"] !== null) {
            $this->Referer = $param["Referer"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("XForwardedFor",$param) and $param["XForwardedFor"] !== null) {
            $this->XForwardedFor = $param["XForwardedFor"];
        }

        if (array_key_exists("MacAddress",$param) and $param["MacAddress"] !== null) {
            $this->MacAddress = $param["MacAddress"];
        }

        if (array_key_exists("VendorId",$param) and $param["VendorId"] !== null) {
            $this->VendorId = $param["VendorId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new InputDetails();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }

        if (array_key_exists("Sponsor",$param) and $param["Sponsor"] !== null) {
            $this->Sponsor = new SponsorInfo();
            $this->Sponsor->deserialize($param["Sponsor"]);
        }

        if (array_key_exists("OnlineScam",$param) and $param["OnlineScam"] !== null) {
            $this->OnlineScam = new OnlineScamInfo();
            $this->OnlineScam->deserialize($param["OnlineScam"]);
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("DataAuthorization",$param) and $param["DataAuthorization"] !== null) {
            $this->DataAuthorization = new DataAuthorizationInfo();
            $this->DataAuthorization->deserialize($param["DataAuthorization"]);
        }
    }
}
