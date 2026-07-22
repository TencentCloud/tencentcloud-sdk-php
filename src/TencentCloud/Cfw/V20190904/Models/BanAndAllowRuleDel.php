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
 * 封禁或放通规则项，包含对象、适用方向和规则类型。
 *
 * @method string getDirectionList() 获取规则适用方向，0 表示互联网出站，1 表示互联网入站，2 表示双向，3 表示东西向，4 表示情报误报反馈，5 表示内网访问源，6 表示内网访问目的；多个值以逗号分隔。
 * @method void setDirectionList(string $DirectionList) 设置规则适用方向，0 表示互联网出站，1 表示互联网入站，2 表示双向，3 表示东西向，4 表示情报误报反馈，5 表示内网访问源，6 表示内网访问目的；多个值以逗号分隔。
 * @method string getIoc() 获取封禁或放通对象值。
 * @method void setIoc(string $Ioc) 设置封禁或放通对象值。
 * @method integer getRuleType() 获取规则类型标识。服务端定义的常用值为：1 封禁 IP，2 放通 IP，3 放通域名，4 威胁情报地址，5 资产实例，6 自定义策略，7 入侵防御规则，8 扩展 IP 规则，9 扩展自定义规则。
 * @method void setRuleType(integer $RuleType) 设置规则类型标识。服务端定义的常用值为：1 封禁 IP，2 放通 IP，3 放通域名，4 威胁情报地址，5 资产实例，6 自定义策略，7 入侵防御规则，8 扩展 IP 规则，9 扩展自定义规则。
 */
class BanAndAllowRuleDel extends AbstractModel
{
    /**
     * @var string 规则适用方向，0 表示互联网出站，1 表示互联网入站，2 表示双向，3 表示东西向，4 表示情报误报反馈，5 表示内网访问源，6 表示内网访问目的；多个值以逗号分隔。
     */
    public $DirectionList;

    /**
     * @var string 封禁或放通对象值。
     */
    public $Ioc;

    /**
     * @var integer 规则类型标识。服务端定义的常用值为：1 封禁 IP，2 放通 IP，3 放通域名，4 威胁情报地址，5 资产实例，6 自定义策略，7 入侵防御规则，8 扩展 IP 规则，9 扩展自定义规则。
     */
    public $RuleType;

    /**
     * @param string $DirectionList 规则适用方向，0 表示互联网出站，1 表示互联网入站，2 表示双向，3 表示东西向，4 表示情报误报反馈，5 表示内网访问源，6 表示内网访问目的；多个值以逗号分隔。
     * @param string $Ioc 封禁或放通对象值。
     * @param integer $RuleType 规则类型标识。服务端定义的常用值为：1 封禁 IP，2 放通 IP，3 放通域名，4 威胁情报地址，5 资产实例，6 自定义策略，7 入侵防御规则，8 扩展 IP 规则，9 扩展自定义规则。
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
        if (array_key_exists("DirectionList",$param) and $param["DirectionList"] !== null) {
            $this->DirectionList = $param["DirectionList"];
        }

        if (array_key_exists("Ioc",$param) and $param["Ioc"] !== null) {
            $this->Ioc = $param["Ioc"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }
    }
}
