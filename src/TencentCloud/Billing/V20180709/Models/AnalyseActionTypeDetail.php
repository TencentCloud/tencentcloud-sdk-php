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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 成本分析交易类型复杂类型
 *
 * @method string getActionType() 获取交易类型code
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionType(string $ActionType) 设置交易类型code
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActionTypeName() 获取交易类型Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionTypeName(string $ActionTypeName) 设置交易类型Name
注意：此字段可能返回 null，表示取不到有效值。
 */
class AnalyseActionTypeDetail extends AbstractModel
{
    /**
     * @var string 交易类型code
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionType;

    /**
     * @var string 交易类型Name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionTypeName;

    /**
     * @param string $ActionType 交易类型code
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActionTypeName 交易类型Name
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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ActionTypeName",$param) and $param["ActionTypeName"] !== null) {
            $this->ActionTypeName = $param["ActionTypeName"];
        }
    }
}
