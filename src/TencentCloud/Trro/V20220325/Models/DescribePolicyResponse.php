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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePolicy返回参数结构体
 *
 * @method string getPolicyMode() 获取权限模式
 * @method void setPolicyMode(string $PolicyMode) 设置权限模式
 * @method boolean getPolicyEnabled() 获取返回的权限模式是否为当前生效的权限模式
 * @method void setPolicyEnabled(boolean $PolicyEnabled) 设置返回的权限模式是否为当前生效的权限模式
 * @method array getPolicyInfo() 获取权限信息列表
 * @method void setPolicyInfo(array $PolicyInfo) 设置权限信息列表
 * @method integer getNum() 获取本次返回的权限信息数量
 * @method void setNum(integer $Num) 设置本次返回的权限信息数量
 * @method integer getTotal() 获取权限信息总数
 * @method void setTotal(integer $Total) 设置权限信息总数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePolicyResponse extends AbstractModel
{
    /**
     * @var string 权限模式
     */
    public $PolicyMode;

    /**
     * @var boolean 返回的权限模式是否为当前生效的权限模式
     */
    public $PolicyEnabled;

    /**
     * @var array 权限信息列表
     */
    public $PolicyInfo;

    /**
     * @var integer 本次返回的权限信息数量
     */
    public $Num;

    /**
     * @var integer 权限信息总数
     */
    public $Total;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PolicyMode 权限模式
     * @param boolean $PolicyEnabled 返回的权限模式是否为当前生效的权限模式
     * @param array $PolicyInfo 权限信息列表
     * @param integer $Num 本次返回的权限信息数量
     * @param integer $Total 权限信息总数
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
        if (array_key_exists("PolicyMode",$param) and $param["PolicyMode"] !== null) {
            $this->PolicyMode = $param["PolicyMode"];
        }

        if (array_key_exists("PolicyEnabled",$param) and $param["PolicyEnabled"] !== null) {
            $this->PolicyEnabled = $param["PolicyEnabled"];
        }

        if (array_key_exists("PolicyInfo",$param) and $param["PolicyInfo"] !== null) {
            $this->PolicyInfo = [];
            foreach ($param["PolicyInfo"] as $key => $value){
                $obj = new PolicyInfo();
                $obj->deserialize($value);
                array_push($this->PolicyInfo, $obj);
            }
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
