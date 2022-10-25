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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecLogDeliveryKafkaSetting请求参数结构体
 *
 * @method string getInstanceID() 获取实例ID
 * @method void setInstanceID(string $InstanceID) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getUser() 获取用户名
 * @method void setUser(string $User) 设置用户名
 * @method string getPassword() 获取密码
 * @method void setPassword(string $Password) 设置密码
 * @method array getLogTypeList() 获取日志类型队列
 * @method void setLogTypeList(array $LogTypeList) 设置日志类型队列
 * @method integer getAccessType() 获取接入类型
 * @method void setAccessType(integer $AccessType) 设置接入类型
 * @method string getKafkaVersion() 获取kafka版本号
 * @method void setKafkaVersion(string $KafkaVersion) 设置kafka版本号
 * @method string getRegionID() 获取地域ID
 * @method void setRegionID(string $RegionID) 设置地域ID
 */
class ModifySecLogDeliveryKafkaSettingRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceID;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 用户名
     */
    public $User;

    /**
     * @var string 密码
     */
    public $Password;

    /**
     * @var array 日志类型队列
     */
    public $LogTypeList;

    /**
     * @var integer 接入类型
     */
    public $AccessType;

    /**
     * @var string kafka版本号
     */
    public $KafkaVersion;

    /**
     * @var string 地域ID
     */
    public $RegionID;

    /**
     * @param string $InstanceID 实例ID
     * @param string $InstanceName 实例名称
     * @param string $Domain 域名
     * @param string $User 用户名
     * @param string $Password 密码
     * @param array $LogTypeList 日志类型队列
     * @param integer $AccessType 接入类型
     * @param string $KafkaVersion kafka版本号
     * @param string $RegionID 地域ID
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("LogTypeList",$param) and $param["LogTypeList"] !== null) {
            $this->LogTypeList = [];
            foreach ($param["LogTypeList"] as $key => $value){
                $obj = new SecLogDeliveryKafkaSettingInfo();
                $obj->deserialize($value);
                array_push($this->LogTypeList, $obj);
            }
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }

        if (array_key_exists("RegionID",$param) and $param["RegionID"] !== null) {
            $this->RegionID = $param["RegionID"];
        }
    }
}
