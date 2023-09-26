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
 * CreateBlockIgnoreRuleList请求参数结构体
 *
 * @method array getRules() 获取规则列表
 * @method void setRules(array $Rules) 设置规则列表
 * @method integer getRuleType() 获取规则类型，1封禁，2放通，不支持域名封禁
 * @method void setRuleType(integer $RuleType) 设置规则类型，1封禁，2放通，不支持域名封禁
 * @method integer getCoverDuplicate() 获取是否覆盖重复数据，1覆盖，非1不覆盖，跳过重复数据
 * @method void setCoverDuplicate(integer $CoverDuplicate) 设置是否覆盖重复数据，1覆盖，非1不覆盖，跳过重复数据
 */
class CreateBlockIgnoreRuleListRequest extends AbstractModel
{
    /**
     * @var array 规则列表
     */
    public $Rules;

    /**
     * @var integer 规则类型，1封禁，2放通，不支持域名封禁
     */
    public $RuleType;

    /**
     * @var integer 是否覆盖重复数据，1覆盖，非1不覆盖，跳过重复数据
     */
    public $CoverDuplicate;

    /**
     * @param array $Rules 规则列表
     * @param integer $RuleType 规则类型，1封禁，2放通，不支持域名封禁
     * @param integer $CoverDuplicate 是否覆盖重复数据，1覆盖，非1不覆盖，跳过重复数据
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new IntrusionDefenseRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("CoverDuplicate",$param) and $param["CoverDuplicate"] !== null) {
            $this->CoverDuplicate = $param["CoverDuplicate"];
        }
    }
}
