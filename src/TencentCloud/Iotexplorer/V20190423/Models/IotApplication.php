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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用信息
 *
 * @method string getIotAppID() 获取应用 ID
 * @method void setIotAppID(string $IotAppID) 设置应用 ID
 * @method string getAppName() 获取应用名称
 * @method void setAppName(string $AppName) 设置应用名称
 * @method string getDescription() 获取应用说明
 * @method void setDescription(string $Description) 设置应用说明
 * @method integer getDevMode() 获取开发模式
 * @method void setDevMode(integer $DevMode) 设置开发模式
 * @method string getIOSAppKey() 获取iOS 平台 AppKey
 * @method void setIOSAppKey(string $IOSAppKey) 设置iOS 平台 AppKey
 * @method string getIOSAppSecret() 获取iOS 平台 AppSecret
 * @method void setIOSAppSecret(string $IOSAppSecret) 设置iOS 平台 AppSecret
 * @method string getAndroidAppKey() 获取Android 平台 AppKey
 * @method void setAndroidAppKey(string $AndroidAppKey) 设置Android 平台 AppKey
 * @method string getAndroidAppSecret() 获取Android 平台 AppSecret
 * @method void setAndroidAppSecret(string $AndroidAppSecret) 设置Android 平台 AppSecret
 * @method string getProducts() 获取绑定的产品列表，数据为：ProdcutID 数组 JSON 序列化后的字符串
 * @method void setProducts(string $Products) 设置绑定的产品列表，数据为：ProdcutID 数组 JSON 序列化后的字符串
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getPushSecretID() 获取信鸽推送APP ID
 * @method void setPushSecretID(string $PushSecretID) 设置信鸽推送APP ID
 * @method string getPushSecretKey() 获取信鸽推送SECRET KEY
 * @method void setPushSecretKey(string $PushSecretKey) 设置信鸽推送SECRET KEY
 * @method string getPushEnvironment() 获取iOS平台推送环境
 * @method void setPushEnvironment(string $PushEnvironment) 设置iOS平台推送环境
 * @method string getMiniProgramAppKey() 获取小程序平台 AppKey
 * @method void setMiniProgramAppKey(string $MiniProgramAppKey) 设置小程序平台 AppKey
 * @method string getMiniProgramAppSecret() 获取小程序平台 AppSecret
 * @method void setMiniProgramAppSecret(string $MiniProgramAppSecret) 设置小程序平台 AppSecret
 * @method string getTPNSiOSAccessID() 获取TPNS服务iOS应用AccessID，TPNS全称为腾讯移动推送（Tencent Push Notification Service），详见：https://cloud.tencent.com/document/product/548
 * @method void setTPNSiOSAccessID(string $TPNSiOSAccessID) 设置TPNS服务iOS应用AccessID，TPNS全称为腾讯移动推送（Tencent Push Notification Service），详见：https://cloud.tencent.com/document/product/548
 * @method string getTPNSiOSSecretKey() 获取TPNS服务iOS应用SecretKey
 * @method void setTPNSiOSSecretKey(string $TPNSiOSSecretKey) 设置TPNS服务iOS应用SecretKey
 * @method string getTPNSiOSPushEnvironment() 获取TPNS服务iOS应用推送环境
 * @method void setTPNSiOSPushEnvironment(string $TPNSiOSPushEnvironment) 设置TPNS服务iOS应用推送环境
 * @method string getTPNSAndroidAccessID() 获取TPNS服务Android应用AccessID
 * @method void setTPNSAndroidAccessID(string $TPNSAndroidAccessID) 设置TPNS服务Android应用AccessID
 * @method string getTPNSAndroidSecretKey() 获取TPNS服务Android应用SecretKey
 * @method void setTPNSAndroidSecretKey(string $TPNSAndroidSecretKey) 设置TPNS服务Android应用SecretKey
 * @method string getTPNSiOSRegion() 获取TPNS服务iOS应用所属地域，详细说明参见 ModifyApplication 同名入参。
 * @method void setTPNSiOSRegion(string $TPNSiOSRegion) 设置TPNS服务iOS应用所属地域，详细说明参见 ModifyApplication 同名入参。
 * @method string getTPNSAndroidRegion() 获取TPNS服务Android应用所属地域，详细说明参见 ModifyApplication 同名入参。
 * @method void setTPNSAndroidRegion(string $TPNSAndroidRegion) 设置TPNS服务Android应用所属地域，详细说明参见 ModifyApplication 同名入参。
 * @method string getSelfSmsAppId() 获取自主短信配置APPID
 * @method void setSelfSmsAppId(string $SelfSmsAppId) 设置自主短信配置APPID
 * @method string getSelfSmsAppKey() 获取自主短信配置APPKey
 * @method void setSelfSmsAppKey(string $SelfSmsAppKey) 设置自主短信配置APPKey
 * @method string getSelfSmsSign() 获取自主短信配置签名
 * @method void setSelfSmsSign(string $SelfSmsSign) 设置自主短信配置签名
 * @method integer getSelfSmsTemplateId() 获取自主短信配置模板ID
 * @method void setSelfSmsTemplateId(integer $SelfSmsTemplateId) 设置自主短信配置模板ID
 * @method integer getWechatNotifyStatus() 获取第三方小程序强提醒开关 0：关闭；1：开启
 * @method void setWechatNotifyStatus(integer $WechatNotifyStatus) 设置第三方小程序强提醒开关 0：关闭；1：开启
 * @method string getInterconnectionProducts() 获取互联互通产品ID列表
 * @method void setInterconnectionProducts(string $InterconnectionProducts) 设置互联互通产品ID列表
 */
class IotApplication extends AbstractModel
{
    /**
     * @var string 应用 ID
     */
    public $IotAppID;

    /**
     * @var string 应用名称
     */
    public $AppName;

    /**
     * @var string 应用说明
     */
    public $Description;

    /**
     * @var integer 开发模式
     */
    public $DevMode;

    /**
     * @var string iOS 平台 AppKey
     */
    public $IOSAppKey;

    /**
     * @var string iOS 平台 AppSecret
     */
    public $IOSAppSecret;

    /**
     * @var string Android 平台 AppKey
     */
    public $AndroidAppKey;

    /**
     * @var string Android 平台 AppSecret
     */
    public $AndroidAppSecret;

    /**
     * @var string 绑定的产品列表，数据为：ProdcutID 数组 JSON 序列化后的字符串
     */
    public $Products;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 信鸽推送APP ID
     */
    public $PushSecretID;

    /**
     * @var string 信鸽推送SECRET KEY
     */
    public $PushSecretKey;

    /**
     * @var string iOS平台推送环境
     */
    public $PushEnvironment;

    /**
     * @var string 小程序平台 AppKey
     */
    public $MiniProgramAppKey;

    /**
     * @var string 小程序平台 AppSecret
     */
    public $MiniProgramAppSecret;

    /**
     * @var string TPNS服务iOS应用AccessID，TPNS全称为腾讯移动推送（Tencent Push Notification Service），详见：https://cloud.tencent.com/document/product/548
     */
    public $TPNSiOSAccessID;

    /**
     * @var string TPNS服务iOS应用SecretKey
     */
    public $TPNSiOSSecretKey;

    /**
     * @var string TPNS服务iOS应用推送环境
     */
    public $TPNSiOSPushEnvironment;

    /**
     * @var string TPNS服务Android应用AccessID
     */
    public $TPNSAndroidAccessID;

    /**
     * @var string TPNS服务Android应用SecretKey
     */
    public $TPNSAndroidSecretKey;

    /**
     * @var string TPNS服务iOS应用所属地域，详细说明参见 ModifyApplication 同名入参。
     */
    public $TPNSiOSRegion;

    /**
     * @var string TPNS服务Android应用所属地域，详细说明参见 ModifyApplication 同名入参。
     */
    public $TPNSAndroidRegion;

    /**
     * @var string 自主短信配置APPID
     */
    public $SelfSmsAppId;

    /**
     * @var string 自主短信配置APPKey
     */
    public $SelfSmsAppKey;

    /**
     * @var string 自主短信配置签名
     */
    public $SelfSmsSign;

    /**
     * @var integer 自主短信配置模板ID
     */
    public $SelfSmsTemplateId;

    /**
     * @var integer 第三方小程序强提醒开关 0：关闭；1：开启
     */
    public $WechatNotifyStatus;

    /**
     * @var string 互联互通产品ID列表
     */
    public $InterconnectionProducts;

    /**
     * @param string $IotAppID 应用 ID
     * @param string $AppName 应用名称
     * @param string $Description 应用说明
     * @param integer $DevMode 开发模式
     * @param string $IOSAppKey iOS 平台 AppKey
     * @param string $IOSAppSecret iOS 平台 AppSecret
     * @param string $AndroidAppKey Android 平台 AppKey
     * @param string $AndroidAppSecret Android 平台 AppSecret
     * @param string $Products 绑定的产品列表，数据为：ProdcutID 数组 JSON 序列化后的字符串
     * @param string $CreateTime 创建时间
     * @param string $ProjectId 项目ID
     * @param string $PushSecretID 信鸽推送APP ID
     * @param string $PushSecretKey 信鸽推送SECRET KEY
     * @param string $PushEnvironment iOS平台推送环境
     * @param string $MiniProgramAppKey 小程序平台 AppKey
     * @param string $MiniProgramAppSecret 小程序平台 AppSecret
     * @param string $TPNSiOSAccessID TPNS服务iOS应用AccessID，TPNS全称为腾讯移动推送（Tencent Push Notification Service），详见：https://cloud.tencent.com/document/product/548
     * @param string $TPNSiOSSecretKey TPNS服务iOS应用SecretKey
     * @param string $TPNSiOSPushEnvironment TPNS服务iOS应用推送环境
     * @param string $TPNSAndroidAccessID TPNS服务Android应用AccessID
     * @param string $TPNSAndroidSecretKey TPNS服务Android应用SecretKey
     * @param string $TPNSiOSRegion TPNS服务iOS应用所属地域，详细说明参见 ModifyApplication 同名入参。
     * @param string $TPNSAndroidRegion TPNS服务Android应用所属地域，详细说明参见 ModifyApplication 同名入参。
     * @param string $SelfSmsAppId 自主短信配置APPID
     * @param string $SelfSmsAppKey 自主短信配置APPKey
     * @param string $SelfSmsSign 自主短信配置签名
     * @param integer $SelfSmsTemplateId 自主短信配置模板ID
     * @param integer $WechatNotifyStatus 第三方小程序强提醒开关 0：关闭；1：开启
     * @param string $InterconnectionProducts 互联互通产品ID列表
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
        if (array_key_exists("IotAppID",$param) and $param["IotAppID"] !== null) {
            $this->IotAppID = $param["IotAppID"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DevMode",$param) and $param["DevMode"] !== null) {
            $this->DevMode = $param["DevMode"];
        }

        if (array_key_exists("IOSAppKey",$param) and $param["IOSAppKey"] !== null) {
            $this->IOSAppKey = $param["IOSAppKey"];
        }

        if (array_key_exists("IOSAppSecret",$param) and $param["IOSAppSecret"] !== null) {
            $this->IOSAppSecret = $param["IOSAppSecret"];
        }

        if (array_key_exists("AndroidAppKey",$param) and $param["AndroidAppKey"] !== null) {
            $this->AndroidAppKey = $param["AndroidAppKey"];
        }

        if (array_key_exists("AndroidAppSecret",$param) and $param["AndroidAppSecret"] !== null) {
            $this->AndroidAppSecret = $param["AndroidAppSecret"];
        }

        if (array_key_exists("Products",$param) and $param["Products"] !== null) {
            $this->Products = $param["Products"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PushSecretID",$param) and $param["PushSecretID"] !== null) {
            $this->PushSecretID = $param["PushSecretID"];
        }

        if (array_key_exists("PushSecretKey",$param) and $param["PushSecretKey"] !== null) {
            $this->PushSecretKey = $param["PushSecretKey"];
        }

        if (array_key_exists("PushEnvironment",$param) and $param["PushEnvironment"] !== null) {
            $this->PushEnvironment = $param["PushEnvironment"];
        }

        if (array_key_exists("MiniProgramAppKey",$param) and $param["MiniProgramAppKey"] !== null) {
            $this->MiniProgramAppKey = $param["MiniProgramAppKey"];
        }

        if (array_key_exists("MiniProgramAppSecret",$param) and $param["MiniProgramAppSecret"] !== null) {
            $this->MiniProgramAppSecret = $param["MiniProgramAppSecret"];
        }

        if (array_key_exists("TPNSiOSAccessID",$param) and $param["TPNSiOSAccessID"] !== null) {
            $this->TPNSiOSAccessID = $param["TPNSiOSAccessID"];
        }

        if (array_key_exists("TPNSiOSSecretKey",$param) and $param["TPNSiOSSecretKey"] !== null) {
            $this->TPNSiOSSecretKey = $param["TPNSiOSSecretKey"];
        }

        if (array_key_exists("TPNSiOSPushEnvironment",$param) and $param["TPNSiOSPushEnvironment"] !== null) {
            $this->TPNSiOSPushEnvironment = $param["TPNSiOSPushEnvironment"];
        }

        if (array_key_exists("TPNSAndroidAccessID",$param) and $param["TPNSAndroidAccessID"] !== null) {
            $this->TPNSAndroidAccessID = $param["TPNSAndroidAccessID"];
        }

        if (array_key_exists("TPNSAndroidSecretKey",$param) and $param["TPNSAndroidSecretKey"] !== null) {
            $this->TPNSAndroidSecretKey = $param["TPNSAndroidSecretKey"];
        }

        if (array_key_exists("TPNSiOSRegion",$param) and $param["TPNSiOSRegion"] !== null) {
            $this->TPNSiOSRegion = $param["TPNSiOSRegion"];
        }

        if (array_key_exists("TPNSAndroidRegion",$param) and $param["TPNSAndroidRegion"] !== null) {
            $this->TPNSAndroidRegion = $param["TPNSAndroidRegion"];
        }

        if (array_key_exists("SelfSmsAppId",$param) and $param["SelfSmsAppId"] !== null) {
            $this->SelfSmsAppId = $param["SelfSmsAppId"];
        }

        if (array_key_exists("SelfSmsAppKey",$param) and $param["SelfSmsAppKey"] !== null) {
            $this->SelfSmsAppKey = $param["SelfSmsAppKey"];
        }

        if (array_key_exists("SelfSmsSign",$param) and $param["SelfSmsSign"] !== null) {
            $this->SelfSmsSign = $param["SelfSmsSign"];
        }

        if (array_key_exists("SelfSmsTemplateId",$param) and $param["SelfSmsTemplateId"] !== null) {
            $this->SelfSmsTemplateId = $param["SelfSmsTemplateId"];
        }

        if (array_key_exists("WechatNotifyStatus",$param) and $param["WechatNotifyStatus"] !== null) {
            $this->WechatNotifyStatus = $param["WechatNotifyStatus"];
        }

        if (array_key_exists("InterconnectionProducts",$param) and $param["InterconnectionProducts"] !== null) {
            $this->InterconnectionProducts = $param["InterconnectionProducts"];
        }
    }
}
