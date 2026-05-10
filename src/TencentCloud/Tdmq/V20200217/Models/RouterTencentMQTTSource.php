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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 待复制的 MQTT 源集群信息
 *
 * @method string getClusterId() 获取<p>MQTT 集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置<p>MQTT 集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopic() 获取<p>主题名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置<p>主题名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceRegion(string $SourceRegion) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取<p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取<p>用户密码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置<p>用户密码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSourceConsumeConcurrentThreadCount() 获取<p>消费者并发数，0 ～ 100</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceConsumeConcurrentThreadCount(integer $SourceConsumeConcurrentThreadCount) 设置<p>消费者并发数，0 ～ 100</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFilterFromTimestampMs() 获取<p>过滤时间，毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilterFromTimestampMs(integer $FilterFromTimestampMs) 设置<p>过滤时间，毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndpoint() 获取<p>MQTT集群接入点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpoint(string $Endpoint) 设置<p>MQTT集群接入点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RouterTencentMQTTSource extends AbstractModel
{
    /**
     * @var string <p>MQTT 集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string <p>主题名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @var string <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceRegion;

    /**
     * @var string <p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string <p>用户密码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var integer <p>消费者并发数，0 ～ 100</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceConsumeConcurrentThreadCount;

    /**
     * @var integer <p>过滤时间，毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilterFromTimestampMs;

    /**
     * @var string <p>MQTT集群接入点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Endpoint;

    /**
     * @param string $ClusterId <p>MQTT 集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Topic <p>主题名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceRegion <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName <p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password <p>用户密码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SourceConsumeConcurrentThreadCount <p>消费者并发数，0 ～ 100</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FilterFromTimestampMs <p>过滤时间，毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Endpoint <p>MQTT集群接入点信息</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("SourceRegion",$param) and $param["SourceRegion"] !== null) {
            $this->SourceRegion = $param["SourceRegion"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("SourceConsumeConcurrentThreadCount",$param) and $param["SourceConsumeConcurrentThreadCount"] !== null) {
            $this->SourceConsumeConcurrentThreadCount = $param["SourceConsumeConcurrentThreadCount"];
        }

        if (array_key_exists("FilterFromTimestampMs",$param) and $param["FilterFromTimestampMs"] !== null) {
            $this->FilterFromTimestampMs = $param["FilterFromTimestampMs"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }
    }
}
