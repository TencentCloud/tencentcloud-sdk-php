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
 * 图片标签。
 *
 * @method string getName() 获取标签内容。
 * @method void setName(string $Name) 设置标签内容。
 * @method float getConfidence() 获取置信度范围在0-100之间。值越高，表示目标为相应结果的可能性越高。
 * @method void setConfidence(float $Confidence) 设置置信度范围在0-100之间。值越高，表示目标为相应结果的可能性越高。
 */
class ImageTag extends AbstractModel
{
    /**
     * @var string 标签内容。
     */
    public $Name;

    /**
     * @var float 置信度范围在0-100之间。值越高，表示目标为相应结果的可能性越高。
     */
    public $Confidence;

    /**
     * @param string $Name 标签内容。
     * @param float $Confidence 置信度范围在0-100之间。值越高，表示目标为相应结果的可能性越高。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
