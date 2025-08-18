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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据脱敏策略权限对象
 *
 * @method Policy getPolicyInfo() 获取数据脱敏权限对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyInfo(Policy $PolicyInfo) 设置数据脱敏权限对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataMaskStrategyId() 获取数据脱敏策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataMaskStrategyId(string $DataMaskStrategyId) 设置数据脱敏策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnType() 获取绑定字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnType(string $ColumnType) 设置绑定字段类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataMaskStrategyPolicy extends AbstractModel
{
    /**
     * @var Policy 数据脱敏权限对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyInfo;

    /**
     * @var string 数据脱敏策略ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataMaskStrategyId;

    /**
     * @var string 绑定字段类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnType;

    /**
     * @param Policy $PolicyInfo 数据脱敏权限对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataMaskStrategyId 数据脱敏策略ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnType 绑定字段类型
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
        if (array_key_exists("PolicyInfo",$param) and $param["PolicyInfo"] !== null) {
            $this->PolicyInfo = new Policy();
            $this->PolicyInfo->deserialize($param["PolicyInfo"]);
        }

        if (array_key_exists("DataMaskStrategyId",$param) and $param["DataMaskStrategyId"] !== null) {
            $this->DataMaskStrategyId = $param["DataMaskStrategyId"];
        }

        if (array_key_exists("ColumnType",$param) and $param["ColumnType"] !== null) {
            $this->ColumnType = $param["ColumnType"];
        }
    }
}
