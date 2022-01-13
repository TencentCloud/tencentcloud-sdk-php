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
 * DescribeUserGroupResourcesAuthorization返回参数结构体
 *
 * @method string getApplicationId() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserGroupId() 获取用户组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroupId(string $UserGroupId) 设置用户组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserGroupName() 获取用户组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroupName(string $UserGroupName) 设置用户组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAuthorizationUserGroupResourceList() 获取资源列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizationUserGroupResourceList(array $AuthorizationUserGroupResourceList) 设置资源列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserGroupResourcesAuthorizationResponse extends AbstractModel
{
    /**
     * @var string 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var string 用户组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroupId;

    /**
     * @var string 用户组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroupName;

    /**
     * @var array 资源列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizationUserGroupResourceList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ApplicationId 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserGroupId 用户组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserGroupName 用户组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AuthorizationUserGroupResourceList 资源列表
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

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("UserGroupName",$param) and $param["UserGroupName"] !== null) {
            $this->UserGroupName = $param["UserGroupName"];
        }

        if (array_key_exists("AuthorizationUserGroupResourceList",$param) and $param["AuthorizationUserGroupResourceList"] !== null) {
            $this->AuthorizationUserGroupResourceList = [];
            foreach ($param["AuthorizationUserGroupResourceList"] as $key => $value){
                $obj = new AuthorizationResourceEntityInfo();
                $obj->deserialize($value);
                array_push($this->AuthorizationUserGroupResourceList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
