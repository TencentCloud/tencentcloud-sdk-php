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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecognizeForeignPermanentResidentIdCard返回参数结构体
 *
 * @method string getCnName() 获取中文姓名。
 * @method void setCnName(string $CnName) 设置中文姓名。
 * @method string getEnName() 获取英文名。
 * @method void setEnName(string $EnName) 设置英文名。
 * @method string getSex() 获取性别。
 * @method void setSex(string $Sex) 设置性别。
 * @method string getDateOfBirth() 获取出生日期。规范格式为 XXXX年XX月XX日。
 * @method void setDateOfBirth(string $DateOfBirth) 设置出生日期。规范格式为 XXXX年XX月XX日。
 * @method string getNationality() 获取国籍。
 * @method void setNationality(string $Nationality) 设置国籍。
 * @method string getPeriodOfValidity() 获取有效期限。
 * @method void setPeriodOfValidity(string $PeriodOfValidity) 设置有效期限。
 * @method string getNo() 获取证件号码。
 * @method void setNo(string $No) 设置证件号码。
 * @method string getPreviousNumber() 获取曾持证件号码。
 * @method void setPreviousNumber(string $PreviousNumber) 设置曾持证件号码。
 * @method string getIssuedAuthority() 获取签发机关。
 * @method void setIssuedAuthority(string $IssuedAuthority) 设置签发机关。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeForeignPermanentResidentIdCardResponse extends AbstractModel
{
    /**
     * @var string 中文姓名。
     */
    public $CnName;

    /**
     * @var string 英文名。
     */
    public $EnName;

    /**
     * @var string 性别。
     */
    public $Sex;

    /**
     * @var string 出生日期。规范格式为 XXXX年XX月XX日。
     */
    public $DateOfBirth;

    /**
     * @var string 国籍。
     */
    public $Nationality;

    /**
     * @var string 有效期限。
     */
    public $PeriodOfValidity;

    /**
     * @var string 证件号码。
     */
    public $No;

    /**
     * @var string 曾持证件号码。
     */
    public $PreviousNumber;

    /**
     * @var string 签发机关。
     */
    public $IssuedAuthority;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CnName 中文姓名。
     * @param string $EnName 英文名。
     * @param string $Sex 性别。
     * @param string $DateOfBirth 出生日期。规范格式为 XXXX年XX月XX日。
     * @param string $Nationality 国籍。
     * @param string $PeriodOfValidity 有效期限。
     * @param string $No 证件号码。
     * @param string $PreviousNumber 曾持证件号码。
     * @param string $IssuedAuthority 签发机关。
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
        if (array_key_exists("CnName",$param) and $param["CnName"] !== null) {
            $this->CnName = $param["CnName"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("DateOfBirth",$param) and $param["DateOfBirth"] !== null) {
            $this->DateOfBirth = $param["DateOfBirth"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("PeriodOfValidity",$param) and $param["PeriodOfValidity"] !== null) {
            $this->PeriodOfValidity = $param["PeriodOfValidity"];
        }

        if (array_key_exists("No",$param) and $param["No"] !== null) {
            $this->No = $param["No"];
        }

        if (array_key_exists("PreviousNumber",$param) and $param["PreviousNumber"] !== null) {
            $this->PreviousNumber = $param["PreviousNumber"];
        }

        if (array_key_exists("IssuedAuthority",$param) and $param["IssuedAuthority"] !== null) {
            $this->IssuedAuthority = $param["IssuedAuthority"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
