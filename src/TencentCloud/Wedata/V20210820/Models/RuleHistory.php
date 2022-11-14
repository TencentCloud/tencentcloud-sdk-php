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
 * 规则操作记录业务
 *
 * @method integer getRuleId() 获取规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlterTime() 获取变更时间 yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlterTime(string $AlterTime) 设置变更时间 yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlterContent() 获取变更内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlterContent(string $AlterContent) 设置变更内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOperatorUserId() 获取操作账号UId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorUserId(integer $OperatorUserId) 设置操作账号UId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorName() 获取操作人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorName(string $OperatorName) 设置操作人名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleHistory extends AbstractModel
{
    /**
     * @var integer 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 变更时间 yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlterTime;

    /**
     * @var string 变更内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlterContent;

    /**
     * @var integer 操作账号UId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorUserId;

    /**
     * @var string 操作人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorName;

    /**
     * @param integer $RuleId 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlterTime 变更时间 yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlterContent 变更内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OperatorUserId 操作账号UId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorName 操作人名称
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

        if (array_key_exists("AlterTime",$param) and $param["AlterTime"] !== null) {
            $this->AlterTime = $param["AlterTime"];
        }

        if (array_key_exists("AlterContent",$param) and $param["AlterContent"] !== null) {
            $this->AlterContent = $param["AlterContent"];
        }

        if (array_key_exists("OperatorUserId",$param) and $param["OperatorUserId"] !== null) {
            $this->OperatorUserId = $param["OperatorUserId"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }
    }
}
