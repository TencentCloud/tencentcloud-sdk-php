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
 * 对视频按指定时间点截图任务输入参数类型
 *
 * @method integer getDefinition() 获取<p>指定时间点截图模板 ID。</p>
 * @method void setDefinition(integer $Definition) 设置<p>指定时间点截图模板 ID。</p>
 * @method array getExtTimeOffsetSet() 获取<p>截图时间点列表，时间点支持 s、% 两种格式：</p><li>当字符串以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li><li>当字符串以 % 结尾，表示时间点为视频时长的百分比大小，如10%表示时间点为视频前第10%的时间。</li>
 * @method void setExtTimeOffsetSet(array $ExtTimeOffsetSet) 设置<p>截图时间点列表，时间点支持 s、% 两种格式：</p><li>当字符串以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li><li>当字符串以 % 结尾，表示时间点为视频时长的百分比大小，如10%表示时间点为视频前第10%的时间。</li>
 * @method array getTimeOffsetSet() 获取<p>截图时间点列表，单位为<font color="red">毫秒</font>。此参数已不再建议使用，建议您使用 ExtTimeOffsetSet 参数。</p>
 * @method void setTimeOffsetSet(array $TimeOffsetSet) 设置<p>截图时间点列表，单位为<font color="red">毫秒</font>。此参数已不再建议使用，建议您使用 ExtTimeOffsetSet 参数。</p>
 * @method array getWatermarkSet() 获取<p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
 * @method void setWatermarkSet(array $WatermarkSet) 设置<p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
 */
class SnapshotByTimeOffsetTaskInput extends AbstractModel
{
    /**
     * @var integer <p>指定时间点截图模板 ID。</p>
     */
    public $Definition;

    /**
     * @var array <p>截图时间点列表，时间点支持 s、% 两种格式：</p><li>当字符串以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li><li>当字符串以 % 结尾，表示时间点为视频时长的百分比大小，如10%表示时间点为视频前第10%的时间。</li>
     */
    public $ExtTimeOffsetSet;

    /**
     * @var array <p>截图时间点列表，单位为<font color="red">毫秒</font>。此参数已不再建议使用，建议您使用 ExtTimeOffsetSet 参数。</p>
     */
    public $TimeOffsetSet;

    /**
     * @var array <p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
     */
    public $WatermarkSet;

    /**
     * @param integer $Definition <p>指定时间点截图模板 ID。</p>
     * @param array $ExtTimeOffsetSet <p>截图时间点列表，时间点支持 s、% 两种格式：</p><li>当字符串以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li><li>当字符串以 % 结尾，表示时间点为视频时长的百分比大小，如10%表示时间点为视频前第10%的时间。</li>
     * @param array $TimeOffsetSet <p>截图时间点列表，单位为<font color="red">毫秒</font>。此参数已不再建议使用，建议您使用 ExtTimeOffsetSet 参数。</p>
     * @param array $WatermarkSet <p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
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

        if (array_key_exists("ExtTimeOffsetSet",$param) and $param["ExtTimeOffsetSet"] !== null) {
            $this->ExtTimeOffsetSet = $param["ExtTimeOffsetSet"];
        }

        if (array_key_exists("TimeOffsetSet",$param) and $param["TimeOffsetSet"] !== null) {
            $this->TimeOffsetSet = $param["TimeOffsetSet"];
        }

        if (array_key_exists("WatermarkSet",$param) and $param["WatermarkSet"] !== null) {
            $this->WatermarkSet = [];
            foreach ($param["WatermarkSet"] as $key => $value){
                $obj = new WatermarkInput();
                $obj->deserialize($value);
                array_push($this->WatermarkSet, $obj);
            }
        }
    }
}
