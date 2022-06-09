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
 * RecognizePhilippinesVoteIDOCR返回参数结构体
 *
 * @method TextDetectionResult getHeadPortrait() 获取人像照片Base64后的结果
 * @method void setHeadPortrait(TextDetectionResult $HeadPortrait) 设置人像照片Base64后的结果
 * @method TextDetectionResult getVIN() 获取菲律宾VoteID的VIN
 * @method void setVIN(TextDetectionResult $VIN) 设置菲律宾VoteID的VIN
 * @method TextDetectionResult getFirstName() 获取姓名
 * @method void setFirstName(TextDetectionResult $FirstName) 设置姓名
 * @method TextDetectionResult getLastName() 获取姓氏
 * @method void setLastName(TextDetectionResult $LastName) 设置姓氏
 * @method TextDetectionResult getBirthday() 获取出生日期
 * @method void setBirthday(TextDetectionResult $Birthday) 设置出生日期
 * @method TextDetectionResult getCivilStatus() 获取婚姻状况
 * @method void setCivilStatus(TextDetectionResult $CivilStatus) 设置婚姻状况
 * @method TextDetectionResult getCitizenship() 获取国籍
 * @method void setCitizenship(TextDetectionResult $Citizenship) 设置国籍
 * @method TextDetectionResult getAddress() 获取地址
 * @method void setAddress(TextDetectionResult $Address) 设置地址
 * @method TextDetectionResult getPrecinctNo() 获取地区
 * @method void setPrecinctNo(TextDetectionResult $PrecinctNo) 设置地区
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizePhilippinesVoteIDOCRResponse extends AbstractModel
{
    /**
     * @var TextDetectionResult 人像照片Base64后的结果
     */
    public $HeadPortrait;

    /**
     * @var TextDetectionResult 菲律宾VoteID的VIN
     */
    public $VIN;

    /**
     * @var TextDetectionResult 姓名
     */
    public $FirstName;

    /**
     * @var TextDetectionResult 姓氏
     */
    public $LastName;

    /**
     * @var TextDetectionResult 出生日期
     */
    public $Birthday;

    /**
     * @var TextDetectionResult 婚姻状况
     */
    public $CivilStatus;

    /**
     * @var TextDetectionResult 国籍
     */
    public $Citizenship;

    /**
     * @var TextDetectionResult 地址
     */
    public $Address;

    /**
     * @var TextDetectionResult 地区
     */
    public $PrecinctNo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param TextDetectionResult $HeadPortrait 人像照片Base64后的结果
     * @param TextDetectionResult $VIN 菲律宾VoteID的VIN
     * @param TextDetectionResult $FirstName 姓名
     * @param TextDetectionResult $LastName 姓氏
     * @param TextDetectionResult $Birthday 出生日期
     * @param TextDetectionResult $CivilStatus 婚姻状况
     * @param TextDetectionResult $Citizenship 国籍
     * @param TextDetectionResult $Address 地址
     * @param TextDetectionResult $PrecinctNo 地区
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("HeadPortrait",$param) and $param["HeadPortrait"] !== null) {
            $this->HeadPortrait = new TextDetectionResult();
            $this->HeadPortrait->deserialize($param["HeadPortrait"]);
        }

        if (array_key_exists("VIN",$param) and $param["VIN"] !== null) {
            $this->VIN = new TextDetectionResult();
            $this->VIN->deserialize($param["VIN"]);
        }

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = new TextDetectionResult();
            $this->FirstName->deserialize($param["FirstName"]);
        }

        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = new TextDetectionResult();
            $this->LastName->deserialize($param["LastName"]);
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = new TextDetectionResult();
            $this->Birthday->deserialize($param["Birthday"]);
        }

        if (array_key_exists("CivilStatus",$param) and $param["CivilStatus"] !== null) {
            $this->CivilStatus = new TextDetectionResult();
            $this->CivilStatus->deserialize($param["CivilStatus"]);
        }

        if (array_key_exists("Citizenship",$param) and $param["Citizenship"] !== null) {
            $this->Citizenship = new TextDetectionResult();
            $this->Citizenship->deserialize($param["Citizenship"]);
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = new TextDetectionResult();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("PrecinctNo",$param) and $param["PrecinctNo"] !== null) {
            $this->PrecinctNo = new TextDetectionResult();
            $this->PrecinctNo->deserialize($param["PrecinctNo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
