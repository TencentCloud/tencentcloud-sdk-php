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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 探针有关接口的相关配置
 *
 * @method boolean getRetentionValid() 获取当前接口配置是否开启了接口白名单配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetentionValid(boolean $RetentionValid) 设置当前接口配置是否开启了接口白名单配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIgnoreOperation() 获取RetentionValid为false时生效，接口配置中的黑名单配置，配置中的接口不采集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIgnoreOperation(string $IgnoreOperation) 设置RetentionValid为false时生效，接口配置中的黑名单配置，配置中的接口不采集
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRetentionOperation() 获取RetentionValid为true时生效，接口配置中的白名单配置，仅采集配置中的接口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetentionOperation(string $RetentionOperation) 设置RetentionValid为true时生效，接口配置中的白名单配置，仅采集配置中的接口
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentOperationConfigView extends AbstractModel
{
    /**
     * @var boolean 当前接口配置是否开启了接口白名单配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetentionValid;

    /**
     * @var string RetentionValid为false时生效，接口配置中的黑名单配置，配置中的接口不采集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IgnoreOperation;

    /**
     * @var string RetentionValid为true时生效，接口配置中的白名单配置，仅采集配置中的接口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetentionOperation;

    /**
     * @param boolean $RetentionValid 当前接口配置是否开启了接口白名单配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IgnoreOperation RetentionValid为false时生效，接口配置中的黑名单配置，配置中的接口不采集
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RetentionOperation RetentionValid为true时生效，接口配置中的白名单配置，仅采集配置中的接口
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
        if (array_key_exists("RetentionValid",$param) and $param["RetentionValid"] !== null) {
            $this->RetentionValid = $param["RetentionValid"];
        }

        if (array_key_exists("IgnoreOperation",$param) and $param["IgnoreOperation"] !== null) {
            $this->IgnoreOperation = $param["IgnoreOperation"];
        }

        if (array_key_exists("RetentionOperation",$param) and $param["RetentionOperation"] !== null) {
            $this->RetentionOperation = $param["RetentionOperation"];
        }
    }
}
