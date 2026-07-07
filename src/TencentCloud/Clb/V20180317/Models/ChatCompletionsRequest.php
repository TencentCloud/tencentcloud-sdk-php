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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChatCompletions请求参数结构体
 *
 * @method string getApiKey() 获取<p>virtual key，用于向代理网关鉴权</p>
 * @method void setApiKey(string $ApiKey) 设置<p>virtual key，用于向代理网关鉴权</p>
 * @method array getAttachments() 获取<p>多模态附件列表</p>
 * @method void setAttachments(array $Attachments) 设置<p>多模态附件列表</p>
 * @method string getChatContent() 获取<p>聊天内容</p>
 * @method void setChatContent(string $ChatContent) 设置<p>聊天内容</p>
 * @method string getModel() 获取<p>模型名称，配置的模型标识</p><p>示例：gpt-4o、deepseek-chat</p>
 * @method void setModel(string $Model) 设置<p>模型名称，配置的模型标识</p><p>示例：gpt-4o、deepseek-chat</p>
 * @method string getModelRouterId() 获取<p>模型路由实例ID</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例ID</p>
 * @method string getRequestPath() 获取<p>请求路径</p><p>默认值：/v1/chat/completions</p>
 * @method void setRequestPath(string $RequestPath) 设置<p>请求路径</p><p>默认值：/v1/chat/completions</p>
 */
class ChatCompletionsRequest extends AbstractModel
{
    /**
     * @var string <p>virtual key，用于向代理网关鉴权</p>
     */
    public $ApiKey;

    /**
     * @var array <p>多模态附件列表</p>
     */
    public $Attachments;

    /**
     * @var string <p>聊天内容</p>
     */
    public $ChatContent;

    /**
     * @var string <p>模型名称，配置的模型标识</p><p>示例：gpt-4o、deepseek-chat</p>
     */
    public $Model;

    /**
     * @var string <p>模型路由实例ID</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>请求路径</p><p>默认值：/v1/chat/completions</p>
     */
    public $RequestPath;

    /**
     * @param string $ApiKey <p>virtual key，用于向代理网关鉴权</p>
     * @param array $Attachments <p>多模态附件列表</p>
     * @param string $ChatContent <p>聊天内容</p>
     * @param string $Model <p>模型名称，配置的模型标识</p><p>示例：gpt-4o、deepseek-chat</p>
     * @param string $ModelRouterId <p>模型路由实例ID</p>
     * @param string $RequestPath <p>请求路径</p><p>默认值：/v1/chat/completions</p>
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
        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }

        if (array_key_exists("Attachments",$param) and $param["Attachments"] !== null) {
            $this->Attachments = [];
            foreach ($param["Attachments"] as $key => $value){
                $obj = new MultiModalityAttachments();
                $obj->deserialize($value);
                array_push($this->Attachments, $obj);
            }
        }

        if (array_key_exists("ChatContent",$param) and $param["ChatContent"] !== null) {
            $this->ChatContent = $param["ChatContent"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("RequestPath",$param) and $param["RequestPath"] !== null) {
            $this->RequestPath = $param["RequestPath"];
        }
    }
}
