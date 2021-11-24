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
 * 租户AMQP集群详细信息
 *
 * @method AMQPClusterInfo getInfo() 获取集群基本信息
 * @method void setInfo(AMQPClusterInfo $Info) 设置集群基本信息
 * @method AMQPClusterConfig getConfig() 获取集群配置信息
 * @method void setConfig(AMQPClusterConfig $Config) 设置集群配置信息
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 */
class AMQPClusterDetail extends AbstractModel
{
    /**
     * @var AMQPClusterInfo 集群基本信息
     */
    public $Info;

    /**
     * @var AMQPClusterConfig 集群配置信息
     */
    public $Config;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param AMQPClusterInfo $Info 集群基本信息
     * @param AMQPClusterConfig $Config 集群配置信息
     * @param array $Tags 标签
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
            $this->Info = new AMQPClusterInfo();
            $this->Info->deserialize($param["Info"]);
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new AMQPClusterConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
