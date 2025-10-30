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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckBatchStatus请求参数结构体
 *
 * @method array getLogIds() 获取操作日志 ID数组，最多 200 个
可通过任意批量操作接口获取，例如：
[BatchModifyDomainInfo](https://cloud.tencent.com/document/product/242/49197)
[ModifyDomainDNSBatch](https://cloud.tencent.com/document/product/242/49211)
[ModifyDomainOwnerBatch](https://cloud.tencent.com/document/product/242/49196)
[UpdateProhibitionBatch](https://cloud.tencent.com/document/api/242/49193)
[TransferProhibitionBatch](https://cloud.tencent.com/document/api/242/49194)
[TransferInDomainBatch](https://cloud.tencent.com/document/api/242/49195)
 * @method void setLogIds(array $LogIds) 设置操作日志 ID数组，最多 200 个
可通过任意批量操作接口获取，例如：
[BatchModifyDomainInfo](https://cloud.tencent.com/document/product/242/49197)
[ModifyDomainDNSBatch](https://cloud.tencent.com/document/product/242/49211)
[ModifyDomainOwnerBatch](https://cloud.tencent.com/document/product/242/49196)
[UpdateProhibitionBatch](https://cloud.tencent.com/document/api/242/49193)
[TransferProhibitionBatch](https://cloud.tencent.com/document/api/242/49194)
[TransferInDomainBatch](https://cloud.tencent.com/document/api/242/49195)
 */
class CheckBatchStatusRequest extends AbstractModel
{
    /**
     * @var array 操作日志 ID数组，最多 200 个
可通过任意批量操作接口获取，例如：
[BatchModifyDomainInfo](https://cloud.tencent.com/document/product/242/49197)
[ModifyDomainDNSBatch](https://cloud.tencent.com/document/product/242/49211)
[ModifyDomainOwnerBatch](https://cloud.tencent.com/document/product/242/49196)
[UpdateProhibitionBatch](https://cloud.tencent.com/document/api/242/49193)
[TransferProhibitionBatch](https://cloud.tencent.com/document/api/242/49194)
[TransferInDomainBatch](https://cloud.tencent.com/document/api/242/49195)
     */
    public $LogIds;

    /**
     * @param array $LogIds 操作日志 ID数组，最多 200 个
可通过任意批量操作接口获取，例如：
[BatchModifyDomainInfo](https://cloud.tencent.com/document/product/242/49197)
[ModifyDomainDNSBatch](https://cloud.tencent.com/document/product/242/49211)
[ModifyDomainOwnerBatch](https://cloud.tencent.com/document/product/242/49196)
[UpdateProhibitionBatch](https://cloud.tencent.com/document/api/242/49193)
[TransferProhibitionBatch](https://cloud.tencent.com/document/api/242/49194)
[TransferInDomainBatch](https://cloud.tencent.com/document/api/242/49195)
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
        if (array_key_exists("LogIds",$param) and $param["LogIds"] !== null) {
            $this->LogIds = $param["LogIds"];
        }
    }
}
