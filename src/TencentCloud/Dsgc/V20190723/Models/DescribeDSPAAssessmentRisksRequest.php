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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPAAssessmentRisks请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例Id，格式“dspa-xxxxxxxx”
 * @method void setDspaId(string $DspaId) 设置DSPA实例Id，格式“dspa-xxxxxxxx”
 * @method string getTaskId() 获取评估任务Id，格式“task-xxxxxxxx”
 * @method void setTaskId(string $TaskId) 设置评估任务Id，格式“task-xxxxxxxx”
 * @method integer getOffset() 获取偏移量。默认为0
 * @method void setOffset(integer $Offset) 设置偏移量。默认为0
 * @method integer getLimit() 获取结果集个数限制。默认为20，最大值为100
 * @method void setLimit(integer $Limit) 设置结果集个数限制。默认为20，最大值为100
 * @method array getFilters() 获取过滤项。
支持模糊搜索：ControlItemName。
支持过滤：
RiskLevel：风险等级（high，medium，low）
Status：风险处理状态(waiting待处理, processing处理中, stopped处理暂停, finished已处理, failed处理失败)
 * @method void setFilters(array $Filters) 设置过滤项。
支持模糊搜索：ControlItemName。
支持过滤：
RiskLevel：风险等级（high，medium，low）
Status：风险处理状态(waiting待处理, processing处理中, stopped处理暂停, finished已处理, failed处理失败)
 */
class DescribeDSPAAssessmentRisksRequest extends AbstractModel
{
    /**
     * @var string DSPA实例Id，格式“dspa-xxxxxxxx”
     */
    public $DspaId;

    /**
     * @var string 评估任务Id，格式“task-xxxxxxxx”
     */
    public $TaskId;

    /**
     * @var integer 偏移量。默认为0
     */
    public $Offset;

    /**
     * @var integer 结果集个数限制。默认为20，最大值为100
     */
    public $Limit;

    /**
     * @var array 过滤项。
支持模糊搜索：ControlItemName。
支持过滤：
RiskLevel：风险等级（high，medium，low）
Status：风险处理状态(waiting待处理, processing处理中, stopped处理暂停, finished已处理, failed处理失败)
     */
    public $Filters;

    /**
     * @param string $DspaId DSPA实例Id，格式“dspa-xxxxxxxx”
     * @param string $TaskId 评估任务Id，格式“task-xxxxxxxx”
     * @param integer $Offset 偏移量。默认为0
     * @param integer $Limit 结果集个数限制。默认为20，最大值为100
     * @param array $Filters 过滤项。
支持模糊搜索：ControlItemName。
支持过滤：
RiskLevel：风险等级（high，medium，low）
Status：风险处理状态(waiting待处理, processing处理中, stopped处理暂停, finished已处理, failed处理失败)
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
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
