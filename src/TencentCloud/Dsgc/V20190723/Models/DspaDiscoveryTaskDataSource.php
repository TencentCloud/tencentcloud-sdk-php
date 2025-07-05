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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扫描任务数据源信息
 *
 * @method string getDataSourceId() 获取数据源ID
 * @method void setDataSourceId(string $DataSourceId) 设置数据源ID
 * @method string getCondition() 获取用于传入的数据源的条件，可以选择多个数据库，数据库之间通过逗号分隔，如果为空，默认是全部数据库
 * @method void setCondition(string $Condition) 设置用于传入的数据源的条件，可以选择多个数据库，数据库之间通过逗号分隔，如果为空，默认是全部数据库
 * @method array getProxyAddress() 获取代理地址
 * @method void setProxyAddress(array $ProxyAddress) 设置代理地址
 * @method string getDataSourceName() 获取数据源名称
 * @method void setDataSourceName(string $DataSourceName) 设置数据源名称
 * @method string getResourceRegion() 获取资源所在地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域
 * @method string getDataSourceType() 获取数据源类型
 * @method void setDataSourceType(string $DataSourceType) 设置数据源类型
 */
class DspaDiscoveryTaskDataSource extends AbstractModel
{
    /**
     * @var string 数据源ID
     */
    public $DataSourceId;

    /**
     * @var string 用于传入的数据源的条件，可以选择多个数据库，数据库之间通过逗号分隔，如果为空，默认是全部数据库
     */
    public $Condition;

    /**
     * @var array 代理地址
     */
    public $ProxyAddress;

    /**
     * @var string 数据源名称
     */
    public $DataSourceName;

    /**
     * @var string 资源所在地域
     */
    public $ResourceRegion;

    /**
     * @var string 数据源类型
     */
    public $DataSourceType;

    /**
     * @param string $DataSourceId 数据源ID
     * @param string $Condition 用于传入的数据源的条件，可以选择多个数据库，数据库之间通过逗号分隔，如果为空，默认是全部数据库
     * @param array $ProxyAddress 代理地址
     * @param string $DataSourceName 数据源名称
     * @param string $ResourceRegion 资源所在地域
     * @param string $DataSourceType 数据源类型
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
        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("ProxyAddress",$param) and $param["ProxyAddress"] !== null) {
            $this->ProxyAddress = $param["ProxyAddress"];
        }

        if (array_key_exists("DataSourceName",$param) and $param["DataSourceName"] !== null) {
            $this->DataSourceName = $param["DataSourceName"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }
    }
}
