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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 函数资源信息
 *
 * @method string getPath() 获取资源路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置资源路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取资源唯一标识
 * @method void setId(string $Id) 设置资源唯一标识
 * @method string getMd5() 获取资源 MD5 值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMd5(string $Md5) 设置资源 MD5 值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取默认是 hdfs
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置默认是 hdfs
注意：此字段可能返回 null，表示取不到有效值。
 */
class FunctionResource extends AbstractModel
{
    /**
     * @var string 资源路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 资源唯一标识
     */
    public $Id;

    /**
     * @var string 资源 MD5 值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Md5;

    /**
     * @var string 默认是 hdfs
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param string $Path 资源路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 资源唯一标识
     * @param string $Md5 资源 MD5 值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 默认是 hdfs
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
