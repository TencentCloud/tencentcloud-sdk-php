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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganizationMemberEmailBind返回参数结构体
 *
 * @method integer getBindId() 获取绑定ID。
 * @method void setBindId(integer $BindId) 设置绑定ID。
 * @method string getApplyTime() 获取申请时间。
 * @method void setApplyTime(string $ApplyTime) 设置申请时间。
 * @method string getEmail() 获取邮箱地址。
 * @method void setEmail(string $Email) 设置邮箱地址。
 * @method string getPhone() 获取安全手机号。
 * @method void setPhone(string $Phone) 设置安全手机号。
 * @method string getBindStatus() 获取绑定状态。    未绑定：Unbound，待激活：Valid，绑定成功：Success，绑定失败：Failed
 * @method void setBindStatus(string $BindStatus) 设置绑定状态。    未绑定：Unbound，待激活：Valid，绑定成功：Success，绑定失败：Failed
 * @method string getBindTime() 获取绑定时间。
 * @method void setBindTime(string $BindTime) 设置绑定时间。
 * @method string getDescription() 获取失败说明。
 * @method void setDescription(string $Description) 设置失败说明。
 * @method integer getPhoneBind() 获取安全手机绑定状态 。 未绑定：0，已绑定：1
 * @method void setPhoneBind(integer $PhoneBind) 设置安全手机绑定状态 。 未绑定：0，已绑定：1
 * @method string getCountryCode() 获取国际区号。
 * @method void setCountryCode(string $CountryCode) 设置国际区号。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOrganizationMemberEmailBindResponse extends AbstractModel
{
    /**
     * @var integer 绑定ID。
     */
    public $BindId;

    /**
     * @var string 申请时间。
     */
    public $ApplyTime;

    /**
     * @var string 邮箱地址。
     */
    public $Email;

    /**
     * @var string 安全手机号。
     */
    public $Phone;

    /**
     * @var string 绑定状态。    未绑定：Unbound，待激活：Valid，绑定成功：Success，绑定失败：Failed
     */
    public $BindStatus;

    /**
     * @var string 绑定时间。
     */
    public $BindTime;

    /**
     * @var string 失败说明。
     */
    public $Description;

    /**
     * @var integer 安全手机绑定状态 。 未绑定：0，已绑定：1
     */
    public $PhoneBind;

    /**
     * @var string 国际区号。
     */
    public $CountryCode;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BindId 绑定ID。
     * @param string $ApplyTime 申请时间。
     * @param string $Email 邮箱地址。
     * @param string $Phone 安全手机号。
     * @param string $BindStatus 绑定状态。    未绑定：Unbound，待激活：Valid，绑定成功：Success，绑定失败：Failed
     * @param string $BindTime 绑定时间。
     * @param string $Description 失败说明。
     * @param integer $PhoneBind 安全手机绑定状态 。 未绑定：0，已绑定：1
     * @param string $CountryCode 国际区号。
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
        if (array_key_exists("BindId",$param) and $param["BindId"] !== null) {
            $this->BindId = $param["BindId"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("BindTime",$param) and $param["BindTime"] !== null) {
            $this->BindTime = $param["BindTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PhoneBind",$param) and $param["PhoneBind"] !== null) {
            $this->PhoneBind = $param["PhoneBind"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
