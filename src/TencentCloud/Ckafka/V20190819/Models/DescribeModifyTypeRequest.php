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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModifyType请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id
 * @method integer getBandWidth() 获取升配后的带宽，单位mb
 * @method void setBandWidth(integer $BandWidth) 设置升配后的带宽，单位mb
 * @method integer getDiskSize() 获取升配后的磁盘，单位G
 * @method void setDiskSize(integer $DiskSize) 设置升配后的磁盘，单位G
 * @method string getDiskType() 获取磁盘类型，例如 CLOUD_PREMIUM
 * @method void setDiskType(string $DiskType) 设置磁盘类型，例如 CLOUD_PREMIUM
 * @method integer getPartition() 获取分区数量
 * @method void setPartition(integer $Partition) 设置分区数量
 * @method integer getTopic() 获取topic数量
 * @method void setTopic(integer $Topic) 设置topic数量
 * @method string getType() 获取实例类型例如 sp_ckafka_profession
 * @method void setType(string $Type) 设置实例类型例如 sp_ckafka_profession
 * @method string getModifyEntry() 获取变配入口
 * @method void setModifyEntry(string $ModifyEntry) 设置变配入口
 */
class DescribeModifyTypeRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id
     */
    public $InstanceId;

    /**
     * @var integer 升配后的带宽，单位mb
     */
    public $BandWidth;

    /**
     * @var integer 升配后的磁盘，单位G
     */
    public $DiskSize;

    /**
     * @var string 磁盘类型，例如 CLOUD_PREMIUM
     */
    public $DiskType;

    /**
     * @var integer 分区数量
     */
    public $Partition;

    /**
     * @var integer topic数量
     */
    public $Topic;

    /**
     * @var string 实例类型例如 sp_ckafka_profession
     */
    public $Type;

    /**
     * @var string 变配入口
     */
    public $ModifyEntry;

    /**
     * @param string $InstanceId ckafka集群实例Id
     * @param integer $BandWidth 升配后的带宽，单位mb
     * @param integer $DiskSize 升配后的磁盘，单位G
     * @param string $DiskType 磁盘类型，例如 CLOUD_PREMIUM
     * @param integer $Partition 分区数量
     * @param integer $Topic topic数量
     * @param string $Type 实例类型例如 sp_ckafka_profession
     * @param string $ModifyEntry 变配入口
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

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ModifyEntry",$param) and $param["ModifyEntry"] !== null) {
            $this->ModifyEntry = $param["ModifyEntry"];
        }
    }
}
