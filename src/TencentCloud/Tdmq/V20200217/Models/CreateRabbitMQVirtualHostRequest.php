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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRabbitMQVirtualHost请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置集群实例Id
 * @method string getVirtualHost() 获取vhost名
 * @method void setVirtualHost(string $VirtualHost) 设置vhost名
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method boolean getTraceFlag() 获取消息轨迹开关,true打开,false关闭,默认关闭
 * @method void setTraceFlag(boolean $TraceFlag) 设置消息轨迹开关,true打开,false关闭,默认关闭
 */
class CreateRabbitMQVirtualHostRequest extends AbstractModel
{
    /**
     * @var string 集群实例Id
     */
    public $InstanceId;

    /**
     * @var string vhost名
     */
    public $VirtualHost;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var boolean 消息轨迹开关,true打开,false关闭,默认关闭
     */
    public $TraceFlag;

    /**
     * @param string $InstanceId 集群实例Id
     * @param string $VirtualHost vhost名
     * @param string $Description 描述
     * @param boolean $TraceFlag 消息轨迹开关,true打开,false关闭,默认关闭
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

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TraceFlag",$param) and $param["TraceFlag"] !== null) {
            $this->TraceFlag = $param["TraceFlag"];
        }
    }
}
