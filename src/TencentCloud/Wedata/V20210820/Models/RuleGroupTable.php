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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表绑定规则组信息
 *
 * @method RuleGroupTableInnerInfo getTableInfo() 获取表信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableInfo(RuleGroupTableInnerInfo $TableInfo) 设置表信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRuleGroups() 获取规则组调度信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroups(array $RuleGroups) 设置规则组调度信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubscriptions() 获取订阅者信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubscriptions(array $Subscriptions) 设置订阅者信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleGroupTable extends AbstractModel
{
    /**
     * @var RuleGroupTableInnerInfo 表信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableInfo;

    /**
     * @var array 规则组调度信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroups;

    /**
     * @var array 订阅者信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Subscriptions;

    /**
     * @param RuleGroupTableInnerInfo $TableInfo 表信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RuleGroups 规则组调度信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Subscriptions 订阅者信息
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
        if (array_key_exists("TableInfo",$param) and $param["TableInfo"] !== null) {
            $this->TableInfo = new RuleGroupTableInnerInfo();
            $this->TableInfo->deserialize($param["TableInfo"]);
        }

        if (array_key_exists("RuleGroups",$param) and $param["RuleGroups"] !== null) {
            $this->RuleGroups = [];
            foreach ($param["RuleGroups"] as $key => $value){
                $obj = new RuleGroupSchedulerInfo();
                $obj->deserialize($value);
                array_push($this->RuleGroups, $obj);
            }
        }

        if (array_key_exists("Subscriptions",$param) and $param["Subscriptions"] !== null) {
            $this->Subscriptions = [];
            foreach ($param["Subscriptions"] as $key => $value){
                $obj = new RuleGroupSubscribe();
                $obj->deserialize($value);
                array_push($this->Subscriptions, $obj);
            }
        }
    }
}
