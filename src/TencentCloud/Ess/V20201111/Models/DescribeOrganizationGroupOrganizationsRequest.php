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
 * DescribeOrganizationGroupOrganizations请求参数结构体
 *
 * @method UserInfo getOperator() 获取操作人信息，userId必填
 * @method void setOperator(UserInfo $Operator) 设置操作人信息，userId必填
 * @method integer getLimit() 获取单次查询成员企业最大返回数量
 * @method void setLimit(integer $Limit) 设置单次查询成员企业最大返回数量
 * @method integer getOffset() 获取页面偏移量
 * @method void setOffset(integer $Offset) 设置页面偏移量
 * @method string getName() 获取查询成员企业的企业名，模糊匹配
 * @method void setName(string $Name) 设置查询成员企业的企业名，模糊匹配
 * @method integer getStatus() 获取成员企业加入集团的当前状态:1-待授权;2-已授权待激活;3-拒绝授权;4-已解除;5-已加入
 * @method void setStatus(integer $Status) 设置成员企业加入集团的当前状态:1-待授权;2-已授权待激活;3-拒绝授权;4-已解除;5-已加入
 * @method boolean getExport() 获取是否到处当前成员企业数据
 * @method void setExport(boolean $Export) 设置是否到处当前成员企业数据
 * @method string getId() 获取成员企业id
 * @method void setId(string $Id) 设置成员企业id
 */
class DescribeOrganizationGroupOrganizationsRequest extends AbstractModel
{
    /**
     * @var UserInfo 操作人信息，userId必填
     */
    public $Operator;

    /**
     * @var integer 单次查询成员企业最大返回数量
     */
    public $Limit;

    /**
     * @var integer 页面偏移量
     */
    public $Offset;

    /**
     * @var string 查询成员企业的企业名，模糊匹配
     */
    public $Name;

    /**
     * @var integer 成员企业加入集团的当前状态:1-待授权;2-已授权待激活;3-拒绝授权;4-已解除;5-已加入
     */
    public $Status;

    /**
     * @var boolean 是否到处当前成员企业数据
     */
    public $Export;

    /**
     * @var string 成员企业id
     */
    public $Id;

    /**
     * @param UserInfo $Operator 操作人信息，userId必填
     * @param integer $Limit 单次查询成员企业最大返回数量
     * @param integer $Offset 页面偏移量
     * @param string $Name 查询成员企业的企业名，模糊匹配
     * @param integer $Status 成员企业加入集团的当前状态:1-待授权;2-已授权待激活;3-拒绝授权;4-已解除;5-已加入
     * @param boolean $Export 是否到处当前成员企业数据
     * @param string $Id 成员企业id
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Export",$param) and $param["Export"] !== null) {
            $this->Export = $param["Export"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
