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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApplicationAndVideo请求参数结构体
 *
 * @method string getAppName() 获取应用名称
 * @method void setAppName(string $AppName) 设置应用名称
 * @method string getBundleId() 获取Ios 包名
 * @method void setBundleId(string $BundleId) 设置Ios 包名
 * @method string getPackageName() 获取Android 包名
 * @method void setPackageName(string $PackageName) 设置Android 包名
 */
class CreateApplicationAndVideoRequest extends AbstractModel
{
    /**
     * @var string 应用名称
     */
    public $AppName;

    /**
     * @var string Ios 包名
     */
    public $BundleId;

    /**
     * @var string Android 包名
     */
    public $PackageName;

    /**
     * @param string $AppName 应用名称
     * @param string $BundleId Ios 包名
     * @param string $PackageName Android 包名
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

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }
    }
}
