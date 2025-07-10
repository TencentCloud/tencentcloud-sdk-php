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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 知识问答配置
 *
 * @method string getGreeting() 获取欢迎语，200字符以内
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGreeting(string $Greeting) 设置欢迎语，200字符以内
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleDescription() 获取角色描述，4000字符以内。通过填写描述，设定应用的 #角色名称、 #风格特点 及可达成的#意图。建议按照下面的模板填写，且自定义意图建议不超过5个。

#角色名称：
#风格特点：
#输出要求：
#能力限制：

能够达成以下用户意图
##意图名称：
##意图描述：
##意图示例：
##意图实现：

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleDescription(string $RoleDescription) 设置角色描述，4000字符以内。通过填写描述，设定应用的 #角色名称、 #风格特点 及可达成的#意图。建议按照下面的模板填写，且自定义意图建议不超过5个。

#角色名称：
#风格特点：
#输出要求：
#能力限制：

能够达成以下用户意图
##意图名称：
##意图描述：
##意图示例：
##意图实现：

注意：此字段可能返回 null，表示取不到有效值。
 * @method AppModel getModel() 获取生成模型配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModel(AppModel $Model) 设置生成模型配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSearch() 获取知识搜索配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearch(array $Search) 设置知识搜索配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method KnowledgeQaOutput getOutput() 获取知识管理输出配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(KnowledgeQaOutput $Output) 设置知识管理输出配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method KnowledgeWorkflow getWorkflow() 获取工作流程配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflow(KnowledgeWorkflow $Workflow) 设置工作流程配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method SearchRange getSearchRange() 获取检索范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchRange(SearchRange $SearchRange) 设置检索范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPattern() 获取应用模式，standard:标准模式, agent: agent模式，single_workflow：单工作流模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPattern(string $Pattern) 设置应用模式，standard:标准模式, agent: agent模式，single_workflow：单工作流模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method SearchStrategy getSearchStrategy() 获取检索策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchStrategy(SearchStrategy $SearchStrategy) 设置检索策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method KnowledgeQaSingleWorkflow getSingleWorkflow() 获取单工作流ID，Pattern为single_workflow时传入
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSingleWorkflow(KnowledgeQaSingleWorkflow $SingleWorkflow) 设置单工作流ID，Pattern为single_workflow时传入
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPlugins() 获取应用关联插件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlugins(array $Plugins) 设置应用关联插件
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppModel getThoughtModel() 获取思考模型配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThoughtModel(AppModel $ThoughtModel) 设置思考模型配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIntentAchievements() 获取意图达成方式优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentAchievements(array $IntentAchievements) 设置意图达成方式优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getImageTextRetrieval() 获取是否开启图文检索
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageTextRetrieval(boolean $ImageTextRetrieval) 设置是否开启图文检索
注意：此字段可能返回 null，表示取不到有效值。
 * @method AICallConfig getAiCall() 获取配置语音通话参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiCall(AICallConfig $AiCall) 设置配置语音通话参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getShareKnowledgeBases() 获取共享知识库关联配置
 * @method void setShareKnowledgeBases(array $ShareKnowledgeBases) 设置共享知识库关联配置
 * @method BackgroundImageConfig getBackgroundImage() 获取背景图相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackgroundImage(BackgroundImageConfig $BackgroundImage) 设置背景图相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOpeningQuestions() 获取开场问题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpeningQuestions(array $OpeningQuestions) 设置开场问题
注意：此字段可能返回 null，表示取不到有效值。
 */
class KnowledgeQaConfig extends AbstractModel
{
    /**
     * @var string 欢迎语，200字符以内
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Greeting;

    /**
     * @var string 角色描述，4000字符以内。通过填写描述，设定应用的 #角色名称、 #风格特点 及可达成的#意图。建议按照下面的模板填写，且自定义意图建议不超过5个。

#角色名称：
#风格特点：
#输出要求：
#能力限制：

能够达成以下用户意图
##意图名称：
##意图描述：
##意图示例：
##意图实现：

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleDescription;

    /**
     * @var AppModel 生成模型配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Model;

    /**
     * @var array 知识搜索配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Search;

    /**
     * @var KnowledgeQaOutput 知识管理输出配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var KnowledgeWorkflow 工作流程配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Workflow;

    /**
     * @var SearchRange 检索范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchRange;

    /**
     * @var string 应用模式，standard:标准模式, agent: agent模式，single_workflow：单工作流模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pattern;

    /**
     * @var SearchStrategy 检索策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchStrategy;

    /**
     * @var KnowledgeQaSingleWorkflow 单工作流ID，Pattern为single_workflow时传入
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SingleWorkflow;

    /**
     * @var array 应用关联插件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Plugins;

    /**
     * @var AppModel 思考模型配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThoughtModel;

    /**
     * @var array 意图达成方式优先级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentAchievements;

    /**
     * @var boolean 是否开启图文检索
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageTextRetrieval;

    /**
     * @var AICallConfig 配置语音通话参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiCall;

    /**
     * @var array 共享知识库关联配置
     */
    public $ShareKnowledgeBases;

    /**
     * @var BackgroundImageConfig 背景图相关信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackgroundImage;

    /**
     * @var array 开场问题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpeningQuestions;

    /**
     * @param string $Greeting 欢迎语，200字符以内
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleDescription 角色描述，4000字符以内。通过填写描述，设定应用的 #角色名称、 #风格特点 及可达成的#意图。建议按照下面的模板填写，且自定义意图建议不超过5个。

#角色名称：
#风格特点：
#输出要求：
#能力限制：

能够达成以下用户意图
##意图名称：
##意图描述：
##意图示例：
##意图实现：

注意：此字段可能返回 null，表示取不到有效值。
     * @param AppModel $Model 生成模型配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Search 知识搜索配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param KnowledgeQaOutput $Output 知识管理输出配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param KnowledgeWorkflow $Workflow 工作流程配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param SearchRange $SearchRange 检索范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Pattern 应用模式，standard:标准模式, agent: agent模式，single_workflow：单工作流模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param SearchStrategy $SearchStrategy 检索策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param KnowledgeQaSingleWorkflow $SingleWorkflow 单工作流ID，Pattern为single_workflow时传入
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Plugins 应用关联插件
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppModel $ThoughtModel 思考模型配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IntentAchievements 意图达成方式优先级
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ImageTextRetrieval 是否开启图文检索
注意：此字段可能返回 null，表示取不到有效值。
     * @param AICallConfig $AiCall 配置语音通话参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ShareKnowledgeBases 共享知识库关联配置
     * @param BackgroundImageConfig $BackgroundImage 背景图相关信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OpeningQuestions 开场问题
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Greeting",$param) and $param["Greeting"] !== null) {
            $this->Greeting = $param["Greeting"];
        }

        if (array_key_exists("RoleDescription",$param) and $param["RoleDescription"] !== null) {
            $this->RoleDescription = $param["RoleDescription"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new AppModel();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("Search",$param) and $param["Search"] !== null) {
            $this->Search = [];
            foreach ($param["Search"] as $key => $value){
                $obj = new KnowledgeQaSearch();
                $obj->deserialize($value);
                array_push($this->Search, $obj);
            }
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new KnowledgeQaOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("Workflow",$param) and $param["Workflow"] !== null) {
            $this->Workflow = new KnowledgeWorkflow();
            $this->Workflow->deserialize($param["Workflow"]);
        }

        if (array_key_exists("SearchRange",$param) and $param["SearchRange"] !== null) {
            $this->SearchRange = new SearchRange();
            $this->SearchRange->deserialize($param["SearchRange"]);
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("SearchStrategy",$param) and $param["SearchStrategy"] !== null) {
            $this->SearchStrategy = new SearchStrategy();
            $this->SearchStrategy->deserialize($param["SearchStrategy"]);
        }

        if (array_key_exists("SingleWorkflow",$param) and $param["SingleWorkflow"] !== null) {
            $this->SingleWorkflow = new KnowledgeQaSingleWorkflow();
            $this->SingleWorkflow->deserialize($param["SingleWorkflow"]);
        }

        if (array_key_exists("Plugins",$param) and $param["Plugins"] !== null) {
            $this->Plugins = [];
            foreach ($param["Plugins"] as $key => $value){
                $obj = new KnowledgeQaPlugin();
                $obj->deserialize($value);
                array_push($this->Plugins, $obj);
            }
        }

        if (array_key_exists("ThoughtModel",$param) and $param["ThoughtModel"] !== null) {
            $this->ThoughtModel = new AppModel();
            $this->ThoughtModel->deserialize($param["ThoughtModel"]);
        }

        if (array_key_exists("IntentAchievements",$param) and $param["IntentAchievements"] !== null) {
            $this->IntentAchievements = [];
            foreach ($param["IntentAchievements"] as $key => $value){
                $obj = new IntentAchievement();
                $obj->deserialize($value);
                array_push($this->IntentAchievements, $obj);
            }
        }

        if (array_key_exists("ImageTextRetrieval",$param) and $param["ImageTextRetrieval"] !== null) {
            $this->ImageTextRetrieval = $param["ImageTextRetrieval"];
        }

        if (array_key_exists("AiCall",$param) and $param["AiCall"] !== null) {
            $this->AiCall = new AICallConfig();
            $this->AiCall->deserialize($param["AiCall"]);
        }

        if (array_key_exists("ShareKnowledgeBases",$param) and $param["ShareKnowledgeBases"] !== null) {
            $this->ShareKnowledgeBases = [];
            foreach ($param["ShareKnowledgeBases"] as $key => $value){
                $obj = new ShareKnowledgeBase();
                $obj->deserialize($value);
                array_push($this->ShareKnowledgeBases, $obj);
            }
        }

        if (array_key_exists("BackgroundImage",$param) and $param["BackgroundImage"] !== null) {
            $this->BackgroundImage = new BackgroundImageConfig();
            $this->BackgroundImage->deserialize($param["BackgroundImage"]);
        }

        if (array_key_exists("OpeningQuestions",$param) and $param["OpeningQuestions"] !== null) {
            $this->OpeningQuestions = $param["OpeningQuestions"];
        }
    }
}
