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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAttackOverview返回参数结构体
 *
 * @method integer getAccessCount() 获取访问请求总数
 * @method void setAccessCount(integer $AccessCount) 设置访问请求总数
 * @method integer getAttackCount() 获取Web攻击总数
 * @method void setAttackCount(integer $AttackCount) 设置Web攻击总数
 * @method integer getACLCount() 获取访问控制总数
 * @method void setACLCount(integer $ACLCount) 设置访问控制总数
 * @method integer getCCCount() 获取CC攻击总数
 * @method void setCCCount(integer $CCCount) 设置CC攻击总数
 * @method integer getBotCount() 获取Bot攻击总数
 * @method void setBotCount(integer $BotCount) 设置Bot攻击总数
 * @method integer getApiAssetsCount() 获取api资产总数
 * @method void setApiAssetsCount(integer $ApiAssetsCount) 设置api资产总数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAttackOverviewResponse extends AbstractModel
{
    /**
     * @var integer 访问请求总数
     */
    public $AccessCount;

    /**
     * @var integer Web攻击总数
     */
    public $AttackCount;

    /**
     * @var integer 访问控制总数
     */
    public $ACLCount;

    /**
     * @var integer CC攻击总数
     */
    public $CCCount;

    /**
     * @var integer Bot攻击总数
     */
    public $BotCount;

    /**
     * @var integer api资产总数
     */
    public $ApiAssetsCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AccessCount 访问请求总数
     * @param integer $AttackCount Web攻击总数
     * @param integer $ACLCount 访问控制总数
     * @param integer $CCCount CC攻击总数
     * @param integer $BotCount Bot攻击总数
     * @param integer $ApiAssetsCount api资产总数
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
        if (array_key_exists("AccessCount",$param) and $param["AccessCount"] !== null) {
            $this->AccessCount = $param["AccessCount"];
        }

        if (array_key_exists("AttackCount",$param) and $param["AttackCount"] !== null) {
            $this->AttackCount = $param["AttackCount"];
        }

        if (array_key_exists("ACLCount",$param) and $param["ACLCount"] !== null) {
            $this->ACLCount = $param["ACLCount"];
        }

        if (array_key_exists("CCCount",$param) and $param["CCCount"] !== null) {
            $this->CCCount = $param["CCCount"];
        }

        if (array_key_exists("BotCount",$param) and $param["BotCount"] !== null) {
            $this->BotCount = $param["BotCount"];
        }

        if (array_key_exists("ApiAssetsCount",$param) and $param["ApiAssetsCount"] !== null) {
            $this->ApiAssetsCount = $param["ApiAssetsCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
