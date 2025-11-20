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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建合同个性化参数
 *
 * @method boolean getCanEditFlow() 获取是否允许修改合同信息，
**true**：可以
**false**：（默认）不可以
 * @method void setCanEditFlow(boolean $CanEditFlow) 设置是否允许修改合同信息，
**true**：可以
**false**：（默认）不可以
 * @method boolean getHideShowFlowName() 获取是否允许发起合同弹窗隐藏合同名称
**true**：允许
**false**：（默认）不允许
 * @method void setHideShowFlowName(boolean $HideShowFlowName) 设置是否允许发起合同弹窗隐藏合同名称
**true**：允许
**false**：（默认）不允许
 * @method boolean getHideShowFlowType() 获取是否允许发起合同弹窗隐藏合同类型，
**true**：允许
**false**：（默认）不允许
 * @method void setHideShowFlowType(boolean $HideShowFlowType) 设置是否允许发起合同弹窗隐藏合同类型，
**true**：允许
**false**：（默认）不允许
 * @method boolean getHideShowDeadline() 获取是否允许发起合同弹窗隐藏合同到期时间
**true**：允许
**false**：（默认）不允许
 * @method void setHideShowDeadline(boolean $HideShowDeadline) 设置是否允许发起合同弹窗隐藏合同到期时间
**true**：允许
**false**：（默认）不允许
 * @method boolean getCanSkipAddApprover() 获取是否允许发起合同步骤跳过指定签署方步骤
**true**：允许
**false**：（默认）不允许
 * @method void setCanSkipAddApprover(boolean $CanSkipAddApprover) 设置是否允许发起合同步骤跳过指定签署方步骤
**true**：允许
**false**：（默认）不允许
 * @method boolean getForbidEditApprover() 获取是否可以编辑签署人包括新增，修改，删除 
<ul><li>（默认） false -可以编辑签署人</li> <li> true - 禁止编辑签署人</li></ul>



注意：
* 如果设置参数为 true， 则 参数签署人 [FlowApproverList](https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlow) 不能为空
* 此参数对子客和自动签无效，不允许进行修改。
 * @method void setForbidEditApprover(boolean $ForbidEditApprover) 设置是否可以编辑签署人包括新增，修改，删除 
<ul><li>（默认） false -可以编辑签署人</li> <li> true - 禁止编辑签署人</li></ul>



注意：
* 如果设置参数为 true， 则 参数签署人 [FlowApproverList](https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlow) 不能为空
* 此参数对子客和自动签无效，不允许进行修改。
 * @method string getCustomCreateFlowDescription() 获取定制化发起合同弹窗的描述信息，长度不能超过500，只能由中文、字母、数字和标点组成。
 * @method void setCustomCreateFlowDescription(string $CustomCreateFlowDescription) 设置定制化发起合同弹窗的描述信息，长度不能超过500，只能由中文、字母、数字和标点组成。
 * @method boolean getForbidEditFillComponent() 获取禁止编辑填写控件

**true**：禁止编辑填写控件
**false**：（默认）允许编辑填写控件
 * @method void setForbidEditFillComponent(boolean $ForbidEditFillComponent) 设置禁止编辑填写控件

**true**：禁止编辑填写控件
**false**：（默认）允许编辑填写控件
 * @method boolean getSkipUploadFile() 获取跳过上传文件步骤

**true**：跳过
**false**：（默认）不跳过，需要传ResourceId
 * @method void setSkipUploadFile(boolean $SkipUploadFile) 设置跳过上传文件步骤

**true**：跳过
**false**：（默认）不跳过，需要传ResourceId
 * @method SignComponentConfig getSignComponentConfig() 获取签署控件的配置信息，用在嵌入式发起的页面配置，包括 
 - 签署控件 是否默认展示日期.
 * @method void setSignComponentConfig(SignComponentConfig $SignComponentConfig) 设置签署控件的配置信息，用在嵌入式发起的页面配置，包括 
 - 签署控件 是否默认展示日期.
 * @method boolean getForbidEditWatermark() 获取是否禁止编辑（展示）水印控件属性
<ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>
 * @method void setForbidEditWatermark(boolean $ForbidEditWatermark) 设置是否禁止编辑（展示）水印控件属性
<ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>
 * @method boolean getPreviewAfterStart() 获取发起成功后是否预览合同
<ul><li>（默认） false -否</li> <li> true - 展示预览按钮</li></ul>
 * @method void setPreviewAfterStart(boolean $PreviewAfterStart) 设置发起成功后是否预览合同
<ul><li>（默认） false -否</li> <li> true - 展示预览按钮</li></ul>
 * @method boolean getSignAfterStart() 获取发起成功之后是否签署合同，仅当前经办人作为签署人时生效
<ul><li>（默认） false -否</li> <li> true - 展示签署按钮</li></ul>
 * @method void setSignAfterStart(boolean $SignAfterStart) 设置发起成功之后是否签署合同，仅当前经办人作为签署人时生效
<ul><li>（默认） false -否</li> <li> true - 展示签署按钮</li></ul>
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
 * @method boolean getNeedFlowDraft() 获取发起过程中是否保存草稿	
 * @method void setNeedFlowDraft(boolean $NeedFlowDraft) 设置发起过程中是否保存草稿	
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
 * @method boolean getForbidAddApprover() 获取 禁止添加签署方，若为true则在发起流程的可嵌入页面隐藏“添加签署人按钮”

 * @method void setForbidAddApprover(boolean $ForbidAddApprover) 设置 禁止添加签署方，若为true则在发起流程的可嵌入页面隐藏“添加签署人按钮”

 * @method boolean getForbidEditFlowProperties() 获取  禁止设置签署流程属性 (顺序、合同签署认证方式等)，若为true则在发起流程的可嵌入页面隐藏签署流程设置面板

 * @method void setForbidEditFlowProperties(boolean $ForbidEditFlowProperties) 设置  禁止设置签署流程属性 (顺序、合同签署认证方式等)，若为true则在发起流程的可嵌入页面隐藏签署流程设置面板

 * @method CreateResultPageConfig getResultPageConfig() 获取发起流程的可嵌入页面结果页配置
 * @method void setResultPageConfig(CreateResultPageConfig $ResultPageConfig) 设置发起流程的可嵌入页面结果页配置
 */
class CreateFlowOption extends AbstractModel
{
    /**
     * @var boolean 是否允许修改合同信息，
**true**：可以
**false**：（默认）不可以
     */
    public $CanEditFlow;

    /**
     * @var boolean 是否允许发起合同弹窗隐藏合同名称
**true**：允许
**false**：（默认）不允许
     */
    public $HideShowFlowName;

    /**
     * @var boolean 是否允许发起合同弹窗隐藏合同类型，
**true**：允许
**false**：（默认）不允许
     */
    public $HideShowFlowType;

    /**
     * @var boolean 是否允许发起合同弹窗隐藏合同到期时间
**true**：允许
**false**：（默认）不允许
     */
    public $HideShowDeadline;

    /**
     * @var boolean 是否允许发起合同步骤跳过指定签署方步骤
**true**：允许
**false**：（默认）不允许
     */
    public $CanSkipAddApprover;

    /**
     * @var boolean 是否可以编辑签署人包括新增，修改，删除 
<ul><li>（默认） false -可以编辑签署人</li> <li> true - 禁止编辑签署人</li></ul>



注意：
* 如果设置参数为 true， 则 参数签署人 [FlowApproverList](https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlow) 不能为空
* 此参数对子客和自动签无效，不允许进行修改。
     */
    public $ForbidEditApprover;

    /**
     * @var string 定制化发起合同弹窗的描述信息，长度不能超过500，只能由中文、字母、数字和标点组成。
     */
    public $CustomCreateFlowDescription;

    /**
     * @var boolean 禁止编辑填写控件

**true**：禁止编辑填写控件
**false**：（默认）允许编辑填写控件
     */
    public $ForbidEditFillComponent;

    /**
     * @var boolean 跳过上传文件步骤

**true**：跳过
**false**：（默认）不跳过，需要传ResourceId
     */
    public $SkipUploadFile;

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
     * @var boolean 发起成功后是否预览合同
<ul><li>（默认） false -否</li> <li> true - 展示预览按钮</li></ul>
     */
    public $PreviewAfterStart;

    /**
     * @var boolean 发起成功之后是否签署合同，仅当前经办人作为签署人时生效
<ul><li>（默认） false -否</li> <li> true - 展示签署按钮</li></ul>
     */
    public $SignAfterStart;

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
     * @var boolean 发起过程中是否保存草稿	
     */
    public $NeedFlowDraft;

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
     * @var boolean  禁止添加签署方，若为true则在发起流程的可嵌入页面隐藏“添加签署人按钮”

     */
    public $ForbidAddApprover;

    /**
     * @var boolean   禁止设置签署流程属性 (顺序、合同签署认证方式等)，若为true则在发起流程的可嵌入页面隐藏签署流程设置面板

     */
    public $ForbidEditFlowProperties;

    /**
     * @var CreateResultPageConfig 发起流程的可嵌入页面结果页配置
     */
    public $ResultPageConfig;

    /**
     * @param boolean $CanEditFlow 是否允许修改合同信息，
**true**：可以
**false**：（默认）不可以
     * @param boolean $HideShowFlowName 是否允许发起合同弹窗隐藏合同名称
**true**：允许
**false**：（默认）不允许
     * @param boolean $HideShowFlowType 是否允许发起合同弹窗隐藏合同类型，
**true**：允许
**false**：（默认）不允许
     * @param boolean $HideShowDeadline 是否允许发起合同弹窗隐藏合同到期时间
**true**：允许
**false**：（默认）不允许
     * @param boolean $CanSkipAddApprover 是否允许发起合同步骤跳过指定签署方步骤
**true**：允许
**false**：（默认）不允许
     * @param boolean $ForbidEditApprover 是否可以编辑签署人包括新增，修改，删除 
<ul><li>（默认） false -可以编辑签署人</li> <li> true - 禁止编辑签署人</li></ul>



注意：
* 如果设置参数为 true， 则 参数签署人 [FlowApproverList](https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlow) 不能为空
* 此参数对子客和自动签无效，不允许进行修改。
     * @param string $CustomCreateFlowDescription 定制化发起合同弹窗的描述信息，长度不能超过500，只能由中文、字母、数字和标点组成。
     * @param boolean $ForbidEditFillComponent 禁止编辑填写控件

**true**：禁止编辑填写控件
**false**：（默认）允许编辑填写控件
     * @param boolean $SkipUploadFile 跳过上传文件步骤

**true**：跳过
**false**：（默认）不跳过，需要传ResourceId
     * @param SignComponentConfig $SignComponentConfig 签署控件的配置信息，用在嵌入式发起的页面配置，包括 
 - 签署控件 是否默认展示日期.
     * @param boolean $ForbidEditWatermark 是否禁止编辑（展示）水印控件属性
<ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>
     * @param boolean $PreviewAfterStart 发起成功后是否预览合同
<ul><li>（默认） false -否</li> <li> true - 展示预览按钮</li></ul>
     * @param boolean $SignAfterStart 发起成功之后是否签署合同，仅当前经办人作为签署人时生效
<ul><li>（默认） false -否</li> <li> true - 展示签署按钮</li></ul>
     * @param array $HideOperationSteps 隐藏操作步骤: 具体的控件类型如下

<ul><li>1 : 选择文件及签署方</li>
<li>2 : 补充文件内容</li>
<li>4 : 发起前合同信息与设置确认</li>
</ul>
注：仅对新版页面生效
     * @param string $SelfName 本企业简称，注：仅对新版页面生效
     * @param boolean $HideSignCodeAfterStart 发起后签署码隐藏，默认false，注：仅对新版页面生效
     * @param boolean $NeedFlowDraft 发起过程中是否保存草稿	
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
     * @param boolean $ForbidAddApprover  禁止添加签署方，若为true则在发起流程的可嵌入页面隐藏“添加签署人按钮”

     * @param boolean $ForbidEditFlowProperties   禁止设置签署流程属性 (顺序、合同签署认证方式等)，若为true则在发起流程的可嵌入页面隐藏签署流程设置面板

     * @param CreateResultPageConfig $ResultPageConfig 发起流程的可嵌入页面结果页配置
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

        if (array_key_exists("ForbidEditApprover",$param) and $param["ForbidEditApprover"] !== null) {
            $this->ForbidEditApprover = $param["ForbidEditApprover"];
        }

        if (array_key_exists("CustomCreateFlowDescription",$param) and $param["CustomCreateFlowDescription"] !== null) {
            $this->CustomCreateFlowDescription = $param["CustomCreateFlowDescription"];
        }

        if (array_key_exists("ForbidEditFillComponent",$param) and $param["ForbidEditFillComponent"] !== null) {
            $this->ForbidEditFillComponent = $param["ForbidEditFillComponent"];
        }

        if (array_key_exists("SkipUploadFile",$param) and $param["SkipUploadFile"] !== null) {
            $this->SkipUploadFile = $param["SkipUploadFile"];
        }

        if (array_key_exists("SignComponentConfig",$param) and $param["SignComponentConfig"] !== null) {
            $this->SignComponentConfig = new SignComponentConfig();
            $this->SignComponentConfig->deserialize($param["SignComponentConfig"]);
        }

        if (array_key_exists("ForbidEditWatermark",$param) and $param["ForbidEditWatermark"] !== null) {
            $this->ForbidEditWatermark = $param["ForbidEditWatermark"];
        }

        if (array_key_exists("PreviewAfterStart",$param) and $param["PreviewAfterStart"] !== null) {
            $this->PreviewAfterStart = $param["PreviewAfterStart"];
        }

        if (array_key_exists("SignAfterStart",$param) and $param["SignAfterStart"] !== null) {
            $this->SignAfterStart = $param["SignAfterStart"];
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

        if (array_key_exists("NeedFlowDraft",$param) and $param["NeedFlowDraft"] !== null) {
            $this->NeedFlowDraft = $param["NeedFlowDraft"];
        }

        if (array_key_exists("HideComponentTypes",$param) and $param["HideComponentTypes"] !== null) {
            $this->HideComponentTypes = $param["HideComponentTypes"];
        }

        if (array_key_exists("ShowComponentTypes",$param) and $param["ShowComponentTypes"] !== null) {
            $this->ShowComponentTypes = $param["ShowComponentTypes"];
        }

        if (array_key_exists("ForbidAddApprover",$param) and $param["ForbidAddApprover"] !== null) {
            $this->ForbidAddApprover = $param["ForbidAddApprover"];
        }

        if (array_key_exists("ForbidEditFlowProperties",$param) and $param["ForbidEditFlowProperties"] !== null) {
            $this->ForbidEditFlowProperties = $param["ForbidEditFlowProperties"];
        }

        if (array_key_exists("ResultPageConfig",$param) and $param["ResultPageConfig"] !== null) {
            $this->ResultPageConfig = new CreateResultPageConfig();
            $this->ResultPageConfig->deserialize($param["ResultPageConfig"]);
        }
    }
}
