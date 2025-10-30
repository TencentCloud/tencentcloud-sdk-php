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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大盘统计-录像存储统计 出参Value
 *
 * @method integer getExpectTimeLen() 获取期望执行时间 秒
 * @method void setExpectTimeLen(integer $ExpectTimeLen) 设置期望执行时间 秒
 * @method integer getRecordTimeLen() 获取实际执行时间 秒
 * @method void setRecordTimeLen(integer $RecordTimeLen) 设置实际执行时间 秒
 * @method float getFileSize() 获取存储大小 G
 * @method void setFileSize(float $FileSize) 设置存储大小 G
 */
class RecordStatisticValue extends AbstractModel
{
    /**
     * @var integer 期望执行时间 秒
     */
    public $ExpectTimeLen;

    /**
     * @var integer 实际执行时间 秒
     */
    public $RecordTimeLen;

    /**
     * @var float 存储大小 G
     */
    public $FileSize;

    /**
     * @param integer $ExpectTimeLen 期望执行时间 秒
     * @param integer $RecordTimeLen 实际执行时间 秒
     * @param float $FileSize 存储大小 G
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
        if (array_key_exists("ExpectTimeLen",$param) and $param["ExpectTimeLen"] !== null) {
            $this->ExpectTimeLen = $param["ExpectTimeLen"];
        }

        if (array_key_exists("RecordTimeLen",$param) and $param["RecordTimeLen"] !== null) {
            $this->RecordTimeLen = $param["RecordTimeLen"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }
    }
}
