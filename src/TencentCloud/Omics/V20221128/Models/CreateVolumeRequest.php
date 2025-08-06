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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVolume请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境ID。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境ID。
 * @method string getName() 获取名称。
 * @method void setName(string $Name) 设置名称。
 * @method string getType() 获取缓存卷类型，取值范围：
* SHARED：多点挂载共享存储
 * @method void setType(string $Type) 设置缓存卷类型，取值范围：
* SHARED：多点挂载共享存储
 * @method string getSpec() 获取缓存卷规格，取值范围：

- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
 * @method void setSpec(string $Spec) 设置缓存卷规格，取值范围：

- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
 * @method string getDescription() 获取描述。
 * @method void setDescription(string $Description) 设置描述。
 * @method integer getCapacity() 获取缓存卷大小（GB），Turbo系列需要指定。
 * @method void setCapacity(integer $Capacity) 设置缓存卷大小（GB），Turbo系列需要指定。
 * @method boolean getEnableAutoScaleUp() 获取是否开启默认扩容，仅turbo类型文件存储支持
 * @method void setEnableAutoScaleUp(boolean $EnableAutoScaleUp) 设置是否开启默认扩容，仅turbo类型文件存储支持
 * @method string getMetaType() 获取turbo文件系统元数据属性，basic：标准型元数据；enhanced：增强型元数据
 * @method void setMetaType(string $MetaType) 设置turbo文件系统元数据属性，basic：标准型元数据；enhanced：增强型元数据
 */
class CreateVolumeRequest extends AbstractModel
{
    /**
     * @var string 环境ID。
     */
    public $EnvironmentId;

    /**
     * @var string 名称。
     */
    public $Name;

    /**
     * @var string 缓存卷类型，取值范围：
* SHARED：多点挂载共享存储
     */
    public $Type;

    /**
     * @var string 缓存卷规格，取值范围：

- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
     */
    public $Spec;

    /**
     * @var string 描述。
     */
    public $Description;

    /**
     * @var integer 缓存卷大小（GB），Turbo系列需要指定。
     */
    public $Capacity;

    /**
     * @var boolean 是否开启默认扩容，仅turbo类型文件存储支持
     */
    public $EnableAutoScaleUp;

    /**
     * @var string turbo文件系统元数据属性，basic：标准型元数据；enhanced：增强型元数据
     */
    public $MetaType;

    /**
     * @param string $EnvironmentId 环境ID。
     * @param string $Name 名称。
     * @param string $Type 缓存卷类型，取值范围：
* SHARED：多点挂载共享存储
     * @param string $Spec 缓存卷规格，取值范围：

- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
     * @param string $Description 描述。
     * @param integer $Capacity 缓存卷大小（GB），Turbo系列需要指定。
     * @param boolean $EnableAutoScaleUp 是否开启默认扩容，仅turbo类型文件存储支持
     * @param string $MetaType turbo文件系统元数据属性，basic：标准型元数据；enhanced：增强型元数据
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }

        if (array_key_exists("EnableAutoScaleUp",$param) and $param["EnableAutoScaleUp"] !== null) {
            $this->EnableAutoScaleUp = $param["EnableAutoScaleUp"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }
    }
}
