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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发布配置项
 *
 * @method string getConfigItem() 获取配置项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigItem(string $ConfigItem) 设置配置项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAction() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(integer $Action) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取变更后的内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置变更后的内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastValue() 获取变更前的内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastValue(string $LastValue) 设置变更前的内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取变更内容(优先级展示content内容,content为空取value内容)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置变更内容(优先级展示content内容,content为空取value内容)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReleaseConfigs extends AbstractModel
{
    /**
     * @var string 配置项描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigItem;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var string 变更后的内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 变更前的内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastValue;

    /**
     * @var string 变更内容(优先级展示content内容,content为空取value内容)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @param string $ConfigItem 配置项描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Action 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 变更后的内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastValue 变更前的内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 变更内容(优先级展示content内容,content为空取value内容)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 失败原因
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
        if (array_key_exists("ConfigItem",$param) and $param["ConfigItem"] !== null) {
            $this->ConfigItem = $param["ConfigItem"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("LastValue",$param) and $param["LastValue"] !== null) {
            $this->LastValue = $param["LastValue"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
