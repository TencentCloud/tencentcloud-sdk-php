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
 * RunFailoverCopyPairs请求参数结构体
 *
 * @method array getCopyPairIds() 获取<p>复制对ID列表</p>
 * @method void setCopyPairIds(array $CopyPairIds) 设置<p>复制对ID列表</p>
 * @method string getCopyPairType() 获取<p>复制对类型，枚举值：INSTANCE。</p><p>枚举值：</p><ul><li>INSTANCE： CVM复制对</li></ul>
 * @method void setCopyPairType(string $CopyPairType) 设置<p>复制对类型，枚举值：INSTANCE。</p><p>枚举值：</p><ul><li>INSTANCE： CVM复制对</li></ul>
 * @method string getFailoverType() 获取<p>切换类型，支持WAIT和NOW</p>
 * @method void setFailoverType(string $FailoverType) 设置<p>切换类型，支持WAIT和NOW</p>
 * @method boolean getStopSourceInstance() 获取<p>故障切换成功后是否自动关机生产端实例，默认为true</p>
 * @method void setStopSourceInstance(boolean $StopSourceInstance) 设置<p>故障切换成功后是否自动关机生产端实例，默认为true</p>
 */
class RunFailoverCopyPairsRequest extends AbstractModel
{
    /**
     * @var array <p>复制对ID列表</p>
     */
    public $CopyPairIds;

    /**
     * @var string <p>复制对类型，枚举值：INSTANCE。</p><p>枚举值：</p><ul><li>INSTANCE： CVM复制对</li></ul>
     */
    public $CopyPairType;

    /**
     * @var string <p>切换类型，支持WAIT和NOW</p>
     */
    public $FailoverType;

    /**
     * @var boolean <p>故障切换成功后是否自动关机生产端实例，默认为true</p>
     */
    public $StopSourceInstance;

    /**
     * @param array $CopyPairIds <p>复制对ID列表</p>
     * @param string $CopyPairType <p>复制对类型，枚举值：INSTANCE。</p><p>枚举值：</p><ul><li>INSTANCE： CVM复制对</li></ul>
     * @param string $FailoverType <p>切换类型，支持WAIT和NOW</p>
     * @param boolean $StopSourceInstance <p>故障切换成功后是否自动关机生产端实例，默认为true</p>
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

        if (array_key_exists("FailoverType",$param) and $param["FailoverType"] !== null) {
            $this->FailoverType = $param["FailoverType"];
        }

        if (array_key_exists("StopSourceInstance",$param) and $param["StopSourceInstance"] !== null) {
            $this->StopSourceInstance = $param["StopSourceInstance"];
        }
    }
}
