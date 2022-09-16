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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 提取溯源水印输出信息
 *
 * @method string getUv() 获取播放者的 ID，以十六进制表示，共6位，该参数用于 [溯源水印](https://cloud.tencent.com/document/product/266/75789) 使用场景。
 * @method void setUv(string $Uv) 设置播放者的 ID，以十六进制表示，共6位，该参数用于 [溯源水印](https://cloud.tencent.com/document/product/266/75789) 使用场景。
 * @method string getUid() 获取该字段已废弃。
 * @method void setUid(string $Uid) 设置该字段已废弃。
 */
class ExtractTraceWatermarkTaskOutput extends AbstractModel
{
    /**
     * @var string 播放者的 ID，以十六进制表示，共6位，该参数用于 [溯源水印](https://cloud.tencent.com/document/product/266/75789) 使用场景。
     */
    public $Uv;

    /**
     * @var string 该字段已废弃。
     */
    public $Uid;

    /**
     * @param string $Uv 播放者的 ID，以十六进制表示，共6位，该参数用于 [溯源水印](https://cloud.tencent.com/document/product/266/75789) 使用场景。
     * @param string $Uid 该字段已废弃。
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
        if (array_key_exists("Uv",$param) and $param["Uv"] !== null) {
            $this->Uv = $param["Uv"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }
    }
}
