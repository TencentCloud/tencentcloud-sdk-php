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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrationJobs请求参数结构体
 *
 * @method string getJobId() 获取数据迁移任务ID，如：dts-amm1jw5q
 * @method void setJobId(string $JobId) 设置数据迁移任务ID，如：dts-amm1jw5q
 * @method string getJobName() 获取数据迁移任务名称
 * @method void setJobName(string $JobName) 设置数据迁移任务名称
 * @method array getStatus() 获取数据迁移任务状态，可取值包括：created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行中)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)
 * @method void setStatus(array $Status) 设置数据迁移任务状态，可取值包括：created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行中)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)
 * @method string getSrcInstanceId() 获取源实例ID，格式如：cdb-c1nl9rpv
 * @method void setSrcInstanceId(string $SrcInstanceId) 设置源实例ID，格式如：cdb-c1nl9rpv
 * @method string getSrcRegion() 获取源实例地域，如：ap-guangzhou
 * @method void setSrcRegion(string $SrcRegion) 设置源实例地域，如：ap-guangzhou
 * @method array getSrcDatabaseType() 获取源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql
 * @method void setSrcDatabaseType(array $SrcDatabaseType) 设置源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql
 * @method array getSrcAccessType() 获取源实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)
 * @method void setSrcAccessType(array $SrcAccessType) 设置源实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)
 * @method string getDstInstanceId() 获取目标实例ID，格式如：cdb-c1nl9rpv
 * @method void setDstInstanceId(string $DstInstanceId) 设置目标实例ID，格式如：cdb-c1nl9rpv
 * @method string getDstRegion() 获取目标实例地域，如：ap-guangzhou
 * @method void setDstRegion(string $DstRegion) 设置目标实例地域，如：ap-guangzhou
 * @method array getDstDatabaseType() 获取目标源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql
 * @method void setDstDatabaseType(array $DstDatabaseType) 设置目标源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql
 * @method array getDstAccessType() 获取目标实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)
 * @method void setDstAccessType(array $DstAccessType) 设置目标实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)
 * @method string getRunMode() 获取任务运行模式，值包括：immediate(立即运行)，timed(定时运行)
 * @method void setRunMode(string $RunMode) 设置任务运行模式，值包括：immediate(立即运行)，timed(定时运行)
 * @method string getOrderSeq() 获取排序方式，可能取值为asc、desc，默认按照创建时间倒序
 * @method void setOrderSeq(string $OrderSeq) 设置排序方式，可能取值为asc、desc，默认按照创建时间倒序
 * @method integer getLimit() 获取返回实例数量，默认20，有效区间[1,100]
 * @method void setLimit(integer $Limit) 设置返回实例数量，默认20，有效区间[1,100]
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method array getTagFilters() 获取标签过滤
 * @method void setTagFilters(array $TagFilters) 设置标签过滤
 */
class DescribeMigrationJobsRequest extends AbstractModel
{
    /**
     * @var string 数据迁移任务ID，如：dts-amm1jw5q
     */
    public $JobId;

    /**
     * @var string 数据迁移任务名称
     */
    public $JobName;

    /**
     * @var array 数据迁移任务状态，可取值包括：created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行中)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)
     */
    public $Status;

    /**
     * @var string 源实例ID，格式如：cdb-c1nl9rpv
     */
    public $SrcInstanceId;

    /**
     * @var string 源实例地域，如：ap-guangzhou
     */
    public $SrcRegion;

    /**
     * @var array 源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql
     */
    public $SrcDatabaseType;

    /**
     * @var array 源实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)
     */
    public $SrcAccessType;

    /**
     * @var string 目标实例ID，格式如：cdb-c1nl9rpv
     */
    public $DstInstanceId;

    /**
     * @var string 目标实例地域，如：ap-guangzhou
     */
    public $DstRegion;

    /**
     * @var array 目标源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql
     */
    public $DstDatabaseType;

    /**
     * @var array 目标实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)
     */
    public $DstAccessType;

    /**
     * @var string 任务运行模式，值包括：immediate(立即运行)，timed(定时运行)
     */
    public $RunMode;

    /**
     * @var string 排序方式，可能取值为asc、desc，默认按照创建时间倒序
     */
    public $OrderSeq;

    /**
     * @var integer 返回实例数量，默认20，有效区间[1,100]
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var array 标签过滤
     */
    public $TagFilters;

    /**
     * @param string $JobId 数据迁移任务ID，如：dts-amm1jw5q
     * @param string $JobName 数据迁移任务名称
     * @param array $Status 数据迁移任务状态，可取值包括：created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行中)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)
     * @param string $SrcInstanceId 源实例ID，格式如：cdb-c1nl9rpv
     * @param string $SrcRegion 源实例地域，如：ap-guangzhou
     * @param array $SrcDatabaseType 源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql
     * @param array $SrcAccessType 源实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)
     * @param string $DstInstanceId 目标实例ID，格式如：cdb-c1nl9rpv
     * @param string $DstRegion 目标实例地域，如：ap-guangzhou
     * @param array $DstDatabaseType 目标源实例数据库类型，如：sqlserver,mysql,mongodb,redis,tendis,keewidb,clickhouse,cynosdbmysql,percona,tdsqlpercona,mariadb,tdsqlmysql,postgresql
     * @param array $DstAccessType 目标实例接入类型，值包括：extranet(外网)、vpncloud(云vpn接入的实例)、dcg(专线接入的实例)、ccn(云联网接入的实例)、cdb(云上cdb实例)、cvm(cvm自建实例)
     * @param string $RunMode 任务运行模式，值包括：immediate(立即运行)，timed(定时运行)
     * @param string $OrderSeq 排序方式，可能取值为asc、desc，默认按照创建时间倒序
     * @param integer $Limit 返回实例数量，默认20，有效区间[1,100]
     * @param integer $Offset 偏移量，默认为0
     * @param array $TagFilters 标签过滤
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
