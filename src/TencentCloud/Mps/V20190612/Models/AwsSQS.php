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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Aws SQS 队列信息
 *
 * @method string getSQSRegion() 获取SQS 队列区域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSQSRegion(string $SQSRegion) 设置SQS 队列区域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSQSQueueName() 获取SQS 队列名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSQSQueueName(string $SQSQueueName) 设置SQS 队列名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getS3SecretId() 获取读写SQS的秘钥id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setS3SecretId(string $S3SecretId) 设置读写SQS的秘钥id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getS3SecretKey() 获取读写SQS的秘钥key。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setS3SecretKey(string $S3SecretKey) 设置读写SQS的秘钥key。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AwsSQS extends AbstractModel
{
    /**
     * @var string SQS 队列区域。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SQSRegion;

    /**
     * @var string SQS 队列名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SQSQueueName;

    /**
     * @var string 读写SQS的秘钥id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $S3SecretId;

    /**
     * @var string 读写SQS的秘钥key。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $S3SecretKey;

    /**
     * @param string $SQSRegion SQS 队列区域。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SQSQueueName SQS 队列名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $S3SecretId 读写SQS的秘钥id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $S3SecretKey 读写SQS的秘钥key。
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
        if (array_key_exists("SQSRegion",$param) and $param["SQSRegion"] !== null) {
            $this->SQSRegion = $param["SQSRegion"];
        }

        if (array_key_exists("SQSQueueName",$param) and $param["SQSQueueName"] !== null) {
            $this->SQSQueueName = $param["SQSQueueName"];
        }

        if (array_key_exists("S3SecretId",$param) and $param["S3SecretId"] !== null) {
            $this->S3SecretId = $param["S3SecretId"];
        }

        if (array_key_exists("S3SecretKey",$param) and $param["S3SecretKey"] !== null) {
            $this->S3SecretKey = $param["S3SecretKey"];
        }
    }
}
