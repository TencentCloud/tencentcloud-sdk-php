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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeCall设备信息
 *
 * @method string getPkgId() 获取包ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgId(string $PkgId) 设置包ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPkgType() 获取包类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgType(integer $PkgType) 设置包类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLicenseUsedNum() 获取已使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicenseUsedNum(integer $LicenseUsedNum) 设置已使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLicenseTotalNum() 获取总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicenseTotalNum(integer $LicenseTotalNum) 设置总量
注意：此字段可能返回 null，表示取不到有效值。
 */
class TWeCallPkgInfo extends AbstractModel
{
    /**
     * @var string 包ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgId;

    /**
     * @var integer 包类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgType;

    /**
     * @var integer 生效时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 已使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LicenseUsedNum;

    /**
     * @var integer 总量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LicenseTotalNum;

    /**
     * @param string $PkgId 包ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PkgType 包类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 生效时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LicenseUsedNum 已使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LicenseTotalNum 总量
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
        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgType",$param) and $param["PkgType"] !== null) {
            $this->PkgType = $param["PkgType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LicenseUsedNum",$param) and $param["LicenseUsedNum"] !== null) {
            $this->LicenseUsedNum = $param["LicenseUsedNum"];
        }

        if (array_key_exists("LicenseTotalNum",$param) and $param["LicenseTotalNum"] !== null) {
            $this->LicenseTotalNum = $param["LicenseTotalNum"];
        }
    }
}
