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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InstallAndroidInstancesAppWithURL请求参数结构体
 *
 * @method array getAndroidInstanceIds() 获取实例ID
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置实例ID
 * @method string getAndroidAppURL() 获取安卓应用下载 URL
 * @method void setAndroidAppURL(string $AndroidAppURL) 设置安卓应用下载 URL
 * @method string getAndroidAppMD5() 获取安卓应用MD5码值（32位小写十六进制字符串）
 * @method void setAndroidAppMD5(string $AndroidAppMD5) 设置安卓应用MD5码值（32位小写十六进制字符串）
 */
class InstallAndroidInstancesAppWithURLRequest extends AbstractModel
{
    /**
     * @var array 实例ID
     */
    public $AndroidInstanceIds;

    /**
     * @var string 安卓应用下载 URL
     */
    public $AndroidAppURL;

    /**
     * @var string 安卓应用MD5码值（32位小写十六进制字符串）
     */
    public $AndroidAppMD5;

    /**
     * @param array $AndroidInstanceIds 实例ID
     * @param string $AndroidAppURL 安卓应用下载 URL
     * @param string $AndroidAppMD5 安卓应用MD5码值（32位小写十六进制字符串）
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
        if (array_key_exists("AndroidInstanceIds",$param) and $param["AndroidInstanceIds"] !== null) {
            $this->AndroidInstanceIds = $param["AndroidInstanceIds"];
        }

        if (array_key_exists("AndroidAppURL",$param) and $param["AndroidAppURL"] !== null) {
            $this->AndroidAppURL = $param["AndroidAppURL"];
        }

        if (array_key_exists("AndroidAppMD5",$param) and $param["AndroidAppMD5"] !== null) {
            $this->AndroidAppMD5 = $param["AndroidAppMD5"];
        }
    }
}
