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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 封堵记录
 *
 * @method string getResource() 获取<p>被封堵的资源，公网 IP，示例如下：</p><ul><li> 公网 IP：117.175.94.231。</li></ul>
 * @method void setResource(string $Resource) 设置<p>被封堵的资源，公网 IP，示例如下：</p><ul><li> 公网 IP：117.175.94.231。</li></ul>
 * @method string getBlockTime() 获取<p>被封堵的时间。</p>
 * @method void setBlockTime(string $BlockTime) 设置<p>被封堵的时间。</p>
 * @method string getStatus() 获取<p>封堵解封状态。</p><p>枚举值：</p><ul><li>Blocked：已封堵；</li><li>Unblocking：解封中；</li><li>Unblocked：已解封。</li></ul>
 * @method void setStatus(string $Status) 设置<p>封堵解封状态。</p><p>枚举值：</p><ul><li>Blocked：已封堵；</li><li>Unblocking：解封中；</li><li>Unblocked：已解封。</li></ul>
 */
class DDoSBlockRecord extends AbstractModel
{
    /**
     * @var string <p>被封堵的资源，公网 IP，示例如下：</p><ul><li> 公网 IP：117.175.94.231。</li></ul>
     */
    public $Resource;

    /**
     * @var string <p>被封堵的时间。</p>
     */
    public $BlockTime;

    /**
     * @var string <p>封堵解封状态。</p><p>枚举值：</p><ul><li>Blocked：已封堵；</li><li>Unblocking：解封中；</li><li>Unblocked：已解封。</li></ul>
     */
    public $Status;

    /**
     * @param string $Resource <p>被封堵的资源，公网 IP，示例如下：</p><ul><li> 公网 IP：117.175.94.231。</li></ul>
     * @param string $BlockTime <p>被封堵的时间。</p>
     * @param string $Status <p>封堵解封状态。</p><p>枚举值：</p><ul><li>Blocked：已封堵；</li><li>Unblocking：解封中；</li><li>Unblocked：已解封。</li></ul>
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("BlockTime",$param) and $param["BlockTime"] !== null) {
            $this->BlockTime = $param["BlockTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
