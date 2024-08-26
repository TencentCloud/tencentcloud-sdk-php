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
 * DescribeUserAutoSignStatus返回参数结构体
 *
 * @method boolean getIsOpen() 获取查询用户是否已开通自动签
 * @method void setIsOpen(boolean $IsOpen) 设置查询用户是否已开通自动签
 * @method integer getLicenseFrom() 获取自动签许可生效时间。当且仅当已通过许可开通自动签时有值。

值为unix时间戳,单位为秒。
 * @method void setLicenseFrom(integer $LicenseFrom) 设置自动签许可生效时间。当且仅当已通过许可开通自动签时有值。

值为unix时间戳,单位为秒。
 * @method integer getLicenseTo() 获取自动签许可到期时间。当且仅当已通过许可开通自动签时有值。

值为unix时间戳,单位为秒。
 * @method void setLicenseTo(integer $LicenseTo) 设置自动签许可到期时间。当且仅当已通过许可开通自动签时有值。

值为unix时间戳,单位为秒。
 * @method integer getLicenseType() 获取设置用户开通自动签时是否绑定个人自动签账号许可。<ul><li>**0**: 使用个人自动签账号许可进行开通，个人自动签账号许可有效期1年，注: `不可解绑释放更换他人`</li><li>**1**: 不绑定自动签账号许可开通，后续使用合同份额进行合同发起</li></ul>
 * @method void setLicenseType(integer $LicenseType) 设置设置用户开通自动签时是否绑定个人自动签账号许可。<ul><li>**0**: 使用个人自动签账号许可进行开通，个人自动签账号许可有效期1年，注: `不可解绑释放更换他人`</li><li>**1**: 不绑定自动签账号许可开通，后续使用合同份额进行合同发起</li></ul>
 * @method string getSealId() 获取用户开通自动签指定使用的印章，为空则未设置印章，需重新进入开通链接设置印章。
 * @method void setSealId(string $SealId) 设置用户开通自动签指定使用的印章，为空则未设置印章，需重新进入开通链接设置印章。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserAutoSignStatusResponse extends AbstractModel
{
    /**
     * @var boolean 查询用户是否已开通自动签
     */
    public $IsOpen;

    /**
     * @var integer 自动签许可生效时间。当且仅当已通过许可开通自动签时有值。

值为unix时间戳,单位为秒。
     */
    public $LicenseFrom;

    /**
     * @var integer 自动签许可到期时间。当且仅当已通过许可开通自动签时有值。

值为unix时间戳,单位为秒。
     */
    public $LicenseTo;

    /**
     * @var integer 设置用户开通自动签时是否绑定个人自动签账号许可。<ul><li>**0**: 使用个人自动签账号许可进行开通，个人自动签账号许可有效期1年，注: `不可解绑释放更换他人`</li><li>**1**: 不绑定自动签账号许可开通，后续使用合同份额进行合同发起</li></ul>
     */
    public $LicenseType;

    /**
     * @var string 用户开通自动签指定使用的印章，为空则未设置印章，需重新进入开通链接设置印章。
     */
    public $SealId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $IsOpen 查询用户是否已开通自动签
     * @param integer $LicenseFrom 自动签许可生效时间。当且仅当已通过许可开通自动签时有值。

值为unix时间戳,单位为秒。
     * @param integer $LicenseTo 自动签许可到期时间。当且仅当已通过许可开通自动签时有值。

值为unix时间戳,单位为秒。
     * @param integer $LicenseType 设置用户开通自动签时是否绑定个人自动签账号许可。<ul><li>**0**: 使用个人自动签账号许可进行开通，个人自动签账号许可有效期1年，注: `不可解绑释放更换他人`</li><li>**1**: 不绑定自动签账号许可开通，后续使用合同份额进行合同发起</li></ul>
     * @param string $SealId 用户开通自动签指定使用的印章，为空则未设置印章，需重新进入开通链接设置印章。
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
        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }

        if (array_key_exists("LicenseFrom",$param) and $param["LicenseFrom"] !== null) {
            $this->LicenseFrom = $param["LicenseFrom"];
        }

        if (array_key_exists("LicenseTo",$param) and $param["LicenseTo"] !== null) {
            $this->LicenseTo = $param["LicenseTo"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
