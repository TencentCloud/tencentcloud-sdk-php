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
 * DescribeUserCallRecord请求参数结构体
 *
 * @method string getSubUin() 获取账号uin
 * @method void setSubUin(string $SubUin) 设置账号uin
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method Filter getFilter() 获取过滤器
 * @method void setFilter(Filter $Filter) 设置过滤器
 */
class DescribeUserCallRecordRequest extends AbstractModel
{
    /**
     * @var string 账号uin
     */
    public $SubUin;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var Filter 过滤器
     */
    public $Filter;

    /**
     * @param string $SubUin 账号uin
     * @param array $MemberId 集团账号的成员id
     * @param Filter $Filter 过滤器
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
        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
