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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDEM漏斗步骤
 *
 * @method string getStepName() 获取<p>应用id</p>
 * @method void setStepName(string $StepName) 设置<p>应用id</p>
 * @method string getPagePattern() 获取<p>页面特征</p>
 * @method void setPagePattern(string $PagePattern) 设置<p>页面特征</p>
 * @method string getPageMatchMode() 获取<p>页面匹配模式</p>
 * @method void setPageMatchMode(string $PageMatchMode) 设置<p>页面匹配模式</p>
 * @method string getSelector() 获取<p>控件Selector</p>
 * @method void setSelector(string $Selector) 设置<p>控件Selector</p>
 * @method string getActionType() 获取<p>事件类型</p>
 * @method void setActionType(string $ActionType) 设置<p>事件类型</p>
 * @method string getVisualName() 获取<p>可视化名称，如控件文本、自定义事件名</p>
 * @method void setVisualName(string $VisualName) 设置<p>可视化名称，如控件文本、自定义事件名</p>
 */
class FunnelStepInput extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $StepName;

    /**
     * @var string <p>页面特征</p>
     */
    public $PagePattern;

    /**
     * @var string <p>页面匹配模式</p>
     */
    public $PageMatchMode;

    /**
     * @var string <p>控件Selector</p>
     */
    public $Selector;

    /**
     * @var string <p>事件类型</p>
     */
    public $ActionType;

    /**
     * @var string <p>可视化名称，如控件文本、自定义事件名</p>
     */
    public $VisualName;

    /**
     * @param string $StepName <p>应用id</p>
     * @param string $PagePattern <p>页面特征</p>
     * @param string $PageMatchMode <p>页面匹配模式</p>
     * @param string $Selector <p>控件Selector</p>
     * @param string $ActionType <p>事件类型</p>
     * @param string $VisualName <p>可视化名称，如控件文本、自定义事件名</p>
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
        if (array_key_exists("StepName",$param) and $param["StepName"] !== null) {
            $this->StepName = $param["StepName"];
        }

        if (array_key_exists("PagePattern",$param) and $param["PagePattern"] !== null) {
            $this->PagePattern = $param["PagePattern"];
        }

        if (array_key_exists("PageMatchMode",$param) and $param["PageMatchMode"] !== null) {
            $this->PageMatchMode = $param["PageMatchMode"];
        }

        if (array_key_exists("Selector",$param) and $param["Selector"] !== null) {
            $this->Selector = $param["Selector"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("VisualName",$param) and $param["VisualName"] !== null) {
            $this->VisualName = $param["VisualName"];
        }
    }
}
