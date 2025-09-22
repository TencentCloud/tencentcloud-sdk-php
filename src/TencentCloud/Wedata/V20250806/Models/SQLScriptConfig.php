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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据探索脚本配置
 *
 * @method string getDatasourceId() 获取数据源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceEnv() 获取数据源环境
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceEnv(string $DatasourceEnv) 设置数据源环境
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComputeResource() 获取计算资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComputeResource(string $ComputeResource) 设置计算资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupId() 获取执行资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置执行资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParams() 获取高级运行参数,变量替换，map-json String,String
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置高级运行参数,变量替换，map-json String,String
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdvanceConfig() 获取高级设置，执行配置参数，map-json String,String. 采用Base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvanceConfig(string $AdvanceConfig) 设置高级设置，执行配置参数，map-json String,String. 采用Base64编码
注意：此字段可能返回 null，表示取不到有效值。
 */
class SQLScriptConfig extends AbstractModel
{
    /**
     * @var string 数据源Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据源环境
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceEnv;

    /**
     * @var string 计算资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComputeResource;

    /**
     * @var string 执行资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupId;

    /**
     * @var string 高级运行参数,变量替换，map-json String,String
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var string 高级设置，执行配置参数，map-json String,String. 采用Base64编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvanceConfig;

    /**
     * @param string $DatasourceId 数据源Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceEnv 数据源环境
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComputeResource 计算资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupId 执行资源组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Params 高级运行参数,变量替换，map-json String,String
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdvanceConfig 高级设置，执行配置参数，map-json String,String. 采用Base64编码
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

        if (array_key_exists("DatasourceEnv",$param) and $param["DatasourceEnv"] !== null) {
            $this->DatasourceEnv = $param["DatasourceEnv"];
        }

        if (array_key_exists("ComputeResource",$param) and $param["ComputeResource"] !== null) {
            $this->ComputeResource = $param["ComputeResource"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("AdvanceConfig",$param) and $param["AdvanceConfig"] !== null) {
            $this->AdvanceConfig = $param["AdvanceConfig"];
        }
    }
}
