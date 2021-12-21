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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePublisherSummary返回参数结构体
 *
 * @method float getMsgRateIn() 获取生产速率（条/秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgRateIn(float $MsgRateIn) 设置生产速率（条/秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMsgThroughputIn() 获取生产速率（字节/秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgThroughputIn(float $MsgThroughputIn) 设置生产速率（字节/秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPublisherCount() 获取生产者数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublisherCount(integer $PublisherCount) 设置生产者数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageSize() 获取消息存储大小，以字节为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageSize(integer $StorageSize) 设置消息存储大小，以字节为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePublisherSummaryResponse extends AbstractModel
{
    /**
     * @var float 生产速率（条/秒）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgRateIn;

    /**
     * @var float 生产速率（字节/秒）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgThroughputIn;

    /**
     * @var integer 生产者数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublisherCount;

    /**
     * @var integer 消息存储大小，以字节为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageSize;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $MsgRateIn 生产速率（条/秒）
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MsgThroughputIn 生产速率（字节/秒）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PublisherCount 生产者数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageSize 消息存储大小，以字节为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MsgRateIn",$param) and $param["MsgRateIn"] !== null) {
            $this->MsgRateIn = $param["MsgRateIn"];
        }

        if (array_key_exists("MsgThroughputIn",$param) and $param["MsgThroughputIn"] !== null) {
            $this->MsgThroughputIn = $param["MsgThroughputIn"];
        }

        if (array_key_exists("PublisherCount",$param) and $param["PublisherCount"] !== null) {
            $this->PublisherCount = $param["PublisherCount"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
