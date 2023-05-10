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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLogs请求参数结构体
 *
 * @method string getProduct() 获取服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB for MySQL，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB for MySQL，默认为"mysql"。
 * @method string getInstanceId() 获取实例id。
 * @method void setInstanceId(string $InstanceId) 设置实例id。
 * @method string getMd5() 获取sql模板的md5值
 * @method void setMd5(string $Md5) 设置sql模板的md5值
 * @method string getStartTime() 获取开始时间，如“2019-09-10 12:13:14”。
 * @method void setStartTime(string $StartTime) 设置开始时间，如“2019-09-10 12:13:14”。
 * @method string getEndTime() 获取截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。
 * @method void setEndTime(string $EndTime) 设置截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取查询数目，默认为20，最大为100。
 * @method void setLimit(integer $Limit) 设置查询数目，默认为20，最大为100。
 * @method array getDB() 获取数据库列表
 * @method void setDB(array $DB) 设置数据库列表
 * @method array getKey() 获取关键字
 * @method void setKey(array $Key) 设置关键字
 * @method array getUser() 获取用户
 * @method void setUser(array $User) 设置用户
 * @method array getIp() 获取IP
 * @method void setIp(array $Ip) 设置IP
 * @method array getTime() 获取耗时区间,耗时区间的左右边界分别对应数组的第0个元素和第一个元素
 * @method void setTime(array $Time) 设置耗时区间,耗时区间的左右边界分别对应数组的第0个元素和第一个元素
 */
class DescribeSlowLogsRequest extends AbstractModel
{
    /**
     * @var string 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB for MySQL，默认为"mysql"。
     */
    public $Product;

    /**
     * @var string 实例id。
     */
    public $InstanceId;

    /**
     * @var string sql模板的md5值
     */
    public $Md5;

    /**
     * @var string 开始时间，如“2019-09-10 12:13:14”。
     */
    public $StartTime;

    /**
     * @var string 截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。
     */
    public $EndTime;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 查询数目，默认为20，最大为100。
     */
    public $Limit;

    /**
     * @var array 数据库列表
     */
    public $DB;

    /**
     * @var array 关键字
     */
    public $Key;

    /**
     * @var array 用户
     */
    public $User;

    /**
     * @var array IP
     */
    public $Ip;

    /**
     * @var array 耗时区间,耗时区间的左右边界分别对应数组的第0个元素和第一个元素
     */
    public $Time;

    /**
     * @param string $Product 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB for MySQL，默认为"mysql"。
     * @param string $InstanceId 实例id。
     * @param string $Md5 sql模板的md5值
     * @param string $StartTime 开始时间，如“2019-09-10 12:13:14”。
     * @param string $EndTime 截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 查询数目，默认为20，最大为100。
     * @param array $DB 数据库列表
     * @param array $Key 关键字
     * @param array $User 用户
     * @param array $Ip IP
     * @param array $Time 耗时区间,耗时区间的左右边界分别对应数组的第0个元素和第一个元素
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DB",$param) and $param["DB"] !== null) {
            $this->DB = $param["DB"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}
