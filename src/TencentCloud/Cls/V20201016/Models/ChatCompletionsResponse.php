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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChatCompletions返回参数结构体
 *
 * @method integer getCreated() 获取<p>Unix 时间戳，单位为秒。</p>
 * @method void setCreated(integer $Created) 设置<p>Unix 时间戳，单位为秒。</p>
 * @method ChatUsage getUsage() 获取<p>Token 统计信息。</p>
 * @method void setUsage(ChatUsage $Usage) 设置<p>Token 统计信息。</p>
 * @method string getId() 获取<p>本次请求的 Id。</p>
 * @method void setId(string $Id) 设置<p>本次请求的 Id。</p>
 * @method array getChoices() 获取<p>回复内容。</p>
 * @method void setChoices(array $Choices) 设置<p>回复内容。</p>
 * @method string getModel() 获取<p>功能名称</p><p>枚举值：</p><ul><li>text2sql： 智能生成检索分析语句</li><li>text2sql-reasoning： 智能生成检索分析语句-深度思考</li></ul>
 * @method void setModel(string $Model) 设置<p>功能名称</p><p>枚举值：</p><ul><li>text2sql： 智能生成检索分析语句</li><li>text2sql-reasoning： 智能生成检索分析语句-深度思考</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 */
class ChatCompletionsResponse extends AbstractModel
{
    /**
     * @var integer <p>Unix 时间戳，单位为秒。</p>
     */
    public $Created;

    /**
     * @var ChatUsage <p>Token 统计信息。</p>
     */
    public $Usage;

    /**
     * @var string <p>本次请求的 Id。</p>
     */
    public $Id;

    /**
     * @var array <p>回复内容。</p>
     */
    public $Choices;

    /**
     * @var string <p>功能名称</p><p>枚举值：</p><ul><li>text2sql： 智能生成检索分析语句</li><li>text2sql-reasoning： 智能生成检索分析语句-深度思考</li></ul>
     */
    public $Model;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
     */
    public $RequestId;

    /**
     * @param integer $Created <p>Unix 时间戳，单位为秒。</p>
     * @param ChatUsage $Usage <p>Token 统计信息。</p>
     * @param string $Id <p>本次请求的 Id。</p>
     * @param array $Choices <p>回复内容。</p>
     * @param string $Model <p>功能名称</p><p>枚举值：</p><ul><li>text2sql： 智能生成检索分析语句</li><li>text2sql-reasoning： 智能生成检索分析语句-深度思考</li></ul>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
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
        if (array_key_exists("Created",$param) and $param["Created"] !== null) {
            $this->Created = $param["Created"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new ChatUsage();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Choices",$param) and $param["Choices"] !== null) {
            $this->Choices = [];
            foreach ($param["Choices"] as $key => $value){
                $obj = new Choice();
                $obj->deserialize($value);
                array_push($this->Choices, $obj);
            }
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
