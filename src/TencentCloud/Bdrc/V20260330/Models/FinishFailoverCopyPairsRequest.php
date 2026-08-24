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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FinishFailoverCopyPairs请求参数结构体
 *
 * @method array getCopyPairIds() 获取<p>复制对ID列表。长度范围 [1, 50]。当 CopyPairType=INSTANCE 时传 CVM 复制对ID，否则传云盘/CFS 复制对ID。</p>
 * @method void setCopyPairIds(array $CopyPairIds) 设置<p>复制对ID列表。长度范围 [1, 50]。当 CopyPairType=INSTANCE 时传 CVM 复制对ID，否则传云盘/CFS 复制对ID。</p>
 * @method string getCopyPairType() 获取<p>要完成切换的复制对类型。枚举值：DISK / INSTANCE / CFS。</p>
 * @method void setCopyPairType(string $CopyPairType) 设置<p>要完成切换的复制对类型。枚举值：DISK / INSTANCE / CFS。</p>
 */
class FinishFailoverCopyPairsRequest extends AbstractModel
{
    /**
     * @var array <p>复制对ID列表。长度范围 [1, 50]。当 CopyPairType=INSTANCE 时传 CVM 复制对ID，否则传云盘/CFS 复制对ID。</p>
     */
    public $CopyPairIds;

    /**
     * @var string <p>要完成切换的复制对类型。枚举值：DISK / INSTANCE / CFS。</p>
     */
    public $CopyPairType;

    /**
     * @param array $CopyPairIds <p>复制对ID列表。长度范围 [1, 50]。当 CopyPairType=INSTANCE 时传 CVM 复制对ID，否则传云盘/CFS 复制对ID。</p>
     * @param string $CopyPairType <p>要完成切换的复制对类型。枚举值：DISK / INSTANCE / CFS。</p>
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
        if (array_key_exists("CopyPairIds",$param) and $param["CopyPairIds"] !== null) {
            $this->CopyPairIds = $param["CopyPairIds"];
        }

        if (array_key_exists("CopyPairType",$param) and $param["CopyPairType"] !== null) {
            $this->CopyPairType = $param["CopyPairType"];
        }
    }
}
