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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点分组信息
 *
 * @method integer getId() 获取自增id，数据库中唯一
 * @method void setId(integer $Id) 设置自增id，数据库中唯一
 * @method string getGroupName() 获取节点分组名称
 * @method void setGroupName(string $GroupName) 设置节点分组名称
 * @method string getGroupId() 获取节点分组id
 * @method void setGroupId(string $GroupId) 设置节点分组id
 * @method integer getEdgeCount() 获取包含边缘节点数量
 * @method void setEdgeCount(integer $EdgeCount) 设置包含边缘节点数量
 */
class DescribeDLPEdgeNodeGroupsRspItem extends AbstractModel
{
    /**
     * @var integer 自增id，数据库中唯一
     */
    public $Id;

    /**
     * @var string 节点分组名称
     */
    public $GroupName;

    /**
     * @var string 节点分组id
     */
    public $GroupId;

    /**
     * @var integer 包含边缘节点数量
     */
    public $EdgeCount;

    /**
     * @param integer $Id 自增id，数据库中唯一
     * @param string $GroupName 节点分组名称
     * @param string $GroupId 节点分组id
     * @param integer $EdgeCount 包含边缘节点数量
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("EdgeCount",$param) and $param["EdgeCount"] !== null) {
            $this->EdgeCount = $param["EdgeCount"];
        }
    }
}
