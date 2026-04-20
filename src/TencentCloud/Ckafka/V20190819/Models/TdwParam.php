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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tdw类型入参
 *
 * @method string getBid() 获取<p>Tdw的bid</p>
 * @method void setBid(string $Bid) 设置<p>Tdw的bid</p>
 * @method string getTid() 获取<p>Tdw的tid</p>
 * @method void setTid(string $Tid) 设置<p>Tdw的tid</p>
 * @method boolean getIsDomestic() 获取<p>默认true</p>
 * @method void setIsDomestic(boolean $IsDomestic) 设置<p>默认true</p>
 * @method string getTdwHost() 获取<p>TDW地址，默认tl-tdbank-tdmanager.tencent-distribute.com</p>
 * @method void setTdwHost(string $TdwHost) 设置<p>TDW地址，默认tl-tdbank-tdmanager.tencent-distribute.com</p>
 * @method integer getTdwPort() 获取<p>TDW端口，默认8099</p>
 * @method void setTdwPort(integer $TdwPort) 设置<p>TDW端口，默认8099</p>
 */
class TdwParam extends AbstractModel
{
    /**
     * @var string <p>Tdw的bid</p>
     */
    public $Bid;

    /**
     * @var string <p>Tdw的tid</p>
     */
    public $Tid;

    /**
     * @var boolean <p>默认true</p>
     */
    public $IsDomestic;

    /**
     * @var string <p>TDW地址，默认tl-tdbank-tdmanager.tencent-distribute.com</p>
     */
    public $TdwHost;

    /**
     * @var integer <p>TDW端口，默认8099</p>
     */
    public $TdwPort;

    /**
     * @param string $Bid <p>Tdw的bid</p>
     * @param string $Tid <p>Tdw的tid</p>
     * @param boolean $IsDomestic <p>默认true</p>
     * @param string $TdwHost <p>TDW地址，默认tl-tdbank-tdmanager.tencent-distribute.com</p>
     * @param integer $TdwPort <p>TDW端口，默认8099</p>
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
        if (array_key_exists("Bid",$param) and $param["Bid"] !== null) {
            $this->Bid = $param["Bid"];
        }

        if (array_key_exists("Tid",$param) and $param["Tid"] !== null) {
            $this->Tid = $param["Tid"];
        }

        if (array_key_exists("IsDomestic",$param) and $param["IsDomestic"] !== null) {
            $this->IsDomestic = $param["IsDomestic"];
        }

        if (array_key_exists("TdwHost",$param) and $param["TdwHost"] !== null) {
            $this->TdwHost = $param["TdwHost"];
        }

        if (array_key_exists("TdwPort",$param) and $param["TdwPort"] !== null) {
            $this->TdwPort = $param["TdwPort"];
        }
    }
}
