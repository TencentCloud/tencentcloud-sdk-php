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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 租户RocketMQ集群详细信息
 *
 * @method RocketMQClusterInfo getInfo() 获取集群基本信息
 * @method void setInfo(RocketMQClusterInfo $Info) 设置集群基本信息
 * @method RocketMQClusterConfig getConfig() 获取集群配置信息
 * @method void setConfig(RocketMQClusterConfig $Config) 设置集群配置信息
 * @method integer getStatus() 获取集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
注意：此字段可能返回 null，表示取不到有效值。
 */
class RocketMQClusterDetail extends AbstractModel
{
    /**
     * @var RocketMQClusterInfo 集群基本信息
     */
    public $Info;

    /**
     * @var RocketMQClusterConfig 集群配置信息
     */
    public $Config;

    /**
     * @var integer 集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param RocketMQClusterInfo $Info 集群基本信息
     * @param RocketMQClusterConfig $Config 集群配置信息
     * @param integer $Status 集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = new RocketMQClusterInfo();
            $this->Info->deserialize($param["Info"]);
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new RocketMQClusterConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
