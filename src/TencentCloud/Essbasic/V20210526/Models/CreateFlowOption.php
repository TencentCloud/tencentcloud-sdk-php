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
 * 创建合同个性化参数
 *
 * @method boolean getCanEditFlow() 获取是否允许修改合同信息，true-是，false-否
 * @method void setCanEditFlow(boolean $CanEditFlow) 设置是否允许修改合同信息，true-是，false-否
 * @method boolean getHideShowFlowName() 获取是否允许发起合同弹窗隐藏合同名称，true-允许，false-不允许
 * @method void setHideShowFlowName(boolean $HideShowFlowName) 设置是否允许发起合同弹窗隐藏合同名称，true-允许，false-不允许
 * @method boolean getHideShowFlowType() 获取是否允许发起合同弹窗隐藏合同类型，true-允许，false-不允许
 * @method void setHideShowFlowType(boolean $HideShowFlowType) 设置是否允许发起合同弹窗隐藏合同类型，true-允许，false-不允许
 * @method boolean getHideShowDeadline() 获取是否允许发起合同弹窗隐藏合同到期时间，true-允许，false-不允许
 * @method void setHideShowDeadline(boolean $HideShowDeadline) 设置是否允许发起合同弹窗隐藏合同到期时间，true-允许，false-不允许
 * @method boolean getCanSkipAddApprover() 获取是否允许发起合同步骤跳过指定签署方步骤，true-允许，false-不允许
 * @method void setCanSkipAddApprover(boolean $CanSkipAddApprover) 设置是否允许发起合同步骤跳过指定签署方步骤，true-允许，false-不允许
 * @method string getCustomCreateFlowDescription() 获取定制化发起合同弹窗的描述信息，描述信息最长500
 * @method void setCustomCreateFlowDescription(string $CustomCreateFlowDescription) 设置定制化发起合同弹窗的描述信息，描述信息最长500
 */
class CreateFlowOption extends AbstractModel
{
    /**
     * @var boolean 是否允许修改合同信息，true-是，false-否
     */
    public $CanEditFlow;

    /**
     * @var boolean 是否允许发起合同弹窗隐藏合同名称，true-允许，false-不允许
     */
    public $HideShowFlowName;

    /**
     * @var boolean 是否允许发起合同弹窗隐藏合同类型，true-允许，false-不允许
     */
    public $HideShowFlowType;

    /**
     * @var boolean 是否允许发起合同弹窗隐藏合同到期时间，true-允许，false-不允许
     */
    public $HideShowDeadline;

    /**
     * @var boolean 是否允许发起合同步骤跳过指定签署方步骤，true-允许，false-不允许
     */
    public $CanSkipAddApprover;

    /**
     * @var string 定制化发起合同弹窗的描述信息，描述信息最长500
     */
    public $CustomCreateFlowDescription;

    /**
     * @param boolean $CanEditFlow 是否允许修改合同信息，true-是，false-否
     * @param boolean $HideShowFlowName 是否允许发起合同弹窗隐藏合同名称，true-允许，false-不允许
     * @param boolean $HideShowFlowType 是否允许发起合同弹窗隐藏合同类型，true-允许，false-不允许
     * @param boolean $HideShowDeadline 是否允许发起合同弹窗隐藏合同到期时间，true-允许，false-不允许
     * @param boolean $CanSkipAddApprover 是否允许发起合同步骤跳过指定签署方步骤，true-允许，false-不允许
     * @param string $CustomCreateFlowDescription 定制化发起合同弹窗的描述信息，描述信息最长500
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

        if (array_key_exists("CustomCreateFlowDescription",$param) and $param["CustomCreateFlowDescription"] !== null) {
            $this->CustomCreateFlowDescription = $param["CustomCreateFlowDescription"];
        }
    }
}
