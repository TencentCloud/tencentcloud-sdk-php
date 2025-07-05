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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMaliciousRequestWhiteList请求参数结构体
 *
 * @method integer getId() 获取白名单id
 * @method void setId(integer $Id) 设置白名单id
 * @method string getDomain() 获取白名单域名
 * @method void setDomain(string $Domain) 设置白名单域名
 * @method string getMark() 获取备注
 * @method void setMark(string $Mark) 设置备注
 */
class ModifyMaliciousRequestWhiteListRequest extends AbstractModel
{
    /**
     * @var integer 白名单id
     */
    public $Id;

    /**
     * @var string 白名单域名
     */
    public $Domain;

    /**
     * @var string 备注
     */
    public $Mark;

    /**
     * @param integer $Id 白名单id
     * @param string $Domain 白名单域名
     * @param string $Mark 备注
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Mark",$param) and $param["Mark"] !== null) {
            $this->Mark = $param["Mark"];
        }
    }
}
