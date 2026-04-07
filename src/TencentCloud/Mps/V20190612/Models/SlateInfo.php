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
 * 线性组装频道垫片配置。
 *
 * @method string getSourceLocationId() 获取source location的ID。
 * @method void setSourceLocationId(string $SourceLocationId) 设置source location的ID。
 * @method string getVodSourceName() 获取对应的vod垫片内容源名称。
 * @method void setVodSourceName(string $VodSourceName) 设置对应的vod垫片内容源名称。
 */
class SlateInfo extends AbstractModel
{
    /**
     * @var string source location的ID。
     */
    public $SourceLocationId;

    /**
     * @var string 对应的vod垫片内容源名称。
     */
    public $VodSourceName;

    /**
     * @param string $SourceLocationId source location的ID。
     * @param string $VodSourceName 对应的vod垫片内容源名称。
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
        if (array_key_exists("SourceLocationId",$param) and $param["SourceLocationId"] !== null) {
            $this->SourceLocationId = $param["SourceLocationId"];
        }

        if (array_key_exists("VodSourceName",$param) and $param["VodSourceName"] !== null) {
            $this->VodSourceName = $param["VodSourceName"];
        }
    }
}
