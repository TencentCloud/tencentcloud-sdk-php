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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceUpgradeInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID，请登录<a href="https://console.cloud.tencent.com/redis/instance/list">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，请登录<a href="https://console.cloud.tencent.com/redis/instance/list">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method integer getMemSize() 获取<p>分片大小，单位：MB。</p>
 * @method void setMemSize(integer $MemSize) 设置<p>分片大小，单位：MB。</p>
 * @method integer getRedisShardNum() 获取<p>分片数量。- 实例为标准架构，RedisShardNum 默认为1。- Redis 2.8主从版、CKV主从版和 Redis 2.8单机版不需要填写。</p>
 * @method void setRedisShardNum(integer $RedisShardNum) 设置<p>分片数量。- 实例为标准架构，RedisShardNum 默认为1。- Redis 2.8主从版、CKV主从版和 Redis 2.8单机版不需要填写。</p>
 * @method integer getRedisReplicasNum() 获取<p>副本数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写。</p>
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) 设置<p>副本数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写。</p>
 */
class InquiryPriceUpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，请登录<a href="https://console.cloud.tencent.com/redis/instance/list">Redis控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>分片大小，单位：MB。</p>
     */
    public $MemSize;

    /**
     * @var integer <p>分片数量。- 实例为标准架构，RedisShardNum 默认为1。- Redis 2.8主从版、CKV主从版和 Redis 2.8单机版不需要填写。</p>
     */
    public $RedisShardNum;

    /**
     * @var integer <p>副本数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写。</p>
     */
    public $RedisReplicasNum;

    /**
     * @param string $InstanceId <p>实例 ID，请登录<a href="https://console.cloud.tencent.com/redis/instance/list">Redis控制台</a>在实例列表复制实例 ID。</p>
     * @param integer $MemSize <p>分片大小，单位：MB。</p>
     * @param integer $RedisShardNum <p>分片数量。- 实例为标准架构，RedisShardNum 默认为1。- Redis 2.8主从版、CKV主从版和 Redis 2.8单机版不需要填写。</p>
     * @param integer $RedisReplicasNum <p>副本数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写。</p>
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

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("RedisShardNum",$param) and $param["RedisShardNum"] !== null) {
            $this->RedisShardNum = $param["RedisShardNum"];
        }

        if (array_key_exists("RedisReplicasNum",$param) and $param["RedisReplicasNum"] !== null) {
            $this->RedisReplicasNum = $param["RedisReplicasNum"];
        }
    }
}
