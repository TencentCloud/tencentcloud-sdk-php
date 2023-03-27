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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转码任务结果
 *
 * @method string getResultUrl() 获取转码结果地址
 * @method void setResultUrl(string $ResultUrl) 设置转码结果地址
 * @method string getResolution() 获取分辨率
 * @method void setResolution(string $Resolution) 设置分辨率
 * @method string getTitle() 获取标题（一般为文件名）
 * @method void setTitle(string $Title) 设置标题（一般为文件名）
 * @method integer getPages() 获取转码页数
 * @method void setPages(integer $Pages) 设置转码页数
 * @method string getThumbnailUrl() 获取缩略图URL前缀，比如，该URL前缀为http://example.com/g0jb42ps49vtebjshilb/，那么动态PPT第1页的缩略图URL为
http://example.com/g0jb42ps49vtebjshilb/1.jpg，其它页以此类推

如果发起文档转码请求参数中带了ThumbnailResolution参数，并且转码类型为动态转码，该参数不为空，其余情况该参数为空字符串
 * @method void setThumbnailUrl(string $ThumbnailUrl) 设置缩略图URL前缀，比如，该URL前缀为http://example.com/g0jb42ps49vtebjshilb/，那么动态PPT第1页的缩略图URL为
http://example.com/g0jb42ps49vtebjshilb/1.jpg，其它页以此类推

如果发起文档转码请求参数中带了ThumbnailResolution参数，并且转码类型为动态转码，该参数不为空，其余情况该参数为空字符串
 * @method string getThumbnailResolution() 获取动态转码缩略图生成分辨率
 * @method void setThumbnailResolution(string $ThumbnailResolution) 设置动态转码缩略图生成分辨率
 * @method string getCompressFileUrl() 获取转码压缩文件下载的URL，如果发起文档转码请求参数中CompressFileType为空或者不是支持的压缩格式，该参数为空字符串
 * @method void setCompressFileUrl(string $CompressFileUrl) 设置转码压缩文件下载的URL，如果发起文档转码请求参数中CompressFileType为空或者不是支持的压缩格式，该参数为空字符串
 * @method integer getErrorCode() 获取任务失败错误码
 * @method void setErrorCode(integer $ErrorCode) 设置任务失败错误码
 * @method string getErrorMsg() 获取任务失败错误信息
 * @method void setErrorMsg(string $ErrorMsg) 设置任务失败错误信息
 */
class TranscodeTaskResult extends AbstractModel
{
    /**
     * @var string 转码结果地址
     */
    public $ResultUrl;

    /**
     * @var string 分辨率
     */
    public $Resolution;

    /**
     * @var string 标题（一般为文件名）
     */
    public $Title;

    /**
     * @var integer 转码页数
     */
    public $Pages;

    /**
     * @var string 缩略图URL前缀，比如，该URL前缀为http://example.com/g0jb42ps49vtebjshilb/，那么动态PPT第1页的缩略图URL为
http://example.com/g0jb42ps49vtebjshilb/1.jpg，其它页以此类推

如果发起文档转码请求参数中带了ThumbnailResolution参数，并且转码类型为动态转码，该参数不为空，其余情况该参数为空字符串
     */
    public $ThumbnailUrl;

    /**
     * @var string 动态转码缩略图生成分辨率
     */
    public $ThumbnailResolution;

    /**
     * @var string 转码压缩文件下载的URL，如果发起文档转码请求参数中CompressFileType为空或者不是支持的压缩格式，该参数为空字符串
     */
    public $CompressFileUrl;

    /**
     * @var integer 任务失败错误码
     */
    public $ErrorCode;

    /**
     * @var string 任务失败错误信息
     */
    public $ErrorMsg;

    /**
     * @param string $ResultUrl 转码结果地址
     * @param string $Resolution 分辨率
     * @param string $Title 标题（一般为文件名）
     * @param integer $Pages 转码页数
     * @param string $ThumbnailUrl 缩略图URL前缀，比如，该URL前缀为http://example.com/g0jb42ps49vtebjshilb/，那么动态PPT第1页的缩略图URL为
http://example.com/g0jb42ps49vtebjshilb/1.jpg，其它页以此类推

如果发起文档转码请求参数中带了ThumbnailResolution参数，并且转码类型为动态转码，该参数不为空，其余情况该参数为空字符串
     * @param string $ThumbnailResolution 动态转码缩略图生成分辨率
     * @param string $CompressFileUrl 转码压缩文件下载的URL，如果发起文档转码请求参数中CompressFileType为空或者不是支持的压缩格式，该参数为空字符串
     * @param integer $ErrorCode 任务失败错误码
     * @param string $ErrorMsg 任务失败错误信息
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
        if (array_key_exists("ResultUrl",$param) and $param["ResultUrl"] !== null) {
            $this->ResultUrl = $param["ResultUrl"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }

        if (array_key_exists("ThumbnailUrl",$param) and $param["ThumbnailUrl"] !== null) {
            $this->ThumbnailUrl = $param["ThumbnailUrl"];
        }

        if (array_key_exists("ThumbnailResolution",$param) and $param["ThumbnailResolution"] !== null) {
            $this->ThumbnailResolution = $param["ThumbnailResolution"];
        }

        if (array_key_exists("CompressFileUrl",$param) and $param["CompressFileUrl"] !== null) {
            $this->CompressFileUrl = $param["CompressFileUrl"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}
