<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGlobalDomainDns请求参数结构体
 *
 * @method string getDomainId() 获取域名ID
 * @method void setDomainId(string $DomainId) 设置域名ID
 * @method array getProxyIdList() 获取通道ID列表
 * @method void setProxyIdList(array $ProxyIdList) 设置通道ID列表
 * @method array getNationCountryInnerCodes() 获取国家ID列表
 * @method void setNationCountryInnerCodes(array $NationCountryInnerCodes) 设置国家ID列表
 */
class CreateGlobalDomainDnsRequest extends AbstractModel
{
    /**
     * @var string 域名ID
     */
    public $DomainId;

    /**
     * @var array 通道ID列表
     */
    public $ProxyIdList;

    /**
     * @var array 国家ID列表
     */
    public $NationCountryInnerCodes;

    /**
     * @param string $DomainId 域名ID
     * @param array $ProxyIdList 通道ID列表
     * @param array $NationCountryInnerCodes 国家ID列表
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("ProxyIdList",$param) and $param["ProxyIdList"] !== null) {
            $this->ProxyIdList = $param["ProxyIdList"];
        }

        if (array_key_exists("NationCountryInnerCodes",$param) and $param["NationCountryInnerCodes"] !== null) {
            $this->NationCountryInnerCodes = $param["NationCountryInnerCodes"];
        }
    }
}
