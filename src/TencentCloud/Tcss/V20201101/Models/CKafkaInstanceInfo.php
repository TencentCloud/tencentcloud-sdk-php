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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全日志kafka可选信息
 *
 * @method string getInstanceID() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceID(string $InstanceID) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTopicList() 获取主题列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicList(array $TopicList) 设置主题列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRouteList() 获取路由列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRouteList(array $RouteList) 设置路由列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKafkaVersion() 获取kafka版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaVersion(string $KafkaVersion) 设置kafka版本号
注意：此字段可能返回 null，表示取不到有效值。
 */
class CKafkaInstanceInfo extends AbstractModel
{
    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceID;

    /**
     * @var string 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var array 主题列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicList;

    /**
     * @var array 路由列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RouteList;

    /**
     * @var string kafka版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaVersion;

    /**
     * @param string $InstanceID 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TopicList 主题列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RouteList 路由列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KafkaVersion kafka版本号
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("TopicList",$param) and $param["TopicList"] !== null) {
            $this->TopicList = [];
            foreach ($param["TopicList"] as $key => $value){
                $obj = new CKafkaTopicInfo();
                $obj->deserialize($value);
                array_push($this->TopicList, $obj);
            }
        }

        if (array_key_exists("RouteList",$param) and $param["RouteList"] !== null) {
            $this->RouteList = [];
            foreach ($param["RouteList"] as $key => $value){
                $obj = new CkafkaRouteInfo();
                $obj->deserialize($value);
                array_push($this->RouteList, $obj);
            }
        }

        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }
    }
}
