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
 * DescribeRabbitMQUser请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，形如 amqp-xxxxxxxx。有效的 InstanceId 可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，形如 amqp-xxxxxxxx。有效的 InstanceId 可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询。
 * @method string getSearchUser() 获取用户名检索，支持前缀匹配，后缀匹配
 * @method void setSearchUser(string $SearchUser) 设置用户名检索，支持前缀匹配，后缀匹配
 * @method integer getOffset() 获取分页 Offset，默认 0
 * @method void setOffset(integer $Offset) 设置分页 Offset，默认 0
 * @method integer getLimit() 获取分页 Limit，默认 20
 * @method void setLimit(integer $Limit) 设置分页 Limit，默认 20
 * @method string getUser() 获取用户名，精确查询
 * @method void setUser(string $User) 设置用户名，精确查询
 * @method array getTags() 获取用户标签，用于决定改用户访问 RabbitMQ Management 的权限范围
management：普通控制台用户，monitoring：管理型控制台用户，其他值：非控制台用户
 * @method void setTags(array $Tags) 设置用户标签，用于决定改用户访问 RabbitMQ Management 的权限范围
management：普通控制台用户，monitoring：管理型控制台用户，其他值：非控制台用户
 */
class DescribeRabbitMQUserRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，形如 amqp-xxxxxxxx。有效的 InstanceId 可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询。
     */
    public $InstanceId;

    /**
     * @var string 用户名检索，支持前缀匹配，后缀匹配
     */
    public $SearchUser;

    /**
     * @var integer 分页 Offset，默认 0
     */
    public $Offset;

    /**
     * @var integer 分页 Limit，默认 20
     */
    public $Limit;

    /**
     * @var string 用户名，精确查询
     */
    public $User;

    /**
     * @var array 用户标签，用于决定改用户访问 RabbitMQ Management 的权限范围
management：普通控制台用户，monitoring：管理型控制台用户，其他值：非控制台用户
     */
    public $Tags;

    /**
     * @param string $InstanceId 实例 ID，形如 amqp-xxxxxxxx。有效的 InstanceId 可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询。
     * @param string $SearchUser 用户名检索，支持前缀匹配，后缀匹配
     * @param integer $Offset 分页 Offset，默认 0
     * @param integer $Limit 分页 Limit，默认 20
     * @param string $User 用户名，精确查询
     * @param array $Tags 用户标签，用于决定改用户访问 RabbitMQ Management 的权限范围
management：普通控制台用户，monitoring：管理型控制台用户，其他值：非控制台用户
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

        if (array_key_exists("SearchUser",$param) and $param["SearchUser"] !== null) {
            $this->SearchUser = $param["SearchUser"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
