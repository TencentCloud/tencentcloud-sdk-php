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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReportTaskDownloadUrl请求参数结构体
 *
 * @method integer getReportTaskId() 获取任务id
 * @method void setReportTaskId(integer $ReportTaskId) 设置任务id
 * @method string getDspaId() 获取dspa实例id
 * @method void setDspaId(string $DspaId) 设置dspa实例id
 * @method boolean getIsWithSensitiveDetailReport() 获取是否同时下载敏感资产详情报告
 * @method void setIsWithSensitiveDetailReport(boolean $IsWithSensitiveDetailReport) 设置是否同时下载敏感资产详情报告
 */
class DescribeReportTaskDownloadUrlRequest extends AbstractModel
{
    /**
     * @var integer 任务id
     */
    public $ReportTaskId;

    /**
     * @var string dspa实例id
     */
    public $DspaId;

    /**
     * @var boolean 是否同时下载敏感资产详情报告
     */
    public $IsWithSensitiveDetailReport;

    /**
     * @param integer $ReportTaskId 任务id
     * @param string $DspaId dspa实例id
     * @param boolean $IsWithSensitiveDetailReport 是否同时下载敏感资产详情报告
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
        if (array_key_exists("ReportTaskId",$param) and $param["ReportTaskId"] !== null) {
            $this->ReportTaskId = $param["ReportTaskId"];
        }

        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("IsWithSensitiveDetailReport",$param) and $param["IsWithSensitiveDetailReport"] !== null) {
            $this->IsWithSensitiveDetailReport = $param["IsWithSensitiveDetailReport"];
        }
    }
}
