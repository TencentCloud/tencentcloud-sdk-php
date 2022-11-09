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
 * 数据同步中的ddl同步处理
 *
 * @method string getDdlObject() 获取ddl类型，如Database,Table,View,Index等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDdlObject(string $DdlObject) 设置ddl类型，如Database,Table,View,Index等
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDdlValue() 获取ddl具体值，对于Database可取值[Create,Drop,Alter]<br>对于Table可取值[Create,Drop,Alter,Truncate,Rename]<br/>对于View可取值[Create,Drop]<br/>对于Index可取值[Create,Drop]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDdlValue(array $DdlValue) 设置ddl具体值，对于Database可取值[Create,Drop,Alter]<br>对于Table可取值[Create,Drop,Alter,Truncate,Rename]<br/>对于View可取值[Create,Drop]<br/>对于Index可取值[Create,Drop]
注意：此字段可能返回 null，表示取不到有效值。
 */
class DdlOption extends AbstractModel
{
    /**
     * @var string ddl类型，如Database,Table,View,Index等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DdlObject;

    /**
     * @var array ddl具体值，对于Database可取值[Create,Drop,Alter]<br>对于Table可取值[Create,Drop,Alter,Truncate,Rename]<br/>对于View可取值[Create,Drop]<br/>对于Index可取值[Create,Drop]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DdlValue;

    /**
     * @param string $DdlObject ddl类型，如Database,Table,View,Index等
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DdlValue ddl具体值，对于Database可取值[Create,Drop,Alter]<br>对于Table可取值[Create,Drop,Alter,Truncate,Rename]<br/>对于View可取值[Create,Drop]<br/>对于Index可取值[Create,Drop]
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
        if (array_key_exists("DdlObject",$param) and $param["DdlObject"] !== null) {
            $this->DdlObject = $param["DdlObject"];
        }

        if (array_key_exists("DdlValue",$param) and $param["DdlValue"] !== null) {
            $this->DdlValue = $param["DdlValue"];
        }
    }
}
