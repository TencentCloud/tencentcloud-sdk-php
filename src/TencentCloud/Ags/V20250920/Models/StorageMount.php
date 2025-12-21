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
 * 沙箱工具中实例存储挂载配置
 *
 * @method string getName() 获取存储挂载配置名称
 * @method void setName(string $Name) 设置存储挂载配置名称
 * @method StorageSource getStorageSource() 获取存储配置
 * @method void setStorageSource(StorageSource $StorageSource) 设置存储配置
 * @method string getMountPath() 获取沙箱实例本地挂载路径
 * @method void setMountPath(string $MountPath) 设置沙箱实例本地挂载路径
 * @method boolean getReadOnly() 获取存储挂载读写权限配置，默认为false
 * @method void setReadOnly(boolean $ReadOnly) 设置存储挂载读写权限配置，默认为false
 */
class StorageMount extends AbstractModel
{
    /**
     * @var string 存储挂载配置名称
     */
    public $Name;

    /**
     * @var StorageSource 存储配置
     */
    public $StorageSource;

    /**
     * @var string 沙箱实例本地挂载路径
     */
    public $MountPath;

    /**
     * @var boolean 存储挂载读写权限配置，默认为false
     */
    public $ReadOnly;

    /**
     * @param string $Name 存储挂载配置名称
     * @param StorageSource $StorageSource 存储配置
     * @param string $MountPath 沙箱实例本地挂载路径
     * @param boolean $ReadOnly 存储挂载读写权限配置，默认为false
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

        if (array_key_exists("StorageSource",$param) and $param["StorageSource"] !== null) {
            $this->StorageSource = new StorageSource();
            $this->StorageSource->deserialize($param["StorageSource"]);
        }

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }
    }
}
