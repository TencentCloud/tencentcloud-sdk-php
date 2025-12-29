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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对话端Widget结构
 *
 * @method string getWidgetId() 获取Widget配置ID

 * @method void setWidgetId(string $WidgetId) 设置Widget配置ID

 * @method string getWidgetRunId() 获取Widget实例ID
 * @method void setWidgetRunId(string $WidgetRunId) 设置Widget实例ID
 * @method string getState() 获取Widget状态数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置Widget状态数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPosition() 获取Widget位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(integer $Position) 设置Widget位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncodedWidget() 获取Base64编码的Widget信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncodedWidget(string $EncodedWidget) 设置Base64编码的Widget信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayload() 获取用户最近一次提交的payload
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayload(string $Payload) 设置用户最近一次提交的payload
注意：此字段可能返回 null，表示取不到有效值。
 */
class Widget extends AbstractModel
{
    /**
     * @var string Widget配置ID

     */
    public $WidgetId;

    /**
     * @var string Widget实例ID
     */
    public $WidgetRunId;

    /**
     * @var string Widget状态数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var integer Widget位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @var string Base64编码的Widget信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncodedWidget;

    /**
     * @var string 用户最近一次提交的payload
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Payload;

    /**
     * @param string $WidgetId Widget配置ID

     * @param string $WidgetRunId Widget实例ID
     * @param string $State Widget状态数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Position Widget位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EncodedWidget Base64编码的Widget信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Payload 用户最近一次提交的payload
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
        if (array_key_exists("WidgetId",$param) and $param["WidgetId"] !== null) {
            $this->WidgetId = $param["WidgetId"];
        }

        if (array_key_exists("WidgetRunId",$param) and $param["WidgetRunId"] !== null) {
            $this->WidgetRunId = $param["WidgetRunId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("EncodedWidget",$param) and $param["EncodedWidget"] !== null) {
            $this->EncodedWidget = $param["EncodedWidget"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }
    }
}
