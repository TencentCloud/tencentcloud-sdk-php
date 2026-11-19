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
 * 合同组的配置项信息包括：在合同组签署过程中，是否需要对每个子合同进行独立的意愿确认。
 *
 * @method boolean getSelfOrganizationApproverSignEach() 获取<p>发起方企业经办人（即签署人为发起方企业员工）是否需要对子合同进行独立的意愿确认</p><ul><li>**false**（默认）：发起方企业经办人签署时对所有子合同进行统一的意愿确认。</li><li>**true**：发起方企业经办人签署时需要对子合同进行独立的意愿确认。</li></ul>
 * @method void setSelfOrganizationApproverSignEach(boolean $SelfOrganizationApproverSignEach) 设置<p>发起方企业经办人（即签署人为发起方企业员工）是否需要对子合同进行独立的意愿确认</p><ul><li>**false**（默认）：发起方企业经办人签署时对所有子合同进行统一的意愿确认。</li><li>**true**：发起方企业经办人签署时需要对子合同进行独立的意愿确认。</li></ul>
 * @method boolean getOtherApproverSignEach() 获取<p>非发起方企业经办人（即：签署人为个人或者不为发起方企业的员工）是否需要对子合同进行独立的意愿确认</p><ul><li>**false**（默认）：非发起方企业经办人签署时对所有子合同进行统一的意愿确认。</li><li>**true**：非发起方企业经办人签署时需要对子合同进行独立的意愿确认。</li></ul>
 * @method void setOtherApproverSignEach(boolean $OtherApproverSignEach) 设置<p>非发起方企业经办人（即：签署人为个人或者不为发起方企业的员工）是否需要对子合同进行独立的意愿确认</p><ul><li>**false**（默认）：非发起方企业经办人签署时对所有子合同进行统一的意愿确认。</li><li>**true**：非发起方企业经办人签署时需要对子合同进行独立的意愿确认。</li></ul>
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
 * @method array getSignComponentLimits() 获取<p><br>在调用<a href="https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlowGroup">获取发起合同组嵌入链接</a>创建合同时,可通过此参数限制在界面上拖拽签署控件后，可选那几种印章类型或签名类型。</p><p>注：仅在<strong>嵌入式文件</strong>发起场景下生效。</p>
 * @method void setSignComponentLimits(array $SignComponentLimits) 设置<p><br>在调用<a href="https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlowGroup">获取发起合同组嵌入链接</a>创建合同时,可通过此参数限制在界面上拖拽签署控件后，可选那几种印章类型或签名类型。</p><p>注：仅在<strong>嵌入式文件</strong>发起场景下生效。</p>
 * @method array getHideOperationSteps() 获取<p>隐藏操作步骤: 具体的控件类型如下</p><ul><li>2 : 补充文件内容</li><li>4 : 发起前合同信息与设置确认</li></ul>注：仅对新版页面生效
 * @method void setHideOperationSteps(array $HideOperationSteps) 设置<p>隐藏操作步骤: 具体的控件类型如下</p><ul><li>2 : 补充文件内容</li><li>4 : 发起前合同信息与设置确认</li></ul>注：仅对新版页面生效
 */
class FlowGroupOptions extends AbstractModel
{
    /**
     * @var boolean <p>发起方企业经办人（即签署人为发起方企业员工）是否需要对子合同进行独立的意愿确认</p><ul><li>**false**（默认）：发起方企业经办人签署时对所有子合同进行统一的意愿确认。</li><li>**true**：发起方企业经办人签署时需要对子合同进行独立的意愿确认。</li></ul>
     */
    public $SelfOrganizationApproverSignEach;

    /**
     * @var boolean <p>非发起方企业经办人（即：签署人为个人或者不为发起方企业的员工）是否需要对子合同进行独立的意愿确认</p><ul><li>**false**（默认）：非发起方企业经办人签署时对所有子合同进行统一的意愿确认。</li><li>**true**：非发起方企业经办人签署时需要对子合同进行独立的意愿确认。</li></ul>
     */
    public $OtherApproverSignEach;

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
     * @var array <p><br>在调用<a href="https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlowGroup">获取发起合同组嵌入链接</a>创建合同时,可通过此参数限制在界面上拖拽签署控件后，可选那几种印章类型或签名类型。</p><p>注：仅在<strong>嵌入式文件</strong>发起场景下生效。</p>
     */
    public $SignComponentLimits;

    /**
     * @var array <p>隐藏操作步骤: 具体的控件类型如下</p><ul><li>2 : 补充文件内容</li><li>4 : 发起前合同信息与设置确认</li></ul>注：仅对新版页面生效
     */
    public $HideOperationSteps;

    /**
     * @param boolean $SelfOrganizationApproverSignEach <p>发起方企业经办人（即签署人为发起方企业员工）是否需要对子合同进行独立的意愿确认</p><ul><li>**false**（默认）：发起方企业经办人签署时对所有子合同进行统一的意愿确认。</li><li>**true**：发起方企业经办人签署时需要对子合同进行独立的意愿确认。</li></ul>
     * @param boolean $OtherApproverSignEach <p>非发起方企业经办人（即：签署人为个人或者不为发起方企业的员工）是否需要对子合同进行独立的意愿确认</p><ul><li>**false**（默认）：非发起方企业经办人签署时对所有子合同进行统一的意愿确认。</li><li>**true**：非发起方企业经办人签署时需要对子合同进行独立的意愿确认。</li></ul>
     * @param boolean $NoEditFlowName <p>是否不可编辑合同名称 true-不可编辑 false-可编辑(默认)</p>
     * @param boolean $NoEditFlowType <p>是否不可编辑合同类型 true-不可编辑 false-可编辑(默认)</p>
     * @param boolean $NoEditDeadline <p>是否不可编辑合同截止日期 true-不可编辑 false-可编辑(默认)</p>
     * @param SignComponentConfig $SignComponentConfig <p>签署控件配置(如是否默认展示日期)，用于嵌入式发起页面配置</p>
     * @param boolean $ForbidEditWatermark <p>是否禁止编辑水印控件属性 true-禁止 false-否(默认)</p>
     * @param boolean $HideSignCodeAfterStart <p>发起成功后是否隐藏签署码 true-隐藏 false-否(默认)</p>
     * @param boolean $SignAfterStart <p>发起成功后是否签署合同,仅当前经办人为签署人时生效 true-展示签署 false-否(默认)</p>
     * @param boolean $PreviewAfterStart <p>发起成功后是否预览合同 true-展示预览按钮 false-否(默认)</p>
     * @param array $SignComponentLimits <p><br>在调用<a href="https://qian.tencent.com/developers/partnerApis/embedPages/ChannelCreatePrepareFlowGroup">获取发起合同组嵌入链接</a>创建合同时,可通过此参数限制在界面上拖拽签署控件后，可选那几种印章类型或签名类型。</p><p>注：仅在<strong>嵌入式文件</strong>发起场景下生效。</p>
     * @param array $HideOperationSteps <p>隐藏操作步骤: 具体的控件类型如下</p><ul><li>2 : 补充文件内容</li><li>4 : 发起前合同信息与设置确认</li></ul>注：仅对新版页面生效
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
        if (array_key_exists("SelfOrganizationApproverSignEach",$param) and $param["SelfOrganizationApproverSignEach"] !== null) {
            $this->SelfOrganizationApproverSignEach = $param["SelfOrganizationApproverSignEach"];
        }

        if (array_key_exists("OtherApproverSignEach",$param) and $param["OtherApproverSignEach"] !== null) {
            $this->OtherApproverSignEach = $param["OtherApproverSignEach"];
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

        if (array_key_exists("SignComponentLimits",$param) and $param["SignComponentLimits"] !== null) {
            $this->SignComponentLimits = [];
            foreach ($param["SignComponentLimits"] as $key => $value){
                $obj = new EmbedSignComponentLimit();
                $obj->deserialize($value);
                array_push($this->SignComponentLimits, $obj);
            }
        }

        if (array_key_exists("HideOperationSteps",$param) and $param["HideOperationSteps"] !== null) {
            $this->HideOperationSteps = $param["HideOperationSteps"];
        }
    }
}
