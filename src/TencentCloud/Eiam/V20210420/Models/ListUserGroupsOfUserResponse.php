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
 * ListUserGroupsOfUser返回参数结构体
 *
 * @method array getUserGroupIds() 获取用户所属的用户组ID列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroupIds(array $UserGroupIds) 设置用户所属的用户组ID列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取用户ID，是用户的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户ID，是用户的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserGroupInfoList() 获取用户所属的用户组信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroupInfoList(array $UserGroupInfoList) 设置用户所属的用户组信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取返回的用户组信息总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置返回的用户组信息总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ListUserGroupsOfUserResponse extends AbstractModel
{
    /**
     * @var array 用户所属的用户组ID列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroupIds;

    /**
     * @var string 用户ID，是用户的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var array 用户所属的用户组信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroupInfoList;

    /**
     * @var integer 返回的用户组信息总数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $UserGroupIds 用户所属的用户组ID列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 用户ID，是用户的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserGroupInfoList 用户所属的用户组信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 返回的用户组信息总数。
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
        if (array_key_exists("UserGroupIds",$param) and $param["UserGroupIds"] !== null) {
            $this->UserGroupIds = $param["UserGroupIds"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserGroupInfoList",$param) and $param["UserGroupInfoList"] !== null) {
            $this->UserGroupInfoList = [];
            foreach ($param["UserGroupInfoList"] as $key => $value){
                $obj = new UserGroupInfo();
                $obj->deserialize($value);
                array_push($this->UserGroupInfoList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
