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
 * PermitOCR返回参数结构体
 *
 * @method string getName() 获取<p>姓名</p>
 * @method void setName(string $Name) 设置<p>姓名</p>
 * @method string getEnglishName() 获取<p>英文姓名</p>
 * @method void setEnglishName(string $EnglishName) 设置<p>英文姓名</p>
 * @method string getNumber() 获取<p>证件号</p>
 * @method void setNumber(string $Number) 设置<p>证件号</p>
 * @method string getSex() 获取<p>性别</p>
 * @method void setSex(string $Sex) 设置<p>性别</p>
 * @method string getValidDate() 获取<p>有效期限</p>
 * @method void setValidDate(string $ValidDate) 设置<p>有效期限</p>
 * @method string getIssueAuthority() 获取<p>签发机关</p>
 * @method void setIssueAuthority(string $IssueAuthority) 设置<p>签发机关</p>
 * @method string getIssueAddress() 获取<p>签发地点</p>
 * @method void setIssueAddress(string $IssueAddress) 设置<p>签发地点</p>
 * @method string getBirthday() 获取<p>出生日期</p>
 * @method void setBirthday(string $Birthday) 设置<p>出生日期</p>
 * @method string getPortraitImage() 获取<p>头像照片的base64</p>
 * @method void setPortraitImage(string $PortraitImage) 设置<p>头像照片的base64</p>
 * @method string getType() 获取<p>返回类型</p>
 * @method void setType(string $Type) 设置<p>返回类型</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class PermitOCRResponse extends AbstractModel
{
    /**
     * @var string <p>姓名</p>
     */
    public $Name;

    /**
     * @var string <p>英文姓名</p>
     */
    public $EnglishName;

    /**
     * @var string <p>证件号</p>
     */
    public $Number;

    /**
     * @var string <p>性别</p>
     */
    public $Sex;

    /**
     * @var string <p>有效期限</p>
     */
    public $ValidDate;

    /**
     * @var string <p>签发机关</p>
     */
    public $IssueAuthority;

    /**
     * @var string <p>签发地点</p>
     */
    public $IssueAddress;

    /**
     * @var string <p>出生日期</p>
     */
    public $Birthday;

    /**
     * @var string <p>头像照片的base64</p>
     */
    public $PortraitImage;

    /**
     * @var string <p>返回类型</p>
     */
    public $Type;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name <p>姓名</p>
     * @param string $EnglishName <p>英文姓名</p>
     * @param string $Number <p>证件号</p>
     * @param string $Sex <p>性别</p>
     * @param string $ValidDate <p>有效期限</p>
     * @param string $IssueAuthority <p>签发机关</p>
     * @param string $IssueAddress <p>签发地点</p>
     * @param string $Birthday <p>出生日期</p>
     * @param string $PortraitImage <p>头像照片的base64</p>
     * @param string $Type <p>返回类型</p>
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

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("IssueAuthority",$param) and $param["IssueAuthority"] !== null) {
            $this->IssueAuthority = $param["IssueAuthority"];
        }

        if (array_key_exists("IssueAddress",$param) and $param["IssueAddress"] !== null) {
            $this->IssueAddress = $param["IssueAddress"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("PortraitImage",$param) and $param["PortraitImage"] !== null) {
            $this->PortraitImage = $param["PortraitImage"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
