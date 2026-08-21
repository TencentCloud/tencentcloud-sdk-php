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
 * ModifyWebhookPolicyStatus请求参数结构体
 *
 * @method integer getID() 获取策略 ID
 * @method void setID(integer $ID) 设置策略 ID
 * @method string getStatus() 获取目标状态
枚举值：
ON：启用
OFF：禁用
 * @method void setStatus(string $Status) 设置目标状态
枚举值：
ON：启用
OFF：禁用
 */
class ModifyWebhookPolicyStatusRequest extends AbstractModel
{
    /**
     * @var integer 策略 ID
     */
    public $ID;

    /**
     * @var string 目标状态
枚举值：
ON：启用
OFF：禁用
     */
    public $Status;

    /**
     * @param integer $ID 策略 ID
     * @param string $Status 目标状态
枚举值：
ON：启用
OFF：禁用
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
