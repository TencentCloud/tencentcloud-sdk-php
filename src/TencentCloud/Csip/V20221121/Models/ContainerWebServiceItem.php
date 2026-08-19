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
 * 容器Web服务信息
 *
 * @method string getType() 获取Web服务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置Web服务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取服务版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置服务版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunAs() 获取服务启动用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunAs(string $RunAs) 设置服务启动用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExePath() 获取可执行文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExePath(string $ExePath) 设置可执行文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigPath() 获取配置文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigPath(string $ConfigPath) 设置配置文件路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerWebServiceItem extends AbstractModel
{
    /**
     * @var string Web服务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 服务版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 服务启动用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunAs;

    /**
     * @var string 可执行文件路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExePath;

    /**
     * @var string 配置文件路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigPath;

    /**
     * @param string $Type Web服务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 服务版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunAs 服务启动用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExePath 可执行文件路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigPath 配置文件路径
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("RunAs",$param) and $param["RunAs"] !== null) {
            $this->RunAs = $param["RunAs"];
        }

        if (array_key_exists("ExePath",$param) and $param["ExePath"] !== null) {
            $this->ExePath = $param["ExePath"];
        }

        if (array_key_exists("ConfigPath",$param) and $param["ConfigPath"] !== null) {
            $this->ConfigPath = $param["ConfigPath"];
        }
    }
}
