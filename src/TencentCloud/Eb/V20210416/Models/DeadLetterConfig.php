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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * rule对应的dlq配置
 *
 * @method string getDisposeMethod() 获取支持dlq、丢弃、忽略错误继续传递三种模式, 分别对应: DLQ,DROP,IGNORE_ERROR
 * @method void setDisposeMethod(string $DisposeMethod) 设置支持dlq、丢弃、忽略错误继续传递三种模式, 分别对应: DLQ,DROP,IGNORE_ERROR
 * @method CkafkaDeliveryParams getCkafkaDeliveryParams() 获取设置了DLQ方式后,此选项必填. 错误消息会被投递到对应的kafka topic中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCkafkaDeliveryParams(CkafkaDeliveryParams $CkafkaDeliveryParams) 设置设置了DLQ方式后,此选项必填. 错误消息会被投递到对应的kafka topic中
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeadLetterConfig extends AbstractModel
{
    /**
     * @var string 支持dlq、丢弃、忽略错误继续传递三种模式, 分别对应: DLQ,DROP,IGNORE_ERROR
     */
    public $DisposeMethod;

    /**
     * @var CkafkaDeliveryParams 设置了DLQ方式后,此选项必填. 错误消息会被投递到对应的kafka topic中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CkafkaDeliveryParams;

    /**
     * @param string $DisposeMethod 支持dlq、丢弃、忽略错误继续传递三种模式, 分别对应: DLQ,DROP,IGNORE_ERROR
     * @param CkafkaDeliveryParams $CkafkaDeliveryParams 设置了DLQ方式后,此选项必填. 错误消息会被投递到对应的kafka topic中
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
        if (array_key_exists("DisposeMethod",$param) and $param["DisposeMethod"] !== null) {
            $this->DisposeMethod = $param["DisposeMethod"];
        }

        if (array_key_exists("CkafkaDeliveryParams",$param) and $param["CkafkaDeliveryParams"] !== null) {
            $this->CkafkaDeliveryParams = new CkafkaDeliveryParams();
            $this->CkafkaDeliveryParams->deserialize($param["CkafkaDeliveryParams"]);
        }
    }
}
