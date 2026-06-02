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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SqlTemplate SQL模板
 *
 * @method string getDbConfigMode() 获取<p>配置方式  script  脚本 wizard 向导</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbConfigMode(string $DbConfigMode) 设置<p>配置方式  script  脚本 wizard 向导</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceID() 获取<p>数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceID(string $DataSourceID) 设置<p>数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSql() 获取<p>Sql代码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSql(string $Sql) 设置<p>Sql代码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WizardConfig getWizardConfig() 获取<p>向导模式配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWizardConfig(WizardConfig $WizardConfig) 设置<p>向导模式配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SqlTemplate extends AbstractModel
{
    /**
     * @var string <p>配置方式  script  脚本 wizard 向导</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbConfigMode;

    /**
     * @var string <p>数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceID;

    /**
     * @var string <p>Sql代码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sql;

    /**
     * @var WizardConfig <p>向导模式配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WizardConfig;

    /**
     * @param string $DbConfigMode <p>配置方式  script  脚本 wizard 向导</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceID <p>数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sql <p>Sql代码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WizardConfig $WizardConfig <p>向导模式配置</p>
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
        if (array_key_exists("DbConfigMode",$param) and $param["DbConfigMode"] !== null) {
            $this->DbConfigMode = $param["DbConfigMode"];
        }

        if (array_key_exists("DataSourceID",$param) and $param["DataSourceID"] !== null) {
            $this->DataSourceID = $param["DataSourceID"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("WizardConfig",$param) and $param["WizardConfig"] !== null) {
            $this->WizardConfig = new WizardConfig();
            $this->WizardConfig->deserialize($param["WizardConfig"]);
        }
    }
}
