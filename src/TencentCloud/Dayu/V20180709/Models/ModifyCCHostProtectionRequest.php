<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCCHostProtection请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
 * @method string getId() 获取资源ID
 * @method void setId(string $Id) 设置资源ID
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method string getMethod() 获取开启/关闭CC域名防护，取值[open(表示开启)，close(表示关闭)]
 * @method void setMethod(string $Method) 设置开启/关闭CC域名防护，取值[open(表示开启)，close(表示关闭)]
 */
class ModifyCCHostProtectionRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var string 资源ID
     */
    public $Id;

    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var string 开启/关闭CC域名防护，取值[open(表示开启)，close(表示关闭)]
     */
    public $Method;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
     * @param string $Id 资源ID
     * @param string $RuleId 规则ID
     * @param string $Method 开启/关闭CC域名防护，取值[open(表示开启)，close(表示关闭)]
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
        if (array_key_exists('Business',$param) and $param['Business'] !== null) {
            $this->Business = $param['Business'];
        }

        if (array_key_exists('Id',$param) and $param['Id'] !== null) {
            $this->Id = $param['Id'];
        }

        if (array_key_exists('RuleId',$param) and $param['RuleId'] !== null) {
            $this->RuleId = $param['RuleId'];
        }

        if (array_key_exists('Method',$param) and $param['Method'] !== null) {
            $this->Method = $param['Method'];
        }
    }
}
