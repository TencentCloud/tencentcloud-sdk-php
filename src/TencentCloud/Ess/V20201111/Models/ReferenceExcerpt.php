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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引用的资料
 *
 * @method string getContent() 获取原文内容
 * @method void setContent(string $Content) 设置原文内容
 * @method PositionInfo getPosition() 获取坐标信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(PositionInfo $Position) 设置坐标信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReferenceExcerpt extends AbstractModel
{
    /**
     * @var string 原文内容
     */
    public $Content;

    /**
     * @var PositionInfo 坐标信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @param string $Content 原文内容
     * @param PositionInfo $Position 坐标信息
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = new PositionInfo();
            $this->Position->deserialize($param["Position"]);
        }
    }
}
