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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 重排数据, 计算2段内容的关联性
 *
 * @method string getPromptA() 获取第一段内容
 * @method void setPromptA(string $PromptA) 设置第一段内容
 * @method string getPromptB() 获取第二段内容
 * @method void setPromptB(string $PromptB) 设置第二段内容
 */
class ReRankDataObject extends AbstractModel
{
    /**
     * @var string 第一段内容
     */
    public $PromptA;

    /**
     * @var string 第二段内容
     */
    public $PromptB;

    /**
     * @param string $PromptA 第一段内容
     * @param string $PromptB 第二段内容
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
        if (array_key_exists("PromptA",$param) and $param["PromptA"] !== null) {
            $this->PromptA = $param["PromptA"];
        }

        if (array_key_exists("PromptB",$param) and $param["PromptB"] !== null) {
            $this->PromptB = $param["PromptB"];
        }
    }
}
