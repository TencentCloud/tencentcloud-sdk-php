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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 健康报告任务详情。
 *
 * @method integer getAsyncRequestId() 获取<p>异步任务请求 ID。</p>
 * @method void setAsyncRequestId(integer $AsyncRequestId) 设置<p>异步任务请求 ID。</p>
 * @method string getSource() 获取<p>任务的触发来源，支持的取值包括：&quot;DAILY_INSPECTION&quot; - 实例巡检；&quot;SCHEDULED&quot; - 定时生成；&quot;MANUAL&quot; - 手动触发。</p>
 * @method void setSource(string $Source) 设置<p>任务的触发来源，支持的取值包括：&quot;DAILY_INSPECTION&quot; - 实例巡检；&quot;SCHEDULED&quot; - 定时生成；&quot;MANUAL&quot; - 手动触发。</p>
 * @method integer getProgress() 获取<p>任务完成进度，单位%。</p>
 * @method void setProgress(integer $Progress) 设置<p>任务完成进度，单位%。</p>
 * @method string getCreateTime() 获取<p>任务创建时间，如“2025-09-30 12:13:14”。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>任务创建时间，如“2025-09-30 12:13:14”。</p>
 * @method string getStartTime() 获取<p>任务开始执行时间，如“2025-09-30 13:13:14”。</p>
 * @method void setStartTime(string $StartTime) 设置<p>任务开始执行时间，如“2025-09-30 13:13:14”。</p>
 * @method string getEndTime() 获取<p>任务完成执行时间，如“2025-09-30 14:13:14”。</p>
 * @method void setEndTime(string $EndTime) 设置<p>任务完成执行时间，如“2025-09-30 14:13:14”。</p>
 * @method InstanceBasicInfo getInstanceInfo() 获取<p>任务所属实例的基础信息。</p>
 * @method void setInstanceInfo(InstanceBasicInfo $InstanceInfo) 设置<p>任务所属实例的基础信息。</p>
 * @method HealthStatus getHealthStatus() 获取<p>健康报告中的健康信息。</p>
 * @method void setHealthStatus(HealthStatus $HealthStatus) 设置<p>健康报告中的健康信息。</p>
 * @method array getTags() 获取<p>任务所属实例的标签信息</p>
 * @method void setTags(array $Tags) 设置<p>任务所属实例的标签信息</p>
 */
class HealthReportTask extends AbstractModel
{
    /**
     * @var integer <p>异步任务请求 ID。</p>
     */
    public $AsyncRequestId;

    /**
     * @var string <p>任务的触发来源，支持的取值包括：&quot;DAILY_INSPECTION&quot; - 实例巡检；&quot;SCHEDULED&quot; - 定时生成；&quot;MANUAL&quot; - 手动触发。</p>
     */
    public $Source;

    /**
     * @var integer <p>任务完成进度，单位%。</p>
     */
    public $Progress;

    /**
     * @var string <p>任务创建时间，如“2025-09-30 12:13:14”。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>任务开始执行时间，如“2025-09-30 13:13:14”。</p>
     */
    public $StartTime;

    /**
     * @var string <p>任务完成执行时间，如“2025-09-30 14:13:14”。</p>
     */
    public $EndTime;

    /**
     * @var InstanceBasicInfo <p>任务所属实例的基础信息。</p>
     */
    public $InstanceInfo;

    /**
     * @var HealthStatus <p>健康报告中的健康信息。</p>
     */
    public $HealthStatus;

    /**
     * @var array <p>任务所属实例的标签信息</p>
     */
    public $Tags;

    /**
     * @param integer $AsyncRequestId <p>异步任务请求 ID。</p>
     * @param string $Source <p>任务的触发来源，支持的取值包括：&quot;DAILY_INSPECTION&quot; - 实例巡检；&quot;SCHEDULED&quot; - 定时生成；&quot;MANUAL&quot; - 手动触发。</p>
     * @param integer $Progress <p>任务完成进度，单位%。</p>
     * @param string $CreateTime <p>任务创建时间，如“2025-09-30 12:13:14”。</p>
     * @param string $StartTime <p>任务开始执行时间，如“2025-09-30 13:13:14”。</p>
     * @param string $EndTime <p>任务完成执行时间，如“2025-09-30 14:13:14”。</p>
     * @param InstanceBasicInfo $InstanceInfo <p>任务所属实例的基础信息。</p>
     * @param HealthStatus $HealthStatus <p>健康报告中的健康信息。</p>
     * @param array $Tags <p>任务所属实例的标签信息</p>
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
        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new InstanceBasicInfo();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = new HealthStatus();
            $this->HealthStatus->deserialize($param["HealthStatus"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
