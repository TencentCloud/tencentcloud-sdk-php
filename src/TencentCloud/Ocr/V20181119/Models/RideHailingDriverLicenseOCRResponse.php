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
 * RideHailingDriverLicenseOCR返回参数结构体
 *
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getLicenseNumber() 获取证号，对应网约车驾驶证字段：证号/从业资格证号/驾驶员证号/身份证号
 * @method void setLicenseNumber(string $LicenseNumber) 设置证号，对应网约车驾驶证字段：证号/从业资格证号/驾驶员证号/身份证号
 * @method string getStartDate() 获取有效起始日期
 * @method void setStartDate(string $StartDate) 设置有效起始日期
 * @method string getEndDate() 获取有效期截止时间，对应网约车驾驶证字段：有效期至/营运期限止
 * @method void setEndDate(string $EndDate) 设置有效期截止时间，对应网约车驾驶证字段：有效期至/营运期限止
 * @method string getReleaseDate() 获取初始发证日期，对应网约车驾驶证字段：初始领证日期/发证日期
 * @method void setReleaseDate(string $ReleaseDate) 设置初始发证日期，对应网约车驾驶证字段：初始领证日期/发证日期
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RideHailingDriverLicenseOCRResponse extends AbstractModel
{
    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 证号，对应网约车驾驶证字段：证号/从业资格证号/驾驶员证号/身份证号
     */
    public $LicenseNumber;

    /**
     * @var string 有效起始日期
     */
    public $StartDate;

    /**
     * @var string 有效期截止时间，对应网约车驾驶证字段：有效期至/营运期限止
     */
    public $EndDate;

    /**
     * @var string 初始发证日期，对应网约车驾驶证字段：初始领证日期/发证日期
     */
    public $ReleaseDate;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 姓名
     * @param string $LicenseNumber 证号，对应网约车驾驶证字段：证号/从业资格证号/驾驶员证号/身份证号
     * @param string $StartDate 有效起始日期
     * @param string $EndDate 有效期截止时间，对应网约车驾驶证字段：有效期至/营运期限止
     * @param string $ReleaseDate 初始发证日期，对应网约车驾驶证字段：初始领证日期/发证日期
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LicenseNumber",$param) and $param["LicenseNumber"] !== null) {
            $this->LicenseNumber = $param["LicenseNumber"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("ReleaseDate",$param) and $param["ReleaseDate"] !== null) {
            $this->ReleaseDate = $param["ReleaseDate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
