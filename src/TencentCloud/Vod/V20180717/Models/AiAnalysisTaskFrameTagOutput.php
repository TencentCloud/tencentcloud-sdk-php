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
 * 智能按帧标签结果信息
 *
 * @method array getSegmentSet() 获取视频按帧标签列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。
 * @method void setSegmentSet(array $SegmentSet) 设置视频按帧标签列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。
 * @method string getSegmentSetFileUrl() 获取视频按帧标签列表文件 URL。文件的内容为 JSON，数据结构与 SegmentSet 字段一致。 （文件不会永久存储，到达SegmentSetFileUrlExpireTime 时间点后文件将被删除）。
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) 设置视频按帧标签列表文件 URL。文件的内容为 JSON，数据结构与 SegmentSet 字段一致。 （文件不会永久存储，到达SegmentSetFileUrlExpireTime 时间点后文件将被删除）。
 * @method string getSegmentSetFileUrlExpireTime() 获取视频按帧标签列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) 设置视频按帧标签列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class AiAnalysisTaskFrameTagOutput extends AbstractModel
{
    /**
     * @var array 视频按帧标签列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。
     */
    public $SegmentSet;

    /**
     * @var string 视频按帧标签列表文件 URL。文件的内容为 JSON，数据结构与 SegmentSet 字段一致。 （文件不会永久存储，到达SegmentSetFileUrlExpireTime 时间点后文件将被删除）。
     */
    public $SegmentSetFileUrl;

    /**
     * @var string 视频按帧标签列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param array $SegmentSet 视频按帧标签列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。
     * @param string $SegmentSetFileUrl 视频按帧标签列表文件 URL。文件的内容为 JSON，数据结构与 SegmentSet 字段一致。 （文件不会永久存储，到达SegmentSetFileUrlExpireTime 时间点后文件将被删除）。
     * @param string $SegmentSetFileUrlExpireTime 视频按帧标签列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
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
        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new MediaAiAnalysisFrameTagSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("SegmentSetFileUrl",$param) and $param["SegmentSetFileUrl"] !== null) {
            $this->SegmentSetFileUrl = $param["SegmentSetFileUrl"];
        }

        if (array_key_exists("SegmentSetFileUrlExpireTime",$param) and $param["SegmentSetFileUrlExpireTime"] !== null) {
            $this->SegmentSetFileUrlExpireTime = $param["SegmentSetFileUrlExpireTime"];
        }
    }
}
