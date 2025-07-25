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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输出文件信息
 *
 * @method string getFileName() 获取目标文件名
 * @method void setFileName(string $FileName) 设置目标文件名
 * @method SegmentInfo getSegmentInfo() 获取目标文件切片信息
 * @method void setSegmentInfo(SegmentInfo $SegmentInfo) 设置目标文件切片信息
 */
class TargetInfo extends AbstractModel
{
    /**
     * @var string 目标文件名
     */
    public $FileName;

    /**
     * @var SegmentInfo 目标文件切片信息
     */
    public $SegmentInfo;

    /**
     * @param string $FileName 目标文件名
     * @param SegmentInfo $SegmentInfo 目标文件切片信息
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("SegmentInfo",$param) and $param["SegmentInfo"] !== null) {
            $this->SegmentInfo = new SegmentInfo();
            $this->SegmentInfo->deserialize($param["SegmentInfo"]);
        }
    }
}
