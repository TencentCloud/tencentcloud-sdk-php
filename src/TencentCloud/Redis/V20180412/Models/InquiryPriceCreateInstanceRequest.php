<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
 * InquiryPriceCreateInstance请求参数结构体
 *
 * @method integer getZoneId() 获取实例所属的可用区id
 * @method void setZoneId(integer $ZoneId) 设置实例所属的可用区id
 * @method integer getTypeId() 获取实例类型：2 – Redis2.8主从版，3 – Redis3.2主从版(CKV主从版)，4 – Redis3.2集群版(CKV集群版)，5-Redis2.8单机版，6 – Redis4.0主从版，7 – Redis4.0集群版，
 * @method void setTypeId(integer $TypeId) 设置实例类型：2 – Redis2.8主从版，3 – Redis3.2主从版(CKV主从版)，4 – Redis3.2集群版(CKV集群版)，5-Redis2.8单机版，6 – Redis4.0主从版，7 – Redis4.0集群版，
 * @method integer getMemSize() 获取实例容量，单位MB， 取值大小以 查询售卖规格接口返回的规格为准
 * @method void setMemSize(integer $MemSize) 设置实例容量，单位MB， 取值大小以 查询售卖规格接口返回的规格为准
 * @method integer getGoodsNum() 获取实例数量，单次购买实例数量以 查询售卖规格接口返回的规格为准
 * @method void setGoodsNum(integer $GoodsNum) 设置实例数量，单次购买实例数量以 查询售卖规格接口返回的规格为准
 * @method integer getPeriod() 获取购买时长，在创建包年包月实例的时候需要填写，按量计费实例填1即可，单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]
 * @method void setPeriod(integer $Period) 设置购买时长，在创建包年包月实例的时候需要填写，按量计费实例填1即可，单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]
 * @method integer getBillingMode() 获取付费方式:0-按量计费，1-包年包月。
 * @method void setBillingMode(integer $BillingMode) 设置付费方式:0-按量计费，1-包年包月。
 * @method integer getRedisShardNum() 获取实例分片数量，Redis2.8主从版、CKV主从版和Redis2.8单机版、Redis4.0主从版不需要填写
 * @method void setRedisShardNum(integer $RedisShardNum) 设置实例分片数量，Redis2.8主从版、CKV主从版和Redis2.8单机版、Redis4.0主从版不需要填写
 * @method integer getRedisReplicasNum() 获取实例副本数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) 设置实例副本数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
 * @method boolean getReplicasReadonly() 获取是否支持副本只读，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
 * @method void setReplicasReadonly(boolean $ReplicasReadonly) 设置是否支持副本只读，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
 */
class InquiryPriceCreateInstanceRequest extends AbstractModel
{
    /**
     * @var integer 实例所属的可用区id
     */
    public $ZoneId;

    /**
     * @var integer 实例类型：2 – Redis2.8主从版，3 – Redis3.2主从版(CKV主从版)，4 – Redis3.2集群版(CKV集群版)，5-Redis2.8单机版，6 – Redis4.0主从版，7 – Redis4.0集群版，
     */
    public $TypeId;

    /**
     * @var integer 实例容量，单位MB， 取值大小以 查询售卖规格接口返回的规格为准
     */
    public $MemSize;

    /**
     * @var integer 实例数量，单次购买实例数量以 查询售卖规格接口返回的规格为准
     */
    public $GoodsNum;

    /**
     * @var integer 购买时长，在创建包年包月实例的时候需要填写，按量计费实例填1即可，单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]
     */
    public $Period;

    /**
     * @var integer 付费方式:0-按量计费，1-包年包月。
     */
    public $BillingMode;

    /**
     * @var integer 实例分片数量，Redis2.8主从版、CKV主从版和Redis2.8单机版、Redis4.0主从版不需要填写
     */
    public $RedisShardNum;

    /**
     * @var integer 实例副本数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
     */
    public $RedisReplicasNum;

    /**
     * @var boolean 是否支持副本只读，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
     */
    public $ReplicasReadonly;

    /**
     * @param integer $ZoneId 实例所属的可用区id
     * @param integer $TypeId 实例类型：2 – Redis2.8主从版，3 – Redis3.2主从版(CKV主从版)，4 – Redis3.2集群版(CKV集群版)，5-Redis2.8单机版，6 – Redis4.0主从版，7 – Redis4.0集群版，
     * @param integer $MemSize 实例容量，单位MB， 取值大小以 查询售卖规格接口返回的规格为准
     * @param integer $GoodsNum 实例数量，单次购买实例数量以 查询售卖规格接口返回的规格为准
     * @param integer $Period 购买时长，在创建包年包月实例的时候需要填写，按量计费实例填1即可，单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]
     * @param integer $BillingMode 付费方式:0-按量计费，1-包年包月。
     * @param integer $RedisShardNum 实例分片数量，Redis2.8主从版、CKV主从版和Redis2.8单机版、Redis4.0主从版不需要填写
     * @param integer $RedisReplicasNum 实例副本数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
     * @param boolean $ReplicasReadonly 是否支持副本只读，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
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
        if (array_key_exists('ZoneId',$param) and $param['ZoneId'] !== null) {
            $this->ZoneId = $param['ZoneId'];
        }

        if (array_key_exists('TypeId',$param) and $param['TypeId'] !== null) {
            $this->TypeId = $param['TypeId'];
        }

        if (array_key_exists('MemSize',$param) and $param['MemSize'] !== null) {
            $this->MemSize = $param['MemSize'];
        }

        if (array_key_exists('GoodsNum',$param) and $param['GoodsNum'] !== null) {
            $this->GoodsNum = $param['GoodsNum'];
        }

        if (array_key_exists('Period',$param) and $param['Period'] !== null) {
            $this->Period = $param['Period'];
        }

        if (array_key_exists('BillingMode',$param) and $param['BillingMode'] !== null) {
            $this->BillingMode = $param['BillingMode'];
        }

        if (array_key_exists('RedisShardNum',$param) and $param['RedisShardNum'] !== null) {
            $this->RedisShardNum = $param['RedisShardNum'];
        }

        if (array_key_exists('RedisReplicasNum',$param) and $param['RedisReplicasNum'] !== null) {
            $this->RedisReplicasNum = $param['RedisReplicasNum'];
        }

        if (array_key_exists('ReplicasReadonly',$param) and $param['ReplicasReadonly'] !== null) {
            $this->ReplicasReadonly = $param['ReplicasReadonly'];
        }
    }
}
