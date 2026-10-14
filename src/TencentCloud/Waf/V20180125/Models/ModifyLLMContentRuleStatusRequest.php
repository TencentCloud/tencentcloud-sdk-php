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
 * ModifyLLMContentRuleStatus请求参数结构体
 *
 * @method integer getStatus() 获取<p>状态</p>
 * @method void setStatus(integer $Status) 设置<p>状态</p>
 * @method array getIds() 获取<p>Id列表</p>
 * @method void setIds(array $Ids) 设置<p>Id列表</p>
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 */
class ModifyLLMContentRuleStatusRequest extends AbstractModel
{
    /**
     * @var integer <p>状态</p>
     */
    public $Status;

    /**
     * @var array <p>Id列表</p>
     */
    public $Ids;

    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @param integer $Status <p>状态</p>
     * @param array $Ids <p>Id列表</p>
     * @param string $Domain <p>域名</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
