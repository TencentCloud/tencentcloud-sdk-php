<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源信息
 *
 * @method string getDatasourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceClusterId() 获取数据源集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceClusterId(string $DatasourceClusterId) 设置数据源集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceUrn() 获取数据源urn
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceUrn(string $DatasourceUrn) 设置数据源urn
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceEnv() 获取数据源环境
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceEnv(string $DatasourceEnv) 设置数据源环境
注意：此字段可能返回 null，表示取不到有效值。
 */
class GovDatasourceInfo extends AbstractModel
{
    /**
     * @var string 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceName;

    /**
     * @var string 数据源集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceClusterId;

    /**
     * @var string 数据源urn
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceUrn;

    /**
     * @var string 数据源环境
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceEnv;

    /**
     * @param string $DatasourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceClusterId 数据源集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceUrn 数据源urn
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceEnv 数据源环境
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
        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatasourceClusterId",$param) and $param["DatasourceClusterId"] !== null) {
            $this->DatasourceClusterId = $param["DatasourceClusterId"];
        }

        if (array_key_exists("DatasourceUrn",$param) and $param["DatasourceUrn"] !== null) {
            $this->DatasourceUrn = $param["DatasourceUrn"];
        }

        if (array_key_exists("DatasourceEnv",$param) and $param["DatasourceEnv"] !== null) {
            $this->DatasourceEnv = $param["DatasourceEnv"];
        }
    }
}
