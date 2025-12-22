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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片处理附加输入参数。
 *
 * @method array getImageSet() 获取附加图片输入。
 * @method void setImageSet(array $ImageSet) 设置附加图片输入。
 * @method ImageProcessOutputConfig getOutputConfig() 获取图片处理输出配置。
 * @method void setOutputConfig(ImageProcessOutputConfig $OutputConfig) 设置图片处理输出配置。
 */
class AddOnParameter extends AbstractModel
{
    /**
     * @var array 附加图片输入。
     */
    public $ImageSet;

    /**
     * @var ImageProcessOutputConfig 图片处理输出配置。
     */
    public $OutputConfig;

    /**
     * @param array $ImageSet 附加图片输入。
     * @param ImageProcessOutputConfig $OutputConfig 图片处理输出配置。
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
        if (array_key_exists("ImageSet",$param) and $param["ImageSet"] !== null) {
            $this->ImageSet = [];
            foreach ($param["ImageSet"] as $key => $value){
                $obj = new AddOnImageInput();
                $obj->deserialize($value);
                array_push($this->ImageSet, $obj);
            }
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new ImageProcessOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }
    }
}
