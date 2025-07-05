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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生网关限流插件外部redis配置
 *
 * @method string getRedisHost() 获取redis ip
 * @method void setRedisHost(string $RedisHost) 设置redis ip
 * @method string getRedisPassword() 获取redis密码
 * @method void setRedisPassword(string $RedisPassword) 设置redis密码
 * @method integer getRedisPort() 获取redis端口
 * @method void setRedisPort(integer $RedisPort) 设置redis端口
 * @method integer getRedisTimeout() 获取超时时间  ms
 * @method void setRedisTimeout(integer $RedisTimeout) 设置超时时间  ms
 */
class ExternalRedis extends AbstractModel
{
    /**
     * @var string redis ip
     */
    public $RedisHost;

    /**
     * @var string redis密码
     */
    public $RedisPassword;

    /**
     * @var integer redis端口
     */
    public $RedisPort;

    /**
     * @var integer 超时时间  ms
     */
    public $RedisTimeout;

    /**
     * @param string $RedisHost redis ip
     * @param string $RedisPassword redis密码
     * @param integer $RedisPort redis端口
     * @param integer $RedisTimeout 超时时间  ms
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
        if (array_key_exists("RedisHost",$param) and $param["RedisHost"] !== null) {
            $this->RedisHost = $param["RedisHost"];
        }

        if (array_key_exists("RedisPassword",$param) and $param["RedisPassword"] !== null) {
            $this->RedisPassword = $param["RedisPassword"];
        }

        if (array_key_exists("RedisPort",$param) and $param["RedisPort"] !== null) {
            $this->RedisPort = $param["RedisPort"];
        }

        if (array_key_exists("RedisTimeout",$param) and $param["RedisTimeout"] !== null) {
            $this->RedisTimeout = $param["RedisTimeout"];
        }
    }
}
