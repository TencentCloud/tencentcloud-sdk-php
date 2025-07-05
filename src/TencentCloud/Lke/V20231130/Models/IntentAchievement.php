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
 * 意图达成方式
 *
 * @method string getName() 获取意图达成方式，qa:问答回复、doc：文档回复、workflow：工作流回复，llm：大模型回复
 * @method void setName(string $Name) 设置意图达成方式，qa:问答回复、doc：文档回复、workflow：工作流回复，llm：大模型回复
 * @method string getDesc() 获取意图达成方式描述
 * @method void setDesc(string $Desc) 设置意图达成方式描述
 */
class IntentAchievement extends AbstractModel
{
    /**
     * @var string 意图达成方式，qa:问答回复、doc：文档回复、workflow：工作流回复，llm：大模型回复
     */
    public $Name;

    /**
     * @var string 意图达成方式描述
     */
    public $Desc;

    /**
     * @param string $Name 意图达成方式，qa:问答回复、doc：文档回复、workflow：工作流回复，llm：大模型回复
     * @param string $Desc 意图达成方式描述
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

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
