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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户端信息
 *
 * @method string getClientType() 获取场景类型。
wechat_ecommerce渠道 - h5支付方式，此字段必填；
枚举值：
CLIENT_TYPE_UNKNOWN 未知;
CLIENT_TYPE_IOS ios系统;
CLIENT_TYPE_ANDROID 安卓系统;
CLIENT_TYPE_WAP WAP场景;
CLIENT_TYPE_H5 H5场景;
 * @method void setClientType(string $ClientType) 设置场景类型。
wechat_ecommerce渠道 - h5支付方式，此字段必填；
枚举值：
CLIENT_TYPE_UNKNOWN 未知;
CLIENT_TYPE_IOS ios系统;
CLIENT_TYPE_ANDROID 安卓系统;
CLIENT_TYPE_WAP WAP场景;
CLIENT_TYPE_H5 H5场景;
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getAppUrl() 获取网站URL。
 * @method void setAppUrl(string $AppUrl) 设置网站URL。
 * @method string getBundleId() 获取IOS平台BundleID。
 * @method void setBundleId(string $BundleId) 设置IOS平台BundleID。
 * @method string getPackageName() 获取Android平台PackageName
 * @method void setPackageName(string $PackageName) 设置Android平台PackageName
 */
class CloudClientInfo extends AbstractModel
{
    /**
     * @var string 场景类型。
wechat_ecommerce渠道 - h5支付方式，此字段必填；
枚举值：
CLIENT_TYPE_UNKNOWN 未知;
CLIENT_TYPE_IOS ios系统;
CLIENT_TYPE_ANDROID 安卓系统;
CLIENT_TYPE_WAP WAP场景;
CLIENT_TYPE_H5 H5场景;
     */
    public $ClientType;

    /**
     * @var string 应用名称。
     */
    public $AppName;

    /**
     * @var string 网站URL。
     */
    public $AppUrl;

    /**
     * @var string IOS平台BundleID。
     */
    public $BundleId;

    /**
     * @var string Android平台PackageName
     */
    public $PackageName;

    /**
     * @param string $ClientType 场景类型。
wechat_ecommerce渠道 - h5支付方式，此字段必填；
枚举值：
CLIENT_TYPE_UNKNOWN 未知;
CLIENT_TYPE_IOS ios系统;
CLIENT_TYPE_ANDROID 安卓系统;
CLIENT_TYPE_WAP WAP场景;
CLIENT_TYPE_H5 H5场景;
     * @param string $AppName 应用名称。
     * @param string $AppUrl 网站URL。
     * @param string $BundleId IOS平台BundleID。
     * @param string $PackageName Android平台PackageName
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
        if (array_key_exists("ClientType",$param) and $param["ClientType"] !== null) {
            $this->ClientType = $param["ClientType"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppUrl",$param) and $param["AppUrl"] !== null) {
            $this->AppUrl = $param["AppUrl"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }
    }
}
