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
 * StartAndroidInstancesApp请求参数结构体
 *
 * @method array getAndroidInstanceIds() 获取实例 ID 列表
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置实例 ID 列表
 * @method string getPackageName() 获取应用包名
 * @method void setPackageName(string $PackageName) 设置应用包名
 * @method string getActivity() 获取启动页。建议指定启动页来启动应用，避免启动失败。如果启动页为空，系统尝试根据 PackageName 启动，但不保证成功。
 * @method void setActivity(string $Activity) 设置启动页。建议指定启动页来启动应用，避免启动失败。如果启动页为空，系统尝试根据 PackageName 启动，但不保证成功。
 */
class StartAndroidInstancesAppRequest extends AbstractModel
{
    /**
     * @var array 实例 ID 列表
     */
    public $AndroidInstanceIds;

    /**
     * @var string 应用包名
     */
    public $PackageName;

    /**
     * @var string 启动页。建议指定启动页来启动应用，避免启动失败。如果启动页为空，系统尝试根据 PackageName 启动，但不保证成功。
     */
    public $Activity;

    /**
     * @param array $AndroidInstanceIds 实例 ID 列表
     * @param string $PackageName 应用包名
     * @param string $Activity 启动页。建议指定启动页来启动应用，避免启动失败。如果启动页为空，系统尝试根据 PackageName 启动，但不保证成功。
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

        if (array_key_exists("Activity",$param) and $param["Activity"] !== null) {
            $this->Activity = $param["Activity"];
        }
    }
}
