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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引擎配置
 *
 * @method string getConfigItem() 获取配置项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigItem(string $ConfigItem) 设置配置项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigValue() 获取配置值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigValue(string $ConfigValue) 设置配置值
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataEngineConfigPair extends AbstractModel
{
    /**
     * @var string 配置项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigItem;

    /**
     * @var string 配置值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigValue;

    /**
     * @param string $ConfigItem 配置项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigValue 配置值
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

        if (array_key_exists("ConfigValue",$param) and $param["ConfigValue"] !== null) {
            $this->ConfigValue = $param["ConfigValue"];
        }
    }
}
