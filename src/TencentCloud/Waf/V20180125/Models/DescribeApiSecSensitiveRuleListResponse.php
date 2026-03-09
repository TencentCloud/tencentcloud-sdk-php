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
 * @method array getData() 获取api敏感规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置api敏感规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取规则数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置规则数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取自定义敏感检测规则总开关
 * @method void setStatus(integer $Status) 设置自定义敏感检测规则总开关
 * @method array getRuleNameList() 获取非内置规则的rulename列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleNameList(array $RuleNameList) 设置非内置规则的rulename列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApiExtractRule() 获取api提取规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiExtractRule(array $ApiExtractRule) 设置api提取规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApiSecPrivilegeRule() 获取api鉴权规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiSecPrivilegeRule(array $ApiSecPrivilegeRule) 设置api鉴权规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApiSecSceneRule() 获取api场景规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiSecSceneRule(array $ApiSecSceneRule) 设置api场景规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApiSecCustomEventRule() 获取自定义事件规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiSecCustomEventRule(array $ApiSecCustomEventRule) 设置自定义事件规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApiExcludeRule() 获取无效api排除规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiExcludeRule(array $ApiExcludeRule) 设置无效api排除规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeApiSecSensitiveRuleListResponse extends AbstractModel
{
    /**
     * @var array api敏感规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var integer 规则数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var integer 自定义敏感检测规则总开关
     */
    public $Status;

    /**
     * @var array 非内置规则的rulename列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleNameList;

    /**
     * @var array api提取规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiExtractRule;

    /**
     * @var array api鉴权规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiSecPrivilegeRule;

    /**
     * @var array api场景规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiSecSceneRule;

    /**
     * @var array 自定义事件规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiSecCustomEventRule;

    /**
     * @var array 无效api排除规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiExcludeRule;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data api敏感规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 规则数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 自定义敏感检测规则总开关
     * @param array $RuleNameList 非内置规则的rulename列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApiExtractRule api提取规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApiSecPrivilegeRule api鉴权规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApiSecSceneRule api场景规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApiSecCustomEventRule 自定义事件规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApiExcludeRule 无效api排除规则列表
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
