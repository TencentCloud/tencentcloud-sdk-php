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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePricePurchaseResourcePoolPacks请求参数结构体
 *
 * @method string getZone() 获取实例资源池预扣包所在可用区。形如：ap-guangzhou-6。可通过[DescribeZones](https://cloud.tencent.com/document/product/213/15707)接口获取可用区列表。
 * @method void setZone(string $Zone) 设置实例资源池预扣包所在可用区。形如：ap-guangzhou-6。可通过[DescribeZones](https://cloud.tencent.com/document/product/213/15707)接口获取可用区列表。
 * @method string getInstanceType() 获取实例资源池的规格，仅支持整机/半整机规格。形如：SA9.96XLARGE1152。
 * @method void setInstanceType(string $InstanceType) 设置实例资源池的规格，仅支持整机/半整机规格。形如：SA9.96XLARGE1152。
 * @method integer getInstanceCount() 获取实例资源池的数量。1个数量代表1个半整机/整机资源池。
 * @method void setInstanceCount(integer $InstanceCount) 设置实例资源池的数量。1个数量代表1个半整机/整机资源池。
 * @method integer getPeriod() 获取实例资源池的时长，单位：月。取值范围：1-60。
 * @method void setPeriod(integer $Period) 设置实例资源池的时长，单位：月。取值范围：1-60。
 */
class InquirePricePurchaseResourcePoolPacksRequest extends AbstractModel
{
    /**
     * @var string 实例资源池预扣包所在可用区。形如：ap-guangzhou-6。可通过[DescribeZones](https://cloud.tencent.com/document/product/213/15707)接口获取可用区列表。
     */
    public $Zone;

    /**
     * @var string 实例资源池的规格，仅支持整机/半整机规格。形如：SA9.96XLARGE1152。
     */
    public $InstanceType;

    /**
     * @var integer 实例资源池的数量。1个数量代表1个半整机/整机资源池。
     */
    public $InstanceCount;

    /**
     * @var integer 实例资源池的时长，单位：月。取值范围：1-60。
     */
    public $Period;

    /**
     * @param string $Zone 实例资源池预扣包所在可用区。形如：ap-guangzhou-6。可通过[DescribeZones](https://cloud.tencent.com/document/product/213/15707)接口获取可用区列表。
     * @param string $InstanceType 实例资源池的规格，仅支持整机/半整机规格。形如：SA9.96XLARGE1152。
     * @param integer $InstanceCount 实例资源池的数量。1个数量代表1个半整机/整机资源池。
     * @param integer $Period 实例资源池的时长，单位：月。取值范围：1-60。
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
