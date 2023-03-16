<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群内节点的规格磁盘规格描述
 *
 * @method string getDiskType() 获取节点磁盘类型，例如“CLOUD_SSD”\"CLOUD_PREMIUM"
 * @method void setDiskType(string $DiskType) 设置节点磁盘类型，例如“CLOUD_SSD”\"CLOUD_PREMIUM"
 * @method integer getDiskSize() 获取磁盘容量，单位G
 * @method void setDiskSize(integer $DiskSize) 设置磁盘容量，单位G
 * @method integer getDiskCount() 获取磁盘总数
 * @method void setDiskCount(integer $DiskCount) 设置磁盘总数
 * @method string getDiskDesc() 获取描述
 * @method void setDiskDesc(string $DiskDesc) 设置描述
 */
class AttachCBSSpec extends AbstractModel
{
    /**
     * @var string 节点磁盘类型，例如“CLOUD_SSD”\"CLOUD_PREMIUM"
     */
    public $DiskType;

    /**
     * @var integer 磁盘容量，单位G
     */
    public $DiskSize;

    /**
     * @var integer 磁盘总数
     */
    public $DiskCount;

    /**
     * @var string 描述
     */
    public $DiskDesc;

    /**
     * @param string $DiskType 节点磁盘类型，例如“CLOUD_SSD”\"CLOUD_PREMIUM"
     * @param integer $DiskSize 磁盘容量，单位G
     * @param integer $DiskCount 磁盘总数
     * @param string $DiskDesc 描述
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

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("DiskDesc",$param) and $param["DiskDesc"] !== null) {
            $this->DiskDesc = $param["DiskDesc"];
        }
    }
}
