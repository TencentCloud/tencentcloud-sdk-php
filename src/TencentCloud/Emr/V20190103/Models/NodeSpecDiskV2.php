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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点磁盘类型
 *
 * @method integer getCount() 获取数量
 * @method void setCount(integer $Count) 设置数量
 * @method string getName() 获取名字
 * @method void setName(string $Name) 设置名字
 * @method string getDiskType() 获取磁盘类型
 * @method void setDiskType(string $DiskType) 设置磁盘类型
 * @method integer getDefaultDiskSize() 获取指定磁盘大小
 * @method void setDefaultDiskSize(integer $DefaultDiskSize) 设置指定磁盘大小
 */
class NodeSpecDiskV2 extends AbstractModel
{
    /**
     * @var integer 数量
     */
    public $Count;

    /**
     * @var string 名字
     */
    public $Name;

    /**
     * @var string 磁盘类型
     */
    public $DiskType;

    /**
     * @var integer 指定磁盘大小
     */
    public $DefaultDiskSize;

    /**
     * @param integer $Count 数量
     * @param string $Name 名字
     * @param string $DiskType 磁盘类型
     * @param integer $DefaultDiskSize 指定磁盘大小
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DefaultDiskSize",$param) and $param["DefaultDiskSize"] !== null) {
            $this->DefaultDiskSize = $param["DefaultDiskSize"];
        }
    }
}
