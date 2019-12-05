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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getUrl() 获取音乐播放链接相对路径，必须通过在音乐版权助手上登记的域名进行拼接。
 * @method void setUrl(string $Url) 设置音乐播放链接相对路径，必须通过在音乐版权助手上登记的域名进行拼接。
 * @method integer getFileSize() 获取音频文件大小
 * @method void setFileSize(integer $FileSize) 设置音频文件大小
 * @method string getFileExtension() 获取音频文件类型
 * @method void setFileExtension(string $FileExtension) 设置音频文件类型
 * @method integer getAuditionBegin() 获取Song fragment start.试听片段开始时间，试听时长为auditionEnd-auditionBegin
Unit :ms
 * @method void setAuditionBegin(integer $AuditionBegin) 设置Song fragment start.试听片段开始时间，试听时长为auditionEnd-auditionBegin
Unit :ms
 * @method integer getAuditionEnd() 获取Song fragment end.试听片段结束时间, 试听时长为auditionEnd-auditionBegin
Unit :ms
 * @method void setAuditionEnd(integer $AuditionEnd) 设置Song fragment end.试听片段结束时间, 试听时长为auditionEnd-auditionBegin
Unit :ms
 */

/**
 *Music
 */
class Music extends AbstractModel
{
    /**
     * @var string 音乐播放链接相对路径，必须通过在音乐版权助手上登记的域名进行拼接。
     */
    public $Url;

    /**
     * @var integer 音频文件大小
     */
    public $FileSize;

    /**
     * @var string 音频文件类型
     */
    public $FileExtension;

    /**
     * @var integer Song fragment start.试听片段开始时间，试听时长为auditionEnd-auditionBegin
Unit :ms
     */
    public $AuditionBegin;

    /**
     * @var integer Song fragment end.试听片段结束时间, 试听时长为auditionEnd-auditionBegin
Unit :ms
     */
    public $AuditionEnd;
    /**
     * @param string $Url 音乐播放链接相对路径，必须通过在音乐版权助手上登记的域名进行拼接。
     * @param integer $FileSize 音频文件大小
     * @param string $FileExtension 音频文件类型
     * @param integer $AuditionBegin Song fragment start.试听片段开始时间，试听时长为auditionEnd-auditionBegin
Unit :ms
     * @param integer $AuditionEnd Song fragment end.试听片段结束时间, 试听时长为auditionEnd-auditionBegin
Unit :ms
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileExtension",$param) and $param["FileExtension"] !== null) {
            $this->FileExtension = $param["FileExtension"];
        }

        if (array_key_exists("AuditionBegin",$param) and $param["AuditionBegin"] !== null) {
            $this->AuditionBegin = $param["AuditionBegin"];
        }

        if (array_key_exists("AuditionEnd",$param) and $param["AuditionEnd"] !== null) {
            $this->AuditionEnd = $param["AuditionEnd"];
        }
    }
}
