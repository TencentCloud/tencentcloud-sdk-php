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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据订阅中kafka消费者组的分区分配情况。该数据是实时查询的，如果需要最新数据，需重新掉接口查询。
 *
 * @method string getClientId() 获取消费者的clientId
 * @method void setClientId(string $ClientId) 设置消费者的clientId
 * @method array getPartitionNo() 获取该消费者正在消费的分区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionNo(array $PartitionNo) 设置该消费者正在消费的分区
注意：此字段可能返回 null，表示取不到有效值。
 */
class PartitionAssignment extends AbstractModel
{
    /**
     * @var string 消费者的clientId
     */
    public $ClientId;

    /**
     * @var array 该消费者正在消费的分区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionNo;

    /**
     * @param string $ClientId 消费者的clientId
     * @param array $PartitionNo 该消费者正在消费的分区
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
        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("PartitionNo",$param) and $param["PartitionNo"] !== null) {
            $this->PartitionNo = $param["PartitionNo"];
        }
    }
}
