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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片处理配置。
 *
 * @method integer getDefinition() 获取<p>图片异步处理模板ID。可使用自定义模板ID，也可使用下列预制模板：</p><table><thead><tr><th align="right">模板编号（Definition）</th><th>模板名称</th><th>功能说明</th></tr></thead><tbody><tr><td align="right">14</td><td>图片理解</td><td>图片内容分析、辅助分类与检索</td></tr><tr><td align="right">15</td><td>AI擦除</td><td>图片中文字或水印的擦除</td></tr><tr><td align="right">16</td><td>图片修复</td><td>图片修复与瑕疵处理，老照片修复</td></tr><tr><td align="right">17</td><td>AI抠图</td><td>主体抠图、背景替换前的素材准备</td></tr><tr><td align="right">19</td><td>图片美颜</td><td>人像照片美化</td></tr><tr><td align="right">20</td><td>通用抠图</td><td>商品或主体前景提取、素材合成</td></tr><tr><td align="right">22</td><td>图片超分至4K</td><td>图片超分-超分至4K-ultra（短边2160，长边自适应），可用于优化图片清晰度、高分辨率展示、大屏素材准备</td></tr><tr><td align="right">23</td><td>图片超分至2K</td><td>图片超分-超分至2K-ultra（短边1440，长边自适应），可用于优化图片清晰度、高分辨率图片展示、素材清晰度提升</td></tr><tr><td align="right">25</td><td>图片压缩75质量</td><td>图片压缩-75%质量-JPEG，可用于网页配图、缩略图等需要控制文件体积的场景</td></tr><tr><td align="right">27</td><td>图片超分两倍超分</td><td>图片超分-两倍超分-ultra，可用于小尺寸图片放大、提高展示分辨率与清晰度</td></tr></tbody></table>
 * @method void setDefinition(integer $Definition) 设置<p>图片异步处理模板ID。可使用自定义模板ID，也可使用下列预制模板：</p><table><thead><tr><th align="right">模板编号（Definition）</th><th>模板名称</th><th>功能说明</th></tr></thead><tbody><tr><td align="right">14</td><td>图片理解</td><td>图片内容分析、辅助分类与检索</td></tr><tr><td align="right">15</td><td>AI擦除</td><td>图片中文字或水印的擦除</td></tr><tr><td align="right">16</td><td>图片修复</td><td>图片修复与瑕疵处理，老照片修复</td></tr><tr><td align="right">17</td><td>AI抠图</td><td>主体抠图、背景替换前的素材准备</td></tr><tr><td align="right">19</td><td>图片美颜</td><td>人像照片美化</td></tr><tr><td align="right">20</td><td>通用抠图</td><td>商品或主体前景提取、素材合成</td></tr><tr><td align="right">22</td><td>图片超分至4K</td><td>图片超分-超分至4K-ultra（短边2160，长边自适应），可用于优化图片清晰度、高分辨率展示、大屏素材准备</td></tr><tr><td align="right">23</td><td>图片超分至2K</td><td>图片超分-超分至2K-ultra（短边1440，长边自适应），可用于优化图片清晰度、高分辨率图片展示、素材清晰度提升</td></tr><tr><td align="right">25</td><td>图片压缩75质量</td><td>图片压缩-75%质量-JPEG，可用于网页配图、缩略图等需要控制文件体积的场景</td></tr><tr><td align="right">27</td><td>图片超分两倍超分</td><td>图片超分-两倍超分-ultra，可用于小尺寸图片放大、提高展示分辨率与清晰度</td></tr></tbody></table>
 * @method ProcessImageAsyncInputExtendedParameter getExtendedParameter() 获取<p>图片异步处理扩展参数。</p>
 * @method void setExtendedParameter(ProcessImageAsyncInputExtendedParameter $ExtendedParameter) 设置<p>图片异步处理扩展参数。</p>
 */
class ProcessImageAsyncTaskInput extends AbstractModel
{
    /**
     * @var integer <p>图片异步处理模板ID。可使用自定义模板ID，也可使用下列预制模板：</p><table><thead><tr><th align="right">模板编号（Definition）</th><th>模板名称</th><th>功能说明</th></tr></thead><tbody><tr><td align="right">14</td><td>图片理解</td><td>图片内容分析、辅助分类与检索</td></tr><tr><td align="right">15</td><td>AI擦除</td><td>图片中文字或水印的擦除</td></tr><tr><td align="right">16</td><td>图片修复</td><td>图片修复与瑕疵处理，老照片修复</td></tr><tr><td align="right">17</td><td>AI抠图</td><td>主体抠图、背景替换前的素材准备</td></tr><tr><td align="right">19</td><td>图片美颜</td><td>人像照片美化</td></tr><tr><td align="right">20</td><td>通用抠图</td><td>商品或主体前景提取、素材合成</td></tr><tr><td align="right">22</td><td>图片超分至4K</td><td>图片超分-超分至4K-ultra（短边2160，长边自适应），可用于优化图片清晰度、高分辨率展示、大屏素材准备</td></tr><tr><td align="right">23</td><td>图片超分至2K</td><td>图片超分-超分至2K-ultra（短边1440，长边自适应），可用于优化图片清晰度、高分辨率图片展示、素材清晰度提升</td></tr><tr><td align="right">25</td><td>图片压缩75质量</td><td>图片压缩-75%质量-JPEG，可用于网页配图、缩略图等需要控制文件体积的场景</td></tr><tr><td align="right">27</td><td>图片超分两倍超分</td><td>图片超分-两倍超分-ultra，可用于小尺寸图片放大、提高展示分辨率与清晰度</td></tr></tbody></table>
     */
    public $Definition;

    /**
     * @var ProcessImageAsyncInputExtendedParameter <p>图片异步处理扩展参数。</p>
     */
    public $ExtendedParameter;

    /**
     * @param integer $Definition <p>图片异步处理模板ID。可使用自定义模板ID，也可使用下列预制模板：</p><table><thead><tr><th align="right">模板编号（Definition）</th><th>模板名称</th><th>功能说明</th></tr></thead><tbody><tr><td align="right">14</td><td>图片理解</td><td>图片内容分析、辅助分类与检索</td></tr><tr><td align="right">15</td><td>AI擦除</td><td>图片中文字或水印的擦除</td></tr><tr><td align="right">16</td><td>图片修复</td><td>图片修复与瑕疵处理，老照片修复</td></tr><tr><td align="right">17</td><td>AI抠图</td><td>主体抠图、背景替换前的素材准备</td></tr><tr><td align="right">19</td><td>图片美颜</td><td>人像照片美化</td></tr><tr><td align="right">20</td><td>通用抠图</td><td>商品或主体前景提取、素材合成</td></tr><tr><td align="right">22</td><td>图片超分至4K</td><td>图片超分-超分至4K-ultra（短边2160，长边自适应），可用于优化图片清晰度、高分辨率展示、大屏素材准备</td></tr><tr><td align="right">23</td><td>图片超分至2K</td><td>图片超分-超分至2K-ultra（短边1440，长边自适应），可用于优化图片清晰度、高分辨率图片展示、素材清晰度提升</td></tr><tr><td align="right">25</td><td>图片压缩75质量</td><td>图片压缩-75%质量-JPEG，可用于网页配图、缩略图等需要控制文件体积的场景</td></tr><tr><td align="right">27</td><td>图片超分两倍超分</td><td>图片超分-两倍超分-ultra，可用于小尺寸图片放大、提高展示分辨率与清晰度</td></tr></tbody></table>
     * @param ProcessImageAsyncInputExtendedParameter $ExtendedParameter <p>图片异步处理扩展参数。</p>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ExtendedParameter",$param) and $param["ExtendedParameter"] !== null) {
            $this->ExtendedParameter = new ProcessImageAsyncInputExtendedParameter();
            $this->ExtendedParameter->deserialize($param["ExtendedParameter"]);
        }
    }
}
