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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CronJob配置
 *
 * @method string getSchedule() 获取调度配置
 * @method void setSchedule(string $Schedule) 设置调度配置
 * @method integer getStartingDeadlineSeconds() 获取运行时间
 * @method void setStartingDeadlineSeconds(integer $StartingDeadlineSeconds) 设置运行时间
 * @method string getConcurrencyPolicy() 获取job并行策略(Allow|Forbid|Replace)
 * @method void setConcurrencyPolicy(string $ConcurrencyPolicy) 设置job并行策略(Allow|Forbid|Replace)
 * @method Job getJob() 获取Job配置
 * @method void setJob(Job $Job) 设置Job配置
 */
class CronJob extends AbstractModel
{
    /**
     * @var string 调度配置
     */
    public $Schedule;

    /**
     * @var integer 运行时间
     */
    public $StartingDeadlineSeconds;

    /**
     * @var string job并行策略(Allow|Forbid|Replace)
     */
    public $ConcurrencyPolicy;

    /**
     * @var Job Job配置
     */
    public $Job;

    /**
     * @param string $Schedule 调度配置
     * @param integer $StartingDeadlineSeconds 运行时间
     * @param string $ConcurrencyPolicy job并行策略(Allow|Forbid|Replace)
     * @param Job $Job Job配置
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
        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = $param["Schedule"];
        }

        if (array_key_exists("StartingDeadlineSeconds",$param) and $param["StartingDeadlineSeconds"] !== null) {
            $this->StartingDeadlineSeconds = $param["StartingDeadlineSeconds"];
        }

        if (array_key_exists("ConcurrencyPolicy",$param) and $param["ConcurrencyPolicy"] !== null) {
            $this->ConcurrencyPolicy = $param["ConcurrencyPolicy"];
        }

        if (array_key_exists("Job",$param) and $param["Job"] !== null) {
            $this->Job = new Job();
            $this->Job->deserialize($param["Job"]);
        }
    }
}
