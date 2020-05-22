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
 * 广角会媒体信息
 *
 * @method array getPic() 获取数组类图片信息
 * @method void setPic(array $Pic) 设置数组类图片信息
 * @method array getText() 获取数组类文本信息
 * @method void setText(array $Text) 设置数组类文本信息
 * @method array getVideo() 获取数组类视频信息
 * @method void setVideo(array $Video) 设置数组类视频信息
 */
class MediaGjh extends AbstractModel
{
    /**
     * @var array 数组类图片信息
     */
    public $Pic;

    /**
     * @var array 数组类文本信息
     */
    public $Text;

    /**
     * @var array 数组类视频信息
     */
    public $Video;

    /**
     * @param array $Pic 数组类图片信息
     * @param array $Text 数组类文本信息
     * @param array $Video 数组类视频信息
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
        if (array_key_exists("Pic",$param) and $param["Pic"] !== null) {
            $this->Pic = [];
            foreach ($param["Pic"] as $key => $value){
                $obj = new MediaInfoTypeGjh();
                $obj->deserialize($value);
                array_push($this->Pic, $obj);
            }
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = [];
            foreach ($param["Text"] as $key => $value){
                $obj = new MediaInfoTypeGjh();
                $obj->deserialize($value);
                array_push($this->Text, $obj);
            }
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = [];
            foreach ($param["Video"] as $key => $value){
                $obj = new MediaInfoTypeGjh();
                $obj->deserialize($value);
                array_push($this->Video, $obj);
            }
        }
    }
}
