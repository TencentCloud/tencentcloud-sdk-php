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
 * DescribeDrillPairsDeniedActions请求参数结构体
 *
 * @method string getDrillPairType() 获取要查询演练对的类型，枚举值：DISK（云硬盘）、INSTANCE（云服务器）、CFS（文件存储）
 * @method void setDrillPairType(string $DrillPairType) 设置要查询演练对的类型，枚举值：DISK（云硬盘）、INSTANCE（云服务器）、CFS（文件存储）
 * @method array getDrillPairIds() 获取演练对ID列表
 * @method void setDrillPairIds(array $DrillPairIds) 设置演练对ID列表
 */
class DescribeDrillPairsDeniedActionsRequest extends AbstractModel
{
    /**
     * @var string 要查询演练对的类型，枚举值：DISK（云硬盘）、INSTANCE（云服务器）、CFS（文件存储）
     */
    public $DrillPairType;

    /**
     * @var array 演练对ID列表
     */
    public $DrillPairIds;

    /**
     * @param string $DrillPairType 要查询演练对的类型，枚举值：DISK（云硬盘）、INSTANCE（云服务器）、CFS（文件存储）
     * @param array $DrillPairIds 演练对ID列表
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
    }
}
