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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserResourcesAuthorization返回参数结构体
 *
 * @method string getApplicationId() 获取应用的唯一ID。
 * @method void setApplicationId(string $ApplicationId) 设置应用的唯一ID。
 * @method array getApplicationAccounts() 获取应用账户。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationAccounts(array $ApplicationAccounts) 设置应用账户。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取授权用户的唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置授权用户的唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取授权的用户名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置授权的用户名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAuthorizationUserResourceList() 获取返回的资源列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizationUserResourceList(array $AuthorizationUserResourceList) 设置返回的资源列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserResourcesAuthorizationResponse extends AbstractModel
{
    /**
     * @var string 应用的唯一ID。
     */
    public $ApplicationId;

    /**
     * @var array 应用账户。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationAccounts;

    /**
     * @var string 授权用户的唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 授权的用户名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var array 返回的资源列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizationUserResourceList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ApplicationId 应用的唯一ID。
     * @param array $ApplicationAccounts 应用账户。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 授权用户的唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 授权的用户名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AuthorizationUserResourceList 返回的资源列表。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationAccounts",$param) and $param["ApplicationAccounts"] !== null) {
            $this->ApplicationAccounts = $param["ApplicationAccounts"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("AuthorizationUserResourceList",$param) and $param["AuthorizationUserResourceList"] !== null) {
            $this->AuthorizationUserResourceList = [];
            foreach ($param["AuthorizationUserResourceList"] as $key => $value){
                $obj = new AuthorizationUserResouceInfo();
                $obj->deserialize($value);
                array_push($this->AuthorizationUserResourceList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
