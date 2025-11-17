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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据流动信息
 *
 * @method string getDataFlowId() 获取数据流动管理 ID
 * @method void setDataFlowId(string $DataFlowId) 设置数据流动管理 ID
 * @method string getDataFlowName() 获取数据流动名称
 * @method void setDataFlowName(string $DataFlowName) 设置数据流动名称
 * @method string getSourceStorageType() 获取源端数据类型
 * @method void setSourceStorageType(string $SourceStorageType) 设置源端数据类型
 * @method string getSourceStorageAddress() 获取源端存储地址
 * @method void setSourceStorageAddress(string $SourceStorageAddress) 设置源端存储地址
 * @method string getSourcePath() 获取源端路径
 * @method void setSourcePath(string $SourcePath) 设置源端路径
 * @method string getTargetPath() 获取目录路径
 * @method void setTargetPath(string $TargetPath) 设置目录路径
 * @method string getStatus() 获取available：已生效
pending：配置中
unavailable：失效
deleting：删除中
 * @method void setStatus(string $Status) 设置available：已生效
pending：配置中
unavailable：失效
deleting：删除中
 * @method string getCreationTime() 获取创建时间
 * @method void setCreationTime(string $CreationTime) 设置创建时间
 * @method string getFileSystemId() 获取文件系统 ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID
 * @method integer getAutoRefresh() 获取0：不开启自动更新

1：开启自动更新
 * @method void setAutoRefresh(integer $AutoRefresh) 设置0：不开启自动更新

1：开启自动更新
 * @method string getUserKafkaTopic() 获取KafkaConsumer 消费时使用的Topic参数
 * @method void setUserKafkaTopic(string $UserKafkaTopic) 设置KafkaConsumer 消费时使用的Topic参数
 * @method string getServerAddr() 获取服务地址
 * @method void setServerAddr(string $ServerAddr) 设置服务地址
 * @method string getUserName() 获取Kafka消费用户名
 * @method void setUserName(string $UserName) 设置Kafka消费用户名
 * @method string getAutoRefreshStatus() 获取自动刷新的状态，available：已生效
pending：配置中
unavailable：失效
 * @method void setAutoRefreshStatus(string $AutoRefreshStatus) 设置自动刷新的状态，available：已生效
pending：配置中
unavailable：失效
 * @method string getAutoRefreshTime() 获取自动刷新开启时间
 * @method void setAutoRefreshTime(string $AutoRefreshTime) 设置自动刷新开启时间
 */
class DataFlowInfo extends AbstractModel
{
    /**
     * @var string 数据流动管理 ID
     */
    public $DataFlowId;

    /**
     * @var string 数据流动名称
     */
    public $DataFlowName;

    /**
     * @var string 源端数据类型
     */
    public $SourceStorageType;

    /**
     * @var string 源端存储地址
     */
    public $SourceStorageAddress;

    /**
     * @var string 源端路径
     */
    public $SourcePath;

    /**
     * @var string 目录路径
     */
    public $TargetPath;

    /**
     * @var string available：已生效
pending：配置中
unavailable：失效
deleting：删除中
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreationTime;

    /**
     * @var string 文件系统 ID
     */
    public $FileSystemId;

    /**
     * @var integer 0：不开启自动更新

1：开启自动更新
     */
    public $AutoRefresh;

    /**
     * @var string KafkaConsumer 消费时使用的Topic参数
     */
    public $UserKafkaTopic;

    /**
     * @var string 服务地址
     */
    public $ServerAddr;

    /**
     * @var string Kafka消费用户名
     */
    public $UserName;

    /**
     * @var string 自动刷新的状态，available：已生效
pending：配置中
unavailable：失效
     */
    public $AutoRefreshStatus;

    /**
     * @var string 自动刷新开启时间
     */
    public $AutoRefreshTime;

    /**
     * @param string $DataFlowId 数据流动管理 ID
     * @param string $DataFlowName 数据流动名称
     * @param string $SourceStorageType 源端数据类型
     * @param string $SourceStorageAddress 源端存储地址
     * @param string $SourcePath 源端路径
     * @param string $TargetPath 目录路径
     * @param string $Status available：已生效
pending：配置中
unavailable：失效
deleting：删除中
     * @param string $CreationTime 创建时间
     * @param string $FileSystemId 文件系统 ID
     * @param integer $AutoRefresh 0：不开启自动更新

1：开启自动更新
     * @param string $UserKafkaTopic KafkaConsumer 消费时使用的Topic参数
     * @param string $ServerAddr 服务地址
     * @param string $UserName Kafka消费用户名
     * @param string $AutoRefreshStatus 自动刷新的状态，available：已生效
pending：配置中
unavailable：失效
     * @param string $AutoRefreshTime 自动刷新开启时间
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
        if (array_key_exists("DataFlowId",$param) and $param["DataFlowId"] !== null) {
            $this->DataFlowId = $param["DataFlowId"];
        }

        if (array_key_exists("DataFlowName",$param) and $param["DataFlowName"] !== null) {
            $this->DataFlowName = $param["DataFlowName"];
        }

        if (array_key_exists("SourceStorageType",$param) and $param["SourceStorageType"] !== null) {
            $this->SourceStorageType = $param["SourceStorageType"];
        }

        if (array_key_exists("SourceStorageAddress",$param) and $param["SourceStorageAddress"] !== null) {
            $this->SourceStorageAddress = $param["SourceStorageAddress"];
        }

        if (array_key_exists("SourcePath",$param) and $param["SourcePath"] !== null) {
            $this->SourcePath = $param["SourcePath"];
        }

        if (array_key_exists("TargetPath",$param) and $param["TargetPath"] !== null) {
            $this->TargetPath = $param["TargetPath"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("AutoRefresh",$param) and $param["AutoRefresh"] !== null) {
            $this->AutoRefresh = $param["AutoRefresh"];
        }

        if (array_key_exists("UserKafkaTopic",$param) and $param["UserKafkaTopic"] !== null) {
            $this->UserKafkaTopic = $param["UserKafkaTopic"];
        }

        if (array_key_exists("ServerAddr",$param) and $param["ServerAddr"] !== null) {
            $this->ServerAddr = $param["ServerAddr"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("AutoRefreshStatus",$param) and $param["AutoRefreshStatus"] !== null) {
            $this->AutoRefreshStatus = $param["AutoRefreshStatus"];
        }

        if (array_key_exists("AutoRefreshTime",$param) and $param["AutoRefreshTime"] !== null) {
            $this->AutoRefreshTime = $param["AutoRefreshTime"];
        }
    }
}
