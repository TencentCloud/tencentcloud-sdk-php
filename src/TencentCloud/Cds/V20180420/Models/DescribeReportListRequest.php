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
 * @method integer getLimit() 获取限制数目
 * @method void setLimit(integer $Limit) 设置限制数目
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method string getName() 获取报告名称
 * @method void setName(string $Name) 设置报告名称
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method integer getReportType() 获取报告类型
 * @method void setReportType(integer $ReportType) 设置报告类型
 * @method integer getReportStatus() 获取报告状态
 * @method void setReportStatus(integer $ReportStatus) 设置报告状态
 * @method integer getTemplateId() 获取报表模版id
 * @method void setTemplateId(integer $TemplateId) 设置报表模版id
 * @method string getField() 获取需要排序的字段
 * @method void setField(string $Field) 设置需要排序的字段
 * @method string getSort() 获取排序顺序 asc desc
 * @method void setSort(string $Sort) 设置排序顺序 asc desc
 * @method integer getCntDay() 获取时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0
 * @method void setCntDay(integer $CntDay) 设置时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0
 */
class DescribeReportListRequest extends AbstractModel
{
    /**
     * @var integer 限制数目
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var string 报告名称
     */
    public $Name;

    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var integer 报告类型
     */
    public $ReportType;

    /**
     * @var integer 报告状态
     */
    public $ReportStatus;

    /**
     * @var integer 报表模版id
     */
    public $TemplateId;

    /**
     * @var string 需要排序的字段
     */
    public $Field;

    /**
     * @var string 排序顺序 asc desc
     */
    public $Sort;

    /**
     * @var integer 时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0
     */
    public $CntDay;

    /**
     * @param integer $Limit 限制数目
     * @param integer $Offset 偏移量
     * @param string $Name 报告名称
     * @param integer $StartTime 开始时间
     * @param integer $EndTime 结束时间
     * @param integer $ReportType 报告类型
     * @param integer $ReportStatus 报告状态
     * @param integer $TemplateId 报表模版id
     * @param string $Field 需要排序的字段
     * @param string $Sort 排序顺序 asc desc
     * @param integer $CntDay 时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0
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
