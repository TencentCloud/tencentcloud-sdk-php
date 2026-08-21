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
 * 接收机器人精简信息
 *
 * @method integer getID() 获取机器人 ID
 * @method void setID(integer $ID) 设置机器人 ID
 * @method string getName() 获取机器人名称
 * @method void setName(string $Name) 设置机器人名称
 * @method string getType() 获取机器人类型
枚举值：
WEBHOOK：webhook 类型
SCF：云函数类型
 * @method void setType(string $Type) 设置机器人类型
枚举值：
WEBHOOK：webhook 类型
SCF：云函数类型
 */
class WebhookReceiverBrief extends AbstractModel
{
    /**
     * @var integer 机器人 ID
     */
    public $ID;

    /**
     * @var string 机器人名称
     */
    public $Name;

    /**
     * @var string 机器人类型
枚举值：
WEBHOOK：webhook 类型
SCF：云函数类型
     */
    public $Type;

    /**
     * @param integer $ID 机器人 ID
     * @param string $Name 机器人名称
     * @param string $Type 机器人类型
枚举值：
WEBHOOK：webhook 类型
SCF：云函数类型
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
