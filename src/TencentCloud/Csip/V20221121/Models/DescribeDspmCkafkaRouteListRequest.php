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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDspmCkafkaRouteList请求参数结构体
 *
 * @method integer getVipType() 获取Ckafka接入类型
 * @method void setVipType(integer $VipType) 设置Ckafka接入类型
 * @method string getRegionId() 获取Ckafka实例的地域
 * @method void setRegionId(string $RegionId) 设置Ckafka实例的地域
 * @method string getInstanceId() 获取Ckafka实例的id
 * @method void setInstanceId(string $InstanceId) 设置Ckafka实例的id
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getInstanceName() 获取Ckafka实例的名称
 * @method void setInstanceName(string $InstanceName) 设置Ckafka实例的名称
 */
class DescribeDspmCkafkaRouteListRequest extends AbstractModel
{
    /**
     * @var integer Ckafka接入类型
     */
    public $VipType;

    /**
     * @var string Ckafka实例的地域
     */
    public $RegionId;

    /**
     * @var string Ckafka实例的id
     */
    public $InstanceId;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string Ckafka实例的名称
     */
    public $InstanceName;

    /**
     * @param integer $VipType Ckafka接入类型
     * @param string $RegionId Ckafka实例的地域
     * @param string $InstanceId Ckafka实例的id
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $InstanceName Ckafka实例的名称
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
        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
