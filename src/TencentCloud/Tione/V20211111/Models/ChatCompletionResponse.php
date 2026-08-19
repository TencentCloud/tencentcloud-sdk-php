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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChatCompletion返回参数结构体
 *
 * @method string getModel() 获取<p>对话的模型服务组ID</p>
 * @method void setModel(string $Model) 设置<p>对话的模型服务组ID</p>
 * @method array getChoices() 获取<p>本次问答的答案。</p>
 * @method void setChoices(array $Choices) 设置<p>本次问答的答案。</p>
 * @method string getId() 获取<p>会话Id。</p>
 * @method void setId(string $Id) 设置<p>会话Id。</p>
 * @method Usage getUsage() 获取<p>token统计</p>
 * @method void setUsage(Usage $Usage) 设置<p>token统计</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ChatCompletionResponse extends AbstractModel
{
    /**
     * @var string <p>对话的模型服务组ID</p>
     */
    public $Model;

    /**
     * @var array <p>本次问答的答案。</p>
     */
    public $Choices;

    /**
     * @var string <p>会话Id。</p>
     */
    public $Id;

    /**
     * @var Usage <p>token统计</p>
     */
    public $Usage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Model <p>对话的模型服务组ID</p>
     * @param array $Choices <p>本次问答的答案。</p>
     * @param string $Id <p>会话Id。</p>
     * @param Usage $Usage <p>token统计</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Choices",$param) and $param["Choices"] !== null) {
            $this->Choices = [];
            foreach ($param["Choices"] as $key => $value){
                $obj = new Choice();
                $obj->deserialize($value);
                array_push($this->Choices, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new Usage();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
