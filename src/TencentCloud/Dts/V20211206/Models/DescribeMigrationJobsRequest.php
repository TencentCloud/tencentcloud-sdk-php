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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrationJobs请求参数结构体
 *
 * @method string getJobId() 获取<p>数据迁移任务ID，如：dts-amm1jw5q</p>
 * @method void setJobId(string $JobId) 设置<p>数据迁移任务ID，如：dts-amm1jw5q</p>
 * @method string getJobName() 获取<p>数据迁移任务名称</p>
 * @method void setJobName(string $JobName) 设置<p>数据迁移任务名称</p>
 * @method array getStatus() 获取<p>数据迁移任务状态，可取值包括：created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行中)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)</p>
 * @method void setStatus(array $Status) 设置<p>数据迁移任务状态，可取值包括：created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行中)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)</p>
 * @method string getSrcInstanceId() 获取<p>源实例ID，格式如：cdb-c1nl9rpv</p>
 * @method void setSrcInstanceId(string $SrcInstanceId) 设置<p>源实例ID，格式如：cdb-c1nl9rpv</p>
 * @method string getSrcRegion() 获取<p>源实例地域，如：ap-guangzhou</p>
 * @method void setSrcRegion(string $SrcRegion) 设置<p>源实例地域，如：ap-guangzhou</p>
 * @method array getSrcDatabaseType() 获取<p>源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql</p>
 * @method void setSrcDatabaseType(array $SrcDatabaseType) 设置<p>源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql</p>
 * @method array getSrcAccessType() 获取<p>源实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)</p>
 * @method void setSrcAccessType(array $SrcAccessType) 设置<p>源实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)</p>
 * @method string getDstInstanceId() 获取<p>目标实例ID，格式如：cdb-c1nl9rpv</p>
 * @method void setDstInstanceId(string $DstInstanceId) 设置<p>目标实例ID，格式如：cdb-c1nl9rpv</p>
 * @method string getDstRegion() 获取<p>目标实例地域，如：ap-guangzhou</p>
 * @method void setDstRegion(string $DstRegion) 设置<p>目标实例地域，如：ap-guangzhou</p>
 * @method array getDstDatabaseType() 获取<p>目标源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql</p>
 * @method void setDstDatabaseType(array $DstDatabaseType) 设置<p>目标源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql</p>
 * @method array getDstAccessType() 获取<p>目标实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)</p>
 * @method void setDstAccessType(array $DstAccessType) 设置<p>目标实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)</p>
 * @method string getRunMode() 获取<p>任务运行模式，值包括：immediate(立即运行)，timed(定时运行)</p>
 * @method void setRunMode(string $RunMode) 设置<p>任务运行模式，值包括：immediate(立即运行)，timed(定时运行)</p>
 * @method string getOrderSeq() 获取<p>排序方式，可能取值为asc、desc，默认按照创建时间倒序</p>
 * @method void setOrderSeq(string $OrderSeq) 设置<p>排序方式，可能取值为asc、desc，默认按照创建时间倒序</p>
 * @method integer getLimit() 获取<p>返回实例数量，默认20，有效区间[1,100]</p>
 * @method void setLimit(integer $Limit) 设置<p>返回实例数量，默认20，有效区间[1,100]</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0</p>
 * @method array getTagFilters() 获取<p>标签过滤</p>
 * @method void setTagFilters(array $TagFilters) 设置<p>标签过滤</p>
 */
class DescribeMigrationJobsRequest extends AbstractModel
{
    /**
     * @var string <p>数据迁移任务ID，如：dts-amm1jw5q</p>
     */
    public $JobId;

    /**
     * @var string <p>数据迁移任务名称</p>
     */
    public $JobName;

    /**
     * @var array <p>数据迁移任务状态，可取值包括：created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行中)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)</p>
     */
    public $Status;

    /**
     * @var string <p>源实例ID，格式如：cdb-c1nl9rpv</p>
     */
    public $SrcInstanceId;

    /**
     * @var string <p>源实例地域，如：ap-guangzhou</p>
     */
    public $SrcRegion;

    /**
     * @var array <p>源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql</p>
     */
    public $SrcDatabaseType;

    /**
     * @var array <p>源实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)</p>
     */
    public $SrcAccessType;

    /**
     * @var string <p>目标实例ID，格式如：cdb-c1nl9rpv</p>
     */
    public $DstInstanceId;

    /**
     * @var string <p>目标实例地域，如：ap-guangzhou</p>
     */
    public $DstRegion;

    /**
     * @var array <p>目标源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql</p>
     */
    public $DstDatabaseType;

    /**
     * @var array <p>目标实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)</p>
     */
    public $DstAccessType;

    /**
     * @var string <p>任务运行模式，值包括：immediate(立即运行)，timed(定时运行)</p>
     */
    public $RunMode;

    /**
     * @var string <p>排序方式，可能取值为asc、desc，默认按照创建时间倒序</p>
     */
    public $OrderSeq;

    /**
     * @var integer <p>返回实例数量，默认20，有效区间[1,100]</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @var array <p>标签过滤</p>
     */
    public $TagFilters;

    /**
     * @param string $JobId <p>数据迁移任务ID，如：dts-amm1jw5q</p>
     * @param string $JobName <p>数据迁移任务名称</p>
     * @param array $Status <p>数据迁移任务状态，可取值包括：created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行中)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)</p>
     * @param string $SrcInstanceId <p>源实例ID，格式如：cdb-c1nl9rpv</p>
     * @param string $SrcRegion <p>源实例地域，如：ap-guangzhou</p>
     * @param array $SrcDatabaseType <p>源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql</p>
     * @param array $SrcAccessType <p>源实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)</p>
     * @param string $DstInstanceId <p>目标实例ID，格式如：cdb-c1nl9rpv</p>
     * @param string $DstRegion <p>目标实例地域，如：ap-guangzhou</p>
     * @param array $DstDatabaseType <p>目标源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql</p>
     * @param array $DstAccessType <p>目标实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)</p>
     * @param string $RunMode <p>任务运行模式，值包括：immediate(立即运行)，timed(定时运行)</p>
     * @param string $OrderSeq <p>排序方式，可能取值为asc、desc，默认按照创建时间倒序</p>
     * @param integer $Limit <p>返回实例数量，默认20，有效区间[1,100]</p>
     * @param integer $Offset <p>偏移量，默认为0</p>
     * @param array $TagFilters <p>标签过滤</p>
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("SrcRegion",$param) and $param["SrcRegion"] !== null) {
            $this->SrcRegion = $param["SrcRegion"];
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("DstInstanceId",$param) and $param["DstInstanceId"] !== null) {
            $this->DstInstanceId = $param["DstInstanceId"];
        }

        if (array_key_exists("DstRegion",$param) and $param["DstRegion"] !== null) {
            $this->DstRegion = $param["DstRegion"];
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("OrderSeq",$param) and $param["OrderSeq"] !== null) {
            $this->OrderSeq = $param["OrderSeq"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
