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
 * SaveWorkflowToolNodeOutput请求参数结构体
 *
 * @method string getCallbackToken() 获取<p>回调Token</p><p>Request Header X-ADP-Callback-Token</p>
 * @method void setCallbackToken(string $CallbackToken) 设置<p>回调Token</p><p>Request Header X-ADP-Callback-Token</p>
 * @method string getResult() 获取<p>回调结果</p>
 * @method void setResult(string $Result) 设置<p>回调结果</p>
 */
class SaveWorkflowToolNodeOutputRequest extends AbstractModel
{
    /**
     * @var string <p>回调Token</p><p>Request Header X-ADP-Callback-Token</p>
     */
    public $CallbackToken;

    /**
     * @var string <p>回调结果</p>
     */
    public $Result;

    /**
     * @param string $CallbackToken <p>回调Token</p><p>Request Header X-ADP-Callback-Token</p>
     * @param string $Result <p>回调结果</p>
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
        if (array_key_exists("CallbackToken",$param) and $param["CallbackToken"] !== null) {
            $this->CallbackToken = $param["CallbackToken"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
