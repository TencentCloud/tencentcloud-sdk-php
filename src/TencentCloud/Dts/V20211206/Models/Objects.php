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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同步的数据库对对象描述
 *
 * @method string getMode() 获取迁移对象类型 Partial(部分对象)，默认为Partial
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMode(string $Mode) 设置迁移对象类型 Partial(部分对象)，默认为Partial
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDatabases() 获取同步对象，当 Mode 为 Partial 时，不为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabases(array $Databases) 设置同步对象，当 Mode 为 Partial 时，不为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAdvancedObjects() 获取高级对象类型，如function、procedure，当需要同步高级对象时，初始化类型必须包含结构初始化类型，即Options.InitType字段值为Structure或Full
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedObjects(array $AdvancedObjects) 设置高级对象类型，如function、procedure，当需要同步高级对象时，初始化类型必须包含结构初始化类型，即Options.InitType字段值为Structure或Full
注意：此字段可能返回 null，表示取不到有效值。
 * @method OnlineDDL getOnlineDDL() 获取OnlineDDL类型，冗余字段不做配置用途
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnlineDDL(OnlineDDL $OnlineDDL) 设置OnlineDDL类型，冗余字段不做配置用途
注意：此字段可能返回 null，表示取不到有效值。
 */
class Objects extends AbstractModel
{
    /**
     * @var string 迁移对象类型 Partial(部分对象)，默认为Partial
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mode;

    /**
     * @var array 同步对象，当 Mode 为 Partial 时，不为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Databases;

    /**
     * @var array 高级对象类型，如function、procedure，当需要同步高级对象时，初始化类型必须包含结构初始化类型，即Options.InitType字段值为Structure或Full
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedObjects;

    /**
     * @var OnlineDDL OnlineDDL类型，冗余字段不做配置用途
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnlineDDL;

    /**
     * @param string $Mode 迁移对象类型 Partial(部分对象)，默认为Partial
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Databases 同步对象，当 Mode 为 Partial 时，不为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AdvancedObjects 高级对象类型，如function、procedure，当需要同步高级对象时，初始化类型必须包含结构初始化类型，即Options.InitType字段值为Structure或Full
注意：此字段可能返回 null，表示取不到有效值。
     * @param OnlineDDL $OnlineDDL OnlineDDL类型，冗余字段不做配置用途
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Databases",$param) and $param["Databases"] !== null) {
            $this->Databases = [];
            foreach ($param["Databases"] as $key => $value){
                $obj = new Database();
                $obj->deserialize($value);
                array_push($this->Databases, $obj);
            }
        }

        if (array_key_exists("AdvancedObjects",$param) and $param["AdvancedObjects"] !== null) {
            $this->AdvancedObjects = $param["AdvancedObjects"];
        }

        if (array_key_exists("OnlineDDL",$param) and $param["OnlineDDL"] !== null) {
            $this->OnlineDDL = new OnlineDDL();
            $this->OnlineDDL->deserialize($param["OnlineDDL"]);
        }
    }
}
