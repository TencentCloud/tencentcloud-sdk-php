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
 * @method string getInstanceId() 获取<p>ckafka集群实例Id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id</p>
 * @method integer getBandWidth() 获取<p>升配后的带宽，单位mb</p>
 * @method void setBandWidth(integer $BandWidth) 设置<p>升配后的带宽，单位mb</p>
 * @method integer getDiskSize() 获取<p>升配后的磁盘，单位G</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>升配后的磁盘，单位G</p>
 * @method string getDiskType() 获取<p>磁盘类型，例如 CLOUD_PREMIUM</p>
 * @method void setDiskType(string $DiskType) 设置<p>磁盘类型，例如 CLOUD_PREMIUM</p>
 * @method integer getPartition() 获取<p>分区数量</p>
 * @method void setPartition(integer $Partition) 设置<p>分区数量</p>
 * @method integer getTopic() 获取<p>topic数量</p>
 * @method void setTopic(integer $Topic) 设置<p>topic数量</p>
 * @method string getType() 获取<p>实例类型例如 sp_ckafka_profession</p>
 * @method void setType(string $Type) 设置<p>实例类型例如 sp_ckafka_profession</p>
 * @method string getModifyEntry() 获取<p>变配入口</p>
 * @method void setModifyEntry(string $ModifyEntry) 设置<p>变配入口</p>
 * @method boolean getModifyZone() 获取<p>是否可用区变更  false: 非可用区变更  true: 可用区变更  默认false</p>
 * @method void setModifyZone(boolean $ModifyZone) 设置<p>是否可用区变更  false: 非可用区变更  true: 可用区变更  默认false</p>
 */
class DescribeModifyTypeRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>升配后的带宽，单位mb</p>
     */
    public $BandWidth;

    /**
     * @var integer <p>升配后的磁盘，单位G</p>
     */
    public $DiskSize;

    /**
     * @var string <p>磁盘类型，例如 CLOUD_PREMIUM</p>
     */
    public $DiskType;

    /**
     * @var integer <p>分区数量</p>
     */
    public $Partition;

    /**
     * @var integer <p>topic数量</p>
     */
    public $Topic;

    /**
     * @var string <p>实例类型例如 sp_ckafka_profession</p>
     */
    public $Type;

    /**
     * @var string <p>变配入口</p>
     */
    public $ModifyEntry;

    /**
     * @var boolean <p>是否可用区变更  false: 非可用区变更  true: 可用区变更  默认false</p>
     */
    public $ModifyZone;

    /**
     * @param string $InstanceId <p>ckafka集群实例Id</p>
     * @param integer $BandWidth <p>升配后的带宽，单位mb</p>
     * @param integer $DiskSize <p>升配后的磁盘，单位G</p>
     * @param string $DiskType <p>磁盘类型，例如 CLOUD_PREMIUM</p>
     * @param integer $Partition <p>分区数量</p>
     * @param integer $Topic <p>topic数量</p>
     * @param string $Type <p>实例类型例如 sp_ckafka_profession</p>
     * @param string $ModifyEntry <p>变配入口</p>
     * @param boolean $ModifyZone <p>是否可用区变更  false: 非可用区变更  true: 可用区变更  默认false</p>
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

        if (array_key_exists("ModifyZone",$param) and $param["ModifyZone"] !== null) {
            $this->ModifyZone = $param["ModifyZone"];
        }
    }
}
