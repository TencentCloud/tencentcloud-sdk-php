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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 采样截图信息
 *
 * @method integer getDefinition() 获取<p>采样截图规格 ID，参见<a href="https://cloud.tencent.com/document/product/266/33480#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF">采样截图参数模板</a>。</p>
 * @method void setDefinition(integer $Definition) 设置<p>采样截图规格 ID，参见<a href="https://cloud.tencent.com/document/product/266/33480#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF">采样截图参数模板</a>。</p>
 * @method string getSampleType() 获取<p>采样方式，取值范围：</p><li>Percent：根据百分比间隔采样。</li><li>Time：根据时间间隔采样。</li>
 * @method void setSampleType(string $SampleType) 设置<p>采样方式，取值范围：</p><li>Percent：根据百分比间隔采样。</li><li>Time：根据时间间隔采样。</li>
 * @method integer getInterval() 获取<p>采样间隔</p><li>当 SampleType 为 Percent 时，该值表示多少百分比一张图。</li><li>当 SampleType 为 Time 时，该值表示多少时间间隔一张图，单位秒， 第一张图均为视频首帧。</li>
 * @method void setInterval(integer $Interval) 设置<p>采样间隔</p><li>当 SampleType 为 Percent 时，该值表示多少百分比一张图。</li><li>当 SampleType 为 Time 时，该值表示多少时间间隔一张图，单位秒， 第一张图均为视频首帧。</li>
 * @method TaskOutputStorage getStorage() 获取<p>截图后文件的存储位置。</p>
 * @method void setStorage(TaskOutputStorage $Storage) 设置<p>截图后文件的存储位置。</p>
 * @method array getImagePathSet() 获取<p>生成的截图 path 列表。</p>
 * @method void setImagePathSet(array $ImagePathSet) 设置<p>生成的截图 path 列表。</p>
 * @method array getWaterMarkDefinition() 获取<p>截图如果被打上了水印，被打水印的模板 ID 列表。</p>
 * @method void setWaterMarkDefinition(array $WaterMarkDefinition) 设置<p>截图如果被打上了水印，被打水印的模板 ID 列表。</p>
 */
class MediaSampleSnapshotItem extends AbstractModel
{
    /**
     * @var integer <p>采样截图规格 ID，参见<a href="https://cloud.tencent.com/document/product/266/33480#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF">采样截图参数模板</a>。</p>
     */
    public $Definition;

    /**
     * @var string <p>采样方式，取值范围：</p><li>Percent：根据百分比间隔采样。</li><li>Time：根据时间间隔采样。</li>
     */
    public $SampleType;

    /**
     * @var integer <p>采样间隔</p><li>当 SampleType 为 Percent 时，该值表示多少百分比一张图。</li><li>当 SampleType 为 Time 时，该值表示多少时间间隔一张图，单位秒， 第一张图均为视频首帧。</li>
     */
    public $Interval;

    /**
     * @var TaskOutputStorage <p>截图后文件的存储位置。</p>
     */
    public $Storage;

    /**
     * @var array <p>生成的截图 path 列表。</p>
     */
    public $ImagePathSet;

    /**
     * @var array <p>截图如果被打上了水印，被打水印的模板 ID 列表。</p>
     */
    public $WaterMarkDefinition;

    /**
     * @param integer $Definition <p>采样截图规格 ID，参见<a href="https://cloud.tencent.com/document/product/266/33480#.E9.87.87.E6.A0.B7.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF">采样截图参数模板</a>。</p>
     * @param string $SampleType <p>采样方式，取值范围：</p><li>Percent：根据百分比间隔采样。</li><li>Time：根据时间间隔采样。</li>
     * @param integer $Interval <p>采样间隔</p><li>当 SampleType 为 Percent 时，该值表示多少百分比一张图。</li><li>当 SampleType 为 Time 时，该值表示多少时间间隔一张图，单位秒， 第一张图均为视频首帧。</li>
     * @param TaskOutputStorage $Storage <p>截图后文件的存储位置。</p>
     * @param array $ImagePathSet <p>生成的截图 path 列表。</p>
     * @param array $WaterMarkDefinition <p>截图如果被打上了水印，被打水印的模板 ID 列表。</p>
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

        if (array_key_exists("SampleType",$param) and $param["SampleType"] !== null) {
            $this->SampleType = $param["SampleType"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new TaskOutputStorage();
            $this->Storage->deserialize($param["Storage"]);
        }

        if (array_key_exists("ImagePathSet",$param) and $param["ImagePathSet"] !== null) {
            $this->ImagePathSet = $param["ImagePathSet"];
        }

        if (array_key_exists("WaterMarkDefinition",$param) and $param["WaterMarkDefinition"] !== null) {
            $this->WaterMarkDefinition = $param["WaterMarkDefinition"];
        }
    }
}
