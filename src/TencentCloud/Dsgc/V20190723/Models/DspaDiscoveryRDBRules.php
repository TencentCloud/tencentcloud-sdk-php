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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分类分级任务RDB数据规则
 *
 * @method integer getStatus() 获取规则状态；0 不启用, 1 启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置规则状态；0 不启用, 1 启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMatchOperator() 获取只能取and 、or两个值其中之一，and：字段和内容同时满足，or：字段和内容满足其一
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchOperator(string $MatchOperator) 设置只能取and 、or两个值其中之一，and：字段和内容同时满足，or：字段和内容满足其一
注意：此字段可能返回 null，表示取不到有效值。
 * @method DspaDiscoveryDataRules getMetaRule() 获取字段名包含规则，最大支持选择9项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaRule(DspaDiscoveryDataRules $MetaRule) 设置字段名包含规则，最大支持选择9项
注意：此字段可能返回 null，表示取不到有效值。
 * @method DspaDiscoveryDataRules getContentRule() 获取内容包含规则，最大支持选择9项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentRule(DspaDiscoveryDataRules $ContentRule) 设置内容包含规则，最大支持选择9项
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaDiscoveryRDBRules extends AbstractModel
{
    /**
     * @var integer 规则状态；0 不启用, 1 启用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 只能取and 、or两个值其中之一，and：字段和内容同时满足，or：字段和内容满足其一
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchOperator;

    /**
     * @var DspaDiscoveryDataRules 字段名包含规则，最大支持选择9项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaRule;

    /**
     * @var DspaDiscoveryDataRules 内容包含规则，最大支持选择9项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentRule;

    /**
     * @param integer $Status 规则状态；0 不启用, 1 启用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MatchOperator 只能取and 、or两个值其中之一，and：字段和内容同时满足，or：字段和内容满足其一
注意：此字段可能返回 null，表示取不到有效值。
     * @param DspaDiscoveryDataRules $MetaRule 字段名包含规则，最大支持选择9项
注意：此字段可能返回 null，表示取不到有效值。
     * @param DspaDiscoveryDataRules $ContentRule 内容包含规则，最大支持选择9项
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MatchOperator",$param) and $param["MatchOperator"] !== null) {
            $this->MatchOperator = $param["MatchOperator"];
        }

        if (array_key_exists("MetaRule",$param) and $param["MetaRule"] !== null) {
            $this->MetaRule = new DspaDiscoveryDataRules();
            $this->MetaRule->deserialize($param["MetaRule"]);
        }

        if (array_key_exists("ContentRule",$param) and $param["ContentRule"] !== null) {
            $this->ContentRule = new DspaDiscoveryDataRules();
            $this->ContentRule->deserialize($param["ContentRule"]);
        }
    }
}
