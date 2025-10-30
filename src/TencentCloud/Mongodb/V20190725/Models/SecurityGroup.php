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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组信息
 *
 * @method integer getProjectId() 获取所属项目 ID。
 * @method void setProjectId(integer $ProjectId) 设置所属项目 ID。
 * @method string getCreateTime() 获取安全组创建时间。
 * @method void setCreateTime(string $CreateTime) 设置安全组创建时间。
 * @method array getInbound() 获取安全组入站规则。
 * @method void setInbound(array $Inbound) 设置安全组入站规则。
 * @method array getOutbound() 获取安全组出站规则。
 * @method void setOutbound(array $Outbound) 设置安全组出站规则。
 * @method string getSecurityGroupId() 获取安全组 ID。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组 ID。
 * @method string getSecurityGroupName() 获取安全组名称。
 * @method void setSecurityGroupName(string $SecurityGroupName) 设置安全组名称。
 * @method string getSecurityGroupRemark() 获取安全组备注信息。
 * @method void setSecurityGroupRemark(string $SecurityGroupRemark) 设置安全组备注信息。
 */
class SecurityGroup extends AbstractModel
{
    /**
     * @var integer 所属项目 ID。
     */
    public $ProjectId;

    /**
     * @var string 安全组创建时间。
     */
    public $CreateTime;

    /**
     * @var array 安全组入站规则。
     */
    public $Inbound;

    /**
     * @var array 安全组出站规则。
     */
    public $Outbound;

    /**
     * @var string 安全组 ID。
     */
    public $SecurityGroupId;

    /**
     * @var string 安全组名称。
     */
    public $SecurityGroupName;

    /**
     * @var string 安全组备注信息。
     */
    public $SecurityGroupRemark;

    /**
     * @param integer $ProjectId 所属项目 ID。
     * @param string $CreateTime 安全组创建时间。
     * @param array $Inbound 安全组入站规则。
     * @param array $Outbound 安全组出站规则。
     * @param string $SecurityGroupId 安全组 ID。
     * @param string $SecurityGroupName 安全组名称。
     * @param string $SecurityGroupRemark 安全组备注信息。
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Inbound",$param) and $param["Inbound"] !== null) {
            $this->Inbound = [];
            foreach ($param["Inbound"] as $key => $value){
                $obj = new SecurityGroupBound();
                $obj->deserialize($value);
                array_push($this->Inbound, $obj);
            }
        }

        if (array_key_exists("Outbound",$param) and $param["Outbound"] !== null) {
            $this->Outbound = [];
            foreach ($param["Outbound"] as $key => $value){
                $obj = new SecurityGroupBound();
                $obj->deserialize($value);
                array_push($this->Outbound, $obj);
            }
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("SecurityGroupName",$param) and $param["SecurityGroupName"] !== null) {
            $this->SecurityGroupName = $param["SecurityGroupName"];
        }

        if (array_key_exists("SecurityGroupRemark",$param) and $param["SecurityGroupRemark"] !== null) {
            $this->SecurityGroupRemark = $param["SecurityGroupRemark"];
        }
    }
}
