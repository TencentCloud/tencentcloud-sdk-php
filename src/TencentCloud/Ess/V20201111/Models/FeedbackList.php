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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 信息提取任务反馈信息列表
 *
 * @method string getId() 获取信息提取结果字段ID
 * @method void setId(string $Id) 设置信息提取结果字段ID
 * @method FeedbackInfo getInfo() 获取反馈信息
 * @method void setInfo(FeedbackInfo $Info) 设置反馈信息
 */
class FeedbackList extends AbstractModel
{
    /**
     * @var string 信息提取结果字段ID
     */
    public $Id;

    /**
     * @var FeedbackInfo 反馈信息
     */
    public $Info;

    /**
     * @param string $Id 信息提取结果字段ID
     * @param FeedbackInfo $Info 反馈信息
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = new FeedbackInfo();
            $this->Info->deserialize($param["Info"]);
        }
    }
}
