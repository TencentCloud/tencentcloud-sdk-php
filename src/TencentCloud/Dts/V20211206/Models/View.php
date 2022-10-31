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
 * 数据同步view的描述
 *
 * @method string getViewName() 获取view名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setViewName(string $ViewName) 设置view名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewViewName() 获取新view名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewViewName(string $NewViewName) 设置新view名
注意：此字段可能返回 null，表示取不到有效值。
 */
class View extends AbstractModel
{
    /**
     * @var string view名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ViewName;

    /**
     * @var string 新view名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewViewName;

    /**
     * @param string $ViewName view名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewViewName 新view名
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
        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("NewViewName",$param) and $param["NewViewName"] !== null) {
            $this->NewViewName = $param["NewViewName"];
        }
    }
}
