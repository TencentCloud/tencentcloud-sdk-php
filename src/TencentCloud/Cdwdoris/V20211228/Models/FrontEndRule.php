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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 前端规则描述
 *
 * @method integer getID() 获取id序列
 * @method void setID(integer $ID) 设置id序列
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getRule() 获取详细规则
 * @method void setRule(string $Rule) 设置详细规则
 */
class FrontEndRule extends AbstractModel
{
    /**
     * @var integer id序列
     */
    public $ID;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 详细规则
     */
    public $Rule;

    /**
     * @param integer $ID id序列
     * @param string $Name 规则名称
     * @param string $Rule 详细规则
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }
    }
}
