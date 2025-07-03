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
namespace TencentCloud\Vrs\V20200824\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 训练文本
 *
 * @method string getTextId() 获取文本ID
当复刻类型为一句话声音复刻时，生成的TextId有效期为7天，且在成功创建一次复刻任务后失效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextId(string $TextId) 设置文本ID
当复刻类型为一句话声音复刻时，生成的TextId有效期为7天，且在成功创建一次复刻任务后失效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置文本
注意：此字段可能返回 null，表示取不到有效值。
 */
class TrainingText extends AbstractModel
{
    /**
     * @var string 文本ID
当复刻类型为一句话声音复刻时，生成的TextId有效期为7天，且在成功创建一次复刻任务后失效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextId;

    /**
     * @var string 文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @param string $TextId 文本ID
当复刻类型为一句话声音复刻时，生成的TextId有效期为7天，且在成功创建一次复刻任务后失效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 文本
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
        if (array_key_exists("TextId",$param) and $param["TextId"] !== null) {
            $this->TextId = $param["TextId"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }
    }
}
