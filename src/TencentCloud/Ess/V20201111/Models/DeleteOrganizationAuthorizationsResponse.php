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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteOrganizationAuthorizations返回参数结构体
 *
 * @method array getDeleteOrganizationAuthorizationInfos() 获取清理的认证流的详细信息，其中包括企业名称，认证流唯一 Id 以及清理过程中产生的错误信息
 * @method void setDeleteOrganizationAuthorizationInfos(array $DeleteOrganizationAuthorizationInfos) 设置清理的认证流的详细信息，其中包括企业名称，认证流唯一 Id 以及清理过程中产生的错误信息
 * @method integer getStatus() 获取批量清理认证流返回的状态值
其中包括
- 1 全部成功
- 2 部分成功
- 3 全部失败
 * @method void setStatus(integer $Status) 设置批量清理认证流返回的状态值
其中包括
- 1 全部成功
- 2 部分成功
- 3 全部失败
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DeleteOrganizationAuthorizationsResponse extends AbstractModel
{
    /**
     * @var array 清理的认证流的详细信息，其中包括企业名称，认证流唯一 Id 以及清理过程中产生的错误信息
     */
    public $DeleteOrganizationAuthorizationInfos;

    /**
     * @var integer 批量清理认证流返回的状态值
其中包括
- 1 全部成功
- 2 部分成功
- 3 全部失败
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DeleteOrganizationAuthorizationInfos 清理的认证流的详细信息，其中包括企业名称，认证流唯一 Id 以及清理过程中产生的错误信息
     * @param integer $Status 批量清理认证流返回的状态值
其中包括
- 1 全部成功
- 2 部分成功
- 3 全部失败
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
        if (array_key_exists("DeleteOrganizationAuthorizationInfos",$param) and $param["DeleteOrganizationAuthorizationInfos"] !== null) {
            $this->DeleteOrganizationAuthorizationInfos = [];
            foreach ($param["DeleteOrganizationAuthorizationInfos"] as $key => $value){
                $obj = new DeleteOrganizationAuthorizationInfo();
                $obj->deserialize($value);
                array_push($this->DeleteOrganizationAuthorizationInfos, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
