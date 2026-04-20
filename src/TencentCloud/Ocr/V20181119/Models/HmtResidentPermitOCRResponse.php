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
 * HmtResidentPermitOCR返回参数结构体
 *
 * @method string getName() 获取<p>证件姓名</p>
 * @method void setName(string $Name) 设置<p>证件姓名</p>
 * @method string getSex() 获取<p>性别</p>
 * @method void setSex(string $Sex) 设置<p>性别</p>
 * @method string getBirth() 获取<p>出生日期</p>
 * @method void setBirth(string $Birth) 设置<p>出生日期</p>
 * @method string getAddress() 获取<p>地址</p>
 * @method void setAddress(string $Address) 设置<p>地址</p>
 * @method string getIdCardNo() 获取<p>身份证号</p>
 * @method void setIdCardNo(string $IdCardNo) 设置<p>身份证号</p>
 * @method integer getCardType() 获取<p>0-正面<br>1-反面</p>
 * @method void setCardType(integer $CardType) 设置<p>0-正面<br>1-反面</p>
 * @method string getValidDate() 获取<p>证件有效期限</p>
 * @method void setValidDate(string $ValidDate) 设置<p>证件有效期限</p>
 * @method string getAuthority() 获取<p>签发机关</p>
 * @method void setAuthority(string $Authority) 设置<p>签发机关</p>
 * @method string getVisaNum() 获取<p>签发次数</p>
 * @method void setVisaNum(string $VisaNum) 设置<p>签发次数</p>
 * @method string getPassNo() 获取<p>通行证号码</p>
 * @method void setPassNo(string $PassNo) 设置<p>通行证号码</p>
 * @method PortraitImageInfo getPortraitImageInfo() 获取<p>头像和坐标信息</p>
 * @method void setPortraitImageInfo(PortraitImageInfo $PortraitImageInfo) 设置<p>头像和坐标信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class HmtResidentPermitOCRResponse extends AbstractModel
{
    /**
     * @var string <p>证件姓名</p>
     */
    public $Name;

    /**
     * @var string <p>性别</p>
     */
    public $Sex;

    /**
     * @var string <p>出生日期</p>
     */
    public $Birth;

    /**
     * @var string <p>地址</p>
     */
    public $Address;

    /**
     * @var string <p>身份证号</p>
     */
    public $IdCardNo;

    /**
     * @var integer <p>0-正面<br>1-反面</p>
     */
    public $CardType;

    /**
     * @var string <p>证件有效期限</p>
     */
    public $ValidDate;

    /**
     * @var string <p>签发机关</p>
     */
    public $Authority;

    /**
     * @var string <p>签发次数</p>
     */
    public $VisaNum;

    /**
     * @var string <p>通行证号码</p>
     */
    public $PassNo;

    /**
     * @var PortraitImageInfo <p>头像和坐标信息</p>
     */
    public $PortraitImageInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name <p>证件姓名</p>
     * @param string $Sex <p>性别</p>
     * @param string $Birth <p>出生日期</p>
     * @param string $Address <p>地址</p>
     * @param string $IdCardNo <p>身份证号</p>
     * @param integer $CardType <p>0-正面<br>1-反面</p>
     * @param string $ValidDate <p>证件有效期限</p>
     * @param string $Authority <p>签发机关</p>
     * @param string $VisaNum <p>签发次数</p>
     * @param string $PassNo <p>通行证号码</p>
     * @param PortraitImageInfo $PortraitImageInfo <p>头像和坐标信息</p>
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

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Birth",$param) and $param["Birth"] !== null) {
            $this->Birth = $param["Birth"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("IdCardNo",$param) and $param["IdCardNo"] !== null) {
            $this->IdCardNo = $param["IdCardNo"];
        }

        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            $this->CardType = $param["CardType"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("Authority",$param) and $param["Authority"] !== null) {
            $this->Authority = $param["Authority"];
        }

        if (array_key_exists("VisaNum",$param) and $param["VisaNum"] !== null) {
            $this->VisaNum = $param["VisaNum"];
        }

        if (array_key_exists("PassNo",$param) and $param["PassNo"] !== null) {
            $this->PassNo = $param["PassNo"];
        }

        if (array_key_exists("PortraitImageInfo",$param) and $param["PortraitImageInfo"] !== null) {
            $this->PortraitImageInfo = new PortraitImageInfo();
            $this->PortraitImageInfo->deserialize($param["PortraitImageInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
