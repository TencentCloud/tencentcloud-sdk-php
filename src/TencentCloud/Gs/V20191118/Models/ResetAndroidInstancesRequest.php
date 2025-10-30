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
 * ResetAndroidInstances请求参数结构体
 *
 * @method array getAndroidInstanceIds() 获取实例ID列表
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置实例ID列表
 * @method string getAndroidInstanceImageId() 获取指定有效的镜像 ID。
默认取值：默认使用当前镜像。
 * @method void setAndroidInstanceImageId(string $AndroidInstanceImageId) 设置指定有效的镜像 ID。
默认取值：默认使用当前镜像。
 * @method string getMode() 获取重置模式。在 AndroidInstanceImageId 不为空时才生效。

CleanData：默认选项，清理系统属性和用户数据
KeepSystemProperties：只保留系统属性
KeepData: 保留系统属性和用户数据
 * @method void setMode(string $Mode) 设置重置模式。在 AndroidInstanceImageId 不为空时才生效。

CleanData：默认选项，清理系统属性和用户数据
KeepSystemProperties：只保留系统属性
KeepData: 保留系统属性和用户数据
 */
class ResetAndroidInstancesRequest extends AbstractModel
{
    /**
     * @var array 实例ID列表
     */
    public $AndroidInstanceIds;

    /**
     * @var string 指定有效的镜像 ID。
默认取值：默认使用当前镜像。
     */
    public $AndroidInstanceImageId;

    /**
     * @var string 重置模式。在 AndroidInstanceImageId 不为空时才生效。

CleanData：默认选项，清理系统属性和用户数据
KeepSystemProperties：只保留系统属性
KeepData: 保留系统属性和用户数据
     */
    public $Mode;

    /**
     * @param array $AndroidInstanceIds 实例ID列表
     * @param string $AndroidInstanceImageId 指定有效的镜像 ID。
默认取值：默认使用当前镜像。
     * @param string $Mode 重置模式。在 AndroidInstanceImageId 不为空时才生效。

CleanData：默认选项，清理系统属性和用户数据
KeepSystemProperties：只保留系统属性
KeepData: 保留系统属性和用户数据
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

        if (array_key_exists("AndroidInstanceImageId",$param) and $param["AndroidInstanceImageId"] !== null) {
            $this->AndroidInstanceImageId = $param["AndroidInstanceImageId"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
