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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAIAgentCall请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
 * @method integer getAIAgentId() 获取<p>AI智能体ID</p>
 * @method void setAIAgentId(integer $AIAgentId) 设置<p>AI智能体ID</p>
 * @method string getCallee() 获取<p>被叫号码</p>
 * @method void setCallee(string $Callee) 设置<p>被叫号码</p>
 * @method array getCallers() 获取<p>主叫号码列表</p>
 * @method void setCallers(array $Callers) 设置<p>主叫号码列表</p>
 * @method array getPromptVariables() 获取<p>提示词变量</p>
 * @method void setPromptVariables(array $PromptVariables) 设置<p>提示词变量</p>
 * @method array getVariables() 获取<p>通用变量： <p>提示词变量</p> <p>欢迎语变量</p> <p> 欢迎语延迟播放(秒级)：welcome-message-delay</p>  <p> dify变量</p>  </p><ol><li>dify-inputs-xxx 为dify的inputs变量</li><li>dify-inputs-user 为dify的user值</li><li>dify-inputs-conversation_id 为dify的conversation_id值</li></ol>
 * @method void setVariables(array $Variables) 设置<p>通用变量： <p>提示词变量</p> <p>欢迎语变量</p> <p> 欢迎语延迟播放(秒级)：welcome-message-delay</p>  <p> dify变量</p>  </p><ol><li>dify-inputs-xxx 为dify的inputs变量</li><li>dify-inputs-user 为dify的user值</li><li>dify-inputs-conversation_id 为dify的conversation_id值</li></ol>
 * @method integer getMaxRingTimeoutSecond() 获取<p>最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数</p>
 * @method void setMaxRingTimeoutSecond(integer $MaxRingTimeoutSecond) 设置<p>最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数</p>
 * @method integer getAcquireTimeoutSecond() 获取<p>智能体并发不足时，排队等待超时时间，单位秒</p><p>取值范围：[0, 5]</p><p>默认值：5</p>
 * @method void setAcquireTimeoutSecond(integer $AcquireTimeoutSecond) 设置<p>智能体并发不足时，排队等待超时时间，单位秒</p><p>取值范围：[0, 5]</p><p>默认值：5</p>
 */
class CreateAIAgentCallRequest extends AbstractModel
{
    /**
     * @var integer <p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
     */
    public $SdkAppId;

    /**
     * @var integer <p>AI智能体ID</p>
     */
    public $AIAgentId;

    /**
     * @var string <p>被叫号码</p>
     */
    public $Callee;

    /**
     * @var array <p>主叫号码列表</p>
     */
    public $Callers;

    /**
     * @var array <p>提示词变量</p>
     * @deprecated
     */
    public $PromptVariables;

    /**
     * @var array <p>通用变量： <p>提示词变量</p> <p>欢迎语变量</p> <p> 欢迎语延迟播放(秒级)：welcome-message-delay</p>  <p> dify变量</p>  </p><ol><li>dify-inputs-xxx 为dify的inputs变量</li><li>dify-inputs-user 为dify的user值</li><li>dify-inputs-conversation_id 为dify的conversation_id值</li></ol>
     */
    public $Variables;

    /**
     * @var integer <p>最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数</p>
     */
    public $MaxRingTimeoutSecond;

    /**
     * @var integer <p>智能体并发不足时，排队等待超时时间，单位秒</p><p>取值范围：[0, 5]</p><p>默认值：5</p>
     */
    public $AcquireTimeoutSecond;

    /**
     * @param integer $SdkAppId <p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
     * @param integer $AIAgentId <p>AI智能体ID</p>
     * @param string $Callee <p>被叫号码</p>
     * @param array $Callers <p>主叫号码列表</p>
     * @param array $PromptVariables <p>提示词变量</p>
     * @param array $Variables <p>通用变量： <p>提示词变量</p> <p>欢迎语变量</p> <p> 欢迎语延迟播放(秒级)：welcome-message-delay</p>  <p> dify变量</p>  </p><ol><li>dify-inputs-xxx 为dify的inputs变量</li><li>dify-inputs-user 为dify的user值</li><li>dify-inputs-conversation_id 为dify的conversation_id值</li></ol>
     * @param integer $MaxRingTimeoutSecond <p>最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数</p>
     * @param integer $AcquireTimeoutSecond <p>智能体并发不足时，排队等待超时时间，单位秒</p><p>取值范围：[0, 5]</p><p>默认值：5</p>
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("AIAgentId",$param) and $param["AIAgentId"] !== null) {
            $this->AIAgentId = $param["AIAgentId"];
        }

        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("PromptVariables",$param) and $param["PromptVariables"] !== null) {
            $this->PromptVariables = [];
            foreach ($param["PromptVariables"] as $key => $value){
                $obj = new Variable();
                $obj->deserialize($value);
                array_push($this->PromptVariables, $obj);
            }
        }

        if (array_key_exists("Variables",$param) and $param["Variables"] !== null) {
            $this->Variables = [];
            foreach ($param["Variables"] as $key => $value){
                $obj = new Variable();
                $obj->deserialize($value);
                array_push($this->Variables, $obj);
            }
        }

        if (array_key_exists("MaxRingTimeoutSecond",$param) and $param["MaxRingTimeoutSecond"] !== null) {
            $this->MaxRingTimeoutSecond = $param["MaxRingTimeoutSecond"];
        }

        if (array_key_exists("AcquireTimeoutSecond",$param) and $param["AcquireTimeoutSecond"] !== null) {
            $this->AcquireTimeoutSecond = $param["AcquireTimeoutSecond"];
        }
    }
}
