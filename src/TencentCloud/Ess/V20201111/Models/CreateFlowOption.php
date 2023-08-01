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
 * 创建合同个性化参数
 *
 * @method boolean getCanEditFlow() 获取是否允许修改发起合同时确认弹窗的合同信息（合同名称、合同类型、签署截止时间），若不允许编辑，则表单字段将被禁止输入。
<br/>true：允许编辑（默认），<br/>false：不允许编辑<br/>默认：false：不允许编辑
 * @method void setCanEditFlow(boolean $CanEditFlow) 设置是否允许修改发起合同时确认弹窗的合同信息（合同名称、合同类型、签署截止时间），若不允许编辑，则表单字段将被禁止输入。
<br/>true：允许编辑（默认），<br/>false：不允许编辑<br/>默认：false：不允许编辑
 * @method boolean getCanEditFormField() 获取是否允许编辑模版控件
<br/>true:允许编辑模版控件信息
<br/>false:不允许编辑模版控件信息
<br/>默认false:不允许编辑模版控件信息
 * @method void setCanEditFormField(boolean $CanEditFormField) 设置是否允许编辑模版控件
<br/>true:允许编辑模版控件信息
<br/>false:不允许编辑模版控件信息
<br/>默认false:不允许编辑模版控件信息
 * @method boolean getHideShowFlowName() 获取发起页面隐藏合同名称展示
<br/>true:发起页面隐藏合同名称展示
<br/>false:发起页面不隐藏合同名称展示
<br/>默认false:发起页面不隐藏合同名称展示
 * @method void setHideShowFlowName(boolean $HideShowFlowName) 设置发起页面隐藏合同名称展示
<br/>true:发起页面隐藏合同名称展示
<br/>false:发起页面不隐藏合同名称展示
<br/>默认false:发起页面不隐藏合同名称展示
 * @method boolean getHideShowFlowType() 获取发起页面隐藏合同类型展示
<br/>true:发起页面隐藏合同类型展示
<br/>false:发起页面不隐藏合同类型展示
<br/>默认false:发起页面不隐藏合同类型展示

 * @method void setHideShowFlowType(boolean $HideShowFlowType) 设置发起页面隐藏合同类型展示
<br/>true:发起页面隐藏合同类型展示
<br/>false:发起页面不隐藏合同类型展示
<br/>默认false:发起页面不隐藏合同类型展示

 * @method boolean getHideShowDeadline() 获取发起页面隐藏合同截止日期展示
<br/>true:发起页面隐藏合同截止日期展示
<br/>false:发起页面不隐藏合同截止日期展示
<br/>默认false:发起页面不隐藏合同截止日期展示
 * @method void setHideShowDeadline(boolean $HideShowDeadline) 设置发起页面隐藏合同截止日期展示
<br/>true:发起页面隐藏合同截止日期展示
<br/>false:发起页面不隐藏合同截止日期展示
<br/>默认false:发起页面不隐藏合同截止日期展示
 * @method boolean getCanSkipAddApprover() 获取发起页面允许跳过添加签署人环节
<br/>true:发起页面允许跳过添加签署人环节
<br/>false:发起页面不允许跳过添加签署人环节
<br/>默认false:发起页面不允许跳过添加签署人环节

 * @method void setCanSkipAddApprover(boolean $CanSkipAddApprover) 设置发起页面允许跳过添加签署人环节
<br/>true:发起页面允许跳过添加签署人环节
<br/>false:发起页面不允许跳过添加签署人环节
<br/>默认false:发起页面不允许跳过添加签署人环节

 * @method boolean getSkipUploadFile() 获取文件发起页面跳过文件上传步骤
<br/>true:文件发起页面跳过文件上传步骤
<br/>false:文件发起页面不跳过文件上传步骤
<br/>默认false:文件发起页面不跳过文件上传步骤
 * @method void setSkipUploadFile(boolean $SkipUploadFile) 设置文件发起页面跳过文件上传步骤
<br/>true:文件发起页面跳过文件上传步骤
<br/>false:文件发起页面不跳过文件上传步骤
<br/>默认false:文件发起页面不跳过文件上传步骤
 * @method boolean getForbidEditFillComponent() 获取禁止编辑填写控件
<br/>true:禁止编辑填写控件
<br/>false:允许编辑填写控件
<br/>默认false:允许编辑填写控件
 * @method void setForbidEditFillComponent(boolean $ForbidEditFillComponent) 设置禁止编辑填写控件
<br/>true:禁止编辑填写控件
<br/>false:允许编辑填写控件
<br/>默认false:允许编辑填写控件
 * @method string getCustomCreateFlowDescription() 获取定制化发起合同弹窗的描述信息，描述信息最长500

 * @method void setCustomCreateFlowDescription(string $CustomCreateFlowDescription) 设置定制化发起合同弹窗的描述信息，描述信息最长500
 */
class CreateFlowOption extends AbstractModel
{
    /**
     * @var boolean 是否允许修改发起合同时确认弹窗的合同信息（合同名称、合同类型、签署截止时间），若不允许编辑，则表单字段将被禁止输入。
<br/>true：允许编辑（默认），<br/>false：不允许编辑<br/>默认：false：不允许编辑
     */
    public $CanEditFlow;

    /**
     * @var boolean 是否允许编辑模版控件
<br/>true:允许编辑模版控件信息
<br/>false:不允许编辑模版控件信息
<br/>默认false:不允许编辑模版控件信息
     */
    public $CanEditFormField;

    /**
     * @var boolean 发起页面隐藏合同名称展示
<br/>true:发起页面隐藏合同名称展示
<br/>false:发起页面不隐藏合同名称展示
<br/>默认false:发起页面不隐藏合同名称展示
     */
    public $HideShowFlowName;

    /**
     * @var boolean 发起页面隐藏合同类型展示
<br/>true:发起页面隐藏合同类型展示
<br/>false:发起页面不隐藏合同类型展示
<br/>默认false:发起页面不隐藏合同类型展示

     */
    public $HideShowFlowType;

    /**
     * @var boolean 发起页面隐藏合同截止日期展示
<br/>true:发起页面隐藏合同截止日期展示
<br/>false:发起页面不隐藏合同截止日期展示
<br/>默认false:发起页面不隐藏合同截止日期展示
     */
    public $HideShowDeadline;

    /**
     * @var boolean 发起页面允许跳过添加签署人环节
<br/>true:发起页面允许跳过添加签署人环节
<br/>false:发起页面不允许跳过添加签署人环节
<br/>默认false:发起页面不允许跳过添加签署人环节

     */
    public $CanSkipAddApprover;

    /**
     * @var boolean 文件发起页面跳过文件上传步骤
<br/>true:文件发起页面跳过文件上传步骤
<br/>false:文件发起页面不跳过文件上传步骤
<br/>默认false:文件发起页面不跳过文件上传步骤
     */
    public $SkipUploadFile;

    /**
     * @var boolean 禁止编辑填写控件
<br/>true:禁止编辑填写控件
<br/>false:允许编辑填写控件
<br/>默认false:允许编辑填写控件
     */
    public $ForbidEditFillComponent;

    /**
     * @var string 定制化发起合同弹窗的描述信息，描述信息最长500

     */
    public $CustomCreateFlowDescription;

    /**
     * @param boolean $CanEditFlow 是否允许修改发起合同时确认弹窗的合同信息（合同名称、合同类型、签署截止时间），若不允许编辑，则表单字段将被禁止输入。
<br/>true：允许编辑（默认），<br/>false：不允许编辑<br/>默认：false：不允许编辑
     * @param boolean $CanEditFormField 是否允许编辑模版控件
<br/>true:允许编辑模版控件信息
<br/>false:不允许编辑模版控件信息
<br/>默认false:不允许编辑模版控件信息
     * @param boolean $HideShowFlowName 发起页面隐藏合同名称展示
<br/>true:发起页面隐藏合同名称展示
<br/>false:发起页面不隐藏合同名称展示
<br/>默认false:发起页面不隐藏合同名称展示
     * @param boolean $HideShowFlowType 发起页面隐藏合同类型展示
<br/>true:发起页面隐藏合同类型展示
<br/>false:发起页面不隐藏合同类型展示
<br/>默认false:发起页面不隐藏合同类型展示

     * @param boolean $HideShowDeadline 发起页面隐藏合同截止日期展示
<br/>true:发起页面隐藏合同截止日期展示
<br/>false:发起页面不隐藏合同截止日期展示
<br/>默认false:发起页面不隐藏合同截止日期展示
     * @param boolean $CanSkipAddApprover 发起页面允许跳过添加签署人环节
<br/>true:发起页面允许跳过添加签署人环节
<br/>false:发起页面不允许跳过添加签署人环节
<br/>默认false:发起页面不允许跳过添加签署人环节

     * @param boolean $SkipUploadFile 文件发起页面跳过文件上传步骤
<br/>true:文件发起页面跳过文件上传步骤
<br/>false:文件发起页面不跳过文件上传步骤
<br/>默认false:文件发起页面不跳过文件上传步骤
     * @param boolean $ForbidEditFillComponent 禁止编辑填写控件
<br/>true:禁止编辑填写控件
<br/>false:允许编辑填写控件
<br/>默认false:允许编辑填写控件
     * @param string $CustomCreateFlowDescription 定制化发起合同弹窗的描述信息，描述信息最长500
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
        if (array_key_exists("CanEditFlow",$param) and $param["CanEditFlow"] !== null) {
            $this->CanEditFlow = $param["CanEditFlow"];
        }

        if (array_key_exists("CanEditFormField",$param) and $param["CanEditFormField"] !== null) {
            $this->CanEditFormField = $param["CanEditFormField"];
        }

        if (array_key_exists("HideShowFlowName",$param) and $param["HideShowFlowName"] !== null) {
            $this->HideShowFlowName = $param["HideShowFlowName"];
        }

        if (array_key_exists("HideShowFlowType",$param) and $param["HideShowFlowType"] !== null) {
            $this->HideShowFlowType = $param["HideShowFlowType"];
        }

        if (array_key_exists("HideShowDeadline",$param) and $param["HideShowDeadline"] !== null) {
            $this->HideShowDeadline = $param["HideShowDeadline"];
        }

        if (array_key_exists("CanSkipAddApprover",$param) and $param["CanSkipAddApprover"] !== null) {
            $this->CanSkipAddApprover = $param["CanSkipAddApprover"];
        }

        if (array_key_exists("SkipUploadFile",$param) and $param["SkipUploadFile"] !== null) {
            $this->SkipUploadFile = $param["SkipUploadFile"];
        }

        if (array_key_exists("ForbidEditFillComponent",$param) and $param["ForbidEditFillComponent"] !== null) {
            $this->ForbidEditFillComponent = $param["ForbidEditFillComponent"];
        }

        if (array_key_exists("CustomCreateFlowDescription",$param) and $param["CustomCreateFlowDescription"] !== null) {
            $this->CustomCreateFlowDescription = $param["CustomCreateFlowDescription"];
        }
    }
}
