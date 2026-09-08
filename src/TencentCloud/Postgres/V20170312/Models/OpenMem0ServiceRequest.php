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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenMem0Service请求参数结构体
 *
 * @method string getDBInstanceId() 获取<p>实例ID</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例ID</p>
 * @method string getAgenticBaseId() 获取<p>AgenticBaseID，开启Mem0服务前请先开通AgenticBase套餐</p>
 * @method void setAgenticBaseId(string $AgenticBaseId) 设置<p>AgenticBaseID，开启Mem0服务前请先开通AgenticBase套餐</p>
 * @method string getLLMModel() 获取<p>Mem0服务使用的LLM模型</p><p>枚举值：</p><ul><li>auto： 自动选择合适的模型</li><li>deepseek-v4-flash： deepseek-v4-flash</li><li>deepseek-v4-pro： deepseek-v4-pro</li><li>glm-5： glm-5</li><li>glm-5-turbo： glm-5-turbo</li><li>glm-5.1： glm-5.1</li><li>kimi-k2.5： kimi-k2.5</li><li>kimi-k2.6： kimi-k2.6</li><li>minimax-m2.5： minimax-m2.5</li><li>minimax-m2.7： minimax-m2.7</li></ul>
 * @method void setLLMModel(string $LLMModel) 设置<p>Mem0服务使用的LLM模型</p><p>枚举值：</p><ul><li>auto： 自动选择合适的模型</li><li>deepseek-v4-flash： deepseek-v4-flash</li><li>deepseek-v4-pro： deepseek-v4-pro</li><li>glm-5： glm-5</li><li>glm-5-turbo： glm-5-turbo</li><li>glm-5.1： glm-5.1</li><li>kimi-k2.5： kimi-k2.5</li><li>kimi-k2.6： kimi-k2.6</li><li>minimax-m2.5： minimax-m2.5</li><li>minimax-m2.7： minimax-m2.7</li></ul>
 * @method string getEmbeddingApiKey() 获取<p>请前往腾讯云Tokenhub开通服务将ApiKey填入</p>
 * @method void setEmbeddingApiKey(string $EmbeddingApiKey) 设置<p>请前往腾讯云Tokenhub开通服务将ApiKey填入</p>
 */
class OpenMem0ServiceRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>AgenticBaseID，开启Mem0服务前请先开通AgenticBase套餐</p>
     */
    public $AgenticBaseId;

    /**
     * @var string <p>Mem0服务使用的LLM模型</p><p>枚举值：</p><ul><li>auto： 自动选择合适的模型</li><li>deepseek-v4-flash： deepseek-v4-flash</li><li>deepseek-v4-pro： deepseek-v4-pro</li><li>glm-5： glm-5</li><li>glm-5-turbo： glm-5-turbo</li><li>glm-5.1： glm-5.1</li><li>kimi-k2.5： kimi-k2.5</li><li>kimi-k2.6： kimi-k2.6</li><li>minimax-m2.5： minimax-m2.5</li><li>minimax-m2.7： minimax-m2.7</li></ul>
     */
    public $LLMModel;

    /**
     * @var string <p>请前往腾讯云Tokenhub开通服务将ApiKey填入</p>
     */
    public $EmbeddingApiKey;

    /**
     * @param string $DBInstanceId <p>实例ID</p>
     * @param string $AgenticBaseId <p>AgenticBaseID，开启Mem0服务前请先开通AgenticBase套餐</p>
     * @param string $LLMModel <p>Mem0服务使用的LLM模型</p><p>枚举值：</p><ul><li>auto： 自动选择合适的模型</li><li>deepseek-v4-flash： deepseek-v4-flash</li><li>deepseek-v4-pro： deepseek-v4-pro</li><li>glm-5： glm-5</li><li>glm-5-turbo： glm-5-turbo</li><li>glm-5.1： glm-5.1</li><li>kimi-k2.5： kimi-k2.5</li><li>kimi-k2.6： kimi-k2.6</li><li>minimax-m2.5： minimax-m2.5</li><li>minimax-m2.7： minimax-m2.7</li></ul>
     * @param string $EmbeddingApiKey <p>请前往腾讯云Tokenhub开通服务将ApiKey填入</p>
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("AgenticBaseId",$param) and $param["AgenticBaseId"] !== null) {
            $this->AgenticBaseId = $param["AgenticBaseId"];
        }

        if (array_key_exists("LLMModel",$param) and $param["LLMModel"] !== null) {
            $this->LLMModel = $param["LLMModel"];
        }

        if (array_key_exists("EmbeddingApiKey",$param) and $param["EmbeddingApiKey"] !== null) {
            $this->EmbeddingApiKey = $param["EmbeddingApiKey"];
        }
    }
}
