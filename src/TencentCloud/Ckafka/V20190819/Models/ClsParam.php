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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cls类型入参
 *
 * @method boolean getDecodeJson() 获取生产的信息是否为json格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDecodeJson(boolean $DecodeJson) 设置生产的信息是否为json格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResource() 获取cls日志主题id
 * @method void setResource(string $Resource) 设置cls日志主题id
 * @method string getLogSet() 获取cls日志集id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogSet(string $LogSet) 设置cls日志集id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContentKey() 获取当DecodeJson为false时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentKey(string $ContentKey) 设置当DecodeJson为false时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeField() 获取指定消息中的某字段内容作为cls日志的时间。
字段内容格式需要是秒级时间戳
 * @method void setTimeField(string $TimeField) 设置指定消息中的某字段内容作为cls日志的时间。
字段内容格式需要是秒级时间戳
 */
class ClsParam extends AbstractModel
{
    /**
     * @var boolean 生产的信息是否为json格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DecodeJson;

    /**
     * @var string cls日志主题id
     */
    public $Resource;

    /**
     * @var string cls日志集id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogSet;

    /**
     * @var string 当DecodeJson为false时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentKey;

    /**
     * @var string 指定消息中的某字段内容作为cls日志的时间。
字段内容格式需要是秒级时间戳
     */
    public $TimeField;

    /**
     * @param boolean $DecodeJson 生产的信息是否为json格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Resource cls日志主题id
     * @param string $LogSet cls日志集id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContentKey 当DecodeJson为false时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeField 指定消息中的某字段内容作为cls日志的时间。
字段内容格式需要是秒级时间戳
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
        if (array_key_exists("DecodeJson",$param) and $param["DecodeJson"] !== null) {
            $this->DecodeJson = $param["DecodeJson"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = $param["LogSet"];
        }

        if (array_key_exists("ContentKey",$param) and $param["ContentKey"] !== null) {
            $this->ContentKey = $param["ContentKey"];
        }

        if (array_key_exists("TimeField",$param) and $param["TimeField"] !== null) {
            $this->TimeField = $param["TimeField"];
        }
    }
}
