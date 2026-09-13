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
 * CreatePrepareFlow请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。使用此接口时，必须填写userId。<br>支持填入集团子公司经办人 userId 代发合同。</p><p>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。使用此接口时，必须填写userId。<br>支持填入集团子公司经办人 userId 代发合同。</p><p>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getResourceId() 获取<p>资源id，与ResourceType相对应，取值范围：</p><ul><li>文件Id（通过UploadFiles获取文件资源Id）</li><li>模板Id（通过控制台创建模板后获取模板Id）</li><li>草稿Id（通过嵌入页面保存草稿后获取草稿Id）</li></ul>注意：需要同时设置 ResourceType 参数指定资源类型
 * @method void setResourceId(string $ResourceId) 设置<p>资源id，与ResourceType相对应，取值范围：</p><ul><li>文件Id（通过UploadFiles获取文件资源Id）</li><li>模板Id（通过控制台创建模板后获取模板Id）</li><li>草稿Id（通过嵌入页面保存草稿后获取草稿Id）</li></ul>注意：需要同时设置 ResourceType 参数指定资源类型
 * @method string getFlowName() 获取<p>自定义的合同流程的名称，长度不能超过200个字符，只能由中文汉字、中文标点、英文字母、阿拉伯数字、空格、小括号、中括号、中划线、下划线以及（,）、（;）、（.）、(&amp;)、（+）组成。</p><p>该名称还将用于合同签署完成后文件下载的默认文件名称。</p>
 * @method void setFlowName(string $FlowName) 设置<p>自定义的合同流程的名称，长度不能超过200个字符，只能由中文汉字、中文标点、英文字母、阿拉伯数字、空格、小括号、中括号、中划线、下划线以及（,）、（;）、（.）、(&amp;)、（+）组成。</p><p>该名称还将用于合同签署完成后文件下载的默认文件名称。</p>
 * @method integer getResourceType() 获取<p>资源类型，取值有：</p><ul><li> **1**：模板</li><li> **2**：文件（默认值）</li><li> **3**：草稿</li></ul>
 * @method void setResourceType(integer $ResourceType) 设置<p>资源类型，取值有：</p><ul><li> **1**：模板</li><li> **2**：文件（默认值）</li><li> **3**：草稿</li></ul>
 * @method boolean getUnordered() 获取<p>合同流程的签署顺序类型：</p><ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li><li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>
 * @method void setUnordered(boolean $Unordered) 设置<p>合同流程的签署顺序类型：</p><ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li><li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>
 * @method integer getDeadline() 获取<p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为合同流程创建后的365天时截止。</p>
 * @method void setDeadline(integer $Deadline) 设置<p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为合同流程创建后的365天时截止。</p>
 * @method string getUserFlowTypeId() 获取<p>用户自定义合同类型Id</p><p>该id为电子签企业内的合同类型id， 可以在控制台-合同-自定义合同类型处获取<br>注: <code>该参数如果和FlowType同时传，以该参数优先生效</code></p>
 * @method void setUserFlowTypeId(string $UserFlowTypeId) 设置<p>用户自定义合同类型Id</p><p>该id为电子签企业内的合同类型id， 可以在控制台-合同-自定义合同类型处获取<br>注: <code>该参数如果和FlowType同时传，以该参数优先生效</code></p>
 * @method string getFlowType() 获取<p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。</p>
 * @method void setFlowType(string $FlowType) 设置<p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。</p>
 * @method array getApprovers() 获取<p>合同流程的参与方列表，最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息，具体定义可以参考开发者中心的ApproverInfo结构体。</p><p>如果合同流程是有序签署，Approvers列表中参与人的顺序就是默认的签署顺序，请确保列表中参与人的顺序符合实际签署顺序。</p>
 * @method void setApprovers(array $Approvers) 设置<p>合同流程的参与方列表，最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息，具体定义可以参考开发者中心的ApproverInfo结构体。</p><p>如果合同流程是有序签署，Approvers列表中参与人的顺序就是默认的签署顺序，请确保列表中参与人的顺序符合实际签署顺序。</p>
 * @method string getIntelligentStatus() 获取<p>开启或者关闭智能添加填写区：</p><ul><li> **OPEN**：开启（默认值）</li><li> **CLOSE**：关闭</li></ul>
 * @method void setIntelligentStatus(string $IntelligentStatus) 设置<p>开启或者关闭智能添加填写区：</p><ul><li> **OPEN**：开启（默认值）</li><li> **CLOSE**：关闭</li></ul>
 * @method Component getComponents() 获取<p>该字段已不再使用，请使用InitiatorComponents</p>
 * @method void setComponents(Component $Components) 设置<p>该字段已不再使用，请使用InitiatorComponents</p>
 * @method CreateFlowOption getFlowOption() 获取<p>发起合同个性化参数<br>用于满足创建及页面操作过程中的个性化要求<br>具体定制化内容详见数据接口说明</p>
 * @method void setFlowOption(CreateFlowOption $FlowOption) 设置<p>发起合同个性化参数<br>用于满足创建及页面操作过程中的个性化要求<br>具体定制化内容详见数据接口说明</p>
 * @method boolean getNeedSignReview() 获取<p>发起方企业签署员工，在进行签署操作前，是否需要先通过企业内部审批流程 （签署审核）1. <strong>false（默认）</strong>：  无需审批，发起方企业签署员工可直接进行签署操作。2. <strong>true</strong>：  需要先走企业内部审批流程。 当流程进展到发起方企业签署员工时，其签署操作会被阻塞，等待企业内部审批结果。企业应通过 <a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowSignReview" target="_blank">提交签署流程审批结果</a>审批接口，将内部审批结果通知腾讯电子签平台：1. 若通知为“审核通过”，发起方企业签署员工可继续完成签署操作。2. 若通知为“审核未通过”，平台将继续阻塞该签署方的签署操作，直到企业再次通知平台审核通过为止。说明： 此能力可用于与企业内部审批流程打通，适用于手动签署和“授权签”两种模式。</p>
 * @method void setNeedSignReview(boolean $NeedSignReview) 设置<p>发起方企业签署员工，在进行签署操作前，是否需要先通过企业内部审批流程 （签署审核）1. <strong>false（默认）</strong>：  无需审批，发起方企业签署员工可直接进行签署操作。2. <strong>true</strong>：  需要先走企业内部审批流程。 当流程进展到发起方企业签署员工时，其签署操作会被阻塞，等待企业内部审批结果。企业应通过 <a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowSignReview" target="_blank">提交签署流程审批结果</a>审批接口，将内部审批结果通知腾讯电子签平台：1. 若通知为“审核通过”，发起方企业签署员工可继续完成签署操作。2. 若通知为“审核未通过”，平台将继续阻塞该签署方的签署操作，直到企业再次通知平台审核通过为止。说明： 此能力可用于与企业内部审批流程打通，适用于手动签署和“授权签”两种模式。</p>
 * @method boolean getNeedCreateReview() 获取<p>发起方在创建合同流程前，是否必须先通过企业内部审批流程 （发起审核）</p><p>当设置为 <code>true</code> 时：  </p><ol><li>您需要在企业内部完成审批，并通过接口 <a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowSignReview" target="_blank">提交签署流程审批结果</a> 将审批结果回传给腾讯电子签。 </li><li>只有当审核状态为“通过”时，合同流程正常发起。  </li><li>若未通过或未回传审核结果，发起操作将被阻塞，阻止合同流程。</li></ol><p>当设置为 <code>false</code> （默认值）时：<br>  发起方无需经过企业内部审批，可直接发起合同流程。</p>
 * @method void setNeedCreateReview(boolean $NeedCreateReview) 设置<p>发起方在创建合同流程前，是否必须先通过企业内部审批流程 （发起审核）</p><p>当设置为 <code>true</code> 时：  </p><ol><li>您需要在企业内部完成审批，并通过接口 <a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowSignReview" target="_blank">提交签署流程审批结果</a> 将审批结果回传给腾讯电子签。 </li><li>只有当审核状态为“通过”时，合同流程正常发起。  </li><li>若未通过或未回传审核结果，发起操作将被阻塞，阻止合同流程。</li></ol><p>当设置为 <code>false</code> （默认值）时：<br>  发起方无需经过企业内部审批，可直接发起合同流程。</p>
 * @method string getUserData() 获取<p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 20480长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。</p>
 * @method void setUserData(string $UserData) 设置<p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 20480长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。</p>
 * @method array getCcInfos() 获取<p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p>
 * @method void setCcInfos(array $CcInfos) 设置<p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p>
 * @method string getFlowId() 获取<p>合同Id：用于通过一个已发起的合同快速生成一个发起流程web链接<br>注: <code>该参数必须是一个待发起审核的合同id，并且还未审核通过</code></p>
 * @method void setFlowId(string $FlowId) 设置<p>合同Id：用于通过一个已发起的合同快速生成一个发起流程web链接<br>注: <code>该参数必须是一个待发起审核的合同id，并且还未审核通过</code></p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method array getInitiatorComponents() 获取<p>模板或者合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p>
 * @method void setInitiatorComponents(array $InitiatorComponents) 设置<p>模板或者合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p>
 * @method integer getFlowDisplayType() 获取<p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
 * @method void setFlowDisplayType(integer $FlowDisplayType) 设置<p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
 * @method SignComponentConfig getSignComponentConfig() 获取<p><font color="red">此字段已不再使用，请使用 CreateFlowOption 里面的 SignComponentConfig</font><br>签署控件的配置信息，用在嵌入式发起的页面配置，<br>包括  </p><ul><li>签署控件 是否默认展示日期.</li></ul>
 * @method void setSignComponentConfig(SignComponentConfig $SignComponentConfig) 设置<p><font color="red">此字段已不再使用，请使用 CreateFlowOption 里面的 SignComponentConfig</font><br>签署控件的配置信息，用在嵌入式发起的页面配置，<br>包括  </p><ul><li>签署控件 是否默认展示日期.</li></ul>
 * @method boolean getWorkflow() 获取<p>是否开启嵌入式合同发起时，提交发起审批流，默认：false（不开启），开启后，嵌入式合同发起后，会提交电子签内置审批流</p>
 * @method void setWorkflow(boolean $Workflow) 设置<p>是否开启嵌入式合同发起时，提交发起审批流，默认：false（不开启），开启后，嵌入式合同发起后，会提交电子签内置审批流</p>
 */
class CreatePrepareFlowRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。使用此接口时，必须填写userId。<br>支持填入集团子公司经办人 userId 代发合同。</p><p>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>资源id，与ResourceType相对应，取值范围：</p><ul><li>文件Id（通过UploadFiles获取文件资源Id）</li><li>模板Id（通过控制台创建模板后获取模板Id）</li><li>草稿Id（通过嵌入页面保存草稿后获取草稿Id）</li></ul>注意：需要同时设置 ResourceType 参数指定资源类型
     */
    public $ResourceId;

    /**
     * @var string <p>自定义的合同流程的名称，长度不能超过200个字符，只能由中文汉字、中文标点、英文字母、阿拉伯数字、空格、小括号、中括号、中划线、下划线以及（,）、（;）、（.）、(&amp;)、（+）组成。</p><p>该名称还将用于合同签署完成后文件下载的默认文件名称。</p>
     */
    public $FlowName;

    /**
     * @var integer <p>资源类型，取值有：</p><ul><li> **1**：模板</li><li> **2**：文件（默认值）</li><li> **3**：草稿</li></ul>
     */
    public $ResourceType;

    /**
     * @var boolean <p>合同流程的签署顺序类型：</p><ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li><li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>
     */
    public $Unordered;

    /**
     * @var integer <p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为合同流程创建后的365天时截止。</p>
     */
    public $Deadline;

    /**
     * @var string <p>用户自定义合同类型Id</p><p>该id为电子签企业内的合同类型id， 可以在控制台-合同-自定义合同类型处获取<br>注: <code>该参数如果和FlowType同时传，以该参数优先生效</code></p>
     */
    public $UserFlowTypeId;

    /**
     * @var string <p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。</p>
     */
    public $FlowType;

    /**
     * @var array <p>合同流程的参与方列表，最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息，具体定义可以参考开发者中心的ApproverInfo结构体。</p><p>如果合同流程是有序签署，Approvers列表中参与人的顺序就是默认的签署顺序，请确保列表中参与人的顺序符合实际签署顺序。</p>
     */
    public $Approvers;

    /**
     * @var string <p>开启或者关闭智能添加填写区：</p><ul><li> **OPEN**：开启（默认值）</li><li> **CLOSE**：关闭</li></ul>
     */
    public $IntelligentStatus;

    /**
     * @var Component <p>该字段已不再使用，请使用InitiatorComponents</p>
     */
    public $Components;

    /**
     * @var CreateFlowOption <p>发起合同个性化参数<br>用于满足创建及页面操作过程中的个性化要求<br>具体定制化内容详见数据接口说明</p>
     */
    public $FlowOption;

    /**
     * @var boolean <p>发起方企业签署员工，在进行签署操作前，是否需要先通过企业内部审批流程 （签署审核）1. <strong>false（默认）</strong>：  无需审批，发起方企业签署员工可直接进行签署操作。2. <strong>true</strong>：  需要先走企业内部审批流程。 当流程进展到发起方企业签署员工时，其签署操作会被阻塞，等待企业内部审批结果。企业应通过 <a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowSignReview" target="_blank">提交签署流程审批结果</a>审批接口，将内部审批结果通知腾讯电子签平台：1. 若通知为“审核通过”，发起方企业签署员工可继续完成签署操作。2. 若通知为“审核未通过”，平台将继续阻塞该签署方的签署操作，直到企业再次通知平台审核通过为止。说明： 此能力可用于与企业内部审批流程打通，适用于手动签署和“授权签”两种模式。</p>
     */
    public $NeedSignReview;

    /**
     * @var boolean <p>发起方在创建合同流程前，是否必须先通过企业内部审批流程 （发起审核）</p><p>当设置为 <code>true</code> 时：  </p><ol><li>您需要在企业内部完成审批，并通过接口 <a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowSignReview" target="_blank">提交签署流程审批结果</a> 将审批结果回传给腾讯电子签。 </li><li>只有当审核状态为“通过”时，合同流程正常发起。  </li><li>若未通过或未回传审核结果，发起操作将被阻塞，阻止合同流程。</li></ol><p>当设置为 <code>false</code> （默认值）时：<br>  发起方无需经过企业内部审批，可直接发起合同流程。</p>
     */
    public $NeedCreateReview;

    /**
     * @var string <p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 20480长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。</p>
     */
    public $UserData;

    /**
     * @var array <p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p>
     */
    public $CcInfos;

    /**
     * @var string <p>合同Id：用于通过一个已发起的合同快速生成一个发起流程web链接<br>注: <code>该参数必须是一个待发起审核的合同id，并且还未审核通过</code></p>
     */
    public $FlowId;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var array <p>模板或者合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p>
     */
    public $InitiatorComponents;

    /**
     * @var integer <p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
     */
    public $FlowDisplayType;

    /**
     * @var SignComponentConfig <p><font color="red">此字段已不再使用，请使用 CreateFlowOption 里面的 SignComponentConfig</font><br>签署控件的配置信息，用在嵌入式发起的页面配置，<br>包括  </p><ul><li>签署控件 是否默认展示日期.</li></ul>
     * @deprecated
     */
    public $SignComponentConfig;

    /**
     * @var boolean <p>是否开启嵌入式合同发起时，提交发起审批流，默认：false（不开启），开启后，嵌入式合同发起后，会提交电子签内置审批流</p>
     */
    public $Workflow;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。使用此接口时，必须填写userId。<br>支持填入集团子公司经办人 userId 代发合同。</p><p>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $ResourceId <p>资源id，与ResourceType相对应，取值范围：</p><ul><li>文件Id（通过UploadFiles获取文件资源Id）</li><li>模板Id（通过控制台创建模板后获取模板Id）</li><li>草稿Id（通过嵌入页面保存草稿后获取草稿Id）</li></ul>注意：需要同时设置 ResourceType 参数指定资源类型
     * @param string $FlowName <p>自定义的合同流程的名称，长度不能超过200个字符，只能由中文汉字、中文标点、英文字母、阿拉伯数字、空格、小括号、中括号、中划线、下划线以及（,）、（;）、（.）、(&amp;)、（+）组成。</p><p>该名称还将用于合同签署完成后文件下载的默认文件名称。</p>
     * @param integer $ResourceType <p>资源类型，取值有：</p><ul><li> **1**：模板</li><li> **2**：文件（默认值）</li><li> **3**：草稿</li></ul>
     * @param boolean $Unordered <p>合同流程的签署顺序类型：</p><ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li><li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>
     * @param integer $Deadline <p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为合同流程创建后的365天时截止。</p>
     * @param string $UserFlowTypeId <p>用户自定义合同类型Id</p><p>该id为电子签企业内的合同类型id， 可以在控制台-合同-自定义合同类型处获取<br>注: <code>该参数如果和FlowType同时传，以该参数优先生效</code></p>
     * @param string $FlowType <p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。</p>
     * @param array $Approvers <p>合同流程的参与方列表，最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息，具体定义可以参考开发者中心的ApproverInfo结构体。</p><p>如果合同流程是有序签署，Approvers列表中参与人的顺序就是默认的签署顺序，请确保列表中参与人的顺序符合实际签署顺序。</p>
     * @param string $IntelligentStatus <p>开启或者关闭智能添加填写区：</p><ul><li> **OPEN**：开启（默认值）</li><li> **CLOSE**：关闭</li></ul>
     * @param Component $Components <p>该字段已不再使用，请使用InitiatorComponents</p>
     * @param CreateFlowOption $FlowOption <p>发起合同个性化参数<br>用于满足创建及页面操作过程中的个性化要求<br>具体定制化内容详见数据接口说明</p>
     * @param boolean $NeedSignReview <p>发起方企业签署员工，在进行签署操作前，是否需要先通过企业内部审批流程 （签署审核）1. <strong>false（默认）</strong>：  无需审批，发起方企业签署员工可直接进行签署操作。2. <strong>true</strong>：  需要先走企业内部审批流程。 当流程进展到发起方企业签署员工时，其签署操作会被阻塞，等待企业内部审批结果。企业应通过 <a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowSignReview" target="_blank">提交签署流程审批结果</a>审批接口，将内部审批结果通知腾讯电子签平台：1. 若通知为“审核通过”，发起方企业签署员工可继续完成签署操作。2. 若通知为“审核未通过”，平台将继续阻塞该签署方的签署操作，直到企业再次通知平台审核通过为止。说明： 此能力可用于与企业内部审批流程打通，适用于手动签署和“授权签”两种模式。</p>
     * @param boolean $NeedCreateReview <p>发起方在创建合同流程前，是否必须先通过企业内部审批流程 （发起审核）</p><p>当设置为 <code>true</code> 时：  </p><ol><li>您需要在企业内部完成审批，并通过接口 <a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowSignReview" target="_blank">提交签署流程审批结果</a> 将审批结果回传给腾讯电子签。 </li><li>只有当审核状态为“通过”时，合同流程正常发起。  </li><li>若未通过或未回传审核结果，发起操作将被阻塞，阻止合同流程。</li></ol><p>当设置为 <code>false</code> （默认值）时：<br>  发起方无需经过企业内部审批，可直接发起合同流程。</p>
     * @param string $UserData <p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 20480长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。</p>
     * @param array $CcInfos <p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p>
     * @param string $FlowId <p>合同Id：用于通过一个已发起的合同快速生成一个发起流程web链接<br>注: <code>该参数必须是一个待发起审核的合同id，并且还未审核通过</code></p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param array $InitiatorComponents <p>模板或者合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p>
     * @param integer $FlowDisplayType <p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
     * @param SignComponentConfig $SignComponentConfig <p><font color="red">此字段已不再使用，请使用 CreateFlowOption 里面的 SignComponentConfig</font><br>签署控件的配置信息，用在嵌入式发起的页面配置，<br>包括  </p><ul><li>签署控件 是否默认展示日期.</li></ul>
     * @param boolean $Workflow <p>是否开启嵌入式合同发起时，提交发起审批流，默认：false（不开启），开启后，嵌入式合同发起后，会提交电子签内置审批流</p>
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("UserFlowTypeId",$param) and $param["UserFlowTypeId"] !== null) {
            $this->UserFlowTypeId = $param["UserFlowTypeId"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new FlowCreateApprover();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }

        if (array_key_exists("IntelligentStatus",$param) and $param["IntelligentStatus"] !== null) {
            $this->IntelligentStatus = $param["IntelligentStatus"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = new Component();
            $this->Components->deserialize($param["Components"]);
        }

        if (array_key_exists("FlowOption",$param) and $param["FlowOption"] !== null) {
            $this->FlowOption = new CreateFlowOption();
            $this->FlowOption->deserialize($param["FlowOption"]);
        }

        if (array_key_exists("NeedSignReview",$param) and $param["NeedSignReview"] !== null) {
            $this->NeedSignReview = $param["NeedSignReview"];
        }

        if (array_key_exists("NeedCreateReview",$param) and $param["NeedCreateReview"] !== null) {
            $this->NeedCreateReview = $param["NeedCreateReview"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("CcInfos",$param) and $param["CcInfos"] !== null) {
            $this->CcInfos = [];
            foreach ($param["CcInfos"] as $key => $value){
                $obj = new CcInfo();
                $obj->deserialize($value);
                array_push($this->CcInfos, $obj);
            }
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("InitiatorComponents",$param) and $param["InitiatorComponents"] !== null) {
            $this->InitiatorComponents = [];
            foreach ($param["InitiatorComponents"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->InitiatorComponents, $obj);
            }
        }

        if (array_key_exists("FlowDisplayType",$param) and $param["FlowDisplayType"] !== null) {
            $this->FlowDisplayType = $param["FlowDisplayType"];
        }

        if (array_key_exists("SignComponentConfig",$param) and $param["SignComponentConfig"] !== null) {
            $this->SignComponentConfig = new SignComponentConfig();
            $this->SignComponentConfig->deserialize($param["SignComponentConfig"]);
        }

        if (array_key_exists("Workflow",$param) and $param["Workflow"] !== null) {
            $this->Workflow = $param["Workflow"];
        }
    }
}
