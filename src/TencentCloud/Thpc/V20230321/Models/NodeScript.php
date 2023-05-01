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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述节点执行脚本信息。
 *
 * @method string getScriptPath() 获取节点执行脚本获取地址。
目前仅支持cos地址。地址最大长度：255。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptPath(string $ScriptPath) 设置节点执行脚本获取地址。
目前仅支持cos地址。地址最大长度：255。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取脚本执行超时时间（包含拉取脚本的时间）。单位秒，默认值：30。取值范围：10～1200。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeout(integer $Timeout) 设置脚本执行超时时间（包含拉取脚本的时间）。单位秒，默认值：30。取值范围：10～1200。
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeScript extends AbstractModel
{
    /**
     * @var string 节点执行脚本获取地址。
目前仅支持cos地址。地址最大长度：255。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptPath;

    /**
     * @var integer 脚本执行超时时间（包含拉取脚本的时间）。单位秒，默认值：30。取值范围：10～1200。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeout;

    /**
     * @param string $ScriptPath 节点执行脚本获取地址。
目前仅支持cos地址。地址最大长度：255。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout 脚本执行超时时间（包含拉取脚本的时间）。单位秒，默认值：30。取值范围：10～1200。
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
        if (array_key_exists("ScriptPath",$param) and $param["ScriptPath"] !== null) {
            $this->ScriptPath = $param["ScriptPath"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
