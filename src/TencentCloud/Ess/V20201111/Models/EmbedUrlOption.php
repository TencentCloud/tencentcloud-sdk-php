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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 个性化参数
 *
 * @method boolean getShowFlowDetailComponent() 获取合同详情预览，允许展示控件信息
<ul>
<li><b>true</b>：允许在合同详情页展示控件</li>
<li><b>false</b>：（默认）不允许在合同详情页展示控件</li>
</ul>
 * @method void setShowFlowDetailComponent(boolean $ShowFlowDetailComponent) 设置合同详情预览，允许展示控件信息
<ul>
<li><b>true</b>：允许在合同详情页展示控件</li>
<li><b>false</b>：（默认）不允许在合同详情页展示控件</li>
</ul>
 * @method boolean getShowTemplateComponent() 获取模板预览，允许展示模板控件信息
<ul><li> <b>true</b> :允许在模板预览页展示控件</li>
<li> <b>false</b> :（默认）不允许在模板预览页展示控件</li></ul>
 * @method void setShowTemplateComponent(boolean $ShowTemplateComponent) 设置模板预览，允许展示模板控件信息
<ul><li> <b>true</b> :允许在模板预览页展示控件</li>
<li> <b>false</b> :（默认）不允许在模板预览页展示控件</li></ul>
 * @method boolean getSkipUploadFile() 获取跳过上传文件，默认为false(展示上传文件页）![image](https://qcloudimg.tencent-cloud.cn/raw/8ca33745cf772e79831dbe5a70e82400.png)
- false: 展示上传文件页
- true: 不展示上传文件页
 

注意: 此参数仅针对**EmbedType=CREATE_TEMPLATE(创建模板)和EmbedType=CREATE_CONTRACT_DRAFT_COOPEDIT(创建起草合同)有效**，
 * @method void setSkipUploadFile(boolean $SkipUploadFile) 设置跳过上传文件，默认为false(展示上传文件页）![image](https://qcloudimg.tencent-cloud.cn/raw/8ca33745cf772e79831dbe5a70e82400.png)
- false: 展示上传文件页
- true: 不展示上传文件页
 

注意: 此参数仅针对**EmbedType=CREATE_TEMPLATE(创建模板)和EmbedType=CREATE_CONTRACT_DRAFT_COOPEDIT(创建起草合同)有效**，
 * @method boolean getForbidEditWatermark() 获取是否禁止编辑（展示）水印控件属性
<ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>

 * @method void setForbidEditWatermark(boolean $ForbidEditWatermark) 设置是否禁止编辑（展示）水印控件属性
<ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>

 * @method string getSealDescription() 获取印章描述
 * @method void setSealDescription(string $SealDescription) 设置印章描述
 * @method boolean getForbidEditSealDescription() 获取是否禁止编辑印章描述内容
<ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>
 * @method void setForbidEditSealDescription(boolean $ForbidEditSealDescription) 设置是否禁止编辑印章描述内容
<ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>
 */
class EmbedUrlOption extends AbstractModel
{
    /**
     * @var boolean 合同详情预览，允许展示控件信息
<ul>
<li><b>true</b>：允许在合同详情页展示控件</li>
<li><b>false</b>：（默认）不允许在合同详情页展示控件</li>
</ul>
     */
    public $ShowFlowDetailComponent;

    /**
     * @var boolean 模板预览，允许展示模板控件信息
<ul><li> <b>true</b> :允许在模板预览页展示控件</li>
<li> <b>false</b> :（默认）不允许在模板预览页展示控件</li></ul>
     */
    public $ShowTemplateComponent;

    /**
     * @var boolean 跳过上传文件，默认为false(展示上传文件页）![image](https://qcloudimg.tencent-cloud.cn/raw/8ca33745cf772e79831dbe5a70e82400.png)
- false: 展示上传文件页
- true: 不展示上传文件页
 

注意: 此参数仅针对**EmbedType=CREATE_TEMPLATE(创建模板)和EmbedType=CREATE_CONTRACT_DRAFT_COOPEDIT(创建起草合同)有效**，
     */
    public $SkipUploadFile;

    /**
     * @var boolean 是否禁止编辑（展示）水印控件属性
<ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>

     */
    public $ForbidEditWatermark;

    /**
     * @var string 印章描述
     */
    public $SealDescription;

    /**
     * @var boolean 是否禁止编辑印章描述内容
<ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>
     */
    public $ForbidEditSealDescription;

    /**
     * @param boolean $ShowFlowDetailComponent 合同详情预览，允许展示控件信息
<ul>
<li><b>true</b>：允许在合同详情页展示控件</li>
<li><b>false</b>：（默认）不允许在合同详情页展示控件</li>
</ul>
     * @param boolean $ShowTemplateComponent 模板预览，允许展示模板控件信息
<ul><li> <b>true</b> :允许在模板预览页展示控件</li>
<li> <b>false</b> :（默认）不允许在模板预览页展示控件</li></ul>
     * @param boolean $SkipUploadFile 跳过上传文件，默认为false(展示上传文件页）![image](https://qcloudimg.tencent-cloud.cn/raw/8ca33745cf772e79831dbe5a70e82400.png)
- false: 展示上传文件页
- true: 不展示上传文件页
 

注意: 此参数仅针对**EmbedType=CREATE_TEMPLATE(创建模板)和EmbedType=CREATE_CONTRACT_DRAFT_COOPEDIT(创建起草合同)有效**，
     * @param boolean $ForbidEditWatermark 是否禁止编辑（展示）水印控件属性
<ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>

     * @param string $SealDescription 印章描述
     * @param boolean $ForbidEditSealDescription 是否禁止编辑印章描述内容
<ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>
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

        if (array_key_exists("SkipUploadFile",$param) and $param["SkipUploadFile"] !== null) {
            $this->SkipUploadFile = $param["SkipUploadFile"];
        }

        if (array_key_exists("ForbidEditWatermark",$param) and $param["ForbidEditWatermark"] !== null) {
            $this->ForbidEditWatermark = $param["ForbidEditWatermark"];
        }

        if (array_key_exists("SealDescription",$param) and $param["SealDescription"] !== null) {
            $this->SealDescription = $param["SealDescription"];
        }

        if (array_key_exists("ForbidEditSealDescription",$param) and $param["ForbidEditSealDescription"] !== null) {
            $this->ForbidEditSealDescription = $param["ForbidEditSealDescription"];
        }
    }
}
