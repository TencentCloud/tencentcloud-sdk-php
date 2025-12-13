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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份对象
 *
 * @method string getObjectMode() 获取备份对象类型，可能的取值为:
"all" - 整实例;
"partial" - 部分对象。
 * @method void setObjectMode(string $ObjectMode) 设置备份对象类型，可能的取值为:
"all" - 整实例;
"partial" - 部分对象。
 * @method array getObjectItems() 获取备份对象详情，当 ObjectMode 为 partial, 即选择部分对象备份时，该字段不能为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectItems(array $ObjectItems) 设置备份对象详情，当 ObjectMode 为 partial, 即选择部分对象备份时，该字段不能为空。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupObject extends AbstractModel
{
    /**
     * @var string 备份对象类型，可能的取值为:
"all" - 整实例;
"partial" - 部分对象。
     */
    public $ObjectMode;

    /**
     * @var array 备份对象详情，当 ObjectMode 为 partial, 即选择部分对象备份时，该字段不能为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectItems;

    /**
     * @param string $ObjectMode 备份对象类型，可能的取值为:
"all" - 整实例;
"partial" - 部分对象。
     * @param array $ObjectItems 备份对象详情，当 ObjectMode 为 partial, 即选择部分对象备份时，该字段不能为空。
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
        if (array_key_exists("ObjectMode",$param) and $param["ObjectMode"] !== null) {
            $this->ObjectMode = $param["ObjectMode"];
        }

        if (array_key_exists("ObjectItems",$param) and $param["ObjectItems"] !== null) {
            $this->ObjectItems = [];
            foreach ($param["ObjectItems"] as $key => $value){
                $obj = new BackupObjectItem();
                $obj->deserialize($value);
                array_push($this->ObjectItems, $obj);
            }
        }
    }
}
