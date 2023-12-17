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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基础流程信息
 *
 * @method string getFlowName() 获取合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
 * @method void setFlowName(string $FlowName) 设置合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
 * @method string getFlowType() 获取合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。
 * @method void setFlowType(string $FlowType) 设置合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。
 * @method string getFlowDescription() 获取合同流程描述信息(可自定义此描述)，最大长度1000个字符。
 * @method void setFlowDescription(string $FlowDescription) 设置合同流程描述信息(可自定义此描述)，最大长度1000个字符。
 * @method integer getDeadline() 获取合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。
 * @method void setDeadline(integer $Deadline) 设置合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。
 * @method boolean getUnordered() 获取合同流程的签署顺序类型：
**false**：(默认)有序签署, 本合同多个参与人需要依次签署
**true**：无序签署, 本合同多个参与人没有先后签署限制
 * @method void setUnordered(boolean $Unordered) 设置合同流程的签署顺序类型：
**false**：(默认)有序签署, 本合同多个参与人需要依次签署
**true**：无序签署, 本合同多个参与人没有先后签署限制
 * @method string getIntelligentStatus() 获取是否打开智能添加填写区(默认开启，打开:"OPEN" 关闭："CLOSE")
 * @method void setIntelligentStatus(string $IntelligentStatus) 设置是否打开智能添加填写区(默认开启，打开:"OPEN" 关闭："CLOSE")
 * @method array getFormFields() 获取填写控件内容， 填写的控制的ID-填写的内容对列表
 * @method void setFormFields(array $FormFields) 设置填写控件内容， 填写的控制的ID-填写的内容对列表
 * @method boolean getNeedSignReview() 获取发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：
<ul><li> **false**：（默认）不需要审批，直接签署。</li>
<li> **true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>
企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果
<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li>
<li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>
注：`此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同`
 * @method void setNeedSignReview(boolean $NeedSignReview) 设置发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：
<ul><li> **false**：（默认）不需要审批，直接签署。</li>
<li> **true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>
企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果
<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li>
<li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>
注：`此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同`
 * @method string getUserData() 获取调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为1000长度。

在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的回调通知模块。
 * @method void setUserData(string $UserData) 设置调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为1000长度。

在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的回调通知模块。
 * @method array getCcInfos() 获取合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。

 * @method void setCcInfos(array $CcInfos) 设置合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。

 * @method boolean getNeedCreateReview() 获取发起方企业的签署人进行发起操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。

若设置为true，发起审核结果需通过接口 [提交企业签署流程审批结果](https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignReview)通知电子签，审核通过后，发起方企业签署人方可进行发起操作，否则会阻塞其发起操作。


 * @method void setNeedCreateReview(boolean $NeedCreateReview) 设置发起方企业的签署人进行发起操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。

若设置为true，发起审核结果需通过接口 [提交企业签署流程审批结果](https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignReview)通知电子签，审核通过后，发起方企业签署人方可进行发起操作，否则会阻塞其发起操作。


 * @method array getComponents() 获取填写控件：文件发起使用
 * @method void setComponents(array $Components) 设置填写控件：文件发起使用
 */
class BaseFlowInfo extends AbstractModel
{
    /**
     * @var string 合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
     */
    public $FlowName;

    /**
     * @var string 合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。
     */
    public $FlowType;

    /**
     * @var string 合同流程描述信息(可自定义此描述)，最大长度1000个字符。
     */
    public $FlowDescription;

    /**
     * @var integer 合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。
     */
    public $Deadline;

    /**
     * @var boolean 合同流程的签署顺序类型：
**false**：(默认)有序签署, 本合同多个参与人需要依次签署
**true**：无序签署, 本合同多个参与人没有先后签署限制
     */
    public $Unordered;

    /**
     * @var string 是否打开智能添加填写区(默认开启，打开:"OPEN" 关闭："CLOSE")
     */
    public $IntelligentStatus;

    /**
     * @var array 填写控件内容， 填写的控制的ID-填写的内容对列表
     */
    public $FormFields;

    /**
     * @var boolean 发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：
<ul><li> **false**：（默认）不需要审批，直接签署。</li>
<li> **true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>
企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果
<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li>
<li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>
注：`此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同`
     */
    public $NeedSignReview;

    /**
     * @var string 调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为1000长度。

在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的回调通知模块。
     */
    public $UserData;

    /**
     * @var array 合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。

     */
    public $CcInfos;

    /**
     * @var boolean 发起方企业的签署人进行发起操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。

若设置为true，发起审核结果需通过接口 [提交企业签署流程审批结果](https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignReview)通知电子签，审核通过后，发起方企业签署人方可进行发起操作，否则会阻塞其发起操作。


     */
    public $NeedCreateReview;

    /**
     * @var array 填写控件：文件发起使用
     */
    public $Components;

    /**
     * @param string $FlowName 合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
     * @param string $FlowType 合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。
     * @param string $FlowDescription 合同流程描述信息(可自定义此描述)，最大长度1000个字符。
     * @param integer $Deadline 合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。
     * @param boolean $Unordered 合同流程的签署顺序类型：
**false**：(默认)有序签署, 本合同多个参与人需要依次签署
**true**：无序签署, 本合同多个参与人没有先后签署限制
     * @param string $IntelligentStatus 是否打开智能添加填写区(默认开启，打开:"OPEN" 关闭："CLOSE")
     * @param array $FormFields 填写控件内容， 填写的控制的ID-填写的内容对列表
     * @param boolean $NeedSignReview 发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：
<ul><li> **false**：（默认）不需要审批，直接签署。</li>
<li> **true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>
企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果
<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li>
<li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>
注：`此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同`
     * @param string $UserData 调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为1000长度。

在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的回调通知模块。
     * @param array $CcInfos 合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。

     * @param boolean $NeedCreateReview 发起方企业的签署人进行发起操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。

若设置为true，发起审核结果需通过接口 [提交企业签署流程审批结果](https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignReview)通知电子签，审核通过后，发起方企业签署人方可进行发起操作，否则会阻塞其发起操作。


     * @param array $Components 填写控件：文件发起使用
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
        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("IntelligentStatus",$param) and $param["IntelligentStatus"] !== null) {
            $this->IntelligentStatus = $param["IntelligentStatus"];
        }

        if (array_key_exists("FormFields",$param) and $param["FormFields"] !== null) {
            $this->FormFields = [];
            foreach ($param["FormFields"] as $key => $value){
                $obj = new FormField();
                $obj->deserialize($value);
                array_push($this->FormFields, $obj);
            }
        }

        if (array_key_exists("NeedSignReview",$param) and $param["NeedSignReview"] !== null) {
            $this->NeedSignReview = $param["NeedSignReview"];
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

        if (array_key_exists("NeedCreateReview",$param) and $param["NeedCreateReview"] !== null) {
            $this->NeedCreateReview = $param["NeedCreateReview"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }
    }
}
