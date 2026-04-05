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
 * HPC实例硬盘
 *
 * @method string getDiskId() 获取硬盘ID。仅作为出参。
 * @method void setDiskId(string $DiskId) 设置硬盘ID。仅作为出参。
 * @method integer getSize() 获取硬盘大小
 * @method void setSize(integer $Size) 设置硬盘大小
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 */
class HPCDisk extends AbstractModel
{
    /**
     * @var string 硬盘ID。仅作为出参。
     */
    public $DiskId;

    /**
     * @var integer 硬盘大小
     */
    public $Size;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @param string $DiskId 硬盘ID。仅作为出参。
     * @param integer $Size 硬盘大小
     * @param string $Type 类型
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
