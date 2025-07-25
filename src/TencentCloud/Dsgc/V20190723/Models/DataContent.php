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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扫描规则内容
 *
 * @method string getRuleContent() 获取规则内容，可以是正则规则，关键词，
忽略词扥
 * @method void setRuleContent(string $RuleContent) 设置规则内容，可以是正则规则，关键词，
忽略词扥
 * @method boolean getIsIgnoreCase() 获取是否区分大小写
false: 不区分大小写
true:区分大小写
 * @method void setIsIgnoreCase(boolean $IsIgnoreCase) 设置是否区分大小写
false: 不区分大小写
true:区分大小写
 */
class DataContent extends AbstractModel
{
    /**
     * @var string 规则内容，可以是正则规则，关键词，
忽略词扥
     */
    public $RuleContent;

    /**
     * @var boolean 是否区分大小写
false: 不区分大小写
true:区分大小写
     */
    public $IsIgnoreCase;

    /**
     * @param string $RuleContent 规则内容，可以是正则规则，关键词，
忽略词扥
     * @param boolean $IsIgnoreCase 是否区分大小写
false: 不区分大小写
true:区分大小写
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
        if (array_key_exists("RuleContent",$param) and $param["RuleContent"] !== null) {
            $this->RuleContent = $param["RuleContent"];
        }

        if (array_key_exists("IsIgnoreCase",$param) and $param["IsIgnoreCase"] !== null) {
            $this->IsIgnoreCase = $param["IsIgnoreCase"];
        }
    }
}
