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
 * 高风险资产详情信息
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getDataSourceType() 获取数据源类型
 * @method void setDataSourceType(string $DataSourceType) 设置数据源类型
 * @method string getDataSourceName() 获取数据源名称
 * @method void setDataSourceName(string $DataSourceName) 设置数据源名称
 * @method string getAssetsName() 获取资产对象名称
 * @method void setAssetsName(string $AssetsName) 设置资产对象名称
 * @method integer getHighRiskCount() 获取高风险个数
 * @method void setHighRiskCount(integer $HighRiskCount) 设置高风险个数
 * @method string getRiskType() 获取风险类型
 * @method void setRiskType(string $RiskType) 设置风险类型
 * @method integer getTotalRiskCount() 获取总的风险个数
 * @method void setTotalRiskCount(integer $TotalRiskCount) 设置总的风险个数
 * @method string getRiskSide() 获取风险面
 * @method void setRiskSide(string $RiskSide) 设置风险面
 * @method string getResourceRegion() 获取地域
 * @method void setResourceRegion(string $ResourceRegion) 设置地域
 */
class HighRiskAssetsDetail extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 数据源类型
     */
    public $DataSourceType;

    /**
     * @var string 数据源名称
     */
    public $DataSourceName;

    /**
     * @var string 资产对象名称
     */
    public $AssetsName;

    /**
     * @var integer 高风险个数
     */
    public $HighRiskCount;

    /**
     * @var string 风险类型
     */
    public $RiskType;

    /**
     * @var integer 总的风险个数
     */
    public $TotalRiskCount;

    /**
     * @var string 风险面
     */
    public $RiskSide;

    /**
     * @var string 地域
     */
    public $ResourceRegion;

    /**
     * @param string $InstanceId 实例id
     * @param string $DataSourceType 数据源类型
     * @param string $DataSourceName 数据源名称
     * @param string $AssetsName 资产对象名称
     * @param integer $HighRiskCount 高风险个数
     * @param string $RiskType 风险类型
     * @param integer $TotalRiskCount 总的风险个数
     * @param string $RiskSide 风险面
     * @param string $ResourceRegion 地域
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("DataSourceName",$param) and $param["DataSourceName"] !== null) {
            $this->DataSourceName = $param["DataSourceName"];
        }

        if (array_key_exists("AssetsName",$param) and $param["AssetsName"] !== null) {
            $this->AssetsName = $param["AssetsName"];
        }

        if (array_key_exists("HighRiskCount",$param) and $param["HighRiskCount"] !== null) {
            $this->HighRiskCount = $param["HighRiskCount"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("TotalRiskCount",$param) and $param["TotalRiskCount"] !== null) {
            $this->TotalRiskCount = $param["TotalRiskCount"];
        }

        if (array_key_exists("RiskSide",$param) and $param["RiskSide"] !== null) {
            $this->RiskSide = $param["RiskSide"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }
    }
}
