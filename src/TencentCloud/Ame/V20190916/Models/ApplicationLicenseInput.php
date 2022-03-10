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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户license基础信息
 *
 * @method string getAppName() 获取应用名称，注：后面三个字段AndroidPackageName、IOSBundleId、PcIdentifier，三者选填一个
 * @method void setAppName(string $AppName) 设置应用名称，注：后面三个字段AndroidPackageName、IOSBundleId、PcIdentifier，三者选填一个
 * @method string getAndroidPackageName() 获取app的安卓包名
 * @method void setAndroidPackageName(string $AndroidPackageName) 设置app的安卓包名
 * @method string getIOSBundleId() 获取app的IOS的BundleId名
 * @method void setIOSBundleId(string $IOSBundleId) 设置app的IOS的BundleId名
 * @method string getPcIdentifier() 获取PC标识名
 * @method void setPcIdentifier(string $PcIdentifier) 设置PC标识名
 */
class ApplicationLicenseInput extends AbstractModel
{
    /**
     * @var string 应用名称，注：后面三个字段AndroidPackageName、IOSBundleId、PcIdentifier，三者选填一个
     */
    public $AppName;

    /**
     * @var string app的安卓包名
     */
    public $AndroidPackageName;

    /**
     * @var string app的IOS的BundleId名
     */
    public $IOSBundleId;

    /**
     * @var string PC标识名
     */
    public $PcIdentifier;

    /**
     * @param string $AppName 应用名称，注：后面三个字段AndroidPackageName、IOSBundleId、PcIdentifier，三者选填一个
     * @param string $AndroidPackageName app的安卓包名
     * @param string $IOSBundleId app的IOS的BundleId名
     * @param string $PcIdentifier PC标识名
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AndroidPackageName",$param) and $param["AndroidPackageName"] !== null) {
            $this->AndroidPackageName = $param["AndroidPackageName"];
        }

        if (array_key_exists("IOSBundleId",$param) and $param["IOSBundleId"] !== null) {
            $this->IOSBundleId = $param["IOSBundleId"];
        }

        if (array_key_exists("PcIdentifier",$param) and $param["PcIdentifier"] !== null) {
            $this->PcIdentifier = $param["PcIdentifier"];
        }
    }
}
