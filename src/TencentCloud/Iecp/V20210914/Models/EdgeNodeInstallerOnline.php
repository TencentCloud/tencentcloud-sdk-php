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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点在线安装信息
 *
 * @method string getScriptName() 获取节点安装脚本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptName(string $ScriptName) 设置节点安装脚本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScriptDownloadUrl() 获取节点安装脚本下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptDownloadUrl(string $ScriptDownloadUrl) 设置节点安装脚本下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGuide() 获取节点安装命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGuide(string $Guide) 设置节点安装命令
注意：此字段可能返回 null，表示取不到有效值。
 */
class EdgeNodeInstallerOnline extends AbstractModel
{
    /**
     * @var string 节点安装脚本名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptName;

    /**
     * @var string 节点安装脚本下载链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptDownloadUrl;

    /**
     * @var string 节点安装命令
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Guide;

    /**
     * @param string $ScriptName 节点安装脚本名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScriptDownloadUrl 节点安装脚本下载链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Guide 节点安装命令
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
        if (array_key_exists("ScriptName",$param) and $param["ScriptName"] !== null) {
            $this->ScriptName = $param["ScriptName"];
        }

        if (array_key_exists("ScriptDownloadUrl",$param) and $param["ScriptDownloadUrl"] !== null) {
            $this->ScriptDownloadUrl = $param["ScriptDownloadUrl"];
        }

        if (array_key_exists("Guide",$param) and $param["Guide"] !== null) {
            $this->Guide = $param["Guide"];
        }
    }
}
