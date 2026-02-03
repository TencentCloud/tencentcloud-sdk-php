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
 * 签署人个性化能力信息
 *
 * @method boolean getNoRefuse() 获取<p>是否可以拒签 默认false-可以拒签 true-不可以拒签</p>
 * @method void setNoRefuse(boolean $NoRefuse) 设置<p>是否可以拒签 默认false-可以拒签 true-不可以拒签</p>
 * @method boolean getNoTransfer() 获取<p>是否可以转发 默认false-可以转发 true-不可以转发</p>
 * @method void setNoTransfer(boolean $NoTransfer) 设置<p>是否可以转发 默认false-可以转发 true-不可以转发</p>
 * @method boolean getHideOneKeySign() 获取<p>当签署方有多个签署区时候，是否隐藏一键所有的签署区</p><p>false：（默认）不隐藏<br>true：隐藏，每个签署区要单独选择印章或者签名</p>
 * @method void setHideOneKeySign(boolean $HideOneKeySign) 设置<p>当签署方有多个签署区时候，是否隐藏一键所有的签署区</p><p>false：（默认）不隐藏<br>true：隐藏，每个签署区要单独选择印章或者签名</p>
 * @method integer getFillType() 获取<p>签署人信息补充类型，默认无需补充。<ul><li> <strong>1</strong> :  动态签署人（可发起合同后再补充签署人信息）注：<code>企业自动签不支持动态补充</code></li></ul>注：<code>使用动态签署人能力前，需登录腾讯电子签控制台打开服务开关</code></p><p>枚举值：</p><ul><li>1： 动态签署人</li></ul>
 * @method void setFillType(integer $FillType) 设置<p>签署人信息补充类型，默认无需补充。<ul><li> <strong>1</strong> :  动态签署人（可发起合同后再补充签署人信息）注：<code>企业自动签不支持动态补充</code></li></ul>注：<code>使用动态签署人能力前，需登录腾讯电子签控制台打开服务开关</code></p><p>枚举值：</p><ul><li>1： 动态签署人</li></ul>
 * @method string getFlowReadLimit() 获取<p>签署人阅读合同限制参数<br> <br>取值：</p><ul><li> LimitReadTimeAndBottom，阅读合同必须限制阅读时长并且必须阅读到底</li><li> LimitReadTime，阅读合同仅限制阅读时长</li><li> LimitBottom，阅读合同仅限制必须阅读到底</li><li> NoReadTimeAndBottom，阅读合同不限制阅读时长且不限制阅读到底（白名单功能，请联系客户经理开白使用）</li></ul>
 * @method void setFlowReadLimit(string $FlowReadLimit) 设置<p>签署人阅读合同限制参数<br> <br>取值：</p><ul><li> LimitReadTimeAndBottom，阅读合同必须限制阅读时长并且必须阅读到底</li><li> LimitReadTime，阅读合同仅限制阅读时长</li><li> LimitBottom，阅读合同仅限制必须阅读到底</li><li> NoReadTimeAndBottom，阅读合同不限制阅读时长且不限制阅读到底（白名单功能，请联系客户经理开白使用）</li></ul>
 * @method boolean getForbidAddSignDate() 获取<p>禁止在签署过程中添加签署日期控件<br> <br>前置条件：文件发起合同时，指定SignBeanTag=1（可以在签署过程中添加签署控件）：</p><ul><li> 默认值：false，在开启：签署过程中添加签署控件时，添加签署控件会默认自带签署日期控件</li><li> 可选值：true，在开启：签署过程中添加签署控件时，添加签署控件不会自带签署日期控件</li></ul>
 * @method void setForbidAddSignDate(boolean $ForbidAddSignDate) 设置<p>禁止在签署过程中添加签署日期控件<br> <br>前置条件：文件发起合同时，指定SignBeanTag=1（可以在签署过程中添加签署控件）：</p><ul><li> 默认值：false，在开启：签署过程中添加签署控件时，添加签署控件会默认自带签署日期控件</li><li> 可选值：true，在开启：签署过程中添加签署控件时，添加签署控件不会自带签署日期控件</li></ul>
 */
class ApproverOption extends AbstractModel
{
    /**
     * @var boolean <p>是否可以拒签 默认false-可以拒签 true-不可以拒签</p>
     */
    public $NoRefuse;

    /**
     * @var boolean <p>是否可以转发 默认false-可以转发 true-不可以转发</p>
     */
    public $NoTransfer;

    /**
     * @var boolean <p>当签署方有多个签署区时候，是否隐藏一键所有的签署区</p><p>false：（默认）不隐藏<br>true：隐藏，每个签署区要单独选择印章或者签名</p>
     */
    public $HideOneKeySign;

    /**
     * @var integer <p>签署人信息补充类型，默认无需补充。<ul><li> <strong>1</strong> :  动态签署人（可发起合同后再补充签署人信息）注：<code>企业自动签不支持动态补充</code></li></ul>注：<code>使用动态签署人能力前，需登录腾讯电子签控制台打开服务开关</code></p><p>枚举值：</p><ul><li>1： 动态签署人</li></ul>
     */
    public $FillType;

    /**
     * @var string <p>签署人阅读合同限制参数<br> <br>取值：</p><ul><li> LimitReadTimeAndBottom，阅读合同必须限制阅读时长并且必须阅读到底</li><li> LimitReadTime，阅读合同仅限制阅读时长</li><li> LimitBottom，阅读合同仅限制必须阅读到底</li><li> NoReadTimeAndBottom，阅读合同不限制阅读时长且不限制阅读到底（白名单功能，请联系客户经理开白使用）</li></ul>
     */
    public $FlowReadLimit;

    /**
     * @var boolean <p>禁止在签署过程中添加签署日期控件<br> <br>前置条件：文件发起合同时，指定SignBeanTag=1（可以在签署过程中添加签署控件）：</p><ul><li> 默认值：false，在开启：签署过程中添加签署控件时，添加签署控件会默认自带签署日期控件</li><li> 可选值：true，在开启：签署过程中添加签署控件时，添加签署控件不会自带签署日期控件</li></ul>
     */
    public $ForbidAddSignDate;

    /**
     * @param boolean $NoRefuse <p>是否可以拒签 默认false-可以拒签 true-不可以拒签</p>
     * @param boolean $NoTransfer <p>是否可以转发 默认false-可以转发 true-不可以转发</p>
     * @param boolean $HideOneKeySign <p>当签署方有多个签署区时候，是否隐藏一键所有的签署区</p><p>false：（默认）不隐藏<br>true：隐藏，每个签署区要单独选择印章或者签名</p>
     * @param integer $FillType <p>签署人信息补充类型，默认无需补充。<ul><li> <strong>1</strong> :  动态签署人（可发起合同后再补充签署人信息）注：<code>企业自动签不支持动态补充</code></li></ul>注：<code>使用动态签署人能力前，需登录腾讯电子签控制台打开服务开关</code></p><p>枚举值：</p><ul><li>1： 动态签署人</li></ul>
     * @param string $FlowReadLimit <p>签署人阅读合同限制参数<br> <br>取值：</p><ul><li> LimitReadTimeAndBottom，阅读合同必须限制阅读时长并且必须阅读到底</li><li> LimitReadTime，阅读合同仅限制阅读时长</li><li> LimitBottom，阅读合同仅限制必须阅读到底</li><li> NoReadTimeAndBottom，阅读合同不限制阅读时长且不限制阅读到底（白名单功能，请联系客户经理开白使用）</li></ul>
     * @param boolean $ForbidAddSignDate <p>禁止在签署过程中添加签署日期控件<br> <br>前置条件：文件发起合同时，指定SignBeanTag=1（可以在签署过程中添加签署控件）：</p><ul><li> 默认值：false，在开启：签署过程中添加签署控件时，添加签署控件会默认自带签署日期控件</li><li> 可选值：true，在开启：签署过程中添加签署控件时，添加签署控件不会自带签署日期控件</li></ul>
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

        if (array_key_exists("ForbidAddSignDate",$param) and $param["ForbidAddSignDate"] !== null) {
            $this->ForbidAddSignDate = $param["ForbidAddSignDate"];
        }
    }
}
