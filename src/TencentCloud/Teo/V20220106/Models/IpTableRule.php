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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 详细规则。
 *
 * @method integer getRuleID() 获取规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleID(integer $RuleID) 设置规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取处置动作。
1. drop 拦截
2. trans放行
3. monitor观察
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置处置动作。
1. drop 拦截
2. trans放行
3. monitor观察
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMatchFrom() 获取类型匹配。
1. ip 根据ip
2. area 根据区域
3. ua 根据User-Agent
4. referer 根据Referer
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchFrom(string $MatchFrom) 设置类型匹配。
1. ip 根据ip
2. area 根据区域
3. ua 根据User-Agent
4. referer 根据Referer
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMatchContent() 获取匹配内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchContent(string $MatchContent) 设置匹配内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class IpTableRule extends AbstractModel
{
    /**
     * @var integer 规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleID;

    /**
     * @var string 处置动作。
1. drop 拦截
2. trans放行
3. monitor观察
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var string 类型匹配。
1. ip 根据ip
2. area 根据区域
3. ua 根据User-Agent
4. referer 根据Referer
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchFrom;

    /**
     * @var string 匹配内容。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchContent;

    /**
     * @var string 更新时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param integer $RuleID 规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action 处置动作。
1. drop 拦截
2. trans放行
3. monitor观察
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MatchFrom 类型匹配。
1. ip 根据ip
2. area 根据区域
3. ua 根据User-Agent
4. referer 根据Referer
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MatchContent 匹配内容。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间。
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("MatchFrom",$param) and $param["MatchFrom"] !== null) {
            $this->MatchFrom = $param["MatchFrom"];
        }

        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
