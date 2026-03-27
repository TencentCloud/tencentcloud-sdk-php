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
 * InquiryPriceCreateInstance请求参数结构体
 *
 * @method integer getTypeId() 获取<p>实例类型。- 2：Redis 2.8 内存版（标准架构）。- 6：Redis 4.0 内存版（标准架构）。- 7：Redis 4.0 内存版（集群架构）。- 8：Redis 5.0 内存版（标准架构）。- 9：Redis 5.0 内存版（集群架构）。- 15：Redis 6.2 内存版（标准架构）。- 16：Redis 6.2 内存版（集群架构）。- 17：Redis 7.0 内存版（标准架构）。- 18：Redis 7.0 内存版（集群架构）。- 200:Memcached 1.6 内存版（集群架构）。</p>
 * @method void setTypeId(integer $TypeId) 设置<p>实例类型。- 2：Redis 2.8 内存版（标准架构）。- 6：Redis 4.0 内存版（标准架构）。- 7：Redis 4.0 内存版（集群架构）。- 8：Redis 5.0 内存版（标准架构）。- 9：Redis 5.0 内存版（集群架构）。- 15：Redis 6.2 内存版（标准架构）。- 16：Redis 6.2 内存版（集群架构）。- 17：Redis 7.0 内存版（标准架构）。- 18：Redis 7.0 内存版（集群架构）。- 200:Memcached 1.6 内存版（集群架构）。</p>
 * @method integer getMemSize() 获取<p>内存容量，单位为MB， 数值需为1024的整数倍，具体规格以 <a href="https://cloud.tencent.com/document/api/239/30600">查询产品售卖规格</a> 返回的规格为准。TypeId为标准架构时，MemSize是实例总内存容量；TypeId为集群架构时，MemSize是单分片内存容量。</p>
 * @method void setMemSize(integer $MemSize) 设置<p>内存容量，单位为MB， 数值需为1024的整数倍，具体规格以 <a href="https://cloud.tencent.com/document/api/239/30600">查询产品售卖规格</a> 返回的规格为准。TypeId为标准架构时，MemSize是实例总内存容量；TypeId为集群架构时，MemSize是单分片内存容量。</p>
 * @method integer getGoodsNum() 获取<p>实例数量，单次购买实例数量以 <a href="https://cloud.tencent.com/document/api/239/30600">查询产品售卖规格</a> 返回的规格为准。</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>实例数量，单次购买实例数量以 <a href="https://cloud.tencent.com/document/api/239/30600">查询产品售卖规格</a> 返回的规格为准。</p>
 * @method integer getPeriod() 获取<p>购买时长，在创建包年包月实例的时候需要填写，按量计费实例填1即可，单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</p>
 * @method void setPeriod(integer $Period) 设置<p>购买时长，在创建包年包月实例的时候需要填写，按量计费实例填1即可，单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</p>
 * @method integer getBillingMode() 获取<p>付费方式。- 0：按量计费。- 1：包年包月。</p>
 * @method void setBillingMode(integer $BillingMode) 设置<p>付费方式。- 0：按量计费。- 1：包年包月。</p>
 * @method integer getZoneId() 获取<p>实例所属的可用区 ID，可参考<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。<strong>说明</strong>：请在 <strong>ZoneId</strong> 与 <strong>ZoneName</strong> 中至少指定一个参数。</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>实例所属的可用区 ID，可参考<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。<strong>说明</strong>：请在 <strong>ZoneId</strong> 与 <strong>ZoneName</strong> 中至少指定一个参数。</p>
 * @method integer getRedisShardNum() 获取<p>实例分片数量。- 标准架构需要配置分片数量为1。- 集群架构分片数量支持设置为1、3、5、8、12、16、24、32、40、48、64、80、96、128。</p>
 * @method void setRedisShardNum(integer $RedisShardNum) 设置<p>实例分片数量。- 标准架构需要配置分片数量为1。- 集群架构分片数量支持设置为1、3、5、8、12、16、24、32、40、48、64、80、96、128。</p>
 * @method integer getRedisReplicasNum() 获取<p>实例副本数量。取值范围为：1、2、3、4、5。</p>
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) 设置<p>实例副本数量。取值范围为：1、2、3、4、5。</p>
 * @method boolean getReplicasReadonly() 获取<p>是否支持副本只读。Redis2.8标准架构、CKV标准架构无需填写。- true：无需支持副本只读。- false：需支持。</p>
 * @method void setReplicasReadonly(boolean $ReplicasReadonly) 设置<p>是否支持副本只读。Redis2.8标准架构、CKV标准架构无需填写。- true：无需支持副本只读。- false：需支持。</p>
 * @method string getZoneName() 获取<p>实例所属的可用区名称，可参考<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。<strong>说明</strong>：请在 <strong>ZoneId</strong> 与 <strong>ZoneName</strong> 中至少指定一个参数。</p>
 * @method void setZoneName(string $ZoneName) 设置<p>实例所属的可用区名称，可参考<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。<strong>说明</strong>：请在 <strong>ZoneId</strong> 与 <strong>ZoneName</strong> 中至少指定一个参数。</p>
 * @method string getProductVersion() 获取<p>部署方式。- local：本地盘版，默认为 local。- cloud：云盘版。- cdc：独享集群版。</p>
 * @method void setProductVersion(string $ProductVersion) 设置<p>部署方式。- local：本地盘版，默认为 local。- cloud：云盘版。- cdc：独享集群版。</p>
 */
class InquiryPriceCreateInstanceRequest extends AbstractModel
{
    /**
     * @var integer <p>实例类型。- 2：Redis 2.8 内存版（标准架构）。- 6：Redis 4.0 内存版（标准架构）。- 7：Redis 4.0 内存版（集群架构）。- 8：Redis 5.0 内存版（标准架构）。- 9：Redis 5.0 内存版（集群架构）。- 15：Redis 6.2 内存版（标准架构）。- 16：Redis 6.2 内存版（集群架构）。- 17：Redis 7.0 内存版（标准架构）。- 18：Redis 7.0 内存版（集群架构）。- 200:Memcached 1.6 内存版（集群架构）。</p>
     */
    public $TypeId;

    /**
     * @var integer <p>内存容量，单位为MB， 数值需为1024的整数倍，具体规格以 <a href="https://cloud.tencent.com/document/api/239/30600">查询产品售卖规格</a> 返回的规格为准。TypeId为标准架构时，MemSize是实例总内存容量；TypeId为集群架构时，MemSize是单分片内存容量。</p>
     */
    public $MemSize;

    /**
     * @var integer <p>实例数量，单次购买实例数量以 <a href="https://cloud.tencent.com/document/api/239/30600">查询产品售卖规格</a> 返回的规格为准。</p>
     */
    public $GoodsNum;

    /**
     * @var integer <p>购买时长，在创建包年包月实例的时候需要填写，按量计费实例填1即可，单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</p>
     */
    public $Period;

    /**
     * @var integer <p>付费方式。- 0：按量计费。- 1：包年包月。</p>
     */
    public $BillingMode;

    /**
     * @var integer <p>实例所属的可用区 ID，可参考<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。<strong>说明</strong>：请在 <strong>ZoneId</strong> 与 <strong>ZoneName</strong> 中至少指定一个参数。</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>实例分片数量。- 标准架构需要配置分片数量为1。- 集群架构分片数量支持设置为1、3、5、8、12、16、24、32、40、48、64、80、96、128。</p>
     */
    public $RedisShardNum;

    /**
     * @var integer <p>实例副本数量。取值范围为：1、2、3、4、5。</p>
     */
    public $RedisReplicasNum;

    /**
     * @var boolean <p>是否支持副本只读。Redis2.8标准架构、CKV标准架构无需填写。- true：无需支持副本只读。- false：需支持。</p>
     */
    public $ReplicasReadonly;

    /**
     * @var string <p>实例所属的可用区名称，可参考<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。<strong>说明</strong>：请在 <strong>ZoneId</strong> 与 <strong>ZoneName</strong> 中至少指定一个参数。</p>
     */
    public $ZoneName;

    /**
     * @var string <p>部署方式。- local：本地盘版，默认为 local。- cloud：云盘版。- cdc：独享集群版。</p>
     */
    public $ProductVersion;

    /**
     * @param integer $TypeId <p>实例类型。- 2：Redis 2.8 内存版（标准架构）。- 6：Redis 4.0 内存版（标准架构）。- 7：Redis 4.0 内存版（集群架构）。- 8：Redis 5.0 内存版（标准架构）。- 9：Redis 5.0 内存版（集群架构）。- 15：Redis 6.2 内存版（标准架构）。- 16：Redis 6.2 内存版（集群架构）。- 17：Redis 7.0 内存版（标准架构）。- 18：Redis 7.0 内存版（集群架构）。- 200:Memcached 1.6 内存版（集群架构）。</p>
     * @param integer $MemSize <p>内存容量，单位为MB， 数值需为1024的整数倍，具体规格以 <a href="https://cloud.tencent.com/document/api/239/30600">查询产品售卖规格</a> 返回的规格为准。TypeId为标准架构时，MemSize是实例总内存容量；TypeId为集群架构时，MemSize是单分片内存容量。</p>
     * @param integer $GoodsNum <p>实例数量，单次购买实例数量以 <a href="https://cloud.tencent.com/document/api/239/30600">查询产品售卖规格</a> 返回的规格为准。</p>
     * @param integer $Period <p>购买时长，在创建包年包月实例的时候需要填写，按量计费实例填1即可，单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</p>
     * @param integer $BillingMode <p>付费方式。- 0：按量计费。- 1：包年包月。</p>
     * @param integer $ZoneId <p>实例所属的可用区 ID，可参考<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。<strong>说明</strong>：请在 <strong>ZoneId</strong> 与 <strong>ZoneName</strong> 中至少指定一个参数。</p>
     * @param integer $RedisShardNum <p>实例分片数量。- 标准架构需要配置分片数量为1。- 集群架构分片数量支持设置为1、3、5、8、12、16、24、32、40、48、64、80、96、128。</p>
     * @param integer $RedisReplicasNum <p>实例副本数量。取值范围为：1、2、3、4、5。</p>
     * @param boolean $ReplicasReadonly <p>是否支持副本只读。Redis2.8标准架构、CKV标准架构无需填写。- true：无需支持副本只读。- false：需支持。</p>
     * @param string $ZoneName <p>实例所属的可用区名称，可参考<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。<strong>说明</strong>：请在 <strong>ZoneId</strong> 与 <strong>ZoneName</strong> 中至少指定一个参数。</p>
     * @param string $ProductVersion <p>部署方式。- local：本地盘版，默认为 local。- cloud：云盘版。- cdc：独享集群版。</p>
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
        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RedisShardNum",$param) and $param["RedisShardNum"] !== null) {
            $this->RedisShardNum = $param["RedisShardNum"];
        }

        if (array_key_exists("RedisReplicasNum",$param) and $param["RedisReplicasNum"] !== null) {
            $this->RedisReplicasNum = $param["RedisReplicasNum"];
        }

        if (array_key_exists("ReplicasReadonly",$param) and $param["ReplicasReadonly"] !== null) {
            $this->ReplicasReadonly = $param["ReplicasReadonly"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }
    }
}
