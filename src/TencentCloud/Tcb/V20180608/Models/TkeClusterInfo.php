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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tke集群信息
 *
 * @method string getClusterId() 获取集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取集群的vpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置集群的vpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionClbSubnetId() 获取版本内网CLB所在子网Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionClbSubnetId(string $VersionClbSubnetId) 设置版本内网CLB所在子网Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class TkeClusterInfo extends AbstractModel
{
    /**
     * @var string 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 集群的vpcId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 版本内网CLB所在子网Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionClbSubnetId;

    /**
     * @param string $ClusterId 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 集群的vpcId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionClbSubnetId 版本内网CLB所在子网Id
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VersionClbSubnetId",$param) and $param["VersionClbSubnetId"] !== null) {
            $this->VersionClbSubnetId = $param["VersionClbSubnetId"];
        }
    }
}
