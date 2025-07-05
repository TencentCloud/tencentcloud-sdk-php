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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推荐用法
 *
 * @method string getUsageRoute() 获取给药途径
 * @method void setUsageRoute(string $UsageRoute) 设置给药途径
 * @method string getFrequency() 获取给药频率 格式为“最小频次,最大频次,频次单位,频次周期”，如"1,2,次,2"， 表示2天内最少给药1次，最大给药2次。
 * @method void setFrequency(string $Frequency) 设置给药频率 格式为“最小频次,最大频次,频次单位,频次周期”，如"1,2,次,2"， 表示2天内最少给药1次，最大给药2次。
 * @method string getSingleDose() 获取给药剂量 格式为"最小剂量,最大剂量,剂量单位"，如"10,10,ml"，<br>表示每次最大给药量为10ml，最小给药量为10ml。
 * @method void setSingleDose(string $SingleDose) 设置给药剂量 格式为"最小剂量,最大剂量,剂量单位"，如"10,10,ml"，<br>表示每次最大给药量为10ml，最小给药量为10ml。
 */
class RecommendedUsage extends AbstractModel
{
    /**
     * @var string 给药途径
     */
    public $UsageRoute;

    /**
     * @var string 给药频率 格式为“最小频次,最大频次,频次单位,频次周期”，如"1,2,次,2"， 表示2天内最少给药1次，最大给药2次。
     */
    public $Frequency;

    /**
     * @var string 给药剂量 格式为"最小剂量,最大剂量,剂量单位"，如"10,10,ml"，<br>表示每次最大给药量为10ml，最小给药量为10ml。
     */
    public $SingleDose;

    /**
     * @param string $UsageRoute 给药途径
     * @param string $Frequency 给药频率 格式为“最小频次,最大频次,频次单位,频次周期”，如"1,2,次,2"， 表示2天内最少给药1次，最大给药2次。
     * @param string $SingleDose 给药剂量 格式为"最小剂量,最大剂量,剂量单位"，如"10,10,ml"，<br>表示每次最大给药量为10ml，最小给药量为10ml。
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
        if (array_key_exists("UsageRoute",$param) and $param["UsageRoute"] !== null) {
            $this->UsageRoute = $param["UsageRoute"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("SingleDose",$param) and $param["SingleDose"] !== null) {
            $this->SingleDose = $param["SingleDose"];
        }
    }
}
