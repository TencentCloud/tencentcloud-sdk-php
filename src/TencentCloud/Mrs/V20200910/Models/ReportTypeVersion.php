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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指定报告类型选用其结构化版本
 *
 * @method integer getReportType() 获取检验报告
 * @method void setReportType(integer $ReportType) 设置检验报告
 * @method integer getVersion() 获取版本2
 * @method void setVersion(integer $Version) 设置版本2
 */
class ReportTypeVersion extends AbstractModel
{
    /**
     * @var integer 检验报告
     */
    public $ReportType;

    /**
     * @var integer 版本2
     */
    public $Version;

    /**
     * @param integer $ReportType 检验报告
     * @param integer $Version 版本2
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
        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
