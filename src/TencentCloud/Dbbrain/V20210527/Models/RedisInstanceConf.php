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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Redis实例内存配置参数
 *
 * @method string getReplicasNum() 获取副本数量
 * @method void setReplicasNum(string $ReplicasNum) 设置副本数量
 * @method string getShardNum() 获取分片数量
 * @method void setShardNum(string $ShardNum) 设置分片数量
 * @method string getShardSize() 获取分片内存大小，单位MB
 * @method void setShardSize(string $ShardSize) 设置分片内存大小，单位MB
 */
class RedisInstanceConf extends AbstractModel
{
    /**
     * @var string 副本数量
     */
    public $ReplicasNum;

    /**
     * @var string 分片数量
     */
    public $ShardNum;

    /**
     * @var string 分片内存大小，单位MB
     */
    public $ShardSize;

    /**
     * @param string $ReplicasNum 副本数量
     * @param string $ShardNum 分片数量
     * @param string $ShardSize 分片内存大小，单位MB
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
        if (array_key_exists("ReplicasNum",$param) and $param["ReplicasNum"] !== null) {
            $this->ReplicasNum = $param["ReplicasNum"];
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("ShardSize",$param) and $param["ShardSize"] !== null) {
            $this->ShardSize = $param["ShardSize"];
        }
    }
}
