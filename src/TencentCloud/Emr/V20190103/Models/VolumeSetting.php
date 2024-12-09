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
 * 数据卷目录设置
 *
 * @method string getVolumeType() 获取数据卷类型
<li>HOST_PATH表示支持本机路径</li>
<li>NEW_PVC表示新建PVC</li>
组件角色支持的数据卷类型可参考 EMR on TKE 集群部署说明：[部署说明](https://cloud.tencent.com/document/product/589/94254)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeType(string $VolumeType) 设置数据卷类型
<li>HOST_PATH表示支持本机路径</li>
<li>NEW_PVC表示新建PVC</li>
组件角色支持的数据卷类型可参考 EMR on TKE 集群部署说明：[部署说明](https://cloud.tencent.com/document/product/589/94254)
注意：此字段可能返回 null，表示取不到有效值。
 * @method HostPathVolumeSource getHostPath() 获取主机路径信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostPath(HostPathVolumeSource $HostPath) 设置主机路径信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class VolumeSetting extends AbstractModel
{
    /**
     * @var string 数据卷类型
<li>HOST_PATH表示支持本机路径</li>
<li>NEW_PVC表示新建PVC</li>
组件角色支持的数据卷类型可参考 EMR on TKE 集群部署说明：[部署说明](https://cloud.tencent.com/document/product/589/94254)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeType;

    /**
     * @var HostPathVolumeSource 主机路径信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostPath;

    /**
     * @param string $VolumeType 数据卷类型
<li>HOST_PATH表示支持本机路径</li>
<li>NEW_PVC表示新建PVC</li>
组件角色支持的数据卷类型可参考 EMR on TKE 集群部署说明：[部署说明](https://cloud.tencent.com/document/product/589/94254)
注意：此字段可能返回 null，表示取不到有效值。
     * @param HostPathVolumeSource $HostPath 主机路径信息
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
        if (array_key_exists("VolumeType",$param) and $param["VolumeType"] !== null) {
            $this->VolumeType = $param["VolumeType"];
        }

        if (array_key_exists("HostPath",$param) and $param["HostPath"] !== null) {
            $this->HostPath = new HostPathVolumeSource();
            $this->HostPath->deserialize($param["HostPath"]);
        }
    }
}
