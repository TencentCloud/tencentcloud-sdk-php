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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAcls请求参数结构体
 *
 * @method array getIdSet() 获取访问权限ID集合，非必需
 * @method void setIdSet(array $IdSet) 设置访问权限ID集合，非必需
 * @method string getName() 获取访问权限名称，模糊查询，最长64字符
 * @method void setName(string $Name) 设置访问权限名称，模糊查询，最长64字符
 * @method integer getOffset() 获取分页，偏移位置
 * @method void setOffset(integer $Offset) 设置分页，偏移位置
 * @method integer getLimit() 获取每页条目数量，默认20
 * @method void setLimit(integer $Limit) 设置每页条目数量，默认20
 * @method boolean getExact() 获取是否根据Name进行精确查询,默认值false
 * @method void setExact(boolean $Exact) 设置是否根据Name进行精确查询,默认值false
 * @method array getAuthorizedUserIdSet() 获取有权限的用户ID集合
 * @method void setAuthorizedUserIdSet(array $AuthorizedUserIdSet) 设置有权限的用户ID集合
 * @method array getAuthorizedDeviceIdSet() 获取有权限的主机ID集合
 * @method void setAuthorizedDeviceIdSet(array $AuthorizedDeviceIdSet) 设置有权限的主机ID集合
 * @method integer getStatus() 获取策略状态，0-不限，1-已生效，2-未生效，3-已过期
 * @method void setStatus(integer $Status) 设置策略状态，0-不限，1-已生效，2-未生效，3-已过期
 */
class DescribeAclsRequest extends AbstractModel
{
    /**
     * @var array 访问权限ID集合，非必需
     */
    public $IdSet;

    /**
     * @var string 访问权限名称，模糊查询，最长64字符
     */
    public $Name;

    /**
     * @var integer 分页，偏移位置
     */
    public $Offset;

    /**
     * @var integer 每页条目数量，默认20
     */
    public $Limit;

    /**
     * @var boolean 是否根据Name进行精确查询,默认值false
     */
    public $Exact;

    /**
     * @var array 有权限的用户ID集合
     */
    public $AuthorizedUserIdSet;

    /**
     * @var array 有权限的主机ID集合
     */
    public $AuthorizedDeviceIdSet;

    /**
     * @var integer 策略状态，0-不限，1-已生效，2-未生效，3-已过期
     */
    public $Status;

    /**
     * @param array $IdSet 访问权限ID集合，非必需
     * @param string $Name 访问权限名称，模糊查询，最长64字符
     * @param integer $Offset 分页，偏移位置
     * @param integer $Limit 每页条目数量，默认20
     * @param boolean $Exact 是否根据Name进行精确查询,默认值false
     * @param array $AuthorizedUserIdSet 有权限的用户ID集合
     * @param array $AuthorizedDeviceIdSet 有权限的主机ID集合
     * @param integer $Status 策略状态，0-不限，1-已生效，2-未生效，3-已过期
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
        if (array_key_exists("IdSet",$param) and $param["IdSet"] !== null) {
            $this->IdSet = $param["IdSet"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Exact",$param) and $param["Exact"] !== null) {
            $this->Exact = $param["Exact"];
        }

        if (array_key_exists("AuthorizedUserIdSet",$param) and $param["AuthorizedUserIdSet"] !== null) {
            $this->AuthorizedUserIdSet = $param["AuthorizedUserIdSet"];
        }

        if (array_key_exists("AuthorizedDeviceIdSet",$param) and $param["AuthorizedDeviceIdSet"] !== null) {
            $this->AuthorizedDeviceIdSet = $param["AuthorizedDeviceIdSet"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
