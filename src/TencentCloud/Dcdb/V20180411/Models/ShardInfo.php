<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getShardInstanceId() 获取分片ID
 * @method void setShardInstanceId(string $ShardInstanceId) 设置分片ID
 * @method string getShardSerialId() 获取分片Set ID
 * @method void setShardSerialId(string $ShardSerialId) 设置分片Set ID
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method string getCreatetime() 获取创建时间
 * @method void setCreatetime(string $Createtime) 设置创建时间
 * @method integer getMemory() 获取内存大小，单位 GB
 * @method void setMemory(integer $Memory) 设置内存大小，单位 GB
 * @method integer getStorage() 获取存储大小，单位 GB
 * @method void setStorage(integer $Storage) 设置存储大小，单位 GB
 * @method integer getShardId() 获取分片数字ID
 * @method void setShardId(integer $ShardId) 设置分片数字ID
 */

/**
 *分片信息
 */
class ShardInfo extends AbstractModel
{
    /**
     * @var string 分片ID
     */
    public $ShardInstanceId;

    /**
     * @var string 分片Set ID
     */
    public $ShardSerialId;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $Createtime;

    /**
     * @var integer 内存大小，单位 GB
     */
    public $Memory;

    /**
     * @var integer 存储大小，单位 GB
     */
    public $Storage;

    /**
     * @var integer 分片数字ID
     */
    public $ShardId;
    /**
     * @param string $ShardInstanceId 分片ID
     * @param string $ShardSerialId 分片Set ID
     * @param integer $Status 状态
     * @param string $Createtime 创建时间
     * @param integer $Memory 内存大小，单位 GB
     * @param integer $Storage 存储大小，单位 GB
     * @param integer $ShardId 分片数字ID
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ShardInstanceId",$param) and $param["ShardInstanceId"] !== null) {
            $this->ShardInstanceId = $param["ShardInstanceId"];
        }

        if (array_key_exists("ShardSerialId",$param) and $param["ShardSerialId"] !== null) {
            $this->ShardSerialId = $param["ShardSerialId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Createtime",$param) and $param["Createtime"] !== null) {
            $this->Createtime = $param["Createtime"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }
    }
}
