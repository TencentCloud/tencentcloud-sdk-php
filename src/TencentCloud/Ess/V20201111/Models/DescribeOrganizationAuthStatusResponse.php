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
 * DescribeOrganizationAuthStatus返回参数结构体
 *
 * @method boolean getIsVerified() 获取企业是否已认证
 * @method void setIsVerified(boolean $IsVerified) 设置企业是否已认证
 * @method integer getAuthStatus() 获取企业认证状态 0-未认证 1-认证中 2-已认证
 * @method void setAuthStatus(integer $AuthStatus) 设置企业认证状态 0-未认证 1-认证中 2-已认证
 * @method array getAuthRecords() 获取企业认证信息
 * @method void setAuthRecords(array $AuthRecords) 设置企业认证信息
 * @method string getOrganizationId() 获取企业在腾讯电子签平台的唯一身份标识，为32位字符串。
可登录腾讯电子签控制台，在 "更多"->"企业设置"->"企业中心"- 中查看企业电子签账号。
p.s. 只有当前企业认证成功的时候返回
 * @method void setOrganizationId(string $OrganizationId) 设置企业在腾讯电子签平台的唯一身份标识，为32位字符串。
可登录腾讯电子签控制台，在 "更多"->"企业设置"->"企业中心"- 中查看企业电子签账号。
p.s. 只有当前企业认证成功的时候返回
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOrganizationAuthStatusResponse extends AbstractModel
{
    /**
     * @var boolean 企业是否已认证
     */
    public $IsVerified;

    /**
     * @var integer 企业认证状态 0-未认证 1-认证中 2-已认证
     */
    public $AuthStatus;

    /**
     * @var array 企业认证信息
     */
    public $AuthRecords;

    /**
     * @var string 企业在腾讯电子签平台的唯一身份标识，为32位字符串。
可登录腾讯电子签控制台，在 "更多"->"企业设置"->"企业中心"- 中查看企业电子签账号。
p.s. 只有当前企业认证成功的时候返回
     */
    public $OrganizationId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $IsVerified 企业是否已认证
     * @param integer $AuthStatus 企业认证状态 0-未认证 1-认证中 2-已认证
     * @param array $AuthRecords 企业认证信息
     * @param string $OrganizationId 企业在腾讯电子签平台的唯一身份标识，为32位字符串。
可登录腾讯电子签控制台，在 "更多"->"企业设置"->"企业中心"- 中查看企业电子签账号。
p.s. 只有当前企业认证成功的时候返回
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
        if (array_key_exists("IsVerified",$param) and $param["IsVerified"] !== null) {
            $this->IsVerified = $param["IsVerified"];
        }

        if (array_key_exists("AuthStatus",$param) and $param["AuthStatus"] !== null) {
            $this->AuthStatus = $param["AuthStatus"];
        }

        if (array_key_exists("AuthRecords",$param) and $param["AuthRecords"] !== null) {
            $this->AuthRecords = [];
            foreach ($param["AuthRecords"] as $key => $value){
                $obj = new AuthRecord();
                $obj->deserialize($value);
                array_push($this->AuthRecords, $obj);
            }
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
