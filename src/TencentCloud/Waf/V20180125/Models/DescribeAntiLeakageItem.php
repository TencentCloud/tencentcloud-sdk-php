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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 出参
 *
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getStatus() 获取状态值
 * @method void setStatus(integer $Status) 设置状态值
 * @method string getAction() 获取动作
 * @method void setAction(string $Action) 设置动作
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method array getStrategies() 获取匹配条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategies(array $Strategies) 设置匹配条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUri() 获取匹配的URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUri(string $Uri) 设置匹配的URL
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeAntiLeakageItem extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 状态值
     */
    public $Status;

    /**
     * @var string 动作
     */
    public $Action;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var array 匹配条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Strategies;

    /**
     * @var string 匹配的URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uri;

    /**
     * @param integer $RuleId 规则ID
     * @param string $Name 名称
     * @param integer $Status 状态值
     * @param string $Action 动作
     * @param string $CreateTime 创建时间
     * @param array $Strategies 匹配条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uri 匹配的URL
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new DescribeAntiInfoLeakRulesStrategyItem();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }
    }
}
