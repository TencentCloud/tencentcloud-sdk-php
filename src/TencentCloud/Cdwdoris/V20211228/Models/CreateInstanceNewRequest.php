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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceNew请求参数结构体
 *
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method CreateInstanceSpec getFeSpec() 获取<p>FE规格</p>
 * @method void setFeSpec(CreateInstanceSpec $FeSpec) 设置<p>FE规格</p>
 * @method CreateInstanceSpec getBeSpec() 获取<p>BE规格</p>
 * @method void setBeSpec(CreateInstanceSpec $BeSpec) 设置<p>BE规格</p>
 * @method boolean getHaFlag() 获取<p>是否高可用</p>
 * @method void setHaFlag(boolean $HaFlag) 设置<p>是否高可用</p>
 * @method string getUserVPCId() 获取<p>用户VPCID</p>
 * @method void setUserVPCId(string $UserVPCId) 设置<p>用户VPCID</p>
 * @method string getUserSubnetId() 获取<p>用户子网ID</p>
 * @method void setUserSubnetId(string $UserSubnetId) 设置<p>用户子网ID</p>
 * @method string getProductVersion() 获取<p>产品版本号</p>
 * @method void setProductVersion(string $ProductVersion) 设置<p>产品版本号</p>
 * @method ChargeProperties getChargeProperties() 获取<p>付费类型</p>
 * @method void setChargeProperties(ChargeProperties $ChargeProperties) 设置<p>付费类型</p>
 * @method string getInstanceName() 获取<p>实例名字</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名字</p>
 * @method string getDorisUserPwd() 获取<p>数据库密码</p>
 * @method void setDorisUserPwd(string $DorisUserPwd) 设置<p>数据库密码</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method integer getHaType() 获取<p>高可用类型：<br>0：非高可用（只有1个FE，FeSpec.CreateInstanceSpec.Count=1），<br>1：读高可用（至少需部署3个FE，FeSpec.CreateInstanceSpec.Count&gt;=3，且为奇数），<br>2：读写高可用（至少需部署5个FE，FeSpec.CreateInstanceSpec.Count&gt;=5，且为奇数）。</p>
 * @method void setHaType(integer $HaType) 设置<p>高可用类型：<br>0：非高可用（只有1个FE，FeSpec.CreateInstanceSpec.Count=1），<br>1：读高可用（至少需部署3个FE，FeSpec.CreateInstanceSpec.Count&gt;=3，且为奇数），<br>2：读写高可用（至少需部署5个FE，FeSpec.CreateInstanceSpec.Count&gt;=5，且为奇数）。</p>
 * @method integer getCaseSensitive() 获取<p>表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储</p>
 * @method void setCaseSensitive(integer $CaseSensitive) 设置<p>表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储</p>
 * @method boolean getEnableMultiZones() 获取<p>是否开启多可用区</p>
 * @method void setEnableMultiZones(boolean $EnableMultiZones) 设置<p>是否开启多可用区</p>
 * @method NetworkInfo getUserMultiZoneInfos() 获取<p>开启多可用区后，用户的所有可用区和子网信息</p>
 * @method void setUserMultiZoneInfos(NetworkInfo $UserMultiZoneInfos) 设置<p>开启多可用区后，用户的所有可用区和子网信息</p>
 * @method array getUserMultiZoneInfoArr() 获取<p>开启多可用区后，用户的所有可用区和子网信息</p>
 * @method void setUserMultiZoneInfoArr(array $UserMultiZoneInfoArr) 设置<p>开启多可用区后，用户的所有可用区和子网信息</p>
 * @method boolean getIsSSC() 获取<p>是否存算分离</p>
 * @method void setIsSSC(boolean $IsSSC) 设置<p>是否存算分离</p>
 * @method integer getSSCCU() 获取<p>CU数</p>
 * @method void setSSCCU(integer $SSCCU) 设置<p>CU数</p>
 * @method string getCacheDiskSize() 获取<p>缓存盘大小</p>
 * @method void setCacheDiskSize(string $CacheDiskSize) 设置<p>缓存盘大小</p>
 * @method integer getCacheDataDiskSize() 获取<p>缓存盘大小</p>
 * @method void setCacheDataDiskSize(integer $CacheDataDiskSize) 设置<p>缓存盘大小</p>
 * @method integer getDiskEncrypt() 获取<p>磁盘加密</p>
 * @method void setDiskEncrypt(integer $DiskEncrypt) 设置<p>磁盘加密</p>
 */
class CreateInstanceNewRequest extends AbstractModel
{
    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var CreateInstanceSpec <p>FE规格</p>
     */
    public $FeSpec;

    /**
     * @var CreateInstanceSpec <p>BE规格</p>
     */
    public $BeSpec;

    /**
     * @var boolean <p>是否高可用</p>
     */
    public $HaFlag;

    /**
     * @var string <p>用户VPCID</p>
     */
    public $UserVPCId;

    /**
     * @var string <p>用户子网ID</p>
     */
    public $UserSubnetId;

    /**
     * @var string <p>产品版本号</p>
     */
    public $ProductVersion;

    /**
     * @var ChargeProperties <p>付费类型</p>
     */
    public $ChargeProperties;

    /**
     * @var string <p>实例名字</p>
     */
    public $InstanceName;

    /**
     * @var string <p>数据库密码</p>
     */
    public $DorisUserPwd;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var integer <p>高可用类型：<br>0：非高可用（只有1个FE，FeSpec.CreateInstanceSpec.Count=1），<br>1：读高可用（至少需部署3个FE，FeSpec.CreateInstanceSpec.Count&gt;=3，且为奇数），<br>2：读写高可用（至少需部署5个FE，FeSpec.CreateInstanceSpec.Count&gt;=5，且为奇数）。</p>
     */
    public $HaType;

    /**
     * @var integer <p>表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储</p>
     */
    public $CaseSensitive;

    /**
     * @var boolean <p>是否开启多可用区</p>
     */
    public $EnableMultiZones;

    /**
     * @var NetworkInfo <p>开启多可用区后，用户的所有可用区和子网信息</p>
     * @deprecated
     */
    public $UserMultiZoneInfos;

    /**
     * @var array <p>开启多可用区后，用户的所有可用区和子网信息</p>
     */
    public $UserMultiZoneInfoArr;

    /**
     * @var boolean <p>是否存算分离</p>
     */
    public $IsSSC;

    /**
     * @var integer <p>CU数</p>
     */
    public $SSCCU;

    /**
     * @var string <p>缓存盘大小</p>
     * @deprecated
     */
    public $CacheDiskSize;

    /**
     * @var integer <p>缓存盘大小</p>
     */
    public $CacheDataDiskSize;

    /**
     * @var integer <p>磁盘加密</p>
     */
    public $DiskEncrypt;

    /**
     * @param string $Zone <p>可用区</p>
     * @param CreateInstanceSpec $FeSpec <p>FE规格</p>
     * @param CreateInstanceSpec $BeSpec <p>BE规格</p>
     * @param boolean $HaFlag <p>是否高可用</p>
     * @param string $UserVPCId <p>用户VPCID</p>
     * @param string $UserSubnetId <p>用户子网ID</p>
     * @param string $ProductVersion <p>产品版本号</p>
     * @param ChargeProperties $ChargeProperties <p>付费类型</p>
     * @param string $InstanceName <p>实例名字</p>
     * @param string $DorisUserPwd <p>数据库密码</p>
     * @param array $Tags <p>标签列表</p>
     * @param integer $HaType <p>高可用类型：<br>0：非高可用（只有1个FE，FeSpec.CreateInstanceSpec.Count=1），<br>1：读高可用（至少需部署3个FE，FeSpec.CreateInstanceSpec.Count&gt;=3，且为奇数），<br>2：读写高可用（至少需部署5个FE，FeSpec.CreateInstanceSpec.Count&gt;=5，且为奇数）。</p>
     * @param integer $CaseSensitive <p>表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储</p>
     * @param boolean $EnableMultiZones <p>是否开启多可用区</p>
     * @param NetworkInfo $UserMultiZoneInfos <p>开启多可用区后，用户的所有可用区和子网信息</p>
     * @param array $UserMultiZoneInfoArr <p>开启多可用区后，用户的所有可用区和子网信息</p>
     * @param boolean $IsSSC <p>是否存算分离</p>
     * @param integer $SSCCU <p>CU数</p>
     * @param string $CacheDiskSize <p>缓存盘大小</p>
     * @param integer $CacheDataDiskSize <p>缓存盘大小</p>
     * @param integer $DiskEncrypt <p>磁盘加密</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("FeSpec",$param) and $param["FeSpec"] !== null) {
            $this->FeSpec = new CreateInstanceSpec();
            $this->FeSpec->deserialize($param["FeSpec"]);
        }

        if (array_key_exists("BeSpec",$param) and $param["BeSpec"] !== null) {
            $this->BeSpec = new CreateInstanceSpec();
            $this->BeSpec->deserialize($param["BeSpec"]);
        }

        if (array_key_exists("HaFlag",$param) and $param["HaFlag"] !== null) {
            $this->HaFlag = $param["HaFlag"];
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

        if (array_key_exists("ChargeProperties",$param) and $param["ChargeProperties"] !== null) {
            $this->ChargeProperties = new ChargeProperties();
            $this->ChargeProperties->deserialize($param["ChargeProperties"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("DorisUserPwd",$param) and $param["DorisUserPwd"] !== null) {
            $this->DorisUserPwd = $param["DorisUserPwd"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HaType",$param) and $param["HaType"] !== null) {
            $this->HaType = $param["HaType"];
        }

        if (array_key_exists("CaseSensitive",$param) and $param["CaseSensitive"] !== null) {
            $this->CaseSensitive = $param["CaseSensitive"];
        }

        if (array_key_exists("EnableMultiZones",$param) and $param["EnableMultiZones"] !== null) {
            $this->EnableMultiZones = $param["EnableMultiZones"];
        }

        if (array_key_exists("UserMultiZoneInfos",$param) and $param["UserMultiZoneInfos"] !== null) {
            $this->UserMultiZoneInfos = new NetworkInfo();
            $this->UserMultiZoneInfos->deserialize($param["UserMultiZoneInfos"]);
        }

        if (array_key_exists("UserMultiZoneInfoArr",$param) and $param["UserMultiZoneInfoArr"] !== null) {
            $this->UserMultiZoneInfoArr = [];
            foreach ($param["UserMultiZoneInfoArr"] as $key => $value){
                $obj = new NetworkInfo();
                $obj->deserialize($value);
                array_push($this->UserMultiZoneInfoArr, $obj);
            }
        }

        if (array_key_exists("IsSSC",$param) and $param["IsSSC"] !== null) {
            $this->IsSSC = $param["IsSSC"];
        }

        if (array_key_exists("SSCCU",$param) and $param["SSCCU"] !== null) {
            $this->SSCCU = $param["SSCCU"];
        }

        if (array_key_exists("CacheDiskSize",$param) and $param["CacheDiskSize"] !== null) {
            $this->CacheDiskSize = $param["CacheDiskSize"];
        }

        if (array_key_exists("CacheDataDiskSize",$param) and $param["CacheDataDiskSize"] !== null) {
            $this->CacheDataDiskSize = $param["CacheDataDiskSize"];
        }

        if (array_key_exists("DiskEncrypt",$param) and $param["DiskEncrypt"] !== null) {
            $this->DiskEncrypt = $param["DiskEncrypt"];
        }
    }
}
