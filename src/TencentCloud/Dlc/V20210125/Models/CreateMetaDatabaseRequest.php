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
 * CreateMetaDatabase请求参数结构体
 *
 * @method string getDatasourceConnectionName() 获取数据源名称，默认DataLakeCatalog
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置数据源名称，默认DataLakeCatalog
 * @method MetaDatabaseInfo getMetaDatabaseInfo() 获取元数据库基本信息
 * @method void setMetaDatabaseInfo(MetaDatabaseInfo $MetaDatabaseInfo) 设置元数据库基本信息
 * @method DataGovernPolicy getGovernPolicy() 获取数据治理配置项
 * @method void setGovernPolicy(DataGovernPolicy $GovernPolicy) 设置数据治理配置项
 * @method SmartPolicy getSmartPolicy() 获取智能数据治理配置
 * @method void setSmartPolicy(SmartPolicy $SmartPolicy) 设置智能数据治理配置
 */
class CreateMetaDatabaseRequest extends AbstractModel
{
    /**
     * @var string 数据源名称，默认DataLakeCatalog
     */
    public $DatasourceConnectionName;

    /**
     * @var MetaDatabaseInfo 元数据库基本信息
     */
    public $MetaDatabaseInfo;

    /**
     * @var DataGovernPolicy 数据治理配置项
     */
    public $GovernPolicy;

    /**
     * @var SmartPolicy 智能数据治理配置
     */
    public $SmartPolicy;

    /**
     * @param string $DatasourceConnectionName 数据源名称，默认DataLakeCatalog
     * @param MetaDatabaseInfo $MetaDatabaseInfo 元数据库基本信息
     * @param DataGovernPolicy $GovernPolicy 数据治理配置项
     * @param SmartPolicy $SmartPolicy 智能数据治理配置
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

        if (array_key_exists("MetaDatabaseInfo",$param) and $param["MetaDatabaseInfo"] !== null) {
            $this->MetaDatabaseInfo = new MetaDatabaseInfo();
            $this->MetaDatabaseInfo->deserialize($param["MetaDatabaseInfo"]);
        }

        if (array_key_exists("GovernPolicy",$param) and $param["GovernPolicy"] !== null) {
            $this->GovernPolicy = new DataGovernPolicy();
            $this->GovernPolicy->deserialize($param["GovernPolicy"]);
        }

        if (array_key_exists("SmartPolicy",$param) and $param["SmartPolicy"] !== null) {
            $this->SmartPolicy = new SmartPolicy();
            $this->SmartPolicy->deserialize($param["SmartPolicy"]);
        }
    }
}
