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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例名称序号相关设置。
 *
 * @method boolean getEnabled() 获取是否开启实例创建序号，默认不开启。取值范围：<li>TRUE：表示开启实例创建序号<li>FALSE：表示不开启实例创建序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabled(boolean $Enabled) 设置是否开启实例创建序号，默认不开启。取值范围：<li>TRUE：表示开启实例创建序号<li>FALSE：表示不开启实例创建序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBeginIndex() 获取初始序号，取值范围为 [0, 99999999]。当序号递增后超出取值范围时，扩容活动会失败。<li>首次开启实例名称序号：默认值为 0。<li>非首次开启实例名称序号：若不指定该参数，沿用历史序号。下调初始序号可能会造成伸缩组内实例名称序号重复。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginIndex(integer $BeginIndex) 设置初始序号，取值范围为 [0, 99999999]。当序号递增后超出取值范围时，扩容活动会失败。<li>首次开启实例名称序号：默认值为 0。<li>非首次开启实例名称序号：若不指定该参数，沿用历史序号。下调初始序号可能会造成伸缩组内实例名称序号重复。
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceNameIndexSettings extends AbstractModel
{
    /**
     * @var boolean 是否开启实例创建序号，默认不开启。取值范围：<li>TRUE：表示开启实例创建序号<li>FALSE：表示不开启实例创建序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enabled;

    /**
     * @var integer 初始序号，取值范围为 [0, 99999999]。当序号递增后超出取值范围时，扩容活动会失败。<li>首次开启实例名称序号：默认值为 0。<li>非首次开启实例名称序号：若不指定该参数，沿用历史序号。下调初始序号可能会造成伸缩组内实例名称序号重复。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginIndex;

    /**
     * @param boolean $Enabled 是否开启实例创建序号，默认不开启。取值范围：<li>TRUE：表示开启实例创建序号<li>FALSE：表示不开启实例创建序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BeginIndex 初始序号，取值范围为 [0, 99999999]。当序号递增后超出取值范围时，扩容活动会失败。<li>首次开启实例名称序号：默认值为 0。<li>非首次开启实例名称序号：若不指定该参数，沿用历史序号。下调初始序号可能会造成伸缩组内实例名称序号重复。
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("BeginIndex",$param) and $param["BeginIndex"] !== null) {
            $this->BeginIndex = $param["BeginIndex"];
        }
    }
}
