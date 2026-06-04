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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ToolBilling
 *
 * @method integer getBillingType() 获取计费类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 免费 |
| 1 | 限时免费 |
| 2 | 官方收费 |
| 3 | 官方收费(存量老用户限时免费) |
 * @method void setBillingType(integer $BillingType) 设置计费类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 免费 |
| 1 | 限时免费 |
| 2 | 官方收费 |
| 3 | 官方收费(存量老用户限时免费) |
 */
class ToolBilling extends AbstractModel
{
    /**
     * @var integer 计费类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 免费 |
| 1 | 限时免费 |
| 2 | 官方收费 |
| 3 | 官方收费(存量老用户限时免费) |
     */
    public $BillingType;

    /**
     * @param integer $BillingType 计费类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 免费 |
| 1 | 限时免费 |
| 2 | 官方收费 |
| 3 | 官方收费(存量老用户限时免费) |
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
        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }
    }
}
