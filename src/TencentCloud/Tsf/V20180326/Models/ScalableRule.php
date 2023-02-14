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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScalableRule值
 *
 * @method string getRuleId() 获取RuleId值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(string $RuleId) 设置RuleId值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取Name值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置Name值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpandVmCountLimit() 获取ExpandVmCountLimit值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpandVmCountLimit(integer $ExpandVmCountLimit) 设置ExpandVmCountLimit值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShrinkVmCountLimit() 获取ShrinkVmCountLimit值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShrinkVmCountLimit(integer $ShrinkVmCountLimit) 设置ShrinkVmCountLimit值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupCount() 获取GroupCount值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupCount(integer $GroupCount) 设置GroupCount值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDisableMetricAS() 获取是否关闭指标伸缩, 默认0, 0:打开指标伸缩 1:关闭指标伸缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisableMetricAS(integer $DisableMetricAS) 设置是否关闭指标伸缩, 默认0, 0:打开指标伸缩 1:关闭指标伸缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableCronAS() 获取开启定时伸缩规则, 默认0, 0:关闭定时伸缩 1:开启定时伸缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableCronAS(integer $EnableCronAS) 设置开启定时伸缩规则, 默认0, 0:关闭定时伸缩 1:开启定时伸缩
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScalableRule extends AbstractModel
{
    /**
     * @var string RuleId值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string Name值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer ExpandVmCountLimit值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpandVmCountLimit;

    /**
     * @var integer ShrinkVmCountLimit值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShrinkVmCountLimit;

    /**
     * @var integer GroupCount值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupCount;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 是否关闭指标伸缩, 默认0, 0:打开指标伸缩 1:关闭指标伸缩
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisableMetricAS;

    /**
     * @var integer 开启定时伸缩规则, 默认0, 0:关闭定时伸缩 1:开启定时伸缩
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableCronAS;

    /**
     * @param string $RuleId RuleId值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name Name值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpandVmCountLimit ExpandVmCountLimit值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ShrinkVmCountLimit ShrinkVmCountLimit值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupCount GroupCount值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DisableMetricAS 是否关闭指标伸缩, 默认0, 0:打开指标伸缩 1:关闭指标伸缩
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableCronAS 开启定时伸缩规则, 默认0, 0:关闭定时伸缩 1:开启定时伸缩
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

        if (array_key_exists("ExpandVmCountLimit",$param) and $param["ExpandVmCountLimit"] !== null) {
            $this->ExpandVmCountLimit = $param["ExpandVmCountLimit"];
        }

        if (array_key_exists("ShrinkVmCountLimit",$param) and $param["ShrinkVmCountLimit"] !== null) {
            $this->ShrinkVmCountLimit = $param["ShrinkVmCountLimit"];
        }

        if (array_key_exists("GroupCount",$param) and $param["GroupCount"] !== null) {
            $this->GroupCount = $param["GroupCount"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DisableMetricAS",$param) and $param["DisableMetricAS"] !== null) {
            $this->DisableMetricAS = $param["DisableMetricAS"];
        }

        if (array_key_exists("EnableCronAS",$param) and $param["EnableCronAS"] !== null) {
            $this->EnableCronAS = $param["EnableCronAS"];
        }
    }
}
