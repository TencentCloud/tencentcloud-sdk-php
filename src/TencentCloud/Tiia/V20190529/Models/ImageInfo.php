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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片信息
 *
 * @method string getEntityId() 获取图片名称。
 * @method void setEntityId(string $EntityId) 设置图片名称。
 * @method string getCustomContent() 获取用户自定义的内容。
 * @method void setCustomContent(string $CustomContent) 设置用户自定义的内容。
 * @method string getTags() 获取图片自定义标签，JSON格式。
 * @method void setTags(string $Tags) 设置图片自定义标签，JSON格式。
 * @method string getPicName() 获取图片名称。
 * @method void setPicName(string $PicName) 设置图片名称。
 * @method integer getScore() 获取相似度。
 * @method void setScore(integer $Score) 设置相似度。
 */
class ImageInfo extends AbstractModel
{
    /**
     * @var string 图片名称。
     */
    public $EntityId;

    /**
     * @var string 用户自定义的内容。
     */
    public $CustomContent;

    /**
     * @var string 图片自定义标签，JSON格式。
     */
    public $Tags;

    /**
     * @var string 图片名称。
     */
    public $PicName;

    /**
     * @var integer 相似度。
     */
    public $Score;

    /**
     * @param string $EntityId 图片名称。
     * @param string $CustomContent 用户自定义的内容。
     * @param string $Tags 图片自定义标签，JSON格式。
     * @param string $PicName 图片名称。
     * @param integer $Score 相似度。
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
        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("CustomContent",$param) and $param["CustomContent"] !== null) {
            $this->CustomContent = $param["CustomContent"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("PicName",$param) and $param["PicName"] !== null) {
            $this->PicName = $param["PicName"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
