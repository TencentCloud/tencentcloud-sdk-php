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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户请求入参
 *
 * @method string getUserData() 获取业务参数加密后的签名值
 * @method void setUserData(string $UserData) 设置业务参数加密后的签名值
 * @method integer getApplyDate() 获取调用时间戳，精确到秒
 * @method void setApplyDate(integer $ApplyDate) 设置调用时间戳，精确到秒
 * @method string getUserId() 获取客户业务侧标识用户的唯一ID
 * @method void setUserId(string $UserId) 设置客户业务侧标识用户的唯一ID
 */
class InputDescribeRiskModelData extends AbstractModel
{
    /**
     * @var string 业务参数加密后的签名值
     */
    public $UserData;

    /**
     * @var integer 调用时间戳，精确到秒
     */
    public $ApplyDate;

    /**
     * @var string 客户业务侧标识用户的唯一ID
     */
    public $UserId;

    /**
     * @param string $UserData 业务参数加密后的签名值
     * @param integer $ApplyDate 调用时间戳，精确到秒
     * @param string $UserId 客户业务侧标识用户的唯一ID
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
        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("ApplyDate",$param) and $param["ApplyDate"] !== null) {
            $this->ApplyDate = $param["ApplyDate"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
