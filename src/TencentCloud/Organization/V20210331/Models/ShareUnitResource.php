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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 共享单元资源
 *
 * @method string getResourceId() 获取共享资源ID。
 * @method void setResourceId(string $ResourceId) 设置共享资源ID。
 * @method string getType() 获取共享资源类型。
 * @method void setType(string $Type) 设置共享资源类型。
 * @method string getCreateTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductResourceId() 获取产品资源ID。
 * @method void setProductResourceId(string $ProductResourceId) 设置产品资源ID。
 * @method integer getSharedMemberNum() 获取共享单元成员数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSharedMemberNum(integer $SharedMemberNum) 设置共享单元成员数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSharedMemberUseNum() 获取使用中共享单元成员数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSharedMemberUseNum(integer $SharedMemberUseNum) 设置使用中共享单元成员数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShareManagerUin() 获取共享管理员OwnerUin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShareManagerUin(integer $ShareManagerUin) 设置共享管理员OwnerUin。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ShareUnitResource extends AbstractModel
{
    /**
     * @var string 共享资源ID。
     */
    public $ResourceId;

    /**
     * @var string 共享资源类型。
     */
    public $Type;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 产品资源ID。
     */
    public $ProductResourceId;

    /**
     * @var integer 共享单元成员数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SharedMemberNum;

    /**
     * @var integer 使用中共享单元成员数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SharedMemberUseNum;

    /**
     * @var integer 共享管理员OwnerUin。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShareManagerUin;

    /**
     * @param string $ResourceId 共享资源ID。
     * @param string $Type 共享资源类型。
     * @param string $CreateTime 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductResourceId 产品资源ID。
     * @param integer $SharedMemberNum 共享单元成员数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SharedMemberUseNum 使用中共享单元成员数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ShareManagerUin 共享管理员OwnerUin。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProductResourceId",$param) and $param["ProductResourceId"] !== null) {
            $this->ProductResourceId = $param["ProductResourceId"];
        }

        if (array_key_exists("SharedMemberNum",$param) and $param["SharedMemberNum"] !== null) {
            $this->SharedMemberNum = $param["SharedMemberNum"];
        }

        if (array_key_exists("SharedMemberUseNum",$param) and $param["SharedMemberUseNum"] !== null) {
            $this->SharedMemberUseNum = $param["SharedMemberUseNum"];
        }

        if (array_key_exists("ShareManagerUin",$param) and $param["ShareManagerUin"] !== null) {
            $this->ShareManagerUin = $param["ShareManagerUin"];
        }
    }
}
