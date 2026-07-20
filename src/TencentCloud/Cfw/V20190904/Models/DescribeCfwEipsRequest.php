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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfwEips请求参数结构体
 *
 * @method integer getMode() 获取<p>1：cfw接入模式，目前仅支持接入模式实例</p>
 * @method void setMode(integer $Mode) 设置<p>1：cfw接入模式，目前仅支持接入模式实例</p>
 * @method string getNatGatewayId() 获取<p>ALL：查询所有弹性公网ip; nat-xxxxx：接入模式场景指定网关的弹性公网ip</p>
 * @method void setNatGatewayId(string $NatGatewayId) 设置<p>ALL：查询所有弹性公网ip; nat-xxxxx：接入模式场景指定网关的弹性公网ip</p>
 * @method string getCfwInstance() 获取<p>防火墙实例id，当前仅支持接入模式的实例，该字段必填</p>
 * @method void setCfwInstance(string $CfwInstance) 设置<p>防火墙实例id，当前仅支持接入模式的实例，该字段必填</p>
 */
class DescribeCfwEipsRequest extends AbstractModel
{
    /**
     * @var integer <p>1：cfw接入模式，目前仅支持接入模式实例</p>
     */
    public $Mode;

    /**
     * @var string <p>ALL：查询所有弹性公网ip; nat-xxxxx：接入模式场景指定网关的弹性公网ip</p>
     */
    public $NatGatewayId;

    /**
     * @var string <p>防火墙实例id，当前仅支持接入模式的实例，该字段必填</p>
     */
    public $CfwInstance;

    /**
     * @param integer $Mode <p>1：cfw接入模式，目前仅支持接入模式实例</p>
     * @param string $NatGatewayId <p>ALL：查询所有弹性公网ip; nat-xxxxx：接入模式场景指定网关的弹性公网ip</p>
     * @param string $CfwInstance <p>防火墙实例id，当前仅支持接入模式的实例，该字段必填</p>
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("CfwInstance",$param) and $param["CfwInstance"] !== null) {
            $this->CfwInstance = $param["CfwInstance"];
        }
    }
}
