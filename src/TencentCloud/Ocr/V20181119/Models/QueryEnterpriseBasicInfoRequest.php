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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryEnterpriseBasicInfo请求参数结构体
 *
 * @method string getCreditCode() 获取<p>统一社会信用代码。CreditCode、EntName 必须提供一个，如果都提供，只使用 CreditCode。</p>
 * @method void setCreditCode(string $CreditCode) 设置<p>统一社会信用代码。CreditCode、EntName 必须提供一个，如果都提供，只使用 CreditCode。</p>
 * @method string getEntName() 获取<p>企业名称。CreditCode、EntName 必须提供一个，如果都提供，只使用 CreditCode。</p>
 * @method void setEntName(string $EntName) 设置<p>企业名称。CreditCode、EntName 必须提供一个，如果都提供，只使用 CreditCode。</p>
 */
class QueryEnterpriseBasicInfoRequest extends AbstractModel
{
    /**
     * @var string <p>统一社会信用代码。CreditCode、EntName 必须提供一个，如果都提供，只使用 CreditCode。</p>
     */
    public $CreditCode;

    /**
     * @var string <p>企业名称。CreditCode、EntName 必须提供一个，如果都提供，只使用 CreditCode。</p>
     */
    public $EntName;

    /**
     * @param string $CreditCode <p>统一社会信用代码。CreditCode、EntName 必须提供一个，如果都提供，只使用 CreditCode。</p>
     * @param string $EntName <p>企业名称。CreditCode、EntName 必须提供一个，如果都提供，只使用 CreditCode。</p>
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
        if (array_key_exists("CreditCode",$param) and $param["CreditCode"] !== null) {
            $this->CreditCode = $param["CreditCode"];
        }

        if (array_key_exists("EntName",$param) and $param["EntName"] !== null) {
            $this->EntName = $param["EntName"];
        }
    }
}
