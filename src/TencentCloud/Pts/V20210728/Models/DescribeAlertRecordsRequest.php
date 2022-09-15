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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlertRecords请求参数结构体
 *
 * @method array getProjectIds() 获取项目 ID 列表
 * @method void setProjectIds(array $ProjectIds) 设置项目 ID 列表
 * @method array getScenarioIds() 获取场景 ID 列表
 * @method void setScenarioIds(array $ScenarioIds) 设置场景 ID 列表
 * @method array getJobIds() 获取任务 ID 列表
 * @method void setJobIds(array $JobIds) 设置任务 ID 列表
 * @method boolean getAscend() 获取是否正序
 * @method void setAscend(boolean $Ascend) 设置是否正序
 * @method string getOrderBy() 获取排序项
 * @method void setOrderBy(string $OrderBy) 设置排序项
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回数量，默认为20，最大为100
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大为100
 * @method array getScenarioNames() 获取按场景名筛选
 * @method void setScenarioNames(array $ScenarioNames) 设置按场景名筛选
 */
class DescribeAlertRecordsRequest extends AbstractModel
{
    /**
     * @var array 项目 ID 列表
     */
    public $ProjectIds;

    /**
     * @var array 场景 ID 列表
     */
    public $ScenarioIds;

    /**
     * @var array 任务 ID 列表
     */
    public $JobIds;

    /**
     * @var boolean 是否正序
     */
    public $Ascend;

    /**
     * @var string 排序项
     */
    public $OrderBy;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大为100
     */
    public $Limit;

    /**
     * @var array 按场景名筛选
     */
    public $ScenarioNames;

    /**
     * @param array $ProjectIds 项目 ID 列表
     * @param array $ScenarioIds 场景 ID 列表
     * @param array $JobIds 任务 ID 列表
     * @param boolean $Ascend 是否正序
     * @param string $OrderBy 排序项
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回数量，默认为20，最大为100
     * @param array $ScenarioNames 按场景名筛选
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
        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ScenarioIds",$param) and $param["ScenarioIds"] !== null) {
            $this->ScenarioIds = $param["ScenarioIds"];
        }

        if (array_key_exists("JobIds",$param) and $param["JobIds"] !== null) {
            $this->JobIds = $param["JobIds"];
        }

        if (array_key_exists("Ascend",$param) and $param["Ascend"] !== null) {
            $this->Ascend = $param["Ascend"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ScenarioNames",$param) and $param["ScenarioNames"] !== null) {
            $this->ScenarioNames = $param["ScenarioNames"];
        }
    }
}
