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
 * DescribeDevices请求参数结构体
 *
 * @method array getIdSet() 获取主机ID集合，非必需
 * @method void setIdSet(array $IdSet) 设置主机ID集合，非必需
 * @method string getName() 获取主机名或主机IP，模糊查询
 * @method void setName(string $Name) 设置主机名或主机IP，模糊查询
 * @method string getIp() 获取暂未使用
 * @method void setIp(string $Ip) 设置暂未使用
 * @method array getApCodeSet() 获取地域码集合
 * @method void setApCodeSet(array $ApCodeSet) 设置地域码集合
 * @method integer getKind() 获取操作系统类型
 * @method void setKind(integer $Kind) 设置操作系统类型
 * @method integer getOffset() 获取分页，偏移位置
 * @method void setOffset(integer $Offset) 设置分页，偏移位置
 * @method integer getLimit() 获取每页条目数量，默认20
 * @method void setLimit(integer $Limit) 设置每页条目数量，默认20
 * @method array getAuthorizedUserIdSet() 获取有该主机访问权限的用户ID集合
 * @method void setAuthorizedUserIdSet(array $AuthorizedUserIdSet) 设置有该主机访问权限的用户ID集合
 * @method array getResourceIdSet() 获取过滤条件，主机绑定的堡垒机服务ID集合
 * @method void setResourceIdSet(array $ResourceIdSet) 设置过滤条件，主机绑定的堡垒机服务ID集合
 * @method array getKindSet() 获取可提供按照多种类型过滤, 1-Linux, 2-Windows, 3-MySQL
 * @method void setKindSet(array $KindSet) 设置可提供按照多种类型过滤, 1-Linux, 2-Windows, 3-MySQL
 */
class DescribeDevicesRequest extends AbstractModel
{
    /**
     * @var array 主机ID集合，非必需
     */
    public $IdSet;

    /**
     * @var string 主机名或主机IP，模糊查询
     */
    public $Name;

    /**
     * @var string 暂未使用
     */
    public $Ip;

    /**
     * @var array 地域码集合
     */
    public $ApCodeSet;

    /**
     * @var integer 操作系统类型
     */
    public $Kind;

    /**
     * @var integer 分页，偏移位置
     */
    public $Offset;

    /**
     * @var integer 每页条目数量，默认20
     */
    public $Limit;

    /**
     * @var array 有该主机访问权限的用户ID集合
     */
    public $AuthorizedUserIdSet;

    /**
     * @var array 过滤条件，主机绑定的堡垒机服务ID集合
     */
    public $ResourceIdSet;

    /**
     * @var array 可提供按照多种类型过滤, 1-Linux, 2-Windows, 3-MySQL
     */
    public $KindSet;

    /**
     * @param array $IdSet 主机ID集合，非必需
     * @param string $Name 主机名或主机IP，模糊查询
     * @param string $Ip 暂未使用
     * @param array $ApCodeSet 地域码集合
     * @param integer $Kind 操作系统类型
     * @param integer $Offset 分页，偏移位置
     * @param integer $Limit 每页条目数量，默认20
     * @param array $AuthorizedUserIdSet 有该主机访问权限的用户ID集合
     * @param array $ResourceIdSet 过滤条件，主机绑定的堡垒机服务ID集合
     * @param array $KindSet 可提供按照多种类型过滤, 1-Linux, 2-Windows, 3-MySQL
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

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ApCodeSet",$param) and $param["ApCodeSet"] !== null) {
            $this->ApCodeSet = $param["ApCodeSet"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AuthorizedUserIdSet",$param) and $param["AuthorizedUserIdSet"] !== null) {
            $this->AuthorizedUserIdSet = $param["AuthorizedUserIdSet"];
        }

        if (array_key_exists("ResourceIdSet",$param) and $param["ResourceIdSet"] !== null) {
            $this->ResourceIdSet = $param["ResourceIdSet"];
        }

        if (array_key_exists("KindSet",$param) and $param["KindSet"] !== null) {
            $this->KindSet = $param["KindSet"];
        }
    }
}
