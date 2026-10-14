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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量获取截图图片URL列表信息
 *
 * @method array getImages() 获取<p>图片Url信息</p>
 * @method void setImages(array $Images) 设置<p>图片Url信息</p>
 * @method integer getImageUrlExpires() 获取<p>图片Url有效期</p><p>单位：秒</p><p>默认值：600</p>
 * @method void setImageUrlExpires(integer $ImageUrlExpires) 设置<p>图片Url有效期</p><p>单位：秒</p><p>默认值：600</p>
 */
class BatchGetVideoSnapshotImageUrlData extends AbstractModel
{
    /**
     * @var array <p>图片Url信息</p>
     */
    public $Images;

    /**
     * @var integer <p>图片Url有效期</p><p>单位：秒</p><p>默认值：600</p>
     */
    public $ImageUrlExpires;

    /**
     * @param array $Images <p>图片Url信息</p>
     * @param integer $ImageUrlExpires <p>图片Url有效期</p><p>单位：秒</p><p>默认值：600</p>
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
        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new ImageUrlInfo();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("ImageUrlExpires",$param) and $param["ImageUrlExpires"] !== null) {
            $this->ImageUrlExpires = $param["ImageUrlExpires"];
        }
    }
}
