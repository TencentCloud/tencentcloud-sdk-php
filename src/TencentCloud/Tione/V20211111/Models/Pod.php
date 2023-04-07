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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pod信息展示
 *
 * @method string getName() 获取pod名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置pod名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUid() 获取pod的唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUid(string $Uid) 设置pod的唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeType() 获取服务付费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeType(string $ChargeType) 设置服务付费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhase() 获取pod的状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhase(string $Phase) 设置pod的状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIP() 获取pod的IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIP(string $IP) 设置pod的IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取pod的创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置pod的创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method Container getContainers() 获取容器列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainers(Container $Containers) 设置容器列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getContainerInfos() 获取容器列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerInfos(array $ContainerInfos) 设置容器列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class Pod extends AbstractModel
{
    /**
     * @var string pod名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string pod的唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uid;

    /**
     * @var string 服务付费模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeType;

    /**
     * @var string pod的状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phase;

    /**
     * @var string pod的IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IP;

    /**
     * @var string pod的创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var Container 容器列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Containers;

    /**
     * @var array 容器列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerInfos;

    /**
     * @param string $Name pod名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uid pod的唯一id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType 服务付费模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phase pod的状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IP pod的IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime pod的创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param Container $Containers 容器列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ContainerInfos 容器列表
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("Phase",$param) and $param["Phase"] !== null) {
            $this->Phase = $param["Phase"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = new Container();
            $this->Containers->deserialize($param["Containers"]);
        }

        if (array_key_exists("ContainerInfos",$param) and $param["ContainerInfos"] !== null) {
            $this->ContainerInfos = [];
            foreach ($param["ContainerInfos"] as $key => $value){
                $obj = new Container();
                $obj->deserialize($value);
                array_push($this->ContainerInfos, $obj);
            }
        }
    }
}
