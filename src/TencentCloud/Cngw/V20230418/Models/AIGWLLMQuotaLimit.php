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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生网关模型LLM配额限制信息
 *
 * @method integer getRPMLimit() 获取<p>该模型服务每分钟请求数上限，0 表示该维度不限</p>
 * @method void setRPMLimit(integer $RPMLimit) 设置<p>该模型服务每分钟请求数上限，0 表示该维度不限</p>
 * @method integer getTPMLimit() 获取<p>该模型服务每分钟 Token 数上限，0 表示该维度不限</p>
 * @method void setTPMLimit(integer $TPMLimit) 设置<p>该模型服务每分钟 Token 数上限，0 表示该维度不限</p>
 */
class AIGWLLMQuotaLimit extends AbstractModel
{
    /**
     * @var integer <p>该模型服务每分钟请求数上限，0 表示该维度不限</p>
     */
    public $RPMLimit;

    /**
     * @var integer <p>该模型服务每分钟 Token 数上限，0 表示该维度不限</p>
     */
    public $TPMLimit;

    /**
     * @param integer $RPMLimit <p>该模型服务每分钟请求数上限，0 表示该维度不限</p>
     * @param integer $TPMLimit <p>该模型服务每分钟 Token 数上限，0 表示该维度不限</p>
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
        if (array_key_exists("RPMLimit",$param) and $param["RPMLimit"] !== null) {
            $this->RPMLimit = $param["RPMLimit"];
        }

        if (array_key_exists("TPMLimit",$param) and $param["TPMLimit"] !== null) {
            $this->TPMLimit = $param["TPMLimit"];
        }
    }
}
