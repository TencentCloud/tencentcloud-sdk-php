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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建重复周期发送邮件任务的参数
 *
 * @method string getBeginTime() 获取任务开始时间
 * @method void setBeginTime(string $BeginTime) 设置任务开始时间
 * @method integer getIntervalTime() 获取任务周期 小时维度
 * @method void setIntervalTime(integer $IntervalTime) 设置任务周期 小时维度
 * @method integer getTermCycle() 获取是否终止周期，用于任务更新 0否1是
 * @method void setTermCycle(integer $TermCycle) 设置是否终止周期，用于任务更新 0否1是
 */
class CycleEmailParam extends AbstractModel
{
    /**
     * @var string 任务开始时间
     */
    public $BeginTime;

    /**
     * @var integer 任务周期 小时维度
     */
    public $IntervalTime;

    /**
     * @var integer 是否终止周期，用于任务更新 0否1是
     */
    public $TermCycle;

    /**
     * @param string $BeginTime 任务开始时间
     * @param integer $IntervalTime 任务周期 小时维度
     * @param integer $TermCycle 是否终止周期，用于任务更新 0否1是
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("TermCycle",$param) and $param["TermCycle"] !== null) {
            $this->TermCycle = $param["TermCycle"];
        }
    }
}
