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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源引用
 *
 * @method string getResourceId() 获取<p>资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置<p>资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVersion() 获取<p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(integer $Version) 设置<p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取<p>资源类型</p><p>枚举值：</p><ul><li>1： Main资源</li><li>2： 依赖资源</li><li>3： python文件</li><li>4： 数据文件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置<p>资源类型</p><p>枚举值：</p><ul><li>1： Main资源</li><li>2： 依赖资源</li><li>3： python文件</li><li>4： 数据文件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>1： 活跃</li><li>-2： 删除</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>状态</p><p>枚举值：</p><ul><li>1： 活跃</li><li>-2： 删除</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkspaceId() 获取<p>空间id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>空间id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>资源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>资源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceRefLatest extends AbstractModel
{
    /**
     * @var string <p>资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var integer <p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var integer <p>资源类型</p><p>枚举值：</p><ul><li>1： Main资源</li><li>2： 依赖资源</li><li>3： python文件</li><li>4： 数据文件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer <p>状态</p><p>枚举值：</p><ul><li>1： 活跃</li><li>-2： 删除</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>空间id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceId;

    /**
     * @var string <p>资源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @param string $ResourceId <p>资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Version <p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type <p>资源类型</p><p>枚举值：</p><ul><li>1： Main资源</li><li>2： 依赖资源</li><li>3： python文件</li><li>4： 数据文件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>状态</p><p>枚举值：</p><ul><li>1： 活跃</li><li>-2： 删除</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkspaceId <p>空间id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>资源名称</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
