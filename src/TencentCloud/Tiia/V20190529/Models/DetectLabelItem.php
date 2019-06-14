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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getName() 获取图片中的物体名称。
 * @method void setName(string $Name) 设置图片中的物体名称。
 * @method integer getConfidence() 获取算法对于Name的置信度，0-100之间，值越高，表示对于Name越确定。
 * @method void setConfidence(integer $Confidence) 设置算法对于Name的置信度，0-100之间，值越高，表示对于Name越确定。
 */

/**
 *图像标签检测结果。
 */
class DetectLabelItem extends AbstractModel
{
    /**
     * @var string 图片中的物体名称。
     */
    public $Name;

    /**
     * @var integer 算法对于Name的置信度，0-100之间，值越高，表示对于Name越确定。
     */
    public $Confidence;
    /**
     * @param string $Name 图片中的物体名称。
     * @param integer $Confidence 算法对于Name的置信度，0-100之间，值越高，表示对于Name越确定。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
