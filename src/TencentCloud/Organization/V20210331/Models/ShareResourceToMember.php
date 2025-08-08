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
 * 与我共享的资源
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getType() 获取资源类型
 * @method void setType(string $Type) 设置资源类型
 * @method string getUnitId() 获取共享单元ID
 * @method void setUnitId(string $UnitId) 设置共享单元ID
 * @method string getUnitName() 获取共享单元名
 * @method void setUnitName(string $UnitName) 设置共享单元名
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getProductResourceId() 获取业务资源ID
 * @method void setProductResourceId(string $ProductResourceId) 设置业务资源ID
 * @method integer getShareManagerUin() 获取共享管理员uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShareManagerUin(integer $ShareManagerUin) 设置共享管理员uin
注意：此字段可能返回 null，表示取不到有效值。
 */
class ShareResourceToMember extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 资源类型
     */
    public $Type;

    /**
     * @var string 共享单元ID
     */
    public $UnitId;

    /**
     * @var string 共享单元名
     */
    public $UnitName;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 业务资源ID
     */
    public $ProductResourceId;

    /**
     * @var integer 共享管理员uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShareManagerUin;

    /**
     * @param string $ResourceId 资源ID
     * @param string $Type 资源类型
     * @param string $UnitId 共享单元ID
     * @param string $UnitName 共享单元名
     * @param string $CreateTime 创建时间
     * @param string $ProductResourceId 业务资源ID
     * @param integer $ShareManagerUin 共享管理员uin
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

        if (array_key_exists("UnitId",$param) and $param["UnitId"] !== null) {
            $this->UnitId = $param["UnitId"];
        }

        if (array_key_exists("UnitName",$param) and $param["UnitName"] !== null) {
            $this->UnitName = $param["UnitName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProductResourceId",$param) and $param["ProductResourceId"] !== null) {
            $this->ProductResourceId = $param["ProductResourceId"];
        }

        if (array_key_exists("ShareManagerUin",$param) and $param["ShareManagerUin"] !== null) {
            $this->ShareManagerUin = $param["ShareManagerUin"];
        }
    }
}
