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
 * CreateInstanceNew请求参数结构体
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method CreateInstanceSpec getFeSpec() 获取FE规格
 * @method void setFeSpec(CreateInstanceSpec $FeSpec) 设置FE规格
 * @method CreateInstanceSpec getBeSpec() 获取BE规格
 * @method void setBeSpec(CreateInstanceSpec $BeSpec) 设置BE规格
 * @method boolean getHaFlag() 获取是否高可用
 * @method void setHaFlag(boolean $HaFlag) 设置是否高可用
 * @method string getUserVPCId() 获取用户VPCID
 * @method void setUserVPCId(string $UserVPCId) 设置用户VPCID
 * @method string getUserSubnetId() 获取用户子网ID
 * @method void setUserSubnetId(string $UserSubnetId) 设置用户子网ID
 * @method string getProductVersion() 获取产品版本号
 * @method void setProductVersion(string $ProductVersion) 设置产品版本号
 * @method ChargeProperties getChargeProperties() 获取付费类型
 * @method void setChargeProperties(ChargeProperties $ChargeProperties) 设置付费类型
 * @method string getInstanceName() 获取实例名字
 * @method void setInstanceName(string $InstanceName) 设置实例名字
 * @method string getDorisUserPwd() 获取数据库密码
 * @method void setDorisUserPwd(string $DorisUserPwd) 设置数据库密码
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method integer getHaType() 获取高可用类型：0：非高可用，1：读高可用，2：读写高可用。
 * @method void setHaType(integer $HaType) 设置高可用类型：0：非高可用，1：读高可用，2：读写高可用。
 * @method integer getCaseSensitive() 获取表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储
 * @method void setCaseSensitive(integer $CaseSensitive) 设置表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储
 */
class CreateInstanceNewRequest extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var CreateInstanceSpec FE规格
     */
    public $FeSpec;

    /**
     * @var CreateInstanceSpec BE规格
     */
    public $BeSpec;

    /**
     * @var boolean 是否高可用
     */
    public $HaFlag;

    /**
     * @var string 用户VPCID
     */
    public $UserVPCId;

    /**
     * @var string 用户子网ID
     */
    public $UserSubnetId;

    /**
     * @var string 产品版本号
     */
    public $ProductVersion;

    /**
     * @var ChargeProperties 付费类型
     */
    public $ChargeProperties;

    /**
     * @var string 实例名字
     */
    public $InstanceName;

    /**
     * @var string 数据库密码
     */
    public $DorisUserPwd;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var integer 高可用类型：0：非高可用，1：读高可用，2：读写高可用。
     */
    public $HaType;

    /**
     * @var integer 表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储
     */
    public $CaseSensitive;

    /**
     * @param string $Zone 可用区
     * @param CreateInstanceSpec $FeSpec FE规格
     * @param CreateInstanceSpec $BeSpec BE规格
     * @param boolean $HaFlag 是否高可用
     * @param string $UserVPCId 用户VPCID
     * @param string $UserSubnetId 用户子网ID
     * @param string $ProductVersion 产品版本号
     * @param ChargeProperties $ChargeProperties 付费类型
     * @param string $InstanceName 实例名字
     * @param string $DorisUserPwd 数据库密码
     * @param array $Tags 标签列表
     * @param integer $HaType 高可用类型：0：非高可用，1：读高可用，2：读写高可用。
     * @param integer $CaseSensitive 表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储
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
    }
}
