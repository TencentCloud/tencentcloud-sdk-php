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
 * 解析线路
 *
 * @method integer getDnsLineId() 获取解析请求来源线路id
 * @method void setDnsLineId(integer $DnsLineId) 设置解析请求来源线路id
 * @method string getName() 获取解析请求来源线路名
 * @method void setName(string $Name) 设置解析请求来源线路名
 */
class Source extends AbstractModel
{
    /**
     * @var integer 解析请求来源线路id
     */
    public $DnsLineId;

    /**
     * @var string 解析请求来源线路名
     */
    public $Name;

    /**
     * @param integer $DnsLineId 解析请求来源线路id
     * @param string $Name 解析请求来源线路名
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
        if (array_key_exists("DnsLineId",$param) and $param["DnsLineId"] !== null) {
            $this->DnsLineId = $param["DnsLineId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
