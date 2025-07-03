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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 渠道合作ios源码混淆加固结果
 *
 * @method string getResultId() 获取加固任务结果Id
 * @method void setResultId(string $ResultId) 设置加固任务结果Id
 * @method integer getOpUin() 获取用户uid
 * @method void setOpUin(integer $OpUin) 设置用户uid
 * @method string getEncryptType() 获取加固类型，这里为ios
 * @method void setEncryptType(string $EncryptType) 设置加固类型，这里为ios
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method integer getEncryptState() 获取加固状态：0等待，1成功，2任务中，3失败，4重试中
 * @method void setEncryptState(integer $EncryptState) 设置加固状态：0等待，1成功，2任务中，3失败，4重试中
 * @method integer getEncryptErrno() 获取业务错误码
 * @method void setEncryptErrno(integer $EncryptErrno) 设置业务错误码
 * @method string getEncryptErrDesc() 获取业务错误信息
 * @method void setEncryptErrDesc(string $EncryptErrDesc) 设置业务错误信息
 * @method string getCreatTime() 获取创建时间
 * @method void setCreatTime(string $CreatTime) 设置创建时间
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getCostTime() 获取消耗时间
 * @method void setCostTime(integer $CostTime) 设置消耗时间
 * @method string getEncryptPkgUrl() 获取加固（混淆）包结果url
 * @method void setEncryptPkgUrl(string $EncryptPkgUrl) 设置加固（混淆）包结果url
 */
class IOSResult extends AbstractModel
{
    /**
     * @var string 加固任务结果Id
     */
    public $ResultId;

    /**
     * @var integer 用户uid
     */
    public $OpUin;

    /**
     * @var string 加固类型，这里为ios
     */
    public $EncryptType;

    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var integer 加固状态：0等待，1成功，2任务中，3失败，4重试中
     */
    public $EncryptState;

    /**
     * @var integer 业务错误码
     */
    public $EncryptErrno;

    /**
     * @var string 业务错误信息
     */
    public $EncryptErrDesc;

    /**
     * @var string 创建时间
     */
    public $CreatTime;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 消耗时间
     */
    public $CostTime;

    /**
     * @var string 加固（混淆）包结果url
     */
    public $EncryptPkgUrl;

    /**
     * @param string $ResultId 加固任务结果Id
     * @param integer $OpUin 用户uid
     * @param string $EncryptType 加固类型，这里为ios
     * @param string $ResourceId 资源id
     * @param integer $EncryptState 加固状态：0等待，1成功，2任务中，3失败，4重试中
     * @param integer $EncryptErrno 业务错误码
     * @param string $EncryptErrDesc 业务错误信息
     * @param string $CreatTime 创建时间
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $CostTime 消耗时间
     * @param string $EncryptPkgUrl 加固（混淆）包结果url
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
        if (array_key_exists("ResultId",$param) and $param["ResultId"] !== null) {
            $this->ResultId = $param["ResultId"];
        }

        if (array_key_exists("OpUin",$param) and $param["OpUin"] !== null) {
            $this->OpUin = $param["OpUin"];
        }

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("EncryptState",$param) and $param["EncryptState"] !== null) {
            $this->EncryptState = $param["EncryptState"];
        }

        if (array_key_exists("EncryptErrno",$param) and $param["EncryptErrno"] !== null) {
            $this->EncryptErrno = $param["EncryptErrno"];
        }

        if (array_key_exists("EncryptErrDesc",$param) and $param["EncryptErrDesc"] !== null) {
            $this->EncryptErrDesc = $param["EncryptErrDesc"];
        }

        if (array_key_exists("CreatTime",$param) and $param["CreatTime"] !== null) {
            $this->CreatTime = $param["CreatTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("EncryptPkgUrl",$param) and $param["EncryptPkgUrl"] !== null) {
            $this->EncryptPkgUrl = $param["EncryptPkgUrl"];
        }
    }
}
