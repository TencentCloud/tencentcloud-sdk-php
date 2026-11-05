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
 * QueryEnterpriseBasicInfo返回参数结构体
 *
 * @method integer getStatusCode() 获取<p>请求状态。<br>枚举值：<br>0：成功，计费；<br>1：系统异常，不计费；<br>2：查询无结果，不计费。</p>
 * @method void setStatusCode(integer $StatusCode) 设置<p>请求状态。<br>枚举值：<br>0：成功，计费；<br>1：系统异常，不计费；<br>2：查询无结果，不计费。</p>
 * @method string getCreditCode() 获取<p>统一社会信用代码。</p>
 * @method void setCreditCode(string $CreditCode) 设置<p>统一社会信用代码。</p>
 * @method string getEntName() 获取<p>企业名称。</p>
 * @method void setEntName(string $EntName) 设置<p>企业名称。</p>
 * @method string getType() 获取<p>主体类型。</p>
 * @method void setType(string $Type) 设置<p>主体类型。</p>
 * @method string getLrName() 获取<p>法人代表。</p>
 * @method void setLrName(string $LrName) 设置<p>法人代表。</p>
 * @method string getCapital() 获取<p>注册资本。</p>
 * @method void setCapital(string $Capital) 设置<p>注册资本。</p>
 * @method string getAddress() 获取<p>企业登记住所或注册地址。</p>
 * @method void setAddress(string $Address) 设置<p>企业登记住所或注册地址。</p>
 * @method string getBusiness() 获取<p>经营范围。</p>
 * @method void setBusiness(string $Business) 设置<p>经营范围。</p>
 * @method string getRegistrationAuthority() 获取<p>登记机关。</p>
 * @method void setRegistrationAuthority(string $RegistrationAuthority) 设置<p>登记机关。</p>
 * @method string getOperatingStatus() 获取<p>经营状态（标准化），枚举值：<br>1：开业（在营）；<br>2：迁出；<br>3：注销；<br>4：吊销；<br>5：撤销；<br>6：停业；<br>7：撤销登记；<br>0：其他；/：无法查询。</p>
 * @method void setOperatingStatus(string $OperatingStatus) 设置<p>经营状态（标准化），枚举值：<br>1：开业（在营）；<br>2：迁出；<br>3：注销；<br>4：吊销；<br>5：撤销；<br>6：停业；<br>7：撤销登记；<br>0：其他；/：无法查询。</p>
 * @method string getRawOperatingStatus() 获取<p>经营状态（原始值）。</p>
 * @method void setRawOperatingStatus(string $RawOperatingStatus) 设置<p>经营状态（原始值）。</p>
 * @method string getSetDate() 获取<p>成立日期。</p>
 * @method void setSetDate(string $SetDate) 设置<p>成立日期。</p>
 * @method string getOperatingPeriod() 获取<p>营业期限：一般包括营业开始时间和结束时间<br>参数格式：yyyy-MM-dd/yyyy-MM-dd<br>无固定期限的格式为：yyyy-MM-dd/<br>部分企业历史数据可能为空，将返回：/<br>无法查询，将返回：/</p>
 * @method void setOperatingPeriod(string $OperatingPeriod) 设置<p>营业期限：一般包括营业开始时间和结束时间<br>参数格式：yyyy-MM-dd/yyyy-MM-dd<br>无固定期限的格式为：yyyy-MM-dd/<br>部分企业历史数据可能为空，将返回：/<br>无法查询，将返回：/</p>
 * @method string getApprovalDate() 获取<p>核准日期。</p>
 * @method void setApprovalDate(string $ApprovalDate) 设置<p>核准日期。</p>
 * @method string getProvince() 获取<p>所在省份。</p>
 * @method void setProvince(string $Province) 设置<p>所在省份。</p>
 * @method string getProvinceCode() 获取<p>所在省份的行政区划代码。</p>
 * @method void setProvinceCode(string $ProvinceCode) 设置<p>所在省份的行政区划代码。</p>
 * @method string getCity() 获取<p>所在城市。</p>
 * @method void setCity(string $City) 设置<p>所在城市。</p>
 * @method string getCityCode() 获取<p>所在城市的行政区划代码。</p>
 * @method void setCityCode(string $CityCode) 设置<p>所在城市的行政区划代码。</p>
 * @method string getDistrict() 获取<p>所在区县。</p>
 * @method void setDistrict(string $District) 设置<p>所在区县。</p>
 * @method string getDistrictCode() 获取<p>所在区县的行政区划代码。</p>
 * @method void setDistrictCode(string $DistrictCode) 设置<p>所在区县的行政区划代码。</p>
 * @method string getCapitalCurrency() 获取<p>注册资本币种。</p>
 * @method void setCapitalCurrency(string $CapitalCurrency) 设置<p>注册资本币种。</p>
 * @method string getOrganizationCode() 获取<p>组织机构代码。</p>
 * @method void setOrganizationCode(string $OrganizationCode) 设置<p>组织机构代码。</p>
 * @method string getEnglishName() 获取<p>企业英文名称。</p>
 * @method void setEnglishName(string $EnglishName) 设置<p>企业英文名称。</p>
 * @method array getFormerNames() 获取<p>企业曾用名列表。</p>
 * @method void setFormerNames(array $FormerNames) 设置<p>企业曾用名列表。</p>
 * @method string getOriginalRegNum() 获取<p>原注册号。</p>
 * @method void setOriginalRegNum(string $OriginalRegNum) 设置<p>原注册号。</p>
 * @method string getPaidInCapital() 获取<p>实收资本。</p>
 * @method void setPaidInCapital(string $PaidInCapital) 设置<p>实收资本。</p>
 * @method string getRevokeDate() 获取<p>吊销日期。</p>
 * @method void setRevokeDate(string $RevokeDate) 设置<p>吊销日期。</p>
 * @method string getRevokeReason() 获取<p>吊销原因。</p>
 * @method void setRevokeReason(string $RevokeReason) 设置<p>吊销原因。</p>
 * @method string getCancellationDate() 获取<p>注销日期。</p>
 * @method void setCancellationDate(string $CancellationDate) 设置<p>注销日期。</p>
 * @method string getCancellationReason() 获取<p>注销原因。</p>
 * @method void setCancellationReason(string $CancellationReason) 设置<p>注销原因。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class QueryEnterpriseBasicInfoResponse extends AbstractModel
{
    /**
     * @var integer <p>请求状态。<br>枚举值：<br>0：成功，计费；<br>1：系统异常，不计费；<br>2：查询无结果，不计费。</p>
     */
    public $StatusCode;

    /**
     * @var string <p>统一社会信用代码。</p>
     */
    public $CreditCode;

    /**
     * @var string <p>企业名称。</p>
     */
    public $EntName;

    /**
     * @var string <p>主体类型。</p>
     */
    public $Type;

    /**
     * @var string <p>法人代表。</p>
     */
    public $LrName;

    /**
     * @var string <p>注册资本。</p>
     */
    public $Capital;

    /**
     * @var string <p>企业登记住所或注册地址。</p>
     */
    public $Address;

    /**
     * @var string <p>经营范围。</p>
     */
    public $Business;

    /**
     * @var string <p>登记机关。</p>
     */
    public $RegistrationAuthority;

    /**
     * @var string <p>经营状态（标准化），枚举值：<br>1：开业（在营）；<br>2：迁出；<br>3：注销；<br>4：吊销；<br>5：撤销；<br>6：停业；<br>7：撤销登记；<br>0：其他；/：无法查询。</p>
     */
    public $OperatingStatus;

    /**
     * @var string <p>经营状态（原始值）。</p>
     */
    public $RawOperatingStatus;

    /**
     * @var string <p>成立日期。</p>
     */
    public $SetDate;

    /**
     * @var string <p>营业期限：一般包括营业开始时间和结束时间<br>参数格式：yyyy-MM-dd/yyyy-MM-dd<br>无固定期限的格式为：yyyy-MM-dd/<br>部分企业历史数据可能为空，将返回：/<br>无法查询，将返回：/</p>
     */
    public $OperatingPeriod;

    /**
     * @var string <p>核准日期。</p>
     */
    public $ApprovalDate;

    /**
     * @var string <p>所在省份。</p>
     */
    public $Province;

    /**
     * @var string <p>所在省份的行政区划代码。</p>
     */
    public $ProvinceCode;

    /**
     * @var string <p>所在城市。</p>
     */
    public $City;

    /**
     * @var string <p>所在城市的行政区划代码。</p>
     */
    public $CityCode;

    /**
     * @var string <p>所在区县。</p>
     */
    public $District;

    /**
     * @var string <p>所在区县的行政区划代码。</p>
     */
    public $DistrictCode;

    /**
     * @var string <p>注册资本币种。</p>
     */
    public $CapitalCurrency;

    /**
     * @var string <p>组织机构代码。</p>
     */
    public $OrganizationCode;

    /**
     * @var string <p>企业英文名称。</p>
     */
    public $EnglishName;

    /**
     * @var array <p>企业曾用名列表。</p>
     */
    public $FormerNames;

    /**
     * @var string <p>原注册号。</p>
     */
    public $OriginalRegNum;

    /**
     * @var string <p>实收资本。</p>
     */
    public $PaidInCapital;

    /**
     * @var string <p>吊销日期。</p>
     */
    public $RevokeDate;

    /**
     * @var string <p>吊销原因。</p>
     */
    public $RevokeReason;

    /**
     * @var string <p>注销日期。</p>
     */
    public $CancellationDate;

    /**
     * @var string <p>注销原因。</p>
     */
    public $CancellationReason;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $StatusCode <p>请求状态。<br>枚举值：<br>0：成功，计费；<br>1：系统异常，不计费；<br>2：查询无结果，不计费。</p>
     * @param string $CreditCode <p>统一社会信用代码。</p>
     * @param string $EntName <p>企业名称。</p>
     * @param string $Type <p>主体类型。</p>
     * @param string $LrName <p>法人代表。</p>
     * @param string $Capital <p>注册资本。</p>
     * @param string $Address <p>企业登记住所或注册地址。</p>
     * @param string $Business <p>经营范围。</p>
     * @param string $RegistrationAuthority <p>登记机关。</p>
     * @param string $OperatingStatus <p>经营状态（标准化），枚举值：<br>1：开业（在营）；<br>2：迁出；<br>3：注销；<br>4：吊销；<br>5：撤销；<br>6：停业；<br>7：撤销登记；<br>0：其他；/：无法查询。</p>
     * @param string $RawOperatingStatus <p>经营状态（原始值）。</p>
     * @param string $SetDate <p>成立日期。</p>
     * @param string $OperatingPeriod <p>营业期限：一般包括营业开始时间和结束时间<br>参数格式：yyyy-MM-dd/yyyy-MM-dd<br>无固定期限的格式为：yyyy-MM-dd/<br>部分企业历史数据可能为空，将返回：/<br>无法查询，将返回：/</p>
     * @param string $ApprovalDate <p>核准日期。</p>
     * @param string $Province <p>所在省份。</p>
     * @param string $ProvinceCode <p>所在省份的行政区划代码。</p>
     * @param string $City <p>所在城市。</p>
     * @param string $CityCode <p>所在城市的行政区划代码。</p>
     * @param string $District <p>所在区县。</p>
     * @param string $DistrictCode <p>所在区县的行政区划代码。</p>
     * @param string $CapitalCurrency <p>注册资本币种。</p>
     * @param string $OrganizationCode <p>组织机构代码。</p>
     * @param string $EnglishName <p>企业英文名称。</p>
     * @param array $FormerNames <p>企业曾用名列表。</p>
     * @param string $OriginalRegNum <p>原注册号。</p>
     * @param string $PaidInCapital <p>实收资本。</p>
     * @param string $RevokeDate <p>吊销日期。</p>
     * @param string $RevokeReason <p>吊销原因。</p>
     * @param string $CancellationDate <p>注销日期。</p>
     * @param string $CancellationReason <p>注销原因。</p>
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
        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("CreditCode",$param) and $param["CreditCode"] !== null) {
            $this->CreditCode = $param["CreditCode"];
        }

        if (array_key_exists("EntName",$param) and $param["EntName"] !== null) {
            $this->EntName = $param["EntName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LrName",$param) and $param["LrName"] !== null) {
            $this->LrName = $param["LrName"];
        }

        if (array_key_exists("Capital",$param) and $param["Capital"] !== null) {
            $this->Capital = $param["Capital"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("RegistrationAuthority",$param) and $param["RegistrationAuthority"] !== null) {
            $this->RegistrationAuthority = $param["RegistrationAuthority"];
        }

        if (array_key_exists("OperatingStatus",$param) and $param["OperatingStatus"] !== null) {
            $this->OperatingStatus = $param["OperatingStatus"];
        }

        if (array_key_exists("RawOperatingStatus",$param) and $param["RawOperatingStatus"] !== null) {
            $this->RawOperatingStatus = $param["RawOperatingStatus"];
        }

        if (array_key_exists("SetDate",$param) and $param["SetDate"] !== null) {
            $this->SetDate = $param["SetDate"];
        }

        if (array_key_exists("OperatingPeriod",$param) and $param["OperatingPeriod"] !== null) {
            $this->OperatingPeriod = $param["OperatingPeriod"];
        }

        if (array_key_exists("ApprovalDate",$param) and $param["ApprovalDate"] !== null) {
            $this->ApprovalDate = $param["ApprovalDate"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("ProvinceCode",$param) and $param["ProvinceCode"] !== null) {
            $this->ProvinceCode = $param["ProvinceCode"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("CityCode",$param) and $param["CityCode"] !== null) {
            $this->CityCode = $param["CityCode"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }

        if (array_key_exists("DistrictCode",$param) and $param["DistrictCode"] !== null) {
            $this->DistrictCode = $param["DistrictCode"];
        }

        if (array_key_exists("CapitalCurrency",$param) and $param["CapitalCurrency"] !== null) {
            $this->CapitalCurrency = $param["CapitalCurrency"];
        }

        if (array_key_exists("OrganizationCode",$param) and $param["OrganizationCode"] !== null) {
            $this->OrganizationCode = $param["OrganizationCode"];
        }

        if (array_key_exists("EnglishName",$param) and $param["EnglishName"] !== null) {
            $this->EnglishName = $param["EnglishName"];
        }

        if (array_key_exists("FormerNames",$param) and $param["FormerNames"] !== null) {
            $this->FormerNames = $param["FormerNames"];
        }

        if (array_key_exists("OriginalRegNum",$param) and $param["OriginalRegNum"] !== null) {
            $this->OriginalRegNum = $param["OriginalRegNum"];
        }

        if (array_key_exists("PaidInCapital",$param) and $param["PaidInCapital"] !== null) {
            $this->PaidInCapital = $param["PaidInCapital"];
        }

        if (array_key_exists("RevokeDate",$param) and $param["RevokeDate"] !== null) {
            $this->RevokeDate = $param["RevokeDate"];
        }

        if (array_key_exists("RevokeReason",$param) and $param["RevokeReason"] !== null) {
            $this->RevokeReason = $param["RevokeReason"];
        }

        if (array_key_exists("CancellationDate",$param) and $param["CancellationDate"] !== null) {
            $this->CancellationDate = $param["CancellationDate"];
        }

        if (array_key_exists("CancellationReason",$param) and $param["CancellationReason"] !== null) {
            $this->CancellationReason = $param["CancellationReason"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
