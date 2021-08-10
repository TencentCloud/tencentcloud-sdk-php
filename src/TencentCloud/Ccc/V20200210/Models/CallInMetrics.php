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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 呼入实时指标
 *
 * @method integer getIvrCount() 获取IVR驻留数量
 * @method void setIvrCount(integer $IvrCount) 设置IVR驻留数量
 * @method integer getQueueCount() 获取排队中数量
 * @method void setQueueCount(integer $QueueCount) 设置排队中数量
 * @method integer getRingCount() 获取振铃中数量
 * @method void setRingCount(integer $RingCount) 设置振铃中数量
 * @method integer getAcceptCount() 获取接通中数量
 * @method void setAcceptCount(integer $AcceptCount) 设置接通中数量
 * @method integer getTransferOuterCount() 获取客服转接外线中数量
 * @method void setTransferOuterCount(integer $TransferOuterCount) 设置客服转接外线中数量
 * @method integer getMaxQueueDuration() 获取最大排队时长
 * @method void setMaxQueueDuration(integer $MaxQueueDuration) 设置最大排队时长
 * @method integer getAvgQueueDuration() 获取平均排队时长
 * @method void setAvgQueueDuration(integer $AvgQueueDuration) 设置平均排队时长
 * @method integer getMaxRingDuration() 获取最大振铃时长
 * @method void setMaxRingDuration(integer $MaxRingDuration) 设置最大振铃时长
 * @method integer getAvgRingDuration() 获取平均振铃时长
 * @method void setAvgRingDuration(integer $AvgRingDuration) 设置平均振铃时长
 * @method integer getMaxAcceptDuration() 获取最大接通时长
 * @method void setMaxAcceptDuration(integer $MaxAcceptDuration) 设置最大接通时长
 * @method integer getAvgAcceptDuration() 获取平均接通时长
 * @method void setAvgAcceptDuration(integer $AvgAcceptDuration) 设置平均接通时长
 */
class CallInMetrics extends AbstractModel
{
    /**
     * @var integer IVR驻留数量
     */
    public $IvrCount;

    /**
     * @var integer 排队中数量
     */
    public $QueueCount;

    /**
     * @var integer 振铃中数量
     */
    public $RingCount;

    /**
     * @var integer 接通中数量
     */
    public $AcceptCount;

    /**
     * @var integer 客服转接外线中数量
     */
    public $TransferOuterCount;

    /**
     * @var integer 最大排队时长
     */
    public $MaxQueueDuration;

    /**
     * @var integer 平均排队时长
     */
    public $AvgQueueDuration;

    /**
     * @var integer 最大振铃时长
     */
    public $MaxRingDuration;

    /**
     * @var integer 平均振铃时长
     */
    public $AvgRingDuration;

    /**
     * @var integer 最大接通时长
     */
    public $MaxAcceptDuration;

    /**
     * @var integer 平均接通时长
     */
    public $AvgAcceptDuration;

    /**
     * @param integer $IvrCount IVR驻留数量
     * @param integer $QueueCount 排队中数量
     * @param integer $RingCount 振铃中数量
     * @param integer $AcceptCount 接通中数量
     * @param integer $TransferOuterCount 客服转接外线中数量
     * @param integer $MaxQueueDuration 最大排队时长
     * @param integer $AvgQueueDuration 平均排队时长
     * @param integer $MaxRingDuration 最大振铃时长
     * @param integer $AvgRingDuration 平均振铃时长
     * @param integer $MaxAcceptDuration 最大接通时长
     * @param integer $AvgAcceptDuration 平均接通时长
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
        if (array_key_exists("IvrCount",$param) and $param["IvrCount"] !== null) {
            $this->IvrCount = $param["IvrCount"];
        }

        if (array_key_exists("QueueCount",$param) and $param["QueueCount"] !== null) {
            $this->QueueCount = $param["QueueCount"];
        }

        if (array_key_exists("RingCount",$param) and $param["RingCount"] !== null) {
            $this->RingCount = $param["RingCount"];
        }

        if (array_key_exists("AcceptCount",$param) and $param["AcceptCount"] !== null) {
            $this->AcceptCount = $param["AcceptCount"];
        }

        if (array_key_exists("TransferOuterCount",$param) and $param["TransferOuterCount"] !== null) {
            $this->TransferOuterCount = $param["TransferOuterCount"];
        }

        if (array_key_exists("MaxQueueDuration",$param) and $param["MaxQueueDuration"] !== null) {
            $this->MaxQueueDuration = $param["MaxQueueDuration"];
        }

        if (array_key_exists("AvgQueueDuration",$param) and $param["AvgQueueDuration"] !== null) {
            $this->AvgQueueDuration = $param["AvgQueueDuration"];
        }

        if (array_key_exists("MaxRingDuration",$param) and $param["MaxRingDuration"] !== null) {
            $this->MaxRingDuration = $param["MaxRingDuration"];
        }

        if (array_key_exists("AvgRingDuration",$param) and $param["AvgRingDuration"] !== null) {
            $this->AvgRingDuration = $param["AvgRingDuration"];
        }

        if (array_key_exists("MaxAcceptDuration",$param) and $param["MaxAcceptDuration"] !== null) {
            $this->MaxAcceptDuration = $param["MaxAcceptDuration"];
        }

        if (array_key_exists("AvgAcceptDuration",$param) and $param["AvgAcceptDuration"] !== null) {
            $this->AvgAcceptDuration = $param["AvgAcceptDuration"];
        }
    }
}
