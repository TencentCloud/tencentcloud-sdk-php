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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 弹性扩缩容按天重复任务描述
 *
 * @method string getExecuteAtTimeOfDay() 获取重复任务执行的具体时刻，例如"01:02:00"
 * @method void setExecuteAtTimeOfDay(string $ExecuteAtTimeOfDay) 设置重复任务执行的具体时刻，例如"01:02:00"
 * @method integer getStep() 获取每隔Step天执行一次
 * @method void setStep(integer $Step) 设置每隔Step天执行一次
 */
class DayRepeatStrategy extends AbstractModel
{
    /**
     * @var string 重复任务执行的具体时刻，例如"01:02:00"
     */
    public $ExecuteAtTimeOfDay;

    /**
     * @var integer 每隔Step天执行一次
     */
    public $Step;

    /**
     * @param string $ExecuteAtTimeOfDay 重复任务执行的具体时刻，例如"01:02:00"
     * @param integer $Step 每隔Step天执行一次
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
        if (array_key_exists("ExecuteAtTimeOfDay",$param) and $param["ExecuteAtTimeOfDay"] !== null) {
            $this->ExecuteAtTimeOfDay = $param["ExecuteAtTimeOfDay"];
        }

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }
    }
}
