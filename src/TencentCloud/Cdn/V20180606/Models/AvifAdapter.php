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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片优化-AvifAdapter配置
 *
 * @method string getSwitch() 获取图片优化AvifAdapter配置项开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置图片优化AvifAdapter配置项开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFallbackFormats() 获取当原图是 avif 且客户端 Accept 头包含 image/avif 时，直接返回原图。
当原图是 avif 且客户端 Accept 头不包含 image/avif 时但包含 image/webp，将 avif 转 webp 格式返回。如果 Accept 头不包含 image/webp, 则转 jpeg 返回。

可用的枚举值： 
- []
- ["webp"]
- ["jpeg"]
- ["webp", "jpeg"]

"webp"：是否开启  avif 转 webp，"jpeg": 是否开启 avif 转 jpeg。如果 webp 和 jpeg 都开启的情况下，webp 必须在 jpeg 前面。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFallbackFormats(array $FallbackFormats) 设置当原图是 avif 且客户端 Accept 头包含 image/avif 时，直接返回原图。
当原图是 avif 且客户端 Accept 头不包含 image/avif 时但包含 image/webp，将 avif 转 webp 格式返回。如果 Accept 头不包含 image/webp, 则转 jpeg 返回。

可用的枚举值： 
- []
- ["webp"]
- ["jpeg"]
- ["webp", "jpeg"]

"webp"：是否开启  avif 转 webp，"jpeg": 是否开启 avif 转 jpeg。如果 webp 和 jpeg 都开启的情况下，webp 必须在 jpeg 前面。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AvifAdapter extends AbstractModel
{
    /**
     * @var string 图片优化AvifAdapter配置项开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var array 当原图是 avif 且客户端 Accept 头包含 image/avif 时，直接返回原图。
当原图是 avif 且客户端 Accept 头不包含 image/avif 时但包含 image/webp，将 avif 转 webp 格式返回。如果 Accept 头不包含 image/webp, 则转 jpeg 返回。

可用的枚举值： 
- []
- ["webp"]
- ["jpeg"]
- ["webp", "jpeg"]

"webp"：是否开启  avif 转 webp，"jpeg": 是否开启 avif 转 jpeg。如果 webp 和 jpeg 都开启的情况下，webp 必须在 jpeg 前面。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FallbackFormats;

    /**
     * @param string $Switch 图片优化AvifAdapter配置项开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FallbackFormats 当原图是 avif 且客户端 Accept 头包含 image/avif 时，直接返回原图。
当原图是 avif 且客户端 Accept 头不包含 image/avif 时但包含 image/webp，将 avif 转 webp 格式返回。如果 Accept 头不包含 image/webp, 则转 jpeg 返回。

可用的枚举值： 
- []
- ["webp"]
- ["jpeg"]
- ["webp", "jpeg"]

"webp"：是否开启  avif 转 webp，"jpeg": 是否开启 avif 转 jpeg。如果 webp 和 jpeg 都开启的情况下，webp 必须在 jpeg 前面。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("FallbackFormats",$param) and $param["FallbackFormats"] !== null) {
            $this->FallbackFormats = $param["FallbackFormats"];
        }
    }
}
