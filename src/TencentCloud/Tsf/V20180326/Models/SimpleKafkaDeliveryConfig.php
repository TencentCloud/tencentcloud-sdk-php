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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志投递kafka配置描述的缩简版
 *
 * @method string getConfigId() 获取配置项id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigId(string $ConfigId) 设置配置项id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigName() 获取配置项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigName(string $ConfigName) 设置配置项名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class SimpleKafkaDeliveryConfig extends AbstractModel
{
    /**
     * @var string 配置项id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigId;

    /**
     * @var string 配置项名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigName;

    /**
     * @param string $ConfigId 配置项id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigName 配置项名称
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }
    }
}
