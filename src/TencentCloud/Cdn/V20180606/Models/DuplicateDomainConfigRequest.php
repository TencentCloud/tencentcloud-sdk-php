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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DuplicateDomainConfig请求参数结构体
 *
 * @method string getDomain() 获取新增域名
 * @method void setDomain(string $Domain) 设置新增域名
 * @method string getReferenceDomain() 获取被拷贝配置的域名
 * @method void setReferenceDomain(string $ReferenceDomain) 设置被拷贝配置的域名
 */
class DuplicateDomainConfigRequest extends AbstractModel
{
    /**
     * @var string 新增域名
     */
    public $Domain;

    /**
     * @var string 被拷贝配置的域名
     */
    public $ReferenceDomain;

    /**
     * @param string $Domain 新增域名
     * @param string $ReferenceDomain 被拷贝配置的域名
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

        if (array_key_exists("ReferenceDomain",$param) and $param["ReferenceDomain"] !== null) {
            $this->ReferenceDomain = $param["ReferenceDomain"];
        }
    }
}
