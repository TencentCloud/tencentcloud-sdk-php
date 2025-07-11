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
 * DescribeDSPAAssessmentTasks请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例Id，格式“dspa-xxxxxxxx”
 * @method void setDspaId(string $DspaId) 设置DSPA实例Id，格式“dspa-xxxxxxxx”
 * @method integer getOffset() 获取偏移量。默认为0
 * @method void setOffset(integer $Offset) 设置偏移量。默认为0
 * @method integer getLimit() 获取结果集个数限制。默认为20，最大值为100
 * @method void setLimit(integer $Limit) 设置结果集个数限制。默认为20，最大值为100
 * @method array getFilters() 获取过滤项。支持模糊搜索：TaskId，TaskName支持过滤：BusinessName：业务名称BusinessDept：业务部门名称TemplateName：评估模板名称Status：评估状态 (waiting待评估，processing评估中, , finished已评估, failed评估失败)
 * @method void setFilters(array $Filters) 设置过滤项。支持模糊搜索：TaskId，TaskName支持过滤：BusinessName：业务名称BusinessDept：业务部门名称TemplateName：评估模板名称Status：评估状态 (waiting待评估，processing评估中, , finished已评估, failed评估失败)
 */
class DescribeDSPAAssessmentTasksRequest extends AbstractModel
{
    /**
     * @var string DSPA实例Id，格式“dspa-xxxxxxxx”
     */
    public $DspaId;

    /**
     * @var integer 偏移量。默认为0
     */
    public $Offset;

    /**
     * @var integer 结果集个数限制。默认为20，最大值为100
     */
    public $Limit;

    /**
     * @var array 过滤项。支持模糊搜索：TaskId，TaskName支持过滤：BusinessName：业务名称BusinessDept：业务部门名称TemplateName：评估模板名称Status：评估状态 (waiting待评估，processing评估中, , finished已评估, failed评估失败)
     */
    public $Filters;

    /**
     * @param string $DspaId DSPA实例Id，格式“dspa-xxxxxxxx”
     * @param integer $Offset 偏移量。默认为0
     * @param integer $Limit 结果集个数限制。默认为20，最大值为100
     * @param array $Filters 过滤项。支持模糊搜索：TaskId，TaskName支持过滤：BusinessName：业务名称BusinessDept：业务部门名称TemplateName：评估模板名称Status：评估状态 (waiting待评估，processing评估中, , finished已评估, failed评估失败)
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new DspaAssessmentFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
