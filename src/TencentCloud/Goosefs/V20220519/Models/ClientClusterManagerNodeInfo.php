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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户侧集群管理节点信息
 *
 * @method string getNodeIp() 获取客户端节点IP
 * @method void setNodeIp(string $NodeIp) 设置客户端节点IP
 * @method string getNodeInstanceId() 获取节点Instance Id
 * @method void setNodeInstanceId(string $NodeInstanceId) 设置节点Instance Id
 * @method string getInitialPassword() 获取初始密码
 * @method void setInitialPassword(string $InitialPassword) 设置初始密码
 */
class ClientClusterManagerNodeInfo extends AbstractModel
{
    /**
     * @var string 客户端节点IP
     */
    public $NodeIp;

    /**
     * @var string 节点Instance Id
     */
    public $NodeInstanceId;

    /**
     * @var string 初始密码
     */
    public $InitialPassword;

    /**
     * @param string $NodeIp 客户端节点IP
     * @param string $NodeInstanceId 节点Instance Id
     * @param string $InitialPassword 初始密码
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
        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }

        if (array_key_exists("NodeInstanceId",$param) and $param["NodeInstanceId"] !== null) {
            $this->NodeInstanceId = $param["NodeInstanceId"];
        }

        if (array_key_exists("InitialPassword",$param) and $param["InitialPassword"] !== null) {
            $this->InitialPassword = $param["InitialPassword"];
        }
    }
}
