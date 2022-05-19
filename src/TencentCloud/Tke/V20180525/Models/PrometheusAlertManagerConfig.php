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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警渠道使用自建alertmanager的配置
 *
 * @method string getUrl() 获取alertmanager url
 * @method void setUrl(string $Url) 设置alertmanager url
 * @method string getClusterType() 获取alertmanager部署所在集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterType(string $ClusterType) 设置alertmanager部署所在集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取alertmanager部署所在集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置alertmanager部署所在集群ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusAlertManagerConfig extends AbstractModel
{
    /**
     * @var string alertmanager url
     */
    public $Url;

    /**
     * @var string alertmanager部署所在集群类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterType;

    /**
     * @var string alertmanager部署所在集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @param string $Url alertmanager url
     * @param string $ClusterType alertmanager部署所在集群类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId alertmanager部署所在集群ID
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
