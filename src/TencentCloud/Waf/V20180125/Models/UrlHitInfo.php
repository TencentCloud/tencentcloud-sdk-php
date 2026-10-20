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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 恶意URL命中信息
 *
 * @method string getUrl() 获取<p>命中的URL</p>
 * @method void setUrl(string $Url) 设置<p>命中的URL</p>
 * @method string getRuleId() 获取<p>命中的规则ID</p>
 * @method void setRuleId(string $RuleId) 设置<p>命中的规则ID</p>
 * @method string getRuleName() 获取<p>命中的规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>命中的规则名称</p>
 */
class UrlHitInfo extends AbstractModel
{
    /**
     * @var string <p>命中的URL</p>
     */
    public $Url;

    /**
     * @var string <p>命中的规则ID</p>
     */
    public $RuleId;

    /**
     * @var string <p>命中的规则名称</p>
     */
    public $RuleName;

    /**
     * @param string $Url <p>命中的URL</p>
     * @param string $RuleId <p>命中的规则ID</p>
     * @param string $RuleName <p>命中的规则名称</p>
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }
    }
}
