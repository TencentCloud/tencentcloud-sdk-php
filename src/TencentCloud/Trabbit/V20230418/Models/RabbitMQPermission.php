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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ权限详情
 *
 * @method string getInstanceId() 获取集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置集群实例Id
 * @method string getUser() 获取用户名，权限关联的用户
 * @method void setUser(string $User) 设置用户名，权限关联的用户
 * @method string getVirtualHost() 获取vhost名
 * @method void setVirtualHost(string $VirtualHost) 设置vhost名
 * @method string getConfigRegexp() 获取权限类型，declare相关操作，该用户可操作该vhost下的资源名称正则表达式
 * @method void setConfigRegexp(string $ConfigRegexp) 设置权限类型，declare相关操作，该用户可操作该vhost下的资源名称正则表达式
 * @method string getWriteRegexp() 获取权限类型，消息写入相关操作，该用户可操作该vhost下的资源名称正则表达式
 * @method void setWriteRegexp(string $WriteRegexp) 设置权限类型，消息写入相关操作，该用户可操作该vhost下的资源名称正则表达式
 * @method string getReadRegexp() 获取权限类型，消息读取相关操作，该用户可操作该vhost下的资源名称正则表达式
 * @method void setReadRegexp(string $ReadRegexp) 设置权限类型，消息读取相关操作，该用户可操作该vhost下的资源名称正则表达式
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 */
class RabbitMQPermission extends AbstractModel
{
    /**
     * @var string 集群实例Id
     */
    public $InstanceId;

    /**
     * @var string 用户名，权限关联的用户
     */
    public $User;

    /**
     * @var string vhost名
     */
    public $VirtualHost;

    /**
     * @var string 权限类型，declare相关操作，该用户可操作该vhost下的资源名称正则表达式
     */
    public $ConfigRegexp;

    /**
     * @var string 权限类型，消息写入相关操作，该用户可操作该vhost下的资源名称正则表达式
     */
    public $WriteRegexp;

    /**
     * @var string 权限类型，消息读取相关操作，该用户可操作该vhost下的资源名称正则表达式
     */
    public $ReadRegexp;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @param string $InstanceId 集群实例Id
     * @param string $User 用户名，权限关联的用户
     * @param string $VirtualHost vhost名
     * @param string $ConfigRegexp 权限类型，declare相关操作，该用户可操作该vhost下的资源名称正则表达式
     * @param string $WriteRegexp 权限类型，消息写入相关操作，该用户可操作该vhost下的资源名称正则表达式
     * @param string $ReadRegexp 权限类型，消息读取相关操作，该用户可操作该vhost下的资源名称正则表达式
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
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

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("ConfigRegexp",$param) and $param["ConfigRegexp"] !== null) {
            $this->ConfigRegexp = $param["ConfigRegexp"];
        }

        if (array_key_exists("WriteRegexp",$param) and $param["WriteRegexp"] !== null) {
            $this->WriteRegexp = $param["WriteRegexp"];
        }

        if (array_key_exists("ReadRegexp",$param) and $param["ReadRegexp"] !== null) {
            $this->ReadRegexp = $param["ReadRegexp"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
