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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GC 执行信息
 *
 * @method integer getID() 获取作业 ID
 * @method void setID(integer $ID) 设置作业 ID
 * @method string getJobStatus() 获取作业状态
 * @method void setJobStatus(string $JobStatus) 设置作业状态
 * @method string getCreationTime() 获取创建时间
 * @method void setCreationTime(string $CreationTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method Schedule getSchedule() 获取调度信息
 * @method void setSchedule(Schedule $Schedule) 设置调度信息
 */
class GCJobInfo extends AbstractModel
{
    /**
     * @var integer 作业 ID
     */
    public $ID;

    /**
     * @var string 作业状态
     */
    public $JobStatus;

    /**
     * @var string 创建时间
     */
    public $CreationTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var Schedule 调度信息
     */
    public $Schedule;

    /**
     * @param integer $ID 作业 ID
     * @param string $JobStatus 作业状态
     * @param string $CreationTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param Schedule $Schedule 调度信息
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = new Schedule();
            $this->Schedule->deserialize($param["Schedule"]);
        }
    }
}
