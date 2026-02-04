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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 我的共享单元列表详情
 *
 * @method string getUnitId() 获取<p>共享单元ID。</p>
 * @method void setUnitId(string $UnitId) 设置<p>共享单元ID。</p>
 * @method string getName() 获取<p>共享单元名称。</p>
 * @method void setName(string $Name) 设置<p>共享单元名称。</p>
 * @method integer getUin() 获取<p>共享单元管理员Uin。</p>
 * @method void setUin(integer $Uin) 设置<p>共享单元管理员Uin。</p>
 * @method integer getOwnerUin() 获取<p>共享单元管理员OwnerUin。</p>
 * @method void setOwnerUin(integer $OwnerUin) 设置<p>共享单元管理员OwnerUin。</p>
 * @method string getArea() 获取<p>共享单元地域。</p>
 * @method void setArea(string $Area) 设置<p>共享单元地域。</p>
 * @method string getDescription() 获取<p>描述。</p>
 * @method void setDescription(string $Description) 设置<p>描述。</p>
 * @method string getCreateTime() 获取<p>创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。</p>
 * @method integer getShareResourceNum() 获取<p>共享单元资源数。</p>
 * @method void setShareResourceNum(integer $ShareResourceNum) 设置<p>共享单元资源数。</p>
 * @method integer getShareMemberNum() 获取<p>共享单元成员数。</p>
 * @method void setShareMemberNum(integer $ShareMemberNum) 设置<p>共享单元成员数。</p>
 * @method integer getShareScope() 获取<p>共享范围。取值：1-仅允许集团组织内共享 2-允许共享给任意账号</p>
 * @method void setShareScope(integer $ShareScope) 设置<p>共享范围。取值：1-仅允许集团组织内共享 2-允许共享给任意账号</p>
 * @method integer getShareNodeNum() 获取<p>共享单元部门数。</p>
 * @method void setShareNodeNum(integer $ShareNodeNum) 设置<p>共享单元部门数。</p>
 */
class ManagerShareUnit extends AbstractModel
{
    /**
     * @var string <p>共享单元ID。</p>
     */
    public $UnitId;

    /**
     * @var string <p>共享单元名称。</p>
     */
    public $Name;

    /**
     * @var integer <p>共享单元管理员Uin。</p>
     */
    public $Uin;

    /**
     * @var integer <p>共享单元管理员OwnerUin。</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>共享单元地域。</p>
     */
    public $Area;

    /**
     * @var string <p>描述。</p>
     */
    public $Description;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>共享单元资源数。</p>
     */
    public $ShareResourceNum;

    /**
     * @var integer <p>共享单元成员数。</p>
     */
    public $ShareMemberNum;

    /**
     * @var integer <p>共享范围。取值：1-仅允许集团组织内共享 2-允许共享给任意账号</p>
     */
    public $ShareScope;

    /**
     * @var integer <p>共享单元部门数。</p>
     */
    public $ShareNodeNum;

    /**
     * @param string $UnitId <p>共享单元ID。</p>
     * @param string $Name <p>共享单元名称。</p>
     * @param integer $Uin <p>共享单元管理员Uin。</p>
     * @param integer $OwnerUin <p>共享单元管理员OwnerUin。</p>
     * @param string $Area <p>共享单元地域。</p>
     * @param string $Description <p>描述。</p>
     * @param string $CreateTime <p>创建时间。</p>
     * @param integer $ShareResourceNum <p>共享单元资源数。</p>
     * @param integer $ShareMemberNum <p>共享单元成员数。</p>
     * @param integer $ShareScope <p>共享范围。取值：1-仅允许集团组织内共享 2-允许共享给任意账号</p>
     * @param integer $ShareNodeNum <p>共享单元部门数。</p>
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
        if (array_key_exists("UnitId",$param) and $param["UnitId"] !== null) {
            $this->UnitId = $param["UnitId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ShareResourceNum",$param) and $param["ShareResourceNum"] !== null) {
            $this->ShareResourceNum = $param["ShareResourceNum"];
        }

        if (array_key_exists("ShareMemberNum",$param) and $param["ShareMemberNum"] !== null) {
            $this->ShareMemberNum = $param["ShareMemberNum"];
        }

        if (array_key_exists("ShareScope",$param) and $param["ShareScope"] !== null) {
            $this->ShareScope = $param["ShareScope"];
        }

        if (array_key_exists("ShareNodeNum",$param) and $param["ShareNodeNum"] !== null) {
            $this->ShareNodeNum = $param["ShareNodeNum"];
        }
    }
}
