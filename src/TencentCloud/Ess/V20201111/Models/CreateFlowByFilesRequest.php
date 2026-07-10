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
 * CreateFlowByFiles请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>本合同的发起人  <a href="https://qcloudimg.tencent-cloud.cn/raw/f850cfbe163a1cb38439a9f551c2505c.png" target="_blank">点击查看合同发起人展示的位置</a></p><p>注： 支持填入集团子公司经办人 userId 代发合同。</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>本合同的发起人  <a href="https://qcloudimg.tencent-cloud.cn/raw/f850cfbe163a1cb38439a9f551c2505c.png" target="_blank">点击查看合同发起人展示的位置</a></p><p>注： 支持填入集团子公司经办人 userId 代发合同。</p>
 * @method string getFlowName() 获取<p>自定义的合同流程的名称，长度不能超过200个字符，只能由中文汉字、中文标点、英文字母、阿拉伯数字、空格、小括号、中括号、中划线、下划线以及（,）、（;）、（.）、(&amp;)、（+）组成。</p><p>该名称还将用于合同签署完成后文件下载的默认文件名称。</p>
 * @method void setFlowName(string $FlowName) 设置<p>自定义的合同流程的名称，长度不能超过200个字符，只能由中文汉字、中文标点、英文字母、阿拉伯数字、空格、小括号、中括号、中划线、下划线以及（,）、（;）、（.）、(&amp;)、（+）组成。</p><p>该名称还将用于合同签署完成后文件下载的默认文件名称。</p>
 * @method array getFileIds() 获取<p>本合同流程需包含的PDF文件资源编号列表，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">UploadFiles</a>接口获取PDF文件资源编号。</p><p>注:  <code>目前，此接口仅支持单个文件发起。</code></p>
 * @method void setFileIds(array $FileIds) 设置<p>本合同流程需包含的PDF文件资源编号列表，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">UploadFiles</a>接口获取PDF文件资源编号。</p><p>注:  <code>目前，此接口仅支持单个文件发起。</code></p>
 * @method array getApprovers() 获取<p>合同流程的参与方列表，最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息，具体定义可以参考开发者中心的ApproverInfo结构体。</p><p>如果合同流程是有序签署，Approvers列表中参与人的顺序就是默认的签署顺序，请确保列表中参与人的顺序符合实际签署顺序。</p>
 * @method void setApprovers(array $Approvers) 设置<p>合同流程的参与方列表，最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息，具体定义可以参考开发者中心的ApproverInfo结构体。</p><p>如果合同流程是有序签署，Approvers列表中参与人的顺序就是默认的签署顺序，请确保列表中参与人的顺序符合实际签署顺序。</p>
 * @method string getFlowDescription() 获取<p>合同流程描述信息(可自定义此描述)，最大长度1000个字符。</p>
 * @method void setFlowDescription(string $FlowDescription) 设置<p>合同流程描述信息(可自定义此描述)，最大长度1000个字符。</p>
 * @method string getFlowType() 获取<p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。<br>如果用户已经在控制台创建了自定义合同类型，可以将这里的类型名称传入。 如果没有创建，我们会自动给发起方公司创建此自定义合同类型。<br><img src="https://qcloudimg.tencent-cloud.cn/raw/36582cea03ae6a2559894844942b5d5c.png" alt="image"></p>
 * @method void setFlowType(string $FlowType) 设置<p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。<br>如果用户已经在控制台创建了自定义合同类型，可以将这里的类型名称传入。 如果没有创建，我们会自动给发起方公司创建此自定义合同类型。<br><img src="https://qcloudimg.tencent-cloud.cn/raw/36582cea03ae6a2559894844942b5d5c.png" alt="image"></p>
 * @method array getComponents() 获取<p>发起的时候合成到PDF上的填写控件（需要提供填写控件的内容）</p><ul><li> 单行文本控件      </li><li> 多行文本控件      </li><li> 勾选框控件        </li><li> 数字控件          </li><li> 图片控件          </li><li> 水印控件等          </li></ul><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
 * @method void setComponents(array $Components) 设置<p>发起的时候合成到PDF上的填写控件（需要提供填写控件的内容）</p><ul><li> 单行文本控件      </li><li> 多行文本控件      </li><li> 勾选框控件        </li><li> 数字控件          </li><li> 图片控件          </li><li> 水印控件等          </li></ul><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
 * @method array getCcInfos() 获取<p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p><p><b>注</b></p><ol><li>抄送人名单中可以包括自然人以及本企业的员工。</li><li>请确保抄送人列表中的成员不与任何签署人重复。</li></ol>
 * @method void setCcInfos(array $CcInfos) 设置<p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p><p><b>注</b></p><ol><li>抄送人名单中可以包括自然人以及本企业的员工。</li><li>请确保抄送人列表中的成员不与任何签署人重复。</li></ol>
 * @method integer getCcNotifyType() 获取<p>可以设置以下时间节点来给抄送人发送短信通知来查看合同内容：</p><ul><li> **0**：合同发起时通知（默认值）</li><li> **1**：签署完成后通知</li></ul>
 * @method void setCcNotifyType(integer $CcNotifyType) 设置<p>可以设置以下时间节点来给抄送人发送短信通知来查看合同内容：</p><ul><li> **0**：合同发起时通知（默认值）</li><li> **1**：签署完成后通知</li></ul>
 * @method boolean getNeedPreview() 获取<p>是否为预览模式，取值如下：</p><ul><li> **false**：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li><li> **true**：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。</li></ul>
 * @method void setNeedPreview(boolean $NeedPreview) 设置<p>是否为预览模式，取值如下：</p><ul><li> **false**：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li><li> **true**：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。</li></ul>
 * @method integer getPreviewType() 获取<p>预览模式下产生的预览链接类型 </p><ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li><li> **1** :H5链接 ,点开后在浏览器中展示合同的样子</li></ul>注: <code>此参数在NeedPreview 为true时有效</code>
 * @method void setPreviewType(integer $PreviewType) 设置<p>预览模式下产生的预览链接类型 </p><ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li><li> **1** :H5链接 ,点开后在浏览器中展示合同的样子</li></ul>注: <code>此参数在NeedPreview 为true时有效</code>
 * @method integer getDeadline() 获取<p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为合同流程创建后的365天时截止。<br>如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。</p>
 * @method void setDeadline(integer $Deadline) 设置<p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为合同流程创建后的365天时截止。<br>如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。</p>
 * @method boolean getUnordered() 获取<p>合同流程的签署顺序类型：</p><ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li><li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>
 * @method void setUnordered(boolean $Unordered) 设置<p>合同流程的签署顺序类型：</p><ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li><li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>
 * @method string getUserData() 获取<p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 20480长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2">回调通知</a>模块。</p>
 * @method void setUserData(string $UserData) 设置<p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 20480长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2">回调通知</a>模块。</p>
 * @method integer getRemindedOn() 获取<p>合同到期提醒时间，为Unix标准时间戳（秒）格式，支持的范围是从发起时间开始到后10年内。</p><p>到达提醒时间后，腾讯电子签会短信通知发起方企业合同提醒，可用于处理合同到期事务，如合同续签等事宜。</p>
 * @method void setRemindedOn(integer $RemindedOn) 设置<p>合同到期提醒时间，为Unix标准时间戳（秒）格式，支持的范围是从发起时间开始到后10年内。</p><p>到达提醒时间后，腾讯电子签会短信通知发起方企业合同提醒，可用于处理合同到期事务，如合同续签等事宜。</p>
 * @method string getApproverVerifyType() 获取<p>指定个人签署方查看合同的校验方式<ul><li>   <strong>VerifyCheck</strong>  :（默认）人脸识别,人脸识别后才能查看合同内容 </li><li>   <strong>MobileCheck</strong>  :  手机号验证, 用户手机号和参与方手机号（ApproverMobile）相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul></p>
 * @method void setApproverVerifyType(string $ApproverVerifyType) 设置<p>指定个人签署方查看合同的校验方式<ul><li>   <strong>VerifyCheck</strong>  :（默认）人脸识别,人脸识别后才能查看合同内容 </li><li>   <strong>MobileCheck</strong>  :  手机号验证, 用户手机号和参与方手机号（ApproverMobile）相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul></p>
 * @method integer getSignBeanTag() 获取<p>签署方签署控件（印章/签名等）的生成方式：</p><ul><li> **0**：在合同流程发起时，由发起人指定签署方的签署控件的位置和数量。</li><li> **1**：签署方在签署时自行添加签署控件，可以拖动位置和控制数量。</li></ul><p>注：签署方在签署时自行添加签署控件仅支持电子签小程序或web控制台签署，不支持H5</p>
 * @method void setSignBeanTag(integer $SignBeanTag) 设置<p>签署方签署控件（印章/签名等）的生成方式：</p><ul><li> **0**：在合同流程发起时，由发起人指定签署方的签署控件的位置和数量。</li><li> **1**：签署方在签署时自行添加签署控件，可以拖动位置和控制数量。</li></ul><p>注：签署方在签署时自行添加签署控件仅支持电子签小程序或web控制台签署，不支持H5</p>
 * @method string getCustomShowMap() 获取<p>您可以自定义腾讯电子签小程序合同列表页展示的合同内容模板，模板中支持以下变量：</p><ul><li>{合同名称}   </li><li>{发起方企业} </li><li>{发起方姓名} </li><li>{签署方N企业}</li><li>{签署方N姓名}</li></ul>其中，N表示签署方的编号，从1开始，不能超过签署人的数量。<p>例如，如果是腾讯公司张三发给李四名称为“租房合同”的合同，您可以将此字段设置为：<code>合同名称:{合同名称};发起方: {发起方企业}({发起方姓名});签署方:{签署方1姓名}</code>，则小程序中列表页展示此合同为以下样子</p><p>合同名称：租房合同<br>发起方：腾讯公司(张三)<br>签署方：李四</p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/628f0928cac15d2e3bfa6088f53f5998.png" alt="image"></p>
 * @method void setCustomShowMap(string $CustomShowMap) 设置<p>您可以自定义腾讯电子签小程序合同列表页展示的合同内容模板，模板中支持以下变量：</p><ul><li>{合同名称}   </li><li>{发起方企业} </li><li>{发起方姓名} </li><li>{签署方N企业}</li><li>{签署方N姓名}</li></ul>其中，N表示签署方的编号，从1开始，不能超过签署人的数量。<p>例如，如果是腾讯公司张三发给李四名称为“租房合同”的合同，您可以将此字段设置为：<code>合同名称:{合同名称};发起方: {发起方企业}({发起方姓名});签署方:{签署方1姓名}</code>，则小程序中列表页展示此合同为以下样子</p><p>合同名称：租房合同<br>发起方：腾讯公司(张三)<br>签署方：李四</p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/628f0928cac15d2e3bfa6088f53f5998.png" alt="image"></p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method string getAutoSignScene() 获取<p>个人自动签名的使用场景包括以下, 个人自动签署(即ApproverType设置成个人自动签署时)业务此值必传：</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN**：电子处方单（医疗自动签）  </li><li> **OTHER** :  通用场景</li></ul>注: <code>个人自动签名场景是白名单功能，使用前请与对接的客户经理联系沟通。</code>
 * @method void setAutoSignScene(string $AutoSignScene) 设置<p>个人自动签名的使用场景包括以下, 个人自动签署(即ApproverType设置成个人自动签署时)业务此值必传：</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN**：电子处方单（医疗自动签）  </li><li> **OTHER** :  通用场景</li></ul>注: <code>个人自动签名场景是白名单功能，使用前请与对接的客户经理联系沟通。</code>
 * @method boolean getNeedSignReview() 获取<p>发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：</p><ul><li> **false**：（默认）不需要审批，直接签署。</li><li> **true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>注：<code>此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同</code>
 * @method void setNeedSignReview(boolean $NeedSignReview) 设置<p>发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：</p><ul><li> **false**：（默认）不需要审批，直接签署。</li><li> **true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>注：<code>此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同</code>
 * @method integer getFlowDisplayType() 获取<p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
 * @method void setFlowDisplayType(integer $FlowDisplayType) 设置<p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
 * @method boolean getOpenDynamicSignFlow() 获取<p>是否开启动态签署合同：<ul><li> <strong>true</strong>：开启动态签署合同，可在发起时可以不传签署人，在签署过程中追加签署人（必须满足：1，发起方企业开启了模块化计费能力；2，发起方企业在企业应用管理中开启了动态签署人2.0能力）    。</li><li> <strong>false</strong>：不开启动态签署合同。</li></ul></p>
 * @method void setOpenDynamicSignFlow(boolean $OpenDynamicSignFlow) 设置<p>是否开启动态签署合同：<ul><li> <strong>true</strong>：开启动态签署合同，可在发起时可以不传签署人，在签署过程中追加签署人（必须满足：1，发起方企业开启了模块化计费能力；2，发起方企业在企业应用管理中开启了动态签署人2.0能力）    。</li><li> <strong>false</strong>：不开启动态签署合同。</li></ul></p>
 * @method boolean getWorkflow() 获取<p>是否开启发起合同审批，默认：false（不开启），开启后，发起合同（StartFlow），会提交电子签内置的审批流</p>
 * @method void setWorkflow(boolean $Workflow) 设置<p>是否开启发起合同审批，默认：false（不开启），开启后，发起合同（StartFlow），会提交电子签内置的审批流</p>
 * @method FlowOperateLimit getFlowOperateLimit() 获取<p>发起合同流程时对合同流程的部分操作加以限制的配置。</p>
 * @method void setFlowOperateLimit(FlowOperateLimit $FlowOperateLimit) 设置<p>发起合同流程时对合同流程的部分操作加以限制的配置。</p>
 */
class CreateFlowByFilesRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>本合同的发起人  <a href="https://qcloudimg.tencent-cloud.cn/raw/f850cfbe163a1cb38439a9f551c2505c.png" target="_blank">点击查看合同发起人展示的位置</a></p><p>注： 支持填入集团子公司经办人 userId 代发合同。</p>
     */
    public $Operator;

    /**
     * @var string <p>自定义的合同流程的名称，长度不能超过200个字符，只能由中文汉字、中文标点、英文字母、阿拉伯数字、空格、小括号、中括号、中划线、下划线以及（,）、（;）、（.）、(&amp;)、（+）组成。</p><p>该名称还将用于合同签署完成后文件下载的默认文件名称。</p>
     */
    public $FlowName;

    /**
     * @var array <p>本合同流程需包含的PDF文件资源编号列表，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">UploadFiles</a>接口获取PDF文件资源编号。</p><p>注:  <code>目前，此接口仅支持单个文件发起。</code></p>
     */
    public $FileIds;

    /**
     * @var array <p>合同流程的参与方列表，最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息，具体定义可以参考开发者中心的ApproverInfo结构体。</p><p>如果合同流程是有序签署，Approvers列表中参与人的顺序就是默认的签署顺序，请确保列表中参与人的顺序符合实际签署顺序。</p>
     */
    public $Approvers;

    /**
     * @var string <p>合同流程描述信息(可自定义此描述)，最大长度1000个字符。</p>
     */
    public $FlowDescription;

    /**
     * @var string <p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。<br>如果用户已经在控制台创建了自定义合同类型，可以将这里的类型名称传入。 如果没有创建，我们会自动给发起方公司创建此自定义合同类型。<br><img src="https://qcloudimg.tencent-cloud.cn/raw/36582cea03ae6a2559894844942b5d5c.png" alt="image"></p>
     */
    public $FlowType;

    /**
     * @var array <p>发起的时候合成到PDF上的填写控件（需要提供填写控件的内容）</p><ul><li> 单行文本控件      </li><li> 多行文本控件      </li><li> 勾选框控件        </li><li> 数字控件          </li><li> 图片控件          </li><li> 水印控件等          </li></ul><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
     */
    public $Components;

    /**
     * @var array <p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p><p><b>注</b></p><ol><li>抄送人名单中可以包括自然人以及本企业的员工。</li><li>请确保抄送人列表中的成员不与任何签署人重复。</li></ol>
     */
    public $CcInfos;

    /**
     * @var integer <p>可以设置以下时间节点来给抄送人发送短信通知来查看合同内容：</p><ul><li> **0**：合同发起时通知（默认值）</li><li> **1**：签署完成后通知</li></ul>
     */
    public $CcNotifyType;

    /**
     * @var boolean <p>是否为预览模式，取值如下：</p><ul><li> **false**：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li><li> **true**：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。</li></ul>
     */
    public $NeedPreview;

    /**
     * @var integer <p>预览模式下产生的预览链接类型 </p><ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li><li> **1** :H5链接 ,点开后在浏览器中展示合同的样子</li></ul>注: <code>此参数在NeedPreview 为true时有效</code>
     */
    public $PreviewType;

    /**
     * @var integer <p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为合同流程创建后的365天时截止。<br>如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。</p>
     */
    public $Deadline;

    /**
     * @var boolean <p>合同流程的签署顺序类型：</p><ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li><li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>
     */
    public $Unordered;

    /**
     * @var string <p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 20480长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2">回调通知</a>模块。</p>
     */
    public $UserData;

    /**
     * @var integer <p>合同到期提醒时间，为Unix标准时间戳（秒）格式，支持的范围是从发起时间开始到后10年内。</p><p>到达提醒时间后，腾讯电子签会短信通知发起方企业合同提醒，可用于处理合同到期事务，如合同续签等事宜。</p>
     */
    public $RemindedOn;

    /**
     * @var string <p>指定个人签署方查看合同的校验方式<ul><li>   <strong>VerifyCheck</strong>  :（默认）人脸识别,人脸识别后才能查看合同内容 </li><li>   <strong>MobileCheck</strong>  :  手机号验证, 用户手机号和参与方手机号（ApproverMobile）相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul></p>
     */
    public $ApproverVerifyType;

    /**
     * @var integer <p>签署方签署控件（印章/签名等）的生成方式：</p><ul><li> **0**：在合同流程发起时，由发起人指定签署方的签署控件的位置和数量。</li><li> **1**：签署方在签署时自行添加签署控件，可以拖动位置和控制数量。</li></ul><p>注：签署方在签署时自行添加签署控件仅支持电子签小程序或web控制台签署，不支持H5</p>
     */
    public $SignBeanTag;

    /**
     * @var string <p>您可以自定义腾讯电子签小程序合同列表页展示的合同内容模板，模板中支持以下变量：</p><ul><li>{合同名称}   </li><li>{发起方企业} </li><li>{发起方姓名} </li><li>{签署方N企业}</li><li>{签署方N姓名}</li></ul>其中，N表示签署方的编号，从1开始，不能超过签署人的数量。<p>例如，如果是腾讯公司张三发给李四名称为“租房合同”的合同，您可以将此字段设置为：<code>合同名称:{合同名称};发起方: {发起方企业}({发起方姓名});签署方:{签署方1姓名}</code>，则小程序中列表页展示此合同为以下样子</p><p>合同名称：租房合同<br>发起方：腾讯公司(张三)<br>签署方：李四</p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/628f0928cac15d2e3bfa6088f53f5998.png" alt="image"></p>
     */
    public $CustomShowMap;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var string <p>个人自动签名的使用场景包括以下, 个人自动签署(即ApproverType设置成个人自动签署时)业务此值必传：</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN**：电子处方单（医疗自动签）  </li><li> **OTHER** :  通用场景</li></ul>注: <code>个人自动签名场景是白名单功能，使用前请与对接的客户经理联系沟通。</code>
     */
    public $AutoSignScene;

    /**
     * @var boolean <p>发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：</p><ul><li> **false**：（默认）不需要审批，直接签署。</li><li> **true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>注：<code>此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同</code>
     */
    public $NeedSignReview;

    /**
     * @var integer <p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
     */
    public $FlowDisplayType;

    /**
     * @var boolean <p>是否开启动态签署合同：<ul><li> <strong>true</strong>：开启动态签署合同，可在发起时可以不传签署人，在签署过程中追加签署人（必须满足：1，发起方企业开启了模块化计费能力；2，发起方企业在企业应用管理中开启了动态签署人2.0能力）    。</li><li> <strong>false</strong>：不开启动态签署合同。</li></ul></p>
     */
    public $OpenDynamicSignFlow;

    /**
     * @var boolean <p>是否开启发起合同审批，默认：false（不开启），开启后，发起合同（StartFlow），会提交电子签内置的审批流</p>
     */
    public $Workflow;

    /**
     * @var FlowOperateLimit <p>发起合同流程时对合同流程的部分操作加以限制的配置。</p>
     */
    public $FlowOperateLimit;

    /**
     * @param UserInfo $Operator <p>本合同的发起人  <a href="https://qcloudimg.tencent-cloud.cn/raw/f850cfbe163a1cb38439a9f551c2505c.png" target="_blank">点击查看合同发起人展示的位置</a></p><p>注： 支持填入集团子公司经办人 userId 代发合同。</p>
     * @param string $FlowName <p>自定义的合同流程的名称，长度不能超过200个字符，只能由中文汉字、中文标点、英文字母、阿拉伯数字、空格、小括号、中括号、中划线、下划线以及（,）、（;）、（.）、(&amp;)、（+）组成。</p><p>该名称还将用于合同签署完成后文件下载的默认文件名称。</p>
     * @param array $FileIds <p>本合同流程需包含的PDF文件资源编号列表，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">UploadFiles</a>接口获取PDF文件资源编号。</p><p>注:  <code>目前，此接口仅支持单个文件发起。</code></p>
     * @param array $Approvers <p>合同流程的参与方列表，最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息，具体定义可以参考开发者中心的ApproverInfo结构体。</p><p>如果合同流程是有序签署，Approvers列表中参与人的顺序就是默认的签署顺序，请确保列表中参与人的顺序符合实际签署顺序。</p>
     * @param string $FlowDescription <p>合同流程描述信息(可自定义此描述)，最大长度1000个字符。</p>
     * @param string $FlowType <p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。<br>如果用户已经在控制台创建了自定义合同类型，可以将这里的类型名称传入。 如果没有创建，我们会自动给发起方公司创建此自定义合同类型。<br><img src="https://qcloudimg.tencent-cloud.cn/raw/36582cea03ae6a2559894844942b5d5c.png" alt="image"></p>
     * @param array $Components <p>发起的时候合成到PDF上的填写控件（需要提供填写控件的内容）</p><ul><li> 单行文本控件      </li><li> 多行文本控件      </li><li> 勾选框控件        </li><li> 数字控件          </li><li> 图片控件          </li><li> 水印控件等          </li></ul><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
     * @param array $CcInfos <p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p><p><b>注</b></p><ol><li>抄送人名单中可以包括自然人以及本企业的员工。</li><li>请确保抄送人列表中的成员不与任何签署人重复。</li></ol>
     * @param integer $CcNotifyType <p>可以设置以下时间节点来给抄送人发送短信通知来查看合同内容：</p><ul><li> **0**：合同发起时通知（默认值）</li><li> **1**：签署完成后通知</li></ul>
     * @param boolean $NeedPreview <p>是否为预览模式，取值如下：</p><ul><li> **false**：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li><li> **true**：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。</li></ul>
     * @param integer $PreviewType <p>预览模式下产生的预览链接类型 </p><ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li><li> **1** :H5链接 ,点开后在浏览器中展示合同的样子</li></ul>注: <code>此参数在NeedPreview 为true时有效</code>
     * @param integer $Deadline <p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为合同流程创建后的365天时截止。<br>如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。</p>
     * @param boolean $Unordered <p>合同流程的签署顺序类型：</p><ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li><li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>
     * @param string $UserData <p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 20480长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2">回调通知</a>模块。</p>
     * @param integer $RemindedOn <p>合同到期提醒时间，为Unix标准时间戳（秒）格式，支持的范围是从发起时间开始到后10年内。</p><p>到达提醒时间后，腾讯电子签会短信通知发起方企业合同提醒，可用于处理合同到期事务，如合同续签等事宜。</p>
     * @param string $ApproverVerifyType <p>指定个人签署方查看合同的校验方式<ul><li>   <strong>VerifyCheck</strong>  :（默认）人脸识别,人脸识别后才能查看合同内容 </li><li>   <strong>MobileCheck</strong>  :  手机号验证, 用户手机号和参与方手机号（ApproverMobile）相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul></p>
     * @param integer $SignBeanTag <p>签署方签署控件（印章/签名等）的生成方式：</p><ul><li> **0**：在合同流程发起时，由发起人指定签署方的签署控件的位置和数量。</li><li> **1**：签署方在签署时自行添加签署控件，可以拖动位置和控制数量。</li></ul><p>注：签署方在签署时自行添加签署控件仅支持电子签小程序或web控制台签署，不支持H5</p>
     * @param string $CustomShowMap <p>您可以自定义腾讯电子签小程序合同列表页展示的合同内容模板，模板中支持以下变量：</p><ul><li>{合同名称}   </li><li>{发起方企业} </li><li>{发起方姓名} </li><li>{签署方N企业}</li><li>{签署方N姓名}</li></ul>其中，N表示签署方的编号，从1开始，不能超过签署人的数量。<p>例如，如果是腾讯公司张三发给李四名称为“租房合同”的合同，您可以将此字段设置为：<code>合同名称:{合同名称};发起方: {发起方企业}({发起方姓名});签署方:{签署方1姓名}</code>，则小程序中列表页展示此合同为以下样子</p><p>合同名称：租房合同<br>发起方：腾讯公司(张三)<br>签署方：李四</p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/628f0928cac15d2e3bfa6088f53f5998.png" alt="image"></p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param string $AutoSignScene <p>个人自动签名的使用场景包括以下, 个人自动签署(即ApproverType设置成个人自动签署时)业务此值必传：</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN**：电子处方单（医疗自动签）  </li><li> **OTHER** :  通用场景</li></ul>注: <code>个人自动签名场景是白名单功能，使用前请与对接的客户经理联系沟通。</code>
     * @param boolean $NeedSignReview <p>发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：</p><ul><li> **false**：（默认）不需要审批，直接签署。</li><li> **true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>注：<code>此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同</code>
     * @param integer $FlowDisplayType <p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
     * @param boolean $OpenDynamicSignFlow <p>是否开启动态签署合同：<ul><li> <strong>true</strong>：开启动态签署合同，可在发起时可以不传签署人，在签署过程中追加签署人（必须满足：1，发起方企业开启了模块化计费能力；2，发起方企业在企业应用管理中开启了动态签署人2.0能力）    。</li><li> <strong>false</strong>：不开启动态签署合同。</li></ul></p>
     * @param boolean $Workflow <p>是否开启发起合同审批，默认：false（不开启），开启后，发起合同（StartFlow），会提交电子签内置的审批流</p>
     * @param FlowOperateLimit $FlowOperateLimit <p>发起合同流程时对合同流程的部分操作加以限制的配置。</p>
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new ApproverInfo();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
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

        if (array_key_exists("NeedPreview",$param) and $param["NeedPreview"] !== null) {
            $this->NeedPreview = $param["NeedPreview"];
        }

        if (array_key_exists("PreviewType",$param) and $param["PreviewType"] !== null) {
            $this->PreviewType = $param["PreviewType"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("RemindedOn",$param) and $param["RemindedOn"] !== null) {
            $this->RemindedOn = $param["RemindedOn"];
        }

        if (array_key_exists("ApproverVerifyType",$param) and $param["ApproverVerifyType"] !== null) {
            $this->ApproverVerifyType = $param["ApproverVerifyType"];
        }

        if (array_key_exists("SignBeanTag",$param) and $param["SignBeanTag"] !== null) {
            $this->SignBeanTag = $param["SignBeanTag"];
        }

        if (array_key_exists("CustomShowMap",$param) and $param["CustomShowMap"] !== null) {
            $this->CustomShowMap = $param["CustomShowMap"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("AutoSignScene",$param) and $param["AutoSignScene"] !== null) {
            $this->AutoSignScene = $param["AutoSignScene"];
        }

        if (array_key_exists("NeedSignReview",$param) and $param["NeedSignReview"] !== null) {
            $this->NeedSignReview = $param["NeedSignReview"];
        }

        if (array_key_exists("FlowDisplayType",$param) and $param["FlowDisplayType"] !== null) {
            $this->FlowDisplayType = $param["FlowDisplayType"];
        }

        if (array_key_exists("OpenDynamicSignFlow",$param) and $param["OpenDynamicSignFlow"] !== null) {
            $this->OpenDynamicSignFlow = $param["OpenDynamicSignFlow"];
        }

        if (array_key_exists("Workflow",$param) and $param["Workflow"] !== null) {
            $this->Workflow = $param["Workflow"];
        }

        if (array_key_exists("FlowOperateLimit",$param) and $param["FlowOperateLimit"] !== null) {
            $this->FlowOperateLimit = new FlowOperateLimit();
            $this->FlowOperateLimit->deserialize($param["FlowOperateLimit"]);
        }
    }
}
