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
 * 单次对话耗时信息
 *
 * @method string getElapsed() 获取<p>单次对话总耗时，单位毫秒</p>
 * @method void setElapsed(string $Elapsed) 设置<p>单次对话总耗时，单位毫秒</p>
 * @method string getFirstTokenCost() 获取<p>首 token 耗时，单位毫秒</p>
 * @method void setFirstTokenCost(string $FirstTokenCost) 设置<p>首 token 耗时，单位毫秒</p>
 * @method string getTotalCost() 获取<p>模型推理总耗时，单位毫秒</p>
 * @method void setTotalCost(string $TotalCost) 设置<p>模型推理总耗时，单位毫秒</p>
 */
class ConversationRecordTimeUsage extends AbstractModel
{
    /**
     * @var string <p>单次对话总耗时，单位毫秒</p>
     */
    public $Elapsed;

    /**
     * @var string <p>首 token 耗时，单位毫秒</p>
     */
    public $FirstTokenCost;

    /**
     * @var string <p>模型推理总耗时，单位毫秒</p>
     */
    public $TotalCost;

    /**
     * @param string $Elapsed <p>单次对话总耗时，单位毫秒</p>
     * @param string $FirstTokenCost <p>首 token 耗时，单位毫秒</p>
     * @param string $TotalCost <p>模型推理总耗时，单位毫秒</p>
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
        if (array_key_exists("Elapsed",$param) and $param["Elapsed"] !== null) {
            $this->Elapsed = $param["Elapsed"];
        }

        if (array_key_exists("FirstTokenCost",$param) and $param["FirstTokenCost"] !== null) {
            $this->FirstTokenCost = $param["FirstTokenCost"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }
    }
}
