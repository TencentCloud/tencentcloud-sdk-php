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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 个性化参数
 *
 * @method boolean getShowFlowDetailComponent() 获取合同详情预览，允许展示控件信息
<br/>true：允许在合同详情页展示控件
<br/>false：不允许在合同详情页展示控件
<br/>默认false，合同详情页不展示控件
 * @method void setShowFlowDetailComponent(boolean $ShowFlowDetailComponent) 设置合同详情预览，允许展示控件信息
<br/>true：允许在合同详情页展示控件
<br/>false：不允许在合同详情页展示控件
<br/>默认false，合同详情页不展示控件
 * @method boolean getShowTemplateComponent() 获取模版预览，允许展示模版控件信息
<br/>true：允许在模版预览页展示控件
<br/>false：不允许在模版预览页展示控件
<br/>默认false，模版预览页不展示控件
 * @method void setShowTemplateComponent(boolean $ShowTemplateComponent) 设置模版预览，允许展示模版控件信息
<br/>true：允许在模版预览页展示控件
<br/>false：不允许在模版预览页展示控件
<br/>默认false，模版预览页不展示控件
 */
class EmbedUrlOption extends AbstractModel
{
    /**
     * @var boolean 合同详情预览，允许展示控件信息
<br/>true：允许在合同详情页展示控件
<br/>false：不允许在合同详情页展示控件
<br/>默认false，合同详情页不展示控件
     */
    public $ShowFlowDetailComponent;

    /**
     * @var boolean 模版预览，允许展示模版控件信息
<br/>true：允许在模版预览页展示控件
<br/>false：不允许在模版预览页展示控件
<br/>默认false，模版预览页不展示控件
     */
    public $ShowTemplateComponent;

    /**
     * @param boolean $ShowFlowDetailComponent 合同详情预览，允许展示控件信息
<br/>true：允许在合同详情页展示控件
<br/>false：不允许在合同详情页展示控件
<br/>默认false，合同详情页不展示控件
     * @param boolean $ShowTemplateComponent 模版预览，允许展示模版控件信息
<br/>true：允许在模版预览页展示控件
<br/>false：不允许在模版预览页展示控件
<br/>默认false，模版预览页不展示控件
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
        if (array_key_exists("ShowFlowDetailComponent",$param) and $param["ShowFlowDetailComponent"] !== null) {
            $this->ShowFlowDetailComponent = $param["ShowFlowDetailComponent"];
        }

        if (array_key_exists("ShowTemplateComponent",$param) and $param["ShowTemplateComponent"] !== null) {
            $this->ShowTemplateComponent = $param["ShowTemplateComponent"];
        }
    }
}
