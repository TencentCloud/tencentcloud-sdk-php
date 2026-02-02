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
 * ChannelCreateFlowByFiles请求参数结构体
 *
 * @method Agent getAgent() 获取<p>合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a></p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li></ul>
 * @method void setAgent(Agent $Agent) 设置<p>合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a></p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li></ul>
 * @method string getFlowName() 获取<p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
 * @method void setFlowName(string $FlowName) 设置<p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
 * @method string getFlowDescription() 获取<p>合同流程描述信息(可自定义此描述)，最大长度1000个字符。</p>
 * @method void setFlowDescription(string $FlowDescription) 设置<p>合同流程描述信息(可自定义此描述)，最大长度1000个字符。</p>
 * @method array getFlowApprovers() 获取<p>合同流程的参与方列表, 最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息，不同类型的签署方传参方式可以参考文档 <a href="https://qian.tencent.com/developers/partner/flow_approver">签署方入参指引</a>。</p><p>如果合同流程是有序签署，Approvers列表中参与人的顺序就是默认的签署顺序, 请确保列表中参与人的顺序符合实际签署顺序。</p>
 * @method void setFlowApprovers(array $FlowApprovers) 设置<p>合同流程的参与方列表, 最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息，不同类型的签署方传参方式可以参考文档 <a href="https://qian.tencent.com/developers/partner/flow_approver">签署方入参指引</a>。</p><p>如果合同流程是有序签署，Approvers列表中参与人的顺序就是默认的签署顺序, 请确保列表中参与人的顺序符合实际签署顺序。</p>
 * @method array getFileIds() 获取<p>本合同流程需包含的PDF文件资源编号列表，通过<a href="https://qian.tencent.com/developers/partnerApis/files/UploadFiles" target="_blank">UploadFiles</a>接口获取PDF文件资源编号。</p><p>注: <code>目前，此接口仅支持单个文件发起。</code></p>
 * @method void setFileIds(array $FileIds) 设置<p>本合同流程需包含的PDF文件资源编号列表，通过<a href="https://qian.tencent.com/developers/partnerApis/files/UploadFiles" target="_blank">UploadFiles</a>接口获取PDF文件资源编号。</p><p>注: <code>目前，此接口仅支持单个文件发起。</code></p>
 * @method array getComponents() 获取<p>模板或者合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>数据表格等填写控件</li></ul><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
 * @method void setComponents(array $Components) 设置<p>模板或者合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>数据表格等填写控件</li></ul><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
 * @method integer getDeadline() 获取<p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为合同流程创建后的365天时截止。<br>如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。</p>
 * @method void setDeadline(integer $Deadline) 设置<p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为合同流程创建后的365天时截止。<br>如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。</p>
 * @method string getCallbackUrl() 获取<p>该字段已废弃，请使用【应用号配置】中的回调地址</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>该字段已废弃，请使用【应用号配置】中的回调地址</p>
 * @method boolean getUnordered() 获取<p>合同流程的签署顺序类型：</p><ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li><li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>**注**: <code>有序签署时以传入FlowApprovers数组的顺序作为签署顺序</code>
 * @method void setUnordered(boolean $Unordered) 设置<p>合同流程的签署顺序类型：</p><ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li><li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>**注**: <code>有序签署时以传入FlowApprovers数组的顺序作为签署顺序</code>
 * @method string getFlowType() 获取<p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为255个字符，仅限中文、字母、数字和下划线组成。</p>
 * @method void setFlowType(string $FlowType) 设置<p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为255个字符，仅限中文、字母、数字和下划线组成。</p>
 * @method string getCustomShowMap() 获取<p>您可以自定义腾讯电子签小程序合同列表页展示的合同内容模板，模板中支持以下变量：</p><ul><li>{合同名称}   </li><li>{发起方企业} </li><li>{发起方姓名} </li><li>{签署方N企业}</li><li>{签署方N姓名}</li></ul>其中，N表示签署方的编号，从1开始，不能超过签署人的数量。<p>例如，如果是腾讯公司张三发给李四名称为“租房合同”的合同，您可以将此字段设置为：<code>合同名称:{合同名称};发起方: {发起方企业}({发起方姓名});签署方:{签署方1姓名}</code>，则小程序中列表页展示此合同为以下样子</p><p>合同名称：租房合同<br>发起方：腾讯公司(张三)<br>签署方：李四</p>
 * @method void setCustomShowMap(string $CustomShowMap) 设置<p>您可以自定义腾讯电子签小程序合同列表页展示的合同内容模板，模板中支持以下变量：</p><ul><li>{合同名称}   </li><li>{发起方企业} </li><li>{发起方姓名} </li><li>{签署方N企业}</li><li>{签署方N姓名}</li></ul>其中，N表示签署方的编号，从1开始，不能超过签署人的数量。<p>例如，如果是腾讯公司张三发给李四名称为“租房合同”的合同，您可以将此字段设置为：<code>合同名称:{合同名称};发起方: {发起方企业}({发起方姓名});签署方:{签署方1姓名}</code>，则小程序中列表页展示此合同为以下样子</p><p>合同名称：租房合同<br>发起方：腾讯公司(张三)<br>签署方：李四</p>
 * @method string getCustomerData() 获取<p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1000长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/partner/callback_types_contracts_sign" target="_blank">回调通知</a>模块。</p>
 * @method void setCustomerData(string $CustomerData) 设置<p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1000长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/partner/callback_types_contracts_sign" target="_blank">回调通知</a>模块。</p>
 * @method boolean getNeedSignReview() 获取<p>发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：</p><ul><li> **false**：（默认）不需要审批，直接签署。</li><li> **true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过ChannelCreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>注：<code>此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同</code>
 * @method void setNeedSignReview(boolean $NeedSignReview) 设置<p>发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：</p><ul><li> **false**：（默认）不需要审批，直接签署。</li><li> **true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过ChannelCreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>注：<code>此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同</code>
 * @method string getApproverVerifyType() 获取<p>签署人校验方式<br>VerifyCheck: 人脸识别（默认）<br>MobileCheck：手机号验证，用户手机号和参与方手机号（ApproverMobile）相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）<br>参数说明：可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。</p>
 * @method void setApproverVerifyType(string $ApproverVerifyType) 设置<p>签署人校验方式<br>VerifyCheck: 人脸识别（默认）<br>MobileCheck：手机号验证，用户手机号和参与方手机号（ApproverMobile）相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）<br>参数说明：可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。</p>
 * @method integer getSignBeanTag() 获取<p>签署方签署控件（印章/签名等）的生成方式：</p><ul><li> **0**：在合同流程发起时，由发起人指定签署方的签署控件的位置和数量。</li><li> **1**：签署方在签署时自行添加签署控件，可以拖动位置和控制数量。</li></ul><p><strong>注</strong>:<br>1.发起后添加控件功能不支持添加签批控件<br>2.签署方在签署时自行添加签署控件仅支持电子签小程序或web控制台签署，不支持H5</p>
 * @method void setSignBeanTag(integer $SignBeanTag) 设置<p>签署方签署控件（印章/签名等）的生成方式：</p><ul><li> **0**：在合同流程发起时，由发起人指定签署方的签署控件的位置和数量。</li><li> **1**：签署方在签署时自行添加签署控件，可以拖动位置和控制数量。</li></ul><p><strong>注</strong>:<br>1.发起后添加控件功能不支持添加签批控件<br>2.签署方在签署时自行添加签署控件仅支持电子签小程序或web控制台签署，不支持H5</p>
 * @method array getCcInfos() 获取<p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p><p><b>注</b></p><ol><li>抄送人名单中可以包括自然人以及本企业的员工（本企业员工必须已经完成认证并加入企业）。</li><li>请确保抄送人列表中的成员不与任何签署人重复。</li></ol>
 * @method void setCcInfos(array $CcInfos) 设置<p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p><p><b>注</b></p><ol><li>抄送人名单中可以包括自然人以及本企业的员工（本企业员工必须已经完成认证并加入企业）。</li><li>请确保抄送人列表中的成员不与任何签署人重复。</li></ol>
 * @method integer getCcNotifyType() 获取<p>可以设置以下时间节点来给抄送人发送短信通知来查看合同内容：</p><ul><li> **0**：合同发起时通知（默认值）</li><li> **1**：签署完成后通知</li></ul>
 * @method void setCcNotifyType(integer $CcNotifyType) 设置<p>可以设置以下时间节点来给抄送人发送短信通知来查看合同内容：</p><ul><li> **0**：合同发起时通知（默认值）</li><li> **1**：签署完成后通知</li></ul>
 * @method string getAutoSignScene() 获取<p>个人自动签名的使用场景包括以下, 个人自动签署(即ApproverType设置成个人自动签署时)业务此值必传：</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN**：电子处方单（医疗自动签）  </li><li> **OTHER** :  通用场景</li></ul>注: <code>个人自动签名场景是白名单功能，使用前请与对接的客户经理联系沟通。</code>
 * @method void setAutoSignScene(string $AutoSignScene) 设置<p>个人自动签名的使用场景包括以下, 个人自动签署(即ApproverType设置成个人自动签署时)业务此值必传：</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN**：电子处方单（医疗自动签）  </li><li> **OTHER** :  通用场景</li></ul>注: <code>个人自动签名场景是白名单功能，使用前请与对接的客户经理联系沟通。</code>
 * @method UserInfo getOperator() 获取<p>操作者的信息，不用传</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>操作者的信息，不用传</p>
 * @method integer getFlowDisplayType() 获取<p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
 * @method void setFlowDisplayType(integer $FlowDisplayType) 设置<p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
 * @method boolean getNeedPreview() 获取<p>是否为预览模式，取值如下： <ul><li> <strong>false</strong>：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li> <li> <strong>true</strong>：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。</li></ul></p>
 * @method void setNeedPreview(boolean $NeedPreview) 设置<p>是否为预览模式，取值如下： <ul><li> <strong>false</strong>：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li> <li> <strong>true</strong>：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。</li></ul></p>
 * @method integer getPreviewType() 获取<p>预览模式下产生的预览链接类型 </p><ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li><li> **1** :H5链接 ,点开后在浏览器中展示合同的样子</li></ul>注: <code>此参数在NeedPreview 为true时有效</code>
 * @method void setPreviewType(integer $PreviewType) 设置<p>预览模式下产生的预览链接类型 </p><ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li><li> **1** :H5链接 ,点开后在浏览器中展示合同的样子</li></ul>注: <code>此参数在NeedPreview 为true时有效</code>
 * @method boolean getOpenDynamicFlow() 获取<p>是否开启动态合同（动态签署人2.0）</p><ul><li> **false** :(默认) 不开启动态合同（动态签署人2.0）</li><li> **true** :开启动态合同（动态签署人2.0）,发起后可继续追加合同签署人</li></ul>
 * @method void setOpenDynamicFlow(boolean $OpenDynamicFlow) 设置<p>是否开启动态合同（动态签署人2.0）</p><ul><li> **false** :(默认) 不开启动态合同（动态签署人2.0）</li><li> **true** :开启动态合同（动态签署人2.0）,发起后可继续追加合同签署人</li></ul>
 * @method boolean getOpenDynamicSignFlow() 获取<p>是否开启动态合同（动态签署人2.0）<ul><li> <strong>false</strong> :(默认) 不开启动态合同（动态签署人2.0）</li><li> <strong>true</strong> :开启动态合同（动态签署人2.0）,发起时不设置签署方，发起后可继续追加合同签署人</li></ul></p>
 * @method void setOpenDynamicSignFlow(boolean $OpenDynamicSignFlow) 设置<p>是否开启动态合同（动态签署人2.0）<ul><li> <strong>false</strong> :(默认) 不开启动态合同（动态签署人2.0）</li><li> <strong>true</strong> :开启动态合同（动态签署人2.0）,发起时不设置签署方，发起后可继续追加合同签署人</li></ul></p>
 */
class ChannelCreateFlowByFilesRequest extends AbstractModel
{
    /**
     * @var Agent <p>合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a></p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li></ul>
     */
    public $Agent;

    /**
     * @var string <p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
     */
    public $FlowName;

    /**
     * @var string <p>合同流程描述信息(可自定义此描述)，最大长度1000个字符。</p>
     */
    public $FlowDescription;

    /**
     * @var array <p>合同流程的参与方列表, 最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息，不同类型的签署方传参方式可以参考文档 <a href="https://qian.tencent.com/developers/partner/flow_approver">签署方入参指引</a>。</p><p>如果合同流程是有序签署，Approvers列表中参与人的顺序就是默认的签署顺序, 请确保列表中参与人的顺序符合实际签署顺序。</p>
     */
    public $FlowApprovers;

    /**
     * @var array <p>本合同流程需包含的PDF文件资源编号列表，通过<a href="https://qian.tencent.com/developers/partnerApis/files/UploadFiles" target="_blank">UploadFiles</a>接口获取PDF文件资源编号。</p><p>注: <code>目前，此接口仅支持单个文件发起。</code></p>
     */
    public $FileIds;

    /**
     * @var array <p>模板或者合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>数据表格等填写控件</li></ul><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
     */
    public $Components;

    /**
     * @var integer <p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为合同流程创建后的365天时截止。<br>如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。</p>
     */
    public $Deadline;

    /**
     * @var string <p>该字段已废弃，请使用【应用号配置】中的回调地址</p>
     * @deprecated
     */
    public $CallbackUrl;

    /**
     * @var boolean <p>合同流程的签署顺序类型：</p><ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li><li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>**注**: <code>有序签署时以传入FlowApprovers数组的顺序作为签署顺序</code>
     */
    public $Unordered;

    /**
     * @var string <p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为255个字符，仅限中文、字母、数字和下划线组成。</p>
     */
    public $FlowType;

    /**
     * @var string <p>您可以自定义腾讯电子签小程序合同列表页展示的合同内容模板，模板中支持以下变量：</p><ul><li>{合同名称}   </li><li>{发起方企业} </li><li>{发起方姓名} </li><li>{签署方N企业}</li><li>{签署方N姓名}</li></ul>其中，N表示签署方的编号，从1开始，不能超过签署人的数量。<p>例如，如果是腾讯公司张三发给李四名称为“租房合同”的合同，您可以将此字段设置为：<code>合同名称:{合同名称};发起方: {发起方企业}({发起方姓名});签署方:{签署方1姓名}</code>，则小程序中列表页展示此合同为以下样子</p><p>合同名称：租房合同<br>发起方：腾讯公司(张三)<br>签署方：李四</p>
     */
    public $CustomShowMap;

    /**
     * @var string <p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1000长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/partner/callback_types_contracts_sign" target="_blank">回调通知</a>模块。</p>
     */
    public $CustomerData;

    /**
     * @var boolean <p>发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：</p><ul><li> **false**：（默认）不需要审批，直接签署。</li><li> **true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过ChannelCreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>注：<code>此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同</code>
     */
    public $NeedSignReview;

    /**
     * @var string <p>签署人校验方式<br>VerifyCheck: 人脸识别（默认）<br>MobileCheck：手机号验证，用户手机号和参与方手机号（ApproverMobile）相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）<br>参数说明：可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。</p>
     */
    public $ApproverVerifyType;

    /**
     * @var integer <p>签署方签署控件（印章/签名等）的生成方式：</p><ul><li> **0**：在合同流程发起时，由发起人指定签署方的签署控件的位置和数量。</li><li> **1**：签署方在签署时自行添加签署控件，可以拖动位置和控制数量。</li></ul><p><strong>注</strong>:<br>1.发起后添加控件功能不支持添加签批控件<br>2.签署方在签署时自行添加签署控件仅支持电子签小程序或web控制台签署，不支持H5</p>
     */
    public $SignBeanTag;

    /**
     * @var array <p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p><p><b>注</b></p><ol><li>抄送人名单中可以包括自然人以及本企业的员工（本企业员工必须已经完成认证并加入企业）。</li><li>请确保抄送人列表中的成员不与任何签署人重复。</li></ol>
     */
    public $CcInfos;

    /**
     * @var integer <p>可以设置以下时间节点来给抄送人发送短信通知来查看合同内容：</p><ul><li> **0**：合同发起时通知（默认值）</li><li> **1**：签署完成后通知</li></ul>
     */
    public $CcNotifyType;

    /**
     * @var string <p>个人自动签名的使用场景包括以下, 个人自动签署(即ApproverType设置成个人自动签署时)业务此值必传：</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN**：电子处方单（医疗自动签）  </li><li> **OTHER** :  通用场景</li></ul>注: <code>个人自动签名场景是白名单功能，使用前请与对接的客户经理联系沟通。</code>
     */
    public $AutoSignScene;

    /**
     * @var UserInfo <p>操作者的信息，不用传</p>
     * @deprecated
     */
    public $Operator;

    /**
     * @var integer <p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
     */
    public $FlowDisplayType;

    /**
     * @var boolean <p>是否为预览模式，取值如下： <ul><li> <strong>false</strong>：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li> <li> <strong>true</strong>：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。</li></ul></p>
     */
    public $NeedPreview;

    /**
     * @var integer <p>预览模式下产生的预览链接类型 </p><ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li><li> **1** :H5链接 ,点开后在浏览器中展示合同的样子</li></ul>注: <code>此参数在NeedPreview 为true时有效</code>
     */
    public $PreviewType;

    /**
     * @var boolean <p>是否开启动态合同（动态签署人2.0）</p><ul><li> **false** :(默认) 不开启动态合同（动态签署人2.0）</li><li> **true** :开启动态合同（动态签署人2.0）,发起后可继续追加合同签署人</li></ul>
     * @deprecated
     */
    public $OpenDynamicFlow;

    /**
     * @var boolean <p>是否开启动态合同（动态签署人2.0）<ul><li> <strong>false</strong> :(默认) 不开启动态合同（动态签署人2.0）</li><li> <strong>true</strong> :开启动态合同（动态签署人2.0）,发起时不设置签署方，发起后可继续追加合同签署人</li></ul></p>
     */
    public $OpenDynamicSignFlow;

    /**
     * @param Agent $Agent <p>合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a></p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li></ul>
     * @param string $FlowName <p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
     * @param string $FlowDescription <p>合同流程描述信息(可自定义此描述)，最大长度1000个字符。</p>
     * @param array $FlowApprovers <p>合同流程的参与方列表, 最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息，不同类型的签署方传参方式可以参考文档 <a href="https://qian.tencent.com/developers/partner/flow_approver">签署方入参指引</a>。</p><p>如果合同流程是有序签署，Approvers列表中参与人的顺序就是默认的签署顺序, 请确保列表中参与人的顺序符合实际签署顺序。</p>
     * @param array $FileIds <p>本合同流程需包含的PDF文件资源编号列表，通过<a href="https://qian.tencent.com/developers/partnerApis/files/UploadFiles" target="_blank">UploadFiles</a>接口获取PDF文件资源编号。</p><p>注: <code>目前，此接口仅支持单个文件发起。</code></p>
     * @param array $Components <p>模板或者合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>数据表格等填写控件</li></ul><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
     * @param integer $Deadline <p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为合同流程创建后的365天时截止。<br>如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。</p>
     * @param string $CallbackUrl <p>该字段已废弃，请使用【应用号配置】中的回调地址</p>
     * @param boolean $Unordered <p>合同流程的签署顺序类型：</p><ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li><li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>**注**: <code>有序签署时以传入FlowApprovers数组的顺序作为签署顺序</code>
     * @param string $FlowType <p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为255个字符，仅限中文、字母、数字和下划线组成。</p>
     * @param string $CustomShowMap <p>您可以自定义腾讯电子签小程序合同列表页展示的合同内容模板，模板中支持以下变量：</p><ul><li>{合同名称}   </li><li>{发起方企业} </li><li>{发起方姓名} </li><li>{签署方N企业}</li><li>{签署方N姓名}</li></ul>其中，N表示签署方的编号，从1开始，不能超过签署人的数量。<p>例如，如果是腾讯公司张三发给李四名称为“租房合同”的合同，您可以将此字段设置为：<code>合同名称:{合同名称};发起方: {发起方企业}({发起方姓名});签署方:{签署方1姓名}</code>，则小程序中列表页展示此合同为以下样子</p><p>合同名称：租房合同<br>发起方：腾讯公司(张三)<br>签署方：李四</p>
     * @param string $CustomerData <p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1000长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/partner/callback_types_contracts_sign" target="_blank">回调通知</a>模块。</p>
     * @param boolean $NeedSignReview <p>发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：</p><ul><li> **false**：（默认）不需要审批，直接签署。</li><li> **true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过ChannelCreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>注：<code>此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同</code>
     * @param string $ApproverVerifyType <p>签署人校验方式<br>VerifyCheck: 人脸识别（默认）<br>MobileCheck：手机号验证，用户手机号和参与方手机号（ApproverMobile）相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）<br>参数说明：可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。</p>
     * @param integer $SignBeanTag <p>签署方签署控件（印章/签名等）的生成方式：</p><ul><li> **0**：在合同流程发起时，由发起人指定签署方的签署控件的位置和数量。</li><li> **1**：签署方在签署时自行添加签署控件，可以拖动位置和控制数量。</li></ul><p><strong>注</strong>:<br>1.发起后添加控件功能不支持添加签批控件<br>2.签署方在签署时自行添加签署控件仅支持电子签小程序或web控制台签署，不支持H5</p>
     * @param array $CcInfos <p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p><p><b>注</b></p><ol><li>抄送人名单中可以包括自然人以及本企业的员工（本企业员工必须已经完成认证并加入企业）。</li><li>请确保抄送人列表中的成员不与任何签署人重复。</li></ol>
     * @param integer $CcNotifyType <p>可以设置以下时间节点来给抄送人发送短信通知来查看合同内容：</p><ul><li> **0**：合同发起时通知（默认值）</li><li> **1**：签署完成后通知</li></ul>
     * @param string $AutoSignScene <p>个人自动签名的使用场景包括以下, 个人自动签署(即ApproverType设置成个人自动签署时)业务此值必传：</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN**：电子处方单（医疗自动签）  </li><li> **OTHER** :  通用场景</li></ul>注: <code>个人自动签名场景是白名单功能，使用前请与对接的客户经理联系沟通。</code>
     * @param UserInfo $Operator <p>操作者的信息，不用传</p>
     * @param integer $FlowDisplayType <p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
     * @param boolean $NeedPreview <p>是否为预览模式，取值如下： <ul><li> <strong>false</strong>：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li> <li> <strong>true</strong>：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。</li></ul></p>
     * @param integer $PreviewType <p>预览模式下产生的预览链接类型 </p><ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li><li> **1** :H5链接 ,点开后在浏览器中展示合同的样子</li></ul>注: <code>此参数在NeedPreview 为true时有效</code>
     * @param boolean $OpenDynamicFlow <p>是否开启动态合同（动态签署人2.0）</p><ul><li> **false** :(默认) 不开启动态合同（动态签署人2.0）</li><li> **true** :开启动态合同（动态签署人2.0）,发起后可继续追加合同签署人</li></ul>
     * @param boolean $OpenDynamicSignFlow <p>是否开启动态合同（动态签署人2.0）<ul><li> <strong>false</strong> :(默认) 不开启动态合同（动态签署人2.0）</li><li> <strong>true</strong> :开启动态合同（动态签署人2.0）,发起时不设置签署方，发起后可继续追加合同签署人</li></ul></p>
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("FlowApprovers",$param) and $param["FlowApprovers"] !== null) {
            $this->FlowApprovers = [];
            foreach ($param["FlowApprovers"] as $key => $value){
                $obj = new FlowApproverInfo();
                $obj->deserialize($value);
                array_push($this->FlowApprovers, $obj);
            }
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("CustomShowMap",$param) and $param["CustomShowMap"] !== null) {
            $this->CustomShowMap = $param["CustomShowMap"];
        }

        if (array_key_exists("CustomerData",$param) and $param["CustomerData"] !== null) {
            $this->CustomerData = $param["CustomerData"];
        }

        if (array_key_exists("NeedSignReview",$param) and $param["NeedSignReview"] !== null) {
            $this->NeedSignReview = $param["NeedSignReview"];
        }

        if (array_key_exists("ApproverVerifyType",$param) and $param["ApproverVerifyType"] !== null) {
            $this->ApproverVerifyType = $param["ApproverVerifyType"];
        }

        if (array_key_exists("SignBeanTag",$param) and $param["SignBeanTag"] !== null) {
            $this->SignBeanTag = $param["SignBeanTag"];
        }

        if (array_key_exists("CcInfos",$param) and $param["CcInfos"] !== null) {
            $this->CcInfos = [];
            foreach ($param["CcInfos"] as $key => $value){
                $obj = new CcInfo();
                $obj->deserialize($value);
                array_push($this->CcInfos, $obj);
            }
        }

        if (array_key_exists("CcNotifyType",$param) and $param["CcNotifyType"] !== null) {
            $this->CcNotifyType = $param["CcNotifyType"];
        }

        if (array_key_exists("AutoSignScene",$param) and $param["AutoSignScene"] !== null) {
            $this->AutoSignScene = $param["AutoSignScene"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("FlowDisplayType",$param) and $param["FlowDisplayType"] !== null) {
            $this->FlowDisplayType = $param["FlowDisplayType"];
        }

        if (array_key_exists("NeedPreview",$param) and $param["NeedPreview"] !== null) {
            $this->NeedPreview = $param["NeedPreview"];
        }

        if (array_key_exists("PreviewType",$param) and $param["PreviewType"] !== null) {
            $this->PreviewType = $param["PreviewType"];
        }

        if (array_key_exists("OpenDynamicFlow",$param) and $param["OpenDynamicFlow"] !== null) {
            $this->OpenDynamicFlow = $param["OpenDynamicFlow"];
        }

        if (array_key_exists("OpenDynamicSignFlow",$param) and $param["OpenDynamicSignFlow"] !== null) {
            $this->OpenDynamicSignFlow = $param["OpenDynamicSignFlow"];
        }
    }
}
