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
 * CreatePPTCheckTask请求参数结构体
 *
 * @method integer getSdkAppId() 获取客户的SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置客户的SdkAppId
 * @method string getUrl() 获取经过URL编码后的PPT文件地址。URL 编码会将字符转换为可通过因特网传输的格式，例如文档地址为http://example.com/测试.pptx，经过URL编码之后为http://example.com/%E6%B5%8B%E8%AF%95.pptx。为了提高URL解析的成功率，请对URL进行编码。
 * @method void setUrl(string $Url) 设置经过URL编码后的PPT文件地址。URL 编码会将字符转换为可通过因特网传输的格式，例如文档地址为http://example.com/测试.pptx，经过URL编码之后为http://example.com/%E6%B5%8B%E8%AF%95.pptx。为了提高URL解析的成功率，请对URL进行编码。
 * @method boolean getAutoHandleUnsupportedElement() 获取是否对不支持元素开启自动处理的功能。默认不开启。

在开启自动处理的情况下，会自动进行如下处理：
1. 墨迹：移除不支持的墨迹（比如使用WPS画的）
2. 自动翻页：移除PPT上所有的自动翻页设置，并设置为单击鼠标翻页
3. 已损坏音视频：移除PPT上对损坏音视频的引用
 * @method void setAutoHandleUnsupportedElement(boolean $AutoHandleUnsupportedElement) 设置是否对不支持元素开启自动处理的功能。默认不开启。

在开启自动处理的情况下，会自动进行如下处理：
1. 墨迹：移除不支持的墨迹（比如使用WPS画的）
2. 自动翻页：移除PPT上所有的自动翻页设置，并设置为单击鼠标翻页
3. 已损坏音视频：移除PPT上对损坏音视频的引用
 */
class CreatePPTCheckTaskRequest extends AbstractModel
{
    /**
     * @var integer 客户的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var string 经过URL编码后的PPT文件地址。URL 编码会将字符转换为可通过因特网传输的格式，例如文档地址为http://example.com/测试.pptx，经过URL编码之后为http://example.com/%E6%B5%8B%E8%AF%95.pptx。为了提高URL解析的成功率，请对URL进行编码。
     */
    public $Url;

    /**
     * @var boolean 是否对不支持元素开启自动处理的功能。默认不开启。

在开启自动处理的情况下，会自动进行如下处理：
1. 墨迹：移除不支持的墨迹（比如使用WPS画的）
2. 自动翻页：移除PPT上所有的自动翻页设置，并设置为单击鼠标翻页
3. 已损坏音视频：移除PPT上对损坏音视频的引用
     */
    public $AutoHandleUnsupportedElement;

    /**
     * @param integer $SdkAppId 客户的SdkAppId
     * @param string $Url 经过URL编码后的PPT文件地址。URL 编码会将字符转换为可通过因特网传输的格式，例如文档地址为http://example.com/测试.pptx，经过URL编码之后为http://example.com/%E6%B5%8B%E8%AF%95.pptx。为了提高URL解析的成功率，请对URL进行编码。
     * @param boolean $AutoHandleUnsupportedElement 是否对不支持元素开启自动处理的功能。默认不开启。

在开启自动处理的情况下，会自动进行如下处理：
1. 墨迹：移除不支持的墨迹（比如使用WPS画的）
2. 自动翻页：移除PPT上所有的自动翻页设置，并设置为单击鼠标翻页
3. 已损坏音视频：移除PPT上对损坏音视频的引用
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("AutoHandleUnsupportedElement",$param) and $param["AutoHandleUnsupportedElement"] !== null) {
            $this->AutoHandleUnsupportedElement = $param["AutoHandleUnsupportedElement"];
        }
    }
}
