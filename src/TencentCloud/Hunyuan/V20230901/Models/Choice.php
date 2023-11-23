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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回的回复, 支持多个
 *
 * @method string getFinishReason() 获取流式结束标志位，为 stop 则表示尾包。
 * @method void setFinishReason(string $FinishReason) 设置流式结束标志位，为 stop 则表示尾包。
 * @method Delta getDelta() 获取返回值。
 * @method void setDelta(Delta $Delta) 设置返回值。
 */
class Choice extends AbstractModel
{
    /**
     * @var string 流式结束标志位，为 stop 则表示尾包。
     */
    public $FinishReason;

    /**
     * @var Delta 返回值。
     */
    public $Delta;

    /**
     * @param string $FinishReason 流式结束标志位，为 stop 则表示尾包。
     * @param Delta $Delta 返回值。
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
        if (array_key_exists("FinishReason",$param) and $param["FinishReason"] !== null) {
            $this->FinishReason = $param["FinishReason"];
        }

        if (array_key_exists("Delta",$param) and $param["Delta"] !== null) {
            $this->Delta = new Delta();
            $this->Delta->deserialize($param["Delta"]);
        }
    }
}
