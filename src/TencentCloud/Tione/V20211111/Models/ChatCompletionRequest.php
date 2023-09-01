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
 * ChatCompletion请求参数结构体
 *
 * @method string getModel() 获取对话的目标模型ID。
多行业多场景大模型在线体验聊天：tj_llm_clm-v1。
自行部署的开源大模型聊天：部署的模型服务组ID，形如ms-xxyyzz。
 * @method void setModel(string $Model) 设置对话的目标模型ID。
多行业多场景大模型在线体验聊天：tj_llm_clm-v1。
自行部署的开源大模型聊天：部署的模型服务组ID，形如ms-xxyyzz。
 * @method array getMessages() 获取输入对话历史。旧的对话在前，数组中最后一项应该为这次的问题。
 * @method void setMessages(array $Messages) 设置输入对话历史。旧的对话在前，数组中最后一项应该为这次的问题。
 * @method float getTemperature() 获取仅当模型为自行部署的开源大模型时生效。采样随机值，默认值为1.0，取值范围[0,2]。较高的值(如0.8)将使输出更加随机，而较低的值(如0.2)将使输出更加确定。建议仅修改此参数或TopP，但不建议两者都修改。
 * @method void setTemperature(float $Temperature) 设置仅当模型为自行部署的开源大模型时生效。采样随机值，默认值为1.0，取值范围[0,2]。较高的值(如0.8)将使输出更加随机，而较低的值(如0.2)将使输出更加确定。建议仅修改此参数或TopP，但不建议两者都修改。
 * @method float getTopP() 获取仅当模型为自行部署的开源大模型时生效。核采样，默认值为1，取值范围[0,1]。指的是预先设置一个概率界限 p，然后将所有可能生成的token，根据概率大小从高到低排列，依次选取。当这些选取的token的累积概率大于或等于 p 值时停止，然后从已经选取的token中进行采样，生成下一个token。例如top_p为0.1时意味着模型只考虑累积概率为10%的token。建议仅修改此参数或Temperature，不建议两者都修改。
 * @method void setTopP(float $TopP) 设置仅当模型为自行部署的开源大模型时生效。核采样，默认值为1，取值范围[0,1]。指的是预先设置一个概率界限 p，然后将所有可能生成的token，根据概率大小从高到低排列，依次选取。当这些选取的token的累积概率大于或等于 p 值时停止，然后从已经选取的token中进行采样，生成下一个token。例如top_p为0.1时意味着模型只考虑累积概率为10%的token。建议仅修改此参数或Temperature，不建议两者都修改。
 * @method integer getMaxTokens() 获取仅当模型为自行部署的开源大模型时生效。最大生成的token数目。默认为无限大。
 * @method void setMaxTokens(integer $MaxTokens) 设置仅当模型为自行部署的开源大模型时生效。最大生成的token数目。默认为无限大。
 */
class ChatCompletionRequest extends AbstractModel
{
    /**
     * @var string 对话的目标模型ID。
多行业多场景大模型在线体验聊天：tj_llm_clm-v1。
自行部署的开源大模型聊天：部署的模型服务组ID，形如ms-xxyyzz。
     */
    public $Model;

    /**
     * @var array 输入对话历史。旧的对话在前，数组中最后一项应该为这次的问题。
     */
    public $Messages;

    /**
     * @var float 仅当模型为自行部署的开源大模型时生效。采样随机值，默认值为1.0，取值范围[0,2]。较高的值(如0.8)将使输出更加随机，而较低的值(如0.2)将使输出更加确定。建议仅修改此参数或TopP，但不建议两者都修改。
     */
    public $Temperature;

    /**
     * @var float 仅当模型为自行部署的开源大模型时生效。核采样，默认值为1，取值范围[0,1]。指的是预先设置一个概率界限 p，然后将所有可能生成的token，根据概率大小从高到低排列，依次选取。当这些选取的token的累积概率大于或等于 p 值时停止，然后从已经选取的token中进行采样，生成下一个token。例如top_p为0.1时意味着模型只考虑累积概率为10%的token。建议仅修改此参数或Temperature，不建议两者都修改。
     */
    public $TopP;

    /**
     * @var integer 仅当模型为自行部署的开源大模型时生效。最大生成的token数目。默认为无限大。
     */
    public $MaxTokens;

    /**
     * @param string $Model 对话的目标模型ID。
多行业多场景大模型在线体验聊天：tj_llm_clm-v1。
自行部署的开源大模型聊天：部署的模型服务组ID，形如ms-xxyyzz。
     * @param array $Messages 输入对话历史。旧的对话在前，数组中最后一项应该为这次的问题。
     * @param float $Temperature 仅当模型为自行部署的开源大模型时生效。采样随机值，默认值为1.0，取值范围[0,2]。较高的值(如0.8)将使输出更加随机，而较低的值(如0.2)将使输出更加确定。建议仅修改此参数或TopP，但不建议两者都修改。
     * @param float $TopP 仅当模型为自行部署的开源大模型时生效。核采样，默认值为1，取值范围[0,1]。指的是预先设置一个概率界限 p，然后将所有可能生成的token，根据概率大小从高到低排列，依次选取。当这些选取的token的累积概率大于或等于 p 值时停止，然后从已经选取的token中进行采样，生成下一个token。例如top_p为0.1时意味着模型只考虑累积概率为10%的token。建议仅修改此参数或Temperature，不建议两者都修改。
     * @param integer $MaxTokens 仅当模型为自行部署的开源大模型时生效。最大生成的token数目。默认为无限大。
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

        if (array_key_exists("Messages",$param) and $param["Messages"] !== null) {
            $this->Messages = [];
            foreach ($param["Messages"] as $key => $value){
                $obj = new Message();
                $obj->deserialize($value);
                array_push($this->Messages, $obj);
            }
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("MaxTokens",$param) and $param["MaxTokens"] !== null) {
            $this->MaxTokens = $param["MaxTokens"];
        }
    }
}
