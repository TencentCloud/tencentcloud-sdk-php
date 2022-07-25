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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tdw类型入参
 *
 * @method string getBid() 获取Tdw的bid
 * @method void setBid(string $Bid) 设置Tdw的bid
 * @method string getTid() 获取Tdw的tid
 * @method void setTid(string $Tid) 设置Tdw的tid
 * @method boolean getIsDomestic() 获取是否为国内站，默认true
 * @method void setIsDomestic(boolean $IsDomestic) 设置是否为国内站，默认true
 */
class TdwParam extends AbstractModel
{
    /**
     * @var string Tdw的bid
     */
    public $Bid;

    /**
     * @var string Tdw的tid
     */
    public $Tid;

    /**
     * @var boolean 是否为国内站，默认true
     */
    public $IsDomestic;

    /**
     * @param string $Bid Tdw的bid
     * @param string $Tid Tdw的tid
     * @param boolean $IsDomestic 是否为国内站，默认true
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
    }
}
