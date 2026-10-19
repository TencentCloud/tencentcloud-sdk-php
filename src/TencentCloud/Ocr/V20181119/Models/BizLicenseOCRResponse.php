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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BizLicenseOCR返回参数结构体
 *
 * @method string getRegNum() 获取<p>统一社会信用代码（三合一之前为注册号）</p>
 * @method void setRegNum(string $RegNum) 设置<p>统一社会信用代码（三合一之前为注册号）</p>
 * @method string getName() 获取<p>公司名称</p>
 * @method void setName(string $Name) 设置<p>公司名称</p>
 * @method string getCapital() 获取<p>注册资本</p>
 * @method void setCapital(string $Capital) 设置<p>注册资本</p>
 * @method string getPerson() 获取<p>法定代表人</p>
 * @method void setPerson(string $Person) 设置<p>法定代表人</p>
 * @method string getAddress() 获取<p>地址</p>
 * @method void setAddress(string $Address) 设置<p>地址</p>
 * @method string getBusiness() 获取<p>经营范围</p>
 * @method void setBusiness(string $Business) 设置<p>经营范围</p>
 * @method string getType() 获取<p>主体类型</p>
 * @method void setType(string $Type) 设置<p>主体类型</p>
 * @method string getPeriod() 获取<p>营业期限</p>
 * @method void setPeriod(string $Period) 设置<p>营业期限</p>
 * @method string getComposingForm() 获取<p>组成形式</p>
 * @method void setComposingForm(string $ComposingForm) 设置<p>组成形式</p>
 * @method string getSetDate() 获取<p>成立日期</p>
 * @method void setSetDate(string $SetDate) 设置<p>成立日期</p>
 * @method array getRecognizeWarnCode() 获取<p>Code 告警码列表和释义：<br>-9102 黑白复印件告警<br>-9104 翻拍件告警<br>-9108 经营范围识别异常告警（由于文字过小、模糊、反光、遮挡或明显倾斜等情况导致未能正常识别）</p>
 * @method void setRecognizeWarnCode(array $RecognizeWarnCode) 设置<p>Code 告警码列表和释义：<br>-9102 黑白复印件告警<br>-9104 翻拍件告警<br>-9108 经营范围识别异常告警（由于文字过小、模糊、反光、遮挡或明显倾斜等情况导致未能正常识别）</p>
 * @method array getRecognizeWarnMsg() 获取<p>告警码说明：<br>WARN_COPY_CARD 黑白复印件告警<br>WARN_RESHOOT_CARD翻拍件告警<br>WARN_EARLY_STOP 经营范围识别异常告警</p>
 * @method void setRecognizeWarnMsg(array $RecognizeWarnMsg) 设置<p>告警码说明：<br>WARN_COPY_CARD 黑白复印件告警<br>WARN_RESHOOT_CARD翻拍件告警<br>WARN_EARLY_STOP 经营范围识别异常告警</p>
 * @method integer getIsDuplication() 获取<p>是否为副本。1为是，-1为不是。</p>
 * @method void setIsDuplication(integer $IsDuplication) 设置<p>是否为副本。1为是，-1为不是。</p>
 * @method string getRegistrationDate() 获取<p>登记日期</p>
 * @method void setRegistrationDate(string $RegistrationDate) 设置<p>登记日期</p>
 * @method float getAngle() 获取<p>图片旋转角度(角度制)，文本的水平方向为0度；顺时针为正，角度范围是0-360度</p>
 * @method void setAngle(float $Angle) 设置<p>图片旋转角度(角度制)，文本的水平方向为0度；顺时针为正，角度范围是0-360度</p>
 * @method boolean getNationalEmblem() 获取<p>是否有国徽。false为没有，true为有。</p>
 * @method void setNationalEmblem(boolean $NationalEmblem) 设置<p>是否有国徽。false为没有，true为有。</p>
 * @method boolean getQRCode() 获取<p>是否有二维码。false为没有，true为有。</p>
 * @method void setQRCode(boolean $QRCode) 设置<p>是否有二维码。false为没有，true为有。</p>
 * @method boolean getSeal() 获取<p>是否有印章。false为没有，true为有。</p>
 * @method void setSeal(boolean $Seal) 设置<p>是否有印章。false为没有，true为有。</p>
 * @method string getTitle() 获取<p>标题</p>
 * @method void setTitle(string $Title) 设置<p>标题</p>
 * @method string getSerialNumber() 获取<p>编号</p>
 * @method void setSerialNumber(string $SerialNumber) 设置<p>编号</p>
 * @method string getRegistrationAuthority() 获取<p>登记机关</p>
 * @method void setRegistrationAuthority(string $RegistrationAuthority) 设置<p>登记机关</p>
 * @method boolean getElectronic() 获取<p>是否是电子营业执照。false为没有，true为有。</p>
 * @method void setElectronic(boolean $Electronic) 设置<p>是否是电子营业执照。false为没有，true为有。</p>
 * @method array getBusinessCertificate() 获取<p>非营业执照的营业类证件识别结果，将以结构化形式呈现。</p>
 * @method void setBusinessCertificate(array $BusinessCertificate) 设置<p>非营业执照的营业类证件识别结果，将以结构化形式呈现。</p>
 * @method string getImportant() 获取<p>重要提示字段</p>
 * @method void setImportant(string $Important) 设置<p>重要提示字段</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class BizLicenseOCRResponse extends AbstractModel
{
    /**
     * @var string <p>统一社会信用代码（三合一之前为注册号）</p>
     */
    public $RegNum;

    /**
     * @var string <p>公司名称</p>
     */
    public $Name;

    /**
     * @var string <p>注册资本</p>
     */
    public $Capital;

    /**
     * @var string <p>法定代表人</p>
     */
    public $Person;

    /**
     * @var string <p>地址</p>
     */
    public $Address;

    /**
     * @var string <p>经营范围</p>
     */
    public $Business;

    /**
     * @var string <p>主体类型</p>
     */
    public $Type;

    /**
     * @var string <p>营业期限</p>
     */
    public $Period;

    /**
     * @var string <p>组成形式</p>
     */
    public $ComposingForm;

    /**
     * @var string <p>成立日期</p>
     */
    public $SetDate;

    /**
     * @var array <p>Code 告警码列表和释义：<br>-9102 黑白复印件告警<br>-9104 翻拍件告警<br>-9108 经营范围识别异常告警（由于文字过小、模糊、反光、遮挡或明显倾斜等情况导致未能正常识别）</p>
     */
    public $RecognizeWarnCode;

    /**
     * @var array <p>告警码说明：<br>WARN_COPY_CARD 黑白复印件告警<br>WARN_RESHOOT_CARD翻拍件告警<br>WARN_EARLY_STOP 经营范围识别异常告警</p>
     */
    public $RecognizeWarnMsg;

    /**
     * @var integer <p>是否为副本。1为是，-1为不是。</p>
     */
    public $IsDuplication;

    /**
     * @var string <p>登记日期</p>
     */
    public $RegistrationDate;

    /**
     * @var float <p>图片旋转角度(角度制)，文本的水平方向为0度；顺时针为正，角度范围是0-360度</p>
     */
    public $Angle;

    /**
     * @var boolean <p>是否有国徽。false为没有，true为有。</p>
     */
    public $NationalEmblem;

    /**
     * @var boolean <p>是否有二维码。false为没有，true为有。</p>
     */
    public $QRCode;

    /**
     * @var boolean <p>是否有印章。false为没有，true为有。</p>
     */
    public $Seal;

    /**
     * @var string <p>标题</p>
     */
    public $Title;

    /**
     * @var string <p>编号</p>
     */
    public $SerialNumber;

    /**
     * @var string <p>登记机关</p>
     */
    public $RegistrationAuthority;

    /**
     * @var boolean <p>是否是电子营业执照。false为没有，true为有。</p>
     */
    public $Electronic;

    /**
     * @var array <p>非营业执照的营业类证件识别结果，将以结构化形式呈现。</p>
     */
    public $BusinessCertificate;

    /**
     * @var string <p>重要提示字段</p>
     */
    public $Important;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RegNum <p>统一社会信用代码（三合一之前为注册号）</p>
     * @param string $Name <p>公司名称</p>
     * @param string $Capital <p>注册资本</p>
     * @param string $Person <p>法定代表人</p>
     * @param string $Address <p>地址</p>
     * @param string $Business <p>经营范围</p>
     * @param string $Type <p>主体类型</p>
     * @param string $Period <p>营业期限</p>
     * @param string $ComposingForm <p>组成形式</p>
     * @param string $SetDate <p>成立日期</p>
     * @param array $RecognizeWarnCode <p>Code 告警码列表和释义：<br>-9102 黑白复印件告警<br>-9104 翻拍件告警<br>-9108 经营范围识别异常告警（由于文字过小、模糊、反光、遮挡或明显倾斜等情况导致未能正常识别）</p>
     * @param array $RecognizeWarnMsg <p>告警码说明：<br>WARN_COPY_CARD 黑白复印件告警<br>WARN_RESHOOT_CARD翻拍件告警<br>WARN_EARLY_STOP 经营范围识别异常告警</p>
     * @param integer $IsDuplication <p>是否为副本。1为是，-1为不是。</p>
     * @param string $RegistrationDate <p>登记日期</p>
     * @param float $Angle <p>图片旋转角度(角度制)，文本的水平方向为0度；顺时针为正，角度范围是0-360度</p>
     * @param boolean $NationalEmblem <p>是否有国徽。false为没有，true为有。</p>
     * @param boolean $QRCode <p>是否有二维码。false为没有，true为有。</p>
     * @param boolean $Seal <p>是否有印章。false为没有，true为有。</p>
     * @param string $Title <p>标题</p>
     * @param string $SerialNumber <p>编号</p>
     * @param string $RegistrationAuthority <p>登记机关</p>
     * @param boolean $Electronic <p>是否是电子营业执照。false为没有，true为有。</p>
     * @param array $BusinessCertificate <p>非营业执照的营业类证件识别结果，将以结构化形式呈现。</p>
     * @param string $Important <p>重要提示字段</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RegNum",$param) and $param["RegNum"] !== null) {
            $this->RegNum = $param["RegNum"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Capital",$param) and $param["Capital"] !== null) {
            $this->Capital = $param["Capital"];
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = $param["Person"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ComposingForm",$param) and $param["ComposingForm"] !== null) {
            $this->ComposingForm = $param["ComposingForm"];
        }

        if (array_key_exists("SetDate",$param) and $param["SetDate"] !== null) {
            $this->SetDate = $param["SetDate"];
        }

        if (array_key_exists("RecognizeWarnCode",$param) and $param["RecognizeWarnCode"] !== null) {
            $this->RecognizeWarnCode = $param["RecognizeWarnCode"];
        }

        if (array_key_exists("RecognizeWarnMsg",$param) and $param["RecognizeWarnMsg"] !== null) {
            $this->RecognizeWarnMsg = $param["RecognizeWarnMsg"];
        }

        if (array_key_exists("IsDuplication",$param) and $param["IsDuplication"] !== null) {
            $this->IsDuplication = $param["IsDuplication"];
        }

        if (array_key_exists("RegistrationDate",$param) and $param["RegistrationDate"] !== null) {
            $this->RegistrationDate = $param["RegistrationDate"];
        }

        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("NationalEmblem",$param) and $param["NationalEmblem"] !== null) {
            $this->NationalEmblem = $param["NationalEmblem"];
        }

        if (array_key_exists("QRCode",$param) and $param["QRCode"] !== null) {
            $this->QRCode = $param["QRCode"];
        }

        if (array_key_exists("Seal",$param) and $param["Seal"] !== null) {
            $this->Seal = $param["Seal"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("RegistrationAuthority",$param) and $param["RegistrationAuthority"] !== null) {
            $this->RegistrationAuthority = $param["RegistrationAuthority"];
        }

        if (array_key_exists("Electronic",$param) and $param["Electronic"] !== null) {
            $this->Electronic = $param["Electronic"];
        }

        if (array_key_exists("BusinessCertificate",$param) and $param["BusinessCertificate"] !== null) {
            $this->BusinessCertificate = [];
            foreach ($param["BusinessCertificate"] as $key => $value){
                $obj = new BusinessCertificateInfo();
                $obj->deserialize($value);
                array_push($this->BusinessCertificate, $obj);
            }
        }

        if (array_key_exists("Important",$param) and $param["Important"] !== null) {
            $this->Important = $param["Important"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
