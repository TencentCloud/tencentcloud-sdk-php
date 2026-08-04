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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源分区信息
 *
 * @method string getName() 获取<p>分区名称</p>
 * @method void setName(string $Name) 设置<p>分区名称</p>
 * @method string getPartitionCode() 获取<p>分区编码</p>
 * @method void setPartitionCode(string $PartitionCode) 设置<p>分区编码</p>
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>状态：11-发货中，1-运行中，2-隔离中，3-已销毁</p>
 * @method void setStatus(integer $Status) 设置<p>状态：11-发货中，1-运行中，2-隔离中，3-已销毁</p>
 * @method integer getQueueCount() 获取<p>队列数量</p>
 * @method void setQueueCount(integer $QueueCount) 设置<p>队列数量</p>
 * @method array getResourceQuota() 获取<p>资源配置（配额）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceQuota(array $ResourceQuota) 设置<p>资源配置（配额）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPayMode() 获取<p>计费类型：1-包年包月，0-按量计费</p>
 * @method void setPayMode(integer $PayMode) 设置<p>计费类型：1-包年包月，0-按量计费</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取<p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置<p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PartitionInfo extends AbstractModel
{
    /**
     * @var string <p>分区名称</p>
     */
    public $Name;

    /**
     * @var string <p>分区编码</p>
     */
    public $PartitionCode;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer <p>状态：11-发货中，1-运行中，2-隔离中，3-已销毁</p>
     */
    public $Status;

    /**
     * @var integer <p>队列数量</p>
     */
    public $QueueCount;

    /**
     * @var array <p>资源配置（配额）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceQuota;

    /**
     * @var integer <p>计费类型：1-包年包月，0-按量计费</p>
     */
    public $PayMode;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @param string $Name <p>分区名称</p>
     * @param string $PartitionCode <p>分区编码</p>
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>状态：11-发货中，1-运行中，2-隔离中，3-已销毁</p>
     * @param integer $QueueCount <p>队列数量</p>
     * @param array $ResourceQuota <p>资源配置（配额）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PayMode <p>计费类型：1-包年包月，0-按量计费</p>
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime <p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("PartitionCode",$param) and $param["PartitionCode"] !== null) {
            $this->PartitionCode = $param["PartitionCode"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("QueueCount",$param) and $param["QueueCount"] !== null) {
            $this->QueueCount = $param["QueueCount"];
        }

        if (array_key_exists("ResourceQuota",$param) and $param["ResourceQuota"] !== null) {
            $this->ResourceQuota = [];
            foreach ($param["ResourceQuota"] as $key => $value){
                $obj = new ResourceQuota();
                $obj->deserialize($value);
                array_push($this->ResourceQuota, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
