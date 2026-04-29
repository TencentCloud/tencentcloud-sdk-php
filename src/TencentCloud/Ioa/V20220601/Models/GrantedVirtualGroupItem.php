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
 * @method integer getVirtualGroupId() 获取账户组Id
 * @method void setVirtualGroupId(integer $VirtualGroupId) 设置账户组Id
 * @method string getName() 获取分组名称
 * @method void setName(string $Name) 设置分组名称
 * @method string getDescription() 获取描述信息
 * @method void setDescription(string $Description) 设置描述信息
 * @method integer getAccountCount() 获取目录id
 * @method void setAccountCount(integer $AccountCount) 设置目录id
 * @method integer getExpireTime() 获取过期时间
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间
 * @method integer getRelationId() 获取关联id
 * @method void setRelationId(integer $RelationId) 设置关联id
 */
class GrantedVirtualGroupItem extends AbstractModel
{
    /**
     * @var integer 账户组Id
     */
    public $VirtualGroupId;

    /**
     * @var string 分组名称
     */
    public $Name;

    /**
     * @var string 描述信息
     */
    public $Description;

    /**
     * @var integer 目录id
     */
    public $AccountCount;

    /**
     * @var integer 过期时间
     */
    public $ExpireTime;

    /**
     * @var integer 关联id
     */
    public $RelationId;

    /**
     * @param integer $VirtualGroupId 账户组Id
     * @param string $Name 分组名称
     * @param string $Description 描述信息
     * @param integer $AccountCount 目录id
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
        if (array_key_exists("VirtualGroupId",$param) and $param["VirtualGroupId"] !== null) {
            $this->VirtualGroupId = $param["VirtualGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AccountCount",$param) and $param["AccountCount"] !== null) {
            $this->AccountCount = $param["AccountCount"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("RelationId",$param) and $param["RelationId"] !== null) {
            $this->RelationId = $param["RelationId"];
        }
    }
}
