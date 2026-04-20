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
 * MainlandPermitOCR返回参数结构体
 *
 * @method string getName() 获取<p>中文姓名</p>
 * @method void setName(string $Name) 设置<p>中文姓名</p>
 * @method string getEnglishName() 获取<p>英文姓名</p>
 * @method void setEnglishName(string $EnglishName) 设置<p>英文姓名</p>
 * @method string getSex() 获取<p>性别</p>
 * @method void setSex(string $Sex) 设置<p>性别</p>
 * @method string getBirthday() 获取<p>出生日期</p>
 * @method void setBirthday(string $Birthday) 设置<p>出生日期</p>
 * @method string getIssueAuthority() 获取<p>签发机关</p>
 * @method void setIssueAuthority(string $IssueAuthority) 设置<p>签发机关</p>
 * @method string getValidDate() 获取<p>有效期限</p>
 * @method void setValidDate(string $ValidDate) 设置<p>有效期限</p>
 * @method string getNumber() 获取<p>证件号</p>
 * @method void setNumber(string $Number) 设置<p>证件号</p>
 * @method string getIssueAddress() 获取<p>签发地点</p>
 * @method void setIssueAddress(string $IssueAddress) 设置<p>签发地点</p>
 * @method string getIssueNumber() 获取<p>签发次数</p>
 * @method void setIssueNumber(string $IssueNumber) 设置<p>签发次数</p>
 * @method string getType() 获取<p>证件类别， 如：台湾居民来往大陆通行证、港澳居民来往内地通行证、往来港澳通行证。</p>
 * @method void setType(string $Type) 设置<p>证件类别， 如：台湾居民来往大陆通行证、港澳居民来往内地通行证、往来港澳通行证。</p>
 * @method string getProfile() 获取<p>RetProfile为True时返回头像字段， Base64编码</p>
 * @method void setProfile(string $Profile) 设置<p>RetProfile为True时返回头像字段， Base64编码</p>
 * @method string getNationality() 获取<p>国籍</p>
 * @method void setNationality(string $Nationality) 设置<p>国籍</p>
 * @method MainlandTravelPermitBackInfos getMainlandTravelPermitBackInfos() 获取<p>背面字段信息</p>
 * @method void setMainlandTravelPermitBackInfos(MainlandTravelPermitBackInfos $MainlandTravelPermitBackInfos) 设置<p>背面字段信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class MainlandPermitOCRResponse extends AbstractModel
{
    /**
     * @var string <p>中文姓名</p>
     */
    public $Name;

    /**
     * @var string <p>英文姓名</p>
     */
    public $EnglishName;

    /**
     * @var string <p>性别</p>
     */
    public $Sex;

    /**
     * @var string <p>出生日期</p>
     */
    public $Birthday;

    /**
     * @var string <p>签发机关</p>
     */
    public $IssueAuthority;

    /**
     * @var string <p>有效期限</p>
     */
    public $ValidDate;

    /**
     * @var string <p>证件号</p>
     */
    public $Number;

    /**
     * @var string <p>签发地点</p>
     */
    public $IssueAddress;

    /**
     * @var string <p>签发次数</p>
     */
    public $IssueNumber;

    /**
     * @var string <p>证件类别， 如：台湾居民来往大陆通行证、港澳居民来往内地通行证、往来港澳通行证。</p>
     */
    public $Type;

    /**
     * @var string <p>RetProfile为True时返回头像字段， Base64编码</p>
     */
    public $Profile;

    /**
     * @var string <p>国籍</p>
     */
    public $Nationality;

    /**
     * @var MainlandTravelPermitBackInfos <p>背面字段信息</p>
     */
    public $MainlandTravelPermitBackInfos;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name <p>中文姓名</p>
     * @param string $EnglishName <p>英文姓名</p>
     * @param string $Sex <p>性别</p>
     * @param string $Birthday <p>出生日期</p>
     * @param string $IssueAuthority <p>签发机关</p>
     * @param string $ValidDate <p>有效期限</p>
     * @param string $Number <p>证件号</p>
     * @param string $IssueAddress <p>签发地点</p>
     * @param string $IssueNumber <p>签发次数</p>
     * @param string $Type <p>证件类别， 如：台湾居民来往大陆通行证、港澳居民来往内地通行证、往来港澳通行证。</p>
     * @param string $Profile <p>RetProfile为True时返回头像字段， Base64编码</p>
     * @param string $Nationality <p>国籍</p>
     * @param MainlandTravelPermitBackInfos $MainlandTravelPermitBackInfos <p>背面字段信息</p>
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

        if (array_key_exists("EnglishName",$param) and $param["EnglishName"] !== null) {
            $this->EnglishName = $param["EnglishName"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("IssueAuthority",$param) and $param["IssueAuthority"] !== null) {
            $this->IssueAuthority = $param["IssueAuthority"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("IssueAddress",$param) and $param["IssueAddress"] !== null) {
            $this->IssueAddress = $param["IssueAddress"];
        }

        if (array_key_exists("IssueNumber",$param) and $param["IssueNumber"] !== null) {
            $this->IssueNumber = $param["IssueNumber"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("MainlandTravelPermitBackInfos",$param) and $param["MainlandTravelPermitBackInfos"] !== null) {
            $this->MainlandTravelPermitBackInfos = new MainlandTravelPermitBackInfos();
            $this->MainlandTravelPermitBackInfos->deserialize($param["MainlandTravelPermitBackInfos"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
