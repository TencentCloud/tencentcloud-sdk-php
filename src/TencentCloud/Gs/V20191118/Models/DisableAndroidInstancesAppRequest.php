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
 * DisableAndroidInstancesApp请求参数结构体
 *
 * @method array getAndroidInstanceIds() 获取安卓实例 ID 列表（最大100条数据）
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置安卓实例 ID 列表（最大100条数据）
 * @method string getPackageName() 获取应用包名
 * @method void setPackageName(string $PackageName) 设置应用包名
 */
class DisableAndroidInstancesAppRequest extends AbstractModel
{
    /**
     * @var array 安卓实例 ID 列表（最大100条数据）
     */
    public $AndroidInstanceIds;

    /**
     * @var string 应用包名
     */
    public $PackageName;

    /**
     * @param array $AndroidInstanceIds 安卓实例 ID 列表（最大100条数据）
     * @param string $PackageName 应用包名
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

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }
    }
}
