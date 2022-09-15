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
 * DescribeScenarioWithJobs请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回数量，默认为20，最大为100
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大为100
 * @method array getProjectIds() 获取项目ID数组
 * @method void setProjectIds(array $ProjectIds) 设置项目ID数组
 * @method array getScenarioIds() 获取场景ID数组
 * @method void setScenarioIds(array $ScenarioIds) 设置场景ID数组
 * @method string getScenarioName() 获取场景名
 * @method void setScenarioName(string $ScenarioName) 设置场景名
 * @method integer getScenarioStatus() 获取场景状态数组
 * @method void setScenarioStatus(integer $ScenarioStatus) 设置场景状态数组
 * @method string getOrderBy() 获取排序的列
 * @method void setOrderBy(string $OrderBy) 设置排序的列
 * @method boolean getAscend() 获取是否正序
 * @method void setAscend(boolean $Ascend) 设置是否正序
 * @method ScenarioRelatedJobsParams getScenarioRelatedJobsParams() 获取job相关参数
 * @method void setScenarioRelatedJobsParams(ScenarioRelatedJobsParams $ScenarioRelatedJobsParams) 设置job相关参数
 * @method boolean getIgnoreScript() 获取是否需要返回场景的脚本内容
 * @method void setIgnoreScript(boolean $IgnoreScript) 设置是否需要返回场景的脚本内容
 * @method boolean getIgnoreDataset() 获取是否需要返回测试数据文件信息
 * @method void setIgnoreDataset(boolean $IgnoreDataset) 设置是否需要返回测试数据文件信息
 */
class DescribeScenarioWithJobsRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大为100
     */
    public $Limit;

    /**
     * @var array 项目ID数组
     */
    public $ProjectIds;

    /**
     * @var array 场景ID数组
     */
    public $ScenarioIds;

    /**
     * @var string 场景名
     */
    public $ScenarioName;

    /**
     * @var integer 场景状态数组
     */
    public $ScenarioStatus;

    /**
     * @var string 排序的列
     */
    public $OrderBy;

    /**
     * @var boolean 是否正序
     */
    public $Ascend;

    /**
     * @var ScenarioRelatedJobsParams job相关参数
     */
    public $ScenarioRelatedJobsParams;

    /**
     * @var boolean 是否需要返回场景的脚本内容
     */
    public $IgnoreScript;

    /**
     * @var boolean 是否需要返回测试数据文件信息
     */
    public $IgnoreDataset;

    /**
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回数量，默认为20，最大为100
     * @param array $ProjectIds 项目ID数组
     * @param array $ScenarioIds 场景ID数组
     * @param string $ScenarioName 场景名
     * @param integer $ScenarioStatus 场景状态数组
     * @param string $OrderBy 排序的列
     * @param boolean $Ascend 是否正序
     * @param ScenarioRelatedJobsParams $ScenarioRelatedJobsParams job相关参数
     * @param boolean $IgnoreScript 是否需要返回场景的脚本内容
     * @param boolean $IgnoreDataset 是否需要返回测试数据文件信息
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ScenarioIds",$param) and $param["ScenarioIds"] !== null) {
            $this->ScenarioIds = $param["ScenarioIds"];
        }

        if (array_key_exists("ScenarioName",$param) and $param["ScenarioName"] !== null) {
            $this->ScenarioName = $param["ScenarioName"];
        }

        if (array_key_exists("ScenarioStatus",$param) and $param["ScenarioStatus"] !== null) {
            $this->ScenarioStatus = $param["ScenarioStatus"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Ascend",$param) and $param["Ascend"] !== null) {
            $this->Ascend = $param["Ascend"];
        }

        if (array_key_exists("ScenarioRelatedJobsParams",$param) and $param["ScenarioRelatedJobsParams"] !== null) {
            $this->ScenarioRelatedJobsParams = new ScenarioRelatedJobsParams();
            $this->ScenarioRelatedJobsParams->deserialize($param["ScenarioRelatedJobsParams"]);
        }

        if (array_key_exists("IgnoreScript",$param) and $param["IgnoreScript"] !== null) {
            $this->IgnoreScript = $param["IgnoreScript"];
        }

        if (array_key_exists("IgnoreDataset",$param) and $param["IgnoreDataset"] !== null) {
            $this->IgnoreDataset = $param["IgnoreDataset"];
        }
    }
}
