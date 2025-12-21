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
 * 沙箱实例存储挂载配置可选项，用于覆盖沙箱工具的存储配置的部分选项，并提供子路径挂载配置。
 *
 * @method string getName() 获取指定沙箱工具中的存储配置名称
 * @method void setName(string $Name) 设置指定沙箱工具中的存储配置名称
 * @method string getMountPath() 获取沙箱实例本地挂载路径（可选），默认继承工具中的存储配置
 * @method void setMountPath(string $MountPath) 设置沙箱实例本地挂载路径（可选），默认继承工具中的存储配置
 * @method string getSubPath() 获取沙箱实例存储挂载子路径（可选）
 * @method void setSubPath(string $SubPath) 设置沙箱实例存储挂载子路径（可选）
 * @method boolean getReadOnly() 获取沙箱实例存储挂载读写权限（可选），默认继承工具存储配置
 * @method void setReadOnly(boolean $ReadOnly) 设置沙箱实例存储挂载读写权限（可选），默认继承工具存储配置
 */
class MountOption extends AbstractModel
{
    /**
     * @var string 指定沙箱工具中的存储配置名称
     */
    public $Name;

    /**
     * @var string 沙箱实例本地挂载路径（可选），默认继承工具中的存储配置
     */
    public $MountPath;

    /**
     * @var string 沙箱实例存储挂载子路径（可选）
     */
    public $SubPath;

    /**
     * @var boolean 沙箱实例存储挂载读写权限（可选），默认继承工具存储配置
     */
    public $ReadOnly;

    /**
     * @param string $Name 指定沙箱工具中的存储配置名称
     * @param string $MountPath 沙箱实例本地挂载路径（可选），默认继承工具中的存储配置
     * @param string $SubPath 沙箱实例存储挂载子路径（可选）
     * @param boolean $ReadOnly 沙箱实例存储挂载读写权限（可选），默认继承工具存储配置
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }

        if (array_key_exists("SubPath",$param) and $param["SubPath"] !== null) {
            $this->SubPath = $param["SubPath"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }
    }
}
