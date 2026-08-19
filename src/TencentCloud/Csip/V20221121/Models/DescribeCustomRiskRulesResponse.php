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
 * DescribeCustomRiskRules返回参数结构体
 *
 * @method integer getTotalCount() 获取<p>风险规则数量</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>风险规则数量</p>
 * @method array getRiskRuleList() 获取<p>风险规则列表</p>
 * @method void setRiskRuleList(array $RiskRuleList) 设置<p>风险规则列表</p>
 * @method array getProviderList() 获取<p>云厂商选项</p>
 * @method void setProviderList(array $ProviderList) 设置<p>云厂商选项</p>
 * @method array getAssetTypeList() 获取<p>资产类型选项</p>
 * @method void setAssetTypeList(array $AssetTypeList) 设置<p>资产类型选项</p>
 * @method array getStandardNameList() 获取<p>安全条款规范</p>
 * @method void setStandardNameList(array $StandardNameList) 设置<p>安全条款规范</p>
 * @method array getRuleSeverityList() 获取<p>风险等级</p>
 * @method void setRuleSeverityList(array $RuleSeverityList) 设置<p>风险等级</p>
 * @method array getCheckTypeList() 获取<p>检查类型</p>
 * @method void setCheckTypeList(array $CheckTypeList) 设置<p>检查类型</p>
 * @method array getClassifyList() 获取<p>安全分类</p>
 * @method void setClassifyList(array $ClassifyList) 设置<p>安全分类</p>
 * @method array getStandardList() 获取<p>安全规范</p>
 * @method void setStandardList(array $StandardList) 设置<p>安全规范</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCustomRiskRulesResponse extends AbstractModel
{
    /**
     * @var integer <p>风险规则数量</p>
     */
    public $TotalCount;

    /**
     * @var array <p>风险规则列表</p>
     */
    public $RiskRuleList;

    /**
     * @var array <p>云厂商选项</p>
     */
    public $ProviderList;

    /**
     * @var array <p>资产类型选项</p>
     */
    public $AssetTypeList;

    /**
     * @var array <p>安全条款规范</p>
     */
    public $StandardNameList;

    /**
     * @var array <p>风险等级</p>
     */
    public $RuleSeverityList;

    /**
     * @var array <p>检查类型</p>
     */
    public $CheckTypeList;

    /**
     * @var array <p>安全分类</p>
     */
    public $ClassifyList;

    /**
     * @var array <p>安全规范</p>
     */
    public $StandardList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount <p>风险规则数量</p>
     * @param array $RiskRuleList <p>风险规则列表</p>
     * @param array $ProviderList <p>云厂商选项</p>
     * @param array $AssetTypeList <p>资产类型选项</p>
     * @param array $StandardNameList <p>安全条款规范</p>
     * @param array $RuleSeverityList <p>风险等级</p>
     * @param array $CheckTypeList <p>检查类型</p>
     * @param array $ClassifyList <p>安全分类</p>
     * @param array $StandardList <p>安全规范</p>
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

        if (array_key_exists("RiskRuleList",$param) and $param["RiskRuleList"] !== null) {
            $this->RiskRuleList = [];
            foreach ($param["RiskRuleList"] as $key => $value){
                $obj = new CustomRiskRuleItem();
                $obj->deserialize($value);
                array_push($this->RiskRuleList, $obj);
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

        if (array_key_exists("AssetTypeList",$param) and $param["AssetTypeList"] !== null) {
            $this->AssetTypeList = [];
            foreach ($param["AssetTypeList"] as $key => $value){
                $obj = new AttributeOptionSet();
                $obj->deserialize($value);
                array_push($this->AssetTypeList, $obj);
            }
        }

        if (array_key_exists("StandardNameList",$param) and $param["StandardNameList"] !== null) {
            $this->StandardNameList = [];
            foreach ($param["StandardNameList"] as $key => $value){
                $obj = new StandardItem();
                $obj->deserialize($value);
                array_push($this->StandardNameList, $obj);
            }
        }

        if (array_key_exists("RuleSeverityList",$param) and $param["RuleSeverityList"] !== null) {
            $this->RuleSeverityList = [];
            foreach ($param["RuleSeverityList"] as $key => $value){
                $obj = new RuleStatisticsItem();
                $obj->deserialize($value);
                array_push($this->RuleSeverityList, $obj);
            }
        }

        if (array_key_exists("CheckTypeList",$param) and $param["CheckTypeList"] !== null) {
            $this->CheckTypeList = [];
            foreach ($param["CheckTypeList"] as $key => $value){
                $obj = new RuleStatisticsItem();
                $obj->deserialize($value);
                array_push($this->CheckTypeList, $obj);
            }
        }

        if (array_key_exists("ClassifyList",$param) and $param["ClassifyList"] !== null) {
            $this->ClassifyList = [];
            foreach ($param["ClassifyList"] as $key => $value){
                $obj = new RuleStatisticsItem();
                $obj->deserialize($value);
                array_push($this->ClassifyList, $obj);
            }
        }

        if (array_key_exists("StandardList",$param) and $param["StandardList"] !== null) {
            $this->StandardList = [];
            foreach ($param["StandardList"] as $key => $value){
                $obj = new RuleStatisticsItem();
                $obj->deserialize($value);
                array_push($this->StandardList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
