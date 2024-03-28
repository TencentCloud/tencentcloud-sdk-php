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
 * 签署人个性化能力信息
 *
 * @method boolean getNoRefuse() 获取是否可以拒签 默认false-可以拒签 true-不可以拒签
 * @method void setNoRefuse(boolean $NoRefuse) 设置是否可以拒签 默认false-可以拒签 true-不可以拒签
 * @method boolean getNoTransfer() 获取是否可以转发 默认false-可以转发 true-不可以转发
 * @method void setNoTransfer(boolean $NoTransfer) 设置是否可以转发 默认false-可以转发 true-不可以转发
 * @method boolean getHideOneKeySign() 获取是否隐藏一键签署 默认false-不隐藏true-隐藏
 * @method void setHideOneKeySign(boolean $HideOneKeySign) 设置是否隐藏一键签署 默认false-不隐藏true-隐藏
 * @method integer getFillType() 获取签署人信息补充类型，默认无需补充。

<ul><li> **1** : ( 动态签署人（可发起合同后再补充签署人信息）注：`企业自动签不支持动态补充`</li></ul>

注：
`使用动态签署人能力前，需登陆腾讯电子签控制台打开服务开关`
 * @method void setFillType(integer $FillType) 设置签署人信息补充类型，默认无需补充。

<ul><li> **1** : ( 动态签署人（可发起合同后再补充签署人信息）注：`企业自动签不支持动态补充`</li></ul>

注：
`使用动态签署人能力前，需登陆腾讯电子签控制台打开服务开关`
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
 */
class ApproverOption extends AbstractModel
{
    /**
     * @var boolean 是否可以拒签 默认false-可以拒签 true-不可以拒签
     */
    public $NoRefuse;

    /**
     * @var boolean 是否可以转发 默认false-可以转发 true-不可以转发
     */
    public $NoTransfer;

    /**
     * @var boolean 是否隐藏一键签署 默认false-不隐藏true-隐藏
     */
    public $HideOneKeySign;

    /**
     * @var integer 签署人信息补充类型，默认无需补充。

<ul><li> **1** : ( 动态签署人（可发起合同后再补充签署人信息）注：`企业自动签不支持动态补充`</li></ul>

注：
`使用动态签署人能力前，需登陆腾讯电子签控制台打开服务开关`
     */
    public $FillType;

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
     * @param boolean $NoRefuse 是否可以拒签 默认false-可以拒签 true-不可以拒签
     * @param boolean $NoTransfer 是否可以转发 默认false-可以转发 true-不可以转发
     * @param boolean $HideOneKeySign 是否隐藏一键签署 默认false-不隐藏true-隐藏
     * @param integer $FillType 签署人信息补充类型，默认无需补充。

<ul><li> **1** : ( 动态签署人（可发起合同后再补充签署人信息）注：`企业自动签不支持动态补充`</li></ul>

注：
`使用动态签署人能力前，需登陆腾讯电子签控制台打开服务开关`
     * @param string $FlowReadLimit 签署人阅读合同限制参数
 <br/>取值：
<ul>
<li> LimitReadTimeAndBottom，阅读合同必须限制阅读时长并且必须阅读到底</li>
<li> LimitReadTime，阅读合同仅限制阅读时长</li>
<li> LimitBottom，阅读合同仅限制必须阅读到底</li>
<li> NoReadTimeAndBottom，阅读合同不限制阅读时长且不限制阅读到底（白名单功能，请联系客户经理开白使用）</li>
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
        if (array_key_exists("NoRefuse",$param) and $param["NoRefuse"] !== null) {
            $this->NoRefuse = $param["NoRefuse"];
        }

        if (array_key_exists("NoTransfer",$param) and $param["NoTransfer"] !== null) {
            $this->NoTransfer = $param["NoTransfer"];
        }

        if (array_key_exists("HideOneKeySign",$param) and $param["HideOneKeySign"] !== null) {
            $this->HideOneKeySign = $param["HideOneKeySign"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }

        if (array_key_exists("FlowReadLimit",$param) and $param["FlowReadLimit"] !== null) {
            $this->FlowReadLimit = $param["FlowReadLimit"];
        }
    }
}
