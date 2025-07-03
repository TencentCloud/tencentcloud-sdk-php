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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大盘统计-录像存储统计 出参RecordStatistic
 *
 * @method integer getTime() 获取时间戳
 * @method void setTime(integer $Time) 设置时间戳
 * @method RecordStatisticValue getValue() 获取统计结果
 * @method void setValue(RecordStatisticValue $Value) 设置统计结果
 */
class RecordStatistic extends AbstractModel
{
    /**
     * @var integer 时间戳
     */
    public $Time;

    /**
     * @var RecordStatisticValue 统计结果
     */
    public $Value;

    /**
     * @param integer $Time 时间戳
     * @param RecordStatisticValue $Value 统计结果
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new RecordStatisticValue();
            $this->Value->deserialize($param["Value"]);
        }
    }
}
