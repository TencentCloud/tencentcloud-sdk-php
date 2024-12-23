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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePreparedPersonalEsign请求参数结构体
 *
 * @method string getUserName() 获取个人用户姓名
 * @method void setUserName(string $UserName) 设置个人用户姓名
 * @method string getIdCardNumber() 获取证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method void setIdCardNumber(string $IdCardNumber) 设置证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method string getSealName() 获取印章名称，长度1-50个字。
 * @method void setSealName(string $SealName) 设置印章名称，长度1-50个字。
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getIdCardType() 获取证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li>
<li>HONGKONG_AND_MACAO : 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 港澳台居民居住证(格式同居民身份证)</li></ul>
 * @method void setIdCardType(string $IdCardType) 设置证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li>
<li>HONGKONG_AND_MACAO : 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 港澳台居民居住证(格式同居民身份证)</li></ul>
 * @method string getSealImage() 获取印章图片的base64
注：已废弃
请先通过UploadFiles接口上传文件，获取 FileId
 * @method void setSealImage(string $SealImage) 设置印章图片的base64
注：已废弃
请先通过UploadFiles接口上传文件，获取 FileId
 * @method boolean getSealImageCompress() 获取是否开启印章图片压缩处理，默认不开启，如需开启请设置为 true。当印章超过 2M 时建议开启，开启后图片的 hash 将发生变化。
 * @method void setSealImageCompress(boolean $SealImageCompress) 设置是否开启印章图片压缩处理，默认不开启，如需开启请设置为 true。当印章超过 2M 时建议开启，开启后图片的 hash 将发生变化。
 * @method string getMobile() 获取手机号码；当需要开通自动签时，该参数必传
 * @method void setMobile(string $Mobile) 设置手机号码；当需要开通自动签时，该参数必传
 * @method boolean getEnableAutoSign() 获取此字段已废弃，请勿继续使用。
 * @method void setEnableAutoSign(boolean $EnableAutoSign) 设置此字段已废弃，请勿继续使用。
 * @method string getSealColor() 获取印章颜色（参数ProcessSeal=true时生效）
默认值：BLACK黑色
取值: 
BLACK 黑色,
RED 红色,
BLUE 蓝色。
 * @method void setSealColor(string $SealColor) 设置印章颜色（参数ProcessSeal=true时生效）
默认值：BLACK黑色
取值: 
BLACK 黑色,
RED 红色,
BLUE 蓝色。
 * @method boolean getProcessSeal() 获取是否处理印章，默认不做印章处理。
取值如下：
<ul>
<li>false：不做任何处理；</li>
<li>true：做透明化处理和颜色增强。</li>
</ul>
 * @method void setProcessSeal(boolean $ProcessSeal) 设置是否处理印章，默认不做印章处理。
取值如下：
<ul>
<li>false：不做任何处理；</li>
<li>true：做透明化处理和颜色增强。</li>
</ul>
 * @method string getFileId() 获取印章图片文件 id
取值：
填写的FileId通过UploadFiles接口上传文件获取。
 * @method void setFileId(string $FileId) 设置印章图片文件 id
取值：
填写的FileId通过UploadFiles接口上传文件获取。
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method integer getLicenseType() 获取设置用户开通自动签时是否绑定个人自动签账号许可。一旦绑定后，将扣减购买的个人自动签账号许可一次（1年有效期），不可解绑释放。不传默认为绑定自动签账号许可。 0-绑定个人自动签账号许可，开通后将扣减购买的个人自动签账号许可一次 1-不绑定，发起合同时将按标准合同套餐进行扣减	
 * @method void setLicenseType(integer $LicenseType) 设置设置用户开通自动签时是否绑定个人自动签账号许可。一旦绑定后，将扣减购买的个人自动签账号许可一次（1年有效期），不可解绑释放。不传默认为绑定自动签账号许可。 0-绑定个人自动签账号许可，开通后将扣减购买的个人自动签账号许可一次 1-不绑定，发起合同时将按标准合同套餐进行扣减	
 * @method string getSceneKey() 获取自动签使用的场景值, 可以选择的场景值如下:
<ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul>

注: `不传默认为处方单场景，即E_PRESCRIPTION_AUTO_SIGN`
 * @method void setSceneKey(string $SceneKey) 设置自动签使用的场景值, 可以选择的场景值如下:
<ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul>

注: `不传默认为处方单场景，即E_PRESCRIPTION_AUTO_SIGN`
 */
class CreatePreparedPersonalEsignRequest extends AbstractModel
{
    /**
     * @var string 个人用户姓名
     */
    public $UserName;

    /**
     * @var string 证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     */
    public $IdCardNumber;

    /**
     * @var string 印章名称，长度1-50个字。
     */
    public $SealName;

    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li>
<li>HONGKONG_AND_MACAO : 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 港澳台居民居住证(格式同居民身份证)</li></ul>
     */
    public $IdCardType;

    /**
     * @var string 印章图片的base64
注：已废弃
请先通过UploadFiles接口上传文件，获取 FileId
     * @deprecated
     */
    public $SealImage;

    /**
     * @var boolean 是否开启印章图片压缩处理，默认不开启，如需开启请设置为 true。当印章超过 2M 时建议开启，开启后图片的 hash 将发生变化。
     */
    public $SealImageCompress;

    /**
     * @var string 手机号码；当需要开通自动签时，该参数必传
     */
    public $Mobile;

    /**
     * @var boolean 此字段已废弃，请勿继续使用。
     */
    public $EnableAutoSign;

    /**
     * @var string 印章颜色（参数ProcessSeal=true时生效）
默认值：BLACK黑色
取值: 
BLACK 黑色,
RED 红色,
BLUE 蓝色。
     */
    public $SealColor;

    /**
     * @var boolean 是否处理印章，默认不做印章处理。
取值如下：
<ul>
<li>false：不做任何处理；</li>
<li>true：做透明化处理和颜色增强。</li>
</ul>
     */
    public $ProcessSeal;

    /**
     * @var string 印章图片文件 id
取值：
填写的FileId通过UploadFiles接口上传文件获取。
     */
    public $FileId;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var integer 设置用户开通自动签时是否绑定个人自动签账号许可。一旦绑定后，将扣减购买的个人自动签账号许可一次（1年有效期），不可解绑释放。不传默认为绑定自动签账号许可。 0-绑定个人自动签账号许可，开通后将扣减购买的个人自动签账号许可一次 1-不绑定，发起合同时将按标准合同套餐进行扣减	
     */
    public $LicenseType;

    /**
     * @var string 自动签使用的场景值, 可以选择的场景值如下:
<ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul>

注: `不传默认为处方单场景，即E_PRESCRIPTION_AUTO_SIGN`
     */
    public $SceneKey;

    /**
     * @param string $UserName 个人用户姓名
     * @param string $IdCardNumber 证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     * @param string $SealName 印章名称，长度1-50个字。
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $IdCardType 证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li>
<li>HONGKONG_AND_MACAO : 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 港澳台居民居住证(格式同居民身份证)</li></ul>
     * @param string $SealImage 印章图片的base64
注：已废弃
请先通过UploadFiles接口上传文件，获取 FileId
     * @param boolean $SealImageCompress 是否开启印章图片压缩处理，默认不开启，如需开启请设置为 true。当印章超过 2M 时建议开启，开启后图片的 hash 将发生变化。
     * @param string $Mobile 手机号码；当需要开通自动签时，该参数必传
     * @param boolean $EnableAutoSign 此字段已废弃，请勿继续使用。
     * @param string $SealColor 印章颜色（参数ProcessSeal=true时生效）
默认值：BLACK黑色
取值: 
BLACK 黑色,
RED 红色,
BLUE 蓝色。
     * @param boolean $ProcessSeal 是否处理印章，默认不做印章处理。
取值如下：
<ul>
<li>false：不做任何处理；</li>
<li>true：做透明化处理和颜色增强。</li>
</ul>
     * @param string $FileId 印章图片文件 id
取值：
填写的FileId通过UploadFiles接口上传文件获取。
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param integer $LicenseType 设置用户开通自动签时是否绑定个人自动签账号许可。一旦绑定后，将扣减购买的个人自动签账号许可一次（1年有效期），不可解绑释放。不传默认为绑定自动签账号许可。 0-绑定个人自动签账号许可，开通后将扣减购买的个人自动签账号许可一次 1-不绑定，发起合同时将按标准合同套餐进行扣减	
     * @param string $SceneKey 自动签使用的场景值, 可以选择的场景值如下:
<ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul>

注: `不传默认为处方单场景，即E_PRESCRIPTION_AUTO_SIGN`
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
