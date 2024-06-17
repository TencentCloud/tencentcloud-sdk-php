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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ckafka地址信息
 *
 * @method string getAddress() 获取Kafka address
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置Kafka address
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopic() 获取Kafka topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置Kafka topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取kafka username
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置kafka username
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取kafka password
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置kafka password
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstance() 获取ckafka实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstance(string $Instance) 设置ckafka实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsVpc() 获取是否走VPC
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsVpc(integer $IsVpc) 设置是否走VPC
注意：此字段可能返回 null，表示取不到有效值。
 */
class KafkaInfo extends AbstractModel
{
    /**
     * @var string Kafka address
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string Kafka topic
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @var string kafka username
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var string kafka password
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var string ckafka实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Instance;

    /**
     * @var integer 是否走VPC
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsVpc;

    /**
     * @param string $Address Kafka address
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Topic Kafka topic
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User kafka username
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password kafka password
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Instance ckafka实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsVpc 是否走VPC
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("IsVpc",$param) and $param["IsVpc"] !== null) {
            $this->IsVpc = $param["IsVpc"];
        }
    }
}
