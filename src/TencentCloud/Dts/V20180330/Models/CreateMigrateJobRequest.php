<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getJobName() 获取数据迁移任务名称
 * @method void setJobName(string $JobName) 设置数据迁移任务名称
 * @method MigrateOption getMigrateOption() 获取迁移任务配置选项
 * @method void setMigrateOption(MigrateOption $MigrateOption) 设置迁移任务配置选项
 * @method string getSrcDatabaseType() 获取源实例数据库类型:mysql,redis,mongodb
 * @method void setSrcDatabaseType(string $SrcDatabaseType) 设置源实例数据库类型:mysql,redis,mongodb
 * @method string getSrcAccessType() 获取源实例接入类型，值包括：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例)
 * @method void setSrcAccessType(string $SrcAccessType) 设置源实例接入类型，值包括：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例)
 * @method SrcInfo getSrcInfo() 获取源实例信息，具体内容跟迁移任务类型相关
 * @method void setSrcInfo(SrcInfo $SrcInfo) 设置源实例信息，具体内容跟迁移任务类型相关
 * @method string getDstDatabaseType() 获取目标实例数据库类型,mysql,redis,mongodb
 * @method void setDstDatabaseType(string $DstDatabaseType) 设置目标实例数据库类型,mysql,redis,mongodb
 * @method string getDstAccessType() 获取目标实例接入类型，值包括：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例). 目前只支持cdb.
 * @method void setDstAccessType(string $DstAccessType) 设置目标实例接入类型，值包括：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例). 目前只支持cdb.
 * @method DstInfo getDstInfo() 获取目标实例信息
 * @method void setDstInfo(DstInfo $DstInfo) 设置目标实例信息
 * @method string getDatabaseInfo() 获取需要迁移的源数据库表信息，用json格式的字符串描述。
对于database-table两级结构的数据库：
[{Database:db1,Table:[table1,table2]},{Database:db2}]
对于database-schema-table三级结构：
[{Database:db1,Schema:s1
Table:[table1,table2]},{Database:db1,Schema:s2
Table:[table1,table2]},{Database:db2,Schema:s1
Table:[table1,table2]},{Database:db3},{Database:db4
Schema:s1}]
 * @method void setDatabaseInfo(string $DatabaseInfo) 设置需要迁移的源数据库表信息，用json格式的字符串描述。
对于database-table两级结构的数据库：
[{Database:db1,Table:[table1,table2]},{Database:db2}]
对于database-schema-table三级结构：
[{Database:db1,Schema:s1
Table:[table1,table2]},{Database:db1,Schema:s2
Table:[table1,table2]},{Database:db2,Schema:s1
Table:[table1,table2]},{Database:db3},{Database:db4
Schema:s1}]
 */

/**
 *CreateMigrateJob请求参数结构体
 */
class CreateMigrateJobRequest extends AbstractModel
{
    /**
     * @var string 数据迁移任务名称
     */
    public $JobName;

    /**
     * @var MigrateOption 迁移任务配置选项
     */
    public $MigrateOption;

    /**
     * @var string 源实例数据库类型:mysql,redis,mongodb
     */
    public $SrcDatabaseType;

    /**
     * @var string 源实例接入类型，值包括：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例)
     */
    public $SrcAccessType;

    /**
     * @var SrcInfo 源实例信息，具体内容跟迁移任务类型相关
     */
    public $SrcInfo;

    /**
     * @var string 目标实例数据库类型,mysql,redis,mongodb
     */
    public $DstDatabaseType;

    /**
     * @var string 目标实例接入类型，值包括：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例). 目前只支持cdb.
     */
    public $DstAccessType;

    /**
     * @var DstInfo 目标实例信息
     */
    public $DstInfo;

    /**
     * @var string 需要迁移的源数据库表信息，用json格式的字符串描述。
对于database-table两级结构的数据库：
[{Database:db1,Table:[table1,table2]},{Database:db2}]
对于database-schema-table三级结构：
[{Database:db1,Schema:s1
Table:[table1,table2]},{Database:db1,Schema:s2
Table:[table1,table2]},{Database:db2,Schema:s1
Table:[table1,table2]},{Database:db3},{Database:db4
Schema:s1}]
     */
    public $DatabaseInfo;
    /**
     * @param string $JobName 数据迁移任务名称
     * @param MigrateOption $MigrateOption 迁移任务配置选项
     * @param string $SrcDatabaseType 源实例数据库类型:mysql,redis,mongodb
     * @param string $SrcAccessType 源实例接入类型，值包括：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例)
     * @param SrcInfo $SrcInfo 源实例信息，具体内容跟迁移任务类型相关
     * @param string $DstDatabaseType 目标实例数据库类型,mysql,redis,mongodb
     * @param string $DstAccessType 目标实例接入类型，值包括：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例). 目前只支持cdb.
     * @param DstInfo $DstInfo 目标实例信息
     * @param string $DatabaseInfo 需要迁移的源数据库表信息，用json格式的字符串描述。
对于database-table两级结构的数据库：
[{Database:db1,Table:[table1,table2]},{Database:db2}]
对于database-schema-table三级结构：
[{Database:db1,Schema:s1
Table:[table1,table2]},{Database:db1,Schema:s2
Table:[table1,table2]},{Database:db2,Schema:s1
Table:[table1,table2]},{Database:db3},{Database:db4
Schema:s1}]
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("MigrateOption",$param) and $param["MigrateOption"] !== null) {
            $this->MigrateOption = new MigrateOption();
            $this->MigrateOption->deserialize($param["MigrateOption"]);
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new SrcInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new DstInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("DatabaseInfo",$param) and $param["DatabaseInfo"] !== null) {
            $this->DatabaseInfo = $param["DatabaseInfo"];
        }
    }
}
