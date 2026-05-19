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
 * RabbitMQ用户实体详情
 *
 * @method string getInstanceId() 获取<p>实例 ID，形如 amqp-xxxxxxxx。有效的 InstanceId 可通过登录 <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ 控制台</a>查询。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，形如 amqp-xxxxxxxx。有效的 InstanceId 可通过登录 <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ 控制台</a>查询。</p>
 * @method string getUser() 获取<p>用户名，登录时使用</p>
 * @method void setUser(string $User) 设置<p>用户名，登录时使用</p>
 * @method string getPassword() 获取<p>密码，登录时使用</p>
 * @method void setPassword(string $Password) 设置<p>密码，登录时使用</p>
 * @method string getDescription() 获取<p>用户描述</p>
 * @method void setDescription(string $Description) 设置<p>用户描述</p>
 * @method array getTags() 获取<p>用户标签，用于决定改用户访问RabbitMQ Management的权限范围</p>
 * @method void setTags(array $Tags) 设置<p>用户标签，用于决定改用户访问RabbitMQ Management的权限范围</p>
 * @method string getCreateTime() 获取<p>用户创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>用户创建时间</p>
 * @method string getModifyTime() 获取<p>用户最后修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>用户最后修改时间</p>
 * @method string getType() 获取<p>用户类型，System：系统创建，User：用户创建</p>
 * @method void setType(string $Type) 设置<p>用户类型，System：系统创建，User：用户创建</p>
 * @method integer getMaxConnections() 获取<p>单个用户最大可用连接数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxConnections(integer $MaxConnections) 设置<p>单个用户最大可用连接数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxChannels() 获取<p>单个用户最大可用通道数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxChannels(integer $MaxChannels) 设置<p>单个用户最大可用通道数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTs() 获取<p>创建时间时间戳</p>
 * @method void setCreateTs(integer $CreateTs) 设置<p>创建时间时间戳</p>
 * @method integer getModifyTs() 获取<p>修改时间时间戳</p>
 * @method void setModifyTs(integer $ModifyTs) 设置<p>修改时间时间戳</p>
 * @method boolean getCamAuthEnabled() 获取<p>是否开启cam验证</p><p>默认值：false</p>
 * @method void setCamAuthEnabled(boolean $CamAuthEnabled) 设置<p>是否开启cam验证</p><p>默认值：false</p>
 * @method string getCamCredentialName() 获取<p>cam凭据名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCamCredentialName(string $CamCredentialName) 设置<p>cam凭据名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RabbitMQUser extends AbstractModel
{
    /**
     * @var string <p>实例 ID，形如 amqp-xxxxxxxx。有效的 InstanceId 可通过登录 <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ 控制台</a>查询。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>用户名，登录时使用</p>
     */
    public $User;

    /**
     * @var string <p>密码，登录时使用</p>
     */
    public $Password;

    /**
     * @var string <p>用户描述</p>
     */
    public $Description;

    /**
     * @var array <p>用户标签，用于决定改用户访问RabbitMQ Management的权限范围</p>
     */
    public $Tags;

    /**
     * @var string <p>用户创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>用户最后修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>用户类型，System：系统创建，User：用户创建</p>
     */
    public $Type;

    /**
     * @var integer <p>单个用户最大可用连接数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxConnections;

    /**
     * @var integer <p>单个用户最大可用通道数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxChannels;

    /**
     * @var integer <p>创建时间时间戳</p>
     */
    public $CreateTs;

    /**
     * @var integer <p>修改时间时间戳</p>
     */
    public $ModifyTs;

    /**
     * @var boolean <p>是否开启cam验证</p><p>默认值：false</p>
     */
    public $CamAuthEnabled;

    /**
     * @var string <p>cam凭据名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CamCredentialName;

    /**
     * @param string $InstanceId <p>实例 ID，形如 amqp-xxxxxxxx。有效的 InstanceId 可通过登录 <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ 控制台</a>查询。</p>
     * @param string $User <p>用户名，登录时使用</p>
     * @param string $Password <p>密码，登录时使用</p>
     * @param string $Description <p>用户描述</p>
     * @param array $Tags <p>用户标签，用于决定改用户访问RabbitMQ Management的权限范围</p>
     * @param string $CreateTime <p>用户创建时间</p>
     * @param string $ModifyTime <p>用户最后修改时间</p>
     * @param string $Type <p>用户类型，System：系统创建，User：用户创建</p>
     * @param integer $MaxConnections <p>单个用户最大可用连接数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxChannels <p>单个用户最大可用通道数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTs <p>创建时间时间戳</p>
     * @param integer $ModifyTs <p>修改时间时间戳</p>
     * @param boolean $CamAuthEnabled <p>是否开启cam验证</p><p>默认值：false</p>
     * @param string $CamCredentialName <p>cam凭据名称</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MaxConnections",$param) and $param["MaxConnections"] !== null) {
            $this->MaxConnections = $param["MaxConnections"];
        }

        if (array_key_exists("MaxChannels",$param) and $param["MaxChannels"] !== null) {
            $this->MaxChannels = $param["MaxChannels"];
        }

        if (array_key_exists("CreateTs",$param) and $param["CreateTs"] !== null) {
            $this->CreateTs = $param["CreateTs"];
        }

        if (array_key_exists("ModifyTs",$param) and $param["ModifyTs"] !== null) {
            $this->ModifyTs = $param["ModifyTs"];
        }

        if (array_key_exists("CamAuthEnabled",$param) and $param["CamAuthEnabled"] !== null) {
            $this->CamAuthEnabled = $param["CamAuthEnabled"];
        }

        if (array_key_exists("CamCredentialName",$param) and $param["CamCredentialName"] !== null) {
            $this->CamCredentialName = $param["CamCredentialName"];
        }
    }
}
