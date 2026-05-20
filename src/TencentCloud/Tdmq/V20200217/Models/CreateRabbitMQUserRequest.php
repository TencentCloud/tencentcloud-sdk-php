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
 * CreateRabbitMQUser请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID，形如 amqp-xxxxxxxx。有效的 InstanceId 可通过登录 <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ 控制台</a>查询。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，形如 amqp-xxxxxxxx。有效的 InstanceId 可通过登录 <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ 控制台</a>查询。</p>
 * @method string getUser() 获取<p>用户名，登录时使用</p>
 * @method void setUser(string $User) 设置<p>用户名，登录时使用</p>
 * @method string getPassword() 获取<p>密码，登录时使用。规范：不能为空，8-64个字符，至少要包含小写字母、大写字母、数字、特殊字符【()`~!@#$%^&amp;*_=|{}[]:;&#39;,.?/】中的两项</p>
 * @method void setPassword(string $Password) 设置<p>密码，登录时使用。规范：不能为空，8-64个字符，至少要包含小写字母、大写字母、数字、特殊字符【()`~!@#$%^&amp;*_=|{}[]:;&#39;,.?/】中的两项</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method array getTags() 获取<p>用户标签，用于决定改用户访问RabbitMQ Management的权限范围<br>management：普通控制台用户，monitoring：管理型控制台用户，其他值：非控制台用户</p>
 * @method void setTags(array $Tags) 设置<p>用户标签，用于决定改用户访问RabbitMQ Management的权限范围<br>management：普通控制台用户，monitoring：管理型控制台用户，其他值：非控制台用户</p>
 * @method integer getMaxConnections() 获取<p>该用户的最大连接数，不填写则不限制</p>
 * @method void setMaxConnections(integer $MaxConnections) 设置<p>该用户的最大连接数，不填写则不限制</p>
 * @method integer getMaxChannels() 获取<p>该用户的最大channel数，不填写则不限制</p>
 * @method void setMaxChannels(integer $MaxChannels) 设置<p>该用户的最大channel数，不填写则不限制</p>
 * @method boolean getEnableCamAuth() 获取<p>是否开启cam验证</p>
 * @method void setEnableCamAuth(boolean $EnableCamAuth) 设置<p>是否开启cam验证</p>
 */
class CreateRabbitMQUserRequest extends AbstractModel
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
     * @var string <p>密码，登录时使用。规范：不能为空，8-64个字符，至少要包含小写字母、大写字母、数字、特殊字符【()`~!@#$%^&amp;*_=|{}[]:;&#39;,.?/】中的两项</p>
     */
    public $Password;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var array <p>用户标签，用于决定改用户访问RabbitMQ Management的权限范围<br>management：普通控制台用户，monitoring：管理型控制台用户，其他值：非控制台用户</p>
     */
    public $Tags;

    /**
     * @var integer <p>该用户的最大连接数，不填写则不限制</p>
     */
    public $MaxConnections;

    /**
     * @var integer <p>该用户的最大channel数，不填写则不限制</p>
     */
    public $MaxChannels;

    /**
     * @var boolean <p>是否开启cam验证</p>
     */
    public $EnableCamAuth;

    /**
     * @param string $InstanceId <p>实例 ID，形如 amqp-xxxxxxxx。有效的 InstanceId 可通过登录 <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ 控制台</a>查询。</p>
     * @param string $User <p>用户名，登录时使用</p>
     * @param string $Password <p>密码，登录时使用。规范：不能为空，8-64个字符，至少要包含小写字母、大写字母、数字、特殊字符【()`~!@#$%^&amp;*_=|{}[]:;&#39;,.?/】中的两项</p>
     * @param string $Description <p>描述</p>
     * @param array $Tags <p>用户标签，用于决定改用户访问RabbitMQ Management的权限范围<br>management：普通控制台用户，monitoring：管理型控制台用户，其他值：非控制台用户</p>
     * @param integer $MaxConnections <p>该用户的最大连接数，不填写则不限制</p>
     * @param integer $MaxChannels <p>该用户的最大channel数，不填写则不限制</p>
     * @param boolean $EnableCamAuth <p>是否开启cam验证</p>
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

        if (array_key_exists("MaxConnections",$param) and $param["MaxConnections"] !== null) {
            $this->MaxConnections = $param["MaxConnections"];
        }

        if (array_key_exists("MaxChannels",$param) and $param["MaxChannels"] !== null) {
            $this->MaxChannels = $param["MaxChannels"];
        }

        if (array_key_exists("EnableCamAuth",$param) and $param["EnableCamAuth"] !== null) {
            $this->EnableCamAuth = $param["EnableCamAuth"];
        }
    }
}
