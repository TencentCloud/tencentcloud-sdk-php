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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域列表
 *
 * @method string getRegion() 获取ap-guangzhou

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置ap-guangzhou

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionName() 获取华南地区(广州)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionName(string $RegionName) 设置华南地区(广州)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionState() 获取地域是否可用状态
AVAILABLE：可用

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionState(string $RegionState) 设置地域是否可用状态
AVAILABLE：可用

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScholarRocketSupportState() 获取学术加速是否支持：
NO_NEED_SUPPORT表示不需支持；NOT_SUPPORT_YET表示暂未支持；ALREADY_SUPPORT表示已经支持。对于ALREADY_SUPPORT的地域才需进一步调用DescribeScholarRocketStatus查看学术加速是开启还是关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScholarRocketSupportState(string $ScholarRocketSupportState) 设置学术加速是否支持：
NO_NEED_SUPPORT表示不需支持；NOT_SUPPORT_YET表示暂未支持；ALREADY_SUPPORT表示已经支持。对于ALREADY_SUPPORT的地域才需进一步调用DescribeScholarRocketStatus查看学术加速是开启还是关闭
注意：此字段可能返回 null，表示取不到有效值。
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string ap-guangzhou

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 华南地区(广州)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionName;

    /**
     * @var string 地域是否可用状态
AVAILABLE：可用

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionState;

    /**
     * @var string 学术加速是否支持：
NO_NEED_SUPPORT表示不需支持；NOT_SUPPORT_YET表示暂未支持；ALREADY_SUPPORT表示已经支持。对于ALREADY_SUPPORT的地域才需进一步调用DescribeScholarRocketStatus查看学术加速是开启还是关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScholarRocketSupportState;

    /**
     * @param string $Region ap-guangzhou

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionName 华南地区(广州)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionState 地域是否可用状态
AVAILABLE：可用

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScholarRocketSupportState 学术加速是否支持：
NO_NEED_SUPPORT表示不需支持；NOT_SUPPORT_YET表示暂未支持；ALREADY_SUPPORT表示已经支持。对于ALREADY_SUPPORT的地域才需进一步调用DescribeScholarRocketStatus查看学术加速是开启还是关闭
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionState",$param) and $param["RegionState"] !== null) {
            $this->RegionState = $param["RegionState"];
        }

        if (array_key_exists("ScholarRocketSupportState",$param) and $param["ScholarRocketSupportState"] !== null) {
            $this->ScholarRocketSupportState = $param["ScholarRocketSupportState"];
        }
    }
}
