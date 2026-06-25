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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生网关MCP会话配置
 *
 * @method string getSessionStorage() 获取<p>会话存储类型</p><p>枚举值：</p><ul><li>memory： 内存</li><li>redis： redis</li></ul>
 * @method void setSessionStorage(string $SessionStorage) 设置<p>会话存储类型</p><p>枚举值：</p><ul><li>memory： 内存</li><li>redis： redis</li></ul>
 * @method AIGWRedisConfig getRedisConfig() 获取<p>Redis配置</p>
 * @method void setRedisConfig(AIGWRedisConfig $RedisConfig) 设置<p>Redis配置</p>
 */
class AIGWMCPSessionConfig extends AbstractModel
{
    /**
     * @var string <p>会话存储类型</p><p>枚举值：</p><ul><li>memory： 内存</li><li>redis： redis</li></ul>
     */
    public $SessionStorage;

    /**
     * @var AIGWRedisConfig <p>Redis配置</p>
     */
    public $RedisConfig;

    /**
     * @param string $SessionStorage <p>会话存储类型</p><p>枚举值：</p><ul><li>memory： 内存</li><li>redis： redis</li></ul>
     * @param AIGWRedisConfig $RedisConfig <p>Redis配置</p>
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
        if (array_key_exists("SessionStorage",$param) and $param["SessionStorage"] !== null) {
            $this->SessionStorage = $param["SessionStorage"];
        }

        if (array_key_exists("RedisConfig",$param) and $param["RedisConfig"] !== null) {
            $this->RedisConfig = new AIGWRedisConfig();
            $this->RedisConfig->deserialize($param["RedisConfig"]);
        }
    }
}
