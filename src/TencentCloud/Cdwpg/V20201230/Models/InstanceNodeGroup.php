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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群节点信息
 *
 * @method string getSpecName() 获取机型
 * @method void setSpecName(string $SpecName) 设置机型
 * @method DiskSpecPlus getDataDisk() 获取磁盘信息
 * @method void setDataDisk(DiskSpecPlus $DataDisk) 设置磁盘信息
 * @method integer getCvmCount() 获取机器个数
 * @method void setCvmCount(integer $CvmCount) 设置机器个数
 */
class InstanceNodeGroup extends AbstractModel
{
    /**
     * @var string 机型
     */
    public $SpecName;

    /**
     * @var DiskSpecPlus 磁盘信息
     */
    public $DataDisk;

    /**
     * @var integer 机器个数
     */
    public $CvmCount;

    /**
     * @param string $SpecName 机型
     * @param DiskSpecPlus $DataDisk 磁盘信息
     * @param integer $CvmCount 机器个数
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
        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = new DiskSpecPlus();
            $this->DataDisk->deserialize($param["DataDisk"]);
        }

        if (array_key_exists("CvmCount",$param) and $param["CvmCount"] !== null) {
            $this->CvmCount = $param["CvmCount"];
        }
    }
}
