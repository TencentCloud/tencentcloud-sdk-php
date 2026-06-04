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
 * @method string getInstanceId() 获取<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。<strong>其中 dcdb(即TDSQL MySQL) 的查询入参InstanceId特殊，需要使用 ClusterId + &amp; + InstanceId 来组合代替， 如：<code>tdsqlshard-s1230&amp;shard-abcd</code></strong></p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。<strong>其中 dcdb(即TDSQL MySQL) 的查询入参InstanceId特殊，需要使用 ClusterId + &amp; + InstanceId 来组合代替， 如：<code>tdsqlshard-s1230&amp;shard-abcd</code></strong></p>
 * @method integer getID() 获取<p>线程的ID，用于筛选线程列表。</p>
 * @method void setID(integer $ID) 设置<p>线程的ID，用于筛选线程列表。</p>
 * @method string getUser() 获取<p>线程的操作账号名，用于筛选线程列表。</p>
 * @method void setUser(string $User) 设置<p>线程的操作账号名，用于筛选线程列表。</p>
 * @method string getHost() 获取<p>线程的操作主机地址，用于筛选线程列表。</p>
 * @method void setHost(string $Host) 设置<p>线程的操作主机地址，用于筛选线程列表。</p>
 * @method string getDB() 获取<p>线程的操作数据库，用于筛选线程列表。</p>
 * @method void setDB(string $DB) 设置<p>线程的操作数据库，用于筛选线程列表。</p>
 * @method string getState() 获取<p>线程的操作状态。包含以下枚举值：Sending data​-线程正在处理查询结果， ​Sorting result​-线程正在对查询结果进行排序​，Creating tmp table​-线程正在创建临时表，Altering table​-线程正在执行表结构变更，Updating-线程执行更新中。</p>
 * @method void setState(string $State) 设置<p>线程的操作状态。包含以下枚举值：Sending data​-线程正在处理查询结果， ​Sorting result​-线程正在对查询结果进行排序​，Creating tmp table​-线程正在创建临时表，Altering table​-线程正在执行表结构变更，Updating-线程执行更新中。</p>
 * @method string getCommand() 获取<p>线程的执行类型。包含以下枚举值：Sleep-线程处于空闲状态，Query-线程正在执行一个查询，Connect-从服务器连接到主服务器，Execute-线程正在执行预处理语句。</p>
 * @method void setCommand(string $Command) 设置<p>线程的执行类型。包含以下枚举值：Sleep-线程处于空闲状态，Query-线程正在执行一个查询，Connect-从服务器连接到主服务器，Execute-线程正在执行预处理语句。</p>
 * @method integer getTime() 获取<p>线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。</p>
 * @method void setTime(integer $Time) 设置<p>线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。</p>
 * @method string getInfo() 获取<p>线程的操作语句，用于筛选线程列表。</p>
 * @method void setInfo(string $Info) 设置<p>线程的操作语句，用于筛选线程列表。</p>
 * @method integer getLimit() 获取<p>返回数量，默认20。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认20。</p>
 * @method string getProduct() 获取<p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;mariadb&quot;-mariadb;&quot;cynosdb&quot;-TDSQL-C for MySQL ;&quot;dcdb&quot;-TDSQL MySQL 默认为&quot;mysql&quot;。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;mariadb&quot;-mariadb;&quot;cynosdb&quot;-TDSQL-C for MySQL ;&quot;dcdb&quot;-TDSQL MySQL 默认为&quot;mysql&quot;。</p>
 * @method array getStatDimensions() 获取<p>会话统计的维度信息,可以多个维度。</p>
 * @method void setStatDimensions(array $StatDimensions) 设置<p>会话统计的维度信息,可以多个维度。</p>
 */
class DescribeMySqlProcessListRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。<strong>其中 dcdb(即TDSQL MySQL) 的查询入参InstanceId特殊，需要使用 ClusterId + &amp; + InstanceId 来组合代替， 如：<code>tdsqlshard-s1230&amp;shard-abcd</code></strong></p>
     */
    public $InstanceId;

    /**
     * @var integer <p>线程的ID，用于筛选线程列表。</p>
     */
    public $ID;

    /**
     * @var string <p>线程的操作账号名，用于筛选线程列表。</p>
     */
    public $User;

    /**
     * @var string <p>线程的操作主机地址，用于筛选线程列表。</p>
     */
    public $Host;

    /**
     * @var string <p>线程的操作数据库，用于筛选线程列表。</p>
     */
    public $DB;

    /**
     * @var string <p>线程的操作状态。包含以下枚举值：Sending data​-线程正在处理查询结果， ​Sorting result​-线程正在对查询结果进行排序​，Creating tmp table​-线程正在创建临时表，Altering table​-线程正在执行表结构变更，Updating-线程执行更新中。</p>
     */
    public $State;

    /**
     * @var string <p>线程的执行类型。包含以下枚举值：Sleep-线程处于空闲状态，Query-线程正在执行一个查询，Connect-从服务器连接到主服务器，Execute-线程正在执行预处理语句。</p>
     */
    public $Command;

    /**
     * @var integer <p>线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。</p>
     */
    public $Time;

    /**
     * @var string <p>线程的操作语句，用于筛选线程列表。</p>
     */
    public $Info;

    /**
     * @var integer <p>返回数量，默认20。</p>
     */
    public $Limit;

    /**
     * @var string <p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;mariadb&quot;-mariadb;&quot;cynosdb&quot;-TDSQL-C for MySQL ;&quot;dcdb&quot;-TDSQL MySQL 默认为&quot;mysql&quot;。</p>
     */
    public $Product;

    /**
     * @var array <p>会话统计的维度信息,可以多个维度。</p>
     */
    public $StatDimensions;

    /**
     * @param string $InstanceId <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。<strong>其中 dcdb(即TDSQL MySQL) 的查询入参InstanceId特殊，需要使用 ClusterId + &amp; + InstanceId 来组合代替， 如：<code>tdsqlshard-s1230&amp;shard-abcd</code></strong></p>
     * @param integer $ID <p>线程的ID，用于筛选线程列表。</p>
     * @param string $User <p>线程的操作账号名，用于筛选线程列表。</p>
     * @param string $Host <p>线程的操作主机地址，用于筛选线程列表。</p>
     * @param string $DB <p>线程的操作数据库，用于筛选线程列表。</p>
     * @param string $State <p>线程的操作状态。包含以下枚举值：Sending data​-线程正在处理查询结果， ​Sorting result​-线程正在对查询结果进行排序​，Creating tmp table​-线程正在创建临时表，Altering table​-线程正在执行表结构变更，Updating-线程执行更新中。</p>
     * @param string $Command <p>线程的执行类型。包含以下枚举值：Sleep-线程处于空闲状态，Query-线程正在执行一个查询，Connect-从服务器连接到主服务器，Execute-线程正在执行预处理语句。</p>
     * @param integer $Time <p>线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。</p>
     * @param string $Info <p>线程的操作语句，用于筛选线程列表。</p>
     * @param integer $Limit <p>返回数量，默认20。</p>
     * @param string $Product <p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;mariadb&quot;-mariadb;&quot;cynosdb&quot;-TDSQL-C for MySQL ;&quot;dcdb&quot;-TDSQL MySQL 默认为&quot;mysql&quot;。</p>
     * @param array $StatDimensions <p>会话统计的维度信息,可以多个维度。</p>
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
