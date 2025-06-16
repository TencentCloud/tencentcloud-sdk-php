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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopAttackInfo请求参数结构体
 *
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getQueryType() 获取1:攻击类型 2:攻击者
 * @method void setQueryType(integer $QueryType) 设置1:攻击类型 2:攻击者
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method array getOperatedMemberId() 获取被调用的集团账号的成员id
 * @method void setOperatedMemberId(array $OperatedMemberId) 设置被调用的集团账号的成员id
 * @method string getAssetName() 获取资产名称
 * @method void setAssetName(string $AssetName) 设置资产名称
 * @method integer getAssetType() 获取0: 默认全部 1:资产ID 2:域名
 * @method void setAssetType(integer $AssetType) 设置0: 默认全部 1:资产ID 2:域名
 */
class DescribeTopAttackInfoRequest extends AbstractModel
{
    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 1:攻击类型 2:攻击者
     */
    public $QueryType;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var array 被调用的集团账号的成员id
     */
    public $OperatedMemberId;

    /**
     * @var string 资产名称
     */
    public $AssetName;

    /**
     * @var integer 0: 默认全部 1:资产ID 2:域名
     */
    public $AssetType;

    /**
     * @param string $StartTime 起始时间
     * @param string $EndTime 结束时间
     * @param integer $QueryType 1:攻击类型 2:攻击者
     * @param array $MemberId 集团账号的成员id
     * @param array $OperatedMemberId 被调用的集团账号的成员id
     * @param string $AssetName 资产名称
     * @param integer $AssetType 0: 默认全部 1:资产ID 2:域名
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("OperatedMemberId",$param) and $param["OperatedMemberId"] !== null) {
            $this->OperatedMemberId = $param["OperatedMemberId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}
