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
 * @method string getSceneId() 获取<p>场景ID</p>
 * @method void setSceneId(string $SceneId) 设置<p>场景ID</p>
 * @method string getSceneName() 获取<p>场景名称</p>
 * @method void setSceneName(string $SceneName) 设置<p>场景名称</p>
 * @method array getSkills() 获取<p>技能列表，包含：rag（知识检索）、data_analytics（数据分析）、data_prediction（数据预测）</p>
 * @method void setSkills(array $Skills) 设置<p>技能列表，包含：rag（知识检索）、data_analytics（数据分析）、data_prediction（数据预测）</p>
 * @method string getPrompt() 获取<p>提示词文本</p>
 * @method void setPrompt(string $Prompt) 设置<p>提示词文本</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method SearchConfig getSearchConfig() 获取<p>检索配置</p>
 * @method void setSearchConfig(SearchConfig $SearchConfig) 设置<p>检索配置</p>
 * @method array getExampleQAList() 获取<p>示例问答列表</p>
 * @method void setExampleQAList(array $ExampleQAList) 设置<p>示例问答列表</p>
 * @method string getCreateTime() 获取<p>记录的创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>记录的创建时间</p>
 * @method string getUpdateTime() 获取<p>记录的最后更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>记录的最后更新时间</p>
 * @method string getCreatorUin() 获取<p>创建者Uin</p>
 * @method void setCreatorUin(string $CreatorUin) 设置<p>创建者Uin</p>
 * @method string getKnowledge() 获取<p>知识</p>
 * @method void setKnowledge(string $Knowledge) 设置<p>知识</p>
 */
class Scene extends AbstractModel
{
    /**
     * @var string <p>场景ID</p>
     */
    public $SceneId;

    /**
     * @var string <p>场景名称</p>
     */
    public $SceneName;

    /**
     * @var array <p>技能列表，包含：rag（知识检索）、data_analytics（数据分析）、data_prediction（数据预测）</p>
     */
    public $Skills;

    /**
     * @var string <p>提示词文本</p>
     */
    public $Prompt;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var SearchConfig <p>检索配置</p>
     */
    public $SearchConfig;

    /**
     * @var array <p>示例问答列表</p>
     */
    public $ExampleQAList;

    /**
     * @var string <p>记录的创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>记录的最后更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>创建者Uin</p>
     */
    public $CreatorUin;

    /**
     * @var string <p>知识</p>
     */
    public $Knowledge;

    /**
     * @param string $SceneId <p>场景ID</p>
     * @param string $SceneName <p>场景名称</p>
     * @param array $Skills <p>技能列表，包含：rag（知识检索）、data_analytics（数据分析）、data_prediction（数据预测）</p>
     * @param string $Prompt <p>提示词文本</p>
     * @param string $Description <p>描述</p>
     * @param SearchConfig $SearchConfig <p>检索配置</p>
     * @param array $ExampleQAList <p>示例问答列表</p>
     * @param string $CreateTime <p>记录的创建时间</p>
     * @param string $UpdateTime <p>记录的最后更新时间</p>
     * @param string $CreatorUin <p>创建者Uin</p>
     * @param string $Knowledge <p>知识</p>
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

        if (array_key_exists("Knowledge",$param) and $param["Knowledge"] !== null) {
            $this->Knowledge = $param["Knowledge"];
        }
    }
}
