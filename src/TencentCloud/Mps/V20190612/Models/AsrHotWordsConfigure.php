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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能字幕热词参数
 *
 * @method string getSwitch() 获取热词开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置热词开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLibraryId() 获取热词库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLibraryId(string $LibraryId) 设置热词库ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class AsrHotWordsConfigure extends AbstractModel
{
    /**
     * @var string 热词开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var string 热词库ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LibraryId;

    /**
     * @param string $Switch 热词开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LibraryId 热词库ID
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }
    }
}
