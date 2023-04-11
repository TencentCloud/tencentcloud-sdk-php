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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceParams返回参数结构体
 *
 * @method array getInstanceEnumParam() 获取参数值为枚举类型参数集合。
 * @method void setInstanceEnumParam(array $InstanceEnumParam) 设置参数值为枚举类型参数集合。
 * @method array getInstanceIntegerParam() 获取参数值为 Integer 类型参数集合。
 * @method void setInstanceIntegerParam(array $InstanceIntegerParam) 设置参数值为 Integer 类型参数集合。
 * @method array getInstanceTextParam() 获取参数值为 Text 类型的参数集合。
 * @method void setInstanceTextParam(array $InstanceTextParam) 设置参数值为 Text 类型的参数集合。
 * @method array getInstanceMultiParam() 获取参数值为混合类型的参数集合。
 * @method void setInstanceMultiParam(array $InstanceMultiParam) 设置参数值为混合类型的参数集合。
 * @method integer getTotalCount() 获取当前实例支持修改的参数个数统计 如0
 * @method void setTotalCount(integer $TotalCount) 设置当前实例支持修改的参数个数统计 如0
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceParamsResponse extends AbstractModel
{
    /**
     * @var array 参数值为枚举类型参数集合。
     */
    public $InstanceEnumParam;

    /**
     * @var array 参数值为 Integer 类型参数集合。
     */
    public $InstanceIntegerParam;

    /**
     * @var array 参数值为 Text 类型的参数集合。
     */
    public $InstanceTextParam;

    /**
     * @var array 参数值为混合类型的参数集合。
     */
    public $InstanceMultiParam;

    /**
     * @var integer 当前实例支持修改的参数个数统计 如0
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $InstanceEnumParam 参数值为枚举类型参数集合。
     * @param array $InstanceIntegerParam 参数值为 Integer 类型参数集合。
     * @param array $InstanceTextParam 参数值为 Text 类型的参数集合。
     * @param array $InstanceMultiParam 参数值为混合类型的参数集合。
     * @param integer $TotalCount 当前实例支持修改的参数个数统计 如0
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("InstanceEnumParam",$param) and $param["InstanceEnumParam"] !== null) {
            $this->InstanceEnumParam = [];
            foreach ($param["InstanceEnumParam"] as $key => $value){
                $obj = new InstanceEnumParam();
                $obj->deserialize($value);
                array_push($this->InstanceEnumParam, $obj);
            }
        }

        if (array_key_exists("InstanceIntegerParam",$param) and $param["InstanceIntegerParam"] !== null) {
            $this->InstanceIntegerParam = [];
            foreach ($param["InstanceIntegerParam"] as $key => $value){
                $obj = new InstanceIntegerParam();
                $obj->deserialize($value);
                array_push($this->InstanceIntegerParam, $obj);
            }
        }

        if (array_key_exists("InstanceTextParam",$param) and $param["InstanceTextParam"] !== null) {
            $this->InstanceTextParam = [];
            foreach ($param["InstanceTextParam"] as $key => $value){
                $obj = new InstanceTextParam();
                $obj->deserialize($value);
                array_push($this->InstanceTextParam, $obj);
            }
        }

        if (array_key_exists("InstanceMultiParam",$param) and $param["InstanceMultiParam"] !== null) {
            $this->InstanceMultiParam = [];
            foreach ($param["InstanceMultiParam"] as $key => $value){
                $obj = new InstanceMultiParam();
                $obj->deserialize($value);
                array_push($this->InstanceMultiParam, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
