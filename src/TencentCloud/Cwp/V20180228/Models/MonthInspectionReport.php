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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专家服务-月巡检报告
 *
 * @method string getReportName() 获取巡检报告名称
 * @method void setReportName(string $ReportName) 设置巡检报告名称
 * @method string getReportPath() 获取巡检报告下载地址
 * @method void setReportPath(string $ReportPath) 设置巡检报告下载地址
 * @method string getModifyTime() 获取巡检报告更新时间
 * @method void setModifyTime(string $ModifyTime) 设置巡检报告更新时间
 */
class MonthInspectionReport extends AbstractModel
{
    /**
     * @var string 巡检报告名称
     */
    public $ReportName;

    /**
     * @var string 巡检报告下载地址
     */
    public $ReportPath;

    /**
     * @var string 巡检报告更新时间
     */
    public $ModifyTime;

    /**
     * @param string $ReportName 巡检报告名称
     * @param string $ReportPath 巡检报告下载地址
     * @param string $ModifyTime 巡检报告更新时间
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
        if (array_key_exists("ReportName",$param) and $param["ReportName"] !== null) {
            $this->ReportName = $param["ReportName"];
        }

        if (array_key_exists("ReportPath",$param) and $param["ReportPath"] !== null) {
            $this->ReportPath = $param["ReportPath"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
