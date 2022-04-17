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
 * DeleteDomainWhiteRules请求参数结构体
 *
 * @method string getDomain() 获取需要删除的规则域名
 * @method void setDomain(string $Domain) 设置需要删除的规则域名
 * @method array getIds() 获取需要删除的白名单规则
 * @method void setIds(array $Ids) 设置需要删除的白名单规则
 */
class DeleteDomainWhiteRulesRequest extends AbstractModel
{
    /**
     * @var string 需要删除的规则域名
     */
    public $Domain;

    /**
     * @var array 需要删除的白名单规则
     */
    public $Ids;

    /**
     * @param string $Domain 需要删除的规则域名
     * @param array $Ids 需要删除的白名单规则
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

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }
    }
}
