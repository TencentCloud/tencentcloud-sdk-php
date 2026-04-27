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
 * 转动图任务类型。
 *
 * @method integer getDefinition() 获取<p>视频转动图模板 ID。</p>
 * @method void setDefinition(integer $Definition) 设置<p>视频转动图模板 ID。</p>
 * @method float getStartTimeOffset() 获取<p>动图在视频中的开始时间，单位为秒。</p>
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置<p>动图在视频中的开始时间，单位为秒。</p>
 * @method float getEndTimeOffset() 获取<p>动图在视频中的结束时间，单位为秒。</p>
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置<p>动图在视频中的结束时间，单位为秒。</p>
 * @method TaskOutputStorage getOutputStorage() 获取<p>转动图后文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>转动图后文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputObjectPath() 获取<p>转动图后文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li>如果不填，则默认为相对路径：<code>{inputName}_animatedGraphic_{definition}.{format}</code>。
 * @method void setOutputObjectPath(string $OutputObjectPath) 设置<p>转动图后文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li>如果不填，则默认为相对路径：<code>{inputName}_animatedGraphic_{definition}.{format}</code>。
 * @method string getExtInfo() 获取<p>扩展参数。</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>扩展参数。</p>
 */
class AnimatedGraphicTaskInput extends AbstractModel
{
    /**
     * @var integer <p>视频转动图模板 ID。</p>
     */
    public $Definition;

    /**
     * @var float <p>动图在视频中的开始时间，单位为秒。</p>
     */
    public $StartTimeOffset;

    /**
     * @var float <p>动图在视频中的结束时间，单位为秒。</p>
     */
    public $EndTimeOffset;

    /**
     * @var TaskOutputStorage <p>转动图后文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStorage;

    /**
     * @var string <p>转动图后文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li>如果不填，则默认为相对路径：<code>{inputName}_animatedGraphic_{definition}.{format}</code>。
     */
    public $OutputObjectPath;

    /**
     * @var string <p>扩展参数。</p>
     */
    public $ExtInfo;

    /**
     * @param integer $Definition <p>视频转动图模板 ID。</p>
     * @param float $StartTimeOffset <p>动图在视频中的开始时间，单位为秒。</p>
     * @param float $EndTimeOffset <p>动图在视频中的结束时间，单位为秒。</p>
     * @param TaskOutputStorage $OutputStorage <p>转动图后文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputObjectPath <p>转动图后文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li>如果不填，则默认为相对路径：<code>{inputName}_animatedGraphic_{definition}.{format}</code>。
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

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
