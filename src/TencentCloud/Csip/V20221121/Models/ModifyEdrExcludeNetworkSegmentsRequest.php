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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEdrExcludeNetworkSegments请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getNetworkSegments() 获取<p>例外网段列表，支持IP/IP段/CIDR格式，最多可添加100条</p>
 * @method void setNetworkSegments(array $NetworkSegments) 设置<p>例外网段列表，支持IP/IP段/CIDR格式，最多可添加100条</p>
 */
class ModifyEdrExcludeNetworkSegmentsRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>例外网段列表，支持IP/IP段/CIDR格式，最多可添加100条</p>
     */
    public $NetworkSegments;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $NetworkSegments <p>例外网段列表，支持IP/IP段/CIDR格式，最多可添加100条</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("NetworkSegments",$param) and $param["NetworkSegments"] !== null) {
            $this->NetworkSegments = $param["NetworkSegments"];
        }
    }
}
