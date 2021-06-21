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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 端口段信息
 *
 * @method integer getBeginPort() 获取起始端口，取值1~65535
 * @method void setBeginPort(integer $BeginPort) 设置起始端口，取值1~65535
 * @method integer getEndPort() 获取结束端口，取值1~65535，必须不小于起始端口
 * @method void setEndPort(integer $EndPort) 设置结束端口，取值1~65535，必须不小于起始端口
 */
class PortSegment extends AbstractModel
{
    /**
     * @var integer 起始端口，取值1~65535
     */
    public $BeginPort;

    /**
     * @var integer 结束端口，取值1~65535，必须不小于起始端口
     */
    public $EndPort;

    /**
     * @param integer $BeginPort 起始端口，取值1~65535
     * @param integer $EndPort 结束端口，取值1~65535，必须不小于起始端口
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
        if (array_key_exists("BeginPort",$param) and $param["BeginPort"] !== null) {
            $this->BeginPort = $param["BeginPort"];
        }

        if (array_key_exists("EndPort",$param) and $param["EndPort"] !== null) {
            $this->EndPort = $param["EndPort"];
        }
    }
}
