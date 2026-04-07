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
 * 垫片配置。
 *
 * @method string getType() 获取vod类型有效，内容有效起始时间，可选Entire和SpecifyTimeRange。
 * @method void setType(string $Type) 设置vod类型有效，内容有效起始时间，可选Entire和SpecifyTimeRange。
 * @method integer getOffset() 获取偏移量,Type为SpecifyTimeRange时有效。
 * @method void setOffset(integer $Offset) 设置偏移量,Type为SpecifyTimeRange时有效。
 * @method integer getStartOffset() 获取开始偏移量,Type为SpecifyTimeRange时有效。
 * @method void setStartOffset(integer $StartOffset) 设置开始偏移量,Type为SpecifyTimeRange时有效。
 * @method integer getEndOffset() 获取结束偏移量,Type为SpecifyTimeRange时有效。
 * @method void setEndOffset(integer $EndOffset) 设置结束偏移量,Type为SpecifyTimeRange时有效。
 */
class ClipRangeInfo extends AbstractModel
{
    /**
     * @var string vod类型有效，内容有效起始时间，可选Entire和SpecifyTimeRange。
     */
    public $Type;

    /**
     * @var integer 偏移量,Type为SpecifyTimeRange时有效。
     */
    public $Offset;

    /**
     * @var integer 开始偏移量,Type为SpecifyTimeRange时有效。
     */
    public $StartOffset;

    /**
     * @var integer 结束偏移量,Type为SpecifyTimeRange时有效。
     */
    public $EndOffset;

    /**
     * @param string $Type vod类型有效，内容有效起始时间，可选Entire和SpecifyTimeRange。
     * @param integer $Offset 偏移量,Type为SpecifyTimeRange时有效。
     * @param integer $StartOffset 开始偏移量,Type为SpecifyTimeRange时有效。
     * @param integer $EndOffset 结束偏移量,Type为SpecifyTimeRange时有效。
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("StartOffset",$param) and $param["StartOffset"] !== null) {
            $this->StartOffset = $param["StartOffset"];
        }

        if (array_key_exists("EndOffset",$param) and $param["EndOffset"] !== null) {
            $this->EndOffset = $param["EndOffset"];
        }
    }
}
