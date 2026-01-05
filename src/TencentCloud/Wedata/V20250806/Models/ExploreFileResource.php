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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据探索文件资源
 *
 * @method string getResourceType() 获取资源类型，只能是这两种类型: folder, script
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置资源类型，只能是这两种类型: folder, script
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceId() 获取资源ID：目录id或脚本id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源ID：目录id或脚本id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceIdForPath() 获取id全路径，用于递归鉴权
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceIdForPath(string $ResourceIdForPath) 设置id全路径，用于递归鉴权
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceCFSPath() 获取cfs路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceCFSPath(string $ResourceCFSPath) 设置cfs路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExploreFileResource extends AbstractModel
{
    /**
     * @var string 资源类型，只能是这两种类型: folder, script
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var string 资源ID：目录id或脚本id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var string id全路径，用于递归鉴权
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceIdForPath;

    /**
     * @var string cfs路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceCFSPath;

    /**
     * @param string $ResourceType 资源类型，只能是这两种类型: folder, script
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceId 资源ID：目录id或脚本id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceIdForPath id全路径，用于递归鉴权
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceCFSPath cfs路径
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceIdForPath",$param) and $param["ResourceIdForPath"] !== null) {
            $this->ResourceIdForPath = $param["ResourceIdForPath"];
        }

        if (array_key_exists("ResourceCFSPath",$param) and $param["ResourceCFSPath"] !== null) {
            $this->ResourceCFSPath = $param["ResourceCFSPath"];
        }
    }
}
