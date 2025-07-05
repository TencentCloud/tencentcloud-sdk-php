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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeQuotas请求参数结构体
 *
 * @method string getAccessDomain() 获取接入域名
 * @method void setAccessDomain(string $AccessDomain) 设置接入域名
 */
class DescribeQuotasRequest extends AbstractModel
{
    /**
     * @var string 接入域名
     */
    public $AccessDomain;

    /**
     * @param string $AccessDomain 接入域名
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
        if (array_key_exists("AccessDomain",$param) and $param["AccessDomain"] !== null) {
            $this->AccessDomain = $param["AccessDomain"];
        }
    }
}
