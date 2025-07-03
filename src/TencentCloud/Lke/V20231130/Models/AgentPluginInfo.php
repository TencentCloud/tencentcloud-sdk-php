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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent 的插件信息
 *
 * @method string getPluginId() 获取插件id
 * @method void setPluginId(string $PluginId) 设置插件id
 * @method array getHeaders() 获取应用配置的插件header信息
 * @method void setHeaders(array $Headers) 设置应用配置的插件header信息
 * @method AgentModelInfo getModel() 获取插件调用LLM时使用的模型配置，一般用于指定知识库问答插件的生成模型
 * @method void setModel(AgentModelInfo $Model) 设置插件调用LLM时使用的模型配置，一般用于指定知识库问答插件的生成模型
 * @method integer getPluginInfoType() 获取插件信息类型; 0: 未指定类型; 1: 知识库问答插件
 * @method void setPluginInfoType(integer $PluginInfoType) 设置插件信息类型; 0: 未指定类型; 1: 知识库问答插件
 * @method AgentKnowledgeQAPlugin getKnowledgeQa() 获取知识库问答插件配置
 * @method void setKnowledgeQa(AgentKnowledgeQAPlugin $KnowledgeQa) 设置知识库问答插件配置
 */
class AgentPluginInfo extends AbstractModel
{
    /**
     * @var string 插件id
     */
    public $PluginId;

    /**
     * @var array 应用配置的插件header信息
     */
    public $Headers;

    /**
     * @var AgentModelInfo 插件调用LLM时使用的模型配置，一般用于指定知识库问答插件的生成模型
     */
    public $Model;

    /**
     * @var integer 插件信息类型; 0: 未指定类型; 1: 知识库问答插件
     */
    public $PluginInfoType;

    /**
     * @var AgentKnowledgeQAPlugin 知识库问答插件配置
     */
    public $KnowledgeQa;

    /**
     * @param string $PluginId 插件id
     * @param array $Headers 应用配置的插件header信息
     * @param AgentModelInfo $Model 插件调用LLM时使用的模型配置，一般用于指定知识库问答插件的生成模型
     * @param integer $PluginInfoType 插件信息类型; 0: 未指定类型; 1: 知识库问答插件
     * @param AgentKnowledgeQAPlugin $KnowledgeQa 知识库问答插件配置
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new AgentPluginHeader();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new AgentModelInfo();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("PluginInfoType",$param) and $param["PluginInfoType"] !== null) {
            $this->PluginInfoType = $param["PluginInfoType"];
        }

        if (array_key_exists("KnowledgeQa",$param) and $param["KnowledgeQa"] !== null) {
            $this->KnowledgeQa = new AgentKnowledgeQAPlugin();
            $this->KnowledgeQa->deserialize($param["KnowledgeQa"]);
        }
    }
}
