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
 * 基础流程信息
 *
 * @method string getFlowName() 获取<p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
 * @method void setFlowName(string $FlowName) 设置<p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
 * @method integer getDeadline() 获取<p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。</p>
 * @method void setDeadline(integer $Deadline) 设置<p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。</p>
 * @method string getFlowType() 获取<p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。</p>
 * @method void setFlowType(string $FlowType) 设置<p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。</p>
 * @method string getFlowDescription() 获取<p>合同流程描述信息(可自定义此描述)，最大长度1000个字符。</p>
 * @method void setFlowDescription(string $FlowDescription) 设置<p>合同流程描述信息(可自定义此描述)，最大长度1000个字符。</p>
 * @method boolean getUnordered() 获取<p>合同流程的签署顺序类型：<br><strong>false</strong>：(默认)有序签署, 本合同多个参与人需要依次签署<br><strong>true</strong>：无序签署, 本合同多个参与人没有先后签署限制</p>
 * @method void setUnordered(boolean $Unordered) 设置<p>合同流程的签署顺序类型：<br><strong>false</strong>：(默认)有序签署, 本合同多个参与人需要依次签署<br><strong>true</strong>：无序签署, 本合同多个参与人没有先后签署限制</p>
 * @method string getIntelligentStatus() 获取<p>是否打开智能添加填写区(默认开启，打开:&quot;OPEN&quot; 关闭：&quot;CLOSE&quot;)</p>
 * @method void setIntelligentStatus(string $IntelligentStatus) 设置<p>是否打开智能添加填写区(默认开启，打开:&quot;OPEN&quot; 关闭：&quot;CLOSE&quot;)</p>
 * @method array getFormFields() 获取<p>填写控件内容， 填写的控制的ID-填写的内容对列表</p>
 * @method void setFormFields(array $FormFields) 设置<p>填写控件内容， 填写的控制的ID-填写的内容对列表</p>
 * @method boolean getNeedSignReview() 获取<p>发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：<ul><li> <strong>false</strong>：（默认）不需要审批，直接签署。</li><li> <strong>true</strong>：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>注：<code>此功能可用于与企业内部的审批流程进行关联，支持手动、“授权签”合同</code></p>
 * @method void setNeedSignReview(boolean $NeedSignReview) 设置<p>发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：<ul><li> <strong>false</strong>：（默认）不需要审批，直接签署。</li><li> <strong>true</strong>：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>注：<code>此功能可用于与企业内部的审批流程进行关联，支持手动、“授权签”合同</code></p>
 * @method string getUserData() 获取<p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为1000长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的回调通知模块。</p>
 * @method void setUserData(string $UserData) 设置<p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为1000长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的回调通知模块。</p>
 * @method array getCcInfos() 获取<p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p><p>注</p><ol><li>抄送人名单中可以包括自然人以及本企业的员工（本企业员工必须已经完成认证并加入企业）。</li><li>请确保抄送人列表中的成员不与任何签署人重复。</li></ol>
 * @method void setCcInfos(array $CcInfos) 设置<p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p><p>注</p><ol><li>抄送人名单中可以包括自然人以及本企业的员工（本企业员工必须已经完成认证并加入企业）。</li><li>请确保抄送人列表中的成员不与任何签署人重复。</li></ol>
 * @method boolean getNeedCreateReview() 获取<p>发起方企业的签署人进行发起操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。</p><p>若设置为true，发起审核结果需通过接口 <a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignReview">提交企业签署流程审批结果</a>通知电子签，审核通过后，发起方企业签署人方可进行发起操作，否则会阻塞其发起操作。</p>
 * @method void setNeedCreateReview(boolean $NeedCreateReview) 设置<p>发起方企业的签署人进行发起操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。</p><p>若设置为true，发起审核结果需通过接口 <a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignReview">提交企业签署流程审批结果</a>通知电子签，审核通过后，发起方企业签署人方可进行发起操作，否则会阻塞其发起操作。</p>
 * @method array getComponents() 获取<p>填写控件：文件发起使用</p>
 * @method void setComponents(array $Components) 设置<p>填写控件：文件发起使用</p>
 * @method integer getFlowDisplayType() 获取<p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
 * @method void setFlowDisplayType(integer $FlowDisplayType) 设置<p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
 * @method array getFileIds() 获取<p>签署文件资源Id列表，目前仅支持单个文件</p>
 * @method void setFileIds(array $FileIds) 设置<p>签署文件资源Id列表，目前仅支持单个文件</p>
 * @method array getApprovers() 获取<p>合同签署人信息</p>
 * @method void setApprovers(array $Approvers) 设置<p>合同签署人信息</p>
 */
class BaseFlowInfo extends AbstractModel
{
    /**
     * @var string <p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
     */
    public $FlowName;

    /**
     * @var integer <p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。</p>
     */
    public $Deadline;

    /**
     * @var string <p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。</p>
     */
    public $FlowType;

    /**
     * @var string <p>合同流程描述信息(可自定义此描述)，最大长度1000个字符。</p>
     */
    public $FlowDescription;

    /**
     * @var boolean <p>合同流程的签署顺序类型：<br><strong>false</strong>：(默认)有序签署, 本合同多个参与人需要依次签署<br><strong>true</strong>：无序签署, 本合同多个参与人没有先后签署限制</p>
     */
    public $Unordered;

    /**
     * @var string <p>是否打开智能添加填写区(默认开启，打开:&quot;OPEN&quot; 关闭：&quot;CLOSE&quot;)</p>
     */
    public $IntelligentStatus;

    /**
     * @var array <p>填写控件内容， 填写的控制的ID-填写的内容对列表</p>
     */
    public $FormFields;

    /**
     * @var boolean <p>发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：<ul><li> <strong>false</strong>：（默认）不需要审批，直接签署。</li><li> <strong>true</strong>：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>注：<code>此功能可用于与企业内部的审批流程进行关联，支持手动、“授权签”合同</code></p>
     */
    public $NeedSignReview;

    /**
     * @var string <p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为1000长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的回调通知模块。</p>
     */
    public $UserData;

    /**
     * @var array <p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p><p>注</p><ol><li>抄送人名单中可以包括自然人以及本企业的员工（本企业员工必须已经完成认证并加入企业）。</li><li>请确保抄送人列表中的成员不与任何签署人重复。</li></ol>
     */
    public $CcInfos;

    /**
     * @var boolean <p>发起方企业的签署人进行发起操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。</p><p>若设置为true，发起审核结果需通过接口 <a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignReview">提交企业签署流程审批结果</a>通知电子签，审核通过后，发起方企业签署人方可进行发起操作，否则会阻塞其发起操作。</p>
     */
    public $NeedCreateReview;

    /**
     * @var array <p>填写控件：文件发起使用</p>
     */
    public $Components;

    /**
     * @var integer <p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
     */
    public $FlowDisplayType;

    /**
     * @var array <p>签署文件资源Id列表，目前仅支持单个文件</p>
     */
    public $FileIds;

    /**
     * @var array <p>合同签署人信息</p>
     */
    public $Approvers;

    /**
     * @param string $FlowName <p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
     * @param integer $Deadline <p>合同流程的签署截止时间，格式为Unix标准时间戳（秒），如果在签署截止时间前未完成签署，则合同状态会变为已过期，导致合同作废。</p>
     * @param string $FlowType <p>合同流程的类别分类（可自定义名称，如销售合同/入职合同等），最大长度为200个字符，仅限中文、字母、数字和下划线组成。</p>
     * @param string $FlowDescription <p>合同流程描述信息(可自定义此描述)，最大长度1000个字符。</p>
     * @param boolean $Unordered <p>合同流程的签署顺序类型：<br><strong>false</strong>：(默认)有序签署, 本合同多个参与人需要依次签署<br><strong>true</strong>：无序签署, 本合同多个参与人没有先后签署限制</p>
     * @param string $IntelligentStatus <p>是否打开智能添加填写区(默认开启，打开:&quot;OPEN&quot; 关闭：&quot;CLOSE&quot;)</p>
     * @param array $FormFields <p>填写控件内容， 填写的控制的ID-填写的内容对列表</p>
     * @param boolean $NeedSignReview <p>发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：<ul><li> <strong>false</strong>：（默认）不需要审批，直接签署。</li><li> <strong>true</strong>：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li> 如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li> 如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>注：<code>此功能可用于与企业内部的审批流程进行关联，支持手动、“授权签”合同</code></p>
     * @param string $UserData <p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为1000长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的回调通知模块。</p>
     * @param array $CcInfos <p>合同流程的抄送人列表，最多可支持50个抄送人，抄送人可查看合同内容及签署进度，但无需参与合同签署。</p><p>注</p><ol><li>抄送人名单中可以包括自然人以及本企业的员工（本企业员工必须已经完成认证并加入企业）。</li><li>请确保抄送人列表中的成员不与任何签署人重复。</li></ol>
     * @param boolean $NeedCreateReview <p>发起方企业的签署人进行发起操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。</p><p>若设置为true，发起审核结果需通过接口 <a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignReview">提交企业签署流程审批结果</a>通知电子签，审核通过后，发起方企业签署人方可进行发起操作，否则会阻塞其发起操作。</p>
     * @param array $Components <p>填写控件：文件发起使用</p>
     * @param integer $FlowDisplayType <p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
     * @param array $FileIds <p>签署文件资源Id列表，目前仅支持单个文件</p>
     * @param array $Approvers <p>合同签署人信息</p>
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

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
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

        if (array_key_exists("FlowDisplayType",$param) and $param["FlowDisplayType"] !== null) {
            $this->FlowDisplayType = $param["FlowDisplayType"];
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new CommonFlowApprover();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }
    }
}
