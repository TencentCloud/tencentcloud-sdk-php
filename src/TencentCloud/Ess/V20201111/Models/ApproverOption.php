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
 * 签署人个性化能力信息
 *
 * @method boolean getNoRefuse() 获取<p>签署方是否可以拒签</p><ul><li> **false** : ( 默认)可以拒签</li><li> **true** :不可以拒签</li></ul>
 * @method void setNoRefuse(boolean $NoRefuse) 设置<p>签署方是否可以拒签</p><ul><li> **false** : ( 默认)可以拒签</li><li> **true** :不可以拒签</li></ul>
 * @method boolean getNoTransfer() 获取<p>签署方是否可以转他人处理</p><ul><li> **false** : ( 默认)可以转他人处理</li><li> **true** :不可以转他人处理</li></ul>
 * @method void setNoTransfer(boolean $NoTransfer) 设置<p>签署方是否可以转他人处理</p><ul><li> **false** : ( 默认)可以转他人处理</li><li> **true** :不可以转他人处理</li></ul>
 * @method boolean getCanEditApprover() 获取<p>允许编辑签署人信息（嵌入式使用） 默认true-可以编辑 false-不可以编辑</p>
 * @method void setCanEditApprover(boolean $CanEditApprover) 设置<p>允许编辑签署人信息（嵌入式使用） 默认true-可以编辑 false-不可以编辑</p>
 * @method integer getFillType() 获取<p>签署人信息补充类型，默认无需补充。</p><ul><li> **1** :  动态签署人（可发起合同后再补充签署人信息）注：<code>企业自动签不支持动态补充</code></li></ul><p>注：</p><ol><li><code>使用动态签署人能力前，需登录腾讯电子签控制台打开服务开关</code></li><li>此参数在嵌入式场景下无效。</li></ol>
 * @method void setFillType(integer $FillType) 设置<p>签署人信息补充类型，默认无需补充。</p><ul><li> **1** :  动态签署人（可发起合同后再补充签署人信息）注：<code>企业自动签不支持动态补充</code></li></ul><p>注：</p><ol><li><code>使用动态签署人能力前，需登录腾讯电子签控制台打开服务开关</code></li><li>此参数在嵌入式场景下无效。</li></ol>
 * @method string getFlowReadLimit() 获取<p>签署人阅读合同限制参数<br> <br>取值：</p><ul><li> LimitReadTimeAndBottom，阅读合同必须限制阅读时长并且必须阅读到底</li><li> LimitReadTime，阅读合同仅限制阅读时长</li><li> LimitBottom，阅读合同仅限制必须阅读到底</li><li> NoReadTimeAndBottom，阅读合同不限制阅读时长且不限制阅读到底（白名单功能，请联系客户经理开白使用）</li></ul>
 * @method void setFlowReadLimit(string $FlowReadLimit) 设置<p>签署人阅读合同限制参数<br> <br>取值：</p><ul><li> LimitReadTimeAndBottom，阅读合同必须限制阅读时长并且必须阅读到底</li><li> LimitReadTime，阅读合同仅限制阅读时长</li><li> LimitBottom，阅读合同仅限制必须阅读到底</li><li> NoReadTimeAndBottom，阅读合同不限制阅读时长且不限制阅读到底（白名单功能，请联系客户经理开白使用）</li></ul>
 * @method boolean getForbidAddSignDate() 获取<p>禁止在签署过程中添加签署日期控件<br> <br>前置条件：文件发起合同时，指定SignBeanTag=1（可以在签署过程中添加签署控件）：</p><ul><li> 默认值：false，在开启：签署过程中添加签署控件时，添加签署控件会默认自带签署日期控件</li><li> 可选值：true，在开启：签署过程中添加签署控件时，添加签署控件不会自带签署日期控件</li></ul>
 * @method void setForbidAddSignDate(boolean $ForbidAddSignDate) 设置<p>禁止在签署过程中添加签署日期控件<br> <br>前置条件：文件发起合同时，指定SignBeanTag=1（可以在签署过程中添加签署控件）：</p><ul><li> 默认值：false，在开启：签署过程中添加签署控件时，添加签署控件会默认自带签署日期控件</li><li> 可选值：true，在开启：签署过程中添加签署控件时，添加签署控件不会自带签署日期控件</li></ul>
 * @method string getApproverMobileMode() 获取<p>签署人手机号传参模式</p><p>枚举值：</p><ul><li>REPLACE： 接受已有认证手机号并替换</li><li>GIVEN： 以客户入参输入手机号为主</li><li>VALIDATE： 若与认证手机号不一致则报错</li></ul><p>默认值：REPLACE</p><p>会触发手机号传参模式的前提是：签署人是指定了具体身份信息的</p><ul><li>在指定签署人姓名，证件号的情况下会触发</li></ul>
 * @method void setApproverMobileMode(string $ApproverMobileMode) 设置<p>签署人手机号传参模式</p><p>枚举值：</p><ul><li>REPLACE： 接受已有认证手机号并替换</li><li>GIVEN： 以客户入参输入手机号为主</li><li>VALIDATE： 若与认证手机号不一致则报错</li></ul><p>默认值：REPLACE</p><p>会触发手机号传参模式的前提是：签署人是指定了具体身份信息的</p><ul><li>在指定签署人姓名，证件号的情况下会触发</li></ul>
 */
class ApproverOption extends AbstractModel
{
    /**
     * @var boolean <p>签署方是否可以拒签</p><ul><li> **false** : ( 默认)可以拒签</li><li> **true** :不可以拒签</li></ul>
     */
    public $NoRefuse;

    /**
     * @var boolean <p>签署方是否可以转他人处理</p><ul><li> **false** : ( 默认)可以转他人处理</li><li> **true** :不可以转他人处理</li></ul>
     */
    public $NoTransfer;

    /**
     * @var boolean <p>允许编辑签署人信息（嵌入式使用） 默认true-可以编辑 false-不可以编辑</p>
     */
    public $CanEditApprover;

    /**
     * @var integer <p>签署人信息补充类型，默认无需补充。</p><ul><li> **1** :  动态签署人（可发起合同后再补充签署人信息）注：<code>企业自动签不支持动态补充</code></li></ul><p>注：</p><ol><li><code>使用动态签署人能力前，需登录腾讯电子签控制台打开服务开关</code></li><li>此参数在嵌入式场景下无效。</li></ol>
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
     * @var string <p>签署人手机号传参模式</p><p>枚举值：</p><ul><li>REPLACE： 接受已有认证手机号并替换</li><li>GIVEN： 以客户入参输入手机号为主</li><li>VALIDATE： 若与认证手机号不一致则报错</li></ul><p>默认值：REPLACE</p><p>会触发手机号传参模式的前提是：签署人是指定了具体身份信息的</p><ul><li>在指定签署人姓名，证件号的情况下会触发</li></ul>
     */
    public $ApproverMobileMode;

    /**
     * @param boolean $NoRefuse <p>签署方是否可以拒签</p><ul><li> **false** : ( 默认)可以拒签</li><li> **true** :不可以拒签</li></ul>
     * @param boolean $NoTransfer <p>签署方是否可以转他人处理</p><ul><li> **false** : ( 默认)可以转他人处理</li><li> **true** :不可以转他人处理</li></ul>
     * @param boolean $CanEditApprover <p>允许编辑签署人信息（嵌入式使用） 默认true-可以编辑 false-不可以编辑</p>
     * @param integer $FillType <p>签署人信息补充类型，默认无需补充。</p><ul><li> **1** :  动态签署人（可发起合同后再补充签署人信息）注：<code>企业自动签不支持动态补充</code></li></ul><p>注：</p><ol><li><code>使用动态签署人能力前，需登录腾讯电子签控制台打开服务开关</code></li><li>此参数在嵌入式场景下无效。</li></ol>
     * @param string $FlowReadLimit <p>签署人阅读合同限制参数<br> <br>取值：</p><ul><li> LimitReadTimeAndBottom，阅读合同必须限制阅读时长并且必须阅读到底</li><li> LimitReadTime，阅读合同仅限制阅读时长</li><li> LimitBottom，阅读合同仅限制必须阅读到底</li><li> NoReadTimeAndBottom，阅读合同不限制阅读时长且不限制阅读到底（白名单功能，请联系客户经理开白使用）</li></ul>
     * @param boolean $ForbidAddSignDate <p>禁止在签署过程中添加签署日期控件<br> <br>前置条件：文件发起合同时，指定SignBeanTag=1（可以在签署过程中添加签署控件）：</p><ul><li> 默认值：false，在开启：签署过程中添加签署控件时，添加签署控件会默认自带签署日期控件</li><li> 可选值：true，在开启：签署过程中添加签署控件时，添加签署控件不会自带签署日期控件</li></ul>
     * @param string $ApproverMobileMode <p>签署人手机号传参模式</p><p>枚举值：</p><ul><li>REPLACE： 接受已有认证手机号并替换</li><li>GIVEN： 以客户入参输入手机号为主</li><li>VALIDATE： 若与认证手机号不一致则报错</li></ul><p>默认值：REPLACE</p><p>会触发手机号传参模式的前提是：签署人是指定了具体身份信息的</p><ul><li>在指定签署人姓名，证件号的情况下会触发</li></ul>
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

        if (array_key_exists("CanEditApprover",$param) and $param["CanEditApprover"] !== null) {
            $this->CanEditApprover = $param["CanEditApprover"];
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

        if (array_key_exists("ApproverMobileMode",$param) and $param["ApproverMobileMode"] !== null) {
            $this->ApproverMobileMode = $param["ApproverMobileMode"];
        }
    }
}
