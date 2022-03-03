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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 当前集群共用组件与集群对应关系
 *
 * @method integer getDependType() 获取依赖关系，0:被其他集群依赖，1:依赖其他集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependType(integer $DependType) 设置依赖关系，0:被其他集群依赖，1:依赖其他集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getService() 获取共用组件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setService(string $Service) 设置共用组件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取共用集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置共用集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterStatus() 获取共用集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterStatus(integer $ClusterStatus) 设置共用集群状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterExternalServiceInfo extends AbstractModel
{
    /**
     * @var integer 依赖关系，0:被其他集群依赖，1:依赖其他集群
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependType;

    /**
     * @var string 共用组件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Service;

    /**
     * @var string 共用集群
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var integer 共用集群状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterStatus;

    /**
     * @param integer $DependType 依赖关系，0:被其他集群依赖，1:依赖其他集群
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Service 共用组件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 共用集群
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterStatus 共用集群状态
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
        if (array_key_exists("DependType",$param) and $param["DependType"] !== null) {
            $this->DependType = $param["DependType"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }
    }
}
