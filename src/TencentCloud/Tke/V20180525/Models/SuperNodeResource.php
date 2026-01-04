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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 超级节点上的资源统计
 *
 * @method string getNodeName() 获取节点名称，此字段在出参中有效。
 * @method void setNodeName(string $NodeName) 设置节点名称，此字段在出参中有效。
 * @method integer getNum() 获取节点上的资源总数，QuotaType为 exact 时，表示创建指定规格的精确配额数量。
 * @method void setNum(integer $Num) 设置节点上的资源总数，QuotaType为 exact 时，表示创建指定规格的精确配额数量。
 * @method float getCpu() 获取节点上的总核数，QuotaType为 exact 时表示指定规格的核数。
 * @method void setCpu(float $Cpu) 设置节点上的总核数，QuotaType为 exact 时表示指定规格的核数。
 * @method float getMemory() 获取节点上的总内存数，QuotaType为 exact 时表示指定规格的内存，单位：Gi
 * @method void setMemory(float $Memory) 设置节点上的总内存数，QuotaType为 exact 时表示指定规格的内存，单位：Gi
 * @method float getGpu() 获取节点上的总 GPU 卡数，QuotaType为 exact 时表示指定规格的GPU卡数。
 * @method void setGpu(float $Gpu) 设置节点上的总 GPU 卡数，QuotaType为 exact 时表示指定规格的GPU卡数。
 * @method string getQuotaType() 获取节点资源的配额类型，exact表示精确配额，fuzzy 表示模糊配额。
 * @method void setQuotaType(string $QuotaType) 设置节点资源的配额类型，exact表示精确配额，fuzzy 表示模糊配额。
 * @method string getChargeType() 获取配额的计费类型，PREPAID表示包月，POSTPAID_BY_HOUR表示按量。
 * @method void setChargeType(string $ChargeType) 设置配额的计费类型，PREPAID表示包月，POSTPAID_BY_HOUR表示按量。
 * @method string getResourceType() 获取QuotaType为 exact 时，此字段有效，表示精确配额的资源类型。
 * @method void setResourceType(string $ResourceType) 设置QuotaType为 exact 时，此字段有效，表示精确配额的资源类型。
 * @method string getDisasterRecoverGroupId() 获取置放群组 ID，QuotaType为 exact 时有效，表示购买的精确配额需满足置放群组。可通过 [DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/product/213/17810) 接口返回值中的DisasterRecoverGroupId获取。
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置置放群组 ID，QuotaType为 exact 时有效，表示购买的精确配额需满足置放群组。可通过 [DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/product/213/17810) 接口返回值中的DisasterRecoverGroupId获取。
 * @method string getPriceType() 获取定价类型
 * @method void setPriceType(string $PriceType) 设置定价类型
 */
class SuperNodeResource extends AbstractModel
{
    /**
     * @var string 节点名称，此字段在出参中有效。
     */
    public $NodeName;

    /**
     * @var integer 节点上的资源总数，QuotaType为 exact 时，表示创建指定规格的精确配额数量。
     */
    public $Num;

    /**
     * @var float 节点上的总核数，QuotaType为 exact 时表示指定规格的核数。
     */
    public $Cpu;

    /**
     * @var float 节点上的总内存数，QuotaType为 exact 时表示指定规格的内存，单位：Gi
     */
    public $Memory;

    /**
     * @var float 节点上的总 GPU 卡数，QuotaType为 exact 时表示指定规格的GPU卡数。
     */
    public $Gpu;

    /**
     * @var string 节点资源的配额类型，exact表示精确配额，fuzzy 表示模糊配额。
     */
    public $QuotaType;

    /**
     * @var string 配额的计费类型，PREPAID表示包月，POSTPAID_BY_HOUR表示按量。
     */
    public $ChargeType;

    /**
     * @var string QuotaType为 exact 时，此字段有效，表示精确配额的资源类型。
     */
    public $ResourceType;

    /**
     * @var string 置放群组 ID，QuotaType为 exact 时有效，表示购买的精确配额需满足置放群组。可通过 [DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/product/213/17810) 接口返回值中的DisasterRecoverGroupId获取。
     */
    public $DisasterRecoverGroupId;

    /**
     * @var string 定价类型
     */
    public $PriceType;

    /**
     * @param string $NodeName 节点名称，此字段在出参中有效。
     * @param integer $Num 节点上的资源总数，QuotaType为 exact 时，表示创建指定规格的精确配额数量。
     * @param float $Cpu 节点上的总核数，QuotaType为 exact 时表示指定规格的核数。
     * @param float $Memory 节点上的总内存数，QuotaType为 exact 时表示指定规格的内存，单位：Gi
     * @param float $Gpu 节点上的总 GPU 卡数，QuotaType为 exact 时表示指定规格的GPU卡数。
     * @param string $QuotaType 节点资源的配额类型，exact表示精确配额，fuzzy 表示模糊配额。
     * @param string $ChargeType 配额的计费类型，PREPAID表示包月，POSTPAID_BY_HOUR表示按量。
     * @param string $ResourceType QuotaType为 exact 时，此字段有效，表示精确配额的资源类型。
     * @param string $DisasterRecoverGroupId 置放群组 ID，QuotaType为 exact 时有效，表示购买的精确配额需满足置放群组。可通过 [DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/product/213/17810) 接口返回值中的DisasterRecoverGroupId获取。
     * @param string $PriceType 定价类型
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
        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("PriceType",$param) and $param["PriceType"] !== null) {
            $this->PriceType = $param["PriceType"];
        }
    }
}
