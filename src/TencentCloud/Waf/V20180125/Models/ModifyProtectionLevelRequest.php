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
 * ModifyProtectionLevel请求参数结构体
 *
 * @method string getDomain() 获取客户域名
 * @method void setDomain(string $Domain) 设置客户域名
 * @method integer getLevel() 获取防护等级,100,200,300
 * @method void setLevel(integer $Level) 设置防护等级,100,200,300
 */
class ModifyProtectionLevelRequest extends AbstractModel
{
    /**
     * @var string 客户域名
     */
    public $Domain;

    /**
     * @var integer 防护等级,100,200,300
     */
    public $Level;

    /**
     * @param string $Domain 客户域名
     * @param integer $Level 防护等级,100,200,300
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
