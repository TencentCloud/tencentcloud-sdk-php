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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 磁盘规格
 *
 * @method string getDiskType() 获取盘类型
 * @method void setDiskType(string $DiskType) 设置盘类型
 * @method integer getDiskSize() 获取大小
 * @method void setDiskSize(integer $DiskSize) 设置大小
 * @method integer getDiskCount() 获取个数
 * @method void setDiskCount(integer $DiskCount) 设置个数
 */
class CBSSpec extends AbstractModel
{
    /**
     * @var string 盘类型
     */
    public $DiskType;

    /**
     * @var integer 大小
     */
    public $DiskSize;

    /**
     * @var integer 个数
     */
    public $DiskCount;

    /**
     * @param string $DiskType 盘类型
     * @param integer $DiskSize 大小
     * @param integer $DiskCount 个数
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
    }
}
