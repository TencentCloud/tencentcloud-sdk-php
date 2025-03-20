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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * serverless实例描述
 *
 * @method string getDBInstanceId() 获取实例id，唯一标识符
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例id，唯一标识符
 * @method string getDBInstanceName() 获取实例名称
 * @method void setDBInstanceName(string $DBInstanceName) 设置实例名称
 * @method string getDBInstanceStatus() 获取实例状态
 * @method void setDBInstanceStatus(string $DBInstanceStatus) 设置实例状态
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getProjectId() 获取项目id
 * @method void setProjectId(integer $ProjectId) 设置项目id
 * @method string getVpcId() 获取私有网络Id
 * @method void setVpcId(string $VpcId) 设置私有网络Id
 * @method string getSubnetId() 获取子网id
 * @method void setSubnetId(string $SubnetId) 设置子网id
 * @method string getDBCharset() 获取字符集
 * @method void setDBCharset(string $DBCharset) 设置字符集
 * @method string getDBVersion() 获取数据库版本
 * @method void setDBVersion(string $DBVersion) 设置数据库版本
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method array getDBInstanceNetInfo() 获取实例网络信息
 * @method void setDBInstanceNetInfo(array $DBInstanceNetInfo) 设置实例网络信息
 * @method array getDBAccountSet() 获取实例账户信息
 * @method void setDBAccountSet(array $DBAccountSet) 设置实例账户信息
 * @method array getDBDatabaseList() 获取实例下的db信息
 * @method void setDBDatabaseList(array $DBDatabaseList) 设置实例下的db信息
 * @method array getTagList() 获取实例绑定的标签数组
 * @method void setTagList(array $TagList) 设置实例绑定的标签数组
 * @method string getDBKernelVersion() 获取数据库内核版本
 * @method void setDBKernelVersion(string $DBKernelVersion) 设置数据库内核版本
 * @method string getDBMajorVersion() 获取数据库主要版本
 * @method void setDBMajorVersion(string $DBMajorVersion) 设置数据库主要版本
 */
class ServerlessDBInstance extends AbstractModel
{
    /**
     * @var string 实例id，唯一标识符
     */
    public $DBInstanceId;

    /**
     * @var string 实例名称
     */
    public $DBInstanceName;

    /**
     * @var string 实例状态
     */
    public $DBInstanceStatus;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer 项目id
     */
    public $ProjectId;

    /**
     * @var string 私有网络Id
     */
    public $VpcId;

    /**
     * @var string 子网id
     */
    public $SubnetId;

    /**
     * @var string 字符集
     */
    public $DBCharset;

    /**
     * @var string 数据库版本
     */
    public $DBVersion;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var array 实例网络信息
     */
    public $DBInstanceNetInfo;

    /**
     * @var array 实例账户信息
     */
    public $DBAccountSet;

    /**
     * @var array 实例下的db信息
     */
    public $DBDatabaseList;

    /**
     * @var array 实例绑定的标签数组
     */
    public $TagList;

    /**
     * @var string 数据库内核版本
     */
    public $DBKernelVersion;

    /**
     * @var string 数据库主要版本
     */
    public $DBMajorVersion;

    /**
     * @param string $DBInstanceId 实例id，唯一标识符
     * @param string $DBInstanceName 实例名称
     * @param string $DBInstanceStatus 实例状态
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param integer $ProjectId 项目id
     * @param string $VpcId 私有网络Id
     * @param string $SubnetId 子网id
     * @param string $DBCharset 字符集
     * @param string $DBVersion 数据库版本
     * @param string $CreateTime 创建时间
     * @param array $DBInstanceNetInfo 实例网络信息
     * @param array $DBAccountSet 实例账户信息
     * @param array $DBDatabaseList 实例下的db信息
     * @param array $TagList 实例绑定的标签数组
     * @param string $DBKernelVersion 数据库内核版本
     * @param string $DBMajorVersion 数据库主要版本
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("DBInstanceName",$param) and $param["DBInstanceName"] !== null) {
            $this->DBInstanceName = $param["DBInstanceName"];
        }

        if (array_key_exists("DBInstanceStatus",$param) and $param["DBInstanceStatus"] !== null) {
            $this->DBInstanceStatus = $param["DBInstanceStatus"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DBCharset",$param) and $param["DBCharset"] !== null) {
            $this->DBCharset = $param["DBCharset"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DBInstanceNetInfo",$param) and $param["DBInstanceNetInfo"] !== null) {
            $this->DBInstanceNetInfo = [];
            foreach ($param["DBInstanceNetInfo"] as $key => $value){
                $obj = new ServerlessDBInstanceNetInfo();
                $obj->deserialize($value);
                array_push($this->DBInstanceNetInfo, $obj);
            }
        }

        if (array_key_exists("DBAccountSet",$param) and $param["DBAccountSet"] !== null) {
            $this->DBAccountSet = [];
            foreach ($param["DBAccountSet"] as $key => $value){
                $obj = new ServerlessDBAccount();
                $obj->deserialize($value);
                array_push($this->DBAccountSet, $obj);
            }
        }

        if (array_key_exists("DBDatabaseList",$param) and $param["DBDatabaseList"] !== null) {
            $this->DBDatabaseList = $param["DBDatabaseList"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("DBKernelVersion",$param) and $param["DBKernelVersion"] !== null) {
            $this->DBKernelVersion = $param["DBKernelVersion"];
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }
    }
}
