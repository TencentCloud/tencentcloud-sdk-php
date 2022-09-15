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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审核切片asr文本信息
 *
 * @method string getText() 获取该字段用于返回音频文件识别出的对应文本内容，最大支持**前1000个字符**。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置该字段用于返回音频文件识别出的对应文本内容，最大支持**前1000个字符**。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RcbAsr extends AbstractModel
{
    /**
     * @var string 该字段用于返回音频文件识别出的对应文本内容，最大支持**前1000个字符**。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var string 该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @param string $Text 该字段用于返回音频文件识别出的对应文本内容，最大支持**前1000个字符**。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }
    }
}
