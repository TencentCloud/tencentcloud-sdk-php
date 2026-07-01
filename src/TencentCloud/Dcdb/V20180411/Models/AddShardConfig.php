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
 * 升级实例 -- 新增分片类型
 *
 * @method integer getShardCount() 获取<p>新增分片的数量</p>
 * @method void setShardCount(integer $ShardCount) 设置<p>新增分片的数量</p>
 * @method integer getShardMemory() 获取<p>分片内存大小，单位 GB</p>
 * @method void setShardMemory(integer $ShardMemory) 设置<p>分片内存大小，单位 GB</p>
 * @method integer getShardStorage() 获取<p>分片存储大小，单位 GB</p>
 * @method void setShardStorage(integer $ShardStorage) 设置<p>分片存储大小，单位 GB</p>
 * @method array getDcnInsShardConfigs() 获取<p>DCN实例的规格</p>
 * @method void setDcnInsShardConfigs(array $DcnInsShardConfigs) 设置<p>DCN实例的规格</p>
 */
class AddShardConfig extends AbstractModel
{
    /**
     * @var integer <p>新增分片的数量</p>
     */
    public $ShardCount;

    /**
     * @var integer <p>分片内存大小，单位 GB</p>
     */
    public $ShardMemory;

    /**
     * @var integer <p>分片存储大小，单位 GB</p>
     */
    public $ShardStorage;

    /**
     * @var array <p>DCN实例的规格</p>
     */
    public $DcnInsShardConfigs;

    /**
     * @param integer $ShardCount <p>新增分片的数量</p>
     * @param integer $ShardMemory <p>分片内存大小，单位 GB</p>
     * @param integer $ShardStorage <p>分片存储大小，单位 GB</p>
     * @param array $DcnInsShardConfigs <p>DCN实例的规格</p>
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
        if (array_key_exists("ShardCount",$param) and $param["ShardCount"] !== null) {
            $this->ShardCount = $param["ShardCount"];
        }

        if (array_key_exists("ShardMemory",$param) and $param["ShardMemory"] !== null) {
            $this->ShardMemory = $param["ShardMemory"];
        }

        if (array_key_exists("ShardStorage",$param) and $param["ShardStorage"] !== null) {
            $this->ShardStorage = $param["ShardStorage"];
        }

        if (array_key_exists("DcnInsShardConfigs",$param) and $param["DcnInsShardConfigs"] !== null) {
            $this->DcnInsShardConfigs = [];
            foreach ($param["DcnInsShardConfigs"] as $key => $value){
                $obj = new DcnInsShardConfig();
                $obj->deserialize($value);
                array_push($this->DcnInsShardConfigs, $obj);
            }
        }
    }
}
