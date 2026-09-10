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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNDRDataLeakOutAlertList返回参数结构体
 *
 * @method integer getTotal() 获取符合查询条件的总条数
 * @method void setTotal(integer $Total) 设置符合查询条件的总条数
 * @method array getData() 获取查询结果列表
 * @method void setData(array $Data) 设置查询结果列表
 * @method array getInstanceTypeOptions() 获取实例类型可选项
 * @method void setInstanceTypeOptions(array $InstanceTypeOptions) 设置实例类型可选项
 * @method array getRegionOptions() 获取地域可选项
 * @method void setRegionOptions(array $RegionOptions) 设置地域可选项
 * @method array getDstServiceTypeOptions() 获取目标服务类型可选项
 * @method void setDstServiceTypeOptions(array $DstServiceTypeOptions) 设置目标服务类型可选项
 * @method array getRiskScenarioOptions() 获取风险场景（类型）可选项
 * @method void setRiskScenarioOptions(array $RiskScenarioOptions) 设置风险场景（类型）可选项
 * @method array getAnalysisStatusOptions() 获取AI分析任务状态可选项
 * @method void setAnalysisStatusOptions(array $AnalysisStatusOptions) 设置AI分析任务状态可选项
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNDRDataLeakOutAlertListResponse extends AbstractModel
{
    /**
     * @var integer 符合查询条件的总条数
     */
    public $Total;

    /**
     * @var array 查询结果列表
     */
    public $Data;

    /**
     * @var array 实例类型可选项
     */
    public $InstanceTypeOptions;

    /**
     * @var array 地域可选项
     */
    public $RegionOptions;

    /**
     * @var array 目标服务类型可选项
     */
    public $DstServiceTypeOptions;

    /**
     * @var array 风险场景（类型）可选项
     */
    public $RiskScenarioOptions;

    /**
     * @var array AI分析任务状态可选项
     */
    public $AnalysisStatusOptions;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 符合查询条件的总条数
     * @param array $Data 查询结果列表
     * @param array $InstanceTypeOptions 实例类型可选项
     * @param array $RegionOptions 地域可选项
     * @param array $DstServiceTypeOptions 目标服务类型可选项
     * @param array $RiskScenarioOptions 风险场景（类型）可选项
     * @param array $AnalysisStatusOptions AI分析任务状态可选项
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new DataLeakOutAlertEvent();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("InstanceTypeOptions",$param) and $param["InstanceTypeOptions"] !== null) {
            $this->InstanceTypeOptions = [];
            foreach ($param["InstanceTypeOptions"] as $key => $value){
                $obj = new FieldOption();
                $obj->deserialize($value);
                array_push($this->InstanceTypeOptions, $obj);
            }
        }

        if (array_key_exists("RegionOptions",$param) and $param["RegionOptions"] !== null) {
            $this->RegionOptions = [];
            foreach ($param["RegionOptions"] as $key => $value){
                $obj = new FieldOption();
                $obj->deserialize($value);
                array_push($this->RegionOptions, $obj);
            }
        }

        if (array_key_exists("DstServiceTypeOptions",$param) and $param["DstServiceTypeOptions"] !== null) {
            $this->DstServiceTypeOptions = [];
            foreach ($param["DstServiceTypeOptions"] as $key => $value){
                $obj = new FieldOption();
                $obj->deserialize($value);
                array_push($this->DstServiceTypeOptions, $obj);
            }
        }

        if (array_key_exists("RiskScenarioOptions",$param) and $param["RiskScenarioOptions"] !== null) {
            $this->RiskScenarioOptions = [];
            foreach ($param["RiskScenarioOptions"] as $key => $value){
                $obj = new FieldOption();
                $obj->deserialize($value);
                array_push($this->RiskScenarioOptions, $obj);
            }
        }

        if (array_key_exists("AnalysisStatusOptions",$param) and $param["AnalysisStatusOptions"] !== null) {
            $this->AnalysisStatusOptions = [];
            foreach ($param["AnalysisStatusOptions"] as $key => $value){
                $obj = new FieldOption();
                $obj->deserialize($value);
                array_push($this->AnalysisStatusOptions, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
