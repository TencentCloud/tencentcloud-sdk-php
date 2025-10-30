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
 * 文件存储配置。
 *
 * @method string getStorageType() 获取文件存储类型，取值范围：
- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
 * @method void setStorageType(string $StorageType) 设置文件存储类型，取值范围：
- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
 * @method string getZone() 获取文件存储可用区。
 * @method void setZone(string $Zone) 设置文件存储可用区。
 * @method integer getCapacity() 获取文件系统容量，turbo系列必填，单位为GiB。 
- turbo标准型起售40TiB，即40960GiB；扩容步长20TiB，即20480 GiB。
- turbo性能型起售20TiB，即20480 GiB；扩容步长10TiB，即10240 GiB。
 * @method void setCapacity(integer $Capacity) 设置文件系统容量，turbo系列必填，单位为GiB。 
- turbo标准型起售40TiB，即40960GiB；扩容步长20TiB，即20480 GiB。
- turbo性能型起售20TiB，即20480 GiB；扩容步长10TiB，即10240 GiB。
 * @method boolean getEnableAutoScaleUp() 获取是否开启默认扩容，仅turbo类型文件存储支持
 * @method void setEnableAutoScaleUp(boolean $EnableAutoScaleUp) 设置是否开启默认扩容，仅turbo类型文件存储支持
 * @method string getMetaType() 获取turbo文件系统元数据属性，basic：标准型元数据；enhanced：增强型元数据
 * @method void setMetaType(string $MetaType) 设置turbo文件系统元数据属性，basic：标准型元数据；enhanced：增强型元数据
 */
class StorageOption extends AbstractModel
{
    /**
     * @var string 文件存储类型，取值范围：
- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
     */
    public $StorageType;

    /**
     * @var string 文件存储可用区。
     */
    public $Zone;

    /**
     * @var integer 文件系统容量，turbo系列必填，单位为GiB。 
- turbo标准型起售40TiB，即40960GiB；扩容步长20TiB，即20480 GiB。
- turbo性能型起售20TiB，即20480 GiB；扩容步长10TiB，即10240 GiB。
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
     * @param string $StorageType 文件存储类型，取值范围：
- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
     * @param string $Zone 文件存储可用区。
     * @param integer $Capacity 文件系统容量，turbo系列必填，单位为GiB。 
- turbo标准型起售40TiB，即40960GiB；扩容步长20TiB，即20480 GiB。
- turbo性能型起售20TiB，即20480 GiB；扩容步长10TiB，即10240 GiB。
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
        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
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
