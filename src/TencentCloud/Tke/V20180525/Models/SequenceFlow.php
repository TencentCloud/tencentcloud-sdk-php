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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发布序列步骤
 *
 * @method array getTags() 获取发布序列步骤标签
 * @method void setTags(array $Tags) 设置发布序列步骤标签
 * @method integer getSoakTime() 获取等待时间（秒）
 * @method void setSoakTime(integer $SoakTime) 设置等待时间（秒）
 */
class SequenceFlow extends AbstractModel
{
    /**
     * @var array 发布序列步骤标签
     */
    public $Tags;

    /**
     * @var integer 等待时间（秒）
     */
    public $SoakTime;

    /**
     * @param array $Tags 发布序列步骤标签
     * @param integer $SoakTime 等待时间（秒）
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
        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new SequenceTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SoakTime",$param) and $param["SoakTime"] !== null) {
            $this->SoakTime = $param["SoakTime"];
        }
    }
}
