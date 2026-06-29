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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能套图配置
 *
 * @method string getMode() 获取<p>出图模式</p><p>枚举值：</p><ul><li>auto： 全自动模式。此模式下支持CustomVariables传入。</li><li>modify： 修改模式。此模式下需要在AddOnParameter.ExtPrompt字段提供对应描述。此模式下禁止CustomVariables传入。</li></ul><p>默认值：auto</p>
 * @method void setMode(string $Mode) 设置<p>出图模式</p><p>枚举值：</p><ul><li>auto： 全自动模式。此模式下支持CustomVariables传入。</li><li>modify： 修改模式。此模式下需要在AddOnParameter.ExtPrompt字段提供对应描述。此模式下禁止CustomVariables传入。</li></ul><p>默认值：auto</p>
 * @method integer getDefinition() 获取<p>电商平台视觉模板id</p><p>如需个性化定制视觉模板，请提交工单。</p>
 * @method void setDefinition(integer $Definition) 设置<p>电商平台视觉模板id</p><p>如需个性化定制视觉模板，请提交工单。</p>
 * @method array getRecipe() 获取<p>子图配置。</p>
 * @method void setRecipe(array $Recipe) 设置<p>子图配置。</p>
 * @method string getLanguage() 获取<p>子图文案语言。</p><p>枚举值：</p><ul><li>zh-CN： 简体中文</li><li>en-US： 美式英语</li></ul><p>默认值：zh-CN</p><p>如需支持更多语言输出，请提交工单。</p>
 * @method void setLanguage(string $Language) 设置<p>子图文案语言。</p><p>枚举值：</p><ul><li>zh-CN： 简体中文</li><li>en-US： 美式英语</li></ul><p>默认值：zh-CN</p><p>如需支持更多语言输出，请提交工单。</p>
 * @method string getPanelRatio() 获取<p>子图比例。</p><p>枚举值：</p><ul><li>1:1： 1:1</li><li>3:4： 3:4</li><li>4:3： 4:3</li><li>9:16： 9:16</li><li>16:9： 16:9</li></ul><p>默认值：1:1</p>
 * @method void setPanelRatio(string $PanelRatio) 设置<p>子图比例。</p><p>枚举值：</p><ul><li>1:1： 1:1</li><li>3:4： 3:4</li><li>4:3： 4:3</li><li>9:16： 9:16</li><li>16:9： 16:9</li></ul><p>默认值：1:1</p>
 * @method string getPanelResolution() 获取<p>子图分辨率</p><p>枚举值：</p><ul><li>720： 720</li><li>1K： 1K</li><li>2K： 2K</li><li>4K： 4K</li></ul><p>默认值：1K</p>
 * @method void setPanelResolution(string $PanelResolution) 设置<p>子图分辨率</p><p>枚举值：</p><ul><li>720： 720</li><li>1K： 1K</li><li>2K： 2K</li><li>4K： 4K</li></ul><p>默认值：1K</p>
 * @method array getCustomVariables() 获取<p>用户自定义变量。</p>
 * @method void setCustomVariables(array $CustomVariables) 设置<p>用户自定义变量。</p>
 * @method string getModel() 获取<p>模型名称。</p><p>枚举值：</p><ul><li>WAND-suite-1.0-flash： WAND-suite-1.0-flash</li></ul>
 * @method void setModel(string $Model) 设置<p>模型名称。</p><p>枚举值：</p><ul><li>WAND-suite-1.0-flash： WAND-suite-1.0-flash</li></ul>
 */
class AiPosterSuiteConfig extends AbstractModel
{
    /**
     * @var string <p>出图模式</p><p>枚举值：</p><ul><li>auto： 全自动模式。此模式下支持CustomVariables传入。</li><li>modify： 修改模式。此模式下需要在AddOnParameter.ExtPrompt字段提供对应描述。此模式下禁止CustomVariables传入。</li></ul><p>默认值：auto</p>
     */
    public $Mode;

    /**
     * @var integer <p>电商平台视觉模板id</p><p>如需个性化定制视觉模板，请提交工单。</p>
     */
    public $Definition;

    /**
     * @var array <p>子图配置。</p>
     */
    public $Recipe;

    /**
     * @var string <p>子图文案语言。</p><p>枚举值：</p><ul><li>zh-CN： 简体中文</li><li>en-US： 美式英语</li></ul><p>默认值：zh-CN</p><p>如需支持更多语言输出，请提交工单。</p>
     */
    public $Language;

    /**
     * @var string <p>子图比例。</p><p>枚举值：</p><ul><li>1:1： 1:1</li><li>3:4： 3:4</li><li>4:3： 4:3</li><li>9:16： 9:16</li><li>16:9： 16:9</li></ul><p>默认值：1:1</p>
     */
    public $PanelRatio;

    /**
     * @var string <p>子图分辨率</p><p>枚举值：</p><ul><li>720： 720</li><li>1K： 1K</li><li>2K： 2K</li><li>4K： 4K</li></ul><p>默认值：1K</p>
     */
    public $PanelResolution;

    /**
     * @var array <p>用户自定义变量。</p>
     */
    public $CustomVariables;

    /**
     * @var string <p>模型名称。</p><p>枚举值：</p><ul><li>WAND-suite-1.0-flash： WAND-suite-1.0-flash</li></ul>
     */
    public $Model;

    /**
     * @param string $Mode <p>出图模式</p><p>枚举值：</p><ul><li>auto： 全自动模式。此模式下支持CustomVariables传入。</li><li>modify： 修改模式。此模式下需要在AddOnParameter.ExtPrompt字段提供对应描述。此模式下禁止CustomVariables传入。</li></ul><p>默认值：auto</p>
     * @param integer $Definition <p>电商平台视觉模板id</p><p>如需个性化定制视觉模板，请提交工单。</p>
     * @param array $Recipe <p>子图配置。</p>
     * @param string $Language <p>子图文案语言。</p><p>枚举值：</p><ul><li>zh-CN： 简体中文</li><li>en-US： 美式英语</li></ul><p>默认值：zh-CN</p><p>如需支持更多语言输出，请提交工单。</p>
     * @param string $PanelRatio <p>子图比例。</p><p>枚举值：</p><ul><li>1:1： 1:1</li><li>3:4： 3:4</li><li>4:3： 4:3</li><li>9:16： 9:16</li><li>16:9： 16:9</li></ul><p>默认值：1:1</p>
     * @param string $PanelResolution <p>子图分辨率</p><p>枚举值：</p><ul><li>720： 720</li><li>1K： 1K</li><li>2K： 2K</li><li>4K： 4K</li></ul><p>默认值：1K</p>
     * @param array $CustomVariables <p>用户自定义变量。</p>
     * @param string $Model <p>模型名称。</p><p>枚举值：</p><ul><li>WAND-suite-1.0-flash： WAND-suite-1.0-flash</li></ul>
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Recipe",$param) and $param["Recipe"] !== null) {
            $this->Recipe = [];
            foreach ($param["Recipe"] as $key => $value){
                $obj = new RecipeItem();
                $obj->deserialize($value);
                array_push($this->Recipe, $obj);
            }
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("PanelRatio",$param) and $param["PanelRatio"] !== null) {
            $this->PanelRatio = $param["PanelRatio"];
        }

        if (array_key_exists("PanelResolution",$param) and $param["PanelResolution"] !== null) {
            $this->PanelResolution = $param["PanelResolution"];
        }

        if (array_key_exists("CustomVariables",$param) and $param["CustomVariables"] !== null) {
            $this->CustomVariables = [];
            foreach ($param["CustomVariables"] as $key => $value){
                $obj = new CustomVariable();
                $obj->deserialize($value);
                array_push($this->CustomVariables, $obj);
            }
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
