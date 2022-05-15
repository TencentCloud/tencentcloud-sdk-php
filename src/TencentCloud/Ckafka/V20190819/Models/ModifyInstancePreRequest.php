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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancePre请求参数结构体
 *
 * @method string getInstanceId() 获取实例名称
 * @method void setInstanceId(string $InstanceId) 设置实例名称
 * @method integer getDiskSize() 获取预计磁盘，根据磁盘步长，规格向上调整。
 * @method void setDiskSize(integer $DiskSize) 设置预计磁盘，根据磁盘步长，规格向上调整。
 * @method integer getBandWidth() 获取预计带宽，根据带宽步长，规格向上调整。
 * @method void setBandWidth(integer $BandWidth) 设置预计带宽，根据带宽步长，规格向上调整。
 * @method integer getPartition() 获取预计分区，根据带宽步长，规格向上调整。
 * @method void setPartition(integer $Partition) 设置预计分区，根据带宽步长，规格向上调整。
 */
class ModifyInstancePreRequest extends AbstractModel
{
    /**
     * @var string 实例名称
     */
    public $InstanceId;

    /**
     * @var integer 预计磁盘，根据磁盘步长，规格向上调整。
     */
    public $DiskSize;

    /**
     * @var integer 预计带宽，根据带宽步长，规格向上调整。
     */
    public $BandWidth;

    /**
     * @var integer 预计分区，根据带宽步长，规格向上调整。
     */
    public $Partition;

    /**
     * @param string $InstanceId 实例名称
     * @param integer $DiskSize 预计磁盘，根据磁盘步长，规格向上调整。
     * @param integer $BandWidth 预计带宽，根据带宽步长，规格向上调整。
     * @param integer $Partition 预计分区，根据带宽步长，规格向上调整。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }
    }
}
