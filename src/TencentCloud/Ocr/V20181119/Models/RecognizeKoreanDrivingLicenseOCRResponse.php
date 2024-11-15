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
 * RecognizeKoreanDrivingLicenseOCR返回参数结构体
 *
 * @method string getID() 获取身份证号码
 * @method void setID(string $ID) 设置身份证号码
 * @method string getLicenseNumber() 获取驾照号码
 * @method void setLicenseNumber(string $LicenseNumber) 设置驾照号码
 * @method string getNumber() 获取居民登记号码
 * @method void setNumber(string $Number) 设置居民登记号码
 * @method string getType() 获取驾照类型
 * @method void setType(string $Type) 设置驾照类型
 * @method string getAddress() 获取地址
 * @method void setAddress(string $Address) 设置地址
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getAptitudeTesDate() 获取换证时间
 * @method void setAptitudeTesDate(string $AptitudeTesDate) 设置换证时间
 * @method string getDateOfIssue() 获取发证日期
 * @method void setDateOfIssue(string $DateOfIssue) 设置发证日期
 * @method string getPhoto() 获取人像截图Base64后的结果
 * @method void setPhoto(string $Photo) 设置人像截图Base64后的结果
 * @method string getSex() 获取性别
 * @method void setSex(string $Sex) 设置性别
 * @method string getBirthday() 获取生日，格式为dd/mm/yyyy
 * @method void setBirthday(string $Birthday) 设置生日，格式为dd/mm/yyyy
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeKoreanDrivingLicenseOCRResponse extends AbstractModel
{
    /**
     * @var string 身份证号码
     */
    public $ID;

    /**
     * @var string 驾照号码
     */
    public $LicenseNumber;

    /**
     * @var string 居民登记号码
     */
    public $Number;

    /**
     * @var string 驾照类型
     */
    public $Type;

    /**
     * @var string 地址
     */
    public $Address;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 换证时间
     */
    public $AptitudeTesDate;

    /**
     * @var string 发证日期
     */
    public $DateOfIssue;

    /**
     * @var string 人像截图Base64后的结果
     */
    public $Photo;

    /**
     * @var string 性别
     */
    public $Sex;

    /**
     * @var string 生日，格式为dd/mm/yyyy
     */
    public $Birthday;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ID 身份证号码
     * @param string $LicenseNumber 驾照号码
     * @param string $Number 居民登记号码
     * @param string $Type 驾照类型
     * @param string $Address 地址
     * @param string $Name 姓名
     * @param string $AptitudeTesDate 换证时间
     * @param string $DateOfIssue 发证日期
     * @param string $Photo 人像截图Base64后的结果
     * @param string $Sex 性别
     * @param string $Birthday 生日，格式为dd/mm/yyyy
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("LicenseNumber",$param) and $param["LicenseNumber"] !== null) {
            $this->LicenseNumber = $param["LicenseNumber"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AptitudeTesDate",$param) and $param["AptitudeTesDate"] !== null) {
            $this->AptitudeTesDate = $param["AptitudeTesDate"];
        }

        if (array_key_exists("DateOfIssue",$param) and $param["DateOfIssue"] !== null) {
            $this->DateOfIssue = $param["DateOfIssue"];
        }

        if (array_key_exists("Photo",$param) and $param["Photo"] !== null) {
            $this->Photo = $param["Photo"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
