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
 * 网络配置
 *
 * @method integer getId() 获取网络配置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置网络配置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssociateId() 获取网络配置唯一标志符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociateId(string $AssociateId) 设置网络配置唯一标志符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHouseId() 获取计算引擎id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHouseId(string $HouseId) 设置计算引擎id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceConnectionId() 获取数据源id(已废弃)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceConnectionId(string $DatasourceConnectionId) 设置数据源id(已废弃)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getState() 获取网络配置状态（0-初始化，1-正常）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(integer $State) 设置网络配置状态（0-初始化，1-正常）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppid() 获取创建用户Appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppid(integer $Appid) 设置创建用户Appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHouseName() 获取计算引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHouseName(string $HouseName) 设置计算引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceConnectionName() 获取网络配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置网络配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNetworkConnectionType() 获取网络配置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkConnectionType(integer $NetworkConnectionType) 设置网络配置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取创建用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置创建用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取创建用户SubAccountUin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置创建用户SubAccountUin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetworkConnectionDesc() 获取网络配置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkConnectionDesc(string $NetworkConnectionDesc) 设置网络配置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceConnectionVpcId() 获取数据源vpcid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceConnectionVpcId(string $DatasourceConnectionVpcId) 设置数据源vpcid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceConnectionSubnetId() 获取数据源SubnetId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceConnectionSubnetId(string $DatasourceConnectionSubnetId) 设置数据源SubnetId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceConnectionCidrBlock() 获取数据源SubnetId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceConnectionCidrBlock(string $DatasourceConnectionCidrBlock) 设置数据源SubnetId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceConnectionSubnetCidrBlock() 获取数据源SubnetCidrBlock
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceConnectionSubnetCidrBlock(string $DatasourceConnectionSubnetCidrBlock) 设置数据源SubnetCidrBlock
注意：此字段可能返回 null，表示取不到有效值。
 */
class NetworkConnection extends AbstractModel
{
    /**
     * @var integer 网络配置id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 网络配置唯一标志符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociateId;

    /**
     * @var string 计算引擎id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HouseId;

    /**
     * @var string 数据源id(已废弃)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceConnectionId;

    /**
     * @var integer 网络配置状态（0-初始化，1-正常）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 创建用户Appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Appid;

    /**
     * @var string 计算引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HouseName;

    /**
     * @var string 网络配置名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceConnectionName;

    /**
     * @var integer 网络配置类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkConnectionType;

    /**
     * @var string 创建用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 创建用户SubAccountUin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var string 网络配置描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkConnectionDesc;

    /**
     * @var string 数据源vpcid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceConnectionVpcId;

    /**
     * @var string 数据源SubnetId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceConnectionSubnetId;

    /**
     * @var string 数据源SubnetId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceConnectionCidrBlock;

    /**
     * @var string 数据源SubnetCidrBlock
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceConnectionSubnetCidrBlock;

    /**
     * @param integer $Id 网络配置id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssociateId 网络配置唯一标志符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HouseId 计算引擎id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceConnectionId 数据源id(已废弃)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $State 网络配置状态（0-初始化，1-正常）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Appid 创建用户Appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HouseName 计算引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceConnectionName 网络配置名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NetworkConnectionType 网络配置类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 创建用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 创建用户SubAccountUin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetworkConnectionDesc 网络配置描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceConnectionVpcId 数据源vpcid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceConnectionSubnetId 数据源SubnetId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceConnectionCidrBlock 数据源SubnetId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceConnectionSubnetCidrBlock 数据源SubnetCidrBlock
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

        if (array_key_exists("AssociateId",$param) and $param["AssociateId"] !== null) {
            $this->AssociateId = $param["AssociateId"];
        }

        if (array_key_exists("HouseId",$param) and $param["HouseId"] !== null) {
            $this->HouseId = $param["HouseId"];
        }

        if (array_key_exists("DatasourceConnectionId",$param) and $param["DatasourceConnectionId"] !== null) {
            $this->DatasourceConnectionId = $param["DatasourceConnectionId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("HouseName",$param) and $param["HouseName"] !== null) {
            $this->HouseName = $param["HouseName"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }

        if (array_key_exists("NetworkConnectionType",$param) and $param["NetworkConnectionType"] !== null) {
            $this->NetworkConnectionType = $param["NetworkConnectionType"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("NetworkConnectionDesc",$param) and $param["NetworkConnectionDesc"] !== null) {
            $this->NetworkConnectionDesc = $param["NetworkConnectionDesc"];
        }

        if (array_key_exists("DatasourceConnectionVpcId",$param) and $param["DatasourceConnectionVpcId"] !== null) {
            $this->DatasourceConnectionVpcId = $param["DatasourceConnectionVpcId"];
        }

        if (array_key_exists("DatasourceConnectionSubnetId",$param) and $param["DatasourceConnectionSubnetId"] !== null) {
            $this->DatasourceConnectionSubnetId = $param["DatasourceConnectionSubnetId"];
        }

        if (array_key_exists("DatasourceConnectionCidrBlock",$param) and $param["DatasourceConnectionCidrBlock"] !== null) {
            $this->DatasourceConnectionCidrBlock = $param["DatasourceConnectionCidrBlock"];
        }

        if (array_key_exists("DatasourceConnectionSubnetCidrBlock",$param) and $param["DatasourceConnectionSubnetCidrBlock"] !== null) {
            $this->DatasourceConnectionSubnetCidrBlock = $param["DatasourceConnectionSubnetCidrBlock"];
        }
    }
}
