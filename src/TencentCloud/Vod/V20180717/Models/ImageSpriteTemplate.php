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
 * @method integer getDefinition() 获取雪碧图模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置雪碧图模板唯一标识。
 * @method string getType() 获取模板类型，取值范围：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method void setType(string $Type) 设置模板类型，取值范围：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method string getName() 获取雪碧图模板名称。
 * @method void setName(string $Name) 设置雪碧图模板名称。
 * @method integer getWidth() 获取雪碧图中小图的宽度。
 * @method void setWidth(integer $Width) 设置雪碧图中小图的宽度。
 * @method integer getHeight() 获取雪碧图中小图的高度。
 * @method void setHeight(integer $Height) 设置雪碧图中小图的高度。
 * @method string getSampleType() 获取采样类型。
 * @method void setSampleType(string $SampleType) 设置采样类型。
 * @method integer getSampleInterval() 获取采样间隔。
 * @method void setSampleInterval(integer $SampleInterval) 设置采样间隔。
 * @method integer getRowCount() 获取雪碧图中小图的行数。
 * @method void setRowCount(integer $RowCount) 设置雪碧图中小图的行数。
 * @method integer getColumnCount() 获取雪碧图中小图的列数。
 * @method void setColumnCount(integer $ColumnCount) 设置雪碧图中小图的列数。
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 */

/**
 *雪碧图模板详情
 */
class ImageSpriteTemplate extends AbstractModel
{
    /**
     * @var integer 雪碧图模板唯一标识。
     */
    public $Definition;

    /**
     * @var string 模板类型，取值范围：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     */
    public $Type;

    /**
     * @var string 雪碧图模板名称。
     */
    public $Name;

    /**
     * @var integer 雪碧图中小图的宽度。
     */
    public $Width;

    /**
     * @var integer 雪碧图中小图的高度。
     */
    public $Height;

    /**
     * @var string 采样类型。
     */
    public $SampleType;

    /**
     * @var integer 采样间隔。
     */
    public $SampleInterval;

    /**
     * @var integer 雪碧图中小图的行数。
     */
    public $RowCount;

    /**
     * @var integer 雪碧图中小图的列数。
     */
    public $ColumnCount;

    /**
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $UpdateTime;
    /**
     * @param integer $Definition 雪碧图模板唯一标识。
     * @param string $Type 模板类型，取值范围：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     * @param string $Name 雪碧图模板名称。
     * @param integer $Width 雪碧图中小图的宽度。
     * @param integer $Height 雪碧图中小图的高度。
     * @param string $SampleType 采样类型。
     * @param integer $SampleInterval 采样间隔。
     * @param integer $RowCount 雪碧图中小图的行数。
     * @param integer $ColumnCount 雪碧图中小图的列数。
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

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("SampleType",$param) and $param["SampleType"] !== null) {
            $this->SampleType = $param["SampleType"];
        }

        if (array_key_exists("SampleInterval",$param) and $param["SampleInterval"] !== null) {
            $this->SampleInterval = $param["SampleInterval"];
        }

        if (array_key_exists("RowCount",$param) and $param["RowCount"] !== null) {
            $this->RowCount = $param["RowCount"];
        }

        if (array_key_exists("ColumnCount",$param) and $param["ColumnCount"] !== null) {
            $this->ColumnCount = $param["ColumnCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
