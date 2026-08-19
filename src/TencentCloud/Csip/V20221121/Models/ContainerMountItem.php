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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器挂载信息
 *
 * @method string getType() 获取<p>挂载类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>挂载类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取<p>宿主机路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置<p>宿主机路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDestination() 获取<p>容器内路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestination(string $Destination) 设置<p>容器内路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMode() 获取<p>挂载模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMode(string $Mode) 设置<p>挂载模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRW() 获取<p>是否可读写</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRW(boolean $RW) 设置<p>是否可读写</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPropagation() 获取<p>传播方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPropagation(string $Propagation) 设置<p>传播方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>挂载名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>挂载名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDriver() 获取<p>驱动名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDriver(string $Driver) 设置<p>驱动名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerMountItem extends AbstractModel
{
    /**
     * @var string <p>挂载类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>宿主机路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string <p>容器内路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Destination;

    /**
     * @var string <p>挂载模式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mode;

    /**
     * @var boolean <p>是否可读写</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RW;

    /**
     * @var string <p>传播方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Propagation;

    /**
     * @var string <p>挂载名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>驱动名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Driver;

    /**
     * @param string $Type <p>挂载类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source <p>宿主机路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Destination <p>容器内路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mode <p>挂载模式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RW <p>是否可读写</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Propagation <p>传播方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>挂载名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Driver <p>驱动名称</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Destination",$param) and $param["Destination"] !== null) {
            $this->Destination = $param["Destination"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("RW",$param) and $param["RW"] !== null) {
            $this->RW = $param["RW"];
        }

        if (array_key_exists("Propagation",$param) and $param["Propagation"] !== null) {
            $this->Propagation = $param["Propagation"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Driver",$param) and $param["Driver"] !== null) {
            $this->Driver = $param["Driver"];
        }
    }
}
