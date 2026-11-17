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
 * DeleteGPUResourceGroup请求参数结构体
 *
 * @method string getResourceGroupId() 获取待删除的 GPU 资源组 ID，必填、非空，最多 64 字节。资源组必须属于当前租户，且已清空有效 GPU 实例、占用绑定和关联沙箱工具。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置待删除的 GPU 资源组 ID，必填、非空，最多 64 字节。资源组必须属于当前租户，且已清空有效 GPU 实例、占用绑定和关联沙箱工具。
 */
class DeleteGPUResourceGroupRequest extends AbstractModel
{
    /**
     * @var string 待删除的 GPU 资源组 ID，必填、非空，最多 64 字节。资源组必须属于当前租户，且已清空有效 GPU 实例、占用绑定和关联沙箱工具。
     */
    public $ResourceGroupId;

    /**
     * @param string $ResourceGroupId 待删除的 GPU 资源组 ID，必填、非空，最多 64 字节。资源组必须属于当前租户，且已清空有效 GPU 实例、占用绑定和关联沙箱工具。
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
    }
}
