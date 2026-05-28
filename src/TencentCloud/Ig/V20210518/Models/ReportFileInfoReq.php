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
namespace TencentCloud\Ig\V20210518\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 报告文件信息参数
 *
 * @method string getReportFileUrl() 获取<p>报告文件链接</p>
 * @method void setReportFileUrl(string $ReportFileUrl) 设置<p>报告文件链接</p>
 * @method integer getReportFileType() 获取<p>报告文件类型，1:pdf，2:图片</p>
 * @method void setReportFileType(integer $ReportFileType) 设置<p>报告文件类型，1:pdf，2:图片</p>
 * @method string getReportId() 获取<p>报告id</p>
 * @method void setReportId(string $ReportId) 设置<p>报告id</p>
 */
class ReportFileInfoReq extends AbstractModel
{
    /**
     * @var string <p>报告文件链接</p>
     */
    public $ReportFileUrl;

    /**
     * @var integer <p>报告文件类型，1:pdf，2:图片</p>
     */
    public $ReportFileType;

    /**
     * @var string <p>报告id</p>
     */
    public $ReportId;

    /**
     * @param string $ReportFileUrl <p>报告文件链接</p>
     * @param integer $ReportFileType <p>报告文件类型，1:pdf，2:图片</p>
     * @param string $ReportId <p>报告id</p>
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
        if (array_key_exists("ReportFileUrl",$param) and $param["ReportFileUrl"] !== null) {
            $this->ReportFileUrl = $param["ReportFileUrl"];
        }

        if (array_key_exists("ReportFileType",$param) and $param["ReportFileType"] !== null) {
            $this->ReportFileType = $param["ReportFileType"];
        }

        if (array_key_exists("ReportId",$param) and $param["ReportId"] !== null) {
            $this->ReportId = $param["ReportId"];
        }
    }
}
