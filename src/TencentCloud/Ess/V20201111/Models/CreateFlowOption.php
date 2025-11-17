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
 * 创建合同个性化参数
 *
 * @method boolean getCanEditFlow() 获取是否允许修改发起合同时确认弹窗的合同信息（合同名称、合同类型、签署截止时间），若不允许编辑，则表单字段将被禁止输入。
<br/>true：允许编辑<br/>false：不允许编辑（默认值）<br/>
 * @method void setCanEditFlow(boolean $CanEditFlow) 设置是否允许修改发起合同时确认弹窗的合同信息（合同名称、合同类型、签署截止时间），若不允许编辑，则表单字段将被禁止输入。
<br/>true：允许编辑<br/>false：不允许编辑（默认值）<br/>
 * @method boolean getCanEditFormField() 获取是否允许编辑模板控件
<br/>true:允许编辑模板控件信息
<br/>false:不允许编辑模板控件信息（默认值）
<br/>
 * @method void setCanEditFormField(boolean $CanEditFormField) 设置是否允许编辑模板控件
<br/>true:允许编辑模板控件信息
<br/>false:不允许编辑模板控件信息（默认值）
<br/>
 * @method boolean getHideShowFlowName() 获取发起页面隐藏合同名称展示
<br/>true:发起页面隐藏合同名称展示
<br/>false:发起页面不隐藏合同名称展示（默认值）
<br/>
 * @method void setHideShowFlowName(boolean $HideShowFlowName) 设置发起页面隐藏合同名称展示
<br/>true:发起页面隐藏合同名称展示
<br/>false:发起页面不隐藏合同名称展示（默认值）
<br/>
 * @method boolean getHideShowFlowType() 获取发起页面隐藏合同类型展示
<br/>true:发起页面隐藏合同类型展示
<br/>false:发起页面不隐藏合同类型展示（默认值）
<br/>

 * @method void setHideShowFlowType(boolean $HideShowFlowType) 设置发起页面隐藏合同类型展示
<br/>true:发起页面隐藏合同类型展示
<br/>false:发起页面不隐藏合同类型展示（默认值）
<br/>

 * @method boolean getHideShowDeadline() 获取发起页面隐藏合同截止日期展示
<br/>true:发起页面隐藏合同截止日期展示
<br/>false:发起页面不隐藏合同截止日期展示（默认值）
<br/>
 * @method void setHideShowDeadline(boolean $HideShowDeadline) 设置发起页面隐藏合同截止日期展示
<br/>true:发起页面隐藏合同截止日期展示
<br/>false:发起页面不隐藏合同截止日期展示（默认值）
<br/>
 * @method boolean getCanSkipAddApprover() 获取发起页面允许跳过添加签署人环节
<br/>true:发起页面允许跳过添加签署人环节
<br/>false:发起页面不允许跳过添加签署人环节（默认值）
<br/>

 * @method void setCanSkipAddApprover(boolean $CanSkipAddApprover) 设置发起页面允许跳过添加签署人环节
<br/>true:发起页面允许跳过添加签署人环节
<br/>false:发起页面不允许跳过添加签署人环节（默认值）
<br/>

 * @method boolean getSkipUploadFile() 获取文件发起页面跳过文件上传步骤
<br/>true:文件发起页面跳过文件上传步骤
<br/>false:文件发起页面不跳过文件上传步骤（默认值）
<br/>
 * @method void setSkipUploadFile(boolean $SkipUploadFile) 设置文件发起页面跳过文件上传步骤
<br/>true:文件发起页面跳过文件上传步骤
<br/>false:文件发起页面不跳过文件上传步骤（默认值）
<br/>
 * @method boolean getForbidEditFillComponent() 获取禁止编辑填写控件
<br/>true:禁止编辑填写控件
<br/>false:允许编辑填写控件（默认值）
<br/>
 * @method void setForbidEditFillComponent(boolean $ForbidEditFillComponent) 设置禁止编辑填写控件
<br/>true:禁止编辑填写控件
<br/>false:允许编辑填写控件（默认值）
<br/>
 * @method string getCustomCreateFlowDescription() 获取定制化发起合同弹窗的描述信息，描述信息最长500字符

 * @method void setCustomCreateFlowDescription(string $CustomCreateFlowDescription) 设置定制化发起合同弹窗的描述信息，描述信息最长500字符

 * @method boolean getForbidAddApprover() 获取 禁止添加签署方，若为true则在发起流程的可嵌入页面隐藏“添加签署人按钮”

 * @method void setForbidAddApprover(boolean $ForbidAddApprover) 设置 禁止添加签署方，若为true则在发起流程的可嵌入页面隐藏“添加签署人按钮”

 * @method boolean getForbidEditApprover() 获取是否可以编辑签署人包括新增，修改，删除 
<ul><li>（默认） false -可以编辑签署人</li> <li> true - 禁止编辑签署人</li></ul>

注意：如果设置参数为  true， 则 参数签署人 [FlowApproverList](https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlow) 不能为空
 * @method void setForbidEditApprover(boolean $ForbidEditApprover) 设置是否可以编辑签署人包括新增，修改，删除 
<ul><li>（默认） false -可以编辑签署人</li> <li> true - 禁止编辑签署人</li></ul>

注意：如果设置参数为  true， 则 参数签署人 [FlowApproverList](https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlow) 不能为空
 * @method boolean getForbidEditFlowProperties() 获取  禁止设置签署流程属性 (顺序、合同签署认证方式等)，若为true则在发起流程的可嵌入页面隐藏签署流程设置面板

 * @method void setForbidEditFlowProperties(boolean $ForbidEditFlowProperties) 设置  禁止设置签署流程属性 (顺序、合同签署认证方式等)，若为true则在发起流程的可嵌入页面隐藏签署流程设置面板

 * @method array getHideComponentTypes() 获取在发起流程的可嵌入页面要隐藏的控件列表，和 ShowComponentTypes 参数 只能二选一使用（注: 
<font color='red'>空数组代表未指定</font>），具体的控件类型如下

<ul><li>SIGN_SIGNATURE : 个人签名/印章</li>
<li>SIGN_SEAL : 企业印章</li>
<li>SIGN_PAGING_SEAL : 骑缝章</li>
<li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li>
<li>SIGN_APPROVE : 签批</li>
<li>SIGN_OPINION : 签署意见</li>
<li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li>
<li>BUSI-FULL-NAME  : 企业全称</li>
<li>BUSI-CREDIT-CODE : 统一社会信用代码</li>
<li>BUSI-LEGAL-NAME : 法人/经营者姓名</li>
<li>PERSONAL-NAME : 签署人姓名</li>
<li>PERSONAL-MOBILE : 签署人手机号</li>
<li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li>
<li>PERSONAL-IDCARD : 签署人证件号</li>
<li>TEXT : 单行文本</li>
<li>MULTI_LINE_TEXT : 多行文本</li>
<li>CHECK_BOX : 勾选框</li>
<li>SELECTOR : 选择器</li>
<li>DIGIT : 数字</li>
<li>DATE : 日期</li>
<li>FILL_IMAGE : 图片</li>
<li>ATTACHMENT : 附件</li>
<li>EMAIL : 邮箱</li>
<li>LOCATION : 地址</li>
<li>EDUCATION : 学历</li>
<li>GENDER : 性别</li>
<li>DISTRICT : 省市区</li></ul>
 * @method void setHideComponentTypes(array $HideComponentTypes) 设置在发起流程的可嵌入页面要隐藏的控件列表，和 ShowComponentTypes 参数 只能二选一使用（注: 
<font color='red'>空数组代表未指定</font>），具体的控件类型如下

<ul><li>SIGN_SIGNATURE : 个人签名/印章</li>
<li>SIGN_SEAL : 企业印章</li>
<li>SIGN_PAGING_SEAL : 骑缝章</li>
<li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li>
<li>SIGN_APPROVE : 签批</li>
<li>SIGN_OPINION : 签署意见</li>
<li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li>
<li>BUSI-FULL-NAME  : 企业全称</li>
<li>BUSI-CREDIT-CODE : 统一社会信用代码</li>
<li>BUSI-LEGAL-NAME : 法人/经营者姓名</li>
<li>PERSONAL-NAME : 签署人姓名</li>
<li>PERSONAL-MOBILE : 签署人手机号</li>
<li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li>
<li>PERSONAL-IDCARD : 签署人证件号</li>
<li>TEXT : 单行文本</li>
<li>MULTI_LINE_TEXT : 多行文本</li>
<li>CHECK_BOX : 勾选框</li>
<li>SELECTOR : 选择器</li>
<li>DIGIT : 数字</li>
<li>DATE : 日期</li>
<li>FILL_IMAGE : 图片</li>
<li>ATTACHMENT : 附件</li>
<li>EMAIL : 邮箱</li>
<li>LOCATION : 地址</li>
<li>EDUCATION : 学历</li>
<li>GENDER : 性别</li>
<li>DISTRICT : 省市区</li></ul>
 * @method array getShowComponentTypes() 获取在发起流程的可嵌入页面要显示的控件列表，和 HideComponentTypes 参数 只能二选一使用（注: 
<font color='red'>空数组代表未指定</font>），具体的控件类型如下
<ul><li>SIGN_SIGNATURE : 个人签名/印章</li>
<li>SIGN_SEAL : 企业印章</li>
<li>SIGN_PAGING_SEAL : 骑缝章</li>
<li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li>
<li>SIGN_APPROVE : 签批</li>
<li>SIGN_OPINION : 签署意见</li>
<li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li>
<li>BUSI-FULL-NAME  : 企业全称</li>
<li>BUSI-CREDIT-CODE : 统一社会信用代码</li>
<li>BUSI-LEGAL-NAME : 法人/经营者姓名</li>
<li>PERSONAL-NAME : 签署人姓名</li>
<li>PERSONAL-MOBILE : 签署人手机号</li>
<li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li>
<li>PERSONAL-IDCARD : 签署人证件号</li>
<li>TEXT : 单行文本</li>
<li>MULTI_LINE_TEXT : 多行文本</li>
<li>CHECK_BOX : 勾选框</li>
<li>SELECTOR : 选择器</li>
<li>DIGIT : 数字</li>
<li>DATE : 日期</li>
<li>FILL_IMAGE : 图片</li>
<li>ATTACHMENT : 附件</li>
<li>EMAIL : 邮箱</li>
<li>LOCATION : 地址</li>
<li>EDUCATION : 学历</li>
<li>GENDER : 性别</li>
<li>DISTRICT : 省市区</li></ul>
 * @method void setShowComponentTypes(array $ShowComponentTypes) 设置在发起流程的可嵌入页面要显示的控件列表，和 HideComponentTypes 参数 只能二选一使用（注: 
<font color='red'>空数组代表未指定</font>），具体的控件类型如下
<ul><li>SIGN_SIGNATURE : 个人签名/印章</li>
<li>SIGN_SEAL : 企业印章</li>
<li>SIGN_PAGING_SEAL : 骑缝章</li>
<li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li>
<li>SIGN_APPROVE : 签批</li>
<li>SIGN_OPINION : 签署意见</li>
<li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li>
<li>BUSI-FULL-NAME  : 企业全称</li>
<li>BUSI-CREDIT-CODE : 统一社会信用代码</li>
<li>BUSI-LEGAL-NAME : 法人/经营者姓名</li>
<li>PERSONAL-NAME : 签署人姓名</li>
<li>PERSONAL-MOBILE : 签署人手机号</li>
<li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li>
<li>PERSONAL-IDCARD : 签署人证件号</li>
<li>TEXT : 单行文本</li>
<li>MULTI_LINE_TEXT : 多行文本</li>
<li>CHECK_BOX : 勾选框</li>
<li>SELECTOR : 选择器</li>
<li>DIGIT : 数字</li>
<li>DATE : 日期</li>
<li>FILL_IMAGE : 图片</li>
<li>ATTACHMENT : 附件</li>
<li>EMAIL : 邮箱</li>
<li>LOCATION : 地址</li>
<li>EDUCATION : 学历</li>
<li>GENDER : 性别</li>
<li>DISTRICT : 省市区</li></ul>
 * @method array getResultPageConfig() 获取发起流程的可嵌入页面结果页配置
 * @method void setResultPageConfig(array $ResultPageConfig) 设置发起流程的可嵌入页面结果页配置
 * @method SignComponentConfig getSignComponentConfig() 获取签署控件的配置信息，用在嵌入式发起的页面配置，包括 
 - 签署控件 是否默认展示日期.
 * @method void setSignComponentConfig(SignComponentConfig $SignComponentConfig) 设置签署控件的配置信息，用在嵌入式发起的页面配置，包括 
 - 签署控件 是否默认展示日期.
 * @method boolean getForbidEditWatermark() 获取是否禁止编辑（展示）水印控件属性
<ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>
 * @method void setForbidEditWatermark(boolean $ForbidEditWatermark) 设置是否禁止编辑（展示）水印控件属性
<ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>
 * @method array getHideOperationInstructions() 获取隐藏操作指引: 具体的控件类型如下

<ul><li>1 : 操作指引入口</li>
<li>2 : 操作文档</li>
<li>3 : 操作视频</li>
</ul>
注：仅对新版页面生效
 * @method void setHideOperationInstructions(array $HideOperationInstructions) 设置隐藏操作指引: 具体的控件类型如下

<ul><li>1 : 操作指引入口</li>
<li>2 : 操作文档</li>
<li>3 : 操作视频</li>
</ul>
注：仅对新版页面生效
 * @method array getHideOperationSteps() 获取隐藏操作步骤: 具体的控件类型如下

<ul><li>1 : 选择文件及签署方</li>
<li>2 : 补充文件内容</li>
<li>4 : 发起前合同信息与设置确认</li>
</ul>
注：仅对新版页面生效
 * @method void setHideOperationSteps(array $HideOperationSteps) 设置隐藏操作步骤: 具体的控件类型如下

<ul><li>1 : 选择文件及签署方</li>
<li>2 : 补充文件内容</li>
<li>4 : 发起前合同信息与设置确认</li>
</ul>
注：仅对新版页面生效
 * @method string getSelfName() 获取本企业简称，注：仅对新版页面生效
 * @method void setSelfName(string $SelfName) 设置本企业简称，注：仅对新版页面生效
 * @method boolean getHideSignCodeAfterStart() 获取发起后签署码隐藏，默认false，注：仅对新版页面生效
 * @method void setHideSignCodeAfterStart(boolean $HideSignCodeAfterStart) 设置发起后签署码隐藏，默认false，注：仅对新版页面生效
 * @method boolean getPreviewAfterStart() 获取发起成功后是否预览合同 <ul><li>（默认） false -否</li> <li> true - 展示预览按钮</li></ul>	
 * @method void setPreviewAfterStart(boolean $PreviewAfterStart) 设置发起成功后是否预览合同 <ul><li>（默认） false -否</li> <li> true - 展示预览按钮</li></ul>	
 * @method boolean getSignAfterStart() 获取发起成功之后是否签署合同，仅当前经办人作为签署人时生效 <ul><li>（默认） false -否</li> <li> true - 展示签署按钮</li></ul>	
 * @method void setSignAfterStart(boolean $SignAfterStart) 设置发起成功之后是否签署合同，仅当前经办人作为签署人时生效 <ul><li>（默认） false -否</li> <li> true - 展示签署按钮</li></ul>	
 */
class CreateFlowOption extends AbstractModel
{
    /**
     * @var boolean 是否允许修改发起合同时确认弹窗的合同信息（合同名称、合同类型、签署截止时间），若不允许编辑，则表单字段将被禁止输入。
<br/>true：允许编辑<br/>false：不允许编辑（默认值）<br/>
     */
    public $CanEditFlow;

    /**
     * @var boolean 是否允许编辑模板控件
<br/>true:允许编辑模板控件信息
<br/>false:不允许编辑模板控件信息（默认值）
<br/>
     */
    public $CanEditFormField;

    /**
     * @var boolean 发起页面隐藏合同名称展示
<br/>true:发起页面隐藏合同名称展示
<br/>false:发起页面不隐藏合同名称展示（默认值）
<br/>
     */
    public $HideShowFlowName;

    /**
     * @var boolean 发起页面隐藏合同类型展示
<br/>true:发起页面隐藏合同类型展示
<br/>false:发起页面不隐藏合同类型展示（默认值）
<br/>

     */
    public $HideShowFlowType;

    /**
     * @var boolean 发起页面隐藏合同截止日期展示
<br/>true:发起页面隐藏合同截止日期展示
<br/>false:发起页面不隐藏合同截止日期展示（默认值）
<br/>
     */
    public $HideShowDeadline;

    /**
     * @var boolean 发起页面允许跳过添加签署人环节
<br/>true:发起页面允许跳过添加签署人环节
<br/>false:发起页面不允许跳过添加签署人环节（默认值）
<br/>

     */
    public $CanSkipAddApprover;

    /**
     * @var boolean 文件发起页面跳过文件上传步骤
<br/>true:文件发起页面跳过文件上传步骤
<br/>false:文件发起页面不跳过文件上传步骤（默认值）
<br/>
     */
    public $SkipUploadFile;

    /**
     * @var boolean 禁止编辑填写控件
<br/>true:禁止编辑填写控件
<br/>false:允许编辑填写控件（默认值）
<br/>
     */
    public $ForbidEditFillComponent;

    /**
     * @var string 定制化发起合同弹窗的描述信息，描述信息最长500字符

     */
    public $CustomCreateFlowDescription;

    /**
     * @var boolean  禁止添加签署方，若为true则在发起流程的可嵌入页面隐藏“添加签署人按钮”

     */
    public $ForbidAddApprover;

    /**
     * @var boolean 是否可以编辑签署人包括新增，修改，删除 
<ul><li>（默认） false -可以编辑签署人</li> <li> true - 禁止编辑签署人</li></ul>

注意：如果设置参数为  true， 则 参数签署人 [FlowApproverList](https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlow) 不能为空
     */
    public $ForbidEditApprover;

    /**
     * @var boolean   禁止设置签署流程属性 (顺序、合同签署认证方式等)，若为true则在发起流程的可嵌入页面隐藏签署流程设置面板

     */
    public $ForbidEditFlowProperties;

    /**
     * @var array 在发起流程的可嵌入页面要隐藏的控件列表，和 ShowComponentTypes 参数 只能二选一使用（注: 
<font color='red'>空数组代表未指定</font>），具体的控件类型如下

<ul><li>SIGN_SIGNATURE : 个人签名/印章</li>
<li>SIGN_SEAL : 企业印章</li>
<li>SIGN_PAGING_SEAL : 骑缝章</li>
<li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li>
<li>SIGN_APPROVE : 签批</li>
<li>SIGN_OPINION : 签署意见</li>
<li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li>
<li>BUSI-FULL-NAME  : 企业全称</li>
<li>BUSI-CREDIT-CODE : 统一社会信用代码</li>
<li>BUSI-LEGAL-NAME : 法人/经营者姓名</li>
<li>PERSONAL-NAME : 签署人姓名</li>
<li>PERSONAL-MOBILE : 签署人手机号</li>
<li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li>
<li>PERSONAL-IDCARD : 签署人证件号</li>
<li>TEXT : 单行文本</li>
<li>MULTI_LINE_TEXT : 多行文本</li>
<li>CHECK_BOX : 勾选框</li>
<li>SELECTOR : 选择器</li>
<li>DIGIT : 数字</li>
<li>DATE : 日期</li>
<li>FILL_IMAGE : 图片</li>
<li>ATTACHMENT : 附件</li>
<li>EMAIL : 邮箱</li>
<li>LOCATION : 地址</li>
<li>EDUCATION : 学历</li>
<li>GENDER : 性别</li>
<li>DISTRICT : 省市区</li></ul>
     */
    public $HideComponentTypes;

    /**
     * @var array 在发起流程的可嵌入页面要显示的控件列表，和 HideComponentTypes 参数 只能二选一使用（注: 
<font color='red'>空数组代表未指定</font>），具体的控件类型如下
<ul><li>SIGN_SIGNATURE : 个人签名/印章</li>
<li>SIGN_SEAL : 企业印章</li>
<li>SIGN_PAGING_SEAL : 骑缝章</li>
<li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li>
<li>SIGN_APPROVE : 签批</li>
<li>SIGN_OPINION : 签署意见</li>
<li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li>
<li>BUSI-FULL-NAME  : 企业全称</li>
<li>BUSI-CREDIT-CODE : 统一社会信用代码</li>
<li>BUSI-LEGAL-NAME : 法人/经营者姓名</li>
<li>PERSONAL-NAME : 签署人姓名</li>
<li>PERSONAL-MOBILE : 签署人手机号</li>
<li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li>
<li>PERSONAL-IDCARD : 签署人证件号</li>
<li>TEXT : 单行文本</li>
<li>MULTI_LINE_TEXT : 多行文本</li>
<li>CHECK_BOX : 勾选框</li>
<li>SELECTOR : 选择器</li>
<li>DIGIT : 数字</li>
<li>DATE : 日期</li>
<li>FILL_IMAGE : 图片</li>
<li>ATTACHMENT : 附件</li>
<li>EMAIL : 邮箱</li>
<li>LOCATION : 地址</li>
<li>EDUCATION : 学历</li>
<li>GENDER : 性别</li>
<li>DISTRICT : 省市区</li></ul>
     */
    public $ShowComponentTypes;

    /**
     * @var array 发起流程的可嵌入页面结果页配置
     */
    public $ResultPageConfig;

    /**
     * @var SignComponentConfig 签署控件的配置信息，用在嵌入式发起的页面配置，包括 
 - 签署控件 是否默认展示日期.
     */
    public $SignComponentConfig;

    /**
     * @var boolean 是否禁止编辑（展示）水印控件属性
<ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>
     */
    public $ForbidEditWatermark;

    /**
     * @var array 隐藏操作指引: 具体的控件类型如下

<ul><li>1 : 操作指引入口</li>
<li>2 : 操作文档</li>
<li>3 : 操作视频</li>
</ul>
注：仅对新版页面生效
     * @deprecated
     */
    public $HideOperationInstructions;

    /**
     * @var array 隐藏操作步骤: 具体的控件类型如下

<ul><li>1 : 选择文件及签署方</li>
<li>2 : 补充文件内容</li>
<li>4 : 发起前合同信息与设置确认</li>
</ul>
注：仅对新版页面生效
     */
    public $HideOperationSteps;

    /**
     * @var string 本企业简称，注：仅对新版页面生效
     */
    public $SelfName;

    /**
     * @var boolean 发起后签署码隐藏，默认false，注：仅对新版页面生效
     */
    public $HideSignCodeAfterStart;

    /**
     * @var boolean 发起成功后是否预览合同 <ul><li>（默认） false -否</li> <li> true - 展示预览按钮</li></ul>	
     */
    public $PreviewAfterStart;

    /**
     * @var boolean 发起成功之后是否签署合同，仅当前经办人作为签署人时生效 <ul><li>（默认） false -否</li> <li> true - 展示签署按钮</li></ul>	
     */
    public $SignAfterStart;

    /**
     * @param boolean $CanEditFlow 是否允许修改发起合同时确认弹窗的合同信息（合同名称、合同类型、签署截止时间），若不允许编辑，则表单字段将被禁止输入。
<br/>true：允许编辑<br/>false：不允许编辑（默认值）<br/>
     * @param boolean $CanEditFormField 是否允许编辑模板控件
<br/>true:允许编辑模板控件信息
<br/>false:不允许编辑模板控件信息（默认值）
<br/>
     * @param boolean $HideShowFlowName 发起页面隐藏合同名称展示
<br/>true:发起页面隐藏合同名称展示
<br/>false:发起页面不隐藏合同名称展示（默认值）
<br/>
     * @param boolean $HideShowFlowType 发起页面隐藏合同类型展示
<br/>true:发起页面隐藏合同类型展示
<br/>false:发起页面不隐藏合同类型展示（默认值）
<br/>

     * @param boolean $HideShowDeadline 发起页面隐藏合同截止日期展示
<br/>true:发起页面隐藏合同截止日期展示
<br/>false:发起页面不隐藏合同截止日期展示（默认值）
<br/>
     * @param boolean $CanSkipAddApprover 发起页面允许跳过添加签署人环节
<br/>true:发起页面允许跳过添加签署人环节
<br/>false:发起页面不允许跳过添加签署人环节（默认值）
<br/>

     * @param boolean $SkipUploadFile 文件发起页面跳过文件上传步骤
<br/>true:文件发起页面跳过文件上传步骤
<br/>false:文件发起页面不跳过文件上传步骤（默认值）
<br/>
     * @param boolean $ForbidEditFillComponent 禁止编辑填写控件
<br/>true:禁止编辑填写控件
<br/>false:允许编辑填写控件（默认值）
<br/>
     * @param string $CustomCreateFlowDescription 定制化发起合同弹窗的描述信息，描述信息最长500字符

     * @param boolean $ForbidAddApprover  禁止添加签署方，若为true则在发起流程的可嵌入页面隐藏“添加签署人按钮”

     * @param boolean $ForbidEditApprover 是否可以编辑签署人包括新增，修改，删除 
<ul><li>（默认） false -可以编辑签署人</li> <li> true - 禁止编辑签署人</li></ul>

注意：如果设置参数为  true， 则 参数签署人 [FlowApproverList](https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlow) 不能为空
     * @param boolean $ForbidEditFlowProperties   禁止设置签署流程属性 (顺序、合同签署认证方式等)，若为true则在发起流程的可嵌入页面隐藏签署流程设置面板

     * @param array $HideComponentTypes 在发起流程的可嵌入页面要隐藏的控件列表，和 ShowComponentTypes 参数 只能二选一使用（注: 
<font color='red'>空数组代表未指定</font>），具体的控件类型如下

<ul><li>SIGN_SIGNATURE : 个人签名/印章</li>
<li>SIGN_SEAL : 企业印章</li>
<li>SIGN_PAGING_SEAL : 骑缝章</li>
<li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li>
<li>SIGN_APPROVE : 签批</li>
<li>SIGN_OPINION : 签署意见</li>
<li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li>
<li>BUSI-FULL-NAME  : 企业全称</li>
<li>BUSI-CREDIT-CODE : 统一社会信用代码</li>
<li>BUSI-LEGAL-NAME : 法人/经营者姓名</li>
<li>PERSONAL-NAME : 签署人姓名</li>
<li>PERSONAL-MOBILE : 签署人手机号</li>
<li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li>
<li>PERSONAL-IDCARD : 签署人证件号</li>
<li>TEXT : 单行文本</li>
<li>MULTI_LINE_TEXT : 多行文本</li>
<li>CHECK_BOX : 勾选框</li>
<li>SELECTOR : 选择器</li>
<li>DIGIT : 数字</li>
<li>DATE : 日期</li>
<li>FILL_IMAGE : 图片</li>
<li>ATTACHMENT : 附件</li>
<li>EMAIL : 邮箱</li>
<li>LOCATION : 地址</li>
<li>EDUCATION : 学历</li>
<li>GENDER : 性别</li>
<li>DISTRICT : 省市区</li></ul>
     * @param array $ShowComponentTypes 在发起流程的可嵌入页面要显示的控件列表，和 HideComponentTypes 参数 只能二选一使用（注: 
<font color='red'>空数组代表未指定</font>），具体的控件类型如下
<ul><li>SIGN_SIGNATURE : 个人签名/印章</li>
<li>SIGN_SEAL : 企业印章</li>
<li>SIGN_PAGING_SEAL : 骑缝章</li>
<li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li>
<li>SIGN_APPROVE : 签批</li>
<li>SIGN_OPINION : 签署意见</li>
<li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li>
<li>BUSI-FULL-NAME  : 企业全称</li>
<li>BUSI-CREDIT-CODE : 统一社会信用代码</li>
<li>BUSI-LEGAL-NAME : 法人/经营者姓名</li>
<li>PERSONAL-NAME : 签署人姓名</li>
<li>PERSONAL-MOBILE : 签署人手机号</li>
<li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li>
<li>PERSONAL-IDCARD : 签署人证件号</li>
<li>TEXT : 单行文本</li>
<li>MULTI_LINE_TEXT : 多行文本</li>
<li>CHECK_BOX : 勾选框</li>
<li>SELECTOR : 选择器</li>
<li>DIGIT : 数字</li>
<li>DATE : 日期</li>
<li>FILL_IMAGE : 图片</li>
<li>ATTACHMENT : 附件</li>
<li>EMAIL : 邮箱</li>
<li>LOCATION : 地址</li>
<li>EDUCATION : 学历</li>
<li>GENDER : 性别</li>
<li>DISTRICT : 省市区</li></ul>
     * @param array $ResultPageConfig 发起流程的可嵌入页面结果页配置
     * @param SignComponentConfig $SignComponentConfig 签署控件的配置信息，用在嵌入式发起的页面配置，包括 
 - 签署控件 是否默认展示日期.
     * @param boolean $ForbidEditWatermark 是否禁止编辑（展示）水印控件属性
<ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>
     * @param array $HideOperationInstructions 隐藏操作指引: 具体的控件类型如下

<ul><li>1 : 操作指引入口</li>
<li>2 : 操作文档</li>
<li>3 : 操作视频</li>
</ul>
注：仅对新版页面生效
     * @param array $HideOperationSteps 隐藏操作步骤: 具体的控件类型如下

<ul><li>1 : 选择文件及签署方</li>
<li>2 : 补充文件内容</li>
<li>4 : 发起前合同信息与设置确认</li>
</ul>
注：仅对新版页面生效
     * @param string $SelfName 本企业简称，注：仅对新版页面生效
     * @param boolean $HideSignCodeAfterStart 发起后签署码隐藏，默认false，注：仅对新版页面生效
     * @param boolean $PreviewAfterStart 发起成功后是否预览合同 <ul><li>（默认） false -否</li> <li> true - 展示预览按钮</li></ul>	
     * @param boolean $SignAfterStart 发起成功之后是否签署合同，仅当前经办人作为签署人时生效 <ul><li>（默认） false -否</li> <li> true - 展示签署按钮</li></ul>	
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

        if (array_key_exists("ForbidAddApprover",$param) and $param["ForbidAddApprover"] !== null) {
            $this->ForbidAddApprover = $param["ForbidAddApprover"];
        }

        if (array_key_exists("ForbidEditApprover",$param) and $param["ForbidEditApprover"] !== null) {
            $this->ForbidEditApprover = $param["ForbidEditApprover"];
        }

        if (array_key_exists("ForbidEditFlowProperties",$param) and $param["ForbidEditFlowProperties"] !== null) {
            $this->ForbidEditFlowProperties = $param["ForbidEditFlowProperties"];
        }

        if (array_key_exists("HideComponentTypes",$param) and $param["HideComponentTypes"] !== null) {
            $this->HideComponentTypes = $param["HideComponentTypes"];
        }

        if (array_key_exists("ShowComponentTypes",$param) and $param["ShowComponentTypes"] !== null) {
            $this->ShowComponentTypes = $param["ShowComponentTypes"];
        }

        if (array_key_exists("ResultPageConfig",$param) and $param["ResultPageConfig"] !== null) {
            $this->ResultPageConfig = [];
            foreach ($param["ResultPageConfig"] as $key => $value){
                $obj = new CreateResultPageConfig();
                $obj->deserialize($value);
                array_push($this->ResultPageConfig, $obj);
            }
        }

        if (array_key_exists("SignComponentConfig",$param) and $param["SignComponentConfig"] !== null) {
            $this->SignComponentConfig = new SignComponentConfig();
            $this->SignComponentConfig->deserialize($param["SignComponentConfig"]);
        }

        if (array_key_exists("ForbidEditWatermark",$param) and $param["ForbidEditWatermark"] !== null) {
            $this->ForbidEditWatermark = $param["ForbidEditWatermark"];
        }

        if (array_key_exists("HideOperationInstructions",$param) and $param["HideOperationInstructions"] !== null) {
            $this->HideOperationInstructions = $param["HideOperationInstructions"];
        }

        if (array_key_exists("HideOperationSteps",$param) and $param["HideOperationSteps"] !== null) {
            $this->HideOperationSteps = $param["HideOperationSteps"];
        }

        if (array_key_exists("SelfName",$param) and $param["SelfName"] !== null) {
            $this->SelfName = $param["SelfName"];
        }

        if (array_key_exists("HideSignCodeAfterStart",$param) and $param["HideSignCodeAfterStart"] !== null) {
            $this->HideSignCodeAfterStart = $param["HideSignCodeAfterStart"];
        }

        if (array_key_exists("PreviewAfterStart",$param) and $param["PreviewAfterStart"] !== null) {
            $this->PreviewAfterStart = $param["PreviewAfterStart"];
        }

        if (array_key_exists("SignAfterStart",$param) and $param["SignAfterStart"] !== null) {
            $this->SignAfterStart = $param["SignAfterStart"];
        }
    }
}
