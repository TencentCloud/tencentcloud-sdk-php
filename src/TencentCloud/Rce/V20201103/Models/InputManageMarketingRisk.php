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
 * @method AccountInfo getAccount() 获取<p>用户账号类型；默认开通QQOpenId、手机号MD5权限；如果需要使用微信OpenId入参，则需要&quot;提交工单&quot;或联系对接人进行资格审核，审核通过后方可正常使用微信开放账号。<br>1：QQ开放账号<br>2：微信开放账号<br>10004：手机号MD5，中国大陆11位手机号进行MD5加密，取32位小写值<br>10005：手机号SHA256，中国大陆11位手机号进行SHA256加密，取64位小写值</p>
 * @method void setAccount(AccountInfo $Account) 设置<p>用户账号类型；默认开通QQOpenId、手机号MD5权限；如果需要使用微信OpenId入参，则需要&quot;提交工单&quot;或联系对接人进行资格审核，审核通过后方可正常使用微信开放账号。<br>1：QQ开放账号<br>2：微信开放账号<br>10004：手机号MD5，中国大陆11位手机号进行MD5加密，取32位小写值<br>10005：手机号SHA256，中国大陆11位手机号进行SHA256加密，取64位小写值</p>
 * @method string getSceneCode() 获取<p>场景码，用于识别和区分不同的业务场景，可在控制台上新建和管理<br>控制台链接：https://console.cloud.tencent.com/rce/risk/strategy/scene-root<br>活动防刷默认场景码：e_activity_antirush<br>登录保护默认场景码：e_login_protection<br>注册保护默认场景码：e_register_protection</p>
 * @method void setSceneCode(string $SceneCode) 设置<p>场景码，用于识别和区分不同的业务场景，可在控制台上新建和管理<br>控制台链接：https://console.cloud.tencent.com/rce/risk/strategy/scene-root<br>活动防刷默认场景码：e_activity_antirush<br>登录保护默认场景码：e_login_protection<br>注册保护默认场景码：e_register_protection</p>
 * @method string getUserIp() 获取<p>用户外网ip（传入用户非外网ip会影响判断结果）。</p>
 * @method void setUserIp(string $UserIp) 设置<p>用户外网ip（传入用户非外网ip会影响判断结果）。</p>
 * @method integer getPostTime() 获取<p>用户操作时间戳，精确到秒。</p>
 * @method void setPostTime(integer $PostTime) 设置<p>用户操作时间戳，精确到秒。</p>
 * @method string getUserId() 获取<p>业务平台用户唯一标识，支持自定义。</p>
 * @method void setUserId(string $UserId) 设置<p>业务平台用户唯一标识，支持自定义。</p>
 * @method string getDeviceToken() 获取<p>设备指纹DeviceToken值，集成设备指纹后获取；如果集成了相应的设备指纹，该字段必填。</p>
 * @method void setDeviceToken(string $DeviceToken) 设置<p>设备指纹DeviceToken值，集成设备指纹后获取；如果集成了相应的设备指纹，该字段必填。</p>
 * @method integer getDeviceBusinessId() 获取<p>设备指纹 BusinessId。</p>
 * @method void setDeviceBusinessId(integer $DeviceBusinessId) 设置<p>设备指纹 BusinessId。</p>
 * @method integer getBusinessId() 获取<p>业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。</p>
 * @method void setBusinessId(integer $BusinessId) 设置<p>业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。</p>
 * @method string getNickname() 获取<p>昵称，UTF-8 编码。</p>
 * @method void setNickname(string $Nickname) 设置<p>昵称，UTF-8 编码。</p>
 * @method string getEmailAddress() 获取<p>用户邮箱地址。</p>
 * @method void setEmailAddress(string $EmailAddress) 设置<p>用户邮箱地址。</p>
 * @method integer getCheckDevice() 获取<p>是否识别设备异常：<br>0：不识别。<br>1：识别。</p>
 * @method void setCheckDevice(integer $CheckDevice) 设置<p>是否识别设备异常：<br>0：不识别。<br>1：识别。</p>
 * @method string getCookieHash() 获取<p>用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。</p>
 * @method void setCookieHash(string $CookieHash) 设置<p>用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。</p>
 * @method string getReferer() 获取<p>用户HTTP请求的Referer值。</p>
 * @method void setReferer(string $Referer) 设置<p>用户HTTP请求的Referer值。</p>
 * @method string getUserAgent() 获取<p>用户HTTP请求的User-Agent值。</p>
 * @method void setUserAgent(string $UserAgent) 设置<p>用户HTTP请求的User-Agent值。</p>
 * @method string getXForwardedFor() 获取<p>用户HTTP请求的X-Forwarded-For值。</p>
 * @method void setXForwardedFor(string $XForwardedFor) 设置<p>用户HTTP请求的X-Forwarded-For值。</p>
 * @method string getMacAddress() 获取<p>MAC地址或设备唯一标识。</p>
 * @method void setMacAddress(string $MacAddress) 设置<p>MAC地址或设备唯一标识。</p>
 * @method string getVendorId() 获取<p>手机制造商ID，如果手机注册，请带上此信息。</p>
 * @method void setVendorId(string $VendorId) 设置<p>手机制造商ID，如果手机注册，请带上此信息。</p>
 * @method integer getDeviceType() 获取<p>设备类型(已不推荐使用)。</p>
 * @method void setDeviceType(integer $DeviceType) 设置<p>设备类型(已不推荐使用)。</p>
 * @method array getDetails() 获取<p>扩展字段。</p>
 * @method void setDetails(array $Details) 设置<p>扩展字段。</p>
 * @method SponsorInfo getSponsor() 获取<p>邀请助力场景相关信息。</p>
 * @method void setSponsor(SponsorInfo $Sponsor) 设置<p>邀请助力场景相关信息。</p>
 * @method OnlineScamInfo getOnlineScam() 获取<p>详情请跳转至OnlineScamInfo查看。</p>
 * @method void setOnlineScam(OnlineScamInfo $OnlineScam) 设置<p>详情请跳转至OnlineScamInfo查看。</p>
 * @method string getPlatform() 获取<p>1：Android<br>2：iOS<br>3：H5<br>4：小程序<br>5：鸿蒙</p>
 * @method void setPlatform(string $Platform) 设置<p>1：Android<br>2：iOS<br>3：H5<br>4：小程序<br>5：鸿蒙</p>
 * @method DataAuthorizationInfo getDataAuthorization() 获取<p>数据授权信息。<br>注意：新接入通用业务欺诈保护（RCE）服务的客户该字段【必传】。</p>
 * @method void setDataAuthorization(DataAuthorizationInfo $DataAuthorization) 设置<p>数据授权信息。<br>注意：新接入通用业务欺诈保护（RCE）服务的客户该字段【必传】。</p>
 */
class InputManageMarketingRisk extends AbstractModel
{
    /**
     * @var AccountInfo <p>用户账号类型；默认开通QQOpenId、手机号MD5权限；如果需要使用微信OpenId入参，则需要&quot;提交工单&quot;或联系对接人进行资格审核，审核通过后方可正常使用微信开放账号。<br>1：QQ开放账号<br>2：微信开放账号<br>10004：手机号MD5，中国大陆11位手机号进行MD5加密，取32位小写值<br>10005：手机号SHA256，中国大陆11位手机号进行SHA256加密，取64位小写值</p>
     */
    public $Account;

    /**
     * @var string <p>场景码，用于识别和区分不同的业务场景，可在控制台上新建和管理<br>控制台链接：https://console.cloud.tencent.com/rce/risk/strategy/scene-root<br>活动防刷默认场景码：e_activity_antirush<br>登录保护默认场景码：e_login_protection<br>注册保护默认场景码：e_register_protection</p>
     */
    public $SceneCode;

    /**
     * @var string <p>用户外网ip（传入用户非外网ip会影响判断结果）。</p>
     */
    public $UserIp;

    /**
     * @var integer <p>用户操作时间戳，精确到秒。</p>
     */
    public $PostTime;

    /**
     * @var string <p>业务平台用户唯一标识，支持自定义。</p>
     */
    public $UserId;

    /**
     * @var string <p>设备指纹DeviceToken值，集成设备指纹后获取；如果集成了相应的设备指纹，该字段必填。</p>
     */
    public $DeviceToken;

    /**
     * @var integer <p>设备指纹 BusinessId。</p>
     */
    public $DeviceBusinessId;

    /**
     * @var integer <p>业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。</p>
     */
    public $BusinessId;

    /**
     * @var string <p>昵称，UTF-8 编码。</p>
     */
    public $Nickname;

    /**
     * @var string <p>用户邮箱地址。</p>
     */
    public $EmailAddress;

    /**
     * @var integer <p>是否识别设备异常：<br>0：不识别。<br>1：识别。</p>
     */
    public $CheckDevice;

    /**
     * @var string <p>用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。</p>
     */
    public $CookieHash;

    /**
     * @var string <p>用户HTTP请求的Referer值。</p>
     */
    public $Referer;

    /**
     * @var string <p>用户HTTP请求的User-Agent值。</p>
     */
    public $UserAgent;

    /**
     * @var string <p>用户HTTP请求的X-Forwarded-For值。</p>
     */
    public $XForwardedFor;

    /**
     * @var string <p>MAC地址或设备唯一标识。</p>
     */
    public $MacAddress;

    /**
     * @var string <p>手机制造商ID，如果手机注册，请带上此信息。</p>
     */
    public $VendorId;

    /**
     * @var integer <p>设备类型(已不推荐使用)。</p>
     */
    public $DeviceType;

    /**
     * @var array <p>扩展字段。</p>
     */
    public $Details;

    /**
     * @var SponsorInfo <p>邀请助力场景相关信息。</p>
     */
    public $Sponsor;

    /**
     * @var OnlineScamInfo <p>详情请跳转至OnlineScamInfo查看。</p>
     */
    public $OnlineScam;

    /**
     * @var string <p>1：Android<br>2：iOS<br>3：H5<br>4：小程序<br>5：鸿蒙</p>
     */
    public $Platform;

    /**
     * @var DataAuthorizationInfo <p>数据授权信息。<br>注意：新接入通用业务欺诈保护（RCE）服务的客户该字段【必传】。</p>
     */
    public $DataAuthorization;

    /**
     * @param AccountInfo $Account <p>用户账号类型；默认开通QQOpenId、手机号MD5权限；如果需要使用微信OpenId入参，则需要&quot;提交工单&quot;或联系对接人进行资格审核，审核通过后方可正常使用微信开放账号。<br>1：QQ开放账号<br>2：微信开放账号<br>10004：手机号MD5，中国大陆11位手机号进行MD5加密，取32位小写值<br>10005：手机号SHA256，中国大陆11位手机号进行SHA256加密，取64位小写值</p>
     * @param string $SceneCode <p>场景码，用于识别和区分不同的业务场景，可在控制台上新建和管理<br>控制台链接：https://console.cloud.tencent.com/rce/risk/strategy/scene-root<br>活动防刷默认场景码：e_activity_antirush<br>登录保护默认场景码：e_login_protection<br>注册保护默认场景码：e_register_protection</p>
     * @param string $UserIp <p>用户外网ip（传入用户非外网ip会影响判断结果）。</p>
     * @param integer $PostTime <p>用户操作时间戳，精确到秒。</p>
     * @param string $UserId <p>业务平台用户唯一标识，支持自定义。</p>
     * @param string $DeviceToken <p>设备指纹DeviceToken值，集成设备指纹后获取；如果集成了相应的设备指纹，该字段必填。</p>
     * @param integer $DeviceBusinessId <p>设备指纹 BusinessId。</p>
     * @param integer $BusinessId <p>业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。</p>
     * @param string $Nickname <p>昵称，UTF-8 编码。</p>
     * @param string $EmailAddress <p>用户邮箱地址。</p>
     * @param integer $CheckDevice <p>是否识别设备异常：<br>0：不识别。<br>1：识别。</p>
     * @param string $CookieHash <p>用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。</p>
     * @param string $Referer <p>用户HTTP请求的Referer值。</p>
     * @param string $UserAgent <p>用户HTTP请求的User-Agent值。</p>
     * @param string $XForwardedFor <p>用户HTTP请求的X-Forwarded-For值。</p>
     * @param string $MacAddress <p>MAC地址或设备唯一标识。</p>
     * @param string $VendorId <p>手机制造商ID，如果手机注册，请带上此信息。</p>
     * @param integer $DeviceType <p>设备类型(已不推荐使用)。</p>
     * @param array $Details <p>扩展字段。</p>
     * @param SponsorInfo $Sponsor <p>邀请助力场景相关信息。</p>
     * @param OnlineScamInfo $OnlineScam <p>详情请跳转至OnlineScamInfo查看。</p>
     * @param string $Platform <p>1：Android<br>2：iOS<br>3：H5<br>4：小程序<br>5：鸿蒙</p>
     * @param DataAuthorizationInfo $DataAuthorization <p>数据授权信息。<br>注意：新接入通用业务欺诈保护（RCE）服务的客户该字段【必传】。</p>
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
