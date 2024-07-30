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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGoodsDetail请求参数结构体
 *
 * @method string getCase() 获取操作类型，“CREATE"表示创建、”MODIFY"表示变更配置、“RENEW"表示续费
 * @method void setCase(string $Case) 设置操作类型，“CREATE"表示创建、”MODIFY"表示变更配置、“RENEW"表示续费
 * @method string getZone() 获取可用区，例如"ap-guangzhou-3"表示广州三区等
 * @method void setZone(string $Zone) 设置可用区，例如"ap-guangzhou-3"表示广州三区等
 * @method boolean getHaFlag() 获取集群的高可用标记，true表示为高可用集群
 * @method void setHaFlag(boolean $HaFlag) 设置集群的高可用标记，true表示为高可用集群
 * @method integer getHaType() 获取高可用类型： 0：非高可用 1：读高可用 2：读写高可用。	
 * @method void setHaType(integer $HaType) 设置高可用类型： 0：非高可用 1：读高可用 2：读写高可用。	
 * @method string getUserVPCId() 获取用户集群的私有网络
 * @method void setUserVPCId(string $UserVPCId) 设置用户集群的私有网络
 * @method string getUserSubnetId() 获取用户集群的子网
 * @method void setUserSubnetId(string $UserSubnetId) 设置用户集群的子网
 * @method string getProductVersion() 获取用户集群的版本，例如“20.7.2.30”等
 * @method void setProductVersion(string $ProductVersion) 设置用户集群的版本，例如“20.7.2.30”等
 * @method string getInstanceId() 获取集群ID，创建时为空，其他情况必须存在
 * @method void setInstanceId(string $InstanceId) 设置集群ID，创建时为空，其他情况必须存在
 * @method array getResources() 获取集群资源规格描述
 * @method void setResources(array $Resources) 设置集群资源规格描述
 * @method ResourceNodeSpec getModifySpec() 获取集群规格修改参数
 * @method void setModifySpec(ResourceNodeSpec $ModifySpec) 设置集群规格修改参数
 * @method ChargeProperties getChargeProperties() 获取计费信息
 * @method void setChargeProperties(ChargeProperties $ChargeProperties) 设置计费信息
 * @method string getInstanceName() 获取创建集群时需要填写InstanceName
 * @method void setInstanceName(string $InstanceName) 设置创建集群时需要填写InstanceName
 * @method array getTags() 获取购买页填写的标签列表
 * @method void setTags(array $Tags) 设置购买页填写的标签列表
 * @method string getClsLogSetId() 获取CLS日志集ID
 * @method void setClsLogSetId(string $ClsLogSetId) 设置CLS日志集ID
 * @method integer getUserSubnetIPNum() 获取用户子网剩余ip数量
 * @method void setUserSubnetIPNum(integer $UserSubnetIPNum) 设置用户子网剩余ip数量
 * @method string getCosBucketName() 获取COS桶名称
 * @method void setCosBucketName(string $CosBucketName) 设置COS桶名称
 * @method boolean getHourToPrepaid() 获取按量计费转包年包月
 * @method void setHourToPrepaid(boolean $HourToPrepaid) 设置按量计费转包年包月
 * @method string getDorisUserPwd() 获取base64密码
 * @method void setDorisUserPwd(string $DorisUserPwd) 设置base64密码
 * @method string getLogType() 获取日志的类型，es或者cls_topic
 * @method void setLogType(string $LogType) 设置日志的类型，es或者cls_topic
 * @method integer getCaseSensitive() 获取表名大小写是否敏感，0：敏感；1：不敏感，表名改为以小写存储；2：不敏感，以小写进行比较
 * @method void setCaseSensitive(integer $CaseSensitive) 设置表名大小写是否敏感，0：敏感；1：不敏感，表名改为以小写存储；2：不敏感，以小写进行比较
 * @method boolean getRollingRestart() 获取true为滚动重启 false为批量重启
 * @method void setRollingRestart(boolean $RollingRestart) 设置true为滚动重启 false为批量重启
 * @method boolean getEnableMultiZones() 获取是否为多可用区
 * @method void setEnableMultiZones(boolean $EnableMultiZones) 设置是否为多可用区
 * @method array getUserMultiZoneInfos() 获取用户多可用区的网络信息
 * @method void setUserMultiZoneInfos(array $UserMultiZoneInfos) 设置用户多可用区的网络信息
 * @method InstanceDetail getDetails() 获取扩展字段
 * @method void setDetails(InstanceDetail $Details) 设置扩展字段
 */
class DescribeGoodsDetailRequest extends AbstractModel
{
    /**
     * @var string 操作类型，“CREATE"表示创建、”MODIFY"表示变更配置、“RENEW"表示续费
     */
    public $Case;

    /**
     * @var string 可用区，例如"ap-guangzhou-3"表示广州三区等
     */
    public $Zone;

    /**
     * @var boolean 集群的高可用标记，true表示为高可用集群
     */
    public $HaFlag;

    /**
     * @var integer 高可用类型： 0：非高可用 1：读高可用 2：读写高可用。	
     */
    public $HaType;

    /**
     * @var string 用户集群的私有网络
     */
    public $UserVPCId;

    /**
     * @var string 用户集群的子网
     */
    public $UserSubnetId;

    /**
     * @var string 用户集群的版本，例如“20.7.2.30”等
     */
    public $ProductVersion;

    /**
     * @var string 集群ID，创建时为空，其他情况必须存在
     */
    public $InstanceId;

    /**
     * @var array 集群资源规格描述
     */
    public $Resources;

    /**
     * @var ResourceNodeSpec 集群规格修改参数
     */
    public $ModifySpec;

    /**
     * @var ChargeProperties 计费信息
     */
    public $ChargeProperties;

    /**
     * @var string 创建集群时需要填写InstanceName
     */
    public $InstanceName;

    /**
     * @var array 购买页填写的标签列表
     */
    public $Tags;

    /**
     * @var string CLS日志集ID
     */
    public $ClsLogSetId;

    /**
     * @var integer 用户子网剩余ip数量
     */
    public $UserSubnetIPNum;

    /**
     * @var string COS桶名称
     */
    public $CosBucketName;

    /**
     * @var boolean 按量计费转包年包月
     */
    public $HourToPrepaid;

    /**
     * @var string base64密码
     */
    public $DorisUserPwd;

    /**
     * @var string 日志的类型，es或者cls_topic
     */
    public $LogType;

    /**
     * @var integer 表名大小写是否敏感，0：敏感；1：不敏感，表名改为以小写存储；2：不敏感，以小写进行比较
     */
    public $CaseSensitive;

    /**
     * @var boolean true为滚动重启 false为批量重启
     */
    public $RollingRestart;

    /**
     * @var boolean 是否为多可用区
     */
    public $EnableMultiZones;

    /**
     * @var array 用户多可用区的网络信息
     */
    public $UserMultiZoneInfos;

    /**
     * @var InstanceDetail 扩展字段
     */
    public $Details;

    /**
     * @param string $Case 操作类型，“CREATE"表示创建、”MODIFY"表示变更配置、“RENEW"表示续费
     * @param string $Zone 可用区，例如"ap-guangzhou-3"表示广州三区等
     * @param boolean $HaFlag 集群的高可用标记，true表示为高可用集群
     * @param integer $HaType 高可用类型： 0：非高可用 1：读高可用 2：读写高可用。	
     * @param string $UserVPCId 用户集群的私有网络
     * @param string $UserSubnetId 用户集群的子网
     * @param string $ProductVersion 用户集群的版本，例如“20.7.2.30”等
     * @param string $InstanceId 集群ID，创建时为空，其他情况必须存在
     * @param array $Resources 集群资源规格描述
     * @param ResourceNodeSpec $ModifySpec 集群规格修改参数
     * @param ChargeProperties $ChargeProperties 计费信息
     * @param string $InstanceName 创建集群时需要填写InstanceName
     * @param array $Tags 购买页填写的标签列表
     * @param string $ClsLogSetId CLS日志集ID
     * @param integer $UserSubnetIPNum 用户子网剩余ip数量
     * @param string $CosBucketName COS桶名称
     * @param boolean $HourToPrepaid 按量计费转包年包月
     * @param string $DorisUserPwd base64密码
     * @param string $LogType 日志的类型，es或者cls_topic
     * @param integer $CaseSensitive 表名大小写是否敏感，0：敏感；1：不敏感，表名改为以小写存储；2：不敏感，以小写进行比较
     * @param boolean $RollingRestart true为滚动重启 false为批量重启
     * @param boolean $EnableMultiZones 是否为多可用区
     * @param array $UserMultiZoneInfos 用户多可用区的网络信息
     * @param InstanceDetail $Details 扩展字段
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
        if (array_key_exists("Case",$param) and $param["Case"] !== null) {
            $this->Case = $param["Case"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("HaFlag",$param) and $param["HaFlag"] !== null) {
            $this->HaFlag = $param["HaFlag"];
        }

        if (array_key_exists("HaType",$param) and $param["HaType"] !== null) {
            $this->HaType = $param["HaType"];
        }

        if (array_key_exists("UserVPCId",$param) and $param["UserVPCId"] !== null) {
            $this->UserVPCId = $param["UserVPCId"];
        }

        if (array_key_exists("UserSubnetId",$param) and $param["UserSubnetId"] !== null) {
            $this->UserSubnetId = $param["UserSubnetId"];
        }

        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new ResourceNodeSpec();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("ModifySpec",$param) and $param["ModifySpec"] !== null) {
            $this->ModifySpec = new ResourceNodeSpec();
            $this->ModifySpec->deserialize($param["ModifySpec"]);
        }

        if (array_key_exists("ChargeProperties",$param) and $param["ChargeProperties"] !== null) {
            $this->ChargeProperties = new ChargeProperties();
            $this->ChargeProperties->deserialize($param["ChargeProperties"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ClsLogSetId",$param) and $param["ClsLogSetId"] !== null) {
            $this->ClsLogSetId = $param["ClsLogSetId"];
        }

        if (array_key_exists("UserSubnetIPNum",$param) and $param["UserSubnetIPNum"] !== null) {
            $this->UserSubnetIPNum = $param["UserSubnetIPNum"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("HourToPrepaid",$param) and $param["HourToPrepaid"] !== null) {
            $this->HourToPrepaid = $param["HourToPrepaid"];
        }

        if (array_key_exists("DorisUserPwd",$param) and $param["DorisUserPwd"] !== null) {
            $this->DorisUserPwd = $param["DorisUserPwd"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("CaseSensitive",$param) and $param["CaseSensitive"] !== null) {
            $this->CaseSensitive = $param["CaseSensitive"];
        }

        if (array_key_exists("RollingRestart",$param) and $param["RollingRestart"] !== null) {
            $this->RollingRestart = $param["RollingRestart"];
        }

        if (array_key_exists("EnableMultiZones",$param) and $param["EnableMultiZones"] !== null) {
            $this->EnableMultiZones = $param["EnableMultiZones"];
        }

        if (array_key_exists("UserMultiZoneInfos",$param) and $param["UserMultiZoneInfos"] !== null) {
            $this->UserMultiZoneInfos = [];
            foreach ($param["UserMultiZoneInfos"] as $key => $value){
                $obj = new NetworkInfo();
                $obj->deserialize($value);
                array_push($this->UserMultiZoneInfos, $obj);
            }
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = new InstanceDetail();
            $this->Details->deserialize($param["Details"]);
        }
    }
}
