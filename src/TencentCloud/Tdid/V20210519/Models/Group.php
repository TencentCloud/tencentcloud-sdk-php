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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 群组
 *
 * @method integer getGroupId() 获取群组ID
 * @method void setGroupId(integer $GroupId) 设置群组ID
 * @method integer getNodeCount() 获取节点数量
 * @method void setNodeCount(integer $NodeCount) 设置节点数量
 * @method integer getNodeCountOfAgency() 获取所属机构节点数量
 * @method void setNodeCountOfAgency(integer $NodeCountOfAgency) 设置所属机构节点数量
 * @method string getDescription() 获取群组描述
 * @method void setDescription(string $Description) 设置群组描述
 * @method integer getRoleType() 获取参与角色，盟主或非盟主
 * @method void setRoleType(integer $RoleType) 设置参与角色，盟主或非盟主
 * @method string getChainId() 获取链id
 * @method void setChainId(string $ChainId) 设置链id
 */
class Group extends AbstractModel
{
    /**
     * @var integer 群组ID
     */
    public $GroupId;

    /**
     * @var integer 节点数量
     */
    public $NodeCount;

    /**
     * @var integer 所属机构节点数量
     */
    public $NodeCountOfAgency;

    /**
     * @var string 群组描述
     */
    public $Description;

    /**
     * @var integer 参与角色，盟主或非盟主
     */
    public $RoleType;

    /**
     * @var string 链id
     */
    public $ChainId;

    /**
     * @param integer $GroupId 群组ID
     * @param integer $NodeCount 节点数量
     * @param integer $NodeCountOfAgency 所属机构节点数量
     * @param string $Description 群组描述
     * @param integer $RoleType 参与角色，盟主或非盟主
     * @param string $ChainId 链id
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

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("NodeCountOfAgency",$param) and $param["NodeCountOfAgency"] !== null) {
            $this->NodeCountOfAgency = $param["NodeCountOfAgency"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("ChainId",$param) and $param["ChainId"] !== null) {
            $this->ChainId = $param["ChainId"];
        }
    }
}
