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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChatCompletions返回参数结构体
 *
 * @method string getId() 获取<p>此次请求的id</p>
 * @method void setId(string $Id) 设置<p>此次请求的id</p>
 * @method array getChoices() 获取<p>回复内容</p>
 * @method void setChoices(array $Choices) 设置<p>回复内容</p>
 * @method TokenUsage getUsage() 获取<p>token使用量</p>
 * @method void setUsage(TokenUsage $Usage) 设置<p>token使用量</p>
 * @method array getOnlineSearchContent() 获取<p>联网搜索结果。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnlineSearchContent(array $OnlineSearchContent) 设置<p>联网搜索结果。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 */
class ChatCompletionsResponse extends AbstractModel
{
    /**
     * @var string <p>此次请求的id</p>
     */
    public $Id;

    /**
     * @var array <p>回复内容</p>
     */
    public $Choices;

    /**
     * @var TokenUsage <p>token使用量</p>
     */
    public $Usage;

    /**
     * @var array <p>联网搜索结果。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnlineSearchContent;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
     */
    public $RequestId;

    /**
     * @param string $Id <p>此次请求的id</p>
     * @param array $Choices <p>回复内容</p>
     * @param TokenUsage $Usage <p>token使用量</p>
     * @param array $OnlineSearchContent <p>联网搜索结果。</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new TokenUsage();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("OnlineSearchContent",$param) and $param["OnlineSearchContent"] !== null) {
            $this->OnlineSearchContent = [];
            foreach ($param["OnlineSearchContent"] as $key => $value){
                $obj = new WebContent();
                $obj->deserialize($value);
                array_push($this->OnlineSearchContent, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
