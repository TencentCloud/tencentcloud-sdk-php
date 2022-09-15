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
 * 内网独占集群配置列表
 *
 * @method array getL4Clusters() 获取4层集群配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setL4Clusters(array $L4Clusters) 设置4层集群配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getL7Clusters() 获取7层集群配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setL7Clusters(array $L7Clusters) 设置7层集群配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExtensiveClusters extends AbstractModel
{
    /**
     * @var array 4层集群配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $L4Clusters;

    /**
     * @var array 7层集群配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $L7Clusters;

    /**
     * @param array $L4Clusters 4层集群配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $L7Clusters 7层集群配置
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
        if (array_key_exists("L4Clusters",$param) and $param["L4Clusters"] !== null) {
            $this->L4Clusters = [];
            foreach ($param["L4Clusters"] as $key => $value){
                $obj = new ExtensiveCluster();
                $obj->deserialize($value);
                array_push($this->L4Clusters, $obj);
            }
        }

        if (array_key_exists("L7Clusters",$param) and $param["L7Clusters"] !== null) {
            $this->L7Clusters = [];
            foreach ($param["L7Clusters"] as $key => $value){
                $obj = new ExtensiveCluster();
                $obj->deserialize($value);
                array_push($this->L7Clusters, $obj);
            }
        }
    }
}
