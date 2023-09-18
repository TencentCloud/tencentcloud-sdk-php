<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 数据源信息
 *
 * @method integer getId() 获取数据源数字Id
 * @method void setId(integer $Id) 设置数据源数字Id
 * @method string getDatasourceConnectionId() 获取数据源字符串Id
 * @method void setDatasourceConnectionId(string $DatasourceConnectionId) 设置数据源字符串Id
 * @method string getDatasourceConnectionName() 获取数据源名称
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置数据源名称
 * @method string getDatasourceConnectionDesc() 获取数据源描述
 * @method void setDatasourceConnectionDesc(string $DatasourceConnectionDesc) 设置数据源描述
 * @method string getDatasourceConnectionType() 获取数据源类型，支持DataLakeCatalog、IcebergCatalog、Result、Mysql、HiveCos、HiveHdfs
 * @method void setDatasourceConnectionType(string $DatasourceConnectionType) 设置数据源类型，支持DataLakeCatalog、IcebergCatalog、Result、Mysql、HiveCos、HiveHdfs
 * @method DatasourceConnectionConfig getDatasourceConnectionConfig() 获取数据源属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceConnectionConfig(DatasourceConnectionConfig $DatasourceConnectionConfig) 设置数据源属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getState() 获取数据源状态：0（初始化）、1（成功）、-1（已删除）、-2（失败）、-3（删除中）
 * @method void setState(integer $State) 设置数据源状态：0（初始化）、1（成功）、-1（已删除）、-2（失败）、-3（删除中）
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getAppId() 获取用户AppId
 * @method void setAppId(string $AppId) 设置用户AppId
 * @method string getCreateTime() 获取数据源创建时间
 * @method void setCreateTime(string $CreateTime) 设置数据源创建时间
 * @method string getUpdateTime() 获取数据源最近一次更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置数据源最近一次更新时间
 * @method string getMessage() 获取数据源同步失败原因
 * @method void setMessage(string $Message) 设置数据源同步失败原因
 * @method array getDataEngines() 获取数据源绑定的计算引擎信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEngines(array $DataEngines) 设置数据源绑定的计算引擎信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserAlias() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAlias(string $UserAlias) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNetworkConnectionSet() 获取网络配置列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkConnectionSet(array $NetworkConnectionSet) 设置网络配置列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConnectivityState() 获取连通性状态：0（未测试，默认）、1（正常）、2（失败）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectivityState(integer $ConnectivityState) 设置连通性状态：0（未测试，默认）、1（正常）、2（失败）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConnectivityTips() 获取连通性测试提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectivityTips(string $ConnectivityTips) 设置连通性测试提示信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DatasourceConnectionInfo extends AbstractModel
{
    /**
     * @var integer 数据源数字Id
     */
    public $Id;

    /**
     * @var string 数据源字符串Id
     */
    public $DatasourceConnectionId;

    /**
     * @var string 数据源名称
     */
    public $DatasourceConnectionName;

    /**
     * @var string 数据源描述
     */
    public $DatasourceConnectionDesc;

    /**
     * @var string 数据源类型，支持DataLakeCatalog、IcebergCatalog、Result、Mysql、HiveCos、HiveHdfs
     */
    public $DatasourceConnectionType;

    /**
     * @var DatasourceConnectionConfig 数据源属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceConnectionConfig;

    /**
     * @var integer 数据源状态：0（初始化）、1（成功）、-1（已删除）、-2（失败）、-3（删除中）
     */
    public $State;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 用户AppId
     */
    public $AppId;

    /**
     * @var string 数据源创建时间
     */
    public $CreateTime;

    /**
     * @var string 数据源最近一次更新时间
     */
    public $UpdateTime;

    /**
     * @var string 数据源同步失败原因
     */
    public $Message;

    /**
     * @var array 数据源绑定的计算引擎信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEngines;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAlias;

    /**
     * @var array 网络配置列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkConnectionSet;

    /**
     * @var integer 连通性状态：0（未测试，默认）、1（正常）、2（失败）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectivityState;

    /**
     * @var string 连通性测试提示信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectivityTips;

    /**
     * @param integer $Id 数据源数字Id
     * @param string $DatasourceConnectionId 数据源字符串Id
     * @param string $DatasourceConnectionName 数据源名称
     * @param string $DatasourceConnectionDesc 数据源描述
     * @param string $DatasourceConnectionType 数据源类型，支持DataLakeCatalog、IcebergCatalog、Result、Mysql、HiveCos、HiveHdfs
     * @param DatasourceConnectionConfig $DatasourceConnectionConfig 数据源属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $State 数据源状态：0（初始化）、1（成功）、-1（已删除）、-2（失败）、-3（删除中）
     * @param string $Region 地域
     * @param string $AppId 用户AppId
     * @param string $CreateTime 数据源创建时间
     * @param string $UpdateTime 数据源最近一次更新时间
     * @param string $Message 数据源同步失败原因
     * @param array $DataEngines 数据源绑定的计算引擎信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserAlias 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NetworkConnectionSet 网络配置列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConnectivityState 连通性状态：0（未测试，默认）、1（正常）、2（失败）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConnectivityTips 连通性测试提示信息
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DatasourceConnectionId",$param) and $param["DatasourceConnectionId"] !== null) {
            $this->DatasourceConnectionId = $param["DatasourceConnectionId"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }

        if (array_key_exists("DatasourceConnectionDesc",$param) and $param["DatasourceConnectionDesc"] !== null) {
            $this->DatasourceConnectionDesc = $param["DatasourceConnectionDesc"];
        }

        if (array_key_exists("DatasourceConnectionType",$param) and $param["DatasourceConnectionType"] !== null) {
            $this->DatasourceConnectionType = $param["DatasourceConnectionType"];
        }

        if (array_key_exists("DatasourceConnectionConfig",$param) and $param["DatasourceConnectionConfig"] !== null) {
            $this->DatasourceConnectionConfig = new DatasourceConnectionConfig();
            $this->DatasourceConnectionConfig->deserialize($param["DatasourceConnectionConfig"]);
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("DataEngines",$param) and $param["DataEngines"] !== null) {
            $this->DataEngines = [];
            foreach ($param["DataEngines"] as $key => $value){
                $obj = new DataEngineInfo();
                $obj->deserialize($value);
                array_push($this->DataEngines, $obj);
            }
        }

        if (array_key_exists("UserAlias",$param) and $param["UserAlias"] !== null) {
            $this->UserAlias = $param["UserAlias"];
        }

        if (array_key_exists("NetworkConnectionSet",$param) and $param["NetworkConnectionSet"] !== null) {
            $this->NetworkConnectionSet = [];
            foreach ($param["NetworkConnectionSet"] as $key => $value){
                $obj = new NetworkConnection();
                $obj->deserialize($value);
                array_push($this->NetworkConnectionSet, $obj);
            }
        }

        if (array_key_exists("ConnectivityState",$param) and $param["ConnectivityState"] !== null) {
            $this->ConnectivityState = $param["ConnectivityState"];
        }

        if (array_key_exists("ConnectivityTips",$param) and $param["ConnectivityTips"] !== null) {
            $this->ConnectivityTips = $param["ConnectivityTips"];
        }
    }
}
