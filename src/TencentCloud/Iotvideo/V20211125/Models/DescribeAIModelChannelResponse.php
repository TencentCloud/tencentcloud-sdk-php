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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAIModelChannel返回参数结构体
 *
 * @method string getType() 获取推送类型。ckafka：消息队列；forward：http/https推送
 * @method void setType(string $Type) 设置推送类型。ckafka：消息队列；forward：http/https推送
 * @method string getForwardAddress() 获取第三方推送地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForwardAddress(string $ForwardAddress) 设置第三方推送地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getForwardKey() 获取第三方推送密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForwardKey(string $ForwardKey) 设置第三方推送密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCKafkaRegion() 获取ckafka地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCKafkaRegion(string $CKafkaRegion) 设置ckafka地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCKafkaInstance() 获取ckafka实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCKafkaInstance(string $CKafkaInstance) 设置ckafka实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCKafkaTopic() 获取ckafka订阅主题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCKafkaTopic(string $CKafkaTopic) 设置ckafka订阅主题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAIModelChannelResponse extends AbstractModel
{
    /**
     * @var string 推送类型。ckafka：消息队列；forward：http/https推送
     */
    public $Type;

    /**
     * @var string 第三方推送地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForwardAddress;

    /**
     * @var string 第三方推送密钥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForwardKey;

    /**
     * @var string ckafka地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CKafkaRegion;

    /**
     * @var string ckafka实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CKafkaInstance;

    /**
     * @var string ckafka订阅主题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CKafkaTopic;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Type 推送类型。ckafka：消息队列；forward：http/https推送
     * @param string $ForwardAddress 第三方推送地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ForwardKey 第三方推送密钥
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CKafkaRegion ckafka地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CKafkaInstance ckafka实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CKafkaTopic ckafka订阅主题
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ForwardAddress",$param) and $param["ForwardAddress"] !== null) {
            $this->ForwardAddress = $param["ForwardAddress"];
        }

        if (array_key_exists("ForwardKey",$param) and $param["ForwardKey"] !== null) {
            $this->ForwardKey = $param["ForwardKey"];
        }

        if (array_key_exists("CKafkaRegion",$param) and $param["CKafkaRegion"] !== null) {
            $this->CKafkaRegion = $param["CKafkaRegion"];
        }

        if (array_key_exists("CKafkaInstance",$param) and $param["CKafkaInstance"] !== null) {
            $this->CKafkaInstance = $param["CKafkaInstance"];
        }

        if (array_key_exists("CKafkaTopic",$param) and $param["CKafkaTopic"] !== null) {
            $this->CKafkaTopic = $param["CKafkaTopic"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
