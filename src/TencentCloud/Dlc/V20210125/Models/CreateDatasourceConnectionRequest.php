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
 * CreateDatasourceConnection请求参数结构体
 *
 * @method string getDatasourceConnectionName() 获取数据连接名称
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置数据连接名称
 * @method string getDatasourceConnectionType() 获取数据连接类型
 * @method void setDatasourceConnectionType(string $DatasourceConnectionType) 设置数据连接类型
 * @method DatasourceConnectionConfig getDatasourceConnectionConfig() 获取数据连接属性
 * @method void setDatasourceConnectionConfig(DatasourceConnectionConfig $DatasourceConnectionConfig) 设置数据连接属性
 * @method string getServiceType() 获取数据连接所属服务
 * @method void setServiceType(string $ServiceType) 设置数据连接所属服务
 * @method string getDatasourceConnectionDesc() 获取数据连接描述
 * @method void setDatasourceConnectionDesc(string $DatasourceConnectionDesc) 设置数据连接描述
 * @method array getDataEngineNames() 获取数据引擎名称数组
 * @method void setDataEngineNames(array $DataEngineNames) 设置数据引擎名称数组
 * @method string getNetworkConnectionName() 获取网络连接名称
 * @method void setNetworkConnectionName(string $NetworkConnectionName) 设置网络连接名称
 * @method string getNetworkConnectionDesc() 获取网络连接描述
 * @method void setNetworkConnectionDesc(string $NetworkConnectionDesc) 设置网络连接描述
 * @method integer getNetworkConnectionType() 获取网络连接类型 （2-夸源型，4-增强型）
 * @method void setNetworkConnectionType(integer $NetworkConnectionType) 设置网络连接类型 （2-夸源型，4-增强型）
 * @method array getCustomConfig() 获取自定义配置
 * @method void setCustomConfig(array $CustomConfig) 设置自定义配置
 */
class CreateDatasourceConnectionRequest extends AbstractModel
{
    /**
     * @var string 数据连接名称
     */
    public $DatasourceConnectionName;

    /**
     * @var string 数据连接类型
     */
    public $DatasourceConnectionType;

    /**
     * @var DatasourceConnectionConfig 数据连接属性
     */
    public $DatasourceConnectionConfig;

    /**
     * @var string 数据连接所属服务
     */
    public $ServiceType;

    /**
     * @var string 数据连接描述
     */
    public $DatasourceConnectionDesc;

    /**
     * @var array 数据引擎名称数组
     */
    public $DataEngineNames;

    /**
     * @var string 网络连接名称
     */
    public $NetworkConnectionName;

    /**
     * @var string 网络连接描述
     */
    public $NetworkConnectionDesc;

    /**
     * @var integer 网络连接类型 （2-夸源型，4-增强型）
     */
    public $NetworkConnectionType;

    /**
     * @var array 自定义配置
     */
    public $CustomConfig;

    /**
     * @param string $DatasourceConnectionName 数据连接名称
     * @param string $DatasourceConnectionType 数据连接类型
     * @param DatasourceConnectionConfig $DatasourceConnectionConfig 数据连接属性
     * @param string $ServiceType 数据连接所属服务
     * @param string $DatasourceConnectionDesc 数据连接描述
     * @param array $DataEngineNames 数据引擎名称数组
     * @param string $NetworkConnectionName 网络连接名称
     * @param string $NetworkConnectionDesc 网络连接描述
     * @param integer $NetworkConnectionType 网络连接类型 （2-夸源型，4-增强型）
     * @param array $CustomConfig 自定义配置
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

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("DatasourceConnectionDesc",$param) and $param["DatasourceConnectionDesc"] !== null) {
            $this->DatasourceConnectionDesc = $param["DatasourceConnectionDesc"];
        }

        if (array_key_exists("DataEngineNames",$param) and $param["DataEngineNames"] !== null) {
            $this->DataEngineNames = $param["DataEngineNames"];
        }

        if (array_key_exists("NetworkConnectionName",$param) and $param["NetworkConnectionName"] !== null) {
            $this->NetworkConnectionName = $param["NetworkConnectionName"];
        }

        if (array_key_exists("NetworkConnectionDesc",$param) and $param["NetworkConnectionDesc"] !== null) {
            $this->NetworkConnectionDesc = $param["NetworkConnectionDesc"];
        }

        if (array_key_exists("NetworkConnectionType",$param) and $param["NetworkConnectionType"] !== null) {
            $this->NetworkConnectionType = $param["NetworkConnectionType"];
        }

        if (array_key_exists("CustomConfig",$param) and $param["CustomConfig"] !== null) {
            $this->CustomConfig = [];
            foreach ($param["CustomConfig"] as $key => $value){
                $obj = new CustomConfig();
                $obj->deserialize($value);
                array_push($this->CustomConfig, $obj);
            }
        }
    }
}
