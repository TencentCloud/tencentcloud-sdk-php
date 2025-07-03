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
 * 集群间绑定使用信息
 *
 * @method string getClusterType() 获取集群类型
 * @method void setClusterType(string $ClusterType) 设置集群类型
 * @method array getClusterIdList() 获取集群id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterIdList(array $ClusterIdList) 设置集群id列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterRelationMeta extends AbstractModel
{
    /**
     * @var string 集群类型
     */
    public $ClusterType;

    /**
     * @var array 集群id列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterIdList;

    /**
     * @param string $ClusterType 集群类型
     * @param array $ClusterIdList 集群id列表
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
        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterIdList",$param) and $param["ClusterIdList"] !== null) {
            $this->ClusterIdList = $param["ClusterIdList"];
        }
    }
}
