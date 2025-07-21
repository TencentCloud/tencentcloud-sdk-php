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
 * 签署人配置信息。
此参数对子客和自动签无效，不允许进行修改。
 *
 * @method boolean getCanEditApprover() 获取是否允许修改签署人信息
 * @method void setCanEditApprover(boolean $CanEditApprover) 设置是否允许修改签署人信息
 * @method boolean getNoRefuse() 获取是否可以拒签 默认false-可以拒签 true-不可以拒签
 * @method void setNoRefuse(boolean $NoRefuse) 设置是否可以拒签 默认false-可以拒签 true-不可以拒签
 * @method boolean getNoTransfer() 获取是否可以转发 默认false-可以转发 true-不可以转发
 * @method void setNoTransfer(boolean $NoTransfer) 设置是否可以转发 默认false-可以转发 true-不可以转发
 * @method boolean getHideOneKeySign() 获取当签署方有多个签署区时候，是否隐藏一键所有的签署区

false：（默认）不隐藏
true：隐藏，每个签署区要单独选择印章或者签名
 * @method void setHideOneKeySign(boolean $HideOneKeySign) 设置当签署方有多个签署区时候，是否隐藏一键所有的签署区

false：（默认）不隐藏
true：隐藏，每个签署区要单独选择印章或者签名
 * @method string getFlowReadLimit() 获取签署人阅读合同限制参数
 <br/>取值：
<ul>
<li> LimitReadTimeAndBottom，阅读合同必须限制阅读时长并且必须阅读到底</li>
<li> LimitReadTime，阅读合同仅限制阅读时长</li>
<li> LimitBottom，阅读合同仅限制必须阅读到底</li>
<li> NoReadTimeAndBottom，阅读合同不限制阅读时长且不限制阅读到底（白名单功能，请联系客户经理开白使用）</li>
</ul>
 * @method void setFlowReadLimit(string $FlowReadLimit) 设置签署人阅读合同限制参数
 <br/>取值：
<ul>
<li> LimitReadTimeAndBottom，阅读合同必须限制阅读时长并且必须阅读到底</li>
<li> LimitReadTime，阅读合同仅限制阅读时长</li>
<li> LimitBottom，阅读合同仅限制必须阅读到底</li>
<li> NoReadTimeAndBottom，阅读合同不限制阅读时长且不限制阅读到底（白名单功能，请联系客户经理开白使用）</li>
</ul>
 * @method boolean getForbidAddSignDate() 获取禁止在签署过程中添加签署日期控件
 <br/>前置条件：文件发起合同时，指定SignBeanTag=1（可以在签署过程中添加签署控件）：
<ul>
<li> 默认值：false，在开启：签署过程中添加签署控件时，添加签署控件会默认自带签署日期控件</li>
<li> 可选值：true，在开启：签署过程中添加签署控件时，添加签署控件不会自带签署日期控件</li>
</ul>
 * @method void setForbidAddSignDate(boolean $ForbidAddSignDate) 设置禁止在签署过程中添加签署日期控件
 <br/>前置条件：文件发起合同时，指定SignBeanTag=1（可以在签署过程中添加签署控件）：
<ul>
<li> 默认值：false，在开启：签署过程中添加签署控件时，添加签署控件会默认自带签署日期控件</li>
<li> 可选值：true，在开启：签署过程中添加签署控件时，添加签署控件不会自带签署日期控件</li>
</ul>
 */
class CommonApproverOption extends AbstractModel
{
    /**
     * @var boolean 是否允许修改签署人信息
     */
    public $CanEditApprover;

    /**
     * @var boolean 是否可以拒签 默认false-可以拒签 true-不可以拒签
     */
    public $NoRefuse;

    /**
     * @var boolean 是否可以转发 默认false-可以转发 true-不可以转发
     */
    public $NoTransfer;

    /**
     * @var boolean 当签署方有多个签署区时候，是否隐藏一键所有的签署区

false：（默认）不隐藏
true：隐藏，每个签署区要单独选择印章或者签名
     */
    public $HideOneKeySign;

    /**
     * @var string 签署人阅读合同限制参数
 <br/>取值：
<ul>
<li> LimitReadTimeAndBottom，阅读合同必须限制阅读时长并且必须阅读到底</li>
<li> LimitReadTime，阅读合同仅限制阅读时长</li>
<li> LimitBottom，阅读合同仅限制必须阅读到底</li>
<li> NoReadTimeAndBottom，阅读合同不限制阅读时长且不限制阅读到底（白名单功能，请联系客户经理开白使用）</li>
</ul>
     */
    public $FlowReadLimit;

    /**
     * @var boolean 禁止在签署过程中添加签署日期控件
 <br/>前置条件：文件发起合同时，指定SignBeanTag=1（可以在签署过程中添加签署控件）：
<ul>
<li> 默认值：false，在开启：签署过程中添加签署控件时，添加签署控件会默认自带签署日期控件</li>
<li> 可选值：true，在开启：签署过程中添加签署控件时，添加签署控件不会自带签署日期控件</li>
</ul>
     */
    public $ForbidAddSignDate;

    /**
     * @param boolean $CanEditApprover 是否允许修改签署人信息
     * @param boolean $NoRefuse 是否可以拒签 默认false-可以拒签 true-不可以拒签
     * @param boolean $NoTransfer 是否可以转发 默认false-可以转发 true-不可以转发
     * @param boolean $HideOneKeySign 当签署方有多个签署区时候，是否隐藏一键所有的签署区

false：（默认）不隐藏
true：隐藏，每个签署区要单独选择印章或者签名
     * @param string $FlowReadLimit 签署人阅读合同限制参数
 <br/>取值：
<ul>
<li> LimitReadTimeAndBottom，阅读合同必须限制阅读时长并且必须阅读到底</li>
<li> LimitReadTime，阅读合同仅限制阅读时长</li>
<li> LimitBottom，阅读合同仅限制必须阅读到底</li>
<li> NoReadTimeAndBottom，阅读合同不限制阅读时长且不限制阅读到底（白名单功能，请联系客户经理开白使用）</li>
</ul>
     * @param boolean $ForbidAddSignDate 禁止在签署过程中添加签署日期控件
 <br/>前置条件：文件发起合同时，指定SignBeanTag=1（可以在签署过程中添加签署控件）：
<ul>
<li> 默认值：false，在开启：签署过程中添加签署控件时，添加签署控件会默认自带签署日期控件</li>
<li> 可选值：true，在开启：签署过程中添加签署控件时，添加签署控件不会自带签署日期控件</li>
</ul>
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
        if (array_key_exists("CanEditApprover",$param) and $param["CanEditApprover"] !== null) {
            $this->CanEditApprover = $param["CanEditApprover"];
        }

        if (array_key_exists("NoRefuse",$param) and $param["NoRefuse"] !== null) {
            $this->NoRefuse = $param["NoRefuse"];
        }

        if (array_key_exists("NoTransfer",$param) and $param["NoTransfer"] !== null) {
            $this->NoTransfer = $param["NoTransfer"];
        }

        if (array_key_exists("HideOneKeySign",$param) and $param["HideOneKeySign"] !== null) {
            $this->HideOneKeySign = $param["HideOneKeySign"];
        }

        if (array_key_exists("FlowReadLimit",$param) and $param["FlowReadLimit"] !== null) {
            $this->FlowReadLimit = $param["FlowReadLimit"];
        }

        if (array_key_exists("ForbidAddSignDate",$param) and $param["ForbidAddSignDate"] !== null) {
            $this->ForbidAddSignDate = $param["ForbidAddSignDate"];
        }
    }
}
