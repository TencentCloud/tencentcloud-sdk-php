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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteBlockIgnoreRuleNew请求参数结构体
 *
 * @method integer getDeleteAll() 获取是否删除全部
 * @method void setDeleteAll(integer $DeleteAll) 设置是否删除全部
 * @method array getRules() 获取规则列表
 * @method void setRules(array $Rules) 设置规则列表
 * @method integer getRuleType() 获取封禁：1，放通：100，
主要用于全部删除时区分列表类型
 * @method void setRuleType(integer $RuleType) 设置封禁：1，放通：100，
主要用于全部删除时区分列表类型
 * @method string getShowType() 获取blocklist 封禁列表 whitelist 白名单列表
 * @method void setShowType(string $ShowType) 设置blocklist 封禁列表 whitelist 白名单列表
 */
class DeleteBlockIgnoreRuleNewRequest extends AbstractModel
{
    /**
     * @var integer 是否删除全部
     */
    public $DeleteAll;

    /**
     * @var array 规则列表
     */
    public $Rules;

    /**
     * @var integer 封禁：1，放通：100，
主要用于全部删除时区分列表类型
     */
    public $RuleType;

    /**
     * @var string blocklist 封禁列表 whitelist 白名单列表
     */
    public $ShowType;

    /**
     * @param integer $DeleteAll 是否删除全部
     * @param array $Rules 规则列表
     * @param integer $RuleType 封禁：1，放通：100，
主要用于全部删除时区分列表类型
     * @param string $ShowType blocklist 封禁列表 whitelist 白名单列表
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
        if (array_key_exists("DeleteAll",$param) and $param["DeleteAll"] !== null) {
            $this->DeleteAll = $param["DeleteAll"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new BanAndAllowRuleDel();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("ShowType",$param) and $param["ShowType"] !== null) {
            $this->ShowType = $param["ShowType"];
        }
    }
}
