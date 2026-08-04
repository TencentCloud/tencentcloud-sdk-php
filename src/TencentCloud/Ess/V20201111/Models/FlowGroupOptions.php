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
 * 此结构体(FlowGroupOptions)描述的是合同组的个性化配置，支持控制是否发送短信、未实名个人签署方查看合同组时是否需要实名认证（仅在合同组文件发起配置时生效）
 *
 * @method string getApproverVerifyType() 获取<p>签署人校验方式,支持以下类型</p><ul><li>VerifyCheck : 人脸识别 (默认值)</li><li>MobileCheck : 手机号验证</li></ul>参数说明：此参数仅在合同组文件发起有效，可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
 * @method void setApproverVerifyType(string $ApproverVerifyType) 设置<p>签署人校验方式,支持以下类型</p><ul><li>VerifyCheck : 人脸识别 (默认值)</li><li>MobileCheck : 手机号验证</li></ul>参数说明：此参数仅在合同组文件发起有效，可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
 * @method string getSelfOrganizationApproverNotifyType() 获取<p>发起合同（流程）组本方企业经办人通知方式<br>签署通知类型，支持以下类型</p><ul><li>sms : 短信 (默认值)</li><li>none : 不通知</li></ul>
 * @method void setSelfOrganizationApproverNotifyType(string $SelfOrganizationApproverNotifyType) 设置<p>发起合同（流程）组本方企业经办人通知方式<br>签署通知类型，支持以下类型</p><ul><li>sms : 短信 (默认值)</li><li>none : 不通知</li></ul>
 * @method string getOtherApproverNotifyType() 获取<p>发起合同（流程）组他方经办人通知方式<br>签署通知类型，支持以下类型</p><ul><li>sms : 短信 (默认值)</li><li>none : 不通知</li></ul>
 * @method void setOtherApproverNotifyType(string $OtherApproverNotifyType) 设置<p>发起合同（流程）组他方经办人通知方式<br>签署通知类型，支持以下类型</p><ul><li>sms : 短信 (默认值)</li><li>none : 不通知</li></ul>
 * @method boolean getFlowGroupNeedWorkflow() 获取<p>是否开启发起合同组的发起审批，默认：false(不开启)，开启后，发起合同组会提交电子签内置审批流</p>
 * @method void setFlowGroupNeedWorkflow(boolean $FlowGroupNeedWorkflow) 设置<p>是否开启发起合同组的发起审批，默认：false(不开启)，开启后，发起合同组会提交电子签内置审批流</p>
 * @method boolean getNoEditFlowName() 获取<p>是否不可编辑合同名称 true-不可编辑 false-可编辑(默认)</p>
 * @method void setNoEditFlowName(boolean $NoEditFlowName) 设置<p>是否不可编辑合同名称 true-不可编辑 false-可编辑(默认)</p>
 * @method boolean getNoEditFlowType() 获取<p>是否不可编辑合同类型 true-不可编辑 false-可编辑(默认)</p>
 * @method void setNoEditFlowType(boolean $NoEditFlowType) 设置<p>是否不可编辑合同类型 true-不可编辑 false-可编辑(默认)</p>
 * @method boolean getNoEditDeadline() 获取<p>是否不可编辑合同截止日期 true-不可编辑 false-可编辑(默认)</p>
 * @method void setNoEditDeadline(boolean $NoEditDeadline) 设置<p>是否不可编辑合同截止日期 true-不可编辑 false-可编辑(默认)</p>
 * @method SignComponentConfig getSignComponentConfig() 获取<p>签署控件配置(如是否默认展示日期)，用于嵌入式发起页面配置</p>
 * @method void setSignComponentConfig(SignComponentConfig $SignComponentConfig) 设置<p>签署控件配置(如是否默认展示日期)，用于嵌入式发起页面配置</p>
 * @method boolean getForbidEditWatermark() 获取<p>是否禁止编辑水印控件属性 true-禁止 false-否(默认)</p>
 * @method void setForbidEditWatermark(boolean $ForbidEditWatermark) 设置<p>是否禁止编辑水印控件属性 true-禁止 false-否(默认)</p>
 * @method boolean getHideSignCodeAfterStart() 获取<p>发起成功后是否隐藏签署码 true-隐藏 false-否(默认)</p>
 * @method void setHideSignCodeAfterStart(boolean $HideSignCodeAfterStart) 设置<p>发起成功后是否隐藏签署码 true-隐藏 false-否(默认)</p>
 * @method boolean getSignAfterStart() 获取<p>发起成功后是否签署合同,仅当前经办人为签署人时生效 true-展示签署 false-否(默认)</p>
 * @method void setSignAfterStart(boolean $SignAfterStart) 设置<p>发起成功后是否签署合同,仅当前经办人为签署人时生效 true-展示签署 false-否(默认)</p>
 * @method boolean getPreviewAfterStart() 获取<p>发起成功后是否预览合同 true-展示预览按钮 false-否(默认)</p>
 * @method void setPreviewAfterStart(boolean $PreviewAfterStart) 设置<p>发起成功后是否预览合同 true-展示预览按钮 false-否(默认)</p>
 */
class FlowGroupOptions extends AbstractModel
{
    /**
     * @var string <p>签署人校验方式,支持以下类型</p><ul><li>VerifyCheck : 人脸识别 (默认值)</li><li>MobileCheck : 手机号验证</li></ul>参数说明：此参数仅在合同组文件发起有效，可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
     */
    public $ApproverVerifyType;

    /**
     * @var string <p>发起合同（流程）组本方企业经办人通知方式<br>签署通知类型，支持以下类型</p><ul><li>sms : 短信 (默认值)</li><li>none : 不通知</li></ul>
     */
    public $SelfOrganizationApproverNotifyType;

    /**
     * @var string <p>发起合同（流程）组他方经办人通知方式<br>签署通知类型，支持以下类型</p><ul><li>sms : 短信 (默认值)</li><li>none : 不通知</li></ul>
     */
    public $OtherApproverNotifyType;

    /**
     * @var boolean <p>是否开启发起合同组的发起审批，默认：false(不开启)，开启后，发起合同组会提交电子签内置审批流</p>
     */
    public $FlowGroupNeedWorkflow;

    /**
     * @var boolean <p>是否不可编辑合同名称 true-不可编辑 false-可编辑(默认)</p>
     */
    public $NoEditFlowName;

    /**
     * @var boolean <p>是否不可编辑合同类型 true-不可编辑 false-可编辑(默认)</p>
     */
    public $NoEditFlowType;

    /**
     * @var boolean <p>是否不可编辑合同截止日期 true-不可编辑 false-可编辑(默认)</p>
     */
    public $NoEditDeadline;

    /**
     * @var SignComponentConfig <p>签署控件配置(如是否默认展示日期)，用于嵌入式发起页面配置</p>
     */
    public $SignComponentConfig;

    /**
     * @var boolean <p>是否禁止编辑水印控件属性 true-禁止 false-否(默认)</p>
     */
    public $ForbidEditWatermark;

    /**
     * @var boolean <p>发起成功后是否隐藏签署码 true-隐藏 false-否(默认)</p>
     */
    public $HideSignCodeAfterStart;

    /**
     * @var boolean <p>发起成功后是否签署合同,仅当前经办人为签署人时生效 true-展示签署 false-否(默认)</p>
     */
    public $SignAfterStart;

    /**
     * @var boolean <p>发起成功后是否预览合同 true-展示预览按钮 false-否(默认)</p>
     */
    public $PreviewAfterStart;

    /**
     * @param string $ApproverVerifyType <p>签署人校验方式,支持以下类型</p><ul><li>VerifyCheck : 人脸识别 (默认值)</li><li>MobileCheck : 手机号验证</li></ul>参数说明：此参数仅在合同组文件发起有效，可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
     * @param string $SelfOrganizationApproverNotifyType <p>发起合同（流程）组本方企业经办人通知方式<br>签署通知类型，支持以下类型</p><ul><li>sms : 短信 (默认值)</li><li>none : 不通知</li></ul>
     * @param string $OtherApproverNotifyType <p>发起合同（流程）组他方经办人通知方式<br>签署通知类型，支持以下类型</p><ul><li>sms : 短信 (默认值)</li><li>none : 不通知</li></ul>
     * @param boolean $FlowGroupNeedWorkflow <p>是否开启发起合同组的发起审批，默认：false(不开启)，开启后，发起合同组会提交电子签内置审批流</p>
     * @param boolean $NoEditFlowName <p>是否不可编辑合同名称 true-不可编辑 false-可编辑(默认)</p>
     * @param boolean $NoEditFlowType <p>是否不可编辑合同类型 true-不可编辑 false-可编辑(默认)</p>
     * @param boolean $NoEditDeadline <p>是否不可编辑合同截止日期 true-不可编辑 false-可编辑(默认)</p>
     * @param SignComponentConfig $SignComponentConfig <p>签署控件配置(如是否默认展示日期)，用于嵌入式发起页面配置</p>
     * @param boolean $ForbidEditWatermark <p>是否禁止编辑水印控件属性 true-禁止 false-否(默认)</p>
     * @param boolean $HideSignCodeAfterStart <p>发起成功后是否隐藏签署码 true-隐藏 false-否(默认)</p>
     * @param boolean $SignAfterStart <p>发起成功后是否签署合同,仅当前经办人为签署人时生效 true-展示签署 false-否(默认)</p>
     * @param boolean $PreviewAfterStart <p>发起成功后是否预览合同 true-展示预览按钮 false-否(默认)</p>
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
        if (array_key_exists("ApproverVerifyType",$param) and $param["ApproverVerifyType"] !== null) {
            $this->ApproverVerifyType = $param["ApproverVerifyType"];
        }

        if (array_key_exists("SelfOrganizationApproverNotifyType",$param) and $param["SelfOrganizationApproverNotifyType"] !== null) {
            $this->SelfOrganizationApproverNotifyType = $param["SelfOrganizationApproverNotifyType"];
        }

        if (array_key_exists("OtherApproverNotifyType",$param) and $param["OtherApproverNotifyType"] !== null) {
            $this->OtherApproverNotifyType = $param["OtherApproverNotifyType"];
        }

        if (array_key_exists("FlowGroupNeedWorkflow",$param) and $param["FlowGroupNeedWorkflow"] !== null) {
            $this->FlowGroupNeedWorkflow = $param["FlowGroupNeedWorkflow"];
        }

        if (array_key_exists("NoEditFlowName",$param) and $param["NoEditFlowName"] !== null) {
            $this->NoEditFlowName = $param["NoEditFlowName"];
        }

        if (array_key_exists("NoEditFlowType",$param) and $param["NoEditFlowType"] !== null) {
            $this->NoEditFlowType = $param["NoEditFlowType"];
        }

        if (array_key_exists("NoEditDeadline",$param) and $param["NoEditDeadline"] !== null) {
            $this->NoEditDeadline = $param["NoEditDeadline"];
        }

        if (array_key_exists("SignComponentConfig",$param) and $param["SignComponentConfig"] !== null) {
            $this->SignComponentConfig = new SignComponentConfig();
            $this->SignComponentConfig->deserialize($param["SignComponentConfig"]);
        }

        if (array_key_exists("ForbidEditWatermark",$param) and $param["ForbidEditWatermark"] !== null) {
            $this->ForbidEditWatermark = $param["ForbidEditWatermark"];
        }

        if (array_key_exists("HideSignCodeAfterStart",$param) and $param["HideSignCodeAfterStart"] !== null) {
            $this->HideSignCodeAfterStart = $param["HideSignCodeAfterStart"];
        }

        if (array_key_exists("SignAfterStart",$param) and $param["SignAfterStart"] !== null) {
            $this->SignAfterStart = $param["SignAfterStart"];
        }

        if (array_key_exists("PreviewAfterStart",$param) and $param["PreviewAfterStart"] !== null) {
            $this->PreviewAfterStart = $param["PreviewAfterStart"];
        }
    }
}
