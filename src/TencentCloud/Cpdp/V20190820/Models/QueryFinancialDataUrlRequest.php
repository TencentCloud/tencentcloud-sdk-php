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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryFinancialDataUrl请求参数结构体
 *
 * @method string getEndTime() 获取数据查询范围:结束时间 yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置数据查询范围:结束时间 yyyy-MM-dd HH:mm:ss
 * @method string getStartTime() 获取数据查询范围:开始时间 yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) 设置数据查询范围:开始时间 yyyy-MM-dd HH:mm:ss
 * @method string getDataType() 获取数据类型：ADDED_INVOICE_REPORT  增值税开票数据，NATURAL_FINANCE_REPORT 自然人金融数据,
NATURAL_FINANCE_REPORT_BY_TIME 按次报税数据导出,
NATURAL_FINANCE_REPORT_STAT_BY_DAY 按日累计报税数据导出
 * @method void setDataType(string $DataType) 设置数据类型：ADDED_INVOICE_REPORT  增值税开票数据，NATURAL_FINANCE_REPORT 自然人金融数据,
NATURAL_FINANCE_REPORT_BY_TIME 按次报税数据导出,
NATURAL_FINANCE_REPORT_STAT_BY_DAY 按日累计报税数据导出
 */
class QueryFinancialDataUrlRequest extends AbstractModel
{
    /**
     * @var string 数据查询范围:结束时间 yyyy-MM-dd HH:mm:ss
     */
    public $EndTime;

    /**
     * @var string 数据查询范围:开始时间 yyyy-MM-dd HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string 数据类型：ADDED_INVOICE_REPORT  增值税开票数据，NATURAL_FINANCE_REPORT 自然人金融数据,
NATURAL_FINANCE_REPORT_BY_TIME 按次报税数据导出,
NATURAL_FINANCE_REPORT_STAT_BY_DAY 按日累计报税数据导出
     */
    public $DataType;

    /**
     * @param string $EndTime 数据查询范围:结束时间 yyyy-MM-dd HH:mm:ss
     * @param string $StartTime 数据查询范围:开始时间 yyyy-MM-dd HH:mm:ss
     * @param string $DataType 数据类型：ADDED_INVOICE_REPORT  增值税开票数据，NATURAL_FINANCE_REPORT 自然人金融数据,
NATURAL_FINANCE_REPORT_BY_TIME 按次报税数据导出,
NATURAL_FINANCE_REPORT_STAT_BY_DAY 按日累计报税数据导出
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
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }
    }
}
