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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckDBInstanceElasticCpuScalable返回参数结构体
 *
 * @method boolean getScalable() 获取<p>是否可以进行弹性CPU扩容</p>
 * @method void setScalable(boolean $Scalable) 设置<p>是否可以进行弹性CPU扩容</p>
 * @method boolean getIsScaled() 获取<p>当前是否处于扩容状态</p>
 * @method void setIsScaled(boolean $IsScaled) 设置<p>当前是否处于扩容状态</p>
 * @method boolean getIsLocked() 获取<p>实例是否被锁定（有流程在执行）</p>
 * @method void setIsLocked(boolean $IsLocked) 设置<p>实例是否被锁定（有流程在执行）</p>
 * @method string getReason() 获取<p>不可扩容的原因</p>
 * @method void setReason(string $Reason) 设置<p>不可扩容的原因</p>
 * @method integer getMaxExtraCpu() 获取<p>最大可扩容的CPU核数，MIN(最小分片CPU核数, 24)</p>
 * @method void setMaxExtraCpu(integer $MaxExtraCpu) 设置<p>最大可扩容的CPU核数，MIN(最小分片CPU核数, 24)</p>
 * @method integer getExtraCpu() 获取<p>当前扩容的CPU核数（如果处于扩容状态）</p>
 * @method void setExtraCpu(integer $ExtraCpu) 设置<p>当前扩容的CPU核数（如果处于扩容状态）</p>
 * @method integer getTriggerType() 获取<p>扩容触发类型: 1-手动, 2-周期, 3-一次性时间段, 4-监控</p>
 * @method void setTriggerType(integer $TriggerType) 设置<p>扩容触发类型: 1-手动, 2-周期, 3-一次性时间段, 4-监控</p>
 * @method string getScaleUpTime() 获取<p>扩容时间</p>
 * @method void setScaleUpTime(string $ScaleUpTime) 设置<p>扩容时间</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CheckDBInstanceElasticCpuScalableResponse extends AbstractModel
{
    /**
     * @var boolean <p>是否可以进行弹性CPU扩容</p>
     */
    public $Scalable;

    /**
     * @var boolean <p>当前是否处于扩容状态</p>
     */
    public $IsScaled;

    /**
     * @var boolean <p>实例是否被锁定（有流程在执行）</p>
     */
    public $IsLocked;

    /**
     * @var string <p>不可扩容的原因</p>
     */
    public $Reason;

    /**
     * @var integer <p>最大可扩容的CPU核数，MIN(最小分片CPU核数, 24)</p>
     */
    public $MaxExtraCpu;

    /**
     * @var integer <p>当前扩容的CPU核数（如果处于扩容状态）</p>
     */
    public $ExtraCpu;

    /**
     * @var integer <p>扩容触发类型: 1-手动, 2-周期, 3-一次性时间段, 4-监控</p>
     */
    public $TriggerType;

    /**
     * @var string <p>扩容时间</p>
     */
    public $ScaleUpTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Scalable <p>是否可以进行弹性CPU扩容</p>
     * @param boolean $IsScaled <p>当前是否处于扩容状态</p>
     * @param boolean $IsLocked <p>实例是否被锁定（有流程在执行）</p>
     * @param string $Reason <p>不可扩容的原因</p>
     * @param integer $MaxExtraCpu <p>最大可扩容的CPU核数，MIN(最小分片CPU核数, 24)</p>
     * @param integer $ExtraCpu <p>当前扩容的CPU核数（如果处于扩容状态）</p>
     * @param integer $TriggerType <p>扩容触发类型: 1-手动, 2-周期, 3-一次性时间段, 4-监控</p>
     * @param string $ScaleUpTime <p>扩容时间</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Scalable",$param) and $param["Scalable"] !== null) {
            $this->Scalable = $param["Scalable"];
        }

        if (array_key_exists("IsScaled",$param) and $param["IsScaled"] !== null) {
            $this->IsScaled = $param["IsScaled"];
        }

        if (array_key_exists("IsLocked",$param) and $param["IsLocked"] !== null) {
            $this->IsLocked = $param["IsLocked"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("MaxExtraCpu",$param) and $param["MaxExtraCpu"] !== null) {
            $this->MaxExtraCpu = $param["MaxExtraCpu"];
        }

        if (array_key_exists("ExtraCpu",$param) and $param["ExtraCpu"] !== null) {
            $this->ExtraCpu = $param["ExtraCpu"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("ScaleUpTime",$param) and $param["ScaleUpTime"] !== null) {
            $this->ScaleUpTime = $param["ScaleUpTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
