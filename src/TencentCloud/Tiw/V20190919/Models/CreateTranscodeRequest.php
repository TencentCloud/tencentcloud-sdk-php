<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * CreateTranscode请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>客户的SdkAppId</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>客户的SdkAppId</p>
 * @method string getUrl() 获取<p>经过URL编码后的转码文件地址。URL 编码会将字符转换为可通过因特网传输的格式，比如文档地址为http://example.com/测试.pdf，经过URL编码之后为http://example.com/%E6%B5%8B%E8%AF%95.pdf。为了提高URL解析的成功率，请对URL进行编码。</p>
 * @method void setUrl(string $Url) 设置<p>经过URL编码后的转码文件地址。URL 编码会将字符转换为可通过因特网传输的格式，比如文档地址为http://example.com/测试.pdf，经过URL编码之后为http://example.com/%E6%B5%8B%E8%AF%95.pdf。为了提高URL解析的成功率，请对URL进行编码。</p>
 * @method boolean getIsStaticPPT() 获取<p>是否为静态PPT，默认为False；<br>如果IsStaticPPT为False，后缀名为.ppt或.pptx的文档会动态转码成HTML5页面，其他格式的文档会静态转码成图片；如果IsStaticPPT为True，所有格式的文档会静态转码成图片；</p>
 * @method void setIsStaticPPT(boolean $IsStaticPPT) 设置<p>是否为静态PPT，默认为False；<br>如果IsStaticPPT为False，后缀名为.ppt或.pptx的文档会动态转码成HTML5页面，其他格式的文档会静态转码成图片；如果IsStaticPPT为True，所有格式的文档会静态转码成图片；</p>
 * @method string getMinResolution() 获取<p>注意: 该参数已废弃, 请使用最新的 <a href="https://cloud.tencent.com/document/api/1137/40060#SDK">云API SDK</a> ，使用 MinScaleResolution字段传递分辨率</p><p>转码后文档的最小分辨率，不传、传空字符串或分辨率格式错误则使用文档原分辨率</p><p>示例：1280x720，注意分辨率宽高中间为英文字母&quot;xyz&quot;的&quot;x&quot;</p>
 * @method void setMinResolution(string $MinResolution) 设置<p>注意: 该参数已废弃, 请使用最新的 <a href="https://cloud.tencent.com/document/api/1137/40060#SDK">云API SDK</a> ，使用 MinScaleResolution字段传递分辨率</p><p>转码后文档的最小分辨率，不传、传空字符串或分辨率格式错误则使用文档原分辨率</p><p>示例：1280x720，注意分辨率宽高中间为英文字母&quot;xyz&quot;的&quot;x&quot;</p>
 * @method string getThumbnailResolution() 获取<p>动态PPT转码可以为文件生成该分辨率的缩略图，不传、传空字符串或分辨率格式错误则不生成缩略图，分辨率格式同MinResolution</p>
 * @method void setThumbnailResolution(string $ThumbnailResolution) 设置<p>动态PPT转码可以为文件生成该分辨率的缩略图，不传、传空字符串或分辨率格式错误则不生成缩略图，分辨率格式同MinResolution</p>
 * @method string getCompressFileType() 获取<p>转码文件压缩格式，不传、传空字符串或不是指定的格式则不生成压缩文件，目前支持如下压缩格式：</p><p>zip： 生成<code>.zip</code>压缩包<br>tar.gz： 生成<code>.tar.gz</code>压缩包</p>
 * @method void setCompressFileType(string $CompressFileType) 设置<p>转码文件压缩格式，不传、传空字符串或不是指定的格式则不生成压缩文件，目前支持如下压缩格式：</p><p>zip： 生成<code>.zip</code>压缩包<br>tar.gz： 生成<code>.tar.gz</code>压缩包</p>
 * @method string getExtraData() 获取<p>内部参数</p>
 * @method void setExtraData(string $ExtraData) 设置<p>内部参数</p>
 * @method string getPriority() 获取<p>注意：该参数已废弃，文档转码优先级， 只有对于PPT动态转码生效，支持填入以下值：<br>- low: 低优先级转码，对于动态转码，能支持500MB（下载超时时间10分钟）以及2000页文档，但资源有限可能会有比较长时间的排队，请酌情使用该功能。<br>- 不填表示正常优先级转码，支持200MB文件（下载超时时间2分钟），500页以内的文档进行转码<br>注意：对于PDF等静态文件转码，无论是正常优先级或者低优先级，最大只能支持200MB</p>
 * @method void setPriority(string $Priority) 设置<p>注意：该参数已废弃，文档转码优先级， 只有对于PPT动态转码生效，支持填入以下值：<br>- low: 低优先级转码，对于动态转码，能支持500MB（下载超时时间10分钟）以及2000页文档，但资源有限可能会有比较长时间的排队，请酌情使用该功能。<br>- 不填表示正常优先级转码，支持200MB文件（下载超时时间2分钟），500页以内的文档进行转码<br>注意：对于PDF等静态文件转码，无论是正常优先级或者低优先级，最大只能支持200MB</p>
 * @method string getMinScaleResolution() 获取<p>转码后文档的最小分辨率，不传、传空字符串或分辨率格式错误则使用文档原分辨率。<br>分辨率越高，效果越清晰，转出来的图片资源体积会越大，课件加载耗时会变长，请根据实际使用场景配置此参数。</p><p>示例：1280x720，注意分辨率宽高中间为英文字母&quot;xyz&quot;的&quot;x&quot;</p>
 * @method void setMinScaleResolution(string $MinScaleResolution) 设置<p>转码后文档的最小分辨率，不传、传空字符串或分辨率格式错误则使用文档原分辨率。<br>分辨率越高，效果越清晰，转出来的图片资源体积会越大，课件加载耗时会变长，请根据实际使用场景配置此参数。</p><p>示例：1280x720，注意分辨率宽高中间为英文字母&quot;xyz&quot;的&quot;x&quot;</p>
 * @method boolean getAutoHandleUnsupportedElement() 获取<p>此参数仅对动态转码生效。</p><p>是否对不支持元素开启自动处理的功能，默认不开启。<br>true -- 开启<br>false -- 不开启</p><p>当设置为<code>true</code>时，可配合<code>AutoHandleUnsupportedElementTypes</code>参数使用，具体有哪些不兼容元素类型，可参考<code>AutoHandleUnsupportedElementTypes</code>参数的说明。</p>
 * @method void setAutoHandleUnsupportedElement(boolean $AutoHandleUnsupportedElement) 设置<p>此参数仅对动态转码生效。</p><p>是否对不支持元素开启自动处理的功能，默认不开启。<br>true -- 开启<br>false -- 不开启</p><p>当设置为<code>true</code>时，可配合<code>AutoHandleUnsupportedElementTypes</code>参数使用，具体有哪些不兼容元素类型，可参考<code>AutoHandleUnsupportedElementTypes</code>参数的说明。</p>
 * @method array getAutoHandleUnsupportedElementTypes() 获取<p>此参数仅在<code>AutoHandleUnsupportedElement</code>参数为<code>true</code>的情况下有效。</p><p>指定需要自动处理的不兼容元素类型，默认对所有不兼容的元素进行自动处理。</p><p>目前支持检测的不兼容元素类型及对应的自动处理方式如下：<br>0: 不支持的墨迹类型<br>-- 自动处理方式：移除墨迹</p><p>1: 自动翻页<br>-- 自动处理方式：移除自动翻页设置，并修改为单击切换</p><p>2: 已损坏音视频<br>-- 自动处理方式：移除对损坏音视频的引用</p><p>3: 不可访问资源<br>-- 自动处理方式：移除对不可访问的资源的引用</p><p>4: 只读文件<br>-- 自动处理方式：移除只读设置</p><p>5: 不支持的元素编辑锁定状态<br>-- 自动处理方式：移除锁定状态</p><p>6: 可能有兼容问题的字体<br>-- 自动处理方式： 不支持处理</p><p>7: 设置了柔化边缘的GIF图片<br>-- 自动处理方式：移除柔化边缘设置</p><p>8: 存在不兼容的空格下划线<br>-- 自动处理方式：通过调整空格下划线前后文本的字体语言体系，保证空格下划线表现正常</p><p>9: 存在设置了分段动画的数学公式和文本混合内容<br>-- 自动处理方式： 不支持处理</p><p>10: 存在设置了分段动画的渐变色文本<br>-- 自动处理方式： 不支持处理</p><p>11: 存在不兼容的分散对齐方式<br>-- 自动处理方式： 不支持处理</p><p>12: 存在不兼容的多倍行距设置<br>-- 自动处理方式： 不支持处理</p><p>13: 存在带有特殊符号内容的datetime类型的a:fld标签元素<br>-- 自动处理方式： a:fld标签替换为普通文本</p>
 * @method void setAutoHandleUnsupportedElementTypes(array $AutoHandleUnsupportedElementTypes) 设置<p>此参数仅在<code>AutoHandleUnsupportedElement</code>参数为<code>true</code>的情况下有效。</p><p>指定需要自动处理的不兼容元素类型，默认对所有不兼容的元素进行自动处理。</p><p>目前支持检测的不兼容元素类型及对应的自动处理方式如下：<br>0: 不支持的墨迹类型<br>-- 自动处理方式：移除墨迹</p><p>1: 自动翻页<br>-- 自动处理方式：移除自动翻页设置，并修改为单击切换</p><p>2: 已损坏音视频<br>-- 自动处理方式：移除对损坏音视频的引用</p><p>3: 不可访问资源<br>-- 自动处理方式：移除对不可访问的资源的引用</p><p>4: 只读文件<br>-- 自动处理方式：移除只读设置</p><p>5: 不支持的元素编辑锁定状态<br>-- 自动处理方式：移除锁定状态</p><p>6: 可能有兼容问题的字体<br>-- 自动处理方式： 不支持处理</p><p>7: 设置了柔化边缘的GIF图片<br>-- 自动处理方式：移除柔化边缘设置</p><p>8: 存在不兼容的空格下划线<br>-- 自动处理方式：通过调整空格下划线前后文本的字体语言体系，保证空格下划线表现正常</p><p>9: 存在设置了分段动画的数学公式和文本混合内容<br>-- 自动处理方式： 不支持处理</p><p>10: 存在设置了分段动画的渐变色文本<br>-- 自动处理方式： 不支持处理</p><p>11: 存在不兼容的分散对齐方式<br>-- 自动处理方式： 不支持处理</p><p>12: 存在不兼容的多倍行距设置<br>-- 自动处理方式： 不支持处理</p><p>13: 存在带有特殊符号内容的datetime类型的a:fld标签元素<br>-- 自动处理方式： a:fld标签替换为普通文本</p>
 * @method ExcelParam getExcelParam() 获取<p>Excel表格转码参数，可设置转码时表格纸张大小及纸张方向等参数（仅对转码文件为Excel表格文件的静态转码任务生效）</p>
 * @method void setExcelParam(ExcelParam $ExcelParam) 设置<p>Excel表格转码参数，可设置转码时表格纸张大小及纸张方向等参数（仅对转码文件为Excel表格文件的静态转码任务生效）</p>
 */
class CreateTranscodeRequest extends AbstractModel
{
    /**
     * @var integer <p>客户的SdkAppId</p>
     */
    public $SdkAppId;

    /**
     * @var string <p>经过URL编码后的转码文件地址。URL 编码会将字符转换为可通过因特网传输的格式，比如文档地址为http://example.com/测试.pdf，经过URL编码之后为http://example.com/%E6%B5%8B%E8%AF%95.pdf。为了提高URL解析的成功率，请对URL进行编码。</p>
     */
    public $Url;

    /**
     * @var boolean <p>是否为静态PPT，默认为False；<br>如果IsStaticPPT为False，后缀名为.ppt或.pptx的文档会动态转码成HTML5页面，其他格式的文档会静态转码成图片；如果IsStaticPPT为True，所有格式的文档会静态转码成图片；</p>
     */
    public $IsStaticPPT;

    /**
     * @var string <p>注意: 该参数已废弃, 请使用最新的 <a href="https://cloud.tencent.com/document/api/1137/40060#SDK">云API SDK</a> ，使用 MinScaleResolution字段传递分辨率</p><p>转码后文档的最小分辨率，不传、传空字符串或分辨率格式错误则使用文档原分辨率</p><p>示例：1280x720，注意分辨率宽高中间为英文字母&quot;xyz&quot;的&quot;x&quot;</p>
     */
    public $MinResolution;

    /**
     * @var string <p>动态PPT转码可以为文件生成该分辨率的缩略图，不传、传空字符串或分辨率格式错误则不生成缩略图，分辨率格式同MinResolution</p>
     */
    public $ThumbnailResolution;

    /**
     * @var string <p>转码文件压缩格式，不传、传空字符串或不是指定的格式则不生成压缩文件，目前支持如下压缩格式：</p><p>zip： 生成<code>.zip</code>压缩包<br>tar.gz： 生成<code>.tar.gz</code>压缩包</p>
     */
    public $CompressFileType;

    /**
     * @var string <p>内部参数</p>
     */
    public $ExtraData;

    /**
     * @var string <p>注意：该参数已废弃，文档转码优先级， 只有对于PPT动态转码生效，支持填入以下值：<br>- low: 低优先级转码，对于动态转码，能支持500MB（下载超时时间10分钟）以及2000页文档，但资源有限可能会有比较长时间的排队，请酌情使用该功能。<br>- 不填表示正常优先级转码，支持200MB文件（下载超时时间2分钟），500页以内的文档进行转码<br>注意：对于PDF等静态文件转码，无论是正常优先级或者低优先级，最大只能支持200MB</p>
     */
    public $Priority;

    /**
     * @var string <p>转码后文档的最小分辨率，不传、传空字符串或分辨率格式错误则使用文档原分辨率。<br>分辨率越高，效果越清晰，转出来的图片资源体积会越大，课件加载耗时会变长，请根据实际使用场景配置此参数。</p><p>示例：1280x720，注意分辨率宽高中间为英文字母&quot;xyz&quot;的&quot;x&quot;</p>
     */
    public $MinScaleResolution;

    /**
     * @var boolean <p>此参数仅对动态转码生效。</p><p>是否对不支持元素开启自动处理的功能，默认不开启。<br>true -- 开启<br>false -- 不开启</p><p>当设置为<code>true</code>时，可配合<code>AutoHandleUnsupportedElementTypes</code>参数使用，具体有哪些不兼容元素类型，可参考<code>AutoHandleUnsupportedElementTypes</code>参数的说明。</p>
     */
    public $AutoHandleUnsupportedElement;

    /**
     * @var array <p>此参数仅在<code>AutoHandleUnsupportedElement</code>参数为<code>true</code>的情况下有效。</p><p>指定需要自动处理的不兼容元素类型，默认对所有不兼容的元素进行自动处理。</p><p>目前支持检测的不兼容元素类型及对应的自动处理方式如下：<br>0: 不支持的墨迹类型<br>-- 自动处理方式：移除墨迹</p><p>1: 自动翻页<br>-- 自动处理方式：移除自动翻页设置，并修改为单击切换</p><p>2: 已损坏音视频<br>-- 自动处理方式：移除对损坏音视频的引用</p><p>3: 不可访问资源<br>-- 自动处理方式：移除对不可访问的资源的引用</p><p>4: 只读文件<br>-- 自动处理方式：移除只读设置</p><p>5: 不支持的元素编辑锁定状态<br>-- 自动处理方式：移除锁定状态</p><p>6: 可能有兼容问题的字体<br>-- 自动处理方式： 不支持处理</p><p>7: 设置了柔化边缘的GIF图片<br>-- 自动处理方式：移除柔化边缘设置</p><p>8: 存在不兼容的空格下划线<br>-- 自动处理方式：通过调整空格下划线前后文本的字体语言体系，保证空格下划线表现正常</p><p>9: 存在设置了分段动画的数学公式和文本混合内容<br>-- 自动处理方式： 不支持处理</p><p>10: 存在设置了分段动画的渐变色文本<br>-- 自动处理方式： 不支持处理</p><p>11: 存在不兼容的分散对齐方式<br>-- 自动处理方式： 不支持处理</p><p>12: 存在不兼容的多倍行距设置<br>-- 自动处理方式： 不支持处理</p><p>13: 存在带有特殊符号内容的datetime类型的a:fld标签元素<br>-- 自动处理方式： a:fld标签替换为普通文本</p>
     */
    public $AutoHandleUnsupportedElementTypes;

    /**
     * @var ExcelParam <p>Excel表格转码参数，可设置转码时表格纸张大小及纸张方向等参数（仅对转码文件为Excel表格文件的静态转码任务生效）</p>
     */
    public $ExcelParam;

    /**
     * @param integer $SdkAppId <p>客户的SdkAppId</p>
     * @param string $Url <p>经过URL编码后的转码文件地址。URL 编码会将字符转换为可通过因特网传输的格式，比如文档地址为http://example.com/测试.pdf，经过URL编码之后为http://example.com/%E6%B5%8B%E8%AF%95.pdf。为了提高URL解析的成功率，请对URL进行编码。</p>
     * @param boolean $IsStaticPPT <p>是否为静态PPT，默认为False；<br>如果IsStaticPPT为False，后缀名为.ppt或.pptx的文档会动态转码成HTML5页面，其他格式的文档会静态转码成图片；如果IsStaticPPT为True，所有格式的文档会静态转码成图片；</p>
     * @param string $MinResolution <p>注意: 该参数已废弃, 请使用最新的 <a href="https://cloud.tencent.com/document/api/1137/40060#SDK">云API SDK</a> ，使用 MinScaleResolution字段传递分辨率</p><p>转码后文档的最小分辨率，不传、传空字符串或分辨率格式错误则使用文档原分辨率</p><p>示例：1280x720，注意分辨率宽高中间为英文字母&quot;xyz&quot;的&quot;x&quot;</p>
     * @param string $ThumbnailResolution <p>动态PPT转码可以为文件生成该分辨率的缩略图，不传、传空字符串或分辨率格式错误则不生成缩略图，分辨率格式同MinResolution</p>
     * @param string $CompressFileType <p>转码文件压缩格式，不传、传空字符串或不是指定的格式则不生成压缩文件，目前支持如下压缩格式：</p><p>zip： 生成<code>.zip</code>压缩包<br>tar.gz： 生成<code>.tar.gz</code>压缩包</p>
     * @param string $ExtraData <p>内部参数</p>
     * @param string $Priority <p>注意：该参数已废弃，文档转码优先级， 只有对于PPT动态转码生效，支持填入以下值：<br>- low: 低优先级转码，对于动态转码，能支持500MB（下载超时时间10分钟）以及2000页文档，但资源有限可能会有比较长时间的排队，请酌情使用该功能。<br>- 不填表示正常优先级转码，支持200MB文件（下载超时时间2分钟），500页以内的文档进行转码<br>注意：对于PDF等静态文件转码，无论是正常优先级或者低优先级，最大只能支持200MB</p>
     * @param string $MinScaleResolution <p>转码后文档的最小分辨率，不传、传空字符串或分辨率格式错误则使用文档原分辨率。<br>分辨率越高，效果越清晰，转出来的图片资源体积会越大，课件加载耗时会变长，请根据实际使用场景配置此参数。</p><p>示例：1280x720，注意分辨率宽高中间为英文字母&quot;xyz&quot;的&quot;x&quot;</p>
     * @param boolean $AutoHandleUnsupportedElement <p>此参数仅对动态转码生效。</p><p>是否对不支持元素开启自动处理的功能，默认不开启。<br>true -- 开启<br>false -- 不开启</p><p>当设置为<code>true</code>时，可配合<code>AutoHandleUnsupportedElementTypes</code>参数使用，具体有哪些不兼容元素类型，可参考<code>AutoHandleUnsupportedElementTypes</code>参数的说明。</p>
     * @param array $AutoHandleUnsupportedElementTypes <p>此参数仅在<code>AutoHandleUnsupportedElement</code>参数为<code>true</code>的情况下有效。</p><p>指定需要自动处理的不兼容元素类型，默认对所有不兼容的元素进行自动处理。</p><p>目前支持检测的不兼容元素类型及对应的自动处理方式如下：<br>0: 不支持的墨迹类型<br>-- 自动处理方式：移除墨迹</p><p>1: 自动翻页<br>-- 自动处理方式：移除自动翻页设置，并修改为单击切换</p><p>2: 已损坏音视频<br>-- 自动处理方式：移除对损坏音视频的引用</p><p>3: 不可访问资源<br>-- 自动处理方式：移除对不可访问的资源的引用</p><p>4: 只读文件<br>-- 自动处理方式：移除只读设置</p><p>5: 不支持的元素编辑锁定状态<br>-- 自动处理方式：移除锁定状态</p><p>6: 可能有兼容问题的字体<br>-- 自动处理方式： 不支持处理</p><p>7: 设置了柔化边缘的GIF图片<br>-- 自动处理方式：移除柔化边缘设置</p><p>8: 存在不兼容的空格下划线<br>-- 自动处理方式：通过调整空格下划线前后文本的字体语言体系，保证空格下划线表现正常</p><p>9: 存在设置了分段动画的数学公式和文本混合内容<br>-- 自动处理方式： 不支持处理</p><p>10: 存在设置了分段动画的渐变色文本<br>-- 自动处理方式： 不支持处理</p><p>11: 存在不兼容的分散对齐方式<br>-- 自动处理方式： 不支持处理</p><p>12: 存在不兼容的多倍行距设置<br>-- 自动处理方式： 不支持处理</p><p>13: 存在带有特殊符号内容的datetime类型的a:fld标签元素<br>-- 自动处理方式： a:fld标签替换为普通文本</p>
     * @param ExcelParam $ExcelParam <p>Excel表格转码参数，可设置转码时表格纸张大小及纸张方向等参数（仅对转码文件为Excel表格文件的静态转码任务生效）</p>
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

        if (array_key_exists("IsStaticPPT",$param) and $param["IsStaticPPT"] !== null) {
            $this->IsStaticPPT = $param["IsStaticPPT"];
        }

        if (array_key_exists("MinResolution",$param) and $param["MinResolution"] !== null) {
            $this->MinResolution = $param["MinResolution"];
        }

        if (array_key_exists("ThumbnailResolution",$param) and $param["ThumbnailResolution"] !== null) {
            $this->ThumbnailResolution = $param["ThumbnailResolution"];
        }

        if (array_key_exists("CompressFileType",$param) and $param["CompressFileType"] !== null) {
            $this->CompressFileType = $param["CompressFileType"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("MinScaleResolution",$param) and $param["MinScaleResolution"] !== null) {
            $this->MinScaleResolution = $param["MinScaleResolution"];
        }

        if (array_key_exists("AutoHandleUnsupportedElement",$param) and $param["AutoHandleUnsupportedElement"] !== null) {
            $this->AutoHandleUnsupportedElement = $param["AutoHandleUnsupportedElement"];
        }

        if (array_key_exists("AutoHandleUnsupportedElementTypes",$param) and $param["AutoHandleUnsupportedElementTypes"] !== null) {
            $this->AutoHandleUnsupportedElementTypes = $param["AutoHandleUnsupportedElementTypes"];
        }

        if (array_key_exists("ExcelParam",$param) and $param["ExcelParam"] !== null) {
            $this->ExcelParam = new ExcelParam();
            $this->ExcelParam->deserialize($param["ExcelParam"]);
        }
    }
}
