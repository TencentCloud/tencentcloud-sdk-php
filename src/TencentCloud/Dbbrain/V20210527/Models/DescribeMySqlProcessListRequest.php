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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMySqlProcessList请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method integer getID() 获取线程的ID，用于筛选线程列表。
 * @method void setID(integer $ID) 设置线程的ID，用于筛选线程列表。
 * @method string getUser() 获取线程的操作账号名，用于筛选线程列表。
 * @method void setUser(string $User) 设置线程的操作账号名，用于筛选线程列表。
 * @method string getHost() 获取线程的操作主机地址，用于筛选线程列表。
 * @method void setHost(string $Host) 设置线程的操作主机地址，用于筛选线程列表。
 * @method string getDB() 获取线程的操作数据库，用于筛选线程列表。
 * @method void setDB(string $DB) 设置线程的操作数据库，用于筛选线程列表。
 * @method string getState() 获取线程的操作状态。包含以下枚举值：Sending data​-线程正在处理查询结果， ​Sorting result​-线程正在对查询结果进行排序​，Creating tmp table​-线程正在创建临时表，Altering table​-线程正在执行表结构变更，Updating-线程执行更新中。
 * @method void setState(string $State) 设置线程的操作状态。包含以下枚举值：Sending data​-线程正在处理查询结果， ​Sorting result​-线程正在对查询结果进行排序​，Creating tmp table​-线程正在创建临时表，Altering table​-线程正在执行表结构变更，Updating-线程执行更新中。
 * @method string getCommand() 获取线程的执行类型。包含以下枚举值：Sleep-线程处于空闲状态，Query-线程正在执行一个查询，Connect-从服务器连接到主服务器，Execute-线程正在执行预处理语句。
 * @method void setCommand(string $Command) 设置线程的执行类型。包含以下枚举值：Sleep-线程处于空闲状态，Query-线程正在执行一个查询，Connect-从服务器连接到主服务器，Execute-线程正在执行预处理语句。
 * @method integer getTime() 获取线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。
 * @method void setTime(integer $Time) 设置线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。
 * @method string getInfo() 获取线程的操作语句，用于筛选线程列表。
 * @method void setInfo(string $Info) 设置线程的操作语句，用于筛选线程列表。
 * @method integer getLimit() 获取返回数量，默认20。
 * @method void setLimit(integer $Limit) 设置返回数量，默认20。
 * @method string getProduct() 获取服务产品类型，支持值："mysql" - 云数据库 MySQL；"mariadb"-mariadb;"cynosdb"-TDSQL-C for MySQL ;"dcdb"-TDSQL MySQL 默认为"mysql"。


 * @method void setProduct(string $Product) 设置服务产品类型，支持值："mysql" - 云数据库 MySQL；"mariadb"-mariadb;"cynosdb"-TDSQL-C for MySQL ;"dcdb"-TDSQL MySQL 默认为"mysql"。


 * @method array getStatDimensions() 获取会话统计的维度信息,可以多个维度。
 * @method void setStatDimensions(array $StatDimensions) 设置会话统计的维度信息,可以多个维度。
 */
class DescribeMySqlProcessListRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     */
    public $InstanceId;

    /**
     * @var integer 线程的ID，用于筛选线程列表。
     */
    public $ID;

    /**
     * @var string 线程的操作账号名，用于筛选线程列表。
     */
    public $User;

    /**
     * @var string 线程的操作主机地址，用于筛选线程列表。
     */
    public $Host;

    /**
     * @var string 线程的操作数据库，用于筛选线程列表。
     */
    public $DB;

    /**
     * @var string 线程的操作状态。包含以下枚举值：Sending data​-线程正在处理查询结果， ​Sorting result​-线程正在对查询结果进行排序​，Creating tmp table​-线程正在创建临时表，Altering table​-线程正在执行表结构变更，Updating-线程执行更新中。
     */
    public $State;

    /**
     * @var string 线程的执行类型。包含以下枚举值：Sleep-线程处于空闲状态，Query-线程正在执行一个查询，Connect-从服务器连接到主服务器，Execute-线程正在执行预处理语句。
     */
    public $Command;

    /**
     * @var integer 线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。
     */
    public $Time;

    /**
     * @var string 线程的操作语句，用于筛选线程列表。
     */
    public $Info;

    /**
     * @var integer 返回数量，默认20。
     */
    public $Limit;

    /**
     * @var string 服务产品类型，支持值："mysql" - 云数据库 MySQL；"mariadb"-mariadb;"cynosdb"-TDSQL-C for MySQL ;"dcdb"-TDSQL MySQL 默认为"mysql"。


     */
    public $Product;

    /**
     * @var array 会话统计的维度信息,可以多个维度。
     */
    public $StatDimensions;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     * @param integer $ID 线程的ID，用于筛选线程列表。
     * @param string $User 线程的操作账号名，用于筛选线程列表。
     * @param string $Host 线程的操作主机地址，用于筛选线程列表。
     * @param string $DB 线程的操作数据库，用于筛选线程列表。
     * @param string $State 线程的操作状态。包含以下枚举值：Sending data​-线程正在处理查询结果， ​Sorting result​-线程正在对查询结果进行排序​，Creating tmp table​-线程正在创建临时表，Altering table​-线程正在执行表结构变更，Updating-线程执行更新中。
     * @param string $Command 线程的执行类型。包含以下枚举值：Sleep-线程处于空闲状态，Query-线程正在执行一个查询，Connect-从服务器连接到主服务器，Execute-线程正在执行预处理语句。
     * @param integer $Time 线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。
     * @param string $Info 线程的操作语句，用于筛选线程列表。
     * @param integer $Limit 返回数量，默认20。
     * @param string $Product 服务产品类型，支持值："mysql" - 云数据库 MySQL；"mariadb"-mariadb;"cynosdb"-TDSQL-C for MySQL ;"dcdb"-TDSQL MySQL 默认为"mysql"。


     * @param array $StatDimensions 会话统计的维度信息,可以多个维度。
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

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("DB",$param) and $param["DB"] !== null) {
            $this->DB = $param["DB"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("StatDimensions",$param) and $param["StatDimensions"] !== null) {
            $this->StatDimensions = [];
            foreach ($param["StatDimensions"] as $key => $value){
                $obj = new StatDimension();
                $obj->deserialize($value);
                array_push($this->StatDimensions, $obj);
            }
        }
    }
}
