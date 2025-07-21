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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例相关信息
 *
 * @method integer getAppID() 获取用户APPID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppID(integer $AppID) 设置用户APPID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterID() 获取实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterID(string $ClusterID) 设置实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountID() 获取账号id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountID(string $AccountID) 设置账号id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取自定义实例名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置自定义实例名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZones() 获取可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZones(string $Zones) 设置可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNetworks() 获取网络信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworks(array $Networks) 设置网络信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Spec getSpec() 获取实例规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpec(Spec $Spec) 设置实例规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取实例状态：0：运行中,1：创建中 ,16：变配中,17：隔离中,18：待销毁,19：恢复中,20：关机 , 21：销毁中 ,22：已销毁 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置实例状态：0：运行中,1：创建中 ,16：变配中,17：隔离中,18：待销毁,19：恢复中,20：关机 , 21：销毁中 ,22：已销毁 
注意：此字段可能返回 null，表示取不到有效值。
 * @method Period getPeriod() 获取实例有效期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriod(Period $Period) 设置实例有效期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method Tenant getTenant() 获取产品内部特性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenant(Tenant $Tenant) 设置产品内部特性
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurity() 获取安全组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurity(array $Security) 设置安全组信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class Cluster extends AbstractModel
{
    /**
     * @var integer 用户APPID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppID;

    /**
     * @var string 实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterID;

    /**
     * @var string 账号id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountID;

    /**
     * @var string 自定义实例名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zones;

    /**
     * @var array 网络信息
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Networks;

    /**
     * @var Spec 实例规格
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Spec;

    /**
     * @var integer 实例状态：0：运行中,1：创建中 ,16：变配中,17：隔离中,18：待销毁,19：恢复中,20：关机 , 21：销毁中 ,22：已销毁 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var Period 实例有效期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Period;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var Tenant 产品内部特性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tenant;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array 安全组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Security;

    /**
     * @param integer $AppID 用户APPID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterID 实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountID 账号id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 自定义实例名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zones 可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Networks 网络信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Spec $Spec 实例规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 实例状态：0：运行中,1：创建中 ,16：变配中,17：隔离中,18：待销毁,19：恢复中,20：关机 , 21：销毁中 ,22：已销毁 
注意：此字段可能返回 null，表示取不到有效值。
     * @param Period $Period 实例有效期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param Tenant $Tenant 产品内部特性
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Security 安全组信息
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("AccountID",$param) and $param["AccountID"] !== null) {
            $this->AccountID = $param["AccountID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("Networks",$param) and $param["Networks"] !== null) {
            $this->Networks = [];
            foreach ($param["Networks"] as $key => $value){
                $obj = new Network();
                $obj->deserialize($value);
                array_push($this->Networks, $obj);
            }
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = new Spec();
            $this->Spec->deserialize($param["Spec"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = new Period();
            $this->Period->deserialize($param["Period"]);
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Tenant",$param) and $param["Tenant"] !== null) {
            $this->Tenant = new Tenant();
            $this->Tenant->deserialize($param["Tenant"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Security",$param) and $param["Security"] !== null) {
            $this->Security = $param["Security"];
        }
    }
}
