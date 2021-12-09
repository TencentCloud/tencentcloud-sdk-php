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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能分类结果信息
 *
 * @method array getClassificationSet() 获取视频智能分类列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 ClassificationSetFileUrl 对应的文件中获取。
 * @method void setClassificationSet(array $ClassificationSet) 设置视频智能分类列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 ClassificationSetFileUrl 对应的文件中获取。
 * @method string getClassificationSetFileUrl() 获取视频智能分类列表文件 URL。文件的内容为 JSON，数据结构与 ClassificationSet 字段一致。 （文件不会永久存储，到达 ClassificationSetFileUrlExpireTime 时间点后文件将被删除）。
 * @method void setClassificationSetFileUrl(string $ClassificationSetFileUrl) 设置视频智能分类列表文件 URL。文件的内容为 JSON，数据结构与 ClassificationSet 字段一致。 （文件不会永久存储，到达 ClassificationSetFileUrlExpireTime 时间点后文件将被删除）。
 * @method string getClassificationSetFileUrlExpireTime() 获取视频智能分类列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setClassificationSetFileUrlExpireTime(string $ClassificationSetFileUrlExpireTime) 设置视频智能分类列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class AiAnalysisTaskClassificationOutput extends AbstractModel
{
    /**
     * @var array 视频智能分类列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 ClassificationSetFileUrl 对应的文件中获取。
     */
    public $ClassificationSet;

    /**
     * @var string 视频智能分类列表文件 URL。文件的内容为 JSON，数据结构与 ClassificationSet 字段一致。 （文件不会永久存储，到达 ClassificationSetFileUrlExpireTime 时间点后文件将被删除）。
     */
    public $ClassificationSetFileUrl;

    /**
     * @var string 视频智能分类列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $ClassificationSetFileUrlExpireTime;

    /**
     * @param array $ClassificationSet 视频智能分类列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 ClassificationSetFileUrl 对应的文件中获取。
     * @param string $ClassificationSetFileUrl 视频智能分类列表文件 URL。文件的内容为 JSON，数据结构与 ClassificationSet 字段一致。 （文件不会永久存储，到达 ClassificationSetFileUrlExpireTime 时间点后文件将被删除）。
     * @param string $ClassificationSetFileUrlExpireTime 视频智能分类列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
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
        if (array_key_exists("ClassificationSet",$param) and $param["ClassificationSet"] !== null) {
            $this->ClassificationSet = [];
            foreach ($param["ClassificationSet"] as $key => $value){
                $obj = new MediaAiAnalysisClassificationItem();
                $obj->deserialize($value);
                array_push($this->ClassificationSet, $obj);
            }
        }

        if (array_key_exists("ClassificationSetFileUrl",$param) and $param["ClassificationSetFileUrl"] !== null) {
            $this->ClassificationSetFileUrl = $param["ClassificationSetFileUrl"];
        }

        if (array_key_exists("ClassificationSetFileUrlExpireTime",$param) and $param["ClassificationSetFileUrlExpireTime"] !== null) {
            $this->ClassificationSetFileUrlExpireTime = $param["ClassificationSetFileUrlExpireTime"];
        }
    }
}
