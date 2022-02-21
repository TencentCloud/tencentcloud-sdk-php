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
 * 测速数据
 *
 * @method array getRTT() 获取时延数组，最大长度30
 * @method void setRTT(array $RTT) 设置时延数组，最大长度30
 * @method float getLoss() 获取丢包率
 * @method void setLoss(float $Loss) 设置丢包率
 * @method float getJitter() 获取抖动
 * @method void setJitter(float $Jitter) 设置抖动
 * @method integer getTimestamp() 获取10位秒级时间戳
 * @method void setTimestamp(integer $Timestamp) 设置10位秒级时间戳
 */
class NetworkData extends AbstractModel
{
    /**
     * @var array 时延数组，最大长度30
     */
    public $RTT;

    /**
     * @var float 丢包率
     */
    public $Loss;

    /**
     * @var float 抖动
     */
    public $Jitter;

    /**
     * @var integer 10位秒级时间戳
     */
    public $Timestamp;

    /**
     * @param array $RTT 时延数组，最大长度30
     * @param float $Loss 丢包率
     * @param float $Jitter 抖动
     * @param integer $Timestamp 10位秒级时间戳
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

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }
    }
}
