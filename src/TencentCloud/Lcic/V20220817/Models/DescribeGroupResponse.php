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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroup返回参数结构体
 *
 * @method string getGroupId() 获取群组ID
 * @method void setGroupId(string $GroupId) 设置群组ID
 * @method string getGroupName() 获取群组名称
 * @method void setGroupName(string $GroupName) 设置群组名称
 * @method string getTeacherId() 获取群主主讲人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTeacherId(string $TeacherId) 设置群主主讲人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupType() 获取群组类型
0-基础群组
1-组合群组，若为1时会返回子群组ID
 * @method void setGroupType(integer $GroupType) 设置群组类型
0-基础群组
1-组合群组，若为1时会返回子群组ID
 * @method array getSubGroupIds() 获取子群组ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubGroupIds(array $SubGroupIds) 设置子群组ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeGroupResponse extends AbstractModel
{
    /**
     * @var string 群组ID
     */
    public $GroupId;

    /**
     * @var string 群组名称
     */
    public $GroupName;

    /**
     * @var string 群主主讲人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TeacherId;

    /**
     * @var integer 群组类型
0-基础群组
1-组合群组，若为1时会返回子群组ID
     */
    public $GroupType;

    /**
     * @var array 子群组ID列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubGroupIds;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $GroupId 群组ID
     * @param string $GroupName 群组名称
     * @param string $TeacherId 群主主讲人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupType 群组类型
0-基础群组
1-组合群组，若为1时会返回子群组ID
     * @param array $SubGroupIds 子群组ID列表
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("SubGroupIds",$param) and $param["SubGroupIds"] !== null) {
            $this->SubGroupIds = $param["SubGroupIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
