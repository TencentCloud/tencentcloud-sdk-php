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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线策略简要信息
 *
 * @method integer getID() 获取<p>基线策略 ID。</p>
 * @method void setID(integer $ID) 设置<p>基线策略 ID。</p>
 * @method string getPolicyName() 获取<p>基线策略名称。</p>
 * @method void setPolicyName(string $PolicyName) 设置<p>基线策略名称。</p>
 * @method boolean getIsSystem() 获取<p>是否为系统内置策略。true 是，false 否（用户自定义策略）。</p>
 * @method void setIsSystem(boolean $IsSystem) 设置<p>是否为系统内置策略。true 是，false 否（用户自定义策略）。</p>
 */
class BaselinePolicyBrief extends AbstractModel
{
    /**
     * @var integer <p>基线策略 ID。</p>
     */
    public $ID;

    /**
     * @var string <p>基线策略名称。</p>
     */
    public $PolicyName;

    /**
     * @var boolean <p>是否为系统内置策略。true 是，false 否（用户自定义策略）。</p>
     */
    public $IsSystem;

    /**
     * @param integer $ID <p>基线策略 ID。</p>
     * @param string $PolicyName <p>基线策略名称。</p>
     * @param boolean $IsSystem <p>是否为系统内置策略。true 是，false 否（用户自定义策略）。</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("IsSystem",$param) and $param["IsSystem"] !== null) {
            $this->IsSystem = $param["IsSystem"];
        }
    }
}
