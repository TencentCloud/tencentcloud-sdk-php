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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBlockIgnoreRuleNew请求参数结构体
 *
 * @method BanAndAllowRule getRule() 获取<p>规则</p>
 * @method void setRule(BanAndAllowRule $Rule) 设置<p>规则</p>
 * @method integer getRuleType() 获取<p>RuleType: 1放通列表 2外部IP 3域名 4情报 5资产 6自定义规则  7入侵防御规则</p>
 * @method void setRuleType(integer $RuleType) 设置<p>RuleType: 1放通列表 2外部IP 3域名 4情报 5资产 6自定义规则  7入侵防御规则</p>
 * @method integer getCoverDuplicate() 获取<p>冲突选择</p><p>枚举值：</p><ul><li>1： 删除对端写入</li><li>0： 跳过写入</li></ul>
 * @method void setCoverDuplicate(integer $CoverDuplicate) 设置<p>冲突选择</p><p>枚举值：</p><ul><li>1： 删除对端写入</li><li>0： 跳过写入</li></ul>
 */
class ModifyBlockIgnoreRuleNewRequest extends AbstractModel
{
    /**
     * @var BanAndAllowRule <p>规则</p>
     */
    public $Rule;

    /**
     * @var integer <p>RuleType: 1放通列表 2外部IP 3域名 4情报 5资产 6自定义规则  7入侵防御规则</p>
     */
    public $RuleType;

    /**
     * @var integer <p>冲突选择</p><p>枚举值：</p><ul><li>1： 删除对端写入</li><li>0： 跳过写入</li></ul>
     */
    public $CoverDuplicate;

    /**
     * @param BanAndAllowRule $Rule <p>规则</p>
     * @param integer $RuleType <p>RuleType: 1放通列表 2外部IP 3域名 4情报 5资产 6自定义规则  7入侵防御规则</p>
     * @param integer $CoverDuplicate <p>冲突选择</p><p>枚举值：</p><ul><li>1： 删除对端写入</li><li>0： 跳过写入</li></ul>
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
        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new BanAndAllowRule();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("CoverDuplicate",$param) and $param["CoverDuplicate"] !== null) {
            $this->CoverDuplicate = $param["CoverDuplicate"];
        }
    }
}
