<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组详情
 *
 * @method string getSecurityGroupId() 获取<p>安全组ID</p>
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置<p>安全组ID</p>
 * @method integer getProjectId() 获取<p>所属项目 ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>所属项目 ID</p>
 * @method string getCreateTime() 获取<p>安全组创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>安全组创建时间</p>
 * @method array getInbound() 获取<p>安全组入方向规则列表</p>
 * @method void setInbound(array $Inbound) 设置<p>安全组入方向规则列表</p>
 * @method array getOutbound() 获取<p>安全组出方向规则列表</p>
 * @method void setOutbound(array $Outbound) 设置<p>安全组出方向规则列表</p>
 * @method string getSecurityGroupName() 获取<p>安全组名称</p>
 * @method void setSecurityGroupName(string $SecurityGroupName) 设置<p>安全组名称</p>
 * @method string getSecurityGroupRemark() 获取<p>安全组备注说明</p>
 * @method void setSecurityGroupRemark(string $SecurityGroupRemark) 设置<p>安全组备注说明</p>
 */
class SecurityGroup extends AbstractModel
{
    /**
     * @var string <p>安全组ID</p>
     */
    public $SecurityGroupId;

    /**
     * @var integer <p>所属项目 ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>安全组创建时间</p>
     */
    public $CreateTime;

    /**
     * @var array <p>安全组入方向规则列表</p>
     */
    public $Inbound;

    /**
     * @var array <p>安全组出方向规则列表</p>
     */
    public $Outbound;

    /**
     * @var string <p>安全组名称</p>
     */
    public $SecurityGroupName;

    /**
     * @var string <p>安全组备注说明</p>
     */
    public $SecurityGroupRemark;

    /**
     * @param string $SecurityGroupId <p>安全组ID</p>
     * @param integer $ProjectId <p>所属项目 ID</p>
     * @param string $CreateTime <p>安全组创建时间</p>
     * @param array $Inbound <p>安全组入方向规则列表</p>
     * @param array $Outbound <p>安全组出方向规则列表</p>
     * @param string $SecurityGroupName <p>安全组名称</p>
     * @param string $SecurityGroupRemark <p>安全组备注说明</p>
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Inbound",$param) and $param["Inbound"] !== null) {
            $this->Inbound = [];
            foreach ($param["Inbound"] as $key => $value){
                $obj = new PolicyRule();
                $obj->deserialize($value);
                array_push($this->Inbound, $obj);
            }
        }

        if (array_key_exists("Outbound",$param) and $param["Outbound"] !== null) {
            $this->Outbound = [];
            foreach ($param["Outbound"] as $key => $value){
                $obj = new PolicyRule();
                $obj->deserialize($value);
                array_push($this->Outbound, $obj);
            }
        }

        if (array_key_exists("SecurityGroupName",$param) and $param["SecurityGroupName"] !== null) {
            $this->SecurityGroupName = $param["SecurityGroupName"];
        }

        if (array_key_exists("SecurityGroupRemark",$param) and $param["SecurityGroupRemark"] !== null) {
            $this->SecurityGroupRemark = $param["SecurityGroupRemark"];
        }
    }
}
