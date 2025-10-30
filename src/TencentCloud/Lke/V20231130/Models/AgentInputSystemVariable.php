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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 系统参数
 *
 * @method string getName() 获取系统参数名
 * @method void setName(string $Name) 设置系统参数名
 * @method integer getDialogHistoryLimit() 获取对话历史轮数的配置；如果Input是系统变量中的“对话历史”时才使用；
 * @method void setDialogHistoryLimit(integer $DialogHistoryLimit) 设置对话历史轮数的配置；如果Input是系统变量中的“对话历史”时才使用；
 */
class AgentInputSystemVariable extends AbstractModel
{
    /**
     * @var string 系统参数名
     */
    public $Name;

    /**
     * @var integer 对话历史轮数的配置；如果Input是系统变量中的“对话历史”时才使用；
     */
    public $DialogHistoryLimit;

    /**
     * @param string $Name 系统参数名
     * @param integer $DialogHistoryLimit 对话历史轮数的配置；如果Input是系统变量中的“对话历史”时才使用；
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DialogHistoryLimit",$param) and $param["DialogHistoryLimit"] !== null) {
            $this->DialogHistoryLimit = $param["DialogHistoryLimit"];
        }
    }
}
