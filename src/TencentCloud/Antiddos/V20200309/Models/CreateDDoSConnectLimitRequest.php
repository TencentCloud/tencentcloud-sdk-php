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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDDoSConnectLimit请求参数结构体
 *
 * @method string getInstanceId() 获取资源实例Id
 * @method void setInstanceId(string $InstanceId) 设置资源实例Id
 * @method ConnectLimitConfig getConnectLimitConfig() 获取连接抑制配置
 * @method void setConnectLimitConfig(ConnectLimitConfig $ConnectLimitConfig) 设置连接抑制配置
 */
class CreateDDoSConnectLimitRequest extends AbstractModel
{
    /**
     * @var string 资源实例Id
     */
    public $InstanceId;

    /**
     * @var ConnectLimitConfig 连接抑制配置
     */
    public $ConnectLimitConfig;

    /**
     * @param string $InstanceId 资源实例Id
     * @param ConnectLimitConfig $ConnectLimitConfig 连接抑制配置
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

        if (array_key_exists("ConnectLimitConfig",$param) and $param["ConnectLimitConfig"] !== null) {
            $this->ConnectLimitConfig = new ConnectLimitConfig();
            $this->ConnectLimitConfig->deserialize($param["ConnectLimitConfig"]);
        }
    }
}
