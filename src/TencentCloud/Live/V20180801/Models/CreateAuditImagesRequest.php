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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAuditImages请求参数结构体
 *
 * @method array getImages() 获取<p>样本图片列表。</p>
 * @method void setImages(array $Images) 设置<p>样本图片列表。</p>
 */
class CreateAuditImagesRequest extends AbstractModel
{
    /**
     * @var array <p>样本图片列表。</p>
     */
    public $Images;

    /**
     * @param array $Images <p>样本图片列表。</p>
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
                $obj = new AuditImage();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }
    }
}
