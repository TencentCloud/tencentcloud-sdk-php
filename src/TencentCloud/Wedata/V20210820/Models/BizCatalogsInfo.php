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
 * 数据地图-数据类目信息
 *
 * @method string getAppId() 获取应用id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置应用id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取类目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置类目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取类目层级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置类目层级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取类目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置类目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getParentId() 获取上级类目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(integer $ParentId) 设置上级类目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPosition() 获取类目顺序
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(integer $Position) 设置类目顺序
注意：此字段可能返回 null，表示取不到有效值。
 */
class BizCatalogsInfo extends AbstractModel
{
    /**
     * @var string 应用id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var integer 类目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 类目层级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var string 类目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 上级类目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var integer 类目顺序
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @param string $AppId 应用id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 类目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 类目层级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 类目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ParentId 上级类目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Position 类目顺序
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }
    }
}
