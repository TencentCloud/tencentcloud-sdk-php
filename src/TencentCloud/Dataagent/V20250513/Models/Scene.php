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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 场景
 *
 * @method string getSceneId() 获取场景ID
 * @method void setSceneId(string $SceneId) 设置场景ID
 * @method string getSceneName() 获取场景名称
 * @method void setSceneName(string $SceneName) 设置场景名称
 * @method array getSkills() 获取技能列表，包含：rag（知识检索）、data_analytics（数据分析）、data_prediction（数据预测）
 * @method void setSkills(array $Skills) 设置技能列表，包含：rag（知识检索）、data_analytics（数据分析）、data_prediction（数据预测）
 * @method string getPrompt() 获取提示词文本
 * @method void setPrompt(string $Prompt) 设置提示词文本
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method SearchConfig getSearchConfig() 获取检索配置
 * @method void setSearchConfig(SearchConfig $SearchConfig) 设置检索配置
 * @method array getExampleQAList() 获取示例问答列表
 * @method void setExampleQAList(array $ExampleQAList) 设置示例问答列表
 * @method string getCreateTime() 获取记录的创建时间
 * @method void setCreateTime(string $CreateTime) 设置记录的创建时间
 * @method string getUpdateTime() 获取记录的最后更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置记录的最后更新时间
 * @method string getCreatorUin() 获取创建者Uin
 * @method void setCreatorUin(string $CreatorUin) 设置创建者Uin
 */
class Scene extends AbstractModel
{
    /**
     * @var string 场景ID
     */
    public $SceneId;

    /**
     * @var string 场景名称
     */
    public $SceneName;

    /**
     * @var array 技能列表，包含：rag（知识检索）、data_analytics（数据分析）、data_prediction（数据预测）
     */
    public $Skills;

    /**
     * @var string 提示词文本
     */
    public $Prompt;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var SearchConfig 检索配置
     */
    public $SearchConfig;

    /**
     * @var array 示例问答列表
     */
    public $ExampleQAList;

    /**
     * @var string 记录的创建时间
     */
    public $CreateTime;

    /**
     * @var string 记录的最后更新时间
     */
    public $UpdateTime;

    /**
     * @var string 创建者Uin
     */
    public $CreatorUin;

    /**
     * @param string $SceneId 场景ID
     * @param string $SceneName 场景名称
     * @param array $Skills 技能列表，包含：rag（知识检索）、data_analytics（数据分析）、data_prediction（数据预测）
     * @param string $Prompt 提示词文本
     * @param string $Description 描述
     * @param SearchConfig $SearchConfig 检索配置
     * @param array $ExampleQAList 示例问答列表
     * @param string $CreateTime 记录的创建时间
     * @param string $UpdateTime 记录的最后更新时间
     * @param string $CreatorUin 创建者Uin
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
        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("Skills",$param) and $param["Skills"] !== null) {
            $this->Skills = $param["Skills"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SearchConfig",$param) and $param["SearchConfig"] !== null) {
            $this->SearchConfig = new SearchConfig();
            $this->SearchConfig->deserialize($param["SearchConfig"]);
        }

        if (array_key_exists("ExampleQAList",$param) and $param["ExampleQAList"] !== null) {
            $this->ExampleQAList = [];
            foreach ($param["ExampleQAList"] as $key => $value){
                $obj = new ExampleQA();
                $obj->deserialize($value);
                array_push($this->ExampleQAList, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }
    }
}
