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
 * CreatePreparedPersonalEsign请求参数结构体
 *
 * @method string getUserName() 获取<p>个人用户姓名</p>
 * @method void setUserName(string $UserName) 设置<p>个人用户姓名</p>
 * @method string getIdCardNumber() 获取<p>证件号码，应符合以下规则</p><ul><li> 中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method void setIdCardNumber(string $IdCardNumber) 设置<p>证件号码，应符合以下规则</p><ul><li> 中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method string getSealName() 获取<p>印章名称，长度1-50个字。</p>
 * @method void setSealName(string $SealName) 设置<p>印章名称，长度1-50个字。</p>
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getIdCardType() 获取<p>证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同 中国大陆居民身份证)</li></ul>
 * @method void setIdCardType(string $IdCardType) 设置<p>证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同 中国大陆居民身份证)</li></ul>
 * @method string getSealImage() 获取<p>该字段已不再使用</p>
 * @method void setSealImage(string $SealImage) 设置<p>该字段已不再使用</p>
 * @method boolean getSealImageCompress() 获取<p>是否开启印章图片压缩处理，默认不开启，如需开启请设置为 true。当印章超过 2M 时建议开启，开启后图片的 hash 将发生变化。</p>
 * @method void setSealImageCompress(boolean $SealImageCompress) 设置<p>是否开启印章图片压缩处理，默认不开启，如需开启请设置为 true。当印章超过 2M 时建议开启，开启后图片的 hash 将发生变化。</p>
 * @method string getMobile() 获取<p>手机号码；当需要开通自动签时，该参数必传</p>
 * @method void setMobile(string $Mobile) 设置<p>手机号码；当需要开通自动签时，该参数必传</p>
 * @method boolean getEnableAutoSign() 获取<p>该字段已不再使用</p>
 * @method void setEnableAutoSign(boolean $EnableAutoSign) 设置<p>该字段已不再使用</p>
 * @method string getSealColor() 获取<p>印章颜色（参数ProcessSeal=true时生效）<br>默认值：BLACK黑色<br>取值:<br>BLACK 黑色,<br>RED 红色,<br>BLUE 蓝色。</p>
 * @method void setSealColor(string $SealColor) 设置<p>印章颜色（参数ProcessSeal=true时生效）<br>默认值：BLACK黑色<br>取值:<br>BLACK 黑色,<br>RED 红色,<br>BLUE 蓝色。</p>
 * @method boolean getProcessSeal() 获取<p>是否处理印章，默认不做印章处理。<br>取值如下：</p><ul><li>false：不做任何处理；</li><li>true：做透明化处理和颜色增强。</li></ul>
 * @method void setProcessSeal(boolean $ProcessSeal) 设置<p>是否处理印章，默认不做印章处理。<br>取值如下：</p><ul><li>false：不做任何处理；</li><li>true：做透明化处理和颜色增强。</li></ul>
 * @method string getFileId() 获取<p>印章图片文件 id<br>取值：<br>填写的FileId通过UploadFiles接口上传文件获取。</p>
 * @method void setFileId(string $FileId) 设置<p>印章图片文件 id<br>取值：<br>填写的FileId通过UploadFiles接口上传文件获取。</p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method integer getLicenseType() 获取<p>设置用户开通自动签时是否绑定个人自动签账号许可。一旦绑定后，将扣减购买的个人自动签账号许可一次（1年有效期），不可解绑释放。不传默认为绑定自动签账号许可。 0-绑定个人自动签账号许可，开通后将扣减购买的个人自动签账号许可一次 1-不绑定，发起合同时将按标准合同套餐进行扣减</p>
 * @method void setLicenseType(integer $LicenseType) 设置<p>设置用户开通自动签时是否绑定个人自动签账号许可。一旦绑定后，将扣减购买的个人自动签账号许可一次（1年有效期），不可解绑释放。不传默认为绑定自动签账号许可。 0-绑定个人自动签账号许可，开通后将扣减购买的个人自动签账号许可一次 1-不绑定，发起合同时将按标准合同套餐进行扣减</p>
 * @method string getSceneKey() 获取<p>自动签使用的场景值, 可以选择的场景值如下:</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul><p>注: <code>不传默认为处方单场景，即E_PRESCRIPTION_AUTO_SIGN</code></p>
 * @method void setSceneKey(string $SceneKey) 设置<p>自动签使用的场景值, 可以选择的场景值如下:</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul><p>注: <code>不传默认为处方单场景，即E_PRESCRIPTION_AUTO_SIGN</code></p>
 */
class CreatePreparedPersonalEsignRequest extends AbstractModel
{
    /**
     * @var string <p>个人用户姓名</p>
     */
    public $UserName;

    /**
     * @var string <p>证件号码，应符合以下规则</p><ul><li> 中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     */
    public $IdCardNumber;

    /**
     * @var string <p>印章名称，长度1-50个字。</p>
     */
    public $SealName;

    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同 中国大陆居民身份证)</li></ul>
     */
    public $IdCardType;

    /**
     * @var string <p>该字段已不再使用</p>
     * @deprecated
     */
    public $SealImage;

    /**
     * @var boolean <p>是否开启印章图片压缩处理，默认不开启，如需开启请设置为 true。当印章超过 2M 时建议开启，开启后图片的 hash 将发生变化。</p>
     */
    public $SealImageCompress;

    /**
     * @var string <p>手机号码；当需要开通自动签时，该参数必传</p>
     */
    public $Mobile;

    /**
     * @var boolean <p>该字段已不再使用</p>
     * @deprecated
     */
    public $EnableAutoSign;

    /**
     * @var string <p>印章颜色（参数ProcessSeal=true时生效）<br>默认值：BLACK黑色<br>取值:<br>BLACK 黑色,<br>RED 红色,<br>BLUE 蓝色。</p>
     */
    public $SealColor;

    /**
     * @var boolean <p>是否处理印章，默认不做印章处理。<br>取值如下：</p><ul><li>false：不做任何处理；</li><li>true：做透明化处理和颜色增强。</li></ul>
     */
    public $ProcessSeal;

    /**
     * @var string <p>印章图片文件 id<br>取值：<br>填写的FileId通过UploadFiles接口上传文件获取。</p>
     */
    public $FileId;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var integer <p>设置用户开通自动签时是否绑定个人自动签账号许可。一旦绑定后，将扣减购买的个人自动签账号许可一次（1年有效期），不可解绑释放。不传默认为绑定自动签账号许可。 0-绑定个人自动签账号许可，开通后将扣减购买的个人自动签账号许可一次 1-不绑定，发起合同时将按标准合同套餐进行扣减</p>
     */
    public $LicenseType;

    /**
     * @var string <p>自动签使用的场景值, 可以选择的场景值如下:</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul><p>注: <code>不传默认为处方单场景，即E_PRESCRIPTION_AUTO_SIGN</code></p>
     */
    public $SceneKey;

    /**
     * @param string $UserName <p>个人用户姓名</p>
     * @param string $IdCardNumber <p>证件号码，应符合以下规则</p><ul><li> 中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     * @param string $SealName <p>印章名称，长度1-50个字。</p>
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $IdCardType <p>证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同 中国大陆居民身份证)</li></ul>
     * @param string $SealImage <p>该字段已不再使用</p>
     * @param boolean $SealImageCompress <p>是否开启印章图片压缩处理，默认不开启，如需开启请设置为 true。当印章超过 2M 时建议开启，开启后图片的 hash 将发生变化。</p>
     * @param string $Mobile <p>手机号码；当需要开通自动签时，该参数必传</p>
     * @param boolean $EnableAutoSign <p>该字段已不再使用</p>
     * @param string $SealColor <p>印章颜色（参数ProcessSeal=true时生效）<br>默认值：BLACK黑色<br>取值:<br>BLACK 黑色,<br>RED 红色,<br>BLUE 蓝色。</p>
     * @param boolean $ProcessSeal <p>是否处理印章，默认不做印章处理。<br>取值如下：</p><ul><li>false：不做任何处理；</li><li>true：做透明化处理和颜色增强。</li></ul>
     * @param string $FileId <p>印章图片文件 id<br>取值：<br>填写的FileId通过UploadFiles接口上传文件获取。</p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param integer $LicenseType <p>设置用户开通自动签时是否绑定个人自动签账号许可。一旦绑定后，将扣减购买的个人自动签账号许可一次（1年有效期），不可解绑释放。不传默认为绑定自动签账号许可。 0-绑定个人自动签账号许可，开通后将扣减购买的个人自动签账号许可一次 1-不绑定，发起合同时将按标准合同套餐进行扣减</p>
     * @param string $SceneKey <p>自动签使用的场景值, 可以选择的场景值如下:</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul><p>注: <code>不传默认为处方单场景，即E_PRESCRIPTION_AUTO_SIGN</code></p>
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("SealName",$param) and $param["SealName"] !== null) {
            $this->SealName = $param["SealName"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("SealImage",$param) and $param["SealImage"] !== null) {
            $this->SealImage = $param["SealImage"];
        }

        if (array_key_exists("SealImageCompress",$param) and $param["SealImageCompress"] !== null) {
            $this->SealImageCompress = $param["SealImageCompress"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("EnableAutoSign",$param) and $param["EnableAutoSign"] !== null) {
            $this->EnableAutoSign = $param["EnableAutoSign"];
        }

        if (array_key_exists("SealColor",$param) and $param["SealColor"] !== null) {
            $this->SealColor = $param["SealColor"];
        }

        if (array_key_exists("ProcessSeal",$param) and $param["ProcessSeal"] !== null) {
            $this->ProcessSeal = $param["ProcessSeal"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("SceneKey",$param) and $param["SceneKey"] !== null) {
            $this->SceneKey = $param["SceneKey"];
        }
    }
}
