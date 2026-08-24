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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDrillPairs请求参数结构体
 *
 * @method string getDrillPairType() 获取要删除演练对的类型，其类型枚举跟复制对保持一致。枚举值：DISK / INSTANCE / CFS。
 * @method void setDrillPairType(string $DrillPairType) 设置要删除演练对的类型，其类型枚举跟复制对保持一致。枚举值：DISK / INSTANCE / CFS。
 * @method array getDrillPairIds() 获取要删除的演练对列表。长度范围 [1, 10]。
 * @method void setDrillPairIds(array $DrillPairIds) 设置要删除的演练对列表。长度范围 [1, 10]。
 * @method array getDrillGroupIds() 获取要删除的演练组id列表。
 * @method void setDrillGroupIds(array $DrillGroupIds) 设置要删除的演练组id列表。
 * @method boolean getDeleteDrillResource() 获取是否一并删除演练CFS/CVM/DISK演练资源。
 * @method void setDeleteDrillResource(boolean $DeleteDrillResource) 设置是否一并删除演练CFS/CVM/DISK演练资源。
 */
class DeleteDrillPairsRequest extends AbstractModel
{
    /**
     * @var string 要删除演练对的类型，其类型枚举跟复制对保持一致。枚举值：DISK / INSTANCE / CFS。
     */
    public $DrillPairType;

    /**
     * @var array 要删除的演练对列表。长度范围 [1, 10]。
     */
    public $DrillPairIds;

    /**
     * @var array 要删除的演练组id列表。
     */
    public $DrillGroupIds;

    /**
     * @var boolean 是否一并删除演练CFS/CVM/DISK演练资源。
     */
    public $DeleteDrillResource;

    /**
     * @param string $DrillPairType 要删除演练对的类型，其类型枚举跟复制对保持一致。枚举值：DISK / INSTANCE / CFS。
     * @param array $DrillPairIds 要删除的演练对列表。长度范围 [1, 10]。
     * @param array $DrillGroupIds 要删除的演练组id列表。
     * @param boolean $DeleteDrillResource 是否一并删除演练CFS/CVM/DISK演练资源。
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
        if (array_key_exists("DrillPairType",$param) and $param["DrillPairType"] !== null) {
            $this->DrillPairType = $param["DrillPairType"];
        }

        if (array_key_exists("DrillPairIds",$param) and $param["DrillPairIds"] !== null) {
            $this->DrillPairIds = $param["DrillPairIds"];
        }

        if (array_key_exists("DrillGroupIds",$param) and $param["DrillGroupIds"] !== null) {
            $this->DrillGroupIds = $param["DrillGroupIds"];
        }

        if (array_key_exists("DeleteDrillResource",$param) and $param["DeleteDrillResource"] !== null) {
            $this->DeleteDrillResource = $param["DeleteDrillResource"];
        }
    }
}
