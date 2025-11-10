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
 * CreateMiniAppPrepareFlow请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。使用此接口时，必须填写userId。
支持填入集团子公司经办人 userId 代发合同。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。使用此接口时，必须填写userId。
支持填入集团子公司经办人 userId 代发合同。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method integer getResourceType() 获取资源类型，取值有：
<ul><li> **1**：模板</li>
<li> **2**：文件 </li></ul>
 * @method void setResourceType(integer $ResourceType) 设置资源类型，取值有：
<ul><li> **1**：模板</li>
<li> **2**：文件 </li></ul>
 * @method string getResourceId() 获取资源id，与ResourceType相对应，取值范围：
<ul>
<li>文件Id（通过UploadFiles获取文件资源Id）</li>
<li>模板Id（通过控制台创建模板后获取模板Id）</li>
</ul>
注意：需要同时设置 ResourceType 参数指定资源类型
 * @method void setResourceId(string $ResourceId) 设置资源id，与ResourceType相对应，取值范围：
<ul>
<li>文件Id（通过UploadFiles获取文件资源Id）</li>
<li>模板Id（通过控制台创建模板后获取模板Id）</li>
</ul>
注意：需要同时设置 ResourceType 参数指定资源类型
 * @method string getFlowName() 获取自定义的合同流程的名称，长度不能超过200个字符，只能由中文汉字、中文标点、英文字母、阿拉伯数字、空格、小括号、中括号、中划线、下划线以及（,）、（;）、（.）、(&)、（+）组成。

该名称还将用于合同签署完成后文件下载的默认文件名称。
 * @method void setFlowName(string $FlowName) 设置自定义的合同流程的名称，长度不能超过200个字符，只能由中文汉字、中文标点、英文字母、阿拉伯数字、空格、小括号、中括号、中划线、下划线以及（,）、（;）、（.）、(&)、（+）组成。

该名称还将用于合同签署完成后文件下载的默认文件名称。
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method array getApprovers() 获取合同流程的参与方列表，最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息。
 * @method void setApprovers(array $Approvers) 设置合同流程的参与方列表，最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息。
 * @method array getCcInfos() 获取合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。

**注：暂不支持通过NotifyType参数控制抄送人通知方式**
 * @method void setCcInfos(array $CcInfos) 设置合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。

**注：暂不支持通过NotifyType参数控制抄送人通知方式**
 * @method boolean getUnordered() 获取合同流程的签署顺序类型：
<ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li>
<li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>

**注：仅在文件发起模式下设置有效，模板发起以模板配置为准**
 * @method void setUnordered(boolean $Unordered) 设置合同流程的签署顺序类型：
<ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li>
<li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>

**注：仅在文件发起模式下设置有效，模板发起以模板配置为准**
 * @method integer getDeadlineAfterStartDays() 获取合同发起后经过多少天截止（1-30天可选），默认7天
 * @method void setDeadlineAfterStartDays(integer $DeadlineAfterStartDays) 设置合同发起后经过多少天截止（1-30天可选），默认7天
 * @method string getUserFlowTypeId() 获取用户自定义合同类型Id  该id为电子签企业内的合同类型id， 可以在控制台-合同-自定义合同类型处获取
 * @method void setUserFlowTypeId(string $UserFlowTypeId) 设置用户自定义合同类型Id  该id为电子签企业内的合同类型id， 可以在控制台-合同-自定义合同类型处获取
 * @method MiniAppCreateFlowOption getFlowOption() 获取发起合同个性化参数
用于满足小程序合同创建的个性化要求
具体定制化内容详见数据接口说明
 * @method void setFlowOption(MiniAppCreateFlowOption $FlowOption) 设置发起合同个性化参数
用于满足小程序合同创建的个性化要求
具体定制化内容详见数据接口说明
 * @method MiniAppCreateFlowPageOption getPageOption() 获取发起合同小程序页面个性化参数 
用于满足小程序合同创建页面的个性化要求 具体定制化内容详见数据接口说明
 * @method void setPageOption(MiniAppCreateFlowPageOption $PageOption) 设置发起合同小程序页面个性化参数 
用于满足小程序合同创建页面的个性化要求 具体定制化内容详见数据接口说明
 * @method string getUserData() 获取调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1000 长度。

在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。
 * @method void setUserData(string $UserData) 设置调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1000 长度。

在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。
 * @method array getHides() 获取生成的签署链接在签署页面隐藏的按钮列表，可设置如下：

<ul><li> **0** :合同签署页面更多操作按钮</li>
<li> **1** :合同签署页面更多操作的拒绝签署按钮</li>
<li> **2** :合同签署页面更多操作的转他人处理按钮</li>
<li> **3** :签署成功页的查看详情按钮</li>
<li> **4** :合同签署页面更多操作的查看合同基本信息按钮</li>
<li> **5** :合同签署页面更多操作的撤销按钮</li></ul>

注:  `字段为数组, 可以传值隐藏多个按钮`
 * @method void setHides(array $Hides) 设置生成的签署链接在签署页面隐藏的按钮列表，可设置如下：

<ul><li> **0** :合同签署页面更多操作按钮</li>
<li> **1** :合同签署页面更多操作的拒绝签署按钮</li>
<li> **2** :合同签署页面更多操作的转他人处理按钮</li>
<li> **3** :签署成功页的查看详情按钮</li>
<li> **4** :合同签署页面更多操作的查看合同基本信息按钮</li>
<li> **5** :合同签署页面更多操作的撤销按钮</li></ul>

注:  `字段为数组, 可以传值隐藏多个按钮`
 */
class CreateMiniAppPrepareFlowRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。使用此接口时，必须填写userId。
支持填入集团子公司经办人 userId 代发合同。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var integer 资源类型，取值有：
<ul><li> **1**：模板</li>
<li> **2**：文件 </li></ul>
     */
    public $ResourceType;

    /**
     * @var string 资源id，与ResourceType相对应，取值范围：
<ul>
<li>文件Id（通过UploadFiles获取文件资源Id）</li>
<li>模板Id（通过控制台创建模板后获取模板Id）</li>
</ul>
注意：需要同时设置 ResourceType 参数指定资源类型
     */
    public $ResourceId;

    /**
     * @var string 自定义的合同流程的名称，长度不能超过200个字符，只能由中文汉字、中文标点、英文字母、阿拉伯数字、空格、小括号、中括号、中划线、下划线以及（,）、（;）、（.）、(&)、（+）组成。

该名称还将用于合同签署完成后文件下载的默认文件名称。
     */
    public $FlowName;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var array 合同流程的参与方列表，最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息。
     */
    public $Approvers;

    /**
     * @var array 合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。

**注：暂不支持通过NotifyType参数控制抄送人通知方式**
     */
    public $CcInfos;

    /**
     * @var boolean 合同流程的签署顺序类型：
<ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li>
<li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>

**注：仅在文件发起模式下设置有效，模板发起以模板配置为准**
     */
    public $Unordered;

    /**
     * @var integer 合同发起后经过多少天截止（1-30天可选），默认7天
     */
    public $DeadlineAfterStartDays;

    /**
     * @var string 用户自定义合同类型Id  该id为电子签企业内的合同类型id， 可以在控制台-合同-自定义合同类型处获取
     */
    public $UserFlowTypeId;

    /**
     * @var MiniAppCreateFlowOption 发起合同个性化参数
用于满足小程序合同创建的个性化要求
具体定制化内容详见数据接口说明
     */
    public $FlowOption;

    /**
     * @var MiniAppCreateFlowPageOption 发起合同小程序页面个性化参数 
用于满足小程序合同创建页面的个性化要求 具体定制化内容详见数据接口说明
     */
    public $PageOption;

    /**
     * @var string 调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1000 长度。

在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。
     */
    public $UserData;

    /**
     * @var array 生成的签署链接在签署页面隐藏的按钮列表，可设置如下：

<ul><li> **0** :合同签署页面更多操作按钮</li>
<li> **1** :合同签署页面更多操作的拒绝签署按钮</li>
<li> **2** :合同签署页面更多操作的转他人处理按钮</li>
<li> **3** :签署成功页的查看详情按钮</li>
<li> **4** :合同签署页面更多操作的查看合同基本信息按钮</li>
<li> **5** :合同签署页面更多操作的撤销按钮</li></ul>

注:  `字段为数组, 可以传值隐藏多个按钮`
     */
    public $Hides;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。使用此接口时，必须填写userId。
支持填入集团子公司经办人 userId 代发合同。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param integer $ResourceType 资源类型，取值有：
<ul><li> **1**：模板</li>
<li> **2**：文件 </li></ul>
     * @param string $ResourceId 资源id，与ResourceType相对应，取值范围：
<ul>
<li>文件Id（通过UploadFiles获取文件资源Id）</li>
<li>模板Id（通过控制台创建模板后获取模板Id）</li>
</ul>
注意：需要同时设置 ResourceType 参数指定资源类型
     * @param string $FlowName 自定义的合同流程的名称，长度不能超过200个字符，只能由中文汉字、中文标点、英文字母、阿拉伯数字、空格、小括号、中括号、中划线、下划线以及（,）、（;）、（.）、(&)、（+）组成。

该名称还将用于合同签署完成后文件下载的默认文件名称。
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param array $Approvers 合同流程的参与方列表，最多可支持50个参与方，可在列表中指定企业B端签署方和个人C端签署方的联系和认证方式等信息。
     * @param array $CcInfos 合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。

**注：暂不支持通过NotifyType参数控制抄送人通知方式**
     * @param boolean $Unordered 合同流程的签署顺序类型：
<ul><li> **false**：(默认)有序签署, 本合同多个参与人需要依次签署 </li>
<li> **true**：无序签署, 本合同多个参与人没有先后签署限制</li></ul>

**注：仅在文件发起模式下设置有效，模板发起以模板配置为准**
     * @param integer $DeadlineAfterStartDays 合同发起后经过多少天截止（1-30天可选），默认7天
     * @param string $UserFlowTypeId 用户自定义合同类型Id  该id为电子签企业内的合同类型id， 可以在控制台-合同-自定义合同类型处获取
     * @param MiniAppCreateFlowOption $FlowOption 发起合同个性化参数
用于满足小程序合同创建的个性化要求
具体定制化内容详见数据接口说明
     * @param MiniAppCreateFlowPageOption $PageOption 发起合同小程序页面个性化参数 
用于满足小程序合同创建页面的个性化要求 具体定制化内容详见数据接口说明
     * @param string $UserData 调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1000 长度。

在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。
     * @param array $Hides 生成的签署链接在签署页面隐藏的按钮列表，可设置如下：

<ul><li> **0** :合同签署页面更多操作按钮</li>
<li> **1** :合同签署页面更多操作的拒绝签署按钮</li>
<li> **2** :合同签署页面更多操作的转他人处理按钮</li>
<li> **3** :签署成功页的查看详情按钮</li>
<li> **4** :合同签署页面更多操作的查看合同基本信息按钮</li>
<li> **5** :合同签署页面更多操作的撤销按钮</li></ul>

注:  `字段为数组, 可以传值隐藏多个按钮`
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new MiniAppCreateApproverInfo();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
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

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("DeadlineAfterStartDays",$param) and $param["DeadlineAfterStartDays"] !== null) {
            $this->DeadlineAfterStartDays = $param["DeadlineAfterStartDays"];
        }

        if (array_key_exists("UserFlowTypeId",$param) and $param["UserFlowTypeId"] !== null) {
            $this->UserFlowTypeId = $param["UserFlowTypeId"];
        }

        if (array_key_exists("FlowOption",$param) and $param["FlowOption"] !== null) {
            $this->FlowOption = new MiniAppCreateFlowOption();
            $this->FlowOption->deserialize($param["FlowOption"]);
        }

        if (array_key_exists("PageOption",$param) and $param["PageOption"] !== null) {
            $this->PageOption = new MiniAppCreateFlowPageOption();
            $this->PageOption->deserialize($param["PageOption"]);
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("Hides",$param) and $param["Hides"] !== null) {
            $this->Hides = $param["Hides"];
        }
    }
}
