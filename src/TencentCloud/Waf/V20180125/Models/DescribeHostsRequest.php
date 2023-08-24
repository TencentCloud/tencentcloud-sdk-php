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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHosts请求参数结构体
 *
 * @method string getDomain() 获取防护域名，如果是要查询某一具体的防护域名则传入此参数，要求是准确的域名，此参数不支持模糊搜索
 * @method void setDomain(string $Domain) 设置防护域名，如果是要查询某一具体的防护域名则传入此参数，要求是准确的域名，此参数不支持模糊搜索
 * @method string getDomainId() 获取防护域名ID，如果是要查询某一具体的防护域名则传入此参数，要求是准确的域名ID，此参数不支持模糊搜索
 * @method void setDomainId(string $DomainId) 设置防护域名ID，如果是要查询某一具体的防护域名则传入此参数，要求是准确的域名ID，此参数不支持模糊搜索
 * @method string getSearch() 获取搜索条件，根据此参数对域名做模糊搜索
 * @method void setSearch(string $Search) 设置搜索条件，根据此参数对域名做模糊搜索
 * @method SearchItem getItem() 获取复杂的搜索条件
 * @method void setItem(SearchItem $Item) 设置复杂的搜索条件
 * @method string getInstanceID() 获取实例id
 * @method void setInstanceID(string $InstanceID) 设置实例id
 */
class DescribeHostsRequest extends AbstractModel
{
    /**
     * @var string 防护域名，如果是要查询某一具体的防护域名则传入此参数，要求是准确的域名，此参数不支持模糊搜索
     */
    public $Domain;

    /**
     * @var string 防护域名ID，如果是要查询某一具体的防护域名则传入此参数，要求是准确的域名ID，此参数不支持模糊搜索
     */
    public $DomainId;

    /**
     * @var string 搜索条件，根据此参数对域名做模糊搜索
     */
    public $Search;

    /**
     * @var SearchItem 复杂的搜索条件
     */
    public $Item;

    /**
     * @var string 实例id
     */
    public $InstanceID;

    /**
     * @param string $Domain 防护域名，如果是要查询某一具体的防护域名则传入此参数，要求是准确的域名，此参数不支持模糊搜索
     * @param string $DomainId 防护域名ID，如果是要查询某一具体的防护域名则传入此参数，要求是准确的域名ID，此参数不支持模糊搜索
     * @param string $Search 搜索条件，根据此参数对域名做模糊搜索
     * @param SearchItem $Item 复杂的搜索条件
     * @param string $InstanceID 实例id
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

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Search",$param) and $param["Search"] !== null) {
            $this->Search = $param["Search"];
        }

        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = new SearchItem();
            $this->Item->deserialize($param["Item"]);
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }
    }
}
