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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢SQL日志
 *
 * @method float getTotalTime() 获取花费总时间
 * @method void setTotalTime(float $TotalTime) 设置花费总时间
 * @method integer getTotalCallTimes() 获取调用总次数
 * @method void setTotalCallTimes(integer $TotalCallTimes) 设置调用总次数
 * @method array getNormalQuerys() 获取慢SQL
 * @method void setNormalQuerys(array $NormalQuerys) 设置慢SQL
 */
class SlowLogDetail extends AbstractModel
{
    /**
     * @var float 花费总时间
     */
    public $TotalTime;

    /**
     * @var integer 调用总次数
     */
    public $TotalCallTimes;

    /**
     * @var array 慢SQL
     */
    public $NormalQuerys;

    /**
     * @param float $TotalTime 花费总时间
     * @param integer $TotalCallTimes 调用总次数
     * @param array $NormalQuerys 慢SQL
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
        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }

        if (array_key_exists("TotalCallTimes",$param) and $param["TotalCallTimes"] !== null) {
            $this->TotalCallTimes = $param["TotalCallTimes"];
        }

        if (array_key_exists("NormalQuerys",$param) and $param["NormalQuerys"] !== null) {
            $this->NormalQuerys = [];
            foreach ($param["NormalQuerys"] as $key => $value){
                $obj = new NormQueryItem();
                $obj->deserialize($value);
                array_push($this->NormalQuerys, $obj);
            }
        }
    }
}
