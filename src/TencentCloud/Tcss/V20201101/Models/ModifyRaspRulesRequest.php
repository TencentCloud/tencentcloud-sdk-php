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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRaspRules请求参数结构体
 *
 * @method integer getId() 获取规则ID(新增时请留空，编辑时候必传)
 * @method void setId(integer $Id) 设置规则ID(新增时请留空，编辑时候必传)
 * @method array getVulVulsIDs() 获取漏洞id数组
 * @method void setVulVulsIDs(array $VulVulsIDs) 设置漏洞id数组
 * @method string getURLRegexp() 获取自定义请求范围加白正则表达式，选择全部请求范围时候为空，否则不能为空，base64编码
 * @method void setURLRegexp(string $URLRegexp) 设置自定义请求范围加白正则表达式，选择全部请求范围时候为空，否则不能为空，base64编码
 * @method integer getWhiteType() 获取加白方式，0：自定义请求范围加白。1：全部请求加白
 * @method void setWhiteType(integer $WhiteType) 设置加白方式，0：自定义请求范围加白。1：全部请求加白
 */
class ModifyRaspRulesRequest extends AbstractModel
{
    /**
     * @var integer 规则ID(新增时请留空，编辑时候必传)
     */
    public $Id;

    /**
     * @var array 漏洞id数组
     */
    public $VulVulsIDs;

    /**
     * @var string 自定义请求范围加白正则表达式，选择全部请求范围时候为空，否则不能为空，base64编码
     */
    public $URLRegexp;

    /**
     * @var integer 加白方式，0：自定义请求范围加白。1：全部请求加白
     */
    public $WhiteType;

    /**
     * @param integer $Id 规则ID(新增时请留空，编辑时候必传)
     * @param array $VulVulsIDs 漏洞id数组
     * @param string $URLRegexp 自定义请求范围加白正则表达式，选择全部请求范围时候为空，否则不能为空，base64编码
     * @param integer $WhiteType 加白方式，0：自定义请求范围加白。1：全部请求加白
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

        if (array_key_exists("VulVulsIDs",$param) and $param["VulVulsIDs"] !== null) {
            $this->VulVulsIDs = $param["VulVulsIDs"];
        }

        if (array_key_exists("URLRegexp",$param) and $param["URLRegexp"] !== null) {
            $this->URLRegexp = $param["URLRegexp"];
        }

        if (array_key_exists("WhiteType",$param) and $param["WhiteType"] !== null) {
            $this->WhiteType = $param["WhiteType"];
        }
    }
}
