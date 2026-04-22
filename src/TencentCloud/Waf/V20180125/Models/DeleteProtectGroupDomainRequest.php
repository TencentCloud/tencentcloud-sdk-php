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
 * DeleteProtectGroupDomain请求参数结构体
 *
 * @method integer getGroupId() 获取防护对象组ID
 * @method void setGroupId(integer $GroupId) 设置防护对象组ID
 * @method string getDomain() 获取解除绑定的域名
 * @method void setDomain(string $Domain) 设置解除绑定的域名
 */
class DeleteProtectGroupDomainRequest extends AbstractModel
{
    /**
     * @var integer 防护对象组ID
     */
    public $GroupId;

    /**
     * @var string 解除绑定的域名
     */
    public $Domain;

    /**
     * @param integer $GroupId 防护对象组ID
     * @param string $Domain 解除绑定的域名
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
