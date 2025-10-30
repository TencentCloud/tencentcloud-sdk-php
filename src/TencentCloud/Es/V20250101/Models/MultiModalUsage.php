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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多模态向量化消耗tokens和images数量
 *
 * @method integer getTotalTokens() 获取消耗tokens
 * @method void setTotalTokens(integer $TotalTokens) 设置消耗tokens
 * @method integer getTotalImages() 获取输入图片数量
 * @method void setTotalImages(integer $TotalImages) 设置输入图片数量
 */
class MultiModalUsage extends AbstractModel
{
    /**
     * @var integer 消耗tokens
     */
    public $TotalTokens;

    /**
     * @var integer 输入图片数量
     */
    public $TotalImages;

    /**
     * @param integer $TotalTokens 消耗tokens
     * @param integer $TotalImages 输入图片数量
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
        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }

        if (array_key_exists("TotalImages",$param) and $param["TotalImages"] !== null) {
            $this->TotalImages = $param["TotalImages"];
        }
    }
}
