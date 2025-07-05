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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI视频搜索结果结构体。
 *
 * @method string getSummary() 获取基于搜索结果的总结
 * @method void setSummary(string $Summary) 设置基于搜索结果的总结
 * @method array getTargets() 获取视频结果集
 * @method void setTargets(array $Targets) 设置视频结果集
 * @method string getVideoURL() 获取视频回放URL
 * @method void setVideoURL(string $VideoURL) 设置视频回放URL
 */
class AISearchInfo extends AbstractModel
{
    /**
     * @var string 基于搜索结果的总结
     */
    public $Summary;

    /**
     * @var array 视频结果集
     */
    public $Targets;

    /**
     * @var string 视频回放URL
     */
    public $VideoURL;

    /**
     * @param string $Summary 基于搜索结果的总结
     * @param array $Targets 视频结果集
     * @param string $VideoURL 视频回放URL
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
        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new TargetInfo();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("VideoURL",$param) and $param["VideoURL"] !== null) {
            $this->VideoURL = $param["VideoURL"];
        }
    }
}
