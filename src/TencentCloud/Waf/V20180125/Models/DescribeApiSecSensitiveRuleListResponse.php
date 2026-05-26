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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApiSecSensitiveRuleList返回参数结构体
 *
 * @method array getData() 获取<p>api敏感规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置<p>api敏感规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取<p>规则数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置<p>规则数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>自定义敏感检测规则总开关</p>
 * @method void setStatus(integer $Status) 设置<p>自定义敏感检测规则总开关</p>
 * @method array getRuleNameList() 获取<p>非内置规则的rulename列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleNameList(array $RuleNameList) 设置<p>非内置规则的rulename列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApiExtractRule() 获取<p>api提取规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiExtractRule(array $ApiExtractRule) 设置<p>api提取规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApiSecPrivilegeRule() 获取<p>api鉴权规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiSecPrivilegeRule(array $ApiSecPrivilegeRule) 设置<p>api鉴权规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApiSecSceneRule() 获取<p>api场景规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiSecSceneRule(array $ApiSecSceneRule) 设置<p>api场景规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApiSecCustomEventRule() 获取<p>自定义事件规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiSecCustomEventRule(array $ApiSecCustomEventRule) 设置<p>自定义事件规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApiExcludeRule() 获取<p>无效api排除规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiExcludeRule(array $ApiExcludeRule) 设置<p>无效api排除规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApiSecSensitiveWhiteRule() 获取<p>敏感数据加白规则列表</p>
 * @method void setApiSecSensitiveWhiteRule(array $ApiSecSensitiveWhiteRule) 设置<p>敏感数据加白规则列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeApiSecSensitiveRuleListResponse extends AbstractModel
{
    /**
     * @var array <p>api敏感规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var integer <p>规则数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var integer <p>自定义敏感检测规则总开关</p>
     */
    public $Status;

    /**
     * @var array <p>非内置规则的rulename列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleNameList;

    /**
     * @var array <p>api提取规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiExtractRule;

    /**
     * @var array <p>api鉴权规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiSecPrivilegeRule;

    /**
     * @var array <p>api场景规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiSecSceneRule;

    /**
     * @var array <p>自定义事件规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiSecCustomEventRule;

    /**
     * @var array <p>无效api排除规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiExcludeRule;

    /**
     * @var array <p>敏感数据加白规则列表</p>
     */
    public $ApiSecSensitiveWhiteRule;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data <p>api敏感规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total <p>规则数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>自定义敏感检测规则总开关</p>
     * @param array $RuleNameList <p>非内置规则的rulename列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApiExtractRule <p>api提取规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApiSecPrivilegeRule <p>api鉴权规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApiSecSceneRule <p>api场景规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApiSecCustomEventRule <p>自定义事件规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApiExcludeRule <p>无效api排除规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApiSecSensitiveWhiteRule <p>敏感数据加白规则列表</p>
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new ApiSecSensitiveRule();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleNameList",$param) and $param["RuleNameList"] !== null) {
            $this->RuleNameList = $param["RuleNameList"];
        }

        if (array_key_exists("ApiExtractRule",$param) and $param["ApiExtractRule"] !== null) {
            $this->ApiExtractRule = [];
            foreach ($param["ApiExtractRule"] as $key => $value){
                $obj = new ApiSecExtractRule();
                $obj->deserialize($value);
                array_push($this->ApiExtractRule, $obj);
            }
        }

        if (array_key_exists("ApiSecPrivilegeRule",$param) and $param["ApiSecPrivilegeRule"] !== null) {
            $this->ApiSecPrivilegeRule = [];
            foreach ($param["ApiSecPrivilegeRule"] as $key => $value){
                $obj = new ApiSecPrivilegeRule();
                $obj->deserialize($value);
                array_push($this->ApiSecPrivilegeRule, $obj);
            }
        }

        if (array_key_exists("ApiSecSceneRule",$param) and $param["ApiSecSceneRule"] !== null) {
            $this->ApiSecSceneRule = [];
            foreach ($param["ApiSecSceneRule"] as $key => $value){
                $obj = new ApiSecSceneRule();
                $obj->deserialize($value);
                array_push($this->ApiSecSceneRule, $obj);
            }
        }

        if (array_key_exists("ApiSecCustomEventRule",$param) and $param["ApiSecCustomEventRule"] !== null) {
            $this->ApiSecCustomEventRule = [];
            foreach ($param["ApiSecCustomEventRule"] as $key => $value){
                $obj = new ApiSecCustomEventRule();
                $obj->deserialize($value);
                array_push($this->ApiSecCustomEventRule, $obj);
            }
        }

        if (array_key_exists("ApiExcludeRule",$param) and $param["ApiExcludeRule"] !== null) {
            $this->ApiExcludeRule = [];
            foreach ($param["ApiExcludeRule"] as $key => $value){
                $obj = new ApiSecExcludeRule();
                $obj->deserialize($value);
                array_push($this->ApiExcludeRule, $obj);
            }
        }

        if (array_key_exists("ApiSecSensitiveWhiteRule",$param) and $param["ApiSecSensitiveWhiteRule"] !== null) {
            $this->ApiSecSensitiveWhiteRule = [];
            foreach ($param["ApiSecSensitiveWhiteRule"] as $key => $value){
                $obj = new ApiSecSensitiveWhiteRule();
                $obj->deserialize($value);
                array_push($this->ApiSecSensitiveWhiteRule, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
