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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyModuleImage请求参数结构体
 *
 * @method string getDefaultImageId() 获取默认镜像ID
 * @method void setDefaultImageId(string $DefaultImageId) 设置默认镜像ID
 * @method string getModuleId() 获取模块ID
 * @method void setModuleId(string $ModuleId) 设置模块ID
 */
class ModifyModuleImageRequest extends AbstractModel
{
    /**
     * @var string 默认镜像ID
     */
    public $DefaultImageId;

    /**
     * @var string 模块ID
     */
    public $ModuleId;

    /**
     * @param string $DefaultImageId 默认镜像ID
     * @param string $ModuleId 模块ID
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
        if (array_key_exists("DefaultImageId",$param) and $param["DefaultImageId"] !== null) {
            $this->DefaultImageId = $param["DefaultImageId"];
        }

        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }
    }
}
