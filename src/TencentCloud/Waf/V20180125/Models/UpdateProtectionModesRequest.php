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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateProtectionModes请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getEdition() 获取资源类型
 * @method void setEdition(string $Edition) 设置资源类型
 * @method array getTypeIDs() 获取大类规则ID
 * @method void setTypeIDs(array $TypeIDs) 设置大类规则ID
 * @method integer getMode() 获取0表示观察，1表示拦截
 * @method void setMode(integer $Mode) 设置0表示观察，1表示拦截
 */
class UpdateProtectionModesRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 资源类型
     */
    public $Edition;

    /**
     * @var array 大类规则ID
     */
    public $TypeIDs;

    /**
     * @var integer 0表示观察，1表示拦截
     */
    public $Mode;

    /**
     * @param string $Domain 域名
     * @param string $Edition 资源类型
     * @param array $TypeIDs 大类规则ID
     * @param integer $Mode 0表示观察，1表示拦截
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("TypeIDs",$param) and $param["TypeIDs"] !== null) {
            $this->TypeIDs = $param["TypeIDs"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
