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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGPUResourceGroup请求参数结构体
 *
 * @method string getResourceGroupId() 获取GPU 资源组 ID，必填、非空，最多 64 字节。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置GPU 资源组 ID，必填、非空，最多 64 字节。
 * @method string getName() 获取新的资源组名称；去除首尾空白后不能为空，最多 128 字节，UTF-8 中文通常占 3 字节。
 * @method void setName(string $Name) 设置新的资源组名称；去除首尾空白后不能为空，最多 128 字节，UTF-8 中文通常占 3 字节。
 */
class ModifyGPUResourceGroupRequest extends AbstractModel
{
    /**
     * @var string GPU 资源组 ID，必填、非空，最多 64 字节。
     */
    public $ResourceGroupId;

    /**
     * @var string 新的资源组名称；去除首尾空白后不能为空，最多 128 字节，UTF-8 中文通常占 3 字节。
     */
    public $Name;

    /**
     * @param string $ResourceGroupId GPU 资源组 ID，必填、非空，最多 64 字节。
     * @param string $Name 新的资源组名称；去除首尾空白后不能为空，最多 128 字节，UTF-8 中文通常占 3 字节。
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
        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
