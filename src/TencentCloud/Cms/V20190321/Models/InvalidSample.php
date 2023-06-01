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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 无效关键词
 *
 * @method string getContent() 获取关键词
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置关键词
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInvalidCode() 获取无效代码:1-标签不存在;2-词过长;3-词类型不匹配;4-备注超长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvalidCode(integer $InvalidCode) 设置无效代码:1-标签不存在;2-词过长;3-词类型不匹配;4-备注超长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInvalidMessage() 获取无效描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvalidMessage(string $InvalidMessage) 设置无效描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class InvalidSample extends AbstractModel
{
    /**
     * @var string 关键词
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var integer 无效代码:1-标签不存在;2-词过长;3-词类型不匹配;4-备注超长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvalidCode;

    /**
     * @var string 无效描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvalidMessage;

    /**
     * @param string $Content 关键词
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InvalidCode 无效代码:1-标签不存在;2-词过长;3-词类型不匹配;4-备注超长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InvalidMessage 无效描述
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

        if (array_key_exists("InvalidCode",$param) and $param["InvalidCode"] !== null) {
            $this->InvalidCode = $param["InvalidCode"];
        }

        if (array_key_exists("InvalidMessage",$param) and $param["InvalidMessage"] !== null) {
            $this->InvalidMessage = $param["InvalidMessage"];
        }
    }
}
