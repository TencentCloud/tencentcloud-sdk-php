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
 * @method integer getId() 获取<p>自增id，数据库中唯一</p>
 * @method void setId(integer $Id) 设置<p>自增id，数据库中唯一</p>
 * @method string getGroupName() 获取<p>节点分组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>节点分组名称</p>
 * @method string getGroupId() 获取<p>节点分组id</p>
 * @method void setGroupId(string $GroupId) 设置<p>节点分组id</p>
 * @method integer getEdgeCount() 获取<p>包含边缘节点数量</p>
 * @method void setEdgeCount(integer $EdgeCount) 设置<p>包含边缘节点数量</p>
 * @method array getGroupNameI18n() 获取<p>分组中英文</p>
 * @method void setGroupNameI18n(array $GroupNameI18n) 设置<p>分组中英文</p>
 */
class DescribeDLPEdgeNodeGroupsRspItem extends AbstractModel
{
    /**
     * @var integer <p>自增id，数据库中唯一</p>
     */
    public $Id;

    /**
     * @var string <p>节点分组名称</p>
     */
    public $GroupName;

    /**
     * @var string <p>节点分组id</p>
     */
    public $GroupId;

    /**
     * @var integer <p>包含边缘节点数量</p>
     */
    public $EdgeCount;

    /**
     * @var array <p>分组中英文</p>
     */
    public $GroupNameI18n;

    /**
     * @param integer $Id <p>自增id，数据库中唯一</p>
     * @param string $GroupName <p>节点分组名称</p>
     * @param string $GroupId <p>节点分组id</p>
     * @param integer $EdgeCount <p>包含边缘节点数量</p>
     * @param array $GroupNameI18n <p>分组中英文</p>
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

        if (array_key_exists("GroupNameI18n",$param) and $param["GroupNameI18n"] !== null) {
            $this->GroupNameI18n = [];
            foreach ($param["GroupNameI18n"] as $key => $value){
                $obj = new I18nString();
                $obj->deserialize($value);
                array_push($this->GroupNameI18n, $obj);
            }
        }
    }
}
