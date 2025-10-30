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
 * DescribeNetworkConnections请求参数结构体
 *
 * @method integer getNetworkConnectionType() 获取网络配置类型
 * @method void setNetworkConnectionType(integer $NetworkConnectionType) 设置网络配置类型
 * @method string getDataEngineName() 获取计算引擎名称
 * @method void setDataEngineName(string $DataEngineName) 设置计算引擎名称
 * @method string getDatasourceConnectionVpcId() 获取数据源vpcid
 * @method void setDatasourceConnectionVpcId(string $DatasourceConnectionVpcId) 设置数据源vpcid
 * @method integer getLimit() 获取返回数量，默认为10，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为10，最大值为100。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method string getNetworkConnectionName() 获取网络配置名称
 * @method void setNetworkConnectionName(string $NetworkConnectionName) 设置网络配置名称
 */
class DescribeNetworkConnectionsRequest extends AbstractModel
{
    /**
     * @var integer 网络配置类型
     */
    public $NetworkConnectionType;

    /**
     * @var string 计算引擎名称
     */
    public $DataEngineName;

    /**
     * @var string 数据源vpcid
     */
    public $DatasourceConnectionVpcId;

    /**
     * @var integer 返回数量，默认为10，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 网络配置名称
     */
    public $NetworkConnectionName;

    /**
     * @param integer $NetworkConnectionType 网络配置类型
     * @param string $DataEngineName 计算引擎名称
     * @param string $DatasourceConnectionVpcId 数据源vpcid
     * @param integer $Limit 返回数量，默认为10，最大值为100。
     * @param integer $Offset 偏移量，默认为0。
     * @param string $NetworkConnectionName 网络配置名称
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
        if (array_key_exists("NetworkConnectionType",$param) and $param["NetworkConnectionType"] !== null) {
            $this->NetworkConnectionType = $param["NetworkConnectionType"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("DatasourceConnectionVpcId",$param) and $param["DatasourceConnectionVpcId"] !== null) {
            $this->DatasourceConnectionVpcId = $param["DatasourceConnectionVpcId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("NetworkConnectionName",$param) and $param["NetworkConnectionName"] !== null) {
            $this->NetworkConnectionName = $param["NetworkConnectionName"];
        }
    }
}
