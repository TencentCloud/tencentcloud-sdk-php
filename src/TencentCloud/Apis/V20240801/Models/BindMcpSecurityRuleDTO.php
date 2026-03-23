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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindMcpSecurityRuleDTO，替换之前的McpSecurityRule
 *
 * @method string getID() 获取规则ID
 * @method void setID(string $ID) 设置规则ID
 * @method string getAct() 获取处置动作
 * @method void setAct(string $Act) 设置处置动作
 */
class BindMcpSecurityRuleDTO extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $ID;

    /**
     * @var string 处置动作
     */
    public $Act;

    /**
     * @param string $ID 规则ID
     * @param string $Act 处置动作
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

        if (array_key_exists("Act",$param) and $param["Act"] !== null) {
            $this->Act = $param["Act"];
        }
    }
}
