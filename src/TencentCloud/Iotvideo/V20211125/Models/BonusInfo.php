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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运营活动资源包信息
 *
 * @method integer getBonusId() 获取资源包ID
 * @method void setBonusId(integer $BonusId) 设置资源包ID
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method string getPackageId() 获取资源包配置ID
 * @method void setPackageId(string $PackageId) 设置资源包配置ID
 * @method integer getTotal() 获取资源总数
 * @method void setTotal(integer $Total) 设置资源总数
 * @method integer getUsed() 获取资源消耗总数
 * @method void setUsed(integer $Used) 设置资源消耗总数
 * @method integer getExpireTime() 获取资源包过期时间
 * @method void setExpireTime(integer $ExpireTime) 设置资源包过期时间
 * @method integer getCreateTime() 获取资源包创建时间
 * @method void setCreateTime(integer $CreateTime) 设置资源包创建时间
 * @method integer getStatus() 获取资源包状态 0.未使用 1.使用中 2.已退款 3.已过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置资源包状态 0.未使用 1.使用中 2.已退款 3.已过期
注意：此字段可能返回 null，表示取不到有效值。
 */
class BonusInfo extends AbstractModel
{
    /**
     * @var integer 资源包ID
     */
    public $BonusId;

    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var string 资源包配置ID
     */
    public $PackageId;

    /**
     * @var integer 资源总数
     */
    public $Total;

    /**
     * @var integer 资源消耗总数
     */
    public $Used;

    /**
     * @var integer 资源包过期时间
     */
    public $ExpireTime;

    /**
     * @var integer 资源包创建时间
     */
    public $CreateTime;

    /**
     * @var integer 资源包状态 0.未使用 1.使用中 2.已退款 3.已过期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param integer $BonusId 资源包ID
     * @param string $UserId 用户ID
     * @param string $PackageId 资源包配置ID
     * @param integer $Total 资源总数
     * @param integer $Used 资源消耗总数
     * @param integer $ExpireTime 资源包过期时间
     * @param integer $CreateTime 资源包创建时间
     * @param integer $Status 资源包状态 0.未使用 1.使用中 2.已退款 3.已过期
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
        if (array_key_exists("BonusId",$param) and $param["BonusId"] !== null) {
            $this->BonusId = $param["BonusId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
