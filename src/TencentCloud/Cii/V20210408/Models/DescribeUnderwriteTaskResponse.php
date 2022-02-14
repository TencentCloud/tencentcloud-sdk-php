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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUnderwriteTask返回参数结构体
 *
 * @method string getUin() 获取腾讯云主账号ID
 * @method void setUin(string $Uin) 设置腾讯云主账号ID
 * @method string getSubAccountUin() 获取操作人子账户ID
 * @method void setSubAccountUin(string $SubAccountUin) 设置操作人子账户ID
 * @method string getPolicyId() 获取保单ID
 * @method void setPolicyId(string $PolicyId) 设置保单ID
 * @method string getMainTaskId() 获取主任务ID
 * @method void setMainTaskId(string $MainTaskId) 设置主任务ID
 * @method string getUnderwriteTaskId() 获取核保任务ID
 * @method void setUnderwriteTaskId(string $UnderwriteTaskId) 设置核保任务ID
 * @method integer getStatus() 获取结果状态：
0：返回成功
1：结果未生成
2：结果生成失败
 * @method void setStatus(integer $Status) 设置结果状态：
0：返回成功
1：结果未生成
2：结果生成失败
 * @method array getUnderwriteResults() 获取核保结果
 * @method void setUnderwriteResults(array $UnderwriteResults) 设置核保结果
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUnderwriteTaskResponse extends AbstractModel
{
    /**
     * @var string 腾讯云主账号ID
     */
    public $Uin;

    /**
     * @var string 操作人子账户ID
     */
    public $SubAccountUin;

    /**
     * @var string 保单ID
     */
    public $PolicyId;

    /**
     * @var string 主任务ID
     */
    public $MainTaskId;

    /**
     * @var string 核保任务ID
     */
    public $UnderwriteTaskId;

    /**
     * @var integer 结果状态：
0：返回成功
1：结果未生成
2：结果生成失败
     */
    public $Status;

    /**
     * @var array 核保结果
     */
    public $UnderwriteResults;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Uin 腾讯云主账号ID
     * @param string $SubAccountUin 操作人子账户ID
     * @param string $PolicyId 保单ID
     * @param string $MainTaskId 主任务ID
     * @param string $UnderwriteTaskId 核保任务ID
     * @param integer $Status 结果状态：
0：返回成功
1：结果未生成
2：结果生成失败
     * @param array $UnderwriteResults 核保结果
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("MainTaskId",$param) and $param["MainTaskId"] !== null) {
            $this->MainTaskId = $param["MainTaskId"];
        }

        if (array_key_exists("UnderwriteTaskId",$param) and $param["UnderwriteTaskId"] !== null) {
            $this->UnderwriteTaskId = $param["UnderwriteTaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UnderwriteResults",$param) and $param["UnderwriteResults"] !== null) {
            $this->UnderwriteResults = [];
            foreach ($param["UnderwriteResults"] as $key => $value){
                $obj = new UnderwriteOutput();
                $obj->deserialize($value);
                array_push($this->UnderwriteResults, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
