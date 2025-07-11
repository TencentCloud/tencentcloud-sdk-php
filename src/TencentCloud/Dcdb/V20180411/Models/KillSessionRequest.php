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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KillSession请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method array getSessionId() 获取会话ID列表
 * @method void setSessionId(array $SessionId) 设置会话ID列表
 * @method string getShardId() 获取分片ID，与ShardSerialId设置一个
 * @method void setShardId(string $ShardId) 设置分片ID，与ShardSerialId设置一个
 * @method string getShardSerialId() 获取分片序列ID，与ShardId设置一个
 * @method void setShardSerialId(string $ShardSerialId) 设置分片序列ID，与ShardId设置一个
 */
class KillSessionRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var array 会话ID列表
     */
    public $SessionId;

    /**
     * @var string 分片ID，与ShardSerialId设置一个
     */
    public $ShardId;

    /**
     * @var string 分片序列ID，与ShardId设置一个
     */
    public $ShardSerialId;

    /**
     * @param string $InstanceId 实例ID
     * @param array $SessionId 会话ID列表
     * @param string $ShardId 分片ID，与ShardSerialId设置一个
     * @param string $ShardSerialId 分片序列ID，与ShardId设置一个
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("ShardSerialId",$param) and $param["ShardSerialId"] !== null) {
            $this->ShardSerialId = $param["ShardSerialId"];
        }
    }
}
