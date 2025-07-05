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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 存储的额外选项
 *
 * @method string getName() 获取存储对象，分为snap和txn两种
 * @method void setName(string $Name) 设置存储对象，分为snap和txn两种
 * @method string getType() 获取存储类型，分为三类CLOUD_PREMIUM/CLOUD_SSD/CLOUD_SSD_PLUS，分别对应高性能云硬盘、SSD云硬盘、增强型SSD云硬盘
 * @method void setType(string $Type) 设置存储类型，分为三类CLOUD_PREMIUM/CLOUD_SSD/CLOUD_SSD_PLUS，分别对应高性能云硬盘、SSD云硬盘、增强型SSD云硬盘
 * @method integer getCapacity() 获取存储容量，[50, 3200]的范围
 * @method void setCapacity(integer $Capacity) 设置存储容量，[50, 3200]的范围
 */
class StorageOption extends AbstractModel
{
    /**
     * @var string 存储对象，分为snap和txn两种
     */
    public $Name;

    /**
     * @var string 存储类型，分为三类CLOUD_PREMIUM/CLOUD_SSD/CLOUD_SSD_PLUS，分别对应高性能云硬盘、SSD云硬盘、增强型SSD云硬盘
     */
    public $Type;

    /**
     * @var integer 存储容量，[50, 3200]的范围
     */
    public $Capacity;

    /**
     * @param string $Name 存储对象，分为snap和txn两种
     * @param string $Type 存储类型，分为三类CLOUD_PREMIUM/CLOUD_SSD/CLOUD_SSD_PLUS，分别对应高性能云硬盘、SSD云硬盘、增强型SSD云硬盘
     * @param integer $Capacity 存储容量，[50, 3200]的范围
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }
    }
}
