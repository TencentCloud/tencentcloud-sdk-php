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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLibSamples请求参数结构体
 *
 * @method array getSampleIDs() 获取关键词ID列表
 * @method void setSampleIDs(array $SampleIDs) 设置关键词ID列表
 * @method string getLibID() 获取词库ID
 * @method void setLibID(string $LibID) 设置词库ID
 * @method array getSampleContents() 获取关键词内容列表
 * @method void setSampleContents(array $SampleContents) 设置关键词内容列表
 */
class DeleteLibSamplesRequest extends AbstractModel
{
    /**
     * @var array 关键词ID列表
     */
    public $SampleIDs;

    /**
     * @var string 词库ID
     */
    public $LibID;

    /**
     * @var array 关键词内容列表
     */
    public $SampleContents;

    /**
     * @param array $SampleIDs 关键词ID列表
     * @param string $LibID 词库ID
     * @param array $SampleContents 关键词内容列表
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
        if (array_key_exists("SampleIDs",$param) and $param["SampleIDs"] !== null) {
            $this->SampleIDs = $param["SampleIDs"];
        }

        if (array_key_exists("LibID",$param) and $param["LibID"] !== null) {
            $this->LibID = $param["LibID"];
        }

        if (array_key_exists("SampleContents",$param) and $param["SampleContents"] !== null) {
            $this->SampleContents = $param["SampleContents"];
        }
    }
}
