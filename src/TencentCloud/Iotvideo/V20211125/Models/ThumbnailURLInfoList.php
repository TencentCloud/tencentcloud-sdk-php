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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 缩略图信息
 *
 * @method string getThumbnailURL() 获取缩略图访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThumbnailURL(string $ThumbnailURL) 设置缩略图访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取缩略图访问地址的过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(integer $ExpireTime) 设置缩略图访问地址的过期时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ThumbnailURLInfoList extends AbstractModel
{
    /**
     * @var string 缩略图访问地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThumbnailURL;

    /**
     * @var integer 缩略图访问地址的过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @param string $ThumbnailURL 缩略图访问地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime 缩略图访问地址的过期时间
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
        if (array_key_exists("ThumbnailURL",$param) and $param["ThumbnailURL"] !== null) {
            $this->ThumbnailURL = $param["ThumbnailURL"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
