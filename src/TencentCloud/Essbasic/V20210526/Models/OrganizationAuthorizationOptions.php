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
 * 企业认证可选项，其中包括 社会信用代码是否一致，企业名称是否一致，法人是否一致， 对公打款账号是否一致等信息。
代表生成链接的时候指定的这些信息不能被用户修改。

p.s. 注意这些选项一旦传递，相关的信息也不会被上传的营业执照里面包含的信息所覆盖。
 *
 * @method boolean getUniformSocialCreditCodeSame() 获取<p>对方打开链接认证时，对方填写的营业执照的社会信用代码是否与接口上传上来的要保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul></p>
 * @method void setUniformSocialCreditCodeSame(boolean $UniformSocialCreditCodeSame) 设置<p>对方打开链接认证时，对方填写的营业执照的社会信用代码是否与接口上传上来的要保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul></p>
 * @method boolean getOrganizationNameSame() 获取<p>对方打开链接认证时，企业名称是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>p.s. 仅在企业名称不为空时有效</p>
 * @method void setOrganizationNameSame(boolean $OrganizationNameSame) 设置<p>对方打开链接认证时，企业名称是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>p.s. 仅在企业名称不为空时有效</p>
 * @method boolean getLegalNameSame() 获取<p>对方打开链接认证时，法人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>p.s. 仅在法人姓名不为空时有效</p>
 * @method void setLegalNameSame(boolean $LegalNameSame) 设置<p>对方打开链接认证时，法人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>p.s. 仅在法人姓名不为空时有效</p>
 * @method boolean getBankAccountNumberSame() 获取<p>对方打开链接认证时，对公打款账号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>p.s. 仅在对公打款账号不为空时有效</p>
 * @method void setBankAccountNumberSame(boolean $BankAccountNumberSame) 设置<p>对方打开链接认证时，对公打款账号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>p.s. 仅在对公打款账号不为空时有效</p>
 * @method boolean getAddressSame() 获取<p>对方打开链接认证时，公司地址是否要与接口传递上来的保持一致。</p><ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时会回显接口传递的值，且不可更改</li></ul>p.s. 仅在公司地址（ProxyAddress）不为空时有效如下图所示：<img src="https://qcloudimg.tencent-cloud.cn/raw/4aa67a434cdf522c04e32f2e1de0382b.png" alt="示例"><p></p>
 * @method void setAddressSame(boolean $AddressSame) 设置<p>对方打开链接认证时，公司地址是否要与接口传递上来的保持一致。</p><ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时会回显接口传递的值，且不可更改</li></ul>p.s. 仅在公司地址（ProxyAddress）不为空时有效如下图所示：<img src="https://qcloudimg.tencent-cloud.cn/raw/4aa67a434cdf522c04e32f2e1de0382b.png" alt="示例"><p></p>
 * @method boolean getBizLicenseSame() 获取<p>对方打开链接认证时，公司营业执照是否要与接口传递上来的保持一致。</p><ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致，用户可以进行修改</li><li><b>true</b>：启用状态，实际认证时回填的信息就是用户传递的值，并且不能修改</li></ul><p></p><p>p.s. 仅在公司营业执照（BusinessLicense）不为空时有效</p>如下图<img src="https://qcloudimg.tencent-cloud.cn/raw/7159637d5a8ac3d92b35813b1fc9660a.png" alt="示例">
 * @method void setBizLicenseSame(boolean $BizLicenseSame) 设置<p>对方打开链接认证时，公司营业执照是否要与接口传递上来的保持一致。</p><ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致，用户可以进行修改</li><li><b>true</b>：启用状态，实际认证时回填的信息就是用户传递的值，并且不能修改</li></ul><p></p><p>p.s. 仅在公司营业执照（BusinessLicense）不为空时有效</p>如下图<img src="https://qcloudimg.tencent-cloud.cn/raw/7159637d5a8ac3d92b35813b1fc9660a.png" alt="示例">
 */
class OrganizationAuthorizationOptions extends AbstractModel
{
    /**
     * @var boolean <p>对方打开链接认证时，对方填写的营业执照的社会信用代码是否与接口上传上来的要保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul></p>
     */
    public $UniformSocialCreditCodeSame;

    /**
     * @var boolean <p>对方打开链接认证时，企业名称是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>p.s. 仅在企业名称不为空时有效</p>
     */
    public $OrganizationNameSame;

    /**
     * @var boolean <p>对方打开链接认证时，法人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>p.s. 仅在法人姓名不为空时有效</p>
     */
    public $LegalNameSame;

    /**
     * @var boolean <p>对方打开链接认证时，对公打款账号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>p.s. 仅在对公打款账号不为空时有效</p>
     */
    public $BankAccountNumberSame;

    /**
     * @var boolean <p>对方打开链接认证时，公司地址是否要与接口传递上来的保持一致。</p><ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时会回显接口传递的值，且不可更改</li></ul>p.s. 仅在公司地址（ProxyAddress）不为空时有效如下图所示：<img src="https://qcloudimg.tencent-cloud.cn/raw/4aa67a434cdf522c04e32f2e1de0382b.png" alt="示例"><p></p>
     */
    public $AddressSame;

    /**
     * @var boolean <p>对方打开链接认证时，公司营业执照是否要与接口传递上来的保持一致。</p><ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致，用户可以进行修改</li><li><b>true</b>：启用状态，实际认证时回填的信息就是用户传递的值，并且不能修改</li></ul><p></p><p>p.s. 仅在公司营业执照（BusinessLicense）不为空时有效</p>如下图<img src="https://qcloudimg.tencent-cloud.cn/raw/7159637d5a8ac3d92b35813b1fc9660a.png" alt="示例">
     */
    public $BizLicenseSame;

    /**
     * @param boolean $UniformSocialCreditCodeSame <p>对方打开链接认证时，对方填写的营业执照的社会信用代码是否与接口上传上来的要保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul></p>
     * @param boolean $OrganizationNameSame <p>对方打开链接认证时，企业名称是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>p.s. 仅在企业名称不为空时有效</p>
     * @param boolean $LegalNameSame <p>对方打开链接认证时，法人姓名是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>p.s. 仅在法人姓名不为空时有效</p>
     * @param boolean $BankAccountNumberSame <p>对方打开链接认证时，对公打款账号是否要与接口传递上来的保持一致。<ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时必须与接口传递的信息完全相符。</li></ul>p.s. 仅在对公打款账号不为空时有效</p>
     * @param boolean $AddressSame <p>对方打开链接认证时，公司地址是否要与接口传递上来的保持一致。</p><ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致。</li><li><b>true</b>：启用状态，实际认证时会回显接口传递的值，且不可更改</li></ul>p.s. 仅在公司地址（ProxyAddress）不为空时有效如下图所示：<img src="https://qcloudimg.tencent-cloud.cn/raw/4aa67a434cdf522c04e32f2e1de0382b.png" alt="示例"><p></p>
     * @param boolean $BizLicenseSame <p>对方打开链接认证时，公司营业执照是否要与接口传递上来的保持一致。</p><ul><li><b>false（默认值）</b>：关闭状态，实际认证时允许与接口传递的信息存在不一致，用户可以进行修改</li><li><b>true</b>：启用状态，实际认证时回填的信息就是用户传递的值，并且不能修改</li></ul><p></p><p>p.s. 仅在公司营业执照（BusinessLicense）不为空时有效</p>如下图<img src="https://qcloudimg.tencent-cloud.cn/raw/7159637d5a8ac3d92b35813b1fc9660a.png" alt="示例">
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
        if (array_key_exists("UniformSocialCreditCodeSame",$param) and $param["UniformSocialCreditCodeSame"] !== null) {
            $this->UniformSocialCreditCodeSame = $param["UniformSocialCreditCodeSame"];
        }

        if (array_key_exists("OrganizationNameSame",$param) and $param["OrganizationNameSame"] !== null) {
            $this->OrganizationNameSame = $param["OrganizationNameSame"];
        }

        if (array_key_exists("LegalNameSame",$param) and $param["LegalNameSame"] !== null) {
            $this->LegalNameSame = $param["LegalNameSame"];
        }

        if (array_key_exists("BankAccountNumberSame",$param) and $param["BankAccountNumberSame"] !== null) {
            $this->BankAccountNumberSame = $param["BankAccountNumberSame"];
        }

        if (array_key_exists("AddressSame",$param) and $param["AddressSame"] !== null) {
            $this->AddressSame = $param["AddressSame"];
        }

        if (array_key_exists("BizLicenseSame",$param) and $param["BizLicenseSame"] !== null) {
            $this->BizLicenseSame = $param["BizLicenseSame"];
        }
    }
}
