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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件/目录节点
 *
 * @method string getName() 获取<p>文件/目录名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>文件/目录名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>节点类型：file 或 directory</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>节点类型：file 或 directory</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取<p>文件大小（字节），目录为 null</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置<p>文件大小（字节），目录为 null</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildren() 获取<p>子节点列表（仅目录有效）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildren(array $Children) 设置<p>子节点列表（仅目录有效）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastModifyTime() 获取<p>文件最后修改时间（毫秒时间戳）</p><p>单位：ms</p>
 * @method void setLastModifyTime(integer $LastModifyTime) 设置<p>文件最后修改时间（毫秒时间戳）</p><p>单位：ms</p>
 */
class FileNode extends AbstractModel
{
    /**
     * @var string <p>文件/目录名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>节点类型：file 或 directory</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer <p>文件大小（字节），目录为 null</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var array <p>子节点列表（仅目录有效）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Children;

    /**
     * @var integer <p>文件最后修改时间（毫秒时间戳）</p><p>单位：ms</p>
     */
    public $LastModifyTime;

    /**
     * @param string $Name <p>文件/目录名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>节点类型：file 或 directory</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size <p>文件大小（字节），目录为 null</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Children <p>子节点列表（仅目录有效）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastModifyTime <p>文件最后修改时间（毫秒时间戳）</p><p>单位：ms</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new FileNode();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("LastModifyTime",$param) and $param["LastModifyTime"] !== null) {
            $this->LastModifyTime = $param["LastModifyTime"];
        }
    }
}
