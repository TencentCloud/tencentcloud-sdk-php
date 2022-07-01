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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移列对象
 *
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPosition() 获取排序
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(integer $Position) 设置排序
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParams() 获取附加参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(array $Params) 设置附加参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBizParams() 获取业务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizParams(array $BizParams) 设置业务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPartition() 获取是否分区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPartition(boolean $IsPartition) 设置是否分区
注意：此字段可能返回 null，表示取不到有效值。
 */
class DMSColumn extends AbstractModel
{
    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 排序
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @var array 附加参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var array 业务参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizParams;

    /**
     * @var boolean 是否分区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPartition;

    /**
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Position 排序
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Params 附加参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BizParams 业务参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPartition 是否分区
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("BizParams",$param) and $param["BizParams"] !== null) {
            $this->BizParams = [];
            foreach ($param["BizParams"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->BizParams, $obj);
            }
        }

        if (array_key_exists("IsPartition",$param) and $param["IsPartition"] !== null) {
            $this->IsPartition = $param["IsPartition"];
        }
    }
}
