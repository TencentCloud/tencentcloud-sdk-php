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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveTranscodeRules请求参数结构体
 *
 * @method array getTemplateIds() 获取<p>要筛选的模板ID数组。</p>
 * @method void setTemplateIds(array $TemplateIds) 设置<p>要筛选的模板ID数组。</p>
 * @method array getDomainNames() 获取<p>要筛选的域名数组。</p>
 * @method void setDomainNames(array $DomainNames) 设置<p>要筛选的域名数组。</p>
 */
class DescribeLiveTranscodeRulesRequest extends AbstractModel
{
    /**
     * @var array <p>要筛选的模板ID数组。</p>
     */
    public $TemplateIds;

    /**
     * @var array <p>要筛选的域名数组。</p>
     */
    public $DomainNames;

    /**
     * @param array $TemplateIds <p>要筛选的模板ID数组。</p>
     * @param array $DomainNames <p>要筛选的域名数组。</p>
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
        if (array_key_exists("TemplateIds",$param) and $param["TemplateIds"] !== null) {
            $this->TemplateIds = $param["TemplateIds"];
        }

        if (array_key_exists("DomainNames",$param) and $param["DomainNames"] !== null) {
            $this->DomainNames = $param["DomainNames"];
        }
    }
}
