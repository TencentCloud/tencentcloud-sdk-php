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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档信息
 *
 * @method integer getTextLength() 获取文件的字符数。
 * @method void setTextLength(integer $TextLength) 设置文件的字符数。
 * @method integer getByteLength() 获取文件的字节数。
 * @method void setByteLength(integer $ByteLength) 设置文件的字节数。
 * @method integer getIndexedProgress() 获取文件被预处理、Embedding 向量化的进度。
 * @method void setIndexedProgress(integer $IndexedProgress) 设置文件被预处理、Embedding 向量化的进度。
 * @method string getIndexedStatus() 获取文件预处理、Embedding 向量化的状态。
New：等待解析。
Loading：文件解析中。
Failure：文件解析、写入出错。
Ready：文件解析、写入完成。

 * @method void setIndexedStatus(string $IndexedStatus) 设置文件预处理、Embedding 向量化的状态。
New：等待解析。
Loading：文件解析中。
Failure：文件解析、写入出错。
Ready：文件解析、写入完成。

 * @method string getCreateTime() 获取文件创建时间。
 * @method void setCreateTime(string $CreateTime) 设置文件创建时间。
 * @method string getLastUpdateTime() 获取文件最后更新时间。
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置文件最后更新时间。
 * @method string getKeywords() 获取文件关键字。
 * @method void setKeywords(string $Keywords) 设置文件关键字。
 */
class KnowledgeDocumentSetInfo extends AbstractModel
{
    /**
     * @var integer 文件的字符数。
     */
    public $TextLength;

    /**
     * @var integer 文件的字节数。
     */
    public $ByteLength;

    /**
     * @var integer 文件被预处理、Embedding 向量化的进度。
     */
    public $IndexedProgress;

    /**
     * @var string 文件预处理、Embedding 向量化的状态。
New：等待解析。
Loading：文件解析中。
Failure：文件解析、写入出错。
Ready：文件解析、写入完成。

     */
    public $IndexedStatus;

    /**
     * @var string 文件创建时间。
     */
    public $CreateTime;

    /**
     * @var string 文件最后更新时间。
     */
    public $LastUpdateTime;

    /**
     * @var string 文件关键字。
     */
    public $Keywords;

    /**
     * @param integer $TextLength 文件的字符数。
     * @param integer $ByteLength 文件的字节数。
     * @param integer $IndexedProgress 文件被预处理、Embedding 向量化的进度。
     * @param string $IndexedStatus 文件预处理、Embedding 向量化的状态。
New：等待解析。
Loading：文件解析中。
Failure：文件解析、写入出错。
Ready：文件解析、写入完成。

     * @param string $CreateTime 文件创建时间。
     * @param string $LastUpdateTime 文件最后更新时间。
     * @param string $Keywords 文件关键字。
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
        if (array_key_exists("TextLength",$param) and $param["TextLength"] !== null) {
            $this->TextLength = $param["TextLength"];
        }

        if (array_key_exists("ByteLength",$param) and $param["ByteLength"] !== null) {
            $this->ByteLength = $param["ByteLength"];
        }

        if (array_key_exists("IndexedProgress",$param) and $param["IndexedProgress"] !== null) {
            $this->IndexedProgress = $param["IndexedProgress"];
        }

        if (array_key_exists("IndexedStatus",$param) and $param["IndexedStatus"] !== null) {
            $this->IndexedStatus = $param["IndexedStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }
    }
}
