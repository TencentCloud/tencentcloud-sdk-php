<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method integer getNum() 获取节点上的资源总数
 * @method void setNum(integer $Num) 设置节点上的资源总数
 * @method float getCpu() 获取节点上的总核数
 * @method void setCpu(float $Cpu) 设置节点上的总核数
 * @method float getMemory() 获取节点上的总内存数
 * @method void setMemory(float $Memory) 设置节点上的总内存数
 * @method float getGpu() 获取节点上的总 GPU 卡数
 * @method void setGpu(float $Gpu) 设置节点上的总 GPU 卡数
 * @method string getQuotaType() 获取节点资源的配额类型，exact表示精确配额，fuzzy 表示模糊配额。
 * @method void setQuotaType(string $QuotaType) 设置节点资源的配额类型，exact表示精确配额，fuzzy 表示模糊配额。
 * @method string getChargeType() 获取配额的计费类型，PREPAID表示包月，POSTPAID_BY_HOUR表示按量。
 * @method void setChargeType(string $ChargeType) 设置配额的计费类型，PREPAID表示包月，POSTPAID_BY_HOUR表示按量。
 * @method string getResourceType() 获取QuotaType为 exact 时，此字段有效，表示精确配额的资源类型。
 * @method void setResourceType(string $ResourceType) 设置QuotaType为 exact 时，此字段有效，表示精确配额的资源类型。
 * @method string getDisasterRecoverGroupId() 获取置放群组 ID
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置置放群组 ID
 */
class SuperNodeResource extends AbstractModel
{
    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var integer 节点上的资源总数
     */
    public $Num;

    /**
     * @var float 节点上的总核数
     */
    public $Cpu;

    /**
     * @var float 节点上的总内存数
     */
    public $Memory;

    /**
     * @var float 节点上的总 GPU 卡数
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
     * @var string 置放群组 ID
     */
    public $DisasterRecoverGroupId;

    /**
     * @param string $NodeName 节点名称
     * @param integer $Num 节点上的资源总数
     * @param float $Cpu 节点上的总核数
     * @param float $Memory 节点上的总内存数
     * @param float $Gpu 节点上的总 GPU 卡数
     * @param string $QuotaType 节点资源的配额类型，exact表示精确配额，fuzzy 表示模糊配额。
     * @param string $ChargeType 配额的计费类型，PREPAID表示包月，POSTPAID_BY_HOUR表示按量。
     * @param string $ResourceType QuotaType为 exact 时，此字段有效，表示精确配额的资源类型。
     * @param string $DisasterRecoverGroupId 置放群组 ID
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
    }
}
