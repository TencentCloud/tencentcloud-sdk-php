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
 * 报告文件信息返回
 *
 * @method string getReportId() 获取<p>报告id</p>
 * @method void setReportId(string $ReportId) 设置<p>报告id</p>
 * @method boolean getIsAnalysis() 获取<p>是否解析成功</p>
 * @method void setIsAnalysis(boolean $IsAnalysis) 设置<p>是否解析成功</p>
 * @method string getErrInfo() 获取<p>解析错误信息</p>
 * @method void setErrInfo(string $ErrInfo) 设置<p>解析错误信息</p>
 */
class ReportFileInfoRsp extends AbstractModel
{
    /**
     * @var string <p>报告id</p>
     */
    public $ReportId;

    /**
     * @var boolean <p>是否解析成功</p>
     */
    public $IsAnalysis;

    /**
     * @var string <p>解析错误信息</p>
     */
    public $ErrInfo;

    /**
     * @param string $ReportId <p>报告id</p>
     * @param boolean $IsAnalysis <p>是否解析成功</p>
     * @param string $ErrInfo <p>解析错误信息</p>
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
        if (array_key_exists("ReportId",$param) and $param["ReportId"] !== null) {
            $this->ReportId = $param["ReportId"];
        }

        if (array_key_exists("IsAnalysis",$param) and $param["IsAnalysis"] !== null) {
            $this->IsAnalysis = $param["IsAnalysis"];
        }

        if (array_key_exists("ErrInfo",$param) and $param["ErrInfo"] !== null) {
            $this->ErrInfo = $param["ErrInfo"];
        }
    }
}
