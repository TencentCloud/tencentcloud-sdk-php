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
 * ModifyApplication请求参数结构体
 *
 * @method string getIotAppID() 获取应用ID
 * @method void setIotAppID(string $IotAppID) 设置应用ID
 * @method string getAppName() 获取应用名称
 * @method void setAppName(string $AppName) 设置应用名称
 * @method string getDescription() 获取应用说明
 * @method void setDescription(string $Description) 设置应用说明
 * @method string getProducts() 获取关联的产品
 * @method void setProducts(string $Products) 设置关联的产品
 * @method string getPushSecretID() 获取信鸽推送APP ID
 * @method void setPushSecretID(string $PushSecretID) 设置信鸽推送APP ID
 * @method string getPushSecretKey() 获取信鸽推送SECRET KEY
 * @method void setPushSecretKey(string $PushSecretKey) 设置信鸽推送SECRET KEY
 * @method string getPushEnvironment() 获取iOS平台推送环境
 * @method void setPushEnvironment(string $PushEnvironment) 设置iOS平台推送环境
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
 * @method string getTPNSiOSRegion() 获取TPNS服务iOS应用所属地域，广州：ap-guangzhou，上海：ap-shanghai，中国香港：ap-hongkong，新加坡：ap-singapore。
 * @method void setTPNSiOSRegion(string $TPNSiOSRegion) 设置TPNS服务iOS应用所属地域，广州：ap-guangzhou，上海：ap-shanghai，中国香港：ap-hongkong，新加坡：ap-singapore。
 * @method string getTPNSAndroidRegion() 获取TPNS服务Android应用所属地域，广州：ap-guangzhou，上海：ap-shanghai，中国香港：ap-hongkong，新加坡：ap-singapore。
 * @method void setTPNSAndroidRegion(string $TPNSAndroidRegion) 设置TPNS服务Android应用所属地域，广州：ap-guangzhou，上海：ap-shanghai，中国香港：ap-hongkong，新加坡：ap-singapore。
 * @method integer getTurnKeySwitch() 获取TurnKey小程序托管
 * @method void setTurnKeySwitch(integer $TurnKeySwitch) 设置TurnKey小程序托管
 */
class ModifyApplicationRequest extends AbstractModel
{
    /**
     * @var string 应用ID
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
     * @var string 关联的产品
     */
    public $Products;

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
     * @var string TPNS服务iOS应用所属地域，广州：ap-guangzhou，上海：ap-shanghai，中国香港：ap-hongkong，新加坡：ap-singapore。
     */
    public $TPNSiOSRegion;

    /**
     * @var string TPNS服务Android应用所属地域，广州：ap-guangzhou，上海：ap-shanghai，中国香港：ap-hongkong，新加坡：ap-singapore。
     */
    public $TPNSAndroidRegion;

    /**
     * @var integer TurnKey小程序托管
     */
    public $TurnKeySwitch;

    /**
     * @param string $IotAppID 应用ID
     * @param string $AppName 应用名称
     * @param string $Description 应用说明
     * @param string $Products 关联的产品
     * @param string $PushSecretID 信鸽推送APP ID
     * @param string $PushSecretKey 信鸽推送SECRET KEY
     * @param string $PushEnvironment iOS平台推送环境
     * @param string $TPNSiOSAccessID TPNS服务iOS应用AccessID，TPNS全称为腾讯移动推送（Tencent Push Notification Service），详见：https://cloud.tencent.com/document/product/548
     * @param string $TPNSiOSSecretKey TPNS服务iOS应用SecretKey
     * @param string $TPNSiOSPushEnvironment TPNS服务iOS应用推送环境
     * @param string $TPNSAndroidAccessID TPNS服务Android应用AccessID
     * @param string $TPNSAndroidSecretKey TPNS服务Android应用SecretKey
     * @param string $TPNSiOSRegion TPNS服务iOS应用所属地域，广州：ap-guangzhou，上海：ap-shanghai，中国香港：ap-hongkong，新加坡：ap-singapore。
     * @param string $TPNSAndroidRegion TPNS服务Android应用所属地域，广州：ap-guangzhou，上海：ap-shanghai，中国香港：ap-hongkong，新加坡：ap-singapore。
     * @param integer $TurnKeySwitch TurnKey小程序托管
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

        if (array_key_exists("Products",$param) and $param["Products"] !== null) {
            $this->Products = $param["Products"];
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

        if (array_key_exists("TurnKeySwitch",$param) and $param["TurnKeySwitch"] !== null) {
            $this->TurnKeySwitch = $param["TurnKeySwitch"];
        }
    }
}
