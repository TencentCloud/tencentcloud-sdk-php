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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateDatasourceHouse请求参数结构体
 *
 * @method string getDatasourceConnectionName() 获取网络配置名称
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置网络配置名称
 * @method string getDatasourceConnectionType() 获取数据源类型
 * @method void setDatasourceConnectionType(string $DatasourceConnectionType) 设置数据源类型
 * @method DatasourceConnectionConfig getDatasourceConnectionConfig() 获取数据源网络配置
 * @method void setDatasourceConnectionConfig(DatasourceConnectionConfig $DatasourceConnectionConfig) 设置数据源网络配置
 * @method array getDataEngineNames() 获取引擎名称，只允许绑定一个引擎
 * @method void setDataEngineNames(array $DataEngineNames) 设置引擎名称，只允许绑定一个引擎
 * @method integer getNetworkConnectionType() 获取网络类型，2-跨源型，4-增强型
 * @method void setNetworkConnectionType(integer $NetworkConnectionType) 设置网络类型，2-跨源型，4-增强型
 * @method string getNetworkConnectionDesc() 获取网络配置描述
 * @method void setNetworkConnectionDesc(string $NetworkConnectionDesc) 设置网络配置描述
 */
class AssociateDatasourceHouseRequest extends AbstractModel
{
    /**
     * @var string 网络配置名称
     */
    public $DatasourceConnectionName;

    /**
     * @var string 数据源类型
     */
    public $DatasourceConnectionType;

    /**
     * @var DatasourceConnectionConfig 数据源网络配置
     */
    public $DatasourceConnectionConfig;

    /**
     * @var array 引擎名称，只允许绑定一个引擎
     */
    public $DataEngineNames;

    /**
     * @var integer 网络类型，2-跨源型，4-增强型
     */
    public $NetworkConnectionType;

    /**
     * @var string 网络配置描述
     */
    public $NetworkConnectionDesc;

    /**
     * @param string $DatasourceConnectionName 网络配置名称
     * @param string $DatasourceConnectionType 数据源类型
     * @param DatasourceConnectionConfig $DatasourceConnectionConfig 数据源网络配置
     * @param array $DataEngineNames 引擎名称，只允许绑定一个引擎
     * @param integer $NetworkConnectionType 网络类型，2-跨源型，4-增强型
     * @param string $NetworkConnectionDesc 网络配置描述
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
        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }

        if (array_key_exists("DatasourceConnectionType",$param) and $param["DatasourceConnectionType"] !== null) {
            $this->DatasourceConnectionType = $param["DatasourceConnectionType"];
        }

        if (array_key_exists("DatasourceConnectionConfig",$param) and $param["DatasourceConnectionConfig"] !== null) {
            $this->DatasourceConnectionConfig = new DatasourceConnectionConfig();
            $this->DatasourceConnectionConfig->deserialize($param["DatasourceConnectionConfig"]);
        }

        if (array_key_exists("DataEngineNames",$param) and $param["DataEngineNames"] !== null) {
            $this->DataEngineNames = $param["DataEngineNames"];
        }

        if (array_key_exists("NetworkConnectionType",$param) and $param["NetworkConnectionType"] !== null) {
            $this->NetworkConnectionType = $param["NetworkConnectionType"];
        }

        if (array_key_exists("NetworkConnectionDesc",$param) and $param["NetworkConnectionDesc"] !== null) {
            $this->NetworkConnectionDesc = $param["NetworkConnectionDesc"];
        }
    }
}
