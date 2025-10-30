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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConfigCheckRules返回参数结构体
 *
 * @method integer getTotalCount() 获取风险规则数量
 * @method void setTotalCount(integer $TotalCount) 设置风险规则数量
 * @method array getRuleList() 获取风险规则列表
 * @method void setRuleList(array $RuleList) 设置风险规则列表
 * @method array getProviderList() 获取云厂商类型选项
 * @method void setProviderList(array $ProviderList) 设置云厂商类型选项
 * @method array getRiskLevelList() 获取风险等级类型选项
 * @method void setRiskLevelList(array $RiskLevelList) 设置风险等级类型选项
 * @method array getDispositionTypeList() 获取处置分类选项
 * @method void setDispositionTypeList(array $DispositionTypeList) 设置处置分类选项
 * @method array getCheckTypeList() 获取检查类型选项
 * @method void setCheckTypeList(array $CheckTypeList) 设置检查类型选项
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConfigCheckRulesResponse extends AbstractModel
{
    /**
     * @var integer 风险规则数量
     */
    public $TotalCount;

    /**
     * @var array 风险规则列表
     */
    public $RuleList;

    /**
     * @var array 云厂商类型选项
     */
    public $ProviderList;

    /**
     * @var array 风险等级类型选项
     */
    public $RiskLevelList;

    /**
     * @var array 处置分类选项
     */
    public $DispositionTypeList;

    /**
     * @var array 检查类型选项
     */
    public $CheckTypeList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 风险规则数量
     * @param array $RuleList 风险规则列表
     * @param array $ProviderList 云厂商类型选项
     * @param array $RiskLevelList 风险等级类型选项
     * @param array $DispositionTypeList 处置分类选项
     * @param array $CheckTypeList 检查类型选项
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = [];
            foreach ($param["RuleList"] as $key => $value){
                $obj = new RiskRuleInfo();
                $obj->deserialize($value);
                array_push($this->RuleList, $obj);
            }
        }

        if (array_key_exists("ProviderList",$param) and $param["ProviderList"] !== null) {
            $this->ProviderList = [];
            foreach ($param["ProviderList"] as $key => $value){
                $obj = new AttributeOptionSet();
                $obj->deserialize($value);
                array_push($this->ProviderList, $obj);
            }
        }

        if (array_key_exists("RiskLevelList",$param) and $param["RiskLevelList"] !== null) {
            $this->RiskLevelList = [];
            foreach ($param["RiskLevelList"] as $key => $value){
                $obj = new AttributeOptionSet();
                $obj->deserialize($value);
                array_push($this->RiskLevelList, $obj);
            }
        }

        if (array_key_exists("DispositionTypeList",$param) and $param["DispositionTypeList"] !== null) {
            $this->DispositionTypeList = [];
            foreach ($param["DispositionTypeList"] as $key => $value){
                $obj = new AttributeOptionSet();
                $obj->deserialize($value);
                array_push($this->DispositionTypeList, $obj);
            }
        }

        if (array_key_exists("CheckTypeList",$param) and $param["CheckTypeList"] !== null) {
            $this->CheckTypeList = [];
            foreach ($param["CheckTypeList"] as $key => $value){
                $obj = new AttributeOptionSet();
                $obj->deserialize($value);
                array_push($this->CheckTypeList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
