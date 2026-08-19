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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导出任务信息
 *
 * @method string getJobID() 获取任务ID
 * @method void setJobID(string $JobID) 设置任务ID
 * @method string getJobName() 获取任务名称
 * @method void setJobName(string $JobName) 设置任务名称
 * @method string getSource() 获取任务来源
 * @method void setSource(string $Source) 设置任务来源
 * @method string getExportJobStatus() 获取任务状态
 * @method void setExportJobStatus(string $ExportJobStatus) 设置任务状态
 * @method integer getExportProgress() 获取任务进度
 * @method void setExportProgress(integer $ExportProgress) 设置任务进度
 * @method string getFailureMsg() 获取错误信息
 * @method void setFailureMsg(string $FailureMsg) 设置错误信息
 * @method string getTimeout() 获取任务超时时间
 * @method void setTimeout(string $Timeout) 设置任务超时时间
 * @method string getInsertTime() 获取任务创建时间
 * @method void setInsertTime(string $InsertTime) 设置任务创建时间
 */
class ExportJobItem extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $JobID;

    /**
     * @var string 任务名称
     */
    public $JobName;

    /**
     * @var string 任务来源
     */
    public $Source;

    /**
     * @var string 任务状态
     */
    public $ExportJobStatus;

    /**
     * @var integer 任务进度
     */
    public $ExportProgress;

    /**
     * @var string 错误信息
     */
    public $FailureMsg;

    /**
     * @var string 任务超时时间
     */
    public $Timeout;

    /**
     * @var string 任务创建时间
     */
    public $InsertTime;

    /**
     * @param string $JobID 任务ID
     * @param string $JobName 任务名称
     * @param string $Source 任务来源
     * @param string $ExportJobStatus 任务状态
     * @param integer $ExportProgress 任务进度
     * @param string $FailureMsg 错误信息
     * @param string $Timeout 任务超时时间
     * @param string $InsertTime 任务创建时间
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
        if (array_key_exists("JobID",$param) and $param["JobID"] !== null) {
            $this->JobID = $param["JobID"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("ExportJobStatus",$param) and $param["ExportJobStatus"] !== null) {
            $this->ExportJobStatus = $param["ExportJobStatus"];
        }

        if (array_key_exists("ExportProgress",$param) and $param["ExportProgress"] !== null) {
            $this->ExportProgress = $param["ExportProgress"];
        }

        if (array_key_exists("FailureMsg",$param) and $param["FailureMsg"] !== null) {
            $this->FailureMsg = $param["FailureMsg"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }
    }
}
