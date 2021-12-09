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
 * 智能标签结果信息
 *
 * @method array getTagSet() 获取视频智能标签列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 TagSetFileUrl 对应的文件中获取。
 * @method void setTagSet(array $TagSet) 设置视频智能标签列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 TagSetFileUrl 对应的文件中获取。
 * @method string getTagSetFileUrl() 获取视频智能标签列表文件 URL。文件的内容为 JSON，数据结构与 TagSet 字段一致。 （文件不会永久存储，到达 TagSetFileUrlExpireTime 时间点后文件将被删除）。
 * @method void setTagSetFileUrl(string $TagSetFileUrl) 设置视频智能标签列表文件 URL。文件的内容为 JSON，数据结构与 TagSet 字段一致。 （文件不会永久存储，到达 TagSetFileUrlExpireTime 时间点后文件将被删除）。
 * @method string getTagSetFileUrlExpireTime() 获取视频智能标签列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setTagSetFileUrlExpireTime(string $TagSetFileUrlExpireTime) 设置视频智能标签列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class AiAnalysisTaskTagOutput extends AbstractModel
{
    /**
     * @var array 视频智能标签列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 TagSetFileUrl 对应的文件中获取。
     */
    public $TagSet;

    /**
     * @var string 视频智能标签列表文件 URL。文件的内容为 JSON，数据结构与 TagSet 字段一致。 （文件不会永久存储，到达 TagSetFileUrlExpireTime 时间点后文件将被删除）。
     */
    public $TagSetFileUrl;

    /**
     * @var string 视频智能标签列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $TagSetFileUrlExpireTime;

    /**
     * @param array $TagSet 视频智能标签列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 TagSetFileUrl 对应的文件中获取。
     * @param string $TagSetFileUrl 视频智能标签列表文件 URL。文件的内容为 JSON，数据结构与 TagSet 字段一致。 （文件不会永久存储，到达 TagSetFileUrlExpireTime 时间点后文件将被删除）。
     * @param string $TagSetFileUrlExpireTime 视频智能标签列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
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
        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new MediaAiAnalysisTagItem();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("TagSetFileUrl",$param) and $param["TagSetFileUrl"] !== null) {
            $this->TagSetFileUrl = $param["TagSetFileUrl"];
        }

        if (array_key_exists("TagSetFileUrlExpireTime",$param) and $param["TagSetFileUrlExpireTime"] !== null) {
            $this->TagSetFileUrlExpireTime = $param["TagSetFileUrlExpireTime"];
        }
    }
}
