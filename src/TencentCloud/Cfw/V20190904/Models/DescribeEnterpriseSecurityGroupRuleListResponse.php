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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEnterpriseSecurityGroupRuleList返回参数结构体
 *
 * @method integer getTotal() 获取查询结果总数
 * @method void setTotal(integer $Total) 设置查询结果总数
 * @method integer getAllTotal() 获取规则总数
 * @method void setAllTotal(integer $AllTotal) 设置规则总数
 * @method array getData() 获取规则列表
 * @method void setData(array $Data) 设置规则列表
 * @method integer getEnable() 获取规则列表整体启用状态 
取值范围 0/1/2
0.表示没有启用的(可以批量启用)  
1.表示没有禁用的(可以批量禁用)    
2 表示混合情况（不可批量操作）
 * @method void setEnable(integer $Enable) 设置规则列表整体启用状态 
取值范围 0/1/2
0.表示没有启用的(可以批量启用)  
1.表示没有禁用的(可以批量禁用)    
2 表示混合情况（不可批量操作）
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEnterpriseSecurityGroupRuleListResponse extends AbstractModel
{
    /**
     * @var integer 查询结果总数
     */
    public $Total;

    /**
     * @var integer 规则总数
     */
    public $AllTotal;

    /**
     * @var array 规则列表
     */
    public $Data;

    /**
     * @var integer 规则列表整体启用状态 
取值范围 0/1/2
0.表示没有启用的(可以批量启用)  
1.表示没有禁用的(可以批量禁用)    
2 表示混合情况（不可批量操作）
     */
    public $Enable;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 查询结果总数
     * @param integer $AllTotal 规则总数
     * @param array $Data 规则列表
     * @param integer $Enable 规则列表整体启用状态 
取值范围 0/1/2
0.表示没有启用的(可以批量启用)  
1.表示没有禁用的(可以批量禁用)    
2 表示混合情况（不可批量操作）
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("AllTotal",$param) and $param["AllTotal"] !== null) {
            $this->AllTotal = $param["AllTotal"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new EnterpriseSecurityGroupRuleRuleInfo();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
