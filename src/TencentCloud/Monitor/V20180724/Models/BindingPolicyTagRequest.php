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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindingPolicyTag请求参数结构体
 *
 * @method string getModule() 获取固定取值 monitor
 * @method void setModule(string $Module) 设置固定取值 monitor
 * @method string getPolicyId() 获取策略ID
 * @method void setPolicyId(string $PolicyId) 设置策略ID
 * @method string getGroupId() 获取用于实例、实例组绑定和解绑接口（BindingPolicyObject、UnBindingAllPolicyObject、UnBindingPolicyObject）的策略 ID
 * @method void setGroupId(string $GroupId) 设置用于实例、实例组绑定和解绑接口（BindingPolicyObject、UnBindingAllPolicyObject、UnBindingPolicyObject）的策略 ID
 * @method string getServiceType() 获取产品类型
 * @method void setServiceType(string $ServiceType) 设置产品类型
 * @method PolicyTag getTag() 获取策略标签
 * @method void setTag(PolicyTag $Tag) 设置策略标签
 * @method integer getInstanceGroupId() 获取实例分组ID
 * @method void setInstanceGroupId(integer $InstanceGroupId) 设置实例分组ID
 * @method array getBatchTag() 获取批量绑定标签
 * @method void setBatchTag(array $BatchTag) 设置批量绑定标签
 */
class BindingPolicyTagRequest extends AbstractModel
{
    /**
     * @var string 固定取值 monitor
     */
    public $Module;

    /**
     * @var string 策略ID
     */
    public $PolicyId;

    /**
     * @var string 用于实例、实例组绑定和解绑接口（BindingPolicyObject、UnBindingAllPolicyObject、UnBindingPolicyObject）的策略 ID
     */
    public $GroupId;

    /**
     * @var string 产品类型
     */
    public $ServiceType;

    /**
     * @var PolicyTag 策略标签
     */
    public $Tag;

    /**
     * @var integer 实例分组ID
     */
    public $InstanceGroupId;

    /**
     * @var array 批量绑定标签
     */
    public $BatchTag;

    /**
     * @param string $Module 固定取值 monitor
     * @param string $PolicyId 策略ID
     * @param string $GroupId 用于实例、实例组绑定和解绑接口（BindingPolicyObject、UnBindingAllPolicyObject、UnBindingPolicyObject）的策略 ID
     * @param string $ServiceType 产品类型
     * @param PolicyTag $Tag 策略标签
     * @param integer $InstanceGroupId 实例分组ID
     * @param array $BatchTag 批量绑定标签
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = new PolicyTag();
            $this->Tag->deserialize($param["Tag"]);
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("BatchTag",$param) and $param["BatchTag"] !== null) {
            $this->BatchTag = [];
            foreach ($param["BatchTag"] as $key => $value){
                $obj = new PolicyTag();
                $obj->deserialize($value);
                array_push($this->BatchTag, $obj);
            }
        }
    }
}
