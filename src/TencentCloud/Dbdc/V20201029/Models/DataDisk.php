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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DB Custom 节点数据盘信息。
 *
 * @method string getDiskType() 获取<p>磁盘类型</p><p>枚举值：</p><ul><li>CLOUD_HSSD： 增强型云硬盘</li><li>LOCAL_NVME： 本地硬盘</li></ul>
 * @method void setDiskType(string $DiskType) 设置<p>磁盘类型</p><p>枚举值：</p><ul><li>CLOUD_HSSD： 增强型云硬盘</li><li>LOCAL_NVME： 本地硬盘</li></ul>
 * @method integer getDiskSize() 获取<p>磁盘大小</p><p>单位：GiB</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>磁盘大小</p><p>单位：GiB</p>
 * @method string getDiskName() 获取<p>磁盘名称</p>
 * @method void setDiskName(string $DiskName) 设置<p>磁盘名称</p>
 */
class DataDisk extends AbstractModel
{
    /**
     * @var string <p>磁盘类型</p><p>枚举值：</p><ul><li>CLOUD_HSSD： 增强型云硬盘</li><li>LOCAL_NVME： 本地硬盘</li></ul>
     */
    public $DiskType;

    /**
     * @var integer <p>磁盘大小</p><p>单位：GiB</p>
     */
    public $DiskSize;

    /**
     * @var string <p>磁盘名称</p>
     */
    public $DiskName;

    /**
     * @param string $DiskType <p>磁盘类型</p><p>枚举值：</p><ul><li>CLOUD_HSSD： 增强型云硬盘</li><li>LOCAL_NVME： 本地硬盘</li></ul>
     * @param integer $DiskSize <p>磁盘大小</p><p>单位：GiB</p>
     * @param string $DiskName <p>磁盘名称</p>
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }
    }
}
