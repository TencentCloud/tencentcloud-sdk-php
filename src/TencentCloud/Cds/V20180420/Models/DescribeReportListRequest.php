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
namespace TencentCloud\Cds\V20180420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReportList请求参数结构体
 *
 * @method integer getLimit() 获取<p>限制数目</p>
 * @method void setLimit(integer $Limit) 设置<p>限制数目</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method string getName() 获取<p>报告名称</p>
 * @method void setName(string $Name) 设置<p>报告名称</p>
 * @method integer getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p>
 * @method integer getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p>
 * @method integer getReportType() 获取<p>报告类型</p>
 * @method void setReportType(integer $ReportType) 设置<p>报告类型</p>
 * @method integer getReportStatus() 获取<p>报告状态</p>
 * @method void setReportStatus(integer $ReportStatus) 设置<p>报告状态</p>
 * @method integer getTemplateId() 获取<p>报表模板id</p>
 * @method void setTemplateId(integer $TemplateId) 设置<p>报表模板id</p>
 * @method string getField() 获取<p>需要排序的字段</p>
 * @method void setField(string $Field) 设置<p>需要排序的字段</p>
 * @method string getSort() 获取<p>排序顺序 asc desc</p>
 * @method void setSort(string $Sort) 设置<p>排序顺序 asc desc</p>
 * @method integer getCntDay() 获取<p>时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0</p>
 * @method void setCntDay(integer $CntDay) 设置<p>时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0</p>
 */
class DescribeReportListRequest extends AbstractModel
{
    /**
     * @var integer <p>限制数目</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var string <p>报告名称</p>
     */
    public $Name;

    /**
     * @var integer <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>报告类型</p>
     */
    public $ReportType;

    /**
     * @var integer <p>报告状态</p>
     */
    public $ReportStatus;

    /**
     * @var integer <p>报表模板id</p>
     */
    public $TemplateId;

    /**
     * @var string <p>需要排序的字段</p>
     */
    public $Field;

    /**
     * @var string <p>排序顺序 asc desc</p>
     */
    public $Sort;

    /**
     * @var integer <p>时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0</p>
     */
    public $CntDay;

    /**
     * @param integer $Limit <p>限制数目</p>
     * @param integer $Offset <p>偏移量</p>
     * @param string $Name <p>报告名称</p>
     * @param integer $StartTime <p>开始时间</p>
     * @param integer $EndTime <p>结束时间</p>
     * @param integer $ReportType <p>报告类型</p>
     * @param integer $ReportStatus <p>报告状态</p>
     * @param integer $TemplateId <p>报表模板id</p>
     * @param string $Field <p>需要排序的字段</p>
     * @param string $Sort <p>排序顺序 asc desc</p>
     * @param integer $CntDay <p>时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0</p>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }

        if (array_key_exists("ReportStatus",$param) and $param["ReportStatus"] !== null) {
            $this->ReportStatus = $param["ReportStatus"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("CntDay",$param) and $param["CntDay"] !== null) {
            $this->CntDay = $param["CntDay"];
        }
    }
}
