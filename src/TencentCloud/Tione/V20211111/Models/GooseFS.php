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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置GooseFS参数
 *
 * @method string getId() 获取<p>goosefs实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置<p>goosefs实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>GooseFS类型，包括GooseFS和GooseFSx</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>GooseFS类型，包括GooseFS和GooseFSx</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取<p>GooseFSx实例需要挂载的路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置<p>GooseFSx实例需要挂载的路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNameSpace() 获取<p>GooseFS命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameSpace(string $NameSpace) 设置<p>GooseFS命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMountOptions() 获取<p>客户端的挂载参数，逗号分隔的参数名</p>
 * @method void setMountOptions(string $MountOptions) 设置<p>客户端的挂载参数，逗号分隔的参数名</p>
 */
class GooseFS extends AbstractModel
{
    /**
     * @var string <p>goosefs实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string <p>GooseFS类型，包括GooseFS和GooseFSx</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>GooseFSx实例需要挂载的路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string <p>GooseFS命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NameSpace;

    /**
     * @var string <p>客户端的挂载参数，逗号分隔的参数名</p>
     */
    public $MountOptions;

    /**
     * @param string $Id <p>goosefs实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>GooseFS类型，包括GooseFS和GooseFSx</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path <p>GooseFSx实例需要挂载的路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NameSpace <p>GooseFS命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MountOptions <p>客户端的挂载参数，逗号分隔的参数名</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("NameSpace",$param) and $param["NameSpace"] !== null) {
            $this->NameSpace = $param["NameSpace"];
        }

        if (array_key_exists("MountOptions",$param) and $param["MountOptions"] !== null) {
            $this->MountOptions = $param["MountOptions"];
        }
    }
}
