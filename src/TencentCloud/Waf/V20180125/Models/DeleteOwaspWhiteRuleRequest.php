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
 * DeleteOwaspWhiteRule请求参数结构体
 *
 * @method array getIds() 获取规则白名单ID列表
 * @method void setIds(array $Ids) 设置规则白名单ID列表
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 */
class DeleteOwaspWhiteRuleRequest extends AbstractModel
{
    /**
     * @var array 规则白名单ID列表
     */
    public $Ids;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @param array $Ids 规则白名单ID列表
     * @param string $Domain 域名
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
