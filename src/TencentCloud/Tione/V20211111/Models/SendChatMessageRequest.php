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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendChatMessage请求参数结构体
 *
 * @method string getSessionId() 获取会话id，标识一组对话的唯一id，id变更则重置会话
 * @method void setSessionId(string $SessionId) 设置会话id，标识一组对话的唯一id，id变更则重置会话
 * @method string getQuestion() 获取问题描述
 * @method void setQuestion(string $Question) 设置问题描述
 * @method string getModelVersion() 获取会话模型版本。
多行业客服大模型：填写demo_big_model_version_id。
默认为demo_big_model_version_id，即多行业客服大模型。
 * @method void setModelVersion(string $ModelVersion) 设置会话模型版本。
多行业客服大模型：填写demo_big_model_version_id。
默认为demo_big_model_version_id，即多行业客服大模型。
 * @method string getMode() 获取使用模式(仅多场景客服大模型支持)。
通用问答：填写General。
搜索增强问答：填写WithSearchPlugin。
默认为General，即通用问答。
 * @method void setMode(string $Mode) 设置使用模式(仅多场景客服大模型支持)。
通用问答：填写General。
搜索增强问答：填写WithSearchPlugin。
默认为General，即通用问答。
 * @method string getSearchSource() 获取搜索来源。仅当Mode为WithSearchPlugin时生效。
预置文稿库：填写Preset。自定义：填写Custom。
 * @method void setSearchSource(string $SearchSource) 设置搜索来源。仅当Mode为WithSearchPlugin时生效。
预置文稿库：填写Preset。自定义：填写Custom。
 */
class SendChatMessageRequest extends AbstractModel
{
    /**
     * @var string 会话id，标识一组对话的唯一id，id变更则重置会话
     */
    public $SessionId;

    /**
     * @var string 问题描述
     */
    public $Question;

    /**
     * @var string 会话模型版本。
多行业客服大模型：填写demo_big_model_version_id。
默认为demo_big_model_version_id，即多行业客服大模型。
     */
    public $ModelVersion;

    /**
     * @var string 使用模式(仅多场景客服大模型支持)。
通用问答：填写General。
搜索增强问答：填写WithSearchPlugin。
默认为General，即通用问答。
     */
    public $Mode;

    /**
     * @var string 搜索来源。仅当Mode为WithSearchPlugin时生效。
预置文稿库：填写Preset。自定义：填写Custom。
     */
    public $SearchSource;

    /**
     * @param string $SessionId 会话id，标识一组对话的唯一id，id变更则重置会话
     * @param string $Question 问题描述
     * @param string $ModelVersion 会话模型版本。
多行业客服大模型：填写demo_big_model_version_id。
默认为demo_big_model_version_id，即多行业客服大模型。
     * @param string $Mode 使用模式(仅多场景客服大模型支持)。
通用问答：填写General。
搜索增强问答：填写WithSearchPlugin。
默认为General，即通用问答。
     * @param string $SearchSource 搜索来源。仅当Mode为WithSearchPlugin时生效。
预置文稿库：填写Preset。自定义：填写Custom。
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("SearchSource",$param) and $param["SearchSource"] !== null) {
            $this->SearchSource = $param["SearchSource"];
        }
    }
}
