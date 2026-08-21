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
 * UninstallAndroidInstancesApp请求参数结构体
 *
 * @method array getAndroidInstanceIds() 获取<p>实例ID</p>
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置<p>实例ID</p>
 * @method string getAndroidAppId() 获取<p>应用ID</p>
 * @method void setAndroidAppId(string $AndroidAppId) 设置<p>应用ID</p>
 * @method string getPackageName() 获取<p>包名</p>
 * @method void setPackageName(string $PackageName) 设置<p>包名</p>
 */
class UninstallAndroidInstancesAppRequest extends AbstractModel
{
    /**
     * @var array <p>实例ID</p>
     */
    public $AndroidInstanceIds;

    /**
     * @var string <p>应用ID</p>
     */
    public $AndroidAppId;

    /**
     * @var string <p>包名</p>
     */
    public $PackageName;

    /**
     * @param array $AndroidInstanceIds <p>实例ID</p>
     * @param string $AndroidAppId <p>应用ID</p>
     * @param string $PackageName <p>包名</p>
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

        if (array_key_exists("AndroidAppId",$param) and $param["AndroidAppId"] !== null) {
            $this->AndroidAppId = $param["AndroidAppId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }
    }
}
