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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 搜索启动日志时返回的作业实例
 *
 * @method integer getRunningOrderId() 获取实例的Id, 按照启动的时间顺序，从1开始
 * @method void setRunningOrderId(integer $RunningOrderId) 设置实例的Id, 按照启动的时间顺序，从1开始
 * @method string getJobInstanceStartTime() 获取作业实例的启动时间
 * @method void setJobInstanceStartTime(string $JobInstanceStartTime) 设置作业实例的启动时间
 * @method integer getStartingMillis() 获取作业实例启动的时间（毫秒）
 * @method void setStartingMillis(integer $StartingMillis) 设置作业实例启动的时间（毫秒）
 */
class JobInstanceForSubmissionLog extends AbstractModel
{
    /**
     * @var integer 实例的Id, 按照启动的时间顺序，从1开始
     */
    public $RunningOrderId;

    /**
     * @var string 作业实例的启动时间
     */
    public $JobInstanceStartTime;

    /**
     * @var integer 作业实例启动的时间（毫秒）
     */
    public $StartingMillis;

    /**
     * @param integer $RunningOrderId 实例的Id, 按照启动的时间顺序，从1开始
     * @param string $JobInstanceStartTime 作业实例的启动时间
     * @param integer $StartingMillis 作业实例启动的时间（毫秒）
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
        if (array_key_exists("RunningOrderId",$param) and $param["RunningOrderId"] !== null) {
            $this->RunningOrderId = $param["RunningOrderId"];
        }

        if (array_key_exists("JobInstanceStartTime",$param) and $param["JobInstanceStartTime"] !== null) {
            $this->JobInstanceStartTime = $param["JobInstanceStartTime"];
        }

        if (array_key_exists("StartingMillis",$param) and $param["StartingMillis"] !== null) {
            $this->StartingMillis = $param["StartingMillis"];
        }
    }
}
