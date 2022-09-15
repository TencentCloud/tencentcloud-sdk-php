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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点播转直播输入源信息。
 *
 * @method string getType() 获取输入源的媒体类型，取值有：
<li>CME：多媒体创作引擎的媒体文件；</li>
<li>VOD：云点播的媒资文件。</li>
 * @method void setType(string $Type) 设置输入源的媒体类型，取值有：
<li>CME：多媒体创作引擎的媒体文件；</li>
<li>VOD：云点播的媒资文件。</li>
 * @method string getMaterialId() 获取多媒体创作引擎的媒体 ID。当 Type = CME  时必填。
 * @method void setMaterialId(string $MaterialId) 设置多媒体创作引擎的媒体 ID。当 Type = CME  时必填。
 * @method string getFileId() 获取云点播媒体文件 ID。当 Type = VOD 时必填。
 * @method void setFileId(string $FileId) 设置云点播媒体文件 ID。当 Type = VOD 时必填。
 * @method integer getIndex() 获取序号，位于输入源列表中的序号，由系统分配。
 * @method void setIndex(integer $Index) 设置序号，位于输入源列表中的序号，由系统分配。
 */
class MediaCastSourceInfo extends AbstractModel
{
    /**
     * @var string 输入源的媒体类型，取值有：
<li>CME：多媒体创作引擎的媒体文件；</li>
<li>VOD：云点播的媒资文件。</li>
     */
    public $Type;

    /**
     * @var string 多媒体创作引擎的媒体 ID。当 Type = CME  时必填。
     */
    public $MaterialId;

    /**
     * @var string 云点播媒体文件 ID。当 Type = VOD 时必填。
     */
    public $FileId;

    /**
     * @var integer 序号，位于输入源列表中的序号，由系统分配。
     */
    public $Index;

    /**
     * @param string $Type 输入源的媒体类型，取值有：
<li>CME：多媒体创作引擎的媒体文件；</li>
<li>VOD：云点播的媒资文件。</li>
     * @param string $MaterialId 多媒体创作引擎的媒体 ID。当 Type = CME  时必填。
     * @param string $FileId 云点播媒体文件 ID。当 Type = VOD 时必填。
     * @param integer $Index 序号，位于输入源列表中的序号，由系统分配。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MaterialId",$param) and $param["MaterialId"] !== null) {
            $this->MaterialId = $param["MaterialId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
