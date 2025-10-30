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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLineGroup请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getLineGroupId() 获取自定义线路分组ID
 * @method void setLineGroupId(integer $LineGroupId) 设置自定义线路分组ID
 * @method integer getDomainId() 获取域名ID，如果传了DomainId，系统将会忽略Domain参数，优先使用DomainId
 * @method void setDomainId(integer $DomainId) 设置域名ID，如果传了DomainId，系统将会忽略Domain参数，优先使用DomainId
 */
class DeleteLineGroupRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 自定义线路分组ID
     */
    public $LineGroupId;

    /**
     * @var integer 域名ID，如果传了DomainId，系统将会忽略Domain参数，优先使用DomainId
     */
    public $DomainId;

    /**
     * @param string $Domain 域名
     * @param integer $LineGroupId 自定义线路分组ID
     * @param integer $DomainId 域名ID，如果传了DomainId，系统将会忽略Domain参数，优先使用DomainId
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

        if (array_key_exists("LineGroupId",$param) and $param["LineGroupId"] !== null) {
            $this->LineGroupId = $param["LineGroupId"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
