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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteWebhookPolicies请求参数结构体
 *
 * @method array getIDList() 获取策略 ID 列表
入参限制：单次最多 100 个
 * @method void setIDList(array $IDList) 设置策略 ID 列表
入参限制：单次最多 100 个
 */
class DeleteWebhookPoliciesRequest extends AbstractModel
{
    /**
     * @var array 策略 ID 列表
入参限制：单次最多 100 个
     */
    public $IDList;

    /**
     * @param array $IDList 策略 ID 列表
入参限制：单次最多 100 个
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
        if (array_key_exists("IDList",$param) and $param["IDList"] !== null) {
            $this->IDList = $param["IDList"];
        }
    }
}
