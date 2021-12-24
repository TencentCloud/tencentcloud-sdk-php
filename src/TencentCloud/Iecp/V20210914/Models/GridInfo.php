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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Grid信息
 *
 * @method integer getId() 获取DeployGridId
 * @method void setId(integer $Id) 设置DeployGridId
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getGridUniqKey() 获取Key
 * @method void setGridUniqKey(string $GridUniqKey) 设置Key
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getWorkloadKind() 获取工作负载类型
 * @method void setWorkloadKind(string $WorkloadKind) 设置工作负载类型
 * @method string getStartTime() 获取启动时间
 * @method void setStartTime(string $StartTime) 设置启动时间
 * @method integer getReplicas() 获取副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicas(integer $Replicas) 设置副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublisher() 获取创建人
 * @method void setPublisher(string $Publisher) 设置创建人
 * @method string getVersion() 获取版本信息
 * @method void setVersion(string $Version) 设置版本信息
 */
class GridInfo extends AbstractModel
{
    /**
     * @var integer DeployGridId
     */
    public $Id;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string Key
     */
    public $GridUniqKey;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 工作负载类型
     */
    public $WorkloadKind;

    /**
     * @var string 启动时间
     */
    public $StartTime;

    /**
     * @var integer 副本数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replicas;

    /**
     * @var string 创建人
     */
    public $Publisher;

    /**
     * @var string 版本信息
     */
    public $Version;

    /**
     * @param integer $Id DeployGridId
     * @param string $Name 名称
     * @param string $GridUniqKey Key
     * @param string $Description 描述
     * @param string $WorkloadKind 工作负载类型
     * @param string $StartTime 启动时间
     * @param integer $Replicas 副本数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Publisher 创建人
     * @param string $Version 版本信息
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("GridUniqKey",$param) and $param["GridUniqKey"] !== null) {
            $this->GridUniqKey = $param["GridUniqKey"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("WorkloadKind",$param) and $param["WorkloadKind"] !== null) {
            $this->WorkloadKind = $param["WorkloadKind"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("Publisher",$param) and $param["Publisher"] !== null) {
            $this->Publisher = $param["Publisher"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
