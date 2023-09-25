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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险详情
 *
 * @method string getTitle() 获取标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBody() 获取详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBody(string $Body) 设置详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServerRiskSuggestion extends AbstractModel
{
    /**
     * @var string 标题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string 详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Body;

    /**
     * @param string $Title 标题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Body 详情
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }
    }
}
