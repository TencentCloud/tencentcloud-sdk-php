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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于返回音频片段的审核结果
 *
 * @method string getOffsetTime() 获取该字段用于返回音频片段的开始时间，单位为秒。对于点播文件，该参数代表对应音频相对于完整音轨的偏移时间，如0（代表不偏移），5（音轨开始后5秒），10（音轨开始后10秒）；对于直播文件，该参数则返回对应音频片段开始时的Unix时间戳，如：1594650717。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffsetTime(string $OffsetTime) 设置该字段用于返回音频片段的开始时间，单位为秒。对于点播文件，该参数代表对应音频相对于完整音轨的偏移时间，如0（代表不偏移），5（音轨开始后5秒），10（音轨开始后10秒）；对于直播文件，该参数则返回对应音频片段开始时的Unix时间戳，如：1594650717。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AudioResult getResult() 获取该字段用于返回音频片段的具体审核结果，详细内容敬请参考AudioResult数据结构的描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(AudioResult $Result) 设置该字段用于返回音频片段的具体审核结果，详细内容敬请参考AudioResult数据结构的描述。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AudioSegments extends AbstractModel
{
    /**
     * @var string 该字段用于返回音频片段的开始时间，单位为秒。对于点播文件，该参数代表对应音频相对于完整音轨的偏移时间，如0（代表不偏移），5（音轨开始后5秒），10（音轨开始后10秒）；对于直播文件，该参数则返回对应音频片段开始时的Unix时间戳，如：1594650717。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OffsetTime;

    /**
     * @var AudioResult 该字段用于返回音频片段的具体审核结果，详细内容敬请参考AudioResult数据结构的描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @param string $OffsetTime 该字段用于返回音频片段的开始时间，单位为秒。对于点播文件，该参数代表对应音频相对于完整音轨的偏移时间，如0（代表不偏移），5（音轨开始后5秒），10（音轨开始后10秒）；对于直播文件，该参数则返回对应音频片段开始时的Unix时间戳，如：1594650717。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AudioResult $Result 该字段用于返回音频片段的具体审核结果，详细内容敬请参考AudioResult数据结构的描述。
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
        if (array_key_exists("OffsetTime",$param) and $param["OffsetTime"] !== null) {
            $this->OffsetTime = $param["OffsetTime"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new AudioResult();
            $this->Result->deserialize($param["Result"]);
        }
    }
}
