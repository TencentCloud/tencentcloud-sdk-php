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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导出任务详情
 *
 * @method string getJobID() 获取任务ID
 * @method void setJobID(string $JobID) 设置任务ID
 * @method string getJobName() 获取任务名称
 * @method void setJobName(string $JobName) 设置任务名称
 * @method string getSource() 获取来源
 * @method void setSource(string $Source) 设置来源
 * @method string getExportStatus() 获取导出状态
 * @method void setExportStatus(string $ExportStatus) 设置导出状态
 * @method integer getExportProgress() 获取导出进度
 * @method void setExportProgress(integer $ExportProgress) 设置导出进度
 * @method string getFailureMsg() 获取失败原因
 * @method void setFailureMsg(string $FailureMsg) 设置失败原因
 * @method string getTimeout() 获取超时时间
 * @method void setTimeout(string $Timeout) 设置超时时间
 * @method string getInsertTime() 获取插入时间
 * @method void setInsertTime(string $InsertTime) 设置插入时间
 */
class ExportJobInfo extends AbstractModel
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
     * @var string 来源
     */
    public $Source;

    /**
     * @var string 导出状态
     */
    public $ExportStatus;

    /**
     * @var integer 导出进度
     */
    public $ExportProgress;

    /**
     * @var string 失败原因
     */
    public $FailureMsg;

    /**
     * @var string 超时时间
     */
    public $Timeout;

    /**
     * @var string 插入时间
     */
    public $InsertTime;

    /**
     * @param string $JobID 任务ID
     * @param string $JobName 任务名称
     * @param string $Source 来源
     * @param string $ExportStatus 导出状态
     * @param integer $ExportProgress 导出进度
     * @param string $FailureMsg 失败原因
     * @param string $Timeout 超时时间
     * @param string $InsertTime 插入时间
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

        if (array_key_exists("ExportStatus",$param) and $param["ExportStatus"] !== null) {
            $this->ExportStatus = $param["ExportStatus"];
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
