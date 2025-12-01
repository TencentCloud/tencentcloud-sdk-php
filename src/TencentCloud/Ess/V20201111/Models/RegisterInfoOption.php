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
 * 创建合同，若对方签署人的企业信息还未在腾讯电子签注册。则在进行引导企业注册时控制企业填写信息的个性化参数。
具体可查看[视频](https://qian.tencent.com/developers/video/?menu=scene&id=6)
 *
 * @method boolean getLegalNameSame() 获取是否允许编辑企业注册时的法人姓名。
<br/>true：允许编辑<br/>false：不允许编辑（默认值）<br/>

注意：
RegisterInfo 中的LegalName值不为空的时候，才可设置为不可编辑。
 * @method void setLegalNameSame(boolean $LegalNameSame) 设置是否允许编辑企业注册时的法人姓名。
<br/>true：允许编辑<br/>false：不允许编辑（默认值）<br/>

注意：
RegisterInfo 中的LegalName值不为空的时候，才可设置为不可编辑。
 * @method boolean getUnifiedSocialCreditCodeCNameSame() 获取是否允许编辑企业注册时统一社会信用代码。
<br/>true:不允许编辑。
<br/>false:允许编辑（默认值）。
<br/>


注意：
RegisterInfo 中的UnifiedSocialCreditCode值不为空的时候，才可设置为不可编辑。

 * @method void setUnifiedSocialCreditCodeCNameSame(boolean $UnifiedSocialCreditCodeCNameSame) 设置是否允许编辑企业注册时统一社会信用代码。
<br/>true:不允许编辑。
<br/>false:允许编辑（默认值）。
<br/>


注意：
RegisterInfo 中的UnifiedSocialCreditCode值不为空的时候，才可设置为不可编辑。

 * @method boolean getOrganizationIdCardTypeSame() 获取是否允许编辑企业注册时的证照类型
<br/>true:不允许编辑。
<br/>false:允许编辑（默认值）。
<br/>

注意：
RegisterInfo 中的OrganizationIdCardType值不为空的时候，才可设置为不可编辑。
 * @method void setOrganizationIdCardTypeSame(boolean $OrganizationIdCardTypeSame) 设置是否允许编辑企业注册时的证照类型
<br/>true:不允许编辑。
<br/>false:允许编辑（默认值）。
<br/>

注意：
RegisterInfo 中的OrganizationIdCardType值不为空的时候，才可设置为不可编辑。
 */
class RegisterInfoOption extends AbstractModel
{
    /**
     * @var boolean 是否允许编辑企业注册时的法人姓名。
<br/>true：允许编辑<br/>false：不允许编辑（默认值）<br/>

注意：
RegisterInfo 中的LegalName值不为空的时候，才可设置为不可编辑。
     */
    public $LegalNameSame;

    /**
     * @var boolean 是否允许编辑企业注册时统一社会信用代码。
<br/>true:不允许编辑。
<br/>false:允许编辑（默认值）。
<br/>


注意：
RegisterInfo 中的UnifiedSocialCreditCode值不为空的时候，才可设置为不可编辑。

     */
    public $UnifiedSocialCreditCodeCNameSame;

    /**
     * @var boolean 是否允许编辑企业注册时的证照类型
<br/>true:不允许编辑。
<br/>false:允许编辑（默认值）。
<br/>

注意：
RegisterInfo 中的OrganizationIdCardType值不为空的时候，才可设置为不可编辑。
     */
    public $OrganizationIdCardTypeSame;

    /**
     * @param boolean $LegalNameSame 是否允许编辑企业注册时的法人姓名。
<br/>true：允许编辑<br/>false：不允许编辑（默认值）<br/>

注意：
RegisterInfo 中的LegalName值不为空的时候，才可设置为不可编辑。
     * @param boolean $UnifiedSocialCreditCodeCNameSame 是否允许编辑企业注册时统一社会信用代码。
<br/>true:不允许编辑。
<br/>false:允许编辑（默认值）。
<br/>


注意：
RegisterInfo 中的UnifiedSocialCreditCode值不为空的时候，才可设置为不可编辑。

     * @param boolean $OrganizationIdCardTypeSame 是否允许编辑企业注册时的证照类型
<br/>true:不允许编辑。
<br/>false:允许编辑（默认值）。
<br/>

注意：
RegisterInfo 中的OrganizationIdCardType值不为空的时候，才可设置为不可编辑。
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
        if (array_key_exists("LegalNameSame",$param) and $param["LegalNameSame"] !== null) {
            $this->LegalNameSame = $param["LegalNameSame"];
        }

        if (array_key_exists("UnifiedSocialCreditCodeCNameSame",$param) and $param["UnifiedSocialCreditCodeCNameSame"] !== null) {
            $this->UnifiedSocialCreditCodeCNameSame = $param["UnifiedSocialCreditCodeCNameSame"];
        }

        if (array_key_exists("OrganizationIdCardTypeSame",$param) and $param["OrganizationIdCardTypeSame"] !== null) {
            $this->OrganizationIdCardTypeSame = $param["OrganizationIdCardTypeSame"];
        }
    }
}
