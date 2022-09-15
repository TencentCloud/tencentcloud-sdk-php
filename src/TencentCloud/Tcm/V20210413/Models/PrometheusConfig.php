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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus 配置
 *
 * @method string getVpcId() 获取虚拟网络Id
 * @method void setVpcId(string $VpcId) 设置虚拟网络Id
 * @method string getSubnetId() 获取子网Id
 * @method void setSubnetId(string $SubnetId) 设置子网Id
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getInstanceId() 获取关联已存在实例Id，不填则默认创建
 * @method void setInstanceId(string $InstanceId) 设置关联已存在实例Id，不填则默认创建
 * @method CustomPromConfig getCustomProm() 获取第三方 Prometheus
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomProm(CustomPromConfig $CustomProm) 设置第三方 Prometheus
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusConfig extends AbstractModel
{
    /**
     * @var string 虚拟网络Id
     */
    public $VpcId;

    /**
     * @var string 子网Id
     */
    public $SubnetId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 关联已存在实例Id，不填则默认创建
     */
    public $InstanceId;

    /**
     * @var CustomPromConfig 第三方 Prometheus
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomProm;

    /**
     * @param string $VpcId 虚拟网络Id
     * @param string $SubnetId 子网Id
     * @param string $Region 地域
     * @param string $InstanceId 关联已存在实例Id，不填则默认创建
     * @param CustomPromConfig $CustomProm 第三方 Prometheus
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CustomProm",$param) and $param["CustomProm"] !== null) {
            $this->CustomProm = new CustomPromConfig();
            $this->CustomProm->deserialize($param["CustomProm"]);
        }
    }
}
