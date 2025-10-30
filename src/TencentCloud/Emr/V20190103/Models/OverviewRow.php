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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Hbase的TableMetric Overview返回
 *
 * @method string getTable() 获取表名字
 * @method void setTable(string $Table) 设置表名字
 * @method float getReadRequestCount() 获取读请求次数
 * @method void setReadRequestCount(float $ReadRequestCount) 设置读请求次数
 * @method float getWriteRequestCount() 获取写请求次数
 * @method void setWriteRequestCount(float $WriteRequestCount) 设置写请求次数
 * @method float getMemstoreSize() 获取当前memstore的size
 * @method void setMemstoreSize(float $MemstoreSize) 设置当前memstore的size
 * @method float getStoreFileSize() 获取当前region中StroreFile的size
 * @method void setStoreFileSize(float $StoreFileSize) 设置当前region中StroreFile的size
 * @method string getOperation() 获取regions，点击可跳转
 * @method void setOperation(string $Operation) 设置regions，点击可跳转
 * @method float getStoreFileNum() 获取StoreFile数量
 * @method void setStoreFileNum(float $StoreFileNum) 设置StoreFile数量
 */
class OverviewRow extends AbstractModel
{
    /**
     * @var string 表名字
     */
    public $Table;

    /**
     * @var float 读请求次数
     */
    public $ReadRequestCount;

    /**
     * @var float 写请求次数
     */
    public $WriteRequestCount;

    /**
     * @var float 当前memstore的size
     */
    public $MemstoreSize;

    /**
     * @var float 当前region中StroreFile的size
     */
    public $StoreFileSize;

    /**
     * @var string regions，点击可跳转
     */
    public $Operation;

    /**
     * @var float StoreFile数量
     */
    public $StoreFileNum;

    /**
     * @param string $Table 表名字
     * @param float $ReadRequestCount 读请求次数
     * @param float $WriteRequestCount 写请求次数
     * @param float $MemstoreSize 当前memstore的size
     * @param float $StoreFileSize 当前region中StroreFile的size
     * @param string $Operation regions，点击可跳转
     * @param float $StoreFileNum StoreFile数量
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
        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("ReadRequestCount",$param) and $param["ReadRequestCount"] !== null) {
            $this->ReadRequestCount = $param["ReadRequestCount"];
        }

        if (array_key_exists("WriteRequestCount",$param) and $param["WriteRequestCount"] !== null) {
            $this->WriteRequestCount = $param["WriteRequestCount"];
        }

        if (array_key_exists("MemstoreSize",$param) and $param["MemstoreSize"] !== null) {
            $this->MemstoreSize = $param["MemstoreSize"];
        }

        if (array_key_exists("StoreFileSize",$param) and $param["StoreFileSize"] !== null) {
            $this->StoreFileSize = $param["StoreFileSize"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("StoreFileNum",$param) and $param["StoreFileNum"] !== null) {
            $this->StoreFileNum = $param["StoreFileNum"];
        }
    }
}
