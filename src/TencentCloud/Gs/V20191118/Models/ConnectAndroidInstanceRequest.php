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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConnectAndroidInstance请求参数结构体
 *
 * @method string getClientSession() 获取用户Session信息
 * @method void setClientSession(string $ClientSession) 设置用户Session信息
 * @method string getAndroidInstanceId() 获取实例ID
 * @method void setAndroidInstanceId(string $AndroidInstanceId) 设置实例ID
 * @method string getUserIp() 获取用户IP，用户客户端的公网IP，用于选择最佳网络链路
 * @method void setUserIp(string $UserIp) 设置用户IP，用户客户端的公网IP，用于选择最佳网络链路
 */
class ConnectAndroidInstanceRequest extends AbstractModel
{
    /**
     * @var string 用户Session信息
     */
    public $ClientSession;

    /**
     * @var string 实例ID
     */
    public $AndroidInstanceId;

    /**
     * @var string 用户IP，用户客户端的公网IP，用于选择最佳网络链路
     */
    public $UserIp;

    /**
     * @param string $ClientSession 用户Session信息
     * @param string $AndroidInstanceId 实例ID
     * @param string $UserIp 用户IP，用户客户端的公网IP，用于选择最佳网络链路
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
        if (array_key_exists("ClientSession",$param) and $param["ClientSession"] !== null) {
            $this->ClientSession = $param["ClientSession"];
        }

        if (array_key_exists("AndroidInstanceId",$param) and $param["AndroidInstanceId"] !== null) {
            $this->AndroidInstanceId = $param["AndroidInstanceId"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }
    }
}
