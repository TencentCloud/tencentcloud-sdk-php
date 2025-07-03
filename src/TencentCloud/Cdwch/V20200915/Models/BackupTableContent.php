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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份表信息
 *
 * @method string getDatabase() 获取数据库
 * @method void setDatabase(string $Database) 设置数据库
 * @method string getTable() 获取表
 * @method void setTable(string $Table) 设置表
 * @method integer getTotalBytes() 获取表总字节数
 * @method void setTotalBytes(integer $TotalBytes) 设置表总字节数
 * @method string getVCluster() 获取虚拟cluster
 * @method void setVCluster(string $VCluster) 设置虚拟cluster
 * @method string getIps() 获取表ip
 * @method void setIps(string $Ips) 设置表ip
 * @method string getZooPath() 获取zk路径
 * @method void setZooPath(string $ZooPath) 设置zk路径
 * @method string getRip() 获取cvm的ip地址
 * @method void setRip(string $Rip) 设置cvm的ip地址
 */
class BackupTableContent extends AbstractModel
{
    /**
     * @var string 数据库
     */
    public $Database;

    /**
     * @var string 表
     */
    public $Table;

    /**
     * @var integer 表总字节数
     */
    public $TotalBytes;

    /**
     * @var string 虚拟cluster
     */
    public $VCluster;

    /**
     * @var string 表ip
     */
    public $Ips;

    /**
     * @var string zk路径
     */
    public $ZooPath;

    /**
     * @var string cvm的ip地址
     */
    public $Rip;

    /**
     * @param string $Database 数据库
     * @param string $Table 表
     * @param integer $TotalBytes 表总字节数
     * @param string $VCluster 虚拟cluster
     * @param string $Ips 表ip
     * @param string $ZooPath zk路径
     * @param string $Rip cvm的ip地址
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("TotalBytes",$param) and $param["TotalBytes"] !== null) {
            $this->TotalBytes = $param["TotalBytes"];
        }

        if (array_key_exists("VCluster",$param) and $param["VCluster"] !== null) {
            $this->VCluster = $param["VCluster"];
        }

        if (array_key_exists("Ips",$param) and $param["Ips"] !== null) {
            $this->Ips = $param["Ips"];
        }

        if (array_key_exists("ZooPath",$param) and $param["ZooPath"] !== null) {
            $this->ZooPath = $param["ZooPath"];
        }

        if (array_key_exists("Rip",$param) and $param["Rip"] !== null) {
            $this->Rip = $param["Rip"];
        }
    }
}
