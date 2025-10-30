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
namespace TencentCloud\Vtc\V20240223\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConfirmVideoTranslateJob请求参数结构体
 *
 * @method string getJobId() 获取视频翻译任务 ID
 * @method void setJobId(string $JobId) 设置视频翻译任务 ID
 * @method array getTranslateResults() 获取待确认文本
 * @method void setTranslateResults(array $TranslateResults) 设置待确认文本
 */
class ConfirmVideoTranslateJobRequest extends AbstractModel
{
    /**
     * @var string 视频翻译任务 ID
     */
    public $JobId;

    /**
     * @var array 待确认文本
     */
    public $TranslateResults;

    /**
     * @param string $JobId 视频翻译任务 ID
     * @param array $TranslateResults 待确认文本
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("TranslateResults",$param) and $param["TranslateResults"] !== null) {
            $this->TranslateResults = [];
            foreach ($param["TranslateResults"] as $key => $value){
                $obj = new AudioTranslateResult();
                $obj->deserialize($value);
                array_push($this->TranslateResults, $obj);
            }
        }
    }
}
