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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PartitionOffsetInfo
 *
 * @method integer getPartitionId() 获取分区id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionId(integer $PartitionId) 设置分区id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOffset() 获取offset点位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffset(integer $Offset) 设置offset点位
注意：此字段可能返回 null，表示取不到有效值。
 */
class PartitionOffsetInfo extends AbstractModel
{
    /**
     * @var integer 分区id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionId;

    /**
     * @var integer offset点位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Offset;

    /**
     * @param integer $PartitionId 分区id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Offset offset点位
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
        if (array_key_exists("PartitionId",$param) and $param["PartitionId"] !== null) {
            $this->PartitionId = $param["PartitionId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
