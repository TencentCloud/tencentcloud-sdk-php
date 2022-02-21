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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户期望门限
 *
 * @method float getRTT() 获取期望发起加速的时延阈值
 * @method void setRTT(float $RTT) 设置期望发起加速的时延阈值
 * @method float getLoss() 获取期望发起加速的丢包率阈值
 * @method void setLoss(float $Loss) 设置期望发起加速的丢包率阈值
 * @method float getJitter() 获取期望发起加速的抖动阈值
 * @method void setJitter(float $Jitter) 设置期望发起加速的抖动阈值
 */
class ExpectedThreshold extends AbstractModel
{
    /**
     * @var float 期望发起加速的时延阈值
     */
    public $RTT;

    /**
     * @var float 期望发起加速的丢包率阈值
     */
    public $Loss;

    /**
     * @var float 期望发起加速的抖动阈值
     */
    public $Jitter;

    /**
     * @param float $RTT 期望发起加速的时延阈值
     * @param float $Loss 期望发起加速的丢包率阈值
     * @param float $Jitter 期望发起加速的抖动阈值
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
        if (array_key_exists("RTT",$param) and $param["RTT"] !== null) {
            $this->RTT = $param["RTT"];
        }

        if (array_key_exists("Loss",$param) and $param["Loss"] !== null) {
            $this->Loss = $param["Loss"];
        }

        if (array_key_exists("Jitter",$param) and $param["Jitter"] !== null) {
            $this->Jitter = $param["Jitter"];
        }
    }
}
