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
 * @method string getName() 获取<p>存储挂载配置名称</p>
 * @method void setName(string $Name) 设置<p>存储挂载配置名称</p>
 * @method StorageSource getStorageSource() 获取<p>存储配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageSource(StorageSource $StorageSource) 设置<p>存储配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMountPath() 获取<p>沙箱实例本地挂载路径</p>
 * @method void setMountPath(string $MountPath) 设置<p>沙箱实例本地挂载路径</p>
 * @method boolean getReadOnly() 获取<p>存储挂载读写权限配置，默认为false</p>
 * @method void setReadOnly(boolean $ReadOnly) 设置<p>存储挂载读写权限配置，默认为false</p>
 */
class StorageMount extends AbstractModel
{
    /**
     * @var string <p>存储挂载配置名称</p>
     */
    public $Name;

    /**
     * @var StorageSource <p>存储配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageSource;

    /**
     * @var string <p>沙箱实例本地挂载路径</p>
     */
    public $MountPath;

    /**
     * @var boolean <p>存储挂载读写权限配置，默认为false</p>
     */
    public $ReadOnly;

    /**
     * @param string $Name <p>存储挂载配置名称</p>
     * @param StorageSource $StorageSource <p>存储配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MountPath <p>沙箱实例本地挂载路径</p>
     * @param boolean $ReadOnly <p>存储挂载读写权限配置，默认为false</p>
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
