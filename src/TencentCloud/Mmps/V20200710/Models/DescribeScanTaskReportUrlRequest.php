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
namespace TencentCloud\Mmps\V20200710\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScanTaskReportUrl请求参数结构体
 *
 * @method integer getSource() 获取任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android);
 * @method void setSource(integer $Source) 设置任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android);
 * @method string getTaskID() 获取任务id
 * @method void setTaskID(string $TaskID) 设置任务id
 * @method integer getPlatform() 获取应用平台, 0:android, 1:ios, 2:小程序
 * @method void setPlatform(integer $Platform) 设置应用平台, 0:android, 1:ios, 2:小程序
 * @method integer getReportType() 获取报告类型, 0:诊断报告, 1:堆栈报告(预留), 2:视频证据(预留), 3:报告json结果
 * @method void setReportType(integer $ReportType) 设置报告类型, 0:诊断报告, 1:堆栈报告(预留), 2:视频证据(预留), 3:报告json结果
 * @method integer getTaskType() 获取任务类型, 0:基础版, 1:专家版, 2:本地化
 * @method void setTaskType(integer $TaskType) 设置任务类型, 0:基础版, 1:专家版, 2:本地化
 */
class DescribeScanTaskReportUrlRequest extends AbstractModel
{
    /**
     * @var integer 任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android);
     */
    public $Source;

    /**
     * @var string 任务id
     */
    public $TaskID;

    /**
     * @var integer 应用平台, 0:android, 1:ios, 2:小程序
     */
    public $Platform;

    /**
     * @var integer 报告类型, 0:诊断报告, 1:堆栈报告(预留), 2:视频证据(预留), 3:报告json结果
     */
    public $ReportType;

    /**
     * @var integer 任务类型, 0:基础版, 1:专家版, 2:本地化
     */
    public $TaskType;

    /**
     * @param integer $Source 任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android);
     * @param string $TaskID 任务id
     * @param integer $Platform 应用平台, 0:android, 1:ios, 2:小程序
     * @param integer $ReportType 报告类型, 0:诊断报告, 1:堆栈报告(预留), 2:视频证据(预留), 3:报告json结果
     * @param integer $TaskType 任务类型, 0:基础版, 1:专家版, 2:本地化
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
