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
    }
}
