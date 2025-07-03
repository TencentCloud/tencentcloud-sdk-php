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
 * 媒体质检输入参数类型
 *
 * @method integer getDefinition() 获取媒体质检模板 ID 。
可以直接使用预设模板，也可以在控制台自定义模板。预设模板如下：
- 10：开启所有质检项；
- 20：仅开启格式诊断对应质检项；
- 30：仅开启无参考打分对应质检项；
- 40：仅开启画面质量对应质检项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefinition(integer $Definition) 设置媒体质检模板 ID 。
可以直接使用预设模板，也可以在控制台自定义模板。预设模板如下：
- 10：开启所有质检项；
- 20：仅开启格式诊断对应质检项；
- 30：仅开启无参考打分对应质检项；
- 40：仅开启画面质量对应质检项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelExtPara() 获取渠道扩展参数json序列化字符串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelExtPara(string $ChannelExtPara) 设置渠道扩展参数json序列化字符串。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiQualityControlTaskInput extends AbstractModel
{
    /**
     * @var integer 媒体质检模板 ID 。
可以直接使用预设模板，也可以在控制台自定义模板。预设模板如下：
- 10：开启所有质检项；
- 20：仅开启格式诊断对应质检项；
- 30：仅开启无参考打分对应质检项；
- 40：仅开启画面质量对应质检项。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Definition;

    /**
     * @var string 渠道扩展参数json序列化字符串。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelExtPara;

    /**
     * @param integer $Definition 媒体质检模板 ID 。
可以直接使用预设模板，也可以在控制台自定义模板。预设模板如下：
- 10：开启所有质检项；
- 20：仅开启格式诊断对应质检项；
- 30：仅开启无参考打分对应质检项；
- 40：仅开启画面质量对应质检项。
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
