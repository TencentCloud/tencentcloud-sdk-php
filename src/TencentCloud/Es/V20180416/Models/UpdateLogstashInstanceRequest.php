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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateLogstashInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getNodeNum() 获取实例节点数量
 * @method void setNodeNum(integer $NodeNum) 设置实例节点数量
 * @method string getYMLConfig() 获取实例YML配置
 * @method void setYMLConfig(string $YMLConfig) 设置实例YML配置
 * @method LogstashBindedES getBindedES() 获取实例绑定的ES集群信息
 * @method void setBindedES(LogstashBindedES $BindedES) 设置实例绑定的ES集群信息
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method array getExtendedFiles() 获取扩展文件列表
 * @method void setExtendedFiles(array $ExtendedFiles) 设置扩展文件列表
 * @method string getNodeType() 获取实例规格
 * @method void setNodeType(string $NodeType) 设置实例规格
 * @method integer getDiskSize() 获取节点磁盘容量
 * @method void setDiskSize(integer $DiskSize) 设置节点磁盘容量
 * @method OperationDurationUpdated getOperationDuration() 获取可维护时间段
 * @method void setOperationDuration(OperationDurationUpdated $OperationDuration) 设置可维护时间段
 */
class UpdateLogstashInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 实例节点数量
     */
    public $NodeNum;

    /**
     * @var string 实例YML配置
     */
    public $YMLConfig;

    /**
     * @var LogstashBindedES 实例绑定的ES集群信息
     */
    public $BindedES;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var array 扩展文件列表
     */
    public $ExtendedFiles;

    /**
     * @var string 实例规格
     */
    public $NodeType;

    /**
     * @var integer 节点磁盘容量
     */
    public $DiskSize;

    /**
     * @var OperationDurationUpdated 可维护时间段
     */
    public $OperationDuration;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $NodeNum 实例节点数量
     * @param string $YMLConfig 实例YML配置
     * @param LogstashBindedES $BindedES 实例绑定的ES集群信息
     * @param string $InstanceName 实例名称
     * @param array $ExtendedFiles 扩展文件列表
     * @param string $NodeType 实例规格
     * @param integer $DiskSize 节点磁盘容量
     * @param OperationDurationUpdated $OperationDuration 可维护时间段
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

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("YMLConfig",$param) and $param["YMLConfig"] !== null) {
            $this->YMLConfig = $param["YMLConfig"];
        }

        if (array_key_exists("BindedES",$param) and $param["BindedES"] !== null) {
            $this->BindedES = new LogstashBindedES();
            $this->BindedES->deserialize($param["BindedES"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ExtendedFiles",$param) and $param["ExtendedFiles"] !== null) {
            $this->ExtendedFiles = [];
            foreach ($param["ExtendedFiles"] as $key => $value){
                $obj = new LogstashExtendedFile();
                $obj->deserialize($value);
                array_push($this->ExtendedFiles, $obj);
            }
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("OperationDuration",$param) and $param["OperationDuration"] !== null) {
            $this->OperationDuration = new OperationDurationUpdated();
            $this->OperationDuration->deserialize($param["OperationDuration"]);
        }
    }
}
