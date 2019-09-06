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
 * @method integer getDefinition() 获取转动图模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置转动图模板唯一标识。
 * @method string getType() 获取模板类型，取值范围：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method void setType(string $Type) 设置模板类型，取值范围：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method string getName() 获取转动图模板名称。
 * @method void setName(string $Name) 设置转动图模板名称。
 * @method string getComment() 获取转动图模板描述信息。
 * @method void setComment(string $Comment) 设置转动图模板描述信息。
 * @method integer getWidth() 获取动图宽度（或长边）的最大值。
 * @method void setWidth(integer $Width) 设置动图宽度（或长边）的最大值。
 * @method integer getHeight() 获取动图高度（或短边）的最大值。
 * @method void setHeight(integer $Height) 设置动图高度（或短边）的最大值。
 * @method string getFormat() 获取动图格式。
 * @method void setFormat(string $Format) 设置动图格式。
 * @method integer getFps() 获取帧率。
 * @method void setFps(integer $Fps) 设置帧率。
 * @method float getQuality() 获取图片质量。
 * @method void setQuality(float $Quality) 设置图片质量。
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 */

/**
 *转动图模板详情。
 */
class AnimatedGraphicsTemplate extends AbstractModel
{
    /**
     * @var integer 转动图模板唯一标识。
     */
    public $Definition;

    /**
     * @var string 模板类型，取值范围：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     */
    public $Type;

    /**
     * @var string 转动图模板名称。
     */
    public $Name;

    /**
     * @var string 转动图模板描述信息。
     */
    public $Comment;

    /**
     * @var integer 动图宽度（或长边）的最大值。
     */
    public $Width;

    /**
     * @var integer 动图高度（或短边）的最大值。
     */
    public $Height;

    /**
     * @var string 动图格式。
     */
    public $Format;

    /**
     * @var integer 帧率。
     */
    public $Fps;

    /**
     * @var float 图片质量。
     */
    public $Quality;

    /**
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $UpdateTime;
    /**
     * @param integer $Definition 转动图模板唯一标识。
     * @param string $Type 模板类型，取值范围：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     * @param string $Name 转动图模板名称。
     * @param string $Comment 转动图模板描述信息。
     * @param integer $Width 动图宽度（或长边）的最大值。
     * @param integer $Height 动图高度（或短边）的最大值。
     * @param string $Format 动图格式。
     * @param integer $Fps 帧率。
     * @param float $Quality 图片质量。
     * @param string $CreateTime 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     * @param string $UpdateTime 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Quality",$param) and $param["Quality"] !== null) {
            $this->Quality = $param["Quality"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
