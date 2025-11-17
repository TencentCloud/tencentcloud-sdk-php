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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集成集群配置
 *
 * @method integer getBinlogSaveDays() 获取binlog保留天数[7,1830]
 * @method void setBinlogSaveDays(integer $BinlogSaveDays) 设置binlog保留天数[7,1830]
 * @method integer getBackupSaveDays() 获取备份保留天数[7,1830]
 * @method void setBackupSaveDays(integer $BackupSaveDays) 设置备份保留天数[7,1830]
 * @method integer getSemiSyncTimeout() 获取半同步超时时间[1000,4294967295]
 * @method void setSemiSyncTimeout(integer $SemiSyncTimeout) 设置半同步超时时间[1000,4294967295]
 * @method array getProxyEndPointConfigs() 获取proxy连接地址配置信息
 * @method void setProxyEndPointConfigs(array $ProxyEndPointConfigs) 设置proxy连接地址配置信息
 */
class IntegrateCreateClusterConfig extends AbstractModel
{
    /**
     * @var integer binlog保留天数[7,1830]
     */
    public $BinlogSaveDays;

    /**
     * @var integer 备份保留天数[7,1830]
     */
    public $BackupSaveDays;

    /**
     * @var integer 半同步超时时间[1000,4294967295]
     */
    public $SemiSyncTimeout;

    /**
     * @var array proxy连接地址配置信息
     */
    public $ProxyEndPointConfigs;

    /**
     * @param integer $BinlogSaveDays binlog保留天数[7,1830]
     * @param integer $BackupSaveDays 备份保留天数[7,1830]
     * @param integer $SemiSyncTimeout 半同步超时时间[1000,4294967295]
     * @param array $ProxyEndPointConfigs proxy连接地址配置信息
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
        if (array_key_exists("BinlogSaveDays",$param) and $param["BinlogSaveDays"] !== null) {
            $this->BinlogSaveDays = $param["BinlogSaveDays"];
        }

        if (array_key_exists("BackupSaveDays",$param) and $param["BackupSaveDays"] !== null) {
            $this->BackupSaveDays = $param["BackupSaveDays"];
        }

        if (array_key_exists("SemiSyncTimeout",$param) and $param["SemiSyncTimeout"] !== null) {
            $this->SemiSyncTimeout = $param["SemiSyncTimeout"];
        }

        if (array_key_exists("ProxyEndPointConfigs",$param) and $param["ProxyEndPointConfigs"] !== null) {
            $this->ProxyEndPointConfigs = [];
            foreach ($param["ProxyEndPointConfigs"] as $key => $value){
                $obj = new ProxyEndPointConfigInfo();
                $obj->deserialize($value);
                array_push($this->ProxyEndPointConfigs, $obj);
            }
        }
    }
}
