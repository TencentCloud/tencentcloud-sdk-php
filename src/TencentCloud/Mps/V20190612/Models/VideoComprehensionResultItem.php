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
 * 视频分镜理解结果
 *
 * @method float getStartTime() 获取分镜片段起始时间（单位：秒）

 * @method void setStartTime(float $StartTime) 设置分镜片段起始时间（单位：秒）

 * @method float getEndTime() 获取分镜片段结束时间（单位：秒）
 * @method void setEndTime(float $EndTime) 设置分镜片段结束时间（单位：秒）
 * @method string getTitle() 获取分镜片段标题
 * @method void setTitle(string $Title) 设置分镜片段标题
 * @method string getDescription() 获取分镜片段信息描述
 * @method void setDescription(string $Description) 设置分镜片段信息描述
 * @method array getKeywords() 获取分镜片段关键词
 * @method void setKeywords(array $Keywords) 设置分镜片段关键词
 */
class VideoComprehensionResultItem extends AbstractModel
{
    /**
     * @var float 分镜片段起始时间（单位：秒）

     */
    public $StartTime;

    /**
     * @var float 分镜片段结束时间（单位：秒）
     */
    public $EndTime;

    /**
     * @var string 分镜片段标题
     */
    public $Title;

    /**
     * @var string 分镜片段信息描述
     */
    public $Description;

    /**
     * @var array 分镜片段关键词
     */
    public $Keywords;

    /**
     * @param float $StartTime 分镜片段起始时间（单位：秒）

     * @param float $EndTime 分镜片段结束时间（单位：秒）
     * @param string $Title 分镜片段标题
     * @param string $Description 分镜片段信息描述
     * @param array $Keywords 分镜片段关键词
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }
    }
}
