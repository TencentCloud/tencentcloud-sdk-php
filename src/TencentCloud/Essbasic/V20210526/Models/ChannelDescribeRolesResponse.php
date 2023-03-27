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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChannelDescribeRoles返回参数结构体
 *
 * @method integer getOffset() 获取页面偏移量，最大2000
 * @method void setOffset(integer $Offset) 设置页面偏移量，最大2000
 * @method integer getLimit() 获取查询数量，最大200
 * @method void setLimit(integer $Limit) 设置查询数量，最大200
 * @method integer getTotalCount() 获取查询角色的总数量
 * @method void setTotalCount(integer $TotalCount) 设置查询角色的总数量
 * @method array getChannelRoles() 获取角色信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelRoles(array $ChannelRoles) 设置角色信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ChannelDescribeRolesResponse extends AbstractModel
{
    /**
     * @var integer 页面偏移量，最大2000
     */
    public $Offset;

    /**
     * @var integer 查询数量，最大200
     */
    public $Limit;

    /**
     * @var integer 查询角色的总数量
     */
    public $TotalCount;

    /**
     * @var array 角色信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelRoles;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Offset 页面偏移量，最大2000
     * @param integer $Limit 查询数量，最大200
     * @param integer $TotalCount 查询角色的总数量
     * @param array $ChannelRoles 角色信息
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ChannelRoles",$param) and $param["ChannelRoles"] !== null) {
            $this->ChannelRoles = [];
            foreach ($param["ChannelRoles"] as $key => $value){
                $obj = new ChannelRole();
                $obj->deserialize($value);
                array_push($this->ChannelRoles, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
