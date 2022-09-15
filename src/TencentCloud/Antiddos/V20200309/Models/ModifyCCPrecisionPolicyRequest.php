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
 * ModifyCCPrecisionPolicy请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getPolicyId() 获取策略Id
 * @method void setPolicyId(string $PolicyId) 设置策略Id
 * @method string getPolicyAction() 获取策略方式。可取值：alg、drop。alg指返回验证码方式验证，drop表示该访问丢弃。
 * @method void setPolicyAction(string $PolicyAction) 设置策略方式。可取值：alg、drop。alg指返回验证码方式验证，drop表示该访问丢弃。
 * @method array getPolicyList() 获取策略记录
 * @method void setPolicyList(array $PolicyList) 设置策略记录
 */
class ModifyCCPrecisionPolicyRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string 策略Id
     */
    public $PolicyId;

    /**
     * @var string 策略方式。可取值：alg、drop。alg指返回验证码方式验证，drop表示该访问丢弃。
     */
    public $PolicyAction;

    /**
     * @var array 策略记录
     */
    public $PolicyList;

    /**
     * @param string $InstanceId 实例Id
     * @param string $PolicyId 策略Id
     * @param string $PolicyAction 策略方式。可取值：alg、drop。alg指返回验证码方式验证，drop表示该访问丢弃。
     * @param array $PolicyList 策略记录
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyAction",$param) and $param["PolicyAction"] !== null) {
            $this->PolicyAction = $param["PolicyAction"];
        }

        if (array_key_exists("PolicyList",$param) and $param["PolicyList"] !== null) {
            $this->PolicyList = [];
            foreach ($param["PolicyList"] as $key => $value){
                $obj = new CCPrecisionPlyRecord();
                $obj->deserialize($value);
                array_push($this->PolicyList, $obj);
            }
        }
    }
}
