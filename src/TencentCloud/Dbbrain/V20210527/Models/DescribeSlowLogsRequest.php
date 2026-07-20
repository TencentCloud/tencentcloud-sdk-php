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
 * DescribeSlowLogs请求参数结构体
 *
 * @method string getProduct() 获取<p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB for MySQL，&quot;tdstore&quot; - 云数据库TDSQL Boundless，默认为&quot;mysql&quot;。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB for MySQL，&quot;tdstore&quot; - 云数据库TDSQL Boundless，默认为&quot;mysql&quot;。</p>
 * @method string getInstanceId() 获取<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method string getMd5() 获取<p>sql 模板的 md5 值，可通过 <a href="https://cloud.tencent.com/document/product/1130/57784">DescribeSlowLogTopSqls</a> 接口获取。</p>
 * @method void setMd5(string $Md5) 设置<p>sql 模板的 md5 值，可通过 <a href="https://cloud.tencent.com/document/product/1130/57784">DescribeSlowLogTopSqls</a> 接口获取。</p>
 * @method string getStartTime() 获取<p>开始时间，如“2019-09-10 12:13:14”。</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间，如“2019-09-10 12:13:14”。</p>
 * @method string getEndTime() 获取<p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
 * @method void setEndTime(string $EndTime) 设置<p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method integer getLimit() 获取<p>查询数目，默认为20，最大为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>查询数目，默认为20，最大为100。</p>
 * @method array getDB() 获取<p>数据库列表</p>
 * @method void setDB(array $DB) 设置<p>数据库列表</p>
 * @method array getKey() 获取<p>关键字</p>
 * @method void setKey(array $Key) 设置<p>关键字</p>
 * @method array getUser() 获取<p>用户</p>
 * @method void setUser(array $User) 设置<p>用户</p>
 * @method array getIp() 获取<p>IP 来源</p>
 * @method void setIp(array $Ip) 设置<p>IP 来源</p>
 * @method array getTime() 获取<p>耗时区间,耗时区间的左右边界分别对应数组的第0个元素和第一个元素</p>
 * @method void setTime(array $Time) 设置<p>耗时区间,耗时区间的左右边界分别对应数组的第0个元素和第一个元素</p>
 */
class DescribeSlowLogsRequest extends AbstractModel
{
    /**
     * @var string <p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB for MySQL，&quot;tdstore&quot; - 云数据库TDSQL Boundless，默认为&quot;mysql&quot;。</p>
     */
    public $Product;

    /**
     * @var string <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>sql 模板的 md5 值，可通过 <a href="https://cloud.tencent.com/document/product/1130/57784">DescribeSlowLogTopSqls</a> 接口获取。</p>
     */
    public $Md5;

    /**
     * @var string <p>开始时间，如“2019-09-10 12:13:14”。</p>
     */
    public $StartTime;

    /**
     * @var string <p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>查询数目，默认为20，最大为100。</p>
     */
    public $Limit;

    /**
     * @var array <p>数据库列表</p>
     */
    public $DB;

    /**
     * @var array <p>关键字</p>
     */
    public $Key;

    /**
     * @var array <p>用户</p>
     */
    public $User;

    /**
     * @var array <p>IP 来源</p>
     */
    public $Ip;

    /**
     * @var array <p>耗时区间,耗时区间的左右边界分别对应数组的第0个元素和第一个元素</p>
     */
    public $Time;

    /**
     * @param string $Product <p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB for MySQL，&quot;tdstore&quot; - 云数据库TDSQL Boundless，默认为&quot;mysql&quot;。</p>
     * @param string $InstanceId <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     * @param string $Md5 <p>sql 模板的 md5 值，可通过 <a href="https://cloud.tencent.com/document/product/1130/57784">DescribeSlowLogTopSqls</a> 接口获取。</p>
     * @param string $StartTime <p>开始时间，如“2019-09-10 12:13:14”。</p>
     * @param string $EndTime <p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param integer $Limit <p>查询数目，默认为20，最大为100。</p>
     * @param array $DB <p>数据库列表</p>
     * @param array $Key <p>关键字</p>
     * @param array $User <p>用户</p>
     * @param array $Ip <p>IP 来源</p>
     * @param array $Time <p>耗时区间,耗时区间的左右边界分别对应数组的第0个元素和第一个元素</p>
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
