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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tcr 命名空间的描述
 *
 * @method string getName() 获取命名空间名称
 * @method void setName(string $Name) 设置命名空间名称
 * @method string getCreationTime() 获取创建时间
 * @method void setCreationTime(string $CreationTime) 设置创建时间
 * @method boolean getPublic() 获取访问级别
 * @method void setPublic(boolean $Public) 设置访问级别
 * @method integer getNamespaceId() 获取命名空间的Id
 * @method void setNamespaceId(integer $NamespaceId) 设置命名空间的Id
 * @method TagSpecification getTagSpecification() 获取实例云标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSpecification(TagSpecification $TagSpecification) 设置实例云标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMetadata() 获取命名空间元数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadata(array $Metadata) 设置命名空间元数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class TcrNamespaceInfo extends AbstractModel
{
    /**
     * @var string 命名空间名称
     */
    public $Name;

    /**
     * @var string 创建时间
     */
    public $CreationTime;

    /**
     * @var boolean 访问级别
     */
    public $Public;

    /**
     * @var integer 命名空间的Id
     */
    public $NamespaceId;

    /**
     * @var TagSpecification 实例云标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSpecification;

    /**
     * @var array 命名空间元数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metadata;

    /**
     * @param string $Name 命名空间名称
     * @param string $CreationTime 创建时间
     * @param boolean $Public 访问级别
     * @param integer $NamespaceId 命名空间的Id
     * @param TagSpecification $TagSpecification 实例云标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Metadata 命名空间元数据
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("Public",$param) and $param["Public"] !== null) {
            $this->Public = $param["Public"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = new TagSpecification();
            $this->TagSpecification->deserialize($param["TagSpecification"]);
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = [];
            foreach ($param["Metadata"] as $key => $value){
                $obj = new KeyValueString();
                $obj->deserialize($value);
                array_push($this->Metadata, $obj);
            }
        }
    }
}
