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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dts类型入参
 *
 * @method string getResource() 获取Dts实例Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(string $Resource) 设置Dts实例Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取Dts的连接ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置Dts的连接ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取Dts的连接port
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置Dts的连接port
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopic() 获取Dts订阅的topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置Dts订阅的topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取Dts消费分组的Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置Dts消费分组的Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupUser() 获取Dts消费分组的账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupUser(string $GroupUser) 设置Dts消费分组的账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupPassword() 获取Dts消费分组的密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupPassword(string $GroupPassword) 设置Dts消费分组的密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTranSql() 获取false同步原始数据，true同步解析后的json格式数据,默认true
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranSql(boolean $TranSql) 设置false同步原始数据，true同步解析后的json格式数据,默认true
注意：此字段可能返回 null，表示取不到有效值。
 */
class DtsParam extends AbstractModel
{
    /**
     * @var string Dts实例Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var string Dts的连接ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var integer Dts的连接port
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string Dts订阅的topic
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @var string Dts消费分组的Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string Dts消费分组的账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupUser;

    /**
     * @var string Dts消费分组的密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupPassword;

    /**
     * @var boolean false同步原始数据，true同步解析后的json格式数据,默认true
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranSql;

    /**
     * @param string $Resource Dts实例Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip Dts的连接ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port Dts的连接port
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Topic Dts订阅的topic
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId Dts消费分组的Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupUser Dts消费分组的账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupPassword Dts消费分组的密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TranSql false同步原始数据，true同步解析后的json格式数据,默认true
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupUser",$param) and $param["GroupUser"] !== null) {
            $this->GroupUser = $param["GroupUser"];
        }

        if (array_key_exists("GroupPassword",$param) and $param["GroupPassword"] !== null) {
            $this->GroupPassword = $param["GroupPassword"];
        }

        if (array_key_exists("TranSql",$param) and $param["TranSql"] !== null) {
            $this->TranSql = $param["TranSql"];
        }
    }
}
