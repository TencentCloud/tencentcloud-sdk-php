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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器集群外部访问设置
 *
 * @method string getType() 获取外部访问类型，当前仅支持CLB字段
 * @method void setType(string $Type) 设置外部访问类型，当前仅支持CLB字段
 * @method CLBSetting getCLBServer() 获取CLB设置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLBServer(CLBSetting $CLBServer) 设置CLB设置信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExternalAccess extends AbstractModel
{
    /**
     * @var string 外部访问类型，当前仅支持CLB字段
     */
    public $Type;

    /**
     * @var CLBSetting CLB设置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLBServer;

    /**
     * @param string $Type 外部访问类型，当前仅支持CLB字段
     * @param CLBSetting $CLBServer CLB设置信息
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

        if (array_key_exists("CLBServer",$param) and $param["CLBServer"] !== null) {
            $this->CLBServer = new CLBSetting();
            $this->CLBServer->deserialize($param["CLBServer"]);
        }
    }
}
