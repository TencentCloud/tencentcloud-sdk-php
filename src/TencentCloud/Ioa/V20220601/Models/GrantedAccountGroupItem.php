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
 * 账号分组授权信息
 *
 * @method integer getAccountGroupId() 获取<p>账户组Id</p>
 * @method void setAccountGroupId(integer $AccountGroupId) 设置<p>账户组Id</p>
 * @method string getName() 获取<p>分组名称</p>
 * @method void setName(string $Name) 设置<p>分组名称</p>
 * @method array getIdPathArray() 获取<p>所属分组Id</p>
 * @method void setIdPathArray(array $IdPathArray) 设置<p>所属分组Id</p>
 * @method array getNamePathArray() 获取<p>所属分组NamePathArray</p>
 * @method void setNamePathArray(array $NamePathArray) 设置<p>所属分组NamePathArray</p>
 * @method integer getAccountCount() 获取<p>目录id</p>
 * @method void setAccountCount(integer $AccountCount) 设置<p>目录id</p>
 * @method integer getExpireTime() 获取<p>过期时间</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>过期时间</p>
 * @method integer getRelationId() 获取<p>关联id</p>
 * @method void setRelationId(integer $RelationId) 设置<p>关联id</p>
 */
class GrantedAccountGroupItem extends AbstractModel
{
    /**
     * @var integer <p>账户组Id</p>
     */
    public $AccountGroupId;

    /**
     * @var string <p>分组名称</p>
     */
    public $Name;

    /**
     * @var array <p>所属分组Id</p>
     */
    public $IdPathArray;

    /**
     * @var array <p>所属分组NamePathArray</p>
     */
    public $NamePathArray;

    /**
     * @var integer <p>目录id</p>
     */
    public $AccountCount;

    /**
     * @var integer <p>过期时间</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>关联id</p>
     */
    public $RelationId;

    /**
     * @param integer $AccountGroupId <p>账户组Id</p>
     * @param string $Name <p>分组名称</p>
     * @param array $IdPathArray <p>所属分组Id</p>
     * @param array $NamePathArray <p>所属分组NamePathArray</p>
     * @param integer $AccountCount <p>目录id</p>
     * @param integer $ExpireTime <p>过期时间</p>
     * @param integer $RelationId <p>关联id</p>
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
        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdPathArray",$param) and $param["IdPathArray"] !== null) {
            $this->IdPathArray = $param["IdPathArray"];
        }

        if (array_key_exists("NamePathArray",$param) and $param["NamePathArray"] !== null) {
            $this->NamePathArray = $param["NamePathArray"];
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
