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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络集群pod返回的结构体
 *
 * @method string getPodName() 获取pod名字
 * @method void setPodName(string $PodName) 设置pod名字
 * @method string getNamespace() 获取pod空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置pod空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabels() 获取pod标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(string $Labels) 设置pod标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkloadKind() 获取pod类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkloadKind(string $WorkloadKind) 设置pod类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class NetworkClusterPodInfo extends AbstractModel
{
    /**
     * @var string pod名字
     */
    public $PodName;

    /**
     * @var string pod空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string pod标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var string pod类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkloadKind;

    /**
     * @param string $PodName pod名字
     * @param string $Namespace pod空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Labels pod标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkloadKind pod类型
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
        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("WorkloadKind",$param) and $param["WorkloadKind"] !== null) {
            $this->WorkloadKind = $param["WorkloadKind"];
        }
    }
}
