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
 * 音视频审核任务的输入。
 *
 * @method string getFileId() 获取媒体文件 ID。
 * @method void setFileId(string $FileId) 设置媒体文件 ID。
 * @method integer getDefinition() 获取音视频审核模板 ID。
 * @method void setDefinition(integer $Definition) 设置音视频审核模板 ID。
 * @method array getReviewContents() 获取审核的内容，可选值：
<li>Media：原始音视频；</li>
<li>Cover：封面。</li>
 * @method void setReviewContents(array $ReviewContents) 设置审核的内容，可选值：
<li>Media：原始音视频；</li>
<li>Cover：封面。</li>
 */
class ReviewAudioVideoTaskInput extends AbstractModel
{
    /**
     * @var string 媒体文件 ID。
     */
    public $FileId;

    /**
     * @var integer 音视频审核模板 ID。
     */
    public $Definition;

    /**
     * @var array 审核的内容，可选值：
<li>Media：原始音视频；</li>
<li>Cover：封面。</li>
     */
    public $ReviewContents;

    /**
     * @param string $FileId 媒体文件 ID。
     * @param integer $Definition 音视频审核模板 ID。
     * @param array $ReviewContents 审核的内容，可选值：
<li>Media：原始音视频；</li>
<li>Cover：封面。</li>
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ReviewContents",$param) and $param["ReviewContents"] !== null) {
            $this->ReviewContents = $param["ReviewContents"];
        }
    }
}
