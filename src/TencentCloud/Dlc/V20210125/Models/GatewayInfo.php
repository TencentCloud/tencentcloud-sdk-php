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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网关基础信息，包括id，名称，规格和状态
 *
 * @method string getGatewayId() 获取网关ID，
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayId(string $GatewayId) 设置网关ID，
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayName() 获取网关名称，全局唯一
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayName(string $GatewayName) 设置网关名称，全局唯一
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取网关的规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置网关的规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getState() 获取-2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中 5挂起中 6启动中 7隔离中 8隔离 9续费中 10变配中 11冲正中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(integer $State) 设置-2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中 5挂起中 6启动中 7隔离中 8隔离 9续费中 10变配中 11冲正中
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPayMode() 获取计费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(integer $PayMode) 设置计费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMode() 获取模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMode(integer $Mode) 设置模式
注意：此字段可能返回 null，表示取不到有效值。
 */
class GatewayInfo extends AbstractModel
{
    /**
     * @var string 网关ID，
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayId;

    /**
     * @var string 网关名称，全局唯一
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayName;

    /**
     * @var integer 网关的规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var integer -2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中 5挂起中 6启动中 7隔离中 8隔离 9续费中 10变配中 11冲正中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var integer 计费模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var integer 模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mode;

    /**
     * @param string $GatewayId 网关ID，
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayName 网关名称，全局唯一
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size 网关的规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $State -2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中 5挂起中 6启动中 7隔离中 8隔离 9续费中 10变配中 11冲正中
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PayMode 计费模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Mode 模式
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
