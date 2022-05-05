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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOverviewIndex返回参数结构体
 *
 * @method integer getAllIpCount() 获取IP总数
 * @method void setAllIpCount(integer $AllIpCount) 设置IP总数
 * @method integer getAntiddosIpCount() 获取高防IP总数（包含高防包+高防IP）
 * @method void setAntiddosIpCount(integer $AntiddosIpCount) 设置高防IP总数（包含高防包+高防IP）
 * @method integer getAttackIpCount() 获取攻击IP总数
 * @method void setAttackIpCount(integer $AttackIpCount) 设置攻击IP总数
 * @method integer getBlockIpCount() 获取封堵IP总数
 * @method void setBlockIpCount(integer $BlockIpCount) 设置封堵IP总数
 * @method integer getAntiddosDomainCount() 获取高防域名总数
 * @method void setAntiddosDomainCount(integer $AntiddosDomainCount) 设置高防域名总数
 * @method integer getAttackDomainCount() 获取攻击域名总数
 * @method void setAttackDomainCount(integer $AttackDomainCount) 设置攻击域名总数
 * @method integer getMaxAttackFlow() 获取攻击流量峰值
 * @method void setMaxAttackFlow(integer $MaxAttackFlow) 设置攻击流量峰值
 * @method string getNewAttackTime() 获取当前最近一条攻击中的起始时间
 * @method void setNewAttackTime(string $NewAttackTime) 设置当前最近一条攻击中的起始时间
 * @method string getNewAttackIp() 获取当前最近一条攻击中的IP
 * @method void setNewAttackIp(string $NewAttackIp) 设置当前最近一条攻击中的IP
 * @method string getNewAttackType() 获取当前最近一条攻击中的攻击类型
 * @method void setNewAttackType(string $NewAttackType) 设置当前最近一条攻击中的攻击类型
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOverviewIndexResponse extends AbstractModel
{
    /**
     * @var integer IP总数
     */
    public $AllIpCount;

    /**
     * @var integer 高防IP总数（包含高防包+高防IP）
     */
    public $AntiddosIpCount;

    /**
     * @var integer 攻击IP总数
     */
    public $AttackIpCount;

    /**
     * @var integer 封堵IP总数
     */
    public $BlockIpCount;

    /**
     * @var integer 高防域名总数
     */
    public $AntiddosDomainCount;

    /**
     * @var integer 攻击域名总数
     */
    public $AttackDomainCount;

    /**
     * @var integer 攻击流量峰值
     */
    public $MaxAttackFlow;

    /**
     * @var string 当前最近一条攻击中的起始时间
     */
    public $NewAttackTime;

    /**
     * @var string 当前最近一条攻击中的IP
     */
    public $NewAttackIp;

    /**
     * @var string 当前最近一条攻击中的攻击类型
     */
    public $NewAttackType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AllIpCount IP总数
     * @param integer $AntiddosIpCount 高防IP总数（包含高防包+高防IP）
     * @param integer $AttackIpCount 攻击IP总数
     * @param integer $BlockIpCount 封堵IP总数
     * @param integer $AntiddosDomainCount 高防域名总数
     * @param integer $AttackDomainCount 攻击域名总数
     * @param integer $MaxAttackFlow 攻击流量峰值
     * @param string $NewAttackTime 当前最近一条攻击中的起始时间
     * @param string $NewAttackIp 当前最近一条攻击中的IP
     * @param string $NewAttackType 当前最近一条攻击中的攻击类型
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
        if (array_key_exists("AllIpCount",$param) and $param["AllIpCount"] !== null) {
            $this->AllIpCount = $param["AllIpCount"];
        }

        if (array_key_exists("AntiddosIpCount",$param) and $param["AntiddosIpCount"] !== null) {
            $this->AntiddosIpCount = $param["AntiddosIpCount"];
        }

        if (array_key_exists("AttackIpCount",$param) and $param["AttackIpCount"] !== null) {
            $this->AttackIpCount = $param["AttackIpCount"];
        }

        if (array_key_exists("BlockIpCount",$param) and $param["BlockIpCount"] !== null) {
            $this->BlockIpCount = $param["BlockIpCount"];
        }

        if (array_key_exists("AntiddosDomainCount",$param) and $param["AntiddosDomainCount"] !== null) {
            $this->AntiddosDomainCount = $param["AntiddosDomainCount"];
        }

        if (array_key_exists("AttackDomainCount",$param) and $param["AttackDomainCount"] !== null) {
            $this->AttackDomainCount = $param["AttackDomainCount"];
        }

        if (array_key_exists("MaxAttackFlow",$param) and $param["MaxAttackFlow"] !== null) {
            $this->MaxAttackFlow = $param["MaxAttackFlow"];
        }

        if (array_key_exists("NewAttackTime",$param) and $param["NewAttackTime"] !== null) {
            $this->NewAttackTime = $param["NewAttackTime"];
        }

        if (array_key_exists("NewAttackIp",$param) and $param["NewAttackIp"] !== null) {
            $this->NewAttackIp = $param["NewAttackIp"];
        }

        if (array_key_exists("NewAttackType",$param) and $param["NewAttackType"] !== null) {
            $this->NewAttackType = $param["NewAttackType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
