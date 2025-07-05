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
 * @method string getUnitId() 获取共享单元ID。
 * @method void setUnitId(string $UnitId) 设置共享单元ID。
 * @method string getName() 获取共享单元名称。
 * @method void setName(string $Name) 设置共享单元名称。
 * @method integer getUin() 获取共享单元管理员Uin。
 * @method void setUin(integer $Uin) 设置共享单元管理员Uin。
 * @method integer getOwnerUin() 获取共享单元管理员OwnerUin。
 * @method void setOwnerUin(integer $OwnerUin) 设置共享单元管理员OwnerUin。
 * @method string getArea() 获取共享单元地域。
 * @method void setArea(string $Area) 设置共享单元地域。
 * @method string getDescription() 获取描述。
 * @method void setDescription(string $Description) 设置描述。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method integer getShareResourceNum() 获取共享单元资源数。
 * @method void setShareResourceNum(integer $ShareResourceNum) 设置共享单元资源数。
 * @method integer getShareMemberNum() 获取共享单元成员数。
 * @method void setShareMemberNum(integer $ShareMemberNum) 设置共享单元成员数。
 * @method integer getShareScope() 获取共享范围。取值：1-仅允许集团组织内共享 2-允许共享给任意账号
 * @method void setShareScope(integer $ShareScope) 设置共享范围。取值：1-仅允许集团组织内共享 2-允许共享给任意账号
 */
class ManagerShareUnit extends AbstractModel
{
    /**
     * @var string 共享单元ID。
     */
    public $UnitId;

    /**
     * @var string 共享单元名称。
     */
    public $Name;

    /**
     * @var integer 共享单元管理员Uin。
     */
    public $Uin;

    /**
     * @var integer 共享单元管理员OwnerUin。
     */
    public $OwnerUin;

    /**
     * @var string 共享单元地域。
     */
    public $Area;

    /**
     * @var string 描述。
     */
    public $Description;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 共享单元资源数。
     */
    public $ShareResourceNum;

    /**
     * @var integer 共享单元成员数。
     */
    public $ShareMemberNum;

    /**
     * @var integer 共享范围。取值：1-仅允许集团组织内共享 2-允许共享给任意账号
     */
    public $ShareScope;

    /**
     * @param string $UnitId 共享单元ID。
     * @param string $Name 共享单元名称。
     * @param integer $Uin 共享单元管理员Uin。
     * @param integer $OwnerUin 共享单元管理员OwnerUin。
     * @param string $Area 共享单元地域。
     * @param string $Description 描述。
     * @param string $CreateTime 创建时间。
     * @param integer $ShareResourceNum 共享单元资源数。
     * @param integer $ShareMemberNum 共享单元成员数。
     * @param integer $ShareScope 共享范围。取值：1-仅允许集团组织内共享 2-允许共享给任意账号
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
    }
}
