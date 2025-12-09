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
 * 数据源环境信息
 *
 * @method string getEnv() 获取环境
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnv(string $Env) 设置环境
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceType() 获取数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceType(string $DataSourceType) 设置数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParams() 获取配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceId(string $DataSourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvDataSourceId() 获取env环境的数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvDataSourceId(string $EnvDataSourceId) 设置env环境的数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizParams() 获取配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizParams(string $BizParams) 设置配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTcCatalogOpen() 获取是否支持tccatalog
 * @method void setTcCatalogOpen(boolean $TcCatalogOpen) 设置是否支持tccatalog
 */
class DataSourceEnvInfo extends AbstractModel
{
    /**
     * @var string 环境
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Env;

    /**
     * @var string 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceType;

    /**
     * @var string 集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceId;

    /**
     * @var string env环境的数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvDataSourceId;

    /**
     * @var string 配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizParams;

    /**
     * @var boolean 是否支持tccatalog
     */
    public $TcCatalogOpen;

    /**
     * @param string $Env 环境
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceType 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Params 配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvDataSourceId env环境的数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizParams 配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TcCatalogOpen 是否支持tccatalog
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
        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("EnvDataSourceId",$param) and $param["EnvDataSourceId"] !== null) {
            $this->EnvDataSourceId = $param["EnvDataSourceId"];
        }

        if (array_key_exists("BizParams",$param) and $param["BizParams"] !== null) {
            $this->BizParams = $param["BizParams"];
        }

        if (array_key_exists("TcCatalogOpen",$param) and $param["TcCatalogOpen"] !== null) {
            $this->TcCatalogOpen = $param["TcCatalogOpen"];
        }
    }
}
