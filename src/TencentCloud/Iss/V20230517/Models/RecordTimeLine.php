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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云录像时间片段
 *
 * @method integer getBegin() 获取时间片段开始时间，UTC秒数，例如：1662114146
 * @method void setBegin(integer $Begin) 设置时间片段开始时间，UTC秒数，例如：1662114146
 * @method integer getEnd() 获取时间片段结束时间，UTC秒数，例如：1662114146
 * @method void setEnd(integer $End) 设置时间片段结束时间，UTC秒数，例如：1662114146
 * @method string getHlsUrl() 获取对应时间片段的播放url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHlsUrl(string $HlsUrl) 设置对应时间片段的播放url
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecordTimeLine extends AbstractModel
{
    /**
     * @var integer 时间片段开始时间，UTC秒数，例如：1662114146
     */
    public $Begin;

    /**
     * @var integer 时间片段结束时间，UTC秒数，例如：1662114146
     */
    public $End;

    /**
     * @var string 对应时间片段的播放url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HlsUrl;

    /**
     * @param integer $Begin 时间片段开始时间，UTC秒数，例如：1662114146
     * @param integer $End 时间片段结束时间，UTC秒数，例如：1662114146
     * @param string $HlsUrl 对应时间片段的播放url
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
        if (array_key_exists("Begin",$param) and $param["Begin"] !== null) {
            $this->Begin = $param["Begin"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("HlsUrl",$param) and $param["HlsUrl"] !== null) {
            $this->HlsUrl = $param["HlsUrl"];
        }
    }
}
