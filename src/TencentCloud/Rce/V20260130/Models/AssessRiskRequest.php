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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssessRisk请求参数结构体
 *
 * @method string getEventCode() 获取<p>事件码。用于指定业务接入的场景节点。</p><p> 账号保护产品下的标准事件包含：</p><ul><li> login： 登录<p></p></li> <li>register： 注册 </li><li>sms： 短信 </li><li>logout： 登出 </li><li>modify_account： 修改账号 </li><li>modify_password： 修改密码 </li><li>security_verification： 安全验证</li></ul><p>交易保护产品下的标准事件包含：</p><ul><li>create_order： 创建订单 </li><li>transaction： 交易支付 </li><li>charge_back： 拒付</li></ul><p>营销保护产品下的标准事件包含：</p><ul><li>add_promotion： 参加营销活动 </li><li>redeem： 兑奖 </li><li>withdraw： 提现 </li><li>cust_event： 自定义事件，cust_xxx </li><li>scan_code： 扫码 </li><li>lucky_draw： 抽奖 </li><li>task： 做任务 </li><li>invitation： 邀请 </li><li>claim_red_packet： 领红包 </li><li>browse： 浏览</li></ul><p>自定义事件可与RCE约定后进行风险评估</p>
 * @method void setEventCode(string $EventCode) 设置<p>事件码。用于指定业务接入的场景节点。</p><p> 账号保护产品下的标准事件包含：</p><ul><li> login： 登录<p></p></li> <li>register： 注册 </li><li>sms： 短信 </li><li>logout： 登出 </li><li>modify_account： 修改账号 </li><li>modify_password： 修改密码 </li><li>security_verification： 安全验证</li></ul><p>交易保护产品下的标准事件包含：</p><ul><li>create_order： 创建订单 </li><li>transaction： 交易支付 </li><li>charge_back： 拒付</li></ul><p>营销保护产品下的标准事件包含：</p><ul><li>add_promotion： 参加营销活动 </li><li>redeem： 兑奖 </li><li>withdraw： 提现 </li><li>cust_event： 自定义事件，cust_xxx </li><li>scan_code： 扫码 </li><li>lucky_draw： 抽奖 </li><li>task： 做任务 </li><li>invitation： 邀请 </li><li>claim_red_packet： 领红包 </li><li>browse： 浏览</li></ul><p>自定义事件可与RCE约定后进行风险评估</p>
 * @method string getEventTime() 获取<p>事件的发生时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
 * @method void setEventTime(string $EventTime) 设置<p>事件的发生时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
 * @method string getSessionId() 获取<p>用户当前会话 ID， 用于关联用户登录前后的动作，如果没有传UserId，则SessionId必传，如缺失则可填充空字符串</p>
 * @method void setSessionId(string $SessionId) 设置<p>用户当前会话 ID， 用于关联用户登录前后的动作，如果没有传UserId，则SessionId必传，如缺失则可填充空字符串</p>
 * @method string getDeviceToken() 获取<p>用户设备指纹token标识，在您的网站或者应用程序中集成设备指纹的SDK后获取</p>
 * @method void setDeviceToken(string $DeviceToken) 设置<p>用户设备指纹token标识，在您的网站或者应用程序中集成设备指纹的SDK后获取</p>
 * @method string getUserIp() 获取<p>客户端 IP 地址（IPv4或IPv6）</p>
 * @method void setUserIp(string $UserIp) 设置<p>客户端 IP 地址（IPv4或IPv6）</p>
 * @method EventDetail getEventDetail() 获取<p>事件详情，根据您输入的事件码传入对应的事件信息</p>
 * @method void setEventDetail(EventDetail $EventDetail) 设置<p>事件详情，根据您输入的事件码传入对应的事件信息</p>
 * @method string getUserId() 获取<p>用户在您系统中的唯一ID</p>
 * @method void setUserId(string $UserId) 设置<p>用户在您系统中的唯一ID</p>
 * @method string getUserEmail() 获取<p>用户邮箱</p>
 * @method void setUserEmail(string $UserEmail) 设置<p>用户邮箱</p>
 * @method string getUserPhone() 获取<p>用户提供的联系方式</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
 * @method void setUserPhone(string $UserPhone) 设置<p>用户提供的联系方式</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
 * @method Browser getBrowser() 获取<p>web浏览器相关信息，若您已集成我们的设备指纹SDK，则无需传入此字段</p>
 * @method void setBrowser(Browser $Browser) 设置<p>web浏览器相关信息，若您已集成我们的设备指纹SDK，则无需传入此字段</p>
 * @method App getApp() 获取<p>应用程序、操作系统和移动设备详细信息，若您已集成我们的设备指纹SDK，则无需传入此字段</p>
 * @method void setApp(App $App) 设置<p>应用程序、操作系统和移动设备详细信息，若您已集成我们的设备指纹SDK，则无需传入此字段</p>
 * @method DataAuthorization getDataAuthorization() 获取<p>数据授权信息，境内地域必填</p>
 * @method void setDataAuthorization(DataAuthorization $DataAuthorization) 设置<p>数据授权信息，境内地域必填</p>
 * @method string getUserPhoneEncrypt() 获取<p>手机号码加密方式，境内地域必填</p><p>枚举值：</p><ul><li>md5： md5加密</li><li>plain： 明文</li></ul>
 * @method void setUserPhoneEncrypt(string $UserPhoneEncrypt) 设置<p>手机号码加密方式，境内地域必填</p><p>枚举值：</p><ul><li>md5： md5加密</li><li>plain： 明文</li></ul>
 * @method string getWeChatOpenId() 获取<p>微信开放账号</p>
 * @method void setWeChatOpenId(string $WeChatOpenId) 设置<p>微信开放账号</p>
 * @method string getQQOpenId() 获取<p>QQ开放账号</p>
 * @method void setQQOpenId(string $QQOpenId) 设置<p>QQ开放账号</p>
 * @method string getQQAppId() 获取<p>QQ应用ID，当传入QQ开放账号时，该字段必填，QQ分配给网站或应用的AppId，用来唯一标识网站或应用</p>
 * @method void setQQAppId(string $QQAppId) 设置<p>QQ应用ID，当传入QQ开放账号时，该字段必填，QQ分配给网站或应用的AppId，用来唯一标识网站或应用</p>
 */
class AssessRiskRequest extends AbstractModel
{
    /**
     * @var string <p>事件码。用于指定业务接入的场景节点。</p><p> 账号保护产品下的标准事件包含：</p><ul><li> login： 登录<p></p></li> <li>register： 注册 </li><li>sms： 短信 </li><li>logout： 登出 </li><li>modify_account： 修改账号 </li><li>modify_password： 修改密码 </li><li>security_verification： 安全验证</li></ul><p>交易保护产品下的标准事件包含：</p><ul><li>create_order： 创建订单 </li><li>transaction： 交易支付 </li><li>charge_back： 拒付</li></ul><p>营销保护产品下的标准事件包含：</p><ul><li>add_promotion： 参加营销活动 </li><li>redeem： 兑奖 </li><li>withdraw： 提现 </li><li>cust_event： 自定义事件，cust_xxx </li><li>scan_code： 扫码 </li><li>lucky_draw： 抽奖 </li><li>task： 做任务 </li><li>invitation： 邀请 </li><li>claim_red_packet： 领红包 </li><li>browse： 浏览</li></ul><p>自定义事件可与RCE约定后进行风险评估</p>
     */
    public $EventCode;

    /**
     * @var string <p>事件的发生时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
     */
    public $EventTime;

    /**
     * @var string <p>用户当前会话 ID， 用于关联用户登录前后的动作，如果没有传UserId，则SessionId必传，如缺失则可填充空字符串</p>
     */
    public $SessionId;

    /**
     * @var string <p>用户设备指纹token标识，在您的网站或者应用程序中集成设备指纹的SDK后获取</p>
     */
    public $DeviceToken;

    /**
     * @var string <p>客户端 IP 地址（IPv4或IPv6）</p>
     */
    public $UserIp;

    /**
     * @var EventDetail <p>事件详情，根据您输入的事件码传入对应的事件信息</p>
     */
    public $EventDetail;

    /**
     * @var string <p>用户在您系统中的唯一ID</p>
     */
    public $UserId;

    /**
     * @var string <p>用户邮箱</p>
     */
    public $UserEmail;

    /**
     * @var string <p>用户提供的联系方式</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
     */
    public $UserPhone;

    /**
     * @var Browser <p>web浏览器相关信息，若您已集成我们的设备指纹SDK，则无需传入此字段</p>
     */
    public $Browser;

    /**
     * @var App <p>应用程序、操作系统和移动设备详细信息，若您已集成我们的设备指纹SDK，则无需传入此字段</p>
     */
    public $App;

    /**
     * @var DataAuthorization <p>数据授权信息，境内地域必填</p>
     */
    public $DataAuthorization;

    /**
     * @var string <p>手机号码加密方式，境内地域必填</p><p>枚举值：</p><ul><li>md5： md5加密</li><li>plain： 明文</li></ul>
     */
    public $UserPhoneEncrypt;

    /**
     * @var string <p>微信开放账号</p>
     */
    public $WeChatOpenId;

    /**
     * @var string <p>QQ开放账号</p>
     */
    public $QQOpenId;

    /**
     * @var string <p>QQ应用ID，当传入QQ开放账号时，该字段必填，QQ分配给网站或应用的AppId，用来唯一标识网站或应用</p>
     */
    public $QQAppId;

    /**
     * @param string $EventCode <p>事件码。用于指定业务接入的场景节点。</p><p> 账号保护产品下的标准事件包含：</p><ul><li> login： 登录<p></p></li> <li>register： 注册 </li><li>sms： 短信 </li><li>logout： 登出 </li><li>modify_account： 修改账号 </li><li>modify_password： 修改密码 </li><li>security_verification： 安全验证</li></ul><p>交易保护产品下的标准事件包含：</p><ul><li>create_order： 创建订单 </li><li>transaction： 交易支付 </li><li>charge_back： 拒付</li></ul><p>营销保护产品下的标准事件包含：</p><ul><li>add_promotion： 参加营销活动 </li><li>redeem： 兑奖 </li><li>withdraw： 提现 </li><li>cust_event： 自定义事件，cust_xxx </li><li>scan_code： 扫码 </li><li>lucky_draw： 抽奖 </li><li>task： 做任务 </li><li>invitation： 邀请 </li><li>claim_red_packet： 领红包 </li><li>browse： 浏览</li></ul><p>自定义事件可与RCE约定后进行风险评估</p>
     * @param string $EventTime <p>事件的发生时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
     * @param string $SessionId <p>用户当前会话 ID， 用于关联用户登录前后的动作，如果没有传UserId，则SessionId必传，如缺失则可填充空字符串</p>
     * @param string $DeviceToken <p>用户设备指纹token标识，在您的网站或者应用程序中集成设备指纹的SDK后获取</p>
     * @param string $UserIp <p>客户端 IP 地址（IPv4或IPv6）</p>
     * @param EventDetail $EventDetail <p>事件详情，根据您输入的事件码传入对应的事件信息</p>
     * @param string $UserId <p>用户在您系统中的唯一ID</p>
     * @param string $UserEmail <p>用户邮箱</p>
     * @param string $UserPhone <p>用户提供的联系方式</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
     * @param Browser $Browser <p>web浏览器相关信息，若您已集成我们的设备指纹SDK，则无需传入此字段</p>
     * @param App $App <p>应用程序、操作系统和移动设备详细信息，若您已集成我们的设备指纹SDK，则无需传入此字段</p>
     * @param DataAuthorization $DataAuthorization <p>数据授权信息，境内地域必填</p>
     * @param string $UserPhoneEncrypt <p>手机号码加密方式，境内地域必填</p><p>枚举值：</p><ul><li>md5： md5加密</li><li>plain： 明文</li></ul>
     * @param string $WeChatOpenId <p>微信开放账号</p>
     * @param string $QQOpenId <p>QQ开放账号</p>
     * @param string $QQAppId <p>QQ应用ID，当传入QQ开放账号时，该字段必填，QQ分配给网站或应用的AppId，用来唯一标识网站或应用</p>
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
        if (array_key_exists("EventCode",$param) and $param["EventCode"] !== null) {
            $this->EventCode = $param["EventCode"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("DeviceToken",$param) and $param["DeviceToken"] !== null) {
            $this->DeviceToken = $param["DeviceToken"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("EventDetail",$param) and $param["EventDetail"] !== null) {
            $this->EventDetail = new EventDetail();
            $this->EventDetail->deserialize($param["EventDetail"]);
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserEmail",$param) and $param["UserEmail"] !== null) {
            $this->UserEmail = $param["UserEmail"];
        }

        if (array_key_exists("UserPhone",$param) and $param["UserPhone"] !== null) {
            $this->UserPhone = $param["UserPhone"];
        }

        if (array_key_exists("Browser",$param) and $param["Browser"] !== null) {
            $this->Browser = new Browser();
            $this->Browser->deserialize($param["Browser"]);
        }

        if (array_key_exists("App",$param) and $param["App"] !== null) {
            $this->App = new App();
            $this->App->deserialize($param["App"]);
        }

        if (array_key_exists("DataAuthorization",$param) and $param["DataAuthorization"] !== null) {
            $this->DataAuthorization = new DataAuthorization();
            $this->DataAuthorization->deserialize($param["DataAuthorization"]);
        }

        if (array_key_exists("UserPhoneEncrypt",$param) and $param["UserPhoneEncrypt"] !== null) {
            $this->UserPhoneEncrypt = $param["UserPhoneEncrypt"];
        }

        if (array_key_exists("WeChatOpenId",$param) and $param["WeChatOpenId"] !== null) {
            $this->WeChatOpenId = $param["WeChatOpenId"];
        }

        if (array_key_exists("QQOpenId",$param) and $param["QQOpenId"] !== null) {
            $this->QQOpenId = $param["QQOpenId"];
        }

        if (array_key_exists("QQAppId",$param) and $param["QQAppId"] !== null) {
            $this->QQAppId = $param["QQAppId"];
        }
    }
}
