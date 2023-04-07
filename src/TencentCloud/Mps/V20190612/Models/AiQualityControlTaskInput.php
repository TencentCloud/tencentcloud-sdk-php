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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频质检输入参数类型
 *
 * @method integer getDefinition() 获取视频质检模板 ID 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefinition(integer $Definition) 设置视频质检模板 ID 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelExtPara() 获取渠道扩展参数json序列化字符串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelExtPara(string $ChannelExtPara) 设置渠道扩展参数json序列化字符串。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiQualityControlTaskInput extends AbstractModel
{
    /**
     * @var integer 视频质检模板 ID 。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Definition;

    /**
     * @var string 渠道扩展参数json序列化字符串。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelExtPara;

    /**
     * @param integer $Definition 视频质检模板 ID 。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelExtPara 渠道扩展参数json序列化字符串。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ChannelExtPara",$param) and $param["ChannelExtPara"] !== null) {
            $this->ChannelExtPara = $param["ChannelExtPara"];
        }
    }
}
