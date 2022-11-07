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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRealTimeTaskSpeed请求参数结构体
 *
 * @method string getTaskId() 获取无
 * @method void setTaskId(string $TaskId) 设置无
 * @method integer getStartTime() 获取带毫秒的时间戳
 * @method void setStartTime(integer $StartTime) 设置带毫秒的时间戳
 * @method integer getEndTime() 获取带毫秒的时间戳
 * @method void setEndTime(integer $EndTime) 设置带毫秒的时间戳
 * @method integer getGranularity() 获取粒度，1或者5
 * @method void setGranularity(integer $Granularity) 设置粒度，1或者5
 * @method string getProjectId() 获取无
 * @method void setProjectId(string $ProjectId) 设置无
 */
class DescribeRealTimeTaskSpeedRequest extends AbstractModel
{
    /**
     * @var string 无
     */
    public $TaskId;

    /**
     * @var integer 带毫秒的时间戳
     */
    public $StartTime;

    /**
     * @var integer 带毫秒的时间戳
     */
    public $EndTime;

    /**
     * @var integer 粒度，1或者5
     */
    public $Granularity;

    /**
     * @var string 无
     */
    public $ProjectId;

    /**
     * @param string $TaskId 无
     * @param integer $StartTime 带毫秒的时间戳
     * @param integer $EndTime 带毫秒的时间戳
     * @param integer $Granularity 粒度，1或者5
     * @param string $ProjectId 无
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
