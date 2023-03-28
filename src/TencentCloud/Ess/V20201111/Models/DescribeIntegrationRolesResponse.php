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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIntegrationRoles返回参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认为0，最大为2000
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0，最大为2000
 * @method integer getLimit() 获取返回最大数量，最大为200
 * @method void setLimit(integer $Limit) 设置返回最大数量，最大为200
 * @method integer getTotalCount() 获取符合查询条件的总的角色数
 * @method void setTotalCount(integer $TotalCount) 设置符合查询条件的总的角色数
 * @method array getIntegrateRoles() 获取企业角色信息列表
 * @method void setIntegrateRoles(array $IntegrateRoles) 设置企业角色信息列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIntegrationRolesResponse extends AbstractModel
{
    /**
     * @var integer 偏移量，默认为0，最大为2000
     */
    public $Offset;

    /**
     * @var integer 返回最大数量，最大为200
     */
    public $Limit;

    /**
     * @var integer 符合查询条件的总的角色数
     */
    public $TotalCount;

    /**
     * @var array 企业角色信息列表
     */
    public $IntegrateRoles;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Offset 偏移量，默认为0，最大为2000
     * @param integer $Limit 返回最大数量，最大为200
     * @param integer $TotalCount 符合查询条件的总的角色数
     * @param array $IntegrateRoles 企业角色信息列表
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("IntegrateRoles",$param) and $param["IntegrateRoles"] !== null) {
            $this->IntegrateRoles = [];
            foreach ($param["IntegrateRoles"] as $key => $value){
                $obj = new IntegrateRole();
                $obj->deserialize($value);
                array_push($this->IntegrateRoles, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
