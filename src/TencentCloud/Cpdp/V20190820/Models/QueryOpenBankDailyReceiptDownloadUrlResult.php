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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云企付-按日期查询回单下载地址
 *
 * @method string getDownloadUrl() 获取回单文件下载链接
 * @method void setDownloadUrl(string $DownloadUrl) 设置回单文件下载链接
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method string getReceiptStatus() 获取回单状态
PENDING: 处理中
READY: 可以下载
 * @method void setReceiptStatus(string $ReceiptStatus) 设置回单状态
PENDING: 处理中
READY: 可以下载
 */
class QueryOpenBankDailyReceiptDownloadUrlResult extends AbstractModel
{
    /**
     * @var string 回单文件下载链接
     */
    public $DownloadUrl;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var string 回单状态
PENDING: 处理中
READY: 可以下载
     */
    public $ReceiptStatus;

    /**
     * @param string $DownloadUrl 回单文件下载链接
     * @param string $ExpireTime 过期时间
     * @param string $ReceiptStatus 回单状态
PENDING: 处理中
READY: 可以下载
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
        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ReceiptStatus",$param) and $param["ReceiptStatus"] !== null) {
            $this->ReceiptStatus = $param["ReceiptStatus"];
        }
    }
}
