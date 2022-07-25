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
 * Dts修改连接源参数
 *
 * @method string getResource() 获取Dts实例Id【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(string $Resource) 设置Dts实例Id【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取Dts的连接port【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置Dts的连接port【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取Dts消费分组的Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置Dts消费分组的Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取Dts消费分组的账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置Dts消费分组的账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取Dts消费分组的密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置Dts消费分组的密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsUpdate() 获取是否更新到关联的Datahub任务，默认为true
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUpdate(boolean $IsUpdate) 设置是否更新到关联的Datahub任务，默认为true
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopic() 获取Dts订阅的topic【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置Dts订阅的topic【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
 */
class DtsModifyConnectParam extends AbstractModel
{
    /**
     * @var string Dts实例Id【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var integer Dts的连接port【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string Dts消费分组的Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string Dts消费分组的账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string Dts消费分组的密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var boolean 是否更新到关联的Datahub任务，默认为true
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUpdate;

    /**
     * @var string Dts订阅的topic【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @param string $Resource Dts实例Id【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port Dts的连接port【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId Dts消费分组的Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName Dts消费分组的账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password Dts消费分组的密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsUpdate 是否更新到关联的Datahub任务，默认为true
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Topic Dts订阅的topic【不支持修改】
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

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("IsUpdate",$param) and $param["IsUpdate"] !== null) {
            $this->IsUpdate = $param["IsUpdate"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }
    }
}
