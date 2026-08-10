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
 * DescribeReportMissionList请求参数结构体
 *
 * @method string getTplName() 获取报表名 可模糊查询
 * @method void setTplName(string $TplName) 设置报表名 可模糊查询
 * @method integer getReportType() 获取报表类型 1:单次报表 2:周期报表 0全查
 * @method void setReportType(integer $ReportType) 设置报表类型 1:单次报表 2:周期报表 0全查
 * @method integer getTemplateId() 获取报表模板 1:综合分析报告 2:等保合规报告 0全查
 * @method void setTemplateId(integer $TemplateId) 设置报表模板 1:综合分析报告 2:等保合规报告 0全查
 * @method integer getMissionStatus() 获取任务状态0全查 1:生成中 2:待生成 3:已生成 4:生成失败 5:已暂停
 * @method void setMissionStatus(integer $MissionStatus) 设置任务状态0全查 1:生成中 2:待生成 3:已生成 4:生成失败 5:已暂停
 * @method string getField() 获取排序字段 支持“NextStartTime” 与 “MissionStatus”
 * @method void setField(string $Field) 设置排序字段 支持“NextStartTime” 与 “MissionStatus”
 * @method string getSort() 获取‘desc' | 'asc'
 * @method void setSort(string $Sort) 设置‘desc' | 'asc'
 * @method integer getLimit() 获取限制条数
 * @method void setLimit(integer $Limit) 设置限制条数
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 */
class DescribeReportMissionListRequest extends AbstractModel
{
    /**
     * @var string 报表名 可模糊查询
     */
    public $TplName;

    /**
     * @var integer 报表类型 1:单次报表 2:周期报表 0全查
     */
    public $ReportType;

    /**
     * @var integer 报表模板 1:综合分析报告 2:等保合规报告 0全查
     */
    public $TemplateId;

    /**
     * @var integer 任务状态0全查 1:生成中 2:待生成 3:已生成 4:生成失败 5:已暂停
     */
    public $MissionStatus;

    /**
     * @var string 排序字段 支持“NextStartTime” 与 “MissionStatus”
     */
    public $Field;

    /**
     * @var string ‘desc' | 'asc'
     */
    public $Sort;

    /**
     * @var integer 限制条数
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @param string $TplName 报表名 可模糊查询
     * @param integer $ReportType 报表类型 1:单次报表 2:周期报表 0全查
     * @param integer $TemplateId 报表模板 1:综合分析报告 2:等保合规报告 0全查
     * @param integer $MissionStatus 任务状态0全查 1:生成中 2:待生成 3:已生成 4:生成失败 5:已暂停
     * @param string $Field 排序字段 支持“NextStartTime” 与 “MissionStatus”
     * @param string $Sort ‘desc' | 'asc'
     * @param integer $Limit 限制条数
     * @param integer $Offset 偏移量
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
        if (array_key_exists("TplName",$param) and $param["TplName"] !== null) {
            $this->TplName = $param["TplName"];
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("MissionStatus",$param) and $param["MissionStatus"] !== null) {
            $this->MissionStatus = $param["MissionStatus"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
