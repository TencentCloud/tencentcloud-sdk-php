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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转发目标对象信息
 *
 * @method integer getProtocolType() 获取转发协议类型，0-stormRetPb, 1-tcbDispensePb, 2-stormRetJson, 3-ADPPb(废弃)，4-中台pb
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocolType(integer $ProtocolType) 设置转发协议类型，0-stormRetPb, 1-tcbDispensePb, 2-stormRetJson, 3-ADPPb(废弃)，4-中台pb
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取目标类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置目标类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrokers() 获取转发kafka地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrokers(string $Brokers) 设置转发kafka地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopic() 获取转发kafka topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置转发kafka topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMerge() 获取是否合并指标,默认是1，合并
 * @method void setMerge(integer $Merge) 设置是否合并指标,默认是1，合并
 * @method array getGlobalTags() 获取全局维度组
 * @method void setGlobalTags(array $GlobalTags) 设置全局维度组
 * @method array getDefaultTags() 获取默认维度组，只提供维度即可
 * @method void setDefaultTags(array $DefaultTags) 设置默认维度组，只提供维度即可
 * @method string getUsername() 获取Kafka用户名
 * @method void setUsername(string $Username) 设置Kafka用户名
 * @method string getPassword() 获取Kafka密码
 * @method void setPassword(string $Password) 设置Kafka密码
 */
class Producer extends AbstractModel
{
    /**
     * @var integer 转发协议类型，0-stormRetPb, 1-tcbDispensePb, 2-stormRetJson, 3-ADPPb(废弃)，4-中台pb
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtocolType;

    /**
     * @var string 目标类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 转发kafka地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Brokers;

    /**
     * @var string 转发kafka topic
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @var integer 是否合并指标,默认是1，合并
     */
    public $Merge;

    /**
     * @var array 全局维度组
     */
    public $GlobalTags;

    /**
     * @var array 默认维度组，只提供维度即可
     */
    public $DefaultTags;

    /**
     * @var string Kafka用户名
     */
    public $Username;

    /**
     * @var string Kafka密码
     */
    public $Password;

    /**
     * @param integer $ProtocolType 转发协议类型，0-stormRetPb, 1-tcbDispensePb, 2-stormRetJson, 3-ADPPb(废弃)，4-中台pb
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 目标类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Brokers 转发kafka地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Topic 转发kafka topic
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Merge 是否合并指标,默认是1，合并
     * @param array $GlobalTags 全局维度组
     * @param array $DefaultTags 默认维度组，只提供维度即可
     * @param string $Username Kafka用户名
     * @param string $Password Kafka密码
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
        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Brokers",$param) and $param["Brokers"] !== null) {
            $this->Brokers = $param["Brokers"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Merge",$param) and $param["Merge"] !== null) {
            $this->Merge = $param["Merge"];
        }

        if (array_key_exists("GlobalTags",$param) and $param["GlobalTags"] !== null) {
            $this->GlobalTags = [];
            foreach ($param["GlobalTags"] as $key => $value){
                $obj = new DispenseGlobalTag();
                $obj->deserialize($value);
                array_push($this->GlobalTags, $obj);
            }
        }

        if (array_key_exists("DefaultTags",$param) and $param["DefaultTags"] !== null) {
            $this->DefaultTags = $param["DefaultTags"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
