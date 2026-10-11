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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建脱敏策略时的策略信息
 *
 * @method string getStrategyName() 获取策略名称，必填，长度 1~128 字符，同一项目下唯一
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyName(string $StrategyName) 设置策略名称，必填，长度 1~128 字符，同一项目下唯一
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroups() 获取用户组脱敏规则列表，必填，至少包含一条规则。每条规则描述某个用户组对应的脱敏方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroups(array $Groups) 设置用户组脱敏规则列表，必填，至少包含一条规则。每条规则描述某个用户组对应的脱敏方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyType() 获取策略类型，必填，直接透传给 DLC。合法值：MASK_SHOW_FIRST_4（保留前四个字符）、MASK_SHOW_LAST_4（保留后四个字符）、MASK_HASH（哈希脱敏）、MASK_DATE_SHOW_YEAR（日期脱敏保留年份）、MASK_NULL（置为 NULL）、MASK_DEFAULT（默认值脱敏）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyType(string $StrategyType) 设置策略类型，必填，直接透传给 DLC。合法值：MASK_SHOW_FIRST_4（保留前四个字符）、MASK_SHOW_LAST_4（保留后四个字符）、MASK_HASH（哈希脱敏）、MASK_DATE_SHOW_YEAR（日期脱敏保留年份）、MASK_NULL（置为 NULL）、MASK_DEFAULT（默认值脱敏）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyDesc() 获取策略描述，可选，最大 512 字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyDesc(string $StrategyDesc) 设置策略描述，可选，最大 512 字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyId() 获取策略ID
 * @method void setStrategyId(string $StrategyId) 设置策略ID
 * @method array getLabels() 获取该脱敏策略当前绑定的敏感标签列表。使用场景：表详情弹窗回显“此策略关联了哪些敏感标签”，前端可 hover 展示。数据源：catalog-manager 域 meta_label_mask_policy_rel JOIN meta_biz_label，按 policy_id 反查。未关联任何敏感标签时为空数组。前置条件：仅当所在 ColumnInfo.DataMaskStrategyInfo 非空时才有查询意义。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置该脱敏策略当前绑定的敏感标签列表。使用场景：表详情弹窗回显“此策略关联了哪些敏感标签”，前端可 hover 展示。数据源：catalog-manager 域 meta_label_mask_policy_rel JOIN meta_biz_label，按 policy_id 反查。未关联任何敏感标签时为空数组。前置条件：仅当所在 ColumnInfo.DataMaskStrategyInfo 非空时才有查询意义。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataMaskStrategyInfo extends AbstractModel
{
    /**
     * @var string 策略名称，必填，长度 1~128 字符，同一项目下唯一
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyName;

    /**
     * @var array 用户组脱敏规则列表，必填，至少包含一条规则。每条规则描述某个用户组对应的脱敏方法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Groups;

    /**
     * @var string 策略类型，必填，直接透传给 DLC。合法值：MASK_SHOW_FIRST_4（保留前四个字符）、MASK_SHOW_LAST_4（保留后四个字符）、MASK_HASH（哈希脱敏）、MASK_DATE_SHOW_YEAR（日期脱敏保留年份）、MASK_NULL（置为 NULL）、MASK_DEFAULT（默认值脱敏）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyType;

    /**
     * @var string 策略描述，可选，最大 512 字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyDesc;

    /**
     * @var string 策略ID
     */
    public $StrategyId;

    /**
     * @var array 该脱敏策略当前绑定的敏感标签列表。使用场景：表详情弹窗回显“此策略关联了哪些敏感标签”，前端可 hover 展示。数据源：catalog-manager 域 meta_label_mask_policy_rel JOIN meta_biz_label，按 policy_id 反查。未关联任何敏感标签时为空数组。前置条件：仅当所在 ColumnInfo.DataMaskStrategyInfo 非空时才有查询意义。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @param string $StrategyName 策略名称，必填，长度 1~128 字符，同一项目下唯一
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Groups 用户组脱敏规则列表，必填，至少包含一条规则。每条规则描述某个用户组对应的脱敏方法
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyType 策略类型，必填，直接透传给 DLC。合法值：MASK_SHOW_FIRST_4（保留前四个字符）、MASK_SHOW_LAST_4（保留后四个字符）、MASK_HASH（哈希脱敏）、MASK_DATE_SHOW_YEAR（日期脱敏保留年份）、MASK_NULL（置为 NULL）、MASK_DEFAULT（默认值脱敏）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyDesc 策略描述，可选，最大 512 字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyId 策略ID
     * @param array $Labels 该脱敏策略当前绑定的敏感标签列表。使用场景：表详情弹窗回显“此策略关联了哪些敏感标签”，前端可 hover 展示。数据源：catalog-manager 域 meta_label_mask_policy_rel JOIN meta_biz_label，按 policy_id 反查。未关联任何敏感标签时为空数组。前置条件：仅当所在 ColumnInfo.DataMaskStrategyInfo 非空时才有查询意义。
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
        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new DataMaskGroup();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("StrategyDesc",$param) and $param["StrategyDesc"] !== null) {
            $this->StrategyDesc = $param["StrategyDesc"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new DataMaskLabelInfo();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
