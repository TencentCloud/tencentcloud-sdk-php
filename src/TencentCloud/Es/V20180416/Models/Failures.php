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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 索引备份失败的数据结构
 *
 * @method string getIndex() 获取备份失败的索引名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(string $Index) 设置备份失败的索引名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShardId() 获取快照失败的分片号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShardId(integer $ShardId) 设置快照失败的分片号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取快照失败的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置快照失败的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取快照失败的状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置快照失败的状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class Failures extends AbstractModel
{
    /**
     * @var string 备份失败的索引名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var integer 快照失败的分片号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShardId;

    /**
     * @var string 快照失败的原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var string 快照失败的状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $Index 备份失败的索引名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ShardId 快照失败的分片号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 快照失败的原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 快照失败的状态
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
