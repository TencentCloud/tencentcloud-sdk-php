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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoles请求参数结构体
 *
 * @method string getRoleName() 获取角色名称，模糊查询
 * @method void setRoleName(string $RoleName) 设置角色名称，模糊查询
 * @method integer getOffset() 获取起始下标，不填默认为0。
 * @method void setOffset(integer $Offset) 设置起始下标，不填默认为0。
 * @method integer getLimit() 获取返回数量，不填则默认为10，最大值为20。
 * @method void setLimit(integer $Limit) 设置返回数量，不填则默认为10，最大值为20。
 * @method string getClusterId() 获取必填字段，集群Id
 * @method void setClusterId(string $ClusterId) 设置必填字段，集群Id
 * @method array getFilters() 获取* RoleName
按照角色名进行过滤，精确查询。
类型：String
必选：否
 * @method void setFilters(array $Filters) 设置* RoleName
按照角色名进行过滤，精确查询。
类型：String
必选：否
 */
class DescribeRolesRequest extends AbstractModel
{
    /**
     * @var string 角色名称，模糊查询
     */
    public $RoleName;

    /**
     * @var integer 起始下标，不填默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，不填则默认为10，最大值为20。
     */
    public $Limit;

    /**
     * @var string 必填字段，集群Id
     */
    public $ClusterId;

    /**
     * @var array * RoleName
按照角色名进行过滤，精确查询。
类型：String
必选：否
     */
    public $Filters;

    /**
     * @param string $RoleName 角色名称，模糊查询
     * @param integer $Offset 起始下标，不填默认为0。
     * @param integer $Limit 返回数量，不填则默认为10，最大值为20。
     * @param string $ClusterId 必填字段，集群Id
     * @param array $Filters * RoleName
按照角色名进行过滤，精确查询。
类型：String
必选：否
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
