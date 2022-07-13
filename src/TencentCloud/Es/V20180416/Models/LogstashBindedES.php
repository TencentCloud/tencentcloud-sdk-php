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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logstash绑定的ES集群信息
 *
 * @method string getESInstanceId() 获取ES集群ID
 * @method void setESInstanceId(string $ESInstanceId) 设置ES集群ID
 * @method string getESUserName() 获取ES集群用户名
 * @method void setESUserName(string $ESUserName) 设置ES集群用户名
 * @method string getESPassword() 获取ES集群密码
 * @method void setESPassword(string $ESPassword) 设置ES集群密码
 */
class LogstashBindedES extends AbstractModel
{
    /**
     * @var string ES集群ID
     */
    public $ESInstanceId;

    /**
     * @var string ES集群用户名
     */
    public $ESUserName;

    /**
     * @var string ES集群密码
     */
    public $ESPassword;

    /**
     * @param string $ESInstanceId ES集群ID
     * @param string $ESUserName ES集群用户名
     * @param string $ESPassword ES集群密码
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
        if (array_key_exists("ESInstanceId",$param) and $param["ESInstanceId"] !== null) {
            $this->ESInstanceId = $param["ESInstanceId"];
        }

        if (array_key_exists("ESUserName",$param) and $param["ESUserName"] !== null) {
            $this->ESUserName = $param["ESUserName"];
        }

        if (array_key_exists("ESPassword",$param) and $param["ESPassword"] !== null) {
            $this->ESPassword = $param["ESPassword"];
        }
    }
}
