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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主力地址池id与权重
 *
 * @method integer getPoolId() 获取地址池id
 * @method void setPoolId(integer $PoolId) 设置地址池id
 * @method integer getWeight() 获取权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置权重
注意：此字段可能返回 null，表示取不到有效值。
 */
class MainPoolWeight extends AbstractModel
{
    /**
     * @var integer 地址池id
     */
    public $PoolId;

    /**
     * @var integer 权重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @param integer $PoolId 地址池id
     * @param integer $Weight 权重
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
        if (array_key_exists("PoolId",$param) and $param["PoolId"] !== null) {
            $this->PoolId = $param["PoolId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
