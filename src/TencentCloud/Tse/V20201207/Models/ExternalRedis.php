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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生网关限流插件外部redis配置
 *
 * @method string getRedisHost() 获取redis ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedisHost(string $RedisHost) 设置redis ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRedisPassword() 获取redis密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedisPassword(string $RedisPassword) 设置redis密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRedisPort() 获取redis端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedisPort(integer $RedisPort) 设置redis端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRedisTimeout() 获取超时时间  ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedisTimeout(integer $RedisTimeout) 设置超时时间  ms
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExternalRedis extends AbstractModel
{
    /**
     * @var string redis ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedisHost;

    /**
     * @var string redis密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedisPassword;

    /**
     * @var integer redis端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedisPort;

    /**
     * @var integer 超时时间  ms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedisTimeout;

    /**
     * @param string $RedisHost redis ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RedisPassword redis密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RedisPort redis端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RedisTimeout 超时时间  ms
注意：此字段可能返回 null，表示取不到有效值。
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
