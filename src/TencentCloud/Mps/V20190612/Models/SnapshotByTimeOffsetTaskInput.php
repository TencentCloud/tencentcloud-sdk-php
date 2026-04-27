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
 * 对视频按指定时间点截图任务输入参数类型
 *
 * @method integer getDefinition() 获取<p>指定时间点截图模板 ID。</p>
 * @method void setDefinition(integer $Definition) 设置<p>指定时间点截图模板 ID。</p>
 * @method array getExtTimeOffsetSet() 获取<p>截图时间点列表，时间点支持 s、% 两种格式：</p><li>当字符串以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li><li>当字符串以 % 结尾，表示时间点为视频时长的百分比大小，如10%表示时间点为视频前第10%的时间。</li>
 * @method void setExtTimeOffsetSet(array $ExtTimeOffsetSet) 设置<p>截图时间点列表，时间点支持 s、% 两种格式：</p><li>当字符串以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li><li>当字符串以 % 结尾，表示时间点为视频时长的百分比大小，如10%表示时间点为视频前第10%的时间。</li>
 * @method array getTimeOffsetSet() 获取<p>截图时间点列表，单位为<font color="red">秒</font>。此参数已不再建议使用，建议您使用 ExtTimeOffsetSet 参数。</p>
 * @method void setTimeOffsetSet(array $TimeOffsetSet) 设置<p>截图时间点列表，单位为<font color="red">秒</font>。此参数已不再建议使用，建议您使用 ExtTimeOffsetSet 参数。</p>
 * @method array getWatermarkSet() 获取<p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
 * @method void setWatermarkSet(array $WatermarkSet) 设置<p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
 * @method TaskOutputStorage getOutputStorage() 获取<p>时间点截图后文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>时间点截图后文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputObjectPath() 获取<p>时间点截图后图片文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li>如果不填，则默认为相对路径：<code>{inputName}_snapshotByTimeOffset_{definition}_{number}.{format}</code>。
 * @method void setOutputObjectPath(string $OutputObjectPath) 设置<p>时间点截图后图片文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li>如果不填，则默认为相对路径：<code>{inputName}_snapshotByTimeOffset_{definition}_{number}.{format}</code>。
 * @method NumberFormat getObjectNumberFormat() 获取<p>时间点截图后输出路径中的<code>{number}</code>变量的规则。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectNumberFormat(NumberFormat $ObjectNumberFormat) 设置<p>时间点截图后输出路径中的<code>{number}</code>变量的规则。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtInfo() 获取<p>扩展参数。</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>扩展参数。</p>
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
     * @var array <p>截图时间点列表，单位为<font color="red">秒</font>。此参数已不再建议使用，建议您使用 ExtTimeOffsetSet 参数。</p>
     */
    public $TimeOffsetSet;

    /**
     * @var array <p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
     */
    public $WatermarkSet;

    /**
     * @var TaskOutputStorage <p>时间点截图后文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStorage;

    /**
     * @var string <p>时间点截图后图片文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li>如果不填，则默认为相对路径：<code>{inputName}_snapshotByTimeOffset_{definition}_{number}.{format}</code>。
     */
    public $OutputObjectPath;

    /**
     * @var NumberFormat <p>时间点截图后输出路径中的<code>{number}</code>变量的规则。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectNumberFormat;

    /**
     * @var string <p>扩展参数。</p>
     */
    public $ExtInfo;

    /**
     * @param integer $Definition <p>指定时间点截图模板 ID。</p>
     * @param array $ExtTimeOffsetSet <p>截图时间点列表，时间点支持 s、% 两种格式：</p><li>当字符串以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li><li>当字符串以 % 结尾，表示时间点为视频时长的百分比大小，如10%表示时间点为视频前第10%的时间。</li>
     * @param array $TimeOffsetSet <p>截图时间点列表，单位为<font color="red">秒</font>。此参数已不再建议使用，建议您使用 ExtTimeOffsetSet 参数。</p>
     * @param array $WatermarkSet <p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
     * @param TaskOutputStorage $OutputStorage <p>时间点截图后文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputObjectPath <p>时间点截图后图片文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li>如果不填，则默认为相对路径：<code>{inputName}_snapshotByTimeOffset_{definition}_{number}.{format}</code>。
     * @param NumberFormat $ObjectNumberFormat <p>时间点截图后输出路径中的<code>{number}</code>变量的规则。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtInfo <p>扩展参数。</p>
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

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }

        if (array_key_exists("ObjectNumberFormat",$param) and $param["ObjectNumberFormat"] !== null) {
            $this->ObjectNumberFormat = new NumberFormat();
            $this->ObjectNumberFormat->deserialize($param["ObjectNumberFormat"]);
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
