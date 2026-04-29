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
 * GrantedAccountItem
 *
 * @method integer getAccountId() 获取账户Id
 * @method void setAccountId(integer $AccountId) 设置账户Id
 * @method string getUserId() 获取用户UserId
 * @method void setUserId(string $UserId) 设置用户UserId
 * @method string getUserName() 获取用户名称
 * @method void setUserName(string $UserName) 设置用户名称
 * @method integer getGroupId() 获取所属分组Id
 * @method void setGroupId(integer $GroupId) 设置所属分组Id
 * @method array getGroupIdPathArray() 获取分组路劲GroupIdPathArray
 * @method void setGroupIdPathArray(array $GroupIdPathArray) 设置分组路劲GroupIdPathArray
 * @method array getGroupNamePathArray() 获取所属分组NamePathArray
 * @method void setGroupNamePathArray(array $GroupNamePathArray) 设置所属分组NamePathArray
 * @method integer getMenuId() 获取目录id
 * @method void setMenuId(integer $MenuId) 设置目录id
 * @method integer getExpireTime() 获取过期时间
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间
 * @method integer getRelationId() 获取关联id
 * @method void setRelationId(integer $RelationId) 设置关联id
 */
class GrantedAccountItem extends AbstractModel
{
    /**
     * @var integer 账户Id
     */
    public $AccountId;

    /**
     * @var string 用户UserId
     */
    public $UserId;

    /**
     * @var string 用户名称
     */
    public $UserName;

    /**
     * @var integer 所属分组Id
     */
    public $GroupId;

    /**
     * @var array 分组路劲GroupIdPathArray
     */
    public $GroupIdPathArray;

    /**
     * @var array 所属分组NamePathArray
     */
    public $GroupNamePathArray;

    /**
     * @var integer 目录id
     */
    public $MenuId;

    /**
     * @var integer 过期时间
     */
    public $ExpireTime;

    /**
     * @var integer 关联id
     */
    public $RelationId;

    /**
     * @param integer $AccountId 账户Id
     * @param string $UserId 用户UserId
     * @param string $UserName 用户名称
     * @param integer $GroupId 所属分组Id
     * @param array $GroupIdPathArray 分组路劲GroupIdPathArray
     * @param array $GroupNamePathArray 所属分组NamePathArray
     * @param integer $MenuId 目录id
     * @param integer $ExpireTime 过期时间
     * @param integer $RelationId 关联id
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
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupIdPathArray",$param) and $param["GroupIdPathArray"] !== null) {
            $this->GroupIdPathArray = $param["GroupIdPathArray"];
        }

        if (array_key_exists("GroupNamePathArray",$param) and $param["GroupNamePathArray"] !== null) {
            $this->GroupNamePathArray = $param["GroupNamePathArray"];
        }

        if (array_key_exists("MenuId",$param) and $param["MenuId"] !== null) {
            $this->MenuId = $param["MenuId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("RelationId",$param) and $param["RelationId"] !== null) {
            $this->RelationId = $param["RelationId"];
        }
    }
}
