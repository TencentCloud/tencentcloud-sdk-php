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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 压力来源配置
 *
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getVpcId() 获取VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubnetIds() 获取子网ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetIds(array $SubnetIds) 设置子网ID列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class VpcLoadDistribution extends AbstractModel
{
    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var array 子网ID列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetIds;

    /**
     * @param integer $RegionId 地域ID
     * @param string $Region 地域
     * @param string $VpcId VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubnetIds 子网ID列表
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }
    }
}
