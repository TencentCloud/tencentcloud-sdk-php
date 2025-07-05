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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 申请ipv6 cidr block的信息
 *
 * @method string getISPType() 获取IPv6 Cidr所属运营商类型，支持的类型有 'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调。作为入参数时为必选。
 * @method void setISPType(string $ISPType) 设置IPv6 Cidr所属运营商类型，支持的类型有 'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调。作为入参数时为必选。
 * @method integer getCount() 获取申请IPv6 Cidr Block的个数。作为入参数时为必选。
 * @method void setCount(integer $Count) 设置申请IPv6 Cidr Block的个数。作为入参数时为必选。
 */
class ISPTypeItem extends AbstractModel
{
    /**
     * @var string IPv6 Cidr所属运营商类型，支持的类型有 'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调。作为入参数时为必选。
     */
    public $ISPType;

    /**
     * @var integer 申请IPv6 Cidr Block的个数。作为入参数时为必选。
     */
    public $Count;

    /**
     * @param string $ISPType IPv6 Cidr所属运营商类型，支持的类型有 'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调。作为入参数时为必选。
     * @param integer $Count 申请IPv6 Cidr Block的个数。作为入参数时为必选。
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
        if (array_key_exists("ISPType",$param) and $param["ISPType"] !== null) {
            $this->ISPType = $param["ISPType"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
