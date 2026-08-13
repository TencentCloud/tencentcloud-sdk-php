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
 * EDR任务列表
 *
 * @method string getJobId() 获取<p>任务ID</p>
 * @method void setJobId(string $JobId) 设置<p>任务ID</p>
 * @method string getJobName() 获取<p>任务名</p>
 * @method void setJobName(string $JobName) 设置<p>任务名</p>
 * @method string getSource() 获取<p>数据源</p>
 * @method void setSource(string $Source) 设置<p>数据源</p>
 * @method string getExportStatus() 获取<p>导出状态</p>
 * @method void setExportStatus(string $ExportStatus) 设置<p>导出状态</p>
 * @method integer getExportProgress() 获取<p>导出进度</p>
 * @method void setExportProgress(integer $ExportProgress) 设置<p>导出进度</p>
 * @method string getFailureMsg() 获取<p>失败信息</p>
 * @method void setFailureMsg(string $FailureMsg) 设置<p>失败信息</p>
 * @method string getTimeout() 获取<p>超时时间</p>
 * @method void setTimeout(string $Timeout) 设置<p>超时时间</p>
 * @method string getInsertTime() 获取<p>插入时间</p>
 * @method void setInsertTime(string $InsertTime) 设置<p>插入时间</p>
 */
class EDRExportJobItem extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
     */
    public $JobId;

    /**
     * @var string <p>任务名</p>
     */
    public $JobName;

    /**
     * @var string <p>数据源</p>
     */
    public $Source;

    /**
     * @var string <p>导出状态</p>
     */
    public $ExportStatus;

    /**
     * @var integer <p>导出进度</p>
     */
    public $ExportProgress;

    /**
     * @var string <p>失败信息</p>
     */
    public $FailureMsg;

    /**
     * @var string <p>超时时间</p>
     */
    public $Timeout;

    /**
     * @var string <p>插入时间</p>
     */
    public $InsertTime;

    /**
     * @param string $JobId <p>任务ID</p>
     * @param string $JobName <p>任务名</p>
     * @param string $Source <p>数据源</p>
     * @param string $ExportStatus <p>导出状态</p>
     * @param integer $ExportProgress <p>导出进度</p>
     * @param string $FailureMsg <p>失败信息</p>
     * @param string $Timeout <p>超时时间</p>
     * @param string $InsertTime <p>插入时间</p>
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
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
