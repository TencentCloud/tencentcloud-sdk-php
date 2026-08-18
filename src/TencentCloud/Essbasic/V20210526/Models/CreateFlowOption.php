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
 * @method boolean getCanEditFlow() 获取<p>是否允许修改合同信息，<br><strong>true</strong>：可以<br><strong>false</strong>：（默认）不可以</p>
 * @method void setCanEditFlow(boolean $CanEditFlow) 设置<p>是否允许修改合同信息，<br><strong>true</strong>：可以<br><strong>false</strong>：（默认）不可以</p>
 * @method boolean getHideShowFlowName() 获取<p>是否允许发起合同弹窗隐藏合同名称<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
 * @method void setHideShowFlowName(boolean $HideShowFlowName) 设置<p>是否允许发起合同弹窗隐藏合同名称<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
 * @method boolean getHideShowFlowType() 获取<p>是否允许发起合同弹窗隐藏合同类型，<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
 * @method void setHideShowFlowType(boolean $HideShowFlowType) 设置<p>是否允许发起合同弹窗隐藏合同类型，<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
 * @method boolean getHideShowDeadline() 获取<p>是否允许发起合同弹窗隐藏合同到期时间<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
 * @method void setHideShowDeadline(boolean $HideShowDeadline) 设置<p>是否允许发起合同弹窗隐藏合同到期时间<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
 * @method boolean getCanSkipAddApprover() 获取<p>是否允许发起合同步骤跳过指定签署方步骤<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
 * @method void setCanSkipAddApprover(boolean $CanSkipAddApprover) 设置<p>是否允许发起合同步骤跳过指定签署方步骤<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
 * @method boolean getForbidEditApprover() 获取<p>是否可以编辑签署人包括新增，修改，删除 </p><ul><li>（默认） false -可以编辑签署人</li> <li> true - 禁止编辑签署人</li></ul><p>注意：</p><ul><li>如果设置参数为 true， 则 参数签署人 <a href="https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlow">FlowApproverList</a> 不能为空</li><li>此参数对子客和自动签无效，不允许进行修改。</li></ul>
 * @method void setForbidEditApprover(boolean $ForbidEditApprover) 设置<p>是否可以编辑签署人包括新增，修改，删除 </p><ul><li>（默认） false -可以编辑签署人</li> <li> true - 禁止编辑签署人</li></ul><p>注意：</p><ul><li>如果设置参数为 true， 则 参数签署人 <a href="https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlow">FlowApproverList</a> 不能为空</li><li>此参数对子客和自动签无效，不允许进行修改。</li></ul>
 * @method string getCustomCreateFlowDescription() 获取<p>定制化发起合同弹窗的描述信息，长度不能超过500，只能由中文、字母、数字和标点组成。</p>
 * @method void setCustomCreateFlowDescription(string $CustomCreateFlowDescription) 设置<p>定制化发起合同弹窗的描述信息，长度不能超过500，只能由中文、字母、数字和标点组成。</p>
 * @method boolean getForbidEditFillComponent() 获取<p>禁止编辑填写控件</p><p><strong>true</strong>：禁止编辑填写控件<br><strong>false</strong>：（默认）允许编辑填写控件</p>
 * @method void setForbidEditFillComponent(boolean $ForbidEditFillComponent) 设置<p>禁止编辑填写控件</p><p><strong>true</strong>：禁止编辑填写控件<br><strong>false</strong>：（默认）允许编辑填写控件</p>
 * @method boolean getSkipUploadFile() 获取<p>跳过上传文件步骤</p><p><strong>true</strong>：跳过<br><strong>false</strong>：（默认）不跳过，需要传ResourceId</p>
 * @method void setSkipUploadFile(boolean $SkipUploadFile) 设置<p>跳过上传文件步骤</p><p><strong>true</strong>：跳过<br><strong>false</strong>：（默认）不跳过，需要传ResourceId</p>
 * @method SignComponentConfig getSignComponentConfig() 获取<p>签署控件的配置信息，用在嵌入式发起的页面配置，包括 </p><ul><li>签署控件 是否默认展示日期.</li></ul>
 * @method void setSignComponentConfig(SignComponentConfig $SignComponentConfig) 设置<p>签署控件的配置信息，用在嵌入式发起的页面配置，包括 </p><ul><li>签署控件 是否默认展示日期.</li></ul>
 * @method boolean getForbidEditWatermark() 获取<p>是否禁止编辑（展示）水印控件属性</p><ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>
 * @method void setForbidEditWatermark(boolean $ForbidEditWatermark) 设置<p>是否禁止编辑（展示）水印控件属性</p><ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>
 * @method boolean getPreviewAfterStart() 获取<p>发起成功后是否预览合同</p><ul><li>（默认） false -否</li> <li> true - 展示预览按钮</li></ul>
 * @method void setPreviewAfterStart(boolean $PreviewAfterStart) 设置<p>发起成功后是否预览合同</p><ul><li>（默认） false -否</li> <li> true - 展示预览按钮</li></ul>
 * @method boolean getSignAfterStart() 获取<p>发起成功之后是否签署合同，仅当前经办人作为签署人时生效</p><ul><li>（默认） false -否</li> <li> true - 展示签署按钮</li></ul>
 * @method void setSignAfterStart(boolean $SignAfterStart) 设置<p>发起成功之后是否签署合同，仅当前经办人作为签署人时生效</p><ul><li>（默认） false -否</li> <li> true - 展示签署按钮</li></ul>
 * @method array getHideOperationSteps() 获取<p>隐藏操作步骤: 具体的控件类型如下</p><ul><li>1 : 选择文件及签署方</li><li>2 : 补充文件内容</li><li>4 : 发起前合同信息与设置确认</li></ul>注：仅对新版页面生效
 * @method void setHideOperationSteps(array $HideOperationSteps) 设置<p>隐藏操作步骤: 具体的控件类型如下</p><ul><li>1 : 选择文件及签署方</li><li>2 : 补充文件内容</li><li>4 : 发起前合同信息与设置确认</li></ul>注：仅对新版页面生效
 * @method string getSelfName() 获取<p>本企业简称，注：仅对新版页面生效</p>
 * @method void setSelfName(string $SelfName) 设置<p>本企业简称，注：仅对新版页面生效</p>
 * @method boolean getHideSignCodeAfterStart() 获取<p>发起后签署码隐藏，默认false，注：仅对新版页面生效</p>
 * @method void setHideSignCodeAfterStart(boolean $HideSignCodeAfterStart) 设置<p>发起后签署码隐藏，默认false，注：仅对新版页面生效</p>
 * @method boolean getNeedFlowDraft() 获取<p>发起过程中是否保存草稿</p>
 * @method void setNeedFlowDraft(boolean $NeedFlowDraft) 设置<p>发起过程中是否保存草稿</p>
 * @method array getHideComponentTypes() 获取<p>在发起流程的可嵌入页面要隐藏的控件列表，和 ShowComponentTypes 参数 只能二选一使用（注:<br><font color="red">空数组代表未指定</font>），具体的控件类型如下</p><ul><li>SIGN_SIGNATURE : 个人签名/印章</li><li>SIGN_SEAL : 企业印章</li><li>SIGN_PAGING_SEAL : 骑缝章</li><li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li><li>SIGN_APPROVE : 签批</li><li>SIGN_OPINION : 签署意见</li><li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li><li>BUSI-FULL-NAME  : 企业全称</li><li>BUSI-CREDIT-CODE : 统一社会信用代码</li><li>BUSI-LEGAL-NAME : 法人/经营者姓名</li><li>PERSONAL-NAME : 签署人姓名</li><li>PERSONAL-MOBILE : 签署人手机号</li><li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li><li>PERSONAL-IDCARD : 签署人证件号</li><li>TEXT : 单行文本</li><li>MULTI_LINE_TEXT : 多行文本</li><li>CHECK_BOX : 勾选框</li><li>SELECTOR : 选择器</li><li>DIGIT : 数字</li><li>DATE : 日期</li><li>FILL_IMAGE : 图片</li><li>ATTACHMENT : 附件</li><li>EMAIL : 邮箱</li><li>LOCATION : 地址</li><li>EDUCATION : 学历</li><li>GENDER : 性别</li><li>DISTRICT : 省市区</li></ul>
 * @method void setHideComponentTypes(array $HideComponentTypes) 设置<p>在发起流程的可嵌入页面要隐藏的控件列表，和 ShowComponentTypes 参数 只能二选一使用（注:<br><font color="red">空数组代表未指定</font>），具体的控件类型如下</p><ul><li>SIGN_SIGNATURE : 个人签名/印章</li><li>SIGN_SEAL : 企业印章</li><li>SIGN_PAGING_SEAL : 骑缝章</li><li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li><li>SIGN_APPROVE : 签批</li><li>SIGN_OPINION : 签署意见</li><li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li><li>BUSI-FULL-NAME  : 企业全称</li><li>BUSI-CREDIT-CODE : 统一社会信用代码</li><li>BUSI-LEGAL-NAME : 法人/经营者姓名</li><li>PERSONAL-NAME : 签署人姓名</li><li>PERSONAL-MOBILE : 签署人手机号</li><li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li><li>PERSONAL-IDCARD : 签署人证件号</li><li>TEXT : 单行文本</li><li>MULTI_LINE_TEXT : 多行文本</li><li>CHECK_BOX : 勾选框</li><li>SELECTOR : 选择器</li><li>DIGIT : 数字</li><li>DATE : 日期</li><li>FILL_IMAGE : 图片</li><li>ATTACHMENT : 附件</li><li>EMAIL : 邮箱</li><li>LOCATION : 地址</li><li>EDUCATION : 学历</li><li>GENDER : 性别</li><li>DISTRICT : 省市区</li></ul>
 * @method array getShowComponentTypes() 获取<p>在发起流程的可嵌入页面要显示的控件列表，和 HideComponentTypes 参数 只能二选一使用（注:<br><font color="red">空数组代表未指定</font>），具体的控件类型如下</p><ul><li>SIGN_SIGNATURE : 个人签名/印章</li><li>SIGN_SEAL : 企业印章</li><li>SIGN_PAGING_SEAL : 骑缝章</li><li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li><li>SIGN_APPROVE : 签批</li><li>SIGN_OPINION : 签署意见</li><li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li><li>BUSI-FULL-NAME  : 企业全称</li><li>BUSI-CREDIT-CODE : 统一社会信用代码</li><li>BUSI-LEGAL-NAME : 法人/经营者姓名</li><li>PERSONAL-NAME : 签署人姓名</li><li>PERSONAL-MOBILE : 签署人手机号</li><li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li><li>PERSONAL-IDCARD : 签署人证件号</li><li>TEXT : 单行文本</li><li>MULTI_LINE_TEXT : 多行文本</li><li>CHECK_BOX : 勾选框</li><li>SELECTOR : 选择器</li><li>DIGIT : 数字</li><li>DATE : 日期</li><li>FILL_IMAGE : 图片</li><li>ATTACHMENT : 附件</li><li>EMAIL : 邮箱</li><li>LOCATION : 地址</li><li>EDUCATION : 学历</li><li>GENDER : 性别</li><li>DISTRICT : 省市区</li></ul>
 * @method void setShowComponentTypes(array $ShowComponentTypes) 设置<p>在发起流程的可嵌入页面要显示的控件列表，和 HideComponentTypes 参数 只能二选一使用（注:<br><font color="red">空数组代表未指定</font>），具体的控件类型如下</p><ul><li>SIGN_SIGNATURE : 个人签名/印章</li><li>SIGN_SEAL : 企业印章</li><li>SIGN_PAGING_SEAL : 骑缝章</li><li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li><li>SIGN_APPROVE : 签批</li><li>SIGN_OPINION : 签署意见</li><li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li><li>BUSI-FULL-NAME  : 企业全称</li><li>BUSI-CREDIT-CODE : 统一社会信用代码</li><li>BUSI-LEGAL-NAME : 法人/经营者姓名</li><li>PERSONAL-NAME : 签署人姓名</li><li>PERSONAL-MOBILE : 签署人手机号</li><li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li><li>PERSONAL-IDCARD : 签署人证件号</li><li>TEXT : 单行文本</li><li>MULTI_LINE_TEXT : 多行文本</li><li>CHECK_BOX : 勾选框</li><li>SELECTOR : 选择器</li><li>DIGIT : 数字</li><li>DATE : 日期</li><li>FILL_IMAGE : 图片</li><li>ATTACHMENT : 附件</li><li>EMAIL : 邮箱</li><li>LOCATION : 地址</li><li>EDUCATION : 学历</li><li>GENDER : 性别</li><li>DISTRICT : 省市区</li></ul>
 * @method boolean getForbidAddApprover() 获取<p>禁止添加签署方，若为true则在发起流程的可嵌入页面隐藏“添加签署人按钮”</p>
 * @method void setForbidAddApprover(boolean $ForbidAddApprover) 设置<p>禁止添加签署方，若为true则在发起流程的可嵌入页面隐藏“添加签署人按钮”</p>
 * @method boolean getForbidEditFlowProperties() 获取<p>禁止设置签署流程属性 (顺序、合同签署认证方式等)，若为true则在发起流程的可嵌入页面隐藏签署流程设置面板</p>
 * @method void setForbidEditFlowProperties(boolean $ForbidEditFlowProperties) 设置<p>禁止设置签署流程属性 (顺序、合同签署认证方式等)，若为true则在发起流程的可嵌入页面隐藏签署流程设置面板</p>
 * @method CreateResultPageConfig getResultPageConfig() 获取<p>发起流程的可嵌入页面结果页配置</p>
 * @method void setResultPageConfig(CreateResultPageConfig $ResultPageConfig) 设置<p>发起流程的可嵌入页面结果页配置</p>
 * @method integer getCcInfoVisibility() 获取<p>若指定了合同抄送人，此参数用来控制操作人能否在嵌入式页面看见或编辑（修改、增加、删除）抄送人信息。</p><p>枚举值：</p><ul><li>0： 不可见不可编辑</li><li>1： 可见不可编辑</li><li>2： 可见可编辑</li></ul><p>默认值：0</p>
 * @method void setCcInfoVisibility(integer $CcInfoVisibility) 设置<p>若指定了合同抄送人，此参数用来控制操作人能否在嵌入式页面看见或编辑（修改、增加、删除）抄送人信息。</p><p>枚举值：</p><ul><li>0： 不可见不可编辑</li><li>1： 可见不可编辑</li><li>2： 可见可编辑</li></ul><p>默认值：0</p>
 */
class CreateFlowOption extends AbstractModel
{
    /**
     * @var boolean <p>是否允许修改合同信息，<br><strong>true</strong>：可以<br><strong>false</strong>：（默认）不可以</p>
     */
    public $CanEditFlow;

    /**
     * @var boolean <p>是否允许发起合同弹窗隐藏合同名称<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
     */
    public $HideShowFlowName;

    /**
     * @var boolean <p>是否允许发起合同弹窗隐藏合同类型，<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
     */
    public $HideShowFlowType;

    /**
     * @var boolean <p>是否允许发起合同弹窗隐藏合同到期时间<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
     */
    public $HideShowDeadline;

    /**
     * @var boolean <p>是否允许发起合同步骤跳过指定签署方步骤<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
     */
    public $CanSkipAddApprover;

    /**
     * @var boolean <p>是否可以编辑签署人包括新增，修改，删除 </p><ul><li>（默认） false -可以编辑签署人</li> <li> true - 禁止编辑签署人</li></ul><p>注意：</p><ul><li>如果设置参数为 true， 则 参数签署人 <a href="https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlow">FlowApproverList</a> 不能为空</li><li>此参数对子客和自动签无效，不允许进行修改。</li></ul>
     */
    public $ForbidEditApprover;

    /**
     * @var string <p>定制化发起合同弹窗的描述信息，长度不能超过500，只能由中文、字母、数字和标点组成。</p>
     */
    public $CustomCreateFlowDescription;

    /**
     * @var boolean <p>禁止编辑填写控件</p><p><strong>true</strong>：禁止编辑填写控件<br><strong>false</strong>：（默认）允许编辑填写控件</p>
     */
    public $ForbidEditFillComponent;

    /**
     * @var boolean <p>跳过上传文件步骤</p><p><strong>true</strong>：跳过<br><strong>false</strong>：（默认）不跳过，需要传ResourceId</p>
     */
    public $SkipUploadFile;

    /**
     * @var SignComponentConfig <p>签署控件的配置信息，用在嵌入式发起的页面配置，包括 </p><ul><li>签署控件 是否默认展示日期.</li></ul>
     */
    public $SignComponentConfig;

    /**
     * @var boolean <p>是否禁止编辑（展示）水印控件属性</p><ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>
     */
    public $ForbidEditWatermark;

    /**
     * @var boolean <p>发起成功后是否预览合同</p><ul><li>（默认） false -否</li> <li> true - 展示预览按钮</li></ul>
     */
    public $PreviewAfterStart;

    /**
     * @var boolean <p>发起成功之后是否签署合同，仅当前经办人作为签署人时生效</p><ul><li>（默认） false -否</li> <li> true - 展示签署按钮</li></ul>
     */
    public $SignAfterStart;

    /**
     * @var array <p>隐藏操作步骤: 具体的控件类型如下</p><ul><li>1 : 选择文件及签署方</li><li>2 : 补充文件内容</li><li>4 : 发起前合同信息与设置确认</li></ul>注：仅对新版页面生效
     */
    public $HideOperationSteps;

    /**
     * @var string <p>本企业简称，注：仅对新版页面生效</p>
     */
    public $SelfName;

    /**
     * @var boolean <p>发起后签署码隐藏，默认false，注：仅对新版页面生效</p>
     */
    public $HideSignCodeAfterStart;

    /**
     * @var boolean <p>发起过程中是否保存草稿</p>
     */
    public $NeedFlowDraft;

    /**
     * @var array <p>在发起流程的可嵌入页面要隐藏的控件列表，和 ShowComponentTypes 参数 只能二选一使用（注:<br><font color="red">空数组代表未指定</font>），具体的控件类型如下</p><ul><li>SIGN_SIGNATURE : 个人签名/印章</li><li>SIGN_SEAL : 企业印章</li><li>SIGN_PAGING_SEAL : 骑缝章</li><li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li><li>SIGN_APPROVE : 签批</li><li>SIGN_OPINION : 签署意见</li><li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li><li>BUSI-FULL-NAME  : 企业全称</li><li>BUSI-CREDIT-CODE : 统一社会信用代码</li><li>BUSI-LEGAL-NAME : 法人/经营者姓名</li><li>PERSONAL-NAME : 签署人姓名</li><li>PERSONAL-MOBILE : 签署人手机号</li><li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li><li>PERSONAL-IDCARD : 签署人证件号</li><li>TEXT : 单行文本</li><li>MULTI_LINE_TEXT : 多行文本</li><li>CHECK_BOX : 勾选框</li><li>SELECTOR : 选择器</li><li>DIGIT : 数字</li><li>DATE : 日期</li><li>FILL_IMAGE : 图片</li><li>ATTACHMENT : 附件</li><li>EMAIL : 邮箱</li><li>LOCATION : 地址</li><li>EDUCATION : 学历</li><li>GENDER : 性别</li><li>DISTRICT : 省市区</li></ul>
     */
    public $HideComponentTypes;

    /**
     * @var array <p>在发起流程的可嵌入页面要显示的控件列表，和 HideComponentTypes 参数 只能二选一使用（注:<br><font color="red">空数组代表未指定</font>），具体的控件类型如下</p><ul><li>SIGN_SIGNATURE : 个人签名/印章</li><li>SIGN_SEAL : 企业印章</li><li>SIGN_PAGING_SEAL : 骑缝章</li><li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li><li>SIGN_APPROVE : 签批</li><li>SIGN_OPINION : 签署意见</li><li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li><li>BUSI-FULL-NAME  : 企业全称</li><li>BUSI-CREDIT-CODE : 统一社会信用代码</li><li>BUSI-LEGAL-NAME : 法人/经营者姓名</li><li>PERSONAL-NAME : 签署人姓名</li><li>PERSONAL-MOBILE : 签署人手机号</li><li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li><li>PERSONAL-IDCARD : 签署人证件号</li><li>TEXT : 单行文本</li><li>MULTI_LINE_TEXT : 多行文本</li><li>CHECK_BOX : 勾选框</li><li>SELECTOR : 选择器</li><li>DIGIT : 数字</li><li>DATE : 日期</li><li>FILL_IMAGE : 图片</li><li>ATTACHMENT : 附件</li><li>EMAIL : 邮箱</li><li>LOCATION : 地址</li><li>EDUCATION : 学历</li><li>GENDER : 性别</li><li>DISTRICT : 省市区</li></ul>
     */
    public $ShowComponentTypes;

    /**
     * @var boolean <p>禁止添加签署方，若为true则在发起流程的可嵌入页面隐藏“添加签署人按钮”</p>
     */
    public $ForbidAddApprover;

    /**
     * @var boolean <p>禁止设置签署流程属性 (顺序、合同签署认证方式等)，若为true则在发起流程的可嵌入页面隐藏签署流程设置面板</p>
     */
    public $ForbidEditFlowProperties;

    /**
     * @var CreateResultPageConfig <p>发起流程的可嵌入页面结果页配置</p>
     */
    public $ResultPageConfig;

    /**
     * @var integer <p>若指定了合同抄送人，此参数用来控制操作人能否在嵌入式页面看见或编辑（修改、增加、删除）抄送人信息。</p><p>枚举值：</p><ul><li>0： 不可见不可编辑</li><li>1： 可见不可编辑</li><li>2： 可见可编辑</li></ul><p>默认值：0</p>
     */
    public $CcInfoVisibility;

    /**
     * @param boolean $CanEditFlow <p>是否允许修改合同信息，<br><strong>true</strong>：可以<br><strong>false</strong>：（默认）不可以</p>
     * @param boolean $HideShowFlowName <p>是否允许发起合同弹窗隐藏合同名称<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
     * @param boolean $HideShowFlowType <p>是否允许发起合同弹窗隐藏合同类型，<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
     * @param boolean $HideShowDeadline <p>是否允许发起合同弹窗隐藏合同到期时间<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
     * @param boolean $CanSkipAddApprover <p>是否允许发起合同步骤跳过指定签署方步骤<br><strong>true</strong>：允许<br><strong>false</strong>：（默认）不允许</p>
     * @param boolean $ForbidEditApprover <p>是否可以编辑签署人包括新增，修改，删除 </p><ul><li>（默认） false -可以编辑签署人</li> <li> true - 禁止编辑签署人</li></ul><p>注意：</p><ul><li>如果设置参数为 true， 则 参数签署人 <a href="https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlow">FlowApproverList</a> 不能为空</li><li>此参数对子客和自动签无效，不允许进行修改。</li></ul>
     * @param string $CustomCreateFlowDescription <p>定制化发起合同弹窗的描述信息，长度不能超过500，只能由中文、字母、数字和标点组成。</p>
     * @param boolean $ForbidEditFillComponent <p>禁止编辑填写控件</p><p><strong>true</strong>：禁止编辑填写控件<br><strong>false</strong>：（默认）允许编辑填写控件</p>
     * @param boolean $SkipUploadFile <p>跳过上传文件步骤</p><p><strong>true</strong>：跳过<br><strong>false</strong>：（默认）不跳过，需要传ResourceId</p>
     * @param SignComponentConfig $SignComponentConfig <p>签署控件的配置信息，用在嵌入式发起的页面配置，包括 </p><ul><li>签署控件 是否默认展示日期.</li></ul>
     * @param boolean $ForbidEditWatermark <p>是否禁止编辑（展示）水印控件属性</p><ul><li>（默认） false -否</li> <li> true - 禁止编辑</li></ul>
     * @param boolean $PreviewAfterStart <p>发起成功后是否预览合同</p><ul><li>（默认） false -否</li> <li> true - 展示预览按钮</li></ul>
     * @param boolean $SignAfterStart <p>发起成功之后是否签署合同，仅当前经办人作为签署人时生效</p><ul><li>（默认） false -否</li> <li> true - 展示签署按钮</li></ul>
     * @param array $HideOperationSteps <p>隐藏操作步骤: 具体的控件类型如下</p><ul><li>1 : 选择文件及签署方</li><li>2 : 补充文件内容</li><li>4 : 发起前合同信息与设置确认</li></ul>注：仅对新版页面生效
     * @param string $SelfName <p>本企业简称，注：仅对新版页面生效</p>
     * @param boolean $HideSignCodeAfterStart <p>发起后签署码隐藏，默认false，注：仅对新版页面生效</p>
     * @param boolean $NeedFlowDraft <p>发起过程中是否保存草稿</p>
     * @param array $HideComponentTypes <p>在发起流程的可嵌入页面要隐藏的控件列表，和 ShowComponentTypes 参数 只能二选一使用（注:<br><font color="red">空数组代表未指定</font>），具体的控件类型如下</p><ul><li>SIGN_SIGNATURE : 个人签名/印章</li><li>SIGN_SEAL : 企业印章</li><li>SIGN_PAGING_SEAL : 骑缝章</li><li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li><li>SIGN_APPROVE : 签批</li><li>SIGN_OPINION : 签署意见</li><li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li><li>BUSI-FULL-NAME  : 企业全称</li><li>BUSI-CREDIT-CODE : 统一社会信用代码</li><li>BUSI-LEGAL-NAME : 法人/经营者姓名</li><li>PERSONAL-NAME : 签署人姓名</li><li>PERSONAL-MOBILE : 签署人手机号</li><li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li><li>PERSONAL-IDCARD : 签署人证件号</li><li>TEXT : 单行文本</li><li>MULTI_LINE_TEXT : 多行文本</li><li>CHECK_BOX : 勾选框</li><li>SELECTOR : 选择器</li><li>DIGIT : 数字</li><li>DATE : 日期</li><li>FILL_IMAGE : 图片</li><li>ATTACHMENT : 附件</li><li>EMAIL : 邮箱</li><li>LOCATION : 地址</li><li>EDUCATION : 学历</li><li>GENDER : 性别</li><li>DISTRICT : 省市区</li></ul>
     * @param array $ShowComponentTypes <p>在发起流程的可嵌入页面要显示的控件列表，和 HideComponentTypes 参数 只能二选一使用（注:<br><font color="red">空数组代表未指定</font>），具体的控件类型如下</p><ul><li>SIGN_SIGNATURE : 个人签名/印章</li><li>SIGN_SEAL : 企业印章</li><li>SIGN_PAGING_SEAL : 骑缝章</li><li>SIGN_LEGAL_PERSON_SEAL : 法定代表人章</li><li>SIGN_APPROVE : 签批</li><li>SIGN_OPINION : 签署意见</li><li>SIGN_PAGING_SIGNATURE : 手写签名骑缝控件</li><li>BUSI-FULL-NAME  : 企业全称</li><li>BUSI-CREDIT-CODE : 统一社会信用代码</li><li>BUSI-LEGAL-NAME : 法人/经营者姓名</li><li>PERSONAL-NAME : 签署人姓名</li><li>PERSONAL-MOBILE : 签署人手机号</li><li>PERSONAL-IDCARD-TYPE : 签署人证件类型</li><li>PERSONAL-IDCARD : 签署人证件号</li><li>TEXT : 单行文本</li><li>MULTI_LINE_TEXT : 多行文本</li><li>CHECK_BOX : 勾选框</li><li>SELECTOR : 选择器</li><li>DIGIT : 数字</li><li>DATE : 日期</li><li>FILL_IMAGE : 图片</li><li>ATTACHMENT : 附件</li><li>EMAIL : 邮箱</li><li>LOCATION : 地址</li><li>EDUCATION : 学历</li><li>GENDER : 性别</li><li>DISTRICT : 省市区</li></ul>
     * @param boolean $ForbidAddApprover <p>禁止添加签署方，若为true则在发起流程的可嵌入页面隐藏“添加签署人按钮”</p>
     * @param boolean $ForbidEditFlowProperties <p>禁止设置签署流程属性 (顺序、合同签署认证方式等)，若为true则在发起流程的可嵌入页面隐藏签署流程设置面板</p>
     * @param CreateResultPageConfig $ResultPageConfig <p>发起流程的可嵌入页面结果页配置</p>
     * @param integer $CcInfoVisibility <p>若指定了合同抄送人，此参数用来控制操作人能否在嵌入式页面看见或编辑（修改、增加、删除）抄送人信息。</p><p>枚举值：</p><ul><li>0： 不可见不可编辑</li><li>1： 可见不可编辑</li><li>2： 可见可编辑</li></ul><p>默认值：0</p>
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

        if (array_key_exists("CcInfoVisibility",$param) and $param["CcInfoVisibility"] !== null) {
            $this->CcInfoVisibility = $param["CcInfoVisibility"];
        }
    }
}
