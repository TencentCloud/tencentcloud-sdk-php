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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getClusterId() 获取clusterId
 * @method void setClusterId(string $ClusterId) 设置clusterId
 * @method string getStatusDesc() 获取状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getZoneId() 获取集群地域
 * @method void setZoneId(integer $ZoneId) 设置集群地域
 * @method integer getAppId() 获取用户APPID
 * @method void setAppId(integer $AppId) 设置用户APPID
 * @method string getAddtime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddtime(string $Addtime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuntime() 获取运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntime(string $Runtime) 设置运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method EMRProductConfigSettings getConfig() 获取集群配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(EMRProductConfigSettings $Config) 设置集群配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMasterIp() 获取集群IP
 * @method void setMasterIp(string $MasterIp) 设置集群IP
 * @method string getEmrVersion() 获取集群版本
 * @method void setEmrVersion(string $EmrVersion) 设置集群版本
 * @method integer getChargeType() 获取集群计费类型
 * @method void setChargeType(integer $ChargeType) 设置集群计费类型
 */

/**
 *实例信息
 */
class ClusterInstanceInfo extends AbstractModel
{
    /**
     * @var string clusterId
     */
    public $ClusterId;

    /**
     * @var string 状态描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDesc;

    /**
     * @var string 集群名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var integer 集群地域
     */
    public $ZoneId;

    /**
     * @var integer 用户APPID
     */
    public $AppId;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Addtime;

    /**
     * @var string 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Runtime;

    /**
     * @var EMRProductConfigSettings 集群配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @var string 集群IP
     */
    public $MasterIp;

    /**
     * @var string 集群版本
     */
    public $EmrVersion;

    /**
     * @var integer 集群计费类型
     */
    public $ChargeType;
    /**
     * @param string $ClusterId clusterId
     * @param string $StatusDesc 状态描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ZoneId 集群地域
     * @param integer $AppId 用户APPID
     * @param string $Addtime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Runtime 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param EMRProductConfigSettings $Config 集群配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MasterIp 集群IP
     * @param string $EmrVersion 集群版本
     * @param integer $ChargeType 集群计费类型
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Addtime",$param) and $param["Addtime"] !== null) {
            $this->Addtime = $param["Addtime"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new EMRProductConfigSettings();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("MasterIp",$param) and $param["MasterIp"] !== null) {
            $this->MasterIp = $param["MasterIp"];
        }

        if (array_key_exists("EmrVersion",$param) and $param["EmrVersion"] !== null) {
            $this->EmrVersion = $param["EmrVersion"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }
    }
}
