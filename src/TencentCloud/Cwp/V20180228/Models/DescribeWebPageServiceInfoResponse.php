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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWebPageServiceInfo返回参数结构体
 *
 * @method boolean getStatus() 获取是否已购服务：true-是，false-否
 * @method void setStatus(boolean $Status) 设置是否已购服务：true-是，false-否
 * @method integer getUsedNum() 获取已使用授权数
 * @method void setUsedNum(integer $UsedNum) 设置已使用授权数
 * @method integer getResidueNum() 获取剩余授权数
 * @method void setResidueNum(integer $ResidueNum) 设置剩余授权数
 * @method integer getBuyNum() 获取已购授权数
 * @method void setBuyNum(integer $BuyNum) 设置已购授权数
 * @method integer getExpireNum() 获取临近到期数量
 * @method void setExpireNum(integer $ExpireNum) 设置临近到期数量
 * @method array getAllAuthorizedMachines() 获取所有授权机器信息
 * @method void setAllAuthorizedMachines(array $AllAuthorizedMachines) 设置所有授权机器信息
 * @method array getExpireAuthorizedMachines() 获取临近到期授权机器信息
 * @method void setExpireAuthorizedMachines(array $ExpireAuthorizedMachines) 设置临近到期授权机器信息
 * @method integer getExpiredNum() 获取已过期授权数
 * @method void setExpiredNum(integer $ExpiredNum) 设置已过期授权数
 * @method integer getProtectDirNum() 获取防护目录数
 * @method void setProtectDirNum(integer $ProtectDirNum) 设置防护目录数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWebPageServiceInfoResponse extends AbstractModel
{
    /**
     * @var boolean 是否已购服务：true-是，false-否
     */
    public $Status;

    /**
     * @var integer 已使用授权数
     */
    public $UsedNum;

    /**
     * @var integer 剩余授权数
     */
    public $ResidueNum;

    /**
     * @var integer 已购授权数
     */
    public $BuyNum;

    /**
     * @var integer 临近到期数量
     */
    public $ExpireNum;

    /**
     * @var array 所有授权机器信息
     */
    public $AllAuthorizedMachines;

    /**
     * @var array 临近到期授权机器信息
     */
    public $ExpireAuthorizedMachines;

    /**
     * @var integer 已过期授权数
     */
    public $ExpiredNum;

    /**
     * @var integer 防护目录数
     */
    public $ProtectDirNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Status 是否已购服务：true-是，false-否
     * @param integer $UsedNum 已使用授权数
     * @param integer $ResidueNum 剩余授权数
     * @param integer $BuyNum 已购授权数
     * @param integer $ExpireNum 临近到期数量
     * @param array $AllAuthorizedMachines 所有授权机器信息
     * @param array $ExpireAuthorizedMachines 临近到期授权机器信息
     * @param integer $ExpiredNum 已过期授权数
     * @param integer $ProtectDirNum 防护目录数
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UsedNum",$param) and $param["UsedNum"] !== null) {
            $this->UsedNum = $param["UsedNum"];
        }

        if (array_key_exists("ResidueNum",$param) and $param["ResidueNum"] !== null) {
            $this->ResidueNum = $param["ResidueNum"];
        }

        if (array_key_exists("BuyNum",$param) and $param["BuyNum"] !== null) {
            $this->BuyNum = $param["BuyNum"];
        }

        if (array_key_exists("ExpireNum",$param) and $param["ExpireNum"] !== null) {
            $this->ExpireNum = $param["ExpireNum"];
        }

        if (array_key_exists("AllAuthorizedMachines",$param) and $param["AllAuthorizedMachines"] !== null) {
            $this->AllAuthorizedMachines = [];
            foreach ($param["AllAuthorizedMachines"] as $key => $value){
                $obj = new ProtectMachineInfo();
                $obj->deserialize($value);
                array_push($this->AllAuthorizedMachines, $obj);
            }
        }

        if (array_key_exists("ExpireAuthorizedMachines",$param) and $param["ExpireAuthorizedMachines"] !== null) {
            $this->ExpireAuthorizedMachines = [];
            foreach ($param["ExpireAuthorizedMachines"] as $key => $value){
                $obj = new ProtectMachine();
                $obj->deserialize($value);
                array_push($this->ExpireAuthorizedMachines, $obj);
            }
        }

        if (array_key_exists("ExpiredNum",$param) and $param["ExpiredNum"] !== null) {
            $this->ExpiredNum = $param["ExpiredNum"];
        }

        if (array_key_exists("ProtectDirNum",$param) and $param["ProtectDirNum"] !== null) {
            $this->ProtectDirNum = $param["ProtectDirNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
