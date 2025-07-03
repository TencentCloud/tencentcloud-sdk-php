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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 优图简单信息
 *
 * @method integer getId() 获取XMagic 的Id
 * @method void setId(integer $Id) 设置XMagic 的Id
 * @method integer getStatus() 获取XMagic 状态
 * @method void setStatus(integer $Status) 设置XMagic 状态
 */
class XMagicSimpleInfo extends AbstractModel
{
    /**
     * @var integer XMagic 的Id
     */
    public $Id;

    /**
     * @var integer XMagic 状态
     */
    public $Status;

    /**
     * @param integer $Id XMagic 的Id
     * @param integer $Status XMagic 状态
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
