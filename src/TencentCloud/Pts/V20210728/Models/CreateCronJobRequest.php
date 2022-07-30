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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCronJob请求参数结构体
 *
 * @method string getName() 获取定时任务名字
 * @method void setName(string $Name) 设置定时任务名字
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getScenarioId() 获取场景ID
 * @method void setScenarioId(string $ScenarioId) 设置场景ID
 * @method string getScenarioName() 获取场景名称
 * @method void setScenarioName(string $ScenarioName) 设置场景名称
 * @method integer getFrequencyType() 获取执行频率类型，1:只执行一次; 2:日粒度; 3:周粒度; 4:高级
 * @method void setFrequencyType(integer $FrequencyType) 设置执行频率类型，1:只执行一次; 2:日粒度; 3:周粒度; 4:高级
 * @method string getCronExpression() 获取cron表达式
 * @method void setCronExpression(string $CronExpression) 设置cron表达式
 * @method string getJobOwner() 获取任务发起人
 * @method void setJobOwner(string $JobOwner) 设置任务发起人
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getNoticeId() 获取Notice ID
 * @method void setNoticeId(string $NoticeId) 设置Notice ID
 * @method string getNote() 获取备注
 * @method void setNote(string $Note) 设置备注
 */
class CreateCronJobRequest extends AbstractModel
{
    /**
     * @var string 定时任务名字
     */
    public $Name;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 场景ID
     */
    public $ScenarioId;

    /**
     * @var string 场景名称
     */
    public $ScenarioName;

    /**
     * @var integer 执行频率类型，1:只执行一次; 2:日粒度; 3:周粒度; 4:高级
     */
    public $FrequencyType;

    /**
     * @var string cron表达式
     */
    public $CronExpression;

    /**
     * @var string 任务发起人
     */
    public $JobOwner;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string Notice ID
     */
    public $NoticeId;

    /**
     * @var string 备注
     */
    public $Note;

    /**
     * @param string $Name 定时任务名字
     * @param string $ProjectId 项目ID
     * @param string $ScenarioId 场景ID
     * @param string $ScenarioName 场景名称
     * @param integer $FrequencyType 执行频率类型，1:只执行一次; 2:日粒度; 3:周粒度; 4:高级
     * @param string $CronExpression cron表达式
     * @param string $JobOwner 任务发起人
     * @param string $EndTime 结束时间
     * @param string $NoticeId Notice ID
     * @param string $Note 备注
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("ScenarioName",$param) and $param["ScenarioName"] !== null) {
            $this->ScenarioName = $param["ScenarioName"];
        }

        if (array_key_exists("FrequencyType",$param) and $param["FrequencyType"] !== null) {
            $this->FrequencyType = $param["FrequencyType"];
        }

        if (array_key_exists("CronExpression",$param) and $param["CronExpression"] !== null) {
            $this->CronExpression = $param["CronExpression"];
        }

        if (array_key_exists("JobOwner",$param) and $param["JobOwner"] !== null) {
            $this->JobOwner = $param["JobOwner"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
