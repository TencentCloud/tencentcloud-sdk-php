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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 呼转配置
 *
 * @method boolean getEnabled() 获取是否启用
 * @method void setEnabled(boolean $Enabled) 设置是否启用
 * @method integer getCondition() 获取1 无条件呼转 2 有条件呼转
 * @method void setCondition(integer $Condition) 设置1 无条件呼转 2 有条件呼转
 * @method ForwardingTarget getTarget() 获取呼转目标
 * @method void setTarget(ForwardingTarget $Target) 设置呼转目标
 */
class ForwardingConfig extends AbstractModel
{
    /**
     * @var boolean 是否启用
     */
    public $Enabled;

    /**
     * @var integer 1 无条件呼转 2 有条件呼转
     */
    public $Condition;

    /**
     * @var ForwardingTarget 呼转目标
     */
    public $Target;

    /**
     * @param boolean $Enabled 是否启用
     * @param integer $Condition 1 无条件呼转 2 有条件呼转
     * @param ForwardingTarget $Target 呼转目标
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

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new ForwardingTarget();
            $this->Target->deserialize($param["Target"]);
        }
    }
}
